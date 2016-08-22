'use strict';
var yeoman = require('yeoman-generator');
var chalk = require('chalk');
var yosay = require('yosay');
module.exports = yeoman.Base.extend({
	constructor: function () {
		yeoman.Base.apply(this, arguments);
	},
	initializing: function () {
		this.pkg = require('../../package.json');
		this.log(yosay('Welcome to the zetadelic ' + chalk.red('Symfonangular v' + this.pkg.version) + ' generator!'));
	},
	writing: {
		app: function () {
			this.fs.copy(this.templatePath('composer.*'), this.destinationPath(''));
			this.fs.copy(this.templatePath('package.json'), this.destinationPath('package.json'));
			this.fs.copy(this.templatePath('bower.json'), this.destinationPath('bower.json'));
			this.fs.copy(this.templatePath('Gruntfile.js'), this.destinationPath('Gruntfile.js'));
			this.fs.copy(this.templatePath('app'), this.destinationPath('app'));
			this.fs.copy(this.templatePath('bin'), this.destinationPath('bin'));
			this.fs.copy(this.templatePath('grunt'), this.destinationPath('grunt'));
			this.fs.copy(this.templatePath('src'), this.destinationPath('src'));
			this.fs.copy(this.templatePath('tests'), this.destinationPath('tests'));
			this.fs.copy(this.templatePath('var'), this.destinationPath('var'));
			this.fs.copy(this.templatePath('web'), this.destinationPath('web'));
		},
		projectfiles: function () {
			this.fs.copy(this.templatePath('editorconfig'), this.destinationPath('.editorconfig'));
			this.fs.copy(this.templatePath('jshintrc'), this.destinationPath('.jshintrc'));
			this.fs.copy(this.templatePath('bowerrc'), this.destinationPath('.bowerrc'));
		}
	},
	install: function () {
		var scope = this;
		this.installDependencies(function () {
			console.log('\n\n' + chalk.underline.green('** Install Done! **') + '\n\n' + chalk.green('Install Symfony vendors running this command:') + '\n' + chalk.yellow('./composer.phar self-update && ./composer.phar install') + '\n\n');
		});
	}
});