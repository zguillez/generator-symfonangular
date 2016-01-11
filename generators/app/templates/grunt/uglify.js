'use strict';
module.exports = function(grunt) {
	grunt.config.set('uglify', {
		dev: {
			options: {
				mangle: false,
				beautify: true,
				preserveComments: true,
				sourceMap: false
			},
			cwd: 'src/AppBundle/Resources/js',
			dest: 'src/AppBundle/Resources/public/js',
			src: '*.js',
			ext: '.js',
			expand: true
		},
		prod: {
			options: {
				mangle: false,
				report: 'min',
				preserveComments: false,
				sourceMap: false
			},
			cwd: 'src/AppBundle/Resources/js',
			dest: 'src/AppBundle/Resources/public/js',
			src: '*.js',
			ext: '.js',
			expand: true
		}
	});
};