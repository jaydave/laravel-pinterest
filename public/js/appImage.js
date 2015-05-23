
var masonryApp = angular.module('masonryApp', ['masonryLayout', 'infinite-scroll']);

masonryApp.controller("LoadImages", ['$scope', '$interval', '$timeout', '$http', function($scope, $interval, $timeout, $http) {

    var busy = false,
        heights = [254, 300, 192, 450, 350, 200, 360, 420, 270, 400, 200],
        cats = ['abstract', 'animals', 'cats', 'city', 'food', 'nature', 'transport'],
        stop;

    $scope.images = [];
    $scope.images2 = [];

    $scope.refresh = function() {
        $scope.images.length = 0;
        $scope.images2.length = 0;

        $timeout(function() { $scope.fetchNext(); }, 1000);
    };

    $scope.fetchNext = function(q) {
        var i=0;

        if(!busy) {
            console.log('Fetching next');
            busy = true;


            $http.get('/show')
            .success(function(data, status) {
              console.log('ajax call ');

              for(var i=0; i<data.length; i++) {
                  $scope.images.push(
                      data[i]
                  );
              }
            }).error(function(data, status) {
              // Some error occurred
            });


            busy = false;

        }

    };   

}]);

masonryApp.factory('ajaxService', function($http) {
   return {
        getFoos: function() {
             //return the promise directly.
             return $http.get('/show')
                       .then(function(result) {
                            //resolve the promise as the data
                            return result.data;
                        });
        }
   }
});