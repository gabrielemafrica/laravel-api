<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;

class ProjectController extends Controller
{
    // Messaggio di prova
    public function provaApi() {
        return response()->json([
            'message' => 'messaggio di prova'
        ]);
    }

    // Metodo per ottenere tutti i progetti
    public function projectIndex() {
        // Ottenere tutti i progetti
        // $projects = Project::all();
        $projects = Project::with('type')->paginate(3);

        // Restituire i progetti in formato json
        return response()->json([
            'projects' => $projects
        ]);
    }

    // Mostra un progetto specifico
    public function projectShow($id) {
        $project = Project::with('type')->findOrFail($id);
        return response()->json([
            'project' => $project
        ]);
    }
}
