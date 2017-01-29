@extends('layouts.app')

@section('title', 'Submit Project')

@push('styles')
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
@endpush

@section('content')
<div class="columns">
	<div class="column is-8 is-offset-2">
		@include('includes.flash')

		<h2 class="title">Submit Project</h2>

		<form action="{{ url('submit-project') }}" method="POST">
			{{ csrf_field() }}

			<label class="label" for="title">
				Project Title <span class="required">*</span>
			</label>
			<p class="control">
	  			<input
	  				class="input {{ $errors->has('title') ? ' is-danger' : '' }}"
	  				type="text"
	  				name="title"
	  				value="{{ old('title') }}"
	  				placeholder="Open Laravel">

				@if ($errors->has('title'))
					<span class="help is-danger">
						 {{ $errors->first('title') }}
					</span>
				@endif
			</p>

			<label class="label" for="short">
				Short Description <span class="required">*</span>
			</label>
			<p class="control">
	  			<input
	  				class="input {{ $errors->has('short') ? ' is-danger' : '' }}"
	  				type="text"
	  				name="short"
	  				value="{{ old('short') }}"
	  				placeholder="A repository of open source projects built using Laravel">
	  				<span class="help is-info">
	  					One sentence description about the project.
	  				</span>

				@if ($errors->has('short'))
					<span class="help is-danger">
						 {{ $errors->first('short') }}
					</span>
				@endif
			</p>

			<label class="label" for="url">
				Project URL
			</label>
			<p class="control">
	  			<input
	  				class="input {{ $errors->has('url') ? ' is-danger' : '' }}"
	  				type="text"
	  				name="url"
	  				value="{{ old('url') }}"
	  				placeholder="http://openlaravel.com">

				@if ($errors->has('url'))
					<span class="help is-danger">
						 {{ $errors->first('url') }}
					</span>
				@endif
			</p>

			<label class="label" for="repo_url">
				Source Repository URL <span class="required">*</span>
			</label>
			<p class="control">
	  			<input
	  				class="input {{ $errors->has('repo_url') ? ' is-danger' : '' }}"
	  				type="text"
	  				name="repo_url"
	  				value="{{ old('repo_url') }}"
	  				placeholder="https://github.com/ammezie/openlaravel">

				@if ($errors->has('repo_url'))
					<span class="help is-danger">
						 {{ $errors->first('repo_url') }}
					</span>
				@endif
			</p>

			<label class="label" for="description">
				Project Description <span class="required">*</span>
			</label>
	  		<p class="control">
	  			<textarea
	  				class="textarea {{ $errors->has('description') ? ' is-danger' : '' }}"
					id="description"
					name="description"
	  				placeholder="A repository of open source projects built using Laravel">{{ old('description') }}</textarea>

				@if ($errors->has('description'))
					<span class="help is-danger">
						 {{ $errors->first('description') }}
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

@push('scripts')
	<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
	<script>
		const simplemde = new SimpleMDE({
		  element: document.getElementById("description"),
		  forceSync: true,
		});
	</script>
@endpush