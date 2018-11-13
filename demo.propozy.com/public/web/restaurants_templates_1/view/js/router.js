app.config(function($stateProvider, $urlRouterProvider) {

    $urlRouterProvider.otherwise('/!');

    $stateProvider 
        .state('home', {
            url: '/!',
            templateUrl: 'home.html',
        }) 
        .state('menu', {
            url: '/menu',
            templateUrl: 'menu.html'
        })
        .state('chef', {
            url: '/chef',
            templateUrl: 'chef.html'
        })
        .state('reservation', {
            url: '/reservation',
            templateUrl: 'reservation.html'
        })
        .state('location', {
            url: '/location',
            templateUrl: 'contact.html'
        })
});