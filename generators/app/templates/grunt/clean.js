'use strict';
module.exports = function(grunt) {
	grunt.config.set('clean', {
		public: {
			src: ["src/AppBundle/Resources/public"]
		},
		scripts: {
			src: ["web/scripts"]
		}
	});
};