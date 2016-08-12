var app = angular.module("myApp", []);

app.controller("myController", function($http, $scope, $log){

     this.searchItunes = function(){
        $scope.$log = $log;
        this.data = {};
        var self = this;
        $http({
            url: "https://itunes.apple.com/search?term=" + this.searchTerm + "&callback=JSON_CALLBACK",
            method: 'jsonp'
        })
            .then(
                function(response){
                    console.log("response ",response);
                    self.data = response.data.results;
                    $scope.message = "This has been a success, indeed!";
                    console.log($scope.message);
                },
                function(response){
                    $scope.message = "This has been an utter failure!";
                    console.log($scope.message);
                });
    };
});
