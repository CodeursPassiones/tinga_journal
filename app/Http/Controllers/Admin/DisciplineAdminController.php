<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Discipline;
use App\Models\Journal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class DisciplineAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $disciplines = Discipline::paginate(6);
            $journal = Journal::first();

            return view('pages.admin.disciplines.index', compact('disciplines', 'journal'));
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
                'name' => 'required|max:20',

                'journal_id' => 'required',
                'id' => 'required',
            ]);
            $discipline = Discipline::find($request->input('id'));
            $discipline->update([
                'name' => $request->input('name'),
                'journal_id' => $request->input('journal_id'),

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
            $discipline_id = Crypt::decryptString($id);

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
