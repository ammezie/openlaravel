import Vue from 'vue';
import VueResource from 'vue-resource';
// import VuePaginator from 'vuejs-paginator/dist/vuejs-paginator.min.js';

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
					// this.makePagination(response.data);
				});
		},

		// makePagination(data) {
		// 	let pagination = {
		// 		current_page: data.current_page,
		// 		last_page: data.last_page,
		// 		next_page_url: data.next_page_url,
		// 		prev_page_url: data.prev_page_url
		// 	}

		// 	this.$set('pagination', pagination);
		// },

		createProject() {
			let project = this.newProject;

			this.projects.push(project);

			this.newProject = {
				title: '',
				projectUrl: '',
				repoUrl: '',
				description: ''
			};

			this.$http.post('api/projects', project).then(function(response) {
				this.formSubmitted = true;
			}, function (response) {
				this.$set('errors', response.data);
			});
		}
	}
});