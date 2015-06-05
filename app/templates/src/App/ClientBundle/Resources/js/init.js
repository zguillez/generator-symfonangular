var app = angular.module('App', ['ngRoute']);
//-------------------------------------------------------------------------
app.config(['$interpolateProvider', '$routeProvider', function ($interpolateProvider, $routeProvider) {
  $interpolateProvider.startSymbol('[[');
  $interpolateProvider.endSymbol(']]');
  //-----------------------------------
  $routeProvider.when('/page1_1', {
    templateUrl: 'modules/page1_1.html',
    controller: 'page1_1_Controller'
  }).when('/page1_2', {
    templateUrl: 'modules/page1_2.html',
    controller: 'page1_2_Controller'
  }).when('/intro', {
    templateUrl: 'templates/intro.html',
    controller: 'introController'
  }).otherwise({
    redirectTo: '/page1_1'
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
app.controller('page1_1_Controller', ['$scope', function ($scope) {
  $scope.pagina = "page1_1";
  $scope.container.addClass('container');
  $scope.container.removeClass('container-fluid');
}]);
app.controller('page1_2_Controller', ['$scope', function ($scope) {
  $scope.pagina = "page1_2";
  $scope.container.removeClass('container');
  $scope.container.addClass('container-fluid');
}]);
app.controller('introController', ['$scope', function ($scope) {
  $scope.pagina = "intro";
  $scope.container.removeClass('container');
  $scope.container.addClass('container-fluid');
}]);
