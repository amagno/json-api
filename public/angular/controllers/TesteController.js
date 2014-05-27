jsonApi.factory('testeService', ['$http', function($http){
    return {
        get: $http.get('/teste')
    }
}]);


jsonApi.controller('TesteController', ['$scope', 'testeService', function($scope, testeService){

    testeService.get.success(function(data){
        $scope.testes = data;
    });

    $('#tableteste').dataTable();
}]);