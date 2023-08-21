<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function provaApi() {
        return response() -> json([
            'message' => 'messaggio di prova'
        ]);
    }
}
