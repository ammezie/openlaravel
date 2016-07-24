<?php

namespace App\Http\Controllers;

use App\Project;
use App\Http\Requests;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display list of projects
     * 
     * @return Response
     */
    public function index()
    {
    	$projects = Project::all();

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
    		'project-title' 		=> 'required',
    		'project-url'			=> 'url',
    		'repo-url'				=> 'required|url|unique:projects,repo_url',
    		'packagist-url'			=> 'url',
    		'project-description' 	=> 'required'
    	]);

    	$project = new Project([
    		'title' 		=> $request->input('project-title'),
    		'slug' 			=> str_slug($request->input('project-title')),
    		'project_url' 	=> $request->input('project-url'),
    		'repo_url' 		=> $request->input('repo-url'),
    		'packagist_url'	=> $request->input('packagist-url'),
    		'description' 	=> $request->input('project-description'),
    	]);

    	$project->save();

    	return back()->with('message', 'Your submission has been made! Please give us some time to review your submission.');
    }

    public function show($slug)
    {
    	$project = Project::where('slug', $slug)->firstOrFail();

    	return view('projects.show', compact('project'));
    }
}
