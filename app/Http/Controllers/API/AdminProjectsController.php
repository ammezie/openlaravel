<?php

namespace App\Http\Controllers\API;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ProjectRepository;

class AdminProjectsController extends Controller
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
		$projects =  $this->project->getAll();

		return $projects;
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
}
