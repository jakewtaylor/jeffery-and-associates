const { mix } = require('laravel-mix');

mix.disableNotifications()
    .sass('resources/assets/scss/login/style.scss', 'public/css/login.css')
    .sass('resources/assets/scss/app/style.scss', 'public/css/app.css')

    .js('resources/assets/js/popup.js', 'public/js/popup.js')
