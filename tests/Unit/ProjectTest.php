<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProjectTest extends TestCase
{
    /** @test */
    public function approve_a_project()
    {
        $project = new \App\Project;

        

        $this->assertEquals(true, $project->getApproveProjects());
    }
}
