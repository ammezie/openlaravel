@extends('layouts.app')

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