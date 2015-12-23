# generator-symfonangular
[![npm version](https://badge.fury.io/js/generator-symfonangular.svg)](https://badge.fury.io/js/generator-symfonangular)
[![Code Climate](http://img.shields.io/codeclimate/github/zguillez/generator-symfonangular.svg)](https://codeclimate.com/github/zguillez/generator-symfonangular)
[![Build Status](http://img.shields.io/travis/zguillez/generator-symfonangular.svg)](https://travis-ci.org/zguillez/generator-symfonangular)
[![Coverage Status](http://img.shields.io/coveralls/zguillez/generator-symfonangular.svg)](https://coveralls.io/r/zguillez/generator-symfonangular)
[![Dependency Status](https://gemnasium.com/zguillez/generator-base-angularjs.svg)](https://gemnasium.com/zguillez/generator-symfonangular)
![](https://reposs.herokuapp.com/?path=zguillez/generator-symfonangular)
[![License](http://img.shields.io/:license-mit-blue.svg)](http://doge.mit-license.org)

> [Zguillez](https://zguillez.io) | Guillermo de la Iglesia

### Yeoman generator for full stack development with (PHP) Symfony and (Javascript) AngularJS application

![](http://zguillez.github.io/img/symfonangular.png)

## Getting Started

### Install Yeoman

	npm install -g yo

### Yeoman Generators

To install generator-symfonangular from npm, run:

	npm install -g generator-symfonangular

Finally, initiate the generator:

	yo symfonangular

If you have error on install try to update dependences manually:

```bash
sudo npm update
```

```bash
bower update --allow-root
```

```bash
./composer.phar update
```
## Requeriments

### NodeJS

* [https://nodejs.org/](https://nodejs.org/)

For update npm

	sudo npm install npm -g

### Bower

	npm install -g bower

### Sass

	sudo gem install sass


## Usage

Symfony routing on file */src/App/ClientBundle/Resources/config/routing.yml*:

	_home:
	    path:     /
	    defaults: { _controller: AppClientBundle:App:home }
 
AngularJS routing on file */src/App/ClientBundle/Resources/js/init.js*:

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

### AngularJS controllers
Place on folder: */src/App/ClientBundle/Resources/js/*

### CSS styles
Place on folder: */src/App/ClientBundle/Resources/css/* with .sass or .scss format

### Conpiled files

Grunt **serve** and **build** will compile .sass and .scss files into css files on folder:
*/src/App/ClientBundle/Resources/public/css*

And Javascript files will miminized into folder:
*/src/App/ClientBundle/Resources/public/js*

Symfony will include this files into template by Assetic mode:

	{% block stylesheets %}
	  <link rel="stylesheet" href="{{ asset('lib/css/normalize.css') }}"/>
	  <link rel="stylesheet" href="{{ asset('lib/css/animate.min.css') }}"/>
	  <link rel="stylesheet" href="{{ asset('lib/css/bootstrap.min.css') }}"/>
	  {% stylesheets
	  '@AppClientBundle/Resources/public/css/*.css' filter='cssrewrite' %}
	  <link rel="stylesheet" href="{{ asset_url }}"/>
	  {% endstylesheets %}
	{% endblock %}
	
	{% block javascripts %}
	  <script src="{{ asset('lib/scripts/require.js') }}"></script>
	  <script src="{{ asset('lib/scripts/jquery.min.js') }}"></script>
	  <script src="{{ asset('lib/scripts/angular.min.js') }}"></script>
	  <script src="{{ asset('lib/scripts/angular-route.min.js') }}"></script>
	  <script src="{{ asset('lib/scripts/bootstrap.min.js') }}"></script>
	  <script src="{{ asset('lib/scripts/html5shiv.min.js') }}"></script>
	  {% javascripts
	  '@AppClientBundle/Resources/public/js/*.js' %}
	  <script src="{{ asset_url }}"></script>
	  {% endjavascripts %}
	{% endblock %}

You can also add stylesheeds and scripts from Symfony asset folder **/web**.

Grunt task **Copy.js** will copy files from **/bower_components** folder to **/web/lib/css/** or **/web/lib/scripts/** folders. You can edit this task as you need.

## Working with templates

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

## Runnig and Testing

You can run a local server for development on port *http://localhost:8000/*

	grunt serve
	
Run server on production mode

	grunt serve prod

Build release
		
	grunt build

### Grunt taks

You can edit **Grunt.js** file por edit grunt task, on folder **/grunt**  as you need.

## License

MIT
