'use strict';
module.exports = function(grunt) {
	grunt.config.set('sass', {
		dev: {
			options: {
				style: 'nested'
			},
			files: [{
				cwd: 'src/AppBundle/Resources/css',
				dest: 'src/AppBundle/Resources/public/css',
				src: ['*.scss', '*.sass'],
				ext: '.css',
				expand: true
			}]
		},
		prod: {
			options: {
				style: 'compressed'
			},
			files: [{
				cwd: 'src/AppBundle/Resources/css',
				dest: 'src/AppBundle/Resources/public/css',
				src: ['*.scss', '*.sass'],
				ext: '.css',
				expand: true
			}]
		}
	});
};