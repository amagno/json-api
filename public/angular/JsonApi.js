var view = {
    make: function(file){
        var path = '/angular/views/';
        var filePath = file.split('.').join('/');
        filePath += '.html';
        path += filePath;
        return path;
    }
};


var jsonApi = angular.module('JsonApi', ['ngRoute']);

jsonApi.config(['$routeProvider', function($routeProvider){
        $routeProvider.
            when('/teste', {
                templateUrl: view.make('teste.index'),
                controller: 'TesteController'
            }).
            when('/', { templateUrl: view.make('main.index') }).
            otherwise({redirectTo: '/'});
}]);

jsonApi.directive('activeLink', function($location) {

    var link = function(scope, element, attrs) {
        scope.$watch(function() { return $location.path(); },
            function(path) {
                var url = element.find('a').attr('href');
                if (url) {
                    url = url.substring(1);
                }

                if (path == url) {
                    element.addClass("active");
                } else {
                    element.removeClass('active');
                }

            });
    };

    return {
        restrict: 'A',
        link: link
    };
});
jsonApi.directive('ngTables', function(){
   return function(scope, element, attrs){
       element.dataTable();
   }
});