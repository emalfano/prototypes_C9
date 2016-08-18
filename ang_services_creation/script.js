var app = angular.module('sgtApp', []);

app.provider('sgtData', function(){
    //Create a variable to hold this
    var self = this;
    //Create a variable to hold your api key but set it to an empty string
    this.apiKey = "";
    //Create a variable to hold the API url but set it to an empty string
    this.apiUrl = "";

    //Add the necessary services to the function parameter list
    this.$get = function($http, $q, $log){
        //return an object that contains a function to call the API and get the student data
        //Refer to the prototype instructions for more help


        return {
            call_api : function(){
            var data = "api_key=" + self.apiKey;
            var defer = $q.defer();
            $http( {
                url : self.apiUrl,
                method : "POST",
                data : data,
                headers: {"Content-Type": "application/x-www-form-urlencoded"}
            }).then(function(resp){
                $log.info("Data from API call: ", resp);
                defer.resolve(resp);
            }, function(resp){
                $log.error("HTTP request failed: ", resp);
                defer.reject("HTTP request failed", resp);
            });
                return defer.promise;
            }
        };
    };
});

//Config your provider here to set the api_key and the api_url
app.config(function(sgtDataProvider){
    sgtDataProvider.apiKey = "16sSwvY95j";
    sgtDataProvider.apiUrl = "http://s-apis.learningfuze.com/sgt/get";
});

//Include your service in the function parameter list along with any other services you may want to use
app.controller('ioController', function(sgtData, $log){
    //Create a variable to hold this, DO NOT use the same name you used in your provider
    var studentData = this;
    //Add an empty data object to your controller, make sure to call it 'data'
    this.data = {};

    //Add a function called getData to your controller to call the SGT API
    //Refer to the prototype instructions for more help
    this.getData = function() {
        sgtData.call_api()
            .then(function (resp) {
                console.log("we got data ", resp);
                studentData.data = resp;
            }, function (resp) {
                console.log("what happened?", resp);
            });
    };
});