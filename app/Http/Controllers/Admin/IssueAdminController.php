<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Issue;
use App\Models\Volume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IssueAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $volume_id)
    {
        try {
            $search = $request->input('search');

            $sortOrder = $request->input('sort_order', 'desc'); // Par défaut ascendant
            $sortBy = $request->input('sort_by', 'publication_date'); // Par défaut tri par titre
            $limit = $request->input('limit', 6); // Par défaut 6 articles par page
            $query = Issue::where('volume_id', '=', $volume_id);

            if ($search) {
                // dd($search);
                $query->where('number', 'ILIKE', '%'.$search.'%');
                $query->orWhere('title', 'ILIKE', '%'.$search.'%');
            }

            // Application du tri
            $query->orderBy($sortBy, $sortOrder);

            // Paginer les résultats
            $issues = $query->paginate($limit);

            $volume = Volume::find($volume_id);

            return view('pages.admin.issues.index', compact('issues', 'volume', 'sortOrder'));
        } catch (\Throwable $th) {
            // throw $th;
            // throw $th;
            dd($th->getMessage());

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
                'title' => 'required',
                'publication_date' => 'required|date',
                'volume_id' => 'required|exists:volumes,id',
            ]);

            $issue = Issue::create([
                'publication_date' => $request->input('publication_date'),
                'volume_id' => $request->input('volume_id'),
                'title' => $request->input('title'),
            ]);

            return response()->json(['message' => "Le numéro du {$issue->publication_date} a été ajouter avec succès", 'ok' => true]);
        } catch (\Exception $e) {
            return response()->json(['ok' => false, 'message' => $e->getMessage()]);
            // return response()->json(['ok' => false, 'message' => 'Une erreur s\'est produite. Veuillez réessayer.']);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            $this->validate($request, [
                'title' => 'required|max:20',
                'publication_date' => 'required|date',

                'issue_id' => 'required|exists:issues,id',
            ]);
            $issue_id = $request->input('issue_id');
            $issue = Issue::find($issue_id);
            $issue->update([
                'publication_date' => $request->input('publication_date'),

                'title' => $request->input('title'),
            ]);

            return response()->json(['message' => 'Le Numéro  a été mis à jour avec succès', 'ok' => true]);
        } catch (\Exception $e) {
            return response()->json(['ok' => false, 'message' => $e->getMessage()]);

            // return response()->json(['ok' => false, 'message' => 'Une erreur s\'est produite. Veuillez réessayer.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $issue_id)
    {
        try {
            $issueHasArticle = Article::where('issue_id', $issue_id)->exists();

            if ($issueHasArticle) {
                return response()->json(['ok' => false, 'message' => 'Le numéro est associé à des articles et ne peut pas être supprimé.']);
            }

            DB::table('issues')->where('id', $issue_id)->delete();

            return response()->json(['ok' => true, 'message' => 'Le numéro a été supprimé avec succès.']);
        } catch (\Throwable $th) {
            return response()->json(['ok' => false, 'message' => $th->getMessage()]);
        }
    }
}
