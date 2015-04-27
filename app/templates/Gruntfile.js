'use strict';

module.exports = function (grunt) {

  grunt.initConfig({});

  grunt.registerTask('default', ['php']);

  require('load-grunt-tasks')(grunt);
  require('./grunt/connect')(grunt);
  require('./grunt/watch')(grunt);
  require('./grunt/clean')(grunt);
  require('./grunt/copy')(grunt);
  require('./grunt/shell')(grunt);
  require('./grunt/uglify')(grunt);
  require('./grunt/sass')(grunt);

  grunt.registerTask('default', ['build']);

  grunt.registerTask('build', ['clean', 'copy']);

  grunt.registerTask('serve', function (env) {

    if (env === 'prod') {
      grunt.task.run(['clean', 'copy', 'uglify', 'sass:prod', 'shell:assetic', 'php:prod', 'watch']);
    } else {
      grunt.task.run(['clean', 'copy', 'sass:dev', 'php:dev', 'watch']);
    }

  });

};
