'use strict';
module.exports = function(grunt) {
	grunt.config.set('copy', {
		templates: {
			cwd: 'src/AppBundle/Resources/views/page/templates',
			src: '**/*',
			dest: 'web/templates',
			expand: true
		},
		animate: {
			cwd: 'bower_components/animate.css/',
			src: ['animate.min.css'],
			dest: 'web/lib/css',
			expand: true
		},
		bootstrapcss: {
			cwd: 'bower_components/bootstrap/dist/css',
			src: ['bootstrap.min.css'],
			dest: 'web/lib/css',
			expand: true
		},
		normalize: {
			cwd: 'bower_components/normalize.css/',
			src: ['normalize.css'],
			dest: 'web/lib/css',
			expand: true
		},
		requirejs: {
			cwd: 'bower_components/requirejs',
			src: ['require.js'],
			dest: 'web/lib/scripts',
			expand: true
		},
		html5shiv: {
			cwd: 'bower_components/html5shiv/dist',
			src: ['html5shiv.min.js'],
			dest: 'web/lib/scripts',
			expand: true
		},
		jquery: {
			cwd: 'bower_components/jquery/dist',
			src: ['jquery.min.js'],
			dest: 'web/lib/scripts',
			expand: true
		},
		angular: {
			cwd: 'bower_components/angular',
			src: ['angular.min.js'],
			dest: 'web/lib/scripts',
			expand: true
		},
		angular_route: {
			cwd: 'bower_components/angular-route',
			src: ['angular-route.min.js'],
			dest: 'web/lib/scripts',
			expand: true
		},
		bootstrap: {
			cwd: 'bower_components/bootstrap/dist/js',
			src: ['bootstrap.min.js'],
			dest: 'web/lib/scripts',
			expand: true
		}
	});
};