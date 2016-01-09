'use strict';
module.exports = function(grunt) {
	grunt.config.set('shell', {
		assetic_dev: {
			command: "php bin/console cache:clear && php bin/console assetic:dump"
		},
		assetic_prod: {
			command: "php bin/console cache:clear -e prod && php bin/console assetic:dump -e prod --no-debug"
		}
	});
};