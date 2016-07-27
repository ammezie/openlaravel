// $(function() {
// 	$('div.notification').delay(5000).fadeOut(350);
// });

import Vue from 'vue';
import VueResource from 'vue-resource';

import Project from './components/Project.vue';

Vue.use(VueResource);

new Vue({
	el: '#app',

	data: {
		projects: []
	},

	components: { Project },

	ready: function() {
		this.fetchProjects();
		// alert('Ready to go');
	},

	methods: {
		fetchProjects() {
			this.$http.get('api/projects').then(function(projects) {
				this.$set('projects', projects.data);
			});
		}
	}
});