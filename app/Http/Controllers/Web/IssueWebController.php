<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Issue;
use App\Models\Volume;

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
            // throw $th;
            // throw $th;
            dd($th->getMessage());

            return view('errors.500');
        }
    }

    public function index($volume_id)
    {
        try {
            $issues = Issue::where('volume_id', $volume_id)->get();

            return view('pages.web.issues.index', compact('issues'));
        } catch (\Throwable $th) {
            // throw $th;
            // throw $th;
            dd($th->getMessage());

            return view('errors.500');
        }
    }
}
