'use strict';

module.exports = function (grunt) {

  grunt.initConfig({});

  require('load-grunt-tasks')(grunt);
  require('./grunt/clean')(grunt);
  require('./grunt/copy')(grunt);

  grunt.registerTask('default', ['build']);
  grunt.registerTask('build', ['clean', 'copy']);

};
