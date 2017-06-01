<?php

namespace App\Http\Controllers;

use App\Project;
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
     *
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
        $projects = Project::approved()->paginate(15);

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
     * Store project to the database
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:projects,title',
            'repo_url' => 'required|url|unique:projects,repo_url',
            'short' => 'required|max:140',
            'description' => 'required'
        ]);

        $project = [
            'title' => $request->input('title'),
            'slug' => str_slug($request->input('title')),
            'project_url' => $request->input('url'),
            'repo_url' => $request->input('repo_url'),
            'short' => $request->input('short'),
            'description' => $request->input('description')
        ];

        $this->project->store($project);

        return back()->with(
            'status',
            'Your submission has been made! Please give us some time to review your submission.'
        );
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
