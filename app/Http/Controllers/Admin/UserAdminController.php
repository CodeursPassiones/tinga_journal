<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            // Récupération des filtres depuis la requête

            $search = $request->input('search');

            $sortOrder = $request->input('sort_order', 'asc'); // Par défaut ascendant
            $sortBy = $request->input('sort_by', 'firstname'); // Par défaut tri par titre
            $limit = $request->input('limit', 5); // Par défaut 6 articles par page
            $query = User::with(['roles']);
            if ($search) {
                // dd($search);
                $query->where('firstname', 'LIKE', '%'.$search.'%');
                $query->orWhere('lastname', 'LIKE', '%'.$search.'%');
                $query->orWhere('email', 'LIKE', '%'.$search.'%');
            }

            // Application du tri
            $query->orderBy($sortBy, $sortOrder);

            // Paginer les résultats
            $users = $query->paginate($limit);
            $roles = Role::all();

            return view('pages.admin.user.index', compact('users', 'roles', 'sortOrder'));
        } catch (\Throwable $th) {
            // throw $th;
            // throw $th;
            dd($th->getMessage());

            return view('errors.500');
        }
    }

    public function updatePassword(Request $request)
    {
        try {
            $id = $request->input('id');
            // Récupérez l'utilisateur actuellement connecté
            $currentUser = auth()->user();
            $this->validate($request, [
                'current_password' => 'required',
                'new_password' => 'required|min:8|different:current_password|confirmed',
            ]);
            $user = User::find($currentUser->id);
            if (!Hash::check($request->input('current_password'), $user->password)) {
                return response()->json(['ok' => true, 'message' => 'Mot de passe actuel incorrect.'], 401);
            }
            $user->password = Hash::make($request->input('new_password'));
            $user->save();

            return response()->json(['ok' => true, 'message' => 'Mot de passe mis à jour avec succès !'], 200);
        } catch (\Exception $e) {
            return response()->json(['ok' => false, 'message' => $e->getMessage()]);

            // return response()->json(['ok' => false, 'message' => 'Une erreur s\'est produite. Veuillez réessayer.']);
        }
    }

    public function settings()
    {
        try {
            return view('pages.admin.account.settings');
        } catch (\Exception $e) {
            // throw $th;
            // throw $th;
            dd($e->getMessage());

            return view('errors.500');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'role' => 'required',

                'lastname' => 'required|max:20',
                'firstname' => 'required|max:20',

                'email' => 'email|unique:users,email',
                'password' => 'required|min:8|confirmed']);

            $user = User::create([
                'lastname' => $request->input('lastname'),
                'firstname' => $request->input('firstname'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
            ]);

            $user->syncRoles([$request->input('role')]);
            // $currentUser = Auth::user();

            // Envoyer le lien de réinitialisation du mot de passe
            // $status = Password::sendResetLink(
            //     $request->only('email')
            // );
            // if ($status === Password::RESET_LINK_SENT) {
            //     return response()->json(['message' => __("Le compte à été créé et un lien est envoyé à l'utilisateur pour qu'il change de mode de passe"), 'ok' => true]);
            // } else {
            //     return response()->json(['message' => __('Une erreur est survenue'), 'ok' => false]);
            // }

            return response()->json(['ok' => true, 'message' => 'Utilisateur créé avec succès !'], 200);
        } catch (\Exception $e) {
            // return response()->json(['ok' => false, 'message' => 'Une erreur s\'est produite. Veuillez réessayer.']);
            return response()->json(['ok' => false, 'message' => $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            $this->validate($request, [
                'role' => 'required',
                'lastname' => 'required|max:20',
                'firstname' => 'required|max:20',
                'email' => [
                    'email',
                    Rule::unique('users', 'email')->ignore($request->input('user_id')),
                ],
                'user_id' => 'required',
            ]);

            $user = User::find($request->input('user_id'));
            $user->update([
                'lastname' => $request->input('lastname'),
                'firstname' => $request->input('firstname'),
                'email' => $request->input('email'),
            ]);

            $user->syncRoles([$request->input('role')]);
            // $currentUser = Auth::user();

            // Envoyer le lien de réinitialisation du mot de passe
            // $status = Password::sendResetLink(
            //     $request->only('email')
            // );
            // if ($status === Password::RESET_LINK_SENT) {
            //     return response()->json(['message' => __("Le compte à été créé et un lien est envoyé à l'utilisateur pour qu'il change de mode de passe"), 'ok' => true]);
            // } else {
            //     return response()->json(['message' => __('Une erreur est survenue'), 'ok' => false]);
            // }

            return response()->json(['ok' => true, 'message' => 'Utilisateur Mis à jour avec succès !'], 200);
        } catch (\Exception $e) {
            // return response()->json(['ok' => false, 'message' => 'Une erreur s\'est produite. Veuillez réessayer.']);
            return response()->json(['ok' => false, 'message' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $currentUser = Auth::user();

            // Vérifier si l'utilisateur tente de supprimer son propre compte
            if ($currentUser->id == $id) {
                return response()->json(['ok' => false, 'message' => 'Vous ne pouvez pas supprimer votre propre compte.']);
            }

            // Vérifier si l'utilisateur est associé à un article
            $userHasArticle = Article::where('user_id', $id)->exists();
            // Vérifier si l'utilisateur est associé à un articleUser
            $userHasArticleUser = ArticleUser::where('user_id', $id)->exists();

            // Si l'utilisateur est associé à un article ou articleUser, refuser la suppression
            if ($userHasArticle || $userHasArticleUser) {
                return response()->json(['ok' => false, 'message' => 'L\'utilisateur est associé à un article en tant qu\auteur ou a en a publié et ne peut pas être supprimé.']);
            }

            // Supprimer l'utilisateur s'il n'est pas lié à un article ou à un articleUser
            DB::table('users')->where('id', $id)->delete();

            return response()->json(['ok' => true, 'message' => 'L\'utilisateur a été supprimé avec succès.']);
        } catch (\Throwable $th) {
            return response()->json(['ok' => false, 'message' => $th->getMessage()]);
        }
    }
}
