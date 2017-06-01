<?php

namespace Tests\Feature;

use App\Project;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ProjectTest extends TestCase
{
    use DatabaseMigrations;
   /** @test */
    public function users_can_view_only_approved_projects()
    {
        $projects = factory(Project::class, 3)->create();
        $approvedProject = factory(Project::class)->create(['status' => 1]);

        $approved = Project::approved()->first();

        $this->get('/')
            ->assertSee($approved->title)
            ->assertSee($approved->short);
    }
}
