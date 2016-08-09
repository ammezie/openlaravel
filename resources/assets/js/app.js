import Vue from 'vue';
import VueResource from 'vue-resource';
// import VuePaginator from 'vuejs-paginator/dist/vuejs-paginator.min.js';

Vue.use(VueResource);

import Project from './components/Project.vue';
import FormError from './components/FormError.vue';
import Vuetable from 'vuetable/src/components/Vuetable.vue';
import VuetablePagination from 'vuetable/src/components/VuetablePagination.vue';
import VuetablePaginationBulma from './components/VuetablePaginationBulma.vue';

// Vue.component('vuetable', Vuetable);
Vue.component('vuetable-pagination', VuetablePagination);
Vue.component('vuetable-pagination-bulma', VuetablePaginationBulma);


Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

new Vue({
	el: '#project',

	components: {
		Project,
		FormError,
		vuetable: Vuetable,
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

		columns: [
            {
                name: 'title',
                title: 'Project Title',

            },

            {
                name: 'project_url',
                title: 'Project URL',
            },

            {
                name: 'repo_url',
                title: 'Repository URL',
            },

            {
                name: 'description',
                title: 'Project Description',
            },

            {
                name: 'status',
                title: 'Status',
            },

            '__actions'
        ],

         itemActions: [
            {
            	name: 'approve-project',
            	label: '',
            	icon: 'fa fa-thumbs-o-up',
            	class: 'button is-primary'
            },
        ]
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

		// getProject(slug) {
		// 	this.$http.get('api/projects/', slug);

		// },

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
				short: '',
				description: ''
			};

			this.$http.post('api/projects', project).then(function(response) {
				this.formSubmitted = true;
			}, function (response) {
				this.$set('errors', response.data);
			});
		},

		approveProject: function(project) {
            this.$http.patch('api/admin/approve-project/'+project.slug, project).then(function() {
            	// reload data from server
            	this.$broadcast('vuetable:reload');
            });
        },
	},

	events: {
        'vuetable:action': function(action, project) {
            if (action == 'approve-project') {
                this.approveProject(project);
            }
        },
    }
});
