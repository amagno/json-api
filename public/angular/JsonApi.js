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
            when('/', {
                templateUrl: view.make('teste.index'),
                controller: 'TesteController'
            }).
            otherwise({redirectTo: '/'});
}]);