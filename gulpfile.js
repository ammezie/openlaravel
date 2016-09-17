var elixir = require('laravel-elixir');

require('laravel-elixir-vueify');

elixir(function(mix) {
    mix.copy('node_modules/bulma/sass', 'resources/assets/sass/bulma')
    	// .copy('node_modules/bulma/bulma.sass', 'resources/assets/sass/bulma');
    	.copy('node_modules/simplemde/dist/simplemde.min.css', 'public/css/simplemde.min.css')
    	.copy('node_modules/simplemde/dist/simplemde.min.js', 'public/js/simplemde.min.js');

});

// elixir(function(mix) {
// 	mix.scripts([
// 		'vendor/vue.js',
// 		'vendor/vue-resource.js'
// 	], 'public/js/vendor.js');

// 	mix.scripts('app.js', 'public/js/app.js');
// });

elixir(function(mix) {
    mix.sass('app.sass');

    mix.browserify('app.js');
});
