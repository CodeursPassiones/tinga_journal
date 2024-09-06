<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use App\Models\Volume;

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
}
