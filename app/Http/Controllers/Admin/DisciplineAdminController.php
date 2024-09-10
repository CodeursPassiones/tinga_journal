<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Discipline;
use App\Models\Journal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DisciplineAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $search = $request->input('search');

            $sortOrder = $request->input('sort_order', 'asc');
            $sortBy = $request->input('sort_by', 'name');
            $limit = $request->input('limit', 6);
            $query = Discipline::with(['journal']);
            if ($search) {
                $query->where('name', 'ILIKE', '%'.$search.'%');
            }

            $query->orderBy($sortBy, $sortOrder);

            $disciplines = $query->paginate($limit);
            $journal = Journal::first();

            return view('pages.admin.disciplines.index', compact('disciplines', 'journal', 'sortOrder'));
        } catch (\Throwable $th) {
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
                'name' => 'required|max:20',

                'journal_id' => 'required|exists:journals,id',
            ]);

            $discipline = Discipline::create([
                'name' => $request->input('name'),
                'journal_id' => $request->input('journal_id'),

                'description' => $request->input('description', ''),
            ]);

            return response()->json(['message' => "La discipline {$discipline->name} a été ajouter avec succès", 'ok' => true]);
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
                'name' => 'required|max:20',

                'discipline_id' => 'required',
            ]);
            $discipline_id = $request->input('discipline_id');
            $discipline = Discipline::find($discipline_id);
            $discipline->update([
                'name' => $request->input('name'),
                'description' => $request->input('description', ''),
            ]);

            return response()->json(['message' => 'La discipline  a été mis à jour avec succès', 'ok' => true]);
        } catch (\Exception $e) {
            // return response()->json(['ok' => false, 'message' => $e->getMessage()]);
            return response()->json(['ok' => false, 'message' => 'Une erreur s\'est produite. Veuillez réessayer.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $discipline_id = $id;

            $disciplineHasArticle = Article::where('discipline_id', $discipline_id)->exists();

            if ($disciplineHasArticle) {
                return response()->json(['ok' => false, 'message' => 'La discipline est associé à des articles et ne peut pas être supprimé.']);
            }

            DB::table('disciplines')->where('id', $discipline_id)->delete();

            return response()->json(['ok' => true, 'message' => 'La discipline a été supprimé avec succès.']);
        } catch (\Throwable $th) {
            return response()->json(['ok' => false, 'message' => $th->getMessage()]);
        }
    }
}
