'use strict';

module.exports = function (grunt) {

  grunt.initConfig({});

  grunt.registerTask('default', ['php']);

  require('load-grunt-tasks')(grunt);
  require('./grunt/connect')(grunt);
  require('./grunt/watch')(grunt);
  require('./grunt/clean')(grunt);
  require('./grunt/copy')(grunt);

  grunt.registerTask('default', ['build']);

  grunt.registerTask('build', ['clean', 'copy']);

  grunt.registerTask('serve', ['clean:scripts', 'copy', 'php:server', 'watch']);

};
