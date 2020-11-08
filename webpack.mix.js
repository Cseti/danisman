let mix = require('laravel-mix');

mix
    .js('src/js/app.js', 'js')
    .sass('src/scss/app.scss', 'css')
    .setPublicPath('dist')
    .sourceMaps()
    .minify('dist/css/app.css')
    .minify('dist/js/app.js')
    .browserSync({
        proxy: 'http://danisman.local',
        files: [
            'dist/js/**/*.js',
            'dist/css/**/*.css',
            'dist/**/*.php'
        ],
    })
    .version();