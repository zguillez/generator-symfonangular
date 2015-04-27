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

  grunt.registerTask('serve', function (env) {

    if (env === 'prod') {
      grunt.task.run(['clean', 'copy', 'php:prod', 'watch']);
    } else {
      grunt.task.run(['clean', 'copy', 'php:dev', 'watch']);
    }

  });

};
