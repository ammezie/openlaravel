@extends('layouts.app')

@section('title', 'A Repository Of Open Source Projects Built Using Laravel')

@section('content')

{{-- @include('partials.filters') --}}

<div class="columns is-multiline">
	{{-- <project
		v-for="project in projects"
		:project="project">
	</project> --}}
	@foreach ($projects as $project)
		<div class="column is-one-third">
			<a href="{{ url('projects/'. $project->slug) }}">
		    	<div class="card is-fullwidth">
			    	<div class="card-content has-text-centered">
			        	<div class="content">
				        	<h3 class="title">
			        			{{ $project->title }}
			        		</h3>

			        		<div class="description">
			        			{{ $project->short }}
			        		</div>
			        	</div>
		      		</div>
			    </div>
			</a>
		</div>
	@endforeach
</div>

@include('partials.pagination', ['projects' => $projects])

@stop