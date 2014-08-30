'use strict';

// Declare app level module which depends on filters, and services
angular.module('eCommerce', [
    'ngRoute', 'restangular', 'ngAnimate', 'ui.bootstrap','ui.sortable', 'eCommerce.controllers', 'eCommerce.directives', 'eCommerce.services'
]).config(['$routeProvider', '$locationProvider', 'RestangularProvider', function ($routeProvider, $locationProvider, RestangularProvider) {

    // Enable HTML5 mode
    $locationProvider.html5Mode(true);

    // Set base url for Restangular
    RestangularProvider.setBaseUrl('/admin/api/');

    // Routing
    $routeProvider.when('/products', {templateUrl: 'templates/products', controller: 'ProductsCtrl'});
    $routeProvider.when('/products/edit/:productId', {
        templateUrl: 'templates/product',
        controller: 'ProductsEditCtrl'
    });
    $routeProvider.otherwise({redirectTo: '/products'});
}]);