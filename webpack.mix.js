let mix = require('laravel-mix');
let build = require('./tasks/build.js');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');
mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch(['source/**/*.md', 'source/**/*.php', 'source/**/*.scss', '!source/**/_tmp/*']),
    ]
});

mix
    .sass('source/_assets/sass/main.scss', 'css')
    .js('source/_assets/js/slider-vanilla.js', 'js')
    .js('source/_assets/js/navbar.js', 'js')
;