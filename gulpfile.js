var elixir = require('laravel-elixir');

require('laravel-elixir-vueify');

elixir(function(mix) {
    mix.copy('node_modules/bulma/sass', 'resources/assets/sass')
    	.copy('node_modules/vue/dist/vue.js', 'resources/assets/js/vendor/vue.js')
    	.copy('node_modules/vue-resource/dist/vue-resource.js', 'resources/assets/js/vendor/vue-resource.js');

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
