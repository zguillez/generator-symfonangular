'use strict';

module.exports = function (grunt) {

  grunt.config.set('uglify', {
    dist: {
      options: {
        mangle: true,
        preserveComments: 'no',
        sourceMap: false
      },
      cwd: 'src/App/ClientBundle/Resources/js',
      dest: 'src/App/ClientBundle/Resources/public/js',
      src: '*.js',
      ext: '.js',
      expand: true
    }
  });

};
