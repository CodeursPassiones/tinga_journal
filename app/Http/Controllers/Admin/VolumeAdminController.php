<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Issue;
use App\Models\Journal;
use App\Models\Volume;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
                'publication_date' => 'required|date',
            ]);
            $date = Carbon::parse($request->input('publication_date'));
            $volume_year = $date->year;

            $volume = Volume::where('year', $volume_year)->first();
            $volume = Volume::first();

            $issue = Issue::create([
                'publication_date' => $request->input('publication_date'),
                'volume_id' => $volume->id,
            ]);

            return response()->json(['message' => "Le numéro du {$issue->publication_date} a été ajouter avec succès", 'ok' => true]);
        } catch (\Exception $e) {
            return response()->json(['ok' => false, 'message' => $e->getMessage()]);
            // return response()->json(['ok' => false, 'message' => 'Une erreur s\'est produite. Veuillez réessayer.']);
        }
    }
}
