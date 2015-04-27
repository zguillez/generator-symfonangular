'use strict';

module.exports = function (grunt) {

  grunt.config.set('copy', {
    scripts: {
      cwd: 'bower_components',
      src: '**/*',
      dest: 'web/scripts',
      expand: true
    },
    templates: {
      cwd: 'src/App/ClientBundle/Resources/views/Page/templates',
      src: '**/*',
      dest: 'web/templates',
      expand: true
    }
  });

};
