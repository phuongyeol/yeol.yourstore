let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
   
mix.styles([
	'resources/assets/sass/app.scss',
	'resources/assets/sass/testnpm.scss'
], 'public/css/all.css');

mix.babel('resources/assets/sass/app.scss','public/css/babel.css');



mix.styles([
	'resources/assets/sass/adminlte.css',
	'resources/assets/sass/adminlte.min.css',
],'public/css/admin.css');

mix.styles([
	'resources/assets/sass/loginstyle.css',
	'resources/assets/sass/loginstyle.css',
],'public/css/login.css');


if(mix.inProduction()){
	mix.version();
}