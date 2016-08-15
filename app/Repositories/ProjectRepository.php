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
		return Project::orderBy('id', 'desc')->paginate(15);
	}

	/**
	 * get projects in descending order
	 */
	public function get()
	{
		return Project::where('status', 1)
						->orderBy('id', 'desc')
						->paginate(15);
	}

	public function getBySlug($slug)
	{
		return Project::where('slug', $slug)->firstOrFail();
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
	 * Update a project
	 *
	 * @param  Project $project
	 */
	public function update($slug, $project)
	{
		return Project::where('slug', $slug)
						->update($project);
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

	public function approve($slug)
	{
		return Project::where('slug', $slug)
						->update(['status' => 1]);
	}
}
