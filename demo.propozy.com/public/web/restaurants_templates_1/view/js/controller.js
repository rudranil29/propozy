app.controller('webCtrl', function($scope, $rootScope, $filter, $stateParams, $state, $http) { 
	
	$scope.$on('$viewContentLoaded', function(){ 
	});
	
	$http.get("js/json.txt").then(function(response) {
        $scope.data = response.data;
    }); 
});
