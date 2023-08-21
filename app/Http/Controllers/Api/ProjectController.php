<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;

class ProjectController extends Controller
{
    //messaggio di prova
    public function provaApi() {
        return response() -> json([
            'message' => 'messaggio di prova'
        ]);
    }

    //metodo per ottenere tutti i progetti

    public function projectIndex() {
        //ottenere tutti i progetti
        // $projects = Project::all();
        $projects = Project::with(['type']) -> paginate(3);

        //restituire i progetti in formato json
        return response() -> json([
            'projects' => $projects
        ]);
    }
}
