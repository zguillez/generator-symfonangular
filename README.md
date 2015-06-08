# generator-symfonangular [![Build Status](https://secure.travis-ci.org/zguillez/generator-symfonangular.png?branch=master)](https://travis-ci.org/zguillez/generator-symfonangular)

> [Zguillez](https://zguillez.io) | Guillermo de la Iglesia

### Yeoman generator for full stack development with (PHP) Symfony and (Javascript) AngularJS application

![](http://zguillez.github.io/img/symfonangular.png)

## Getting Started

### Install Yeoman

```bash
npm install -g yo
```

### Yeoman Generators

To install generator-symfonangular from npm, run:

```bash
npm install -g generator-symfonangular
```

Finally, initiate the generator:

```bash
yo symfonangular
```

If you have error on install try to update dependences manually:

```bash
sudo npm update
```

```bash
bower update
```

```bash
./composer.phar update
```
## Requeriments

###NodeJS

* [https://nodejs.org/](https://nodejs.org/)

For update npm

```bash
sudo npm install npm -g
```

###Bower

```bash
npm install -g bower
```

## Usage

Symfony routing on file */src/App/ClientBundle/Resources/config/routing.yml*:

	_home:
	    path:     /
	    defaults: { _controller: AppClientBundle:App:home }
 
Angular routing on file */src/App/ClientBundle/Resources/js/init.js*:

	$routeProvider.when('/home/a', {
	    templateUrl: 'modules/slideA.html',
	    controller: 'homeSlideAController'
	  }).when('/home/b', {
	    templateUrl: 'modules/slideB.html',
	    controller: 'homeSlideBController'
	  }).when('/home/intro', {
	    templateUrl: 'templates/intro.html',
	    controller: 'introController'
	  }).otherwise({
	    redirectTo: '/home/a'
	  });

### Working with templates

For set data from Symfony controller to AngularJS template, you need to insert AngularJS template inside Symfony template:

	<div id="container" class="container">
	    {% include 'AppClientBundle::Page/modules/slideA.html.twig' %}
	    {% include 'AppClientBundle::Page/modules/slideB.html.twig' %}
	    <div class="row">
	      <div class="col-xs-12">
	        <div ng-view></div>
	      </div>
	    </div>
	  </div>

Angualar template is like this:

	<script type="text/ng-template" id="modules/slideA.html">
	  <div class="panel panel-default">
	    <div class="panel-body">
	      <h2>{{ title }}</h2>
	      <h3>[[ subtitle ]]</h3>
	      <a class="btn btn-default" ng-click="gotoView('home/b')">CHANGE SUBVIEW</a>
	    </div>
	  </div>
	</script>

Then you can bind data fron Symfony ```{{ title }}``` or from Angular ```[[ subtitle ]]```

You can define AngularJS tag symbols on file *init.js*

	$interpolateProvider.startSymbol('[[');
	$interpolateProvider.endSymbol(']]');

Usage on Symfony controller:

	return $this->render('AppClientBundle:Page:home.html.twig', array(
	      'title' => 'Title from Symfony'
	    ));

Usage on Angular controller:

	app.controller('homeSlideAController', ['$scope', function ($scope) {
	  $scope.subtitle = "Subtitle SlideA from Angular";
	}]);

### Working with AngularJS external templates

For transfer data from Symfony to external AngularJS template you need to set the data to a javascript variable on Symfony template:

	<script>var title="{{ title }}";</script>

And read it on AngularJS template:

	app.controller('introController', ['$scope', function ($scope) {
	  $scope.title = title;
	  $scope.subtitle = "Text from Symfony to Angular";
	  $scope.text = "intro";
	}]);

So we can only bind AngularJS data:

	<div class="panel panel-default">
		<div class="panel-body">
	    <h2>[[ title ]]</h2>
	    <h3>[[ subtitle ]]</h3>
	    <p>[[ text ]]</p>
			<a class="btn btn-default" ng-click="gotoView('home/a')">HOME</a>
		</div>
	</div>

## Testing

You can run a local server for development on port *http://localhost:8000/*

```bash
grunt serve
```

## License

MIT