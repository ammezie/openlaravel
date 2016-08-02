<?php

namespace App\Repositories;

use App\Project;
use App\Http\Requests\Request;

class ProjectRepository {

	/**
	 * get all projects in descending order
	 */
	public function getAll()
	{
		return Project::orderBy('id', 'desc')->paginate(1);
	}

	/**
	 * get projects in descending order
	 */
	public function get()
	{
		return Project::where('status', 1)
						->orderBy('id', 'desc')
						->get();
	}

	/**
	 * Create a new project
	 * 
	 * @param  Project $project
	 */
	public function store($project)
	{
		return Project::create($project);
	}

	/**
	 * Show a specified project
	 * 
	 * @param  Project $slug
	 */
	public function show($slug)
	{
		return Project::where('slug', $slug)->firstOrFail();
	}
}