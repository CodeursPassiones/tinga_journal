<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Support\Facades\Storage;

class FileWebController extends Controller
{
    public function download($id)
    {
        // Récupérer le fichier par son ID
        $file = File::findOrFail($id);

        // dd($file);
        // return response()->download(public_path($file->path));

        // Vérifier si le fichier existe sur le disque
        if (Storage::exists($file->url)) {
            // Télécharger le fichier
            return response()->download(public_path($file->path));
        } else {
            return redirect()->back()->withErrors('Fichier non trouvé.');
        }
    }
}
