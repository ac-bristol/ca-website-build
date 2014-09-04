module.exports = function(grunt) {
  var jsFileList = [
    //'js/libs/responsiveslides.min.js',
    //'js/libs/respond.min.js',
  ];
  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    concat: {
      options: {
        stripBanners: false,
        banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' +
          '<%= grunt.template.today("yyyy-mm-dd") %> */',
      },
      dist: {
        src: [jsFileList],
        dest: 'js/build.js',
      },
    },
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      build: {
        src: 'js/main.js',
        dest: 'js/main.min.js'
      }
    },
    sass: {                              // Task
      dist: {                            // Target
        options: {                       // Target options
          style: 'expanded'
        },
        files: [{
            expand: true,
            cwd: 'sass',
            src: ['main.scss'],
            dest: 'css',
            ext: '.css'
        }]
      }
    },
    watch: {
      uglify: {
        files: ['js/main.js'],
        tasks: ['uglify'],
      },
      sass: {
      // We watch and compile sass files as normal but don't live reload here
        files: ['sass/*.scss'],
        tasks: ['sass'],
      },
      livereload: {
        // Browser live reloading
        // https://github.com/gruntjs/grunt-contrib-watch#live-reloading
        options: {
          livereload: false
        },
        files: [
          'sass/*',
          'css/main.css',
          'js/main.js',
          'templates/*.php',
          '*.php'
        ]
      }
    }
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  //grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
  //grunt.loadNpmTasks('grunt-casperjs');

  // Default task(s).
  grunt.registerTask('default', ['concat','uglify', 'sass']);

};