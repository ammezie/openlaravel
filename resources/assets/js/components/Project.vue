<template>
	<div class="column is-one-third">
	<a href="projects/{{ project.slug }}">
      <div class="card is-fullwidth">
	    <div class="card-content has-text-centered">
	        <div class="content">
		        <h3 class="title">
	        		{{ project.title }}
	        	</h3>

	        	<div class="description">
	        		{{ project.description }}
	        	</div>
      		</div>
	    </div>
      </div>
      </a>
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