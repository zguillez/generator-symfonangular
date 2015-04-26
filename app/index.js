'use strict';
var yeoman = require('yeoman-generator');
var chalk = require('chalk');
var yosay = require('yosay');

module.exports = yeoman.generators.Base.extend({
  initializing: function () {
    this.pkg = require('../package.json');
  },

  prompting: function () {
    var done = this.async();

    // Have Yeoman greet the user.
    this.log(yosay('Welcome to the fabulous ' + chalk.red('Symfonangular') + ' generator!'));

    var prompts = [];

    this.prompt(prompts, function (props) {
      this.props = props;
      done();
    }.bind(this));
  },

  writing: {
    app: function () {
      this.fs.copy(this.templatePath('composer.*'), this.destinationPath(''));
      this.fs.copy(this.templatePath('app'), this.destinationPath('app'));
      this.fs.copy(this.templatePath('src'), this.destinationPath('src'));
      this.fs.copy(this.templatePath('web'), this.destinationPath('web'));
    },

    projectfiles: function () {
      this.fs.copy(this.templatePath('editorconfig'), this.destinationPath('.editorconfig'));
      this.fs.copy(this.templatePath('jshintrc'), this.destinationPath('.jshintrc'));

    }
  },

  install: function () {
    //this.installDependencies();
    this.spawnCommand('./composer.phar', ['self-update']);
    this.spawnCommand('./composer.phar', ['install']);
  }
});
