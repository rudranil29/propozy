var app = angular.module('webApp', ['ui.router','angular-carousel']); 

app.directive('browseContent', function($window) {
    return {
        restrict: 'E',
        template: '<div ng-include="templateUrl"></div>',
        link: function(scope) {
            
            $window.onresize = function() {
                changeTemplate();
                scope.$apply();
            };
            changeTemplate();
            
            function changeTemplate() {
                var screenWidth = $window.innerWidth;
                if (screenWidth < 768) {
                    scope.templateUrl = 'innerbanner.html';
                } else if (screenWidth >= 768) {
                    scope.templateUrl = 'vbanner.html';
                }
            }
        }
    }
});

