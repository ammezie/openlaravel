<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Repositories\ProjectRepository;
use GrahamCampbell\GitHub\GitHubManager;

class ProjectsController extends Controller
{

	/**
	 * @var app\Repositories\ProjectRepository;
	 */
	protected $project;

    /**
     * GitHub client
     * @var GrahamCampbell\GitHub\Facades\GitHub
     */
    protected $github;

	public function __construct(ProjectRepository $project, GitHubManager $github)
	{
        $this->github = $github;
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

        $repoArray = explode('/', $project->repo_url);

        $username = $repoArray[3];
        $repo = $repoArray[4];

        $repoStats = $this->github->repo()->show($username, $repo);

    	return view('projects.show', compact('project', 'repoStats', 'username', 'repo'));
    }
}
