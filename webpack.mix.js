let mix = require('laravel-mix');
mix.sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/site.scss', 'public/css');