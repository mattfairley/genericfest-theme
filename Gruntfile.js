module.exports = function(grunt) {

	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {                              // Task
			dist: {                            // Target
				options: {                       // Target options
					style: 'expanded'
				},
				files: {                         // Dictionary of files
					'style.css': 'scss/style.scss',       // 'destination': 'source'
				}
			}
		},
		autoprefixer: {
			options: {
		    	browsers: ['last 2 versions', 'ie 8', 'ie 9']
			},
			multiple_files: {
				expand: true,
				flatten: true,
				src: 'src/*.css', // -> src/css/file1.css, src/css/file2.css
				dest: 'dest/*.css' // -> dest/css/file1.css, dest/css/file2.css
			},
		},
		watch: {
			css: {
				files: '**/*.scss',
				tasks: ['sass'],
				options: {
					livereload: true,
				}
			}
		}
	});

	//load tasks
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-autoprefixer');

	// Default task(s)
	grunt.registerTask('default', ['sass', 'autoprefixer','watch']);

};