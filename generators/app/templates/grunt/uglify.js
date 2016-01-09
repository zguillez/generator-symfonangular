'use strict';
module.exports = function(grunt) {
	grunt.config.set('uglify', {
		dev: {
			options: {
				mangle: false,
				beautify: true,
				preserveComments: false,
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
				mangle: true,
				preserveComments: false,
				sourceMap: true
			},
			cwd: 'src/AppBundle/Resources/js',
			dest: 'src/AppBundle/Resources/public/js',
			src: '*.js',
			ext: '.js',
			expand: true
		}
	});
};