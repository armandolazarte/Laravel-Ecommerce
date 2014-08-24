'use strict';

// Declare app level module which depends on filters, and services
angular.module('eCommerce', [
    'ngRoute', 'restangular', 'ngAnimate', 'eCommerce.controllers', 'eCommerce.directives'
]).config(['$routeProvider', '$locationProvider', 'RestangularProvider', function ($routeProvider, $locationProvider, RestangularProvider) {

    // Enable HTML5 mode
    $locationProvider.html5Mode(true);

    // Set base url for Restangular
    RestangularProvider.setBaseUrl('/admin/api/');

    // Routing
    $routeProvider.when('/products', {templateUrl: 'partials/products.html', controller: 'ProductsCtrl'});
    $routeProvider.when('/products/edit/:productId', {templateUrl: 'partials/product.html', controller: 'ProductsEditCtrl'});
    $routeProvider.otherwise({redirectTo: '/products'});
}]);