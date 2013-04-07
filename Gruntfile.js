// https://github.com/gruntjs
// http://gruntjs.com
module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        // == JSON Grunt Package
        pkg: grunt.file.readJSON('package.json'),
        // == Grunt Meta Banner
        banner: '/*! <%= pkg.title || pkg.name %> - v<%= pkg.version %> - ' +
        '<%= grunt.template.today("yyyy-mm-dd") %>\n' +
        '<%= pkg.homepage ? "* " + pkg.homepage + "\\n" : "" %>' +
        '* Copyright (c) <%= grunt.template.today("yyyy") %> <%= pkg.author.name %>;' +
        ' Licensed <%= _.pluck(pkg.licenses, "type").join(", ") %> */\n',
        // == qunit Tests
        qunit: {
            // grunt qunit will test all .php file extensions
            all: ['*.php']
        },
        // == Concatenation
        concat: {
            options: {
                separator: ';'
            },
            dist: {
                src: ['js/ss-social.js', 'js/ss-standard.js', 'js/plugins.js', 'js/script.js'],
                dest: 'js/minified/script-min.js'
            }
        },
        // == Watch Task
        watch: {
            files: '<config:lint.files>',
            tasks: 'lint qunit'
        },
        // == JSHinting
        jshint: {
            options: {
                curly: true,
                eqeqeq: true,
                immed: true,
                latedef: true,
                newcap: true,
                noarg: true,
                sub: true,
                undef: true,
                boss: true,
                eqnull: true,
                browser: true,
                globals: {
                    jQuery: true,
                    require: true,
                    define: true,
                    requirejs: true,
                    describe: true,
                    expect: true,
                    it: true
                }
            },
            uses_defaults: ['js/script.js']
        },
        // == Uglify/Minification
        uglify: {
            dist: {
                src: ['js/ss-social.js', 'js/ss-standard.js', 'js/plugins.js', 'js/script.js'],
                dest: 'js/minified/script-min.js'
            }
        }
    });
    
    // == Grunt Loaded Tasks
    grunt.loadNpmTasks('grunt-contrib-qunit');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    // == Grunt Registered Tasks
    grunt.registerTask('arctest', ['qunit']);
    grunt.registerTask('archint', ['jshint']);
    grunt.registerTask('arcmin', ['concat', 'uglify']);
};