// Create the route module and name it routeApp
var app = angular.module("routeApp",['ngRoute']);
// Config the routes

         // route for the home page

        // route for the about page

        // route for the contact page


// Create the controllers for the different pages below
app.controller('routeCtrl', function($scope){
   $scope.message = "lorem ipsem";
});
// home page controller
    // Create a message to display in the view


// about page controller
    // Create a message to display in the view

// contact page controller
    // Create a message to display in the view
