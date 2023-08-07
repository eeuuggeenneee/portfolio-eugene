<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function show($id)
    {
        $project = Project::find($id);



        return view('portfolio.project-details', ['project' => $project]);
    }
}
