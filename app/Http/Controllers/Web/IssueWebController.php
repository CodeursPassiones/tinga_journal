<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class IssueWebController extends Controller
{
    public function index()
    {
        try {
            return view('pages.web.issues.index');
        } catch (\Throwable $th) {
            // throw $th;
            // throw $th;
            dd($th->getMessage());

            return view('errors.500');
        }
    }
}
