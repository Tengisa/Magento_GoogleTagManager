// Karma configuration
// Generated on Fri Oct 03 2014 07:15:54 GMT+0200 (SAST)

module.exports = function(config) {
  config.set({

    // base path, that will be used to resolve files and exclude
    basePath: '',


    // frameworks to use
    frameworks: ['jasmine'],


    // list of files / patterns to load in the browser
    files: [
      // third party requirements:
      'bower_components/jquery/dist/*.js',

      // components:
      'src/skin/frontend/base/default/js/*.js',

      // tests:
      'src/spec/**/*Spec.js'
    ],

    //'dots', 'progress',
    reporters: ['html', 'spec'],

    preprocessors: {
      'app/js/*.js' : 'coverage',
      'app/js/controllers/**/*.js' : 'coverage',
      'app/js/services/*.js' : 'coverage',
      '**/*.html': ['ng-html2js'] //for directives testing
    },


    // list of files to exclude
    exclude: [

    ],


    // test results reporter to use
    // possible values: 'dots', 'progress', 'junit', 'growl', 'coverage'
    //'growl', 'coverage'



    // web server port
    port: 9876,


    // enable / disable colors in the output (reporters and logs)
    colors: true,


    // level of logging
    // possible values: config.LOG_DISABLE || config.LOG_ERROR || config.LOG_WARN || config.LOG_INFO || config.LOG_DEBUG
    logLevel: config.LOG_INFO,


    // enable / disable watching file and executing tests whenever any file changes
    autoWatch: true,


    // Start these browsers, currently available:
    // - Chrome
    // - ChromeCanary
    // - Firefox
    // - Opera (has to be installed with `npm install karma-opera-launcher`)
    // - Safari (only Mac; has to be installed with `npm install karma-safari-launcher`)
    // - PhantomJS
    // - IE (only Window; has to be installed with `npm install karma-ie-launcher`)
    //browsers: ['PhantomJS'],
    browsers: ['Chrome'],

    plugins : [
            //'karma-coverage',
            //'karma-jasmine-html-reporter',
	          'karma-spec-reporter',
            'karma-chrome-launcher',
            'karma-firefox-launcher',
            'karma-phantomjs-launcher',
            'karma-jasmine',
            'karma-junit-reporter',
            'karma-ng-html2js-preprocessor'
            ],

    htmlReporter: {
      outputDir: 'reports',
      templatePath: __dirname+'/jasmine_template.html'
    },

    /*junitReporter : {
      outputFile: 'reports/unit.xml',
      suite: 'unit'
    },

    coverageReporter: {
      type : 'cobertura',
      dir : 'reports/coverage/'
    },*/

    // If browser does not capture in given timeout [ms], kill it
    captureTimeout: 60000,


    // Continuous Integration mode
    // if true, it capture browsers, run tests and exit
    singleRun: false
  });
};
