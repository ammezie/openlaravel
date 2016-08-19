import Vue from 'vue';
import VueResource from 'vue-resource';

Vue.use(VueResource);

import Project from './components/Project.vue';
import FormError from './components/FormError.vue';

Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

new Vue({
	el: '#project',

	components: {
		Project,
		FormError,
	},

	data: {
		projects: [],

		newProject: {
			title: '',
			url: '',
			repo_url: '',
			short: '',
			description: ''
		},

		formSubmitted: false,

		errors: [],
	},

	ready: function() {
		this.fetchProjects();
	},

	methods: {
		fetchProjects(page_url) {
			page_url = page_url || '/api/projects';

			this.$http.get(page_url).then(function(response) {
				this.$set('projects', response.data);
			});
		},

		createProject() {
			let project = this.newProject;

			this.$set('projects', project);

			this.newProject = {
				title: '',
				projectUrl: '',
				repoUrl: '',
				short: '',
				description: ''
			};

			this.$http.post('api/projects', project).then(function(response) {
				this.formSubmitted = true;
			}, function (response) {
				this.$set('errors', response.data);
			});
		}
	},
});
