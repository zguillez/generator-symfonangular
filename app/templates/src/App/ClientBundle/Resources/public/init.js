var app = angular.module('App', ['ngRoute']);
//-------------------------------------------------------------------------
app.config(['$interpolateProvider', '$routeProvider', function ($interpolateProvider, $routeProvider) {
  $interpolateProvider.startSymbol('[[');
  $interpolateProvider.endSymbol(']]');
  //-----------------------------------
  $routeProvider.when('/timeline', {
    templateUrl: 'modules/timeline.html',
    controller: 'timelineController'
  }).when('/ecualizador', {
    templateUrl: 'modules/ecualizador.html',
    controller: 'ecualizadorController'
  }).when('/intro', {
    templateUrl: 'templates/intro.html',
    controller: 'introController'
  }).otherwise({
    redirectTo: '/timeline'
  });
}]);
//-------------------------------------------------------------------------
app.controller('appController', ['$scope', '$location', function ($scope, $location) {
  /* test */
  console.log(3);
  $scope.container = angular.element(document.querySelector('#container'));
  $scope.gotoView = function (view) {
    $location.path('/' + view);
  };
}]);
app.controller('timelineController', ['$scope', function ($scope) {
  $scope.pagina = "timeline";
  $scope.container.addClass('container');
  $scope.container.removeClass('container-fluid');
}]);
app.controller('ecualizadorController', ['$scope', function ($scope) {
  $scope.pagina = "ecualizador";
  $scope.container.removeClass('container');
  $scope.container.addClass('container-fluid');
}]);
app.controller('introController', ['$scope', function ($scope) {
  $scope.pagina = "intro";
  $scope.container.removeClass('container');
  $scope.container.addClass('container-fluid');
}]);
