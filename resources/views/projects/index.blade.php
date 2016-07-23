@extends('layouts.app')

@section('content')

@include('partials.filters')

<div class="columns is-multiline">
	@foreach ($projects as $project)
	<div class="column is-one-third">
      <div class="card is-fullwidth">
        <a href="{{ url('projects/' . $project->slug) }}">
        <div class="card-content has-text-centered">
          <div class="content">
          <h3 class="title">
            {{ $project->title }}
          </h3>
            {{ $project->description }}
          </div>
        </div>
        </a>
      </div>
    </div>
    @endforeach
</div>

{{-- @include('partials.pagination') --}}

@stop