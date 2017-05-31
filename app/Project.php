<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use Searchable;

    /**
     * Fields that are mass assignable
     * @var Array
    */
    protected $fillable = [
        'title',
        'slug',
        'project_url',
        'repo_url',
        'packagist_url',
        'description',
        'short'
    ];

    /**
     * Get approved projects
     *
     * @param  $query
     * @return
     */
    public function scopeApproved($query)
    {
        return $query->where('status', 1);
    }
}
