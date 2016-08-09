@extends('layouts.app')

@section('content')

<div class="columns">
	<div class="column is-8 is-offset-2">
		@include('includes.flash')
		<div class="notification is-success" v-if="formSubmitted">
	        Your submission has been made! Please give us some time to review your submission.
	    </div>

		<h2 class="title">Submit Project</h2>

		<form method="POST" @submit.prevent="createProject">
			<label class="label" for="title">
				Project Title <span class="required">*</span>
			</label>
			<p class="control">
	  			<input
	  				class="input@{{ errors.title ? ' is-danger' : '' }}"
	  				type="text"
	  				name="title"
	  				value="{{ old('title') }}"
	  				placeholder="Open Laravel"
	  				v-model="newProject.title">

	  			<form-error v-if="errors.title" :errors="errors">
	  				@{{ errors.title }}
	  			</form-error>
			</p>

			<label class="label" for="short">
				Short Description <span class="required">*</span>
			</label>
			<p class="control">
	  			<input
	  				class="input@{{ errors.short ? ' is-danger' : '' }}"
	  				type="text"
	  				name="short"
	  				value="{{ old('short') }}"
	  				placeholder="Open Laravel"
	  				v-model="newProject.short">
	  				<span class="help is-info">
	  					One sentence description about the project.
	  				</span>

	  			<form-error v-if="errors.short" :errors="errors">
	  				@{{ errors.short }}
	  			</form-error>
			</p>

			<label class="label" for="url">
				Project URL
			</label>
			<p class="control">
	  			<input
	  				class="input@{{ errors.url ? ' is-danger' : '' }}"
	  				type="text"
	  				name="url"
	  				value="{{ old('url') }}"
	  				placeholder="http://openlaravel.com"
	  				v-model="newProject.url">

	  			<form-error v-if="errors.url" :errors="errors">
	  				@{{ errors.url }}
	  			</form-error>
			</p>

			<label class="label" for="repo_url">
				Source Repository URL <span class="required">*</span>
			</label>
			<p class="control">
	  			<input
	  				class="input@{{ errors.repo_url ? ' is-danger' : '' }}"
	  				type="text"
	  				name="repo_url"
	  				value="{{ old('repo_url') }}"
	  				placeholder="https://github.com/ammezie/openlaravel"
	  				v-model="newProject.repo_url">

	  			<form-error v-if="errors.repo_url" :errors="errors">
	  				@{{ errors.repo_url }}
	  			</form-error>
			</p>

			<label class="label" for="description">
				Project Description <span class="required">*</span>
			</label>
	  		<p class="control">
	  			<textarea
	  				class="textarea@{{ errors.description ? ' is-danger' : '' }}"
					name="description"
	  				placeholder="A repository of open source projects built using Laravel"
	  				v-model="newProject.description">{{ old('description') }}</textarea>

	  			<form-error v-if="errors.description" :errors="errors">
	  				@{{ errors.description }}
	  			</form-error>
			</p>

			<p class="control" v-if="! formSubmitted">
			  <button class="button is-primary is-medium">Submit Project</button>
			</p>
		</form>
	</div>
</div>

@stop