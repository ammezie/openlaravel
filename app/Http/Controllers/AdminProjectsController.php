<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Repositories\ProjectRepository;

class AdminProjectsController extends Controller
{
    /**
    * @var app\Repositories\ProjectRepository;
    */
    protected $project;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ProjectRepository $project)
    {
        $this->middleware(['auth', 'admin']);

        $this->project = $project;
    }

    /**
     * Display list of projects
     *
     * @return Response
     */
    public function index()
    {
        $projects =  $this->project->getAll();

        return view('dashboard.projects.index', compact('projects'));
    }

    public function edit($slug)
    {
        $project = $this->project->getBySlug($slug);

        return view('dashboard.projects.edit', compact('project'));
    }

    public function update($slug, Request $request)
    {
        $project = $this->project->getBySlug($slug);

        $this->validate($request, [
            'title' => 'required|unique:projects,title',
            'repo_url' => 'required|url|unique:projects,repo_url',
            'short' => 'required|max:140',
            'description' => 'required'
        ]);

        $project = [
            'title' => $request->title,
            'slug' => str_slug($request->title),
            'project_url' => $request->url,
            'repo_url' => $request->repo_url,
            'short' => $request->short,
            'description' => $request->description,
            'status' => $request->approve,
        ];

        $this->project->update($slug, $project);

        return redirect('dashboard')->with("status", "Project Approved");
    }

    /**
     * Approve a particular project
     *
     * @param  $slug
     * @return Response
     */
    public function approveProject($slug)
    {
        return $this->project->approve($slug);
    }

    /**
     * Delete a specified project
     *
     * @param integer $project
     * @return
     */
    public function destroy($project)
    {
        $this->project->delete($project);

        return back()->with("status", "Project Deleted");
    }
}
