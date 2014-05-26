jsonApi.factory('testeService', ['$http', function($http){
    return {
        teste: 'função teste'
    }
}]);


jsonApi.controller('TesteController', ['$scope', 'testeService', function($scope, testeService){
    $scope.varTeste = 'Variável Teste';
    $scope.teste2 = testeService.teste;
}]);