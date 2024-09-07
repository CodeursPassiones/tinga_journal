<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Issue;
use App\Models\Journal;
use App\Models\Volume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class VolumeAdminController extends Controller
{
    public function index()
    {
        try {
            $volumes = Volume::paginate(6);

            $journal = Journal::first();

            return view('pages.admin.volumes.index', compact('journal', 'volumes'));
        } catch (\Throwable $th) {
            // throw $th;
            // throw $th;
            dd($th->getMessage());

            return view('errors.500');
        }
    }

    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'title' => 'required|max:20',
                'year' => 'required|max:4',

                'journal_id' => 'required|exists:journals,id',
            ]);

            $volume = Volume::create([
                'title' => $request->input('title'),
                'year' => $request->input('year'),
                'journal_id' => $request->input('journal_id'),
            ]);

            return response()->json(['message' => "Le volume du {$volume->year} a été ajouter avec succès", 'ok' => true]);
        } catch (\Exception $e) {
            return response()->json(['ok' => false, 'message' => $e->getMessage()]);
            // return response()->json(['ok' => false, 'message' => 'Une erreur s\'est produite. Veuillez réessayer.']);
        }
    }

    public function update(Request $request)
    {
        try {
            $this->validate($request, [
                'title' => 'required|max:20',
                'year' => 'required|max:4',

                'volume_id' => 'required|exists:volumes,id',
            ]);
            $volume_id = $request->input('volume_id');
            $volume = Volume::find($volume_id);
            $volume->update([
                'title' => $request->input('title'),
                'year' => $request->input('year'),
            ]);

            return response()->json(['message' => 'Le volume  a été mis à jour avec succès', 'ok' => true]);
        } catch (\Exception $e) {
            return response()->json(['ok' => false, 'message' => $e->getMessage()]);

            // return response()->json(['ok' => false, 'message' => 'Une erreur s\'est produite. Veuillez réessayer.']);
        }
    }

    public function destroy(string $id)
    {
        try {
            $volume_id = Crypt::decryptString($id);

            $volumeHasIssue = Issue::where('volume_id', $volume_id)->exists();

            if ($volumeHasIssue) {
                return response()->json(['ok' => false, 'message' => 'Le volume est associé à des numéros et ne peut pas être supprimé.']);
            }

            DB::table('volumes')->where('id', $volume_id)->delete();

            return response()->json(['ok' => true, 'message' => 'Le volume a été supprimé avec succès.']);
        } catch (\Throwable $th) {
            return response()->json(['ok' => false, 'message' => $th->getMessage()]);
        }
    }
}
