import Vue from 'vue';
import VueResource from 'vue-resource';
// import VuePaginator from 'vuejs-paginator/dist/vuejs-paginator.min.js';

Vue.use(VueResource);

import Project from './components/Project.vue';
import FormError from './components/FormError.vue';
import Vuetable from 'vuetable/src/components/Vuetable.vue';
import VuetablePagination from 'vuetable/src/components/VuetablePagination.vue';

Vue.component('vuetable', Vuetable);
Vue.component('vuetable-pagination', VuetablePagination);

Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

new Vue({
	el: '#project',

	components: {
		Project,
		FormError,
		// vuetable: Vuetable,
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

		columns: [
            'title',
            'project_url',
            'repo_url',
            'description',
            'status',
            '__actions'
        ],

         itemActions: [
            { name: 'approve-project', label: '', icon: 'zoom icon', class: 'ui teal button' },
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
		},

		approveProject: function(id) {
            console.log('view profile with id:', id);
        },
	},

	events: {
        'vuetable:action': function(action, data) {
            console.log('vuetable:action', action, data)
            if (action == 'approve-project') {
                this.approveProject(data.id)
            }
        },
        'vuetable:load-error': function(response) {
            console.log('Load Error: ', response)
        }
    }
});