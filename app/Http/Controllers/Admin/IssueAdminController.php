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
    public function index($volume_id)
    {
        try {
            $volume = Volume::find($volume_id);
            $issues = Issue::where('volume_id', '=', $volume_id)->paginate(6);

            return view('pages.admin.issues.index', compact('issues', 'volume'));
        } catch (\Throwable $th) {
            // throw $th;
            // throw $th;
            dd($th->getMessage());

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
