<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class WebsiteWebController extends Controller
{
    public function home()
    {
        try {
            return view('pages.web.home.index');
        } catch (\Throwable $th) {
            // throw $th;
            // throw $th;
            dd($th->getMessage());

            return view('errors.404');
        }
    }

    public function aboutUs()
    {
        try {
            return view('pages.web.about.index');
        } catch (\Throwable $th) {
            // throw $th;
            // throw $th;
            dd($th->getMessage());

            return view('errors.404');
        }
    }
}
