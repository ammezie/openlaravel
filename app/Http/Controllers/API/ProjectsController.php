<?php

namespace App\Http\Controllers\API;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
    	$projects =  $this->project->get();

    	return $projects;
    }

     /**
     * Store project to the database
     * 
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    	$this->validate($request, [
    		'title' 		=> 'required|unique:projects,title',
    		'url'			=> 'url',
    		'repo_url'				=> 'required|url|unique:projects,repo_url',
    		'description' 	=> 'required'
    	]);

    	$project = [
    		'title' 		=> $request->input('title'),
    		'slug' 			=> str_slug($request->input('title')),
    		'project_url' 	=> $request->input('url'),
    		'repo_url' 		=> $request->input('repo_url'),
    		'description' 	=> $request->input('description')
    	];

    	$this->project->store($project);

    	return back()->with('message', 'Your submission has been made! Please give us some time to review your submission.');
    }
}
