<?php

namespace Tests\Feature;

use App\Project;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProjectTest extends TestCase
{
    use DatabaseTransactions;
   /** @test */
    public function return_only_approved_projects()
    {
        factory(Project::class, 3)->create();
        $approved = factory(Project::class)->create(['status' => 1]);

        $projects = Project::approved();

        $this->assertEquals($approved->id, $projects->first()->id);
    }
}
