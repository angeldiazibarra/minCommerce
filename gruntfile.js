module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      options: {
        mangle: false
      },
      my_target: {
        files: {
          'resources/js/scripts.js': ['development/js/scripts.js'],
          'resources/js/tracking_ga.js': ['development/js/tracking_ga.js']
        }
      }
    },
    compass: {
      dist: {
        options: {
          config: 'config.rb',
          sassDir: 'development/scss',
          cssDir: 'resources/css'
        }
      }
    },
    watch: {
      js: {
        files: ['development/js/*.js'],
        tasks: ['uglify'],
        options: {
          livereload: true
        }
      },
      compass: {
        files: ['development/scss/*.{scss,sass}'],
        tasks: ['compass'],
        options: {
          livereload: true
        }
      },
      gruntfile: {
        files: ['Gruntfile.js']
      }
    }
  });

  // Load the plugins
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['compass', 'uglify', 'watch']);

};