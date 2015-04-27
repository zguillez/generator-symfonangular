module.exports = function (grunt) {

  grunt.config.set('shell', {
    assetic: {
      command: "php app/console assetic:dump --env=prod --no-debug"
    }

  });

};
