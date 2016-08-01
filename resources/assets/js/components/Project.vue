<template>
	<div class="column is-one-third">
      <div class="card is-fullwidth">
	    <div class="card-content has-text-centered">
	        <div class="content">
		        <h3 class="title">
		        	<a href="projects/{{ project.slug }}">
		        		{{ project.title }}
		        	</a>
		        </h3>

		        <a href="projects/{{ project.slug }}">
	          		{{ project.description }}
	          	</a>
          </div>
	    </div>
      </div>
    </div>
</template>

<script>
	export default {
		// data() {
		// 	return {
		// 		projects: []
		// 	}
		// },

		props: ['project'],

		// ready() {
		// 	this.fetchProjects();
		// 	// alert('text');
		// },

		// methods: {
		// 	fetchProjects() {
		// 		this.$http.get('api/projects').then(function(response) {
		// 			this.$set('projects', response.data);
		// 		});
		// 	}
		// }
	}
</script>

<style>

</style>