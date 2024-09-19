<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class FileWebController extends Controller
{
    public function download($file)
    {
        return Storage::download($file);
    }
}
