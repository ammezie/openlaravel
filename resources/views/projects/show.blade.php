@extends('layouts.app')

@section('title')
	{{ $project->title }}
@stop

@push('hero')
	@include('partials.hero')
@endpush

@section('content')

<div class="columns">
	<div class="column is-8">
		<div class="content">
			<h2 class="title">
				{{ $project->title }}
			</h2>

			@markdown($project->description)

			<div class="section has-text-centered">
			@if ($project->project_url)
				<a class="button is-secondary" href="{{ url($project->project_url) }}" target="_blank">
					Project Home
				</a>
			@endif
				<a class="button is-secondary" href="{{ url($project->repo_url) }}" target="_blank">
					Project Repository
				</a>
			</div>
		</div>
	</div>

	<aside class="column is-4">
		<div class="content">
			<h2 class="title">Stats</h2>

			<h5 style="margin-bottom: 5px;">Contributor</h5>

			<p>
				{{ $repoStats['owner']['login'] }}
			</p>

			<p>
				<a class="github-button" href="{{ url($project->repo_url) }}" data-icon="octicon-star" data-count-href="/{{ $username }}/{{ $repo }}/stargazers" data-count-api="/repos/{{ $username }}/{{ $repo }}#stargazers_count" data-count-aria-label="# stargazers on GitHub" aria-label="Star {{ $username }}/{{ $repo }} on GitHub">Star</a>

				<a class="github-button" href="{{ url($project->repo_url) }}/fork" data-icon="octicon-repo-forked" data-count-href="/{{ $username }}/{{ $repo }}/network" data-count-api="/repos/{{ $username }}/{{ $repo }}#forks_count" data-count-aria-label="# forks on GitHub" aria-label="Fork {{ $username }}/{{ $repo }} on GitHub">Fork</a>

				<a class="github-button" href="{{ url($project->repo_url) }}/issues" data-icon="octicon-issue-opened" data-count-api="/repos/{{ $username }}/{{ $repo }}#open_issues_count" data-count-aria-label="# issues on GitHub" aria-label="Issue {{ $username }}/{{ $repo }} on GitHub">Issue</a>
			</p>

			<p>
				This project was added {{ $project->created_at->diffForHumans() }}
			</p>
	</aside>
</div>

@stop

@push('scripts')
	<script async defer src="https://buttons.github.io/buttons.js"></script>
@endpush