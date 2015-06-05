'use strict';

module.exports = function (grunt) {

  grunt.config.set('copy', {
    templates: {
      cwd: 'src/App/ClientBundle/Resources/views/Page/templates',
      src: '**/*',
      dest: 'web/templates',
      expand: true
    },
    css: {
      cwd: 'bower_components',
      src: ['animate.css', 'bootstrap/dist/js/bootstrap.css', 'normalize.css'],
      dest: 'src/App/ClientBundle/Resources/public/css',
      expand: true
    },
    js: {
      cwd: 'src/App/ClientBundle/Resources/js',
      src: ['*.js'],
      dest: 'src/App/ClientBundle/Resources/public/js',
      expand: true
    },
    requirejs: {
      cwd: 'bower_components/requirejs',
      src: ['require.js'],
      dest: 'web/scripts',
      expand: true
    },
    html5shiv: {
      cwd: 'bower_components/html5shiv/dist',
      src: ['html5shiv.min.js'],
      dest: 'web/scripts',
      expand: true
    },
    jquery: {
      cwd: 'bower_components/jquery/dist',
      src: ['jquery.min.js'],
      dest: 'web/scripts',
      expand: true
    },
    angular: {
      cwd: 'bower_components/angular',
      src: ['angular.min.js'],
      dest: 'web/scripts',
      expand: true
    },
    angular_route: {
      cwd: 'bower_components/angular-route',
      src: ['angular-route.min.js'],
      dest: 'web/scripts',
      expand: true
    },
    bootstrap: {
      cwd: 'bower_components/bootstrap/dist/js',
      src: ['bootstrap.min.js'],
      dest: 'web/scripts',
      expand: true
    }
  });

};
