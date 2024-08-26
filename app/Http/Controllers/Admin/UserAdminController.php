<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $users = User::with(['roles'])->orderBy('lastname', 'ASC')->paginate(5);
            $roles = Role::all();

            return view('pages.admin.user.index', compact('users', 'roles'));
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

            return response()->json(['ok' => false, 'message' => 'Une erreur s\'est produite. Veuillez réessayer.']);
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
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}
