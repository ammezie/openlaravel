@extends('layouts.app')

@section('content')

@include('partials.filters')

<project>
	<div class="column is-one-third" v-for="project in projects">
      {{-- <div class="card is-fullwidth">
        <a href="projects/@{{ project.slug }}">
	        <div class="card-content has-text-centered">
	          <div class="content">
		        <h3 class="title">
		        	@{{ project.title }}
		        </h3>

		        <small>@{{ project.slug }}</small>

	          	@{{ project.description }}
	          </div>
	        </div>
        </a>
      </div> --}}
    </div>
</project>

{{-- @include('partials.pagination') --}}

@stop