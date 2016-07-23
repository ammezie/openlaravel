var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.copy('node_modules/bulma/sass', 'resources/assets/sass')
    	// .copy('node_modules/bulma/bulma.sass', 'resources/assets/sass/bulma.sass');


});

elixir(function(mix) {
	mix.scripts('app.js', 'public/js/app.js');
})

elixir(function(mix) {
    mix.sass('app.sass');
});
