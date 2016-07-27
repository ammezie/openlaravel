<template>
	<div class="columns is-multiline">
		<div class="column is-one-third">
	      <div class="card is-fullwidth">
	        <a href="projects/{{ project.slug }}">
		        <div class="card-content has-text-centered">
		          <div class="content">
			        <h3 class="title">
			        	{{ project.title }}
			        </h3>

			        <small>{{ project.slug }}</small>

		          	{{ project.description }}
		          </div>
		        </div>
	        </a>
	      </div>
	    </div>
	</div>
</template>

<script>
	export default {
		
	}
</script>

<style>

</style>