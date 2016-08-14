@extends('layouts.app')

@section('title', 'A Repository Of Open Source Projects Built Using Laravel')

@section('content')

{{-- @include('partials.filters') --}}

<div class="columns is-multiline">
	<project
		v-for="project in projects"
		:project="project">
	</project>
</div>

{{-- @include('partials.pagination') --}}

@stop