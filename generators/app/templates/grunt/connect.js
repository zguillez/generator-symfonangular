'use strict';
module.exports = function(grunt) {
	grunt.config.set('php', {
		dev: {
			options: {
				protocol: 'http',
				hostname: 'localhost',
				port: '8000',
				base: 'web',
				open: '/app_dev.php',
				keepalive: true
			}
		},
		prod: {
			options: {
				protocol: 'http',
				hostname: 'localhost',
				port: '8000',
				base: 'web',
				open: '/app.php',
				keepalive: true
			}
		}
	});
};