<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Repositories\ProjectRepository;

class ProjectsController extends Controller
{

	/**
	 * @var app\Repositories\ProjectRepository;
	 */
	protected $project;

	public function __construct(ProjectRepository $project)
	{

		$this->project = $project;
	}

    /**
     * Display list of projects
     * 
     * @return Response
     */
    public function index()
    {
        $projects =   $this->project->get();

    	return view('projects.index', compact('projects'));
    }

    /**
     * Display form to submit project
     * 
     * @return Response
     */
    public function create()
    {
    	return view('projects.create');
    }

    /**
     * Show a specified project
     * 
     * @param  Project $slug
     * @return Response
     */
    public function show($slug)
    {
    	$project = $this->project->show($slug);

    	return view('projects.show', compact('project'));
    }
}
