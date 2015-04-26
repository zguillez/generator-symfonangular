var app = angular.module('App', ['ngRoute']);
var container;
//-------------------------------------------------------------------------
app.config(['$interpolateProvider', '$routeProvider', function ($interpolateProvider, $routeProvider) {
	$interpolateProvider.startSymbol('[[');
	$interpolateProvider.endSymbol(']]');
	//-----------------------------------
	$routeProvider.when('/timeline', {
		templateUrl: 'timeline.html', controller: 'timelineController'
	}).when('/ecualizador', {
		templateUrl: 'ecualizador.html', controller: 'ecualizadorController'
	}).when('/intro', {
		templateUrl: 'ecualizador.html', controller: 'ecualizadorController'
	}).otherwise({
		redirectTo: '/timeline'
	});
}]);
//-------------------------------------------------------------------------
app.controller('appController', ['$scope', '$location', function ($scope, $location) {
	container = angular.element(document.querySelector('#container'));
	$scope.gotoView = function (view) {
		$location.path('/' + view);
	};
}]);
app.controller('timelineController', ['$scope', function ($scope) {
	$scope.pagina = "timeline";
	container.addClass('container');
	container.removeClass('container-fluid');
}]);
app.controller('ecualizadorController', ['$scope', function ($scope) {
	$scope.pagina = "ecualizador";
	container.removeClass('container');
	container.addClass('container-fluid');
}]);



app.controller('introController', ['$scope', function ($scope) {
	$scope.pagina = "intro";
	container.removeClass('container');
	container.addClass('container-fluid');
}]);