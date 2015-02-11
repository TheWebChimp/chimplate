module.exports = function(grunt) {

	// 1. All configuration goes here
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		concat: {
			dist: {
				src: [
					//Project Styles
					'css/src/chimplate-base.css',
					'css/src/chimplate-grid.css',
					'css/src/chimplate-forms.css',
					'css/src/chimplate-buttons.css'
				],
				dest: 'css/dist/chimplate-build.css',
			}
		},

		cssmin: {
			target: {
				files: {
					'css/dist/chimplate-build.min.css': ['css/dist/chimplate-build.css']
				}
			}
		}
	});

	// 3. Where we tell Grunt we plan to use this plug-in.
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-cssmin');

	// 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
	grunt.registerTask('default', ['concat', 'cssmin']);

};