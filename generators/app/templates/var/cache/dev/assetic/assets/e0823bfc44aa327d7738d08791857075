var app = angular.module("App", [ "ngRoute" ]);

app.config([ "$interpolateProvider", "$routeProvider", function($interpolateProvider, $routeProvider) {
    $interpolateProvider.startSymbol("[["), $interpolateProvider.endSymbol("]]"), $routeProvider.when("/home/a", {
        templateUrl: "/modules/slideA.html",
        controller: "homeSlideAController"
    }).when("/home/b", {
        templateUrl: "/modules/slideB.html",
        controller: "homeSlideBController"
    }).when("/intro", {
        templateUrl: "/templates/intro.html",
        controller: "introController"
    }).otherwise({
        redirectTo: "/home/a"
    });
} ]), app.controller("appController", [ "$scope", "$location", function($scope, $location) {
    $scope.container = angular.element(document.querySelector("#container")), $scope.gotoView = function(view) {
        console.log(view), $location.path(view);
    };
} ]), app.controller("homeSlideAController", [ "$scope", function($scope) {
    $scope.subtitle = "Subtitle SlideA from Angular";
} ]), app.controller("homeSlideBController", [ "$scope", function($scope) {
    $scope.subtitle = "Subtitle SlideB from Angular";
} ]), app.controller("introController", [ "$scope", function($scope) {
    $scope.title = title, $scope.subtitle = "Text from Symfony to Angular", $scope.text = intro;
} ]);