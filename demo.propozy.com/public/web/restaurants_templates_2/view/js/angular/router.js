app.config(function($stateProvider, $urlRouterProvider) {

    $urlRouterProvider.otherwise('/!');

    $stateProvider 
        .state('home', {
            url: '/!',
            templateUrl: 'home.html'
        }) 
        .state('about', {
            url: '/about',
            templateUrl: 'about.html'
        })
        .state('menu', {
            url: '/menu',
            templateUrl: 'menu.html'
        })
        .state('special', {
            url: '/special',
            templateUrl: 'special.html'
        }) 
        .state('contact', {
            url: '/contact',
            templateUrl: 'contact.html'
        }) 

});