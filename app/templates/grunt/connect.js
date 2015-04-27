module.exports = function (grunt) {

  grunt.config.set('php', {

    server: {
      options: {
        protocol: 'http',
        hostname: 'localhost',
        port: '8000',
        base: 'web',
        keepalive: true,
        open: true
      }
    }

  });

};
