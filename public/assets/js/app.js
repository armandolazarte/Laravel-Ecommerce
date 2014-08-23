'use strict';

// Declare app level module which depends on filters, and services
angular.module('eCommerce', [
    'ngRoute', 'eCommerce.controllers'
]).config(['$routeProvider', '$locationProvider', function ($routeProvider, $locationProvider) {

    $locationProvider.html5Mode(true);

    $routeProvider.when('/products', {templateUrl: 'partials/products.html', controller: 'ProductsCtrl'});
    $routeProvider.otherwise({redirectTo: '/products'});
}]);