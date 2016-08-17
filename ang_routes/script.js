// Create the route module and name it routeApp
var app = angular.module("routeApp",['ngRoute']);
// Config the routes
app.config(function($routeProvider){
    $routeProvider
         // route for the home page
        .when('/',{
            templateUrl : 'pages/home.html',
            controller: 'routeCtrl'
    })
        // route for the about page
        .when('/contact',{
            templateUrl : 'pages/contact.html',
            controller: 'contactCtrl'
    })
        // route for the contact page
        .when('/about',{
            templateUrl : 'pages/about.html',
            controller: 'aboutCtrl'
        });
});
// Create the controllers for the different pages below
app.controller('routeCtrl', function($scope){
   $scope.message = "lorem ipsem";
}).controller('contactCtrl', function($scope){
    $scope.message = "contact lorem ipsem";
}).controller('aboutCtrl', function($scope){
    $scope.message = "about lorem ipsem";
});
// home page controller
    // Create a message to display in the view


// about page controller
    // Create a message to display in the view

// contact page controller
    // Create a message to display in the view
