<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	/**
	 * Fields that are mass assignable
	 * @var Array
	 */
    protected $fillable = [
    	'title', 'project_url', 'repo_url', 'packagist_url', 'description'
    ];
}
