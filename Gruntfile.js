module.exports = function(grunt) {

	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		// Tasks
		watch: {
			sass: {
				files: ['frontend/sass/**/*.{scss,sass}'],
				tasks: ['sass']
			},
			js: {
				files: ['frontend/javascripts/**/*.js'],
				tasks: ['uglify']
			}
		},
		sass: {
			dist: {
				options: {
					style: 'compressed',
					lineNumbers: false,
					sourcemap: 'none',
					loadPath: require('node-neat').includePaths
				},
				files: {
					'public/css/styles.css': 'frontend/sass/styles.scss'
				}
			}
		},
		uglify: {
			all: {
				options: {
					compress: false
				},
				files: {
					'public/js/scripts.min.js': [
						//'bower_components/modernizr/modernizr.js',
						//'bower_components/jquery/dist/jquery.min.js',
						'bower_components/handlebars/handlebars.js',
						'bower_components/typeahead.js/dist/typeahead.bundle.min.js',
						'bower_components/moment/moment.js',
						'bower_components/pikaday/pikaday.js',
						'bower_components/pikaday/plugins/pikaday.jquery.js',
						'frontend/javascripts/scripts.js',
					]
				}
			}
		}
	});

	// Load the plugin that provides the "uglify" task.
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-uglify');

	// Default task(s).
	grunt.registerTask('default', [
		'sass',
		'uglify',
		'watch'
	]);

};
