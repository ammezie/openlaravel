@extends('layouts.app')

@section('content')

<div class="columns">
	<div class="column is-8 is-offset-2">
		@include('includes.flash')

		<h2 class="title">Submit Project</h2>

		<form action="{{ url('submit-project') }}" method="POST">
			{{ csrf_field() }}

			<label class="label" for="project-title">
				Project Title <span class="required">*</span>
			</label>
			<p class="control">
	  			<input
	  				class="input{{ $errors->has('project-title') ? ' is-danger' : '' }}"
	  				type="text"
	  				name="project-title"
	  				value="{{ old('project-title') }}"
	  				placeholder="Open Laravel">

	  			@if ($errors->has('project-title'))
	  				<span class="help is-danger">
	  					{{ $errors->first('project-title') }}
	  				</span>
                @endif
			</p>

			<label class="label" for="project-url">
				Project URL
			</label>
			<p class="control">
	  			<input
	  				class="input{{ $errors->has('project-url') ? ' is-danger' : '' }}"
	  				type="text"
	  				name="project-url"
	  				value="{{ old('project-url') }}"
	  				placeholder="http://openlaravel.com">

	  			@if ($errors->has('project-url'))
	  				<span class="help is-danger">
	  					{{ $errors->first('project-url') }}
	  				</span>
                @endif
			</p>

			<label class="label" for="repo-url">
				Source Repository URL <span class="required">*</span>
			</label>
			<p class="control">
	  			<input
	  				class="input{{ $errors->has('repo-url') ? ' is-danger' : '' }}"
	  				type="text"
	  				name="repo-url"
	  				value="{{ old('repo-url') }}"
	  				placeholder="https://github.com/ammezie/openlaravel">

	  			@if ($errors->has('repo-url'))
	  				<span class="help is-danger">
	  					{{ $errors->first('repo-url') }}
	  				</span>
                @endif
			</p>

			<label class="label" for="packagist-url">
				Packagist URL
			</label>
			<p class="control">
	  			<input
	  				class="input{{ $errors->has('packagist-url') ? ' is-danger' : '' }}"
	  				type="text"
	  				name="packagist-url"
	  				value="{{ old('packagist-url') }}"
	  				placeholder="https://packagist.org/packages/mezie/openlaravel">

	  			@if ($errors->has('packagist-url'))
	  				<span class="help is-danger">
	  					{{ $errors->first('packagist-url') }}
	  				</span>
                @endif
			</p>
			<label class="label" for="project-description">
				Project Description <span class="required">*</span>
			</label>
	  		<p class="control">
	  			<textarea
	  				class="textarea{{ $errors->has('project-description') ? ' is-danger' : '' }}"
					name="project-description"
	  				placeholder="A repository of open source projects built using Laravel">{{ old('project-description') }}</textarea>
	  				<span class="help is-info">
	  					One sentence description about the project.
	  				</span>

	  			@if ($errors->has('project-description'))
	  				<span class="help is-danger">
	  					{{ $errors->first('project-description') }}
	  				</span>
                @endif
			</p>

			<p class="control">
			  <button class="button is-primary is-medium">Submit Project</button>
			</p>
		</form>
	</div>
</div>

@stop