<?php

namespace App\Http\Controllers;

use App\FamilyProject;
use App\Project;
use App\Service;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = FamilyProject::all()->reverse();
        return view('projects.list', ['projects' => $projects]);
    }

    public function show(Request $request)
    {
        $project = Project::find($request->v);

        return view('projects.show', ['project' => $project]);
    }

    public function familyshow(Request $request)
    {
        $project = FamilyProject::find($request->v);

        return view('family_project.show', ['project' => $project]);
    }

    public function about()
    {
        $projects = Project::all()->reverse();
        $services = Service::all()->reverse();
        return view('about', ['projects' => $projects, 'services' => $services]);
    }
}
