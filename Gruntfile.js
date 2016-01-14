/*global module:false*/
module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        // Metadata.
        pkg: grunt.file.readJSON('package.json'),
        banner:
            '/*! <%= pkg.title || pkg.name %>\n' +
            '<%= pkg.homepage ? "* " + pkg.homepage + "\\n" : "" %>' +
            '* Copyright (c) <%= grunt.template.today("yyyy") %> <%= pkg.author.name %>;' +
            ' Licensed <%= _.pluck(pkg.licenses, "type").join(", ") %> */\n',
        // Task configuration.
                less: {
            development: {
                options: {
                    compress: true,
                    yuicompress: true,
                    optimization: 2
                },
                files: {
                    // target.css file: [source.less] files
                    "src/skin/frontend/base/default/css/googletagmanager.css": "src/skin/frontend/base/default/less/*.less",
                }
            }
        },
                karma: {
            options: {
                configFile: 'karma.conf.js'
            },
            continuous: {
                singleRun: true,
                browsers: ['PhantomJS']
            },
        },
        shell: {
            target: {
                command: './compile'
            }
        },
        watch: {
                        less: {
                files: ["src/skin/frontend/base/default/less/*.less"],
                tasks: 'less'
            },
                        components : {
                files: ['src/**/*.js'],
                tasks: 'karma'
            },
            compile: {
                files: ['src/**/*.php', 'src/**/*.phtml', 'src/**/*.xml'],
                tasks: 'shell'
            }
        }
    });

    // These plugins provide necessary tasks.
    grunt.loadNpmTasks('grunt-contrib-watch');
        grunt.loadNpmTasks('grunt-contrib-less');
        grunt.loadNpmTasks('grunt-karma');
    grunt.loadNpmTasks('grunt-shell');

    // Default task.
        grunt.registerTask('default', ['less', 'karma', 'shell']);
    grunt.registerTask('css', ['less']);
    grunt.registerTask('compile', ['shell', 'karma']);
    grunt.registerTask('compile:module', ['shell']);
    grunt.registerTask('compile:script', ['karma']);

};
