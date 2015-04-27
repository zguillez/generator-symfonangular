module.exports = function (grunt) {

  grunt.config.set('copy', {
    scripts: {
      cwd: 'bower_components',
      src: '**/*',
      dest: 'web/scripts',
      expand: true
    }
  });

};
