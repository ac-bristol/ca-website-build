module.exports = function(grunt) {
  var jsFileList = [
    //'js/libs/responsiveslides.min.js',
    '<%= meta.srcPath %>javascript/libs/jquery.1.11.1.js',
    '<%= meta.srcPath %>javascript/libs/respond.min.js',
    '<%= meta.srcPath %>javascript/navigation.js',
    '<%= meta.srcPath %>javascript/skip-link-focus-fix.js'
    //'<%= meta.srcPath %>javascript/customizer.js'
  ];
  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    meta: {
      srcPath: 'src/',
      buildPath: 'assets/',
      projectName: 'Carried Away',
      projectNameSpace: 'carried-away',
    },
    concat: {
      options: {
        stripBanners: false,
        banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' +
          '<%= grunt.template.today("yyyy-mm-dd") %> */',
      },
      dist: {
        src: [jsFileList],
        dest: '<%= meta.buildPath %>javascript/build.js',
      },
    },
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      build: {
        src: '<%= meta.srcPath %>javascript/main.js',
        dest: '<%= meta.buildPath %>javascript/main.min.js'
      }
    },
    compass: {
      dev: {
          options: {              
            sassDir: '<%= meta.srcPath %>scss',
            cssDir: '<%= meta.buildPath %>styles',
            imagesDir: '<%= meta.buildPath %>images',
            javascriptsDir: '<%= meta.buildPath %>scripts',    
            fontsDir: '<%= meta.buildPath %>fonts',
            outputStyle: 'expanded',
            sourcemap: true
          }
      },
      build: {
        options: {              
          sassDir: '<%= meta.srcPath %>scss',
          cssDir: '<%= meta.buildPath %>styles',
          imagesDir: '<%= meta.buildPath %>images',
          javascriptsDir: '<%= meta.buildPath %>scripts',    
          fontsDir: '<%= meta.buildPath %>fonts',
          outputStyle: 'compressed',
          environment: 'production'
        }
      },
    },
    watch: {
      uglify: {
        files: ['<%= meta.srcPath %>javascript/main.js'],
        tasks: ['uglify'],
      },
      sass: {
      // We watch and compile sass files as normal but don't live reload here
        files: ['<%= meta.srcPath %>scss/*.scss'],
        tasks: ['compass:dev'],
      }
    }
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  //grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
  //grunt.loadNpmTasks('grunt-casperjs');

  // Default task.
  grunt.registerTask('default', ['compass:dev','concat']);

  // Build Task
  grunt.registerTask('build', ['compass:build','uglify', 'concat']);

};