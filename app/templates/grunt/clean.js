module.exports = function (grunt) {

  grunt.config.set('clean', {
    scripts: {
      src: ["web/scripts"]
    },
    redirect: {
      src: ["web/index.php"]
    }

  });

};
