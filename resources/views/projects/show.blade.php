@extends('layouts.app')

@section('content')

<div class="columns">
	<div class="column is-8">
		<div class="content">
			<h2 class="title">
				{{ $project->title }}
			</h2>

			<hr>

			<p>
				{{ $project->description }}
			</p>

			<div class="section has-text-centered">
			@if ($project->project_url)
				<a class="button is-secondary" href="{{ url($project->project_url) }}">
					Project Home
				</a>
			@endif
				<a class="button is-secondary" href="{{ url($project->repo_url) }}">
					Project Repository
				</a>
			</div>
		</div>
	</div>

	<aside class="column is-4">
		<div class="content">
			<h2 class="title">Stats</h2>

	</aside>
</div>

@stop