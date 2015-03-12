module.exports = function(grunt) {

	// Configure task(s)
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		less: {
			build: {
				options: {
					compress: true,
			        yuicompress: true,
			        optimization: 2
				},
				files: {
					'style.css' : 'src/less/style.less'
				}
			},
			dev: {
				options: {
					compress: false,
			        yuicompress: true,
			        optimization: 2
				},
				files: {
					'style.css' : 'src/less/style.less'
				}
			}
		},
		watch : {
			css: {
				files: ['src/less/**/*.less'],
				tasks: ['less:dev']
			}
		}
	});

	// Load the plugins
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-watch');

	// Register task(s)
	grunt.registerTask('default', ['less:dev']);
	grunt.registerTask('build', ['less:build']);
};