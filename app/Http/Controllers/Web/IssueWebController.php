<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Volume;
use Carbon\Carbon;

class IssueWebController extends Controller
{
    public function volumes()
    {
        try {
            // Récupérer tous les volumes
            $volumes = Volume::all();

            // Regrouper les volumes par décennie
            $result = $volumes->groupBy(function ($volume) {
                // Trouver la décennie en prenant l'année et en la ramenant au multiple de 10
                $year = (int) $volume->year;
                $decade = floor($year / 10) * 10;

                return $decade;
            });

            return view('pages.web.issues.volumes', compact('result'));
        } catch (\Throwable $th) {
            // dd($th->getMessage());

            return response()->view('errors.500', [], 500);
        }
    }

    public function index($volume_id)
    {
        try {
            // Récupérer le volume avec ses issues triées par date de publication
            $volume = Volume::with(['issues' => function ($query) {
                // Trier les issues par date de publication en ordre croissant
                $query->orderBy('publication_date', 'asc');
            }])->find($volume_id);
            if (!$volume) {
                return response()->view('errors.404', [], 404);
            }
            // Regrouper les issues par mois (avec mois en lettres)
            $result = $volume->issues->groupBy(function ($issue) {
                // Convertir la date en une chaîne formatée avec le mois en lettres et l'année
                return Carbon::parse($issue->publication_date)->translatedFormat('F Y');
            });

            return view('pages.web.issues.index', compact('result', 'volume'));
        } catch (\Throwable $th) {
            // Afficher l'erreur en mode débogage
            // dd($th->getMessage());

            // Retourner une vue d'erreur si nécessaire
            return response()->view('errors.500', [], 500);
        }
    }
}
