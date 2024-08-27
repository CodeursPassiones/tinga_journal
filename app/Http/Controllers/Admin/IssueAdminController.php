<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Issue;
use App\Models\Volume;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IssueAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
