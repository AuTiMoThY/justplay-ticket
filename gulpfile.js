/**
* Version: 5.0.0
*/

const sync = require('browser-sync').create();
const browserSync = require('browser-sync');

const connectphp = require('gulp-connect-php');

const { src, dest, watch, series, parallel } = require('gulp');

const sass = require('gulp-dart-sass');
// const sass           = require('gulp-sass');
sass.compiler = require('node-sass');
const sassGlob = require('gulp-sass-glob');
const sassVars = require('gulp-sass-vars');
const size = require('gulp-size');
const rename = require('gulp-rename');
// gulp-clean-css: CSS 壓縮套件
const cleanCss = require('gulp-clean-css');
const sourcemaps = require('gulp-sourcemaps');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');

const concat = require('gulp-concat');
const tmpl = require('gulp-template');
const nunjucksRender = require('gulp-nunjucks-render');


const config = require('./gulp.config');


// > sass (generate CSS)
function generateCSS() {
    return src(config.entryPath.sass)
        .pipe(sassVars(config.sassVar, { verbose: true }))
        .pipe(sassGlob())
        .pipe(sourcemaps.init())
        .pipe(sass(config.sassOpt))
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(postcss([autoprefixer()]))
        .pipe(size({ title: 'style' }))
        .pipe(sourcemaps.write('.'))
        .pipe(dest(config.outputPath.sass))
        .pipe(browserSync.stream())
        .on('end', () => {
            console.log('=================================');
            console.log(`generate CSS OK!`);
            console.log('=================================');
            browserSync.reload();
        });
}


// > nunjucks (generate HTML)
function nunjucks() {
    // Gets .html and .nunjucks files in pages
    return src(`${config.entry}/pages/**/*.+(html|nunjucks|njk)`)
        // Renders template with nunjucks
        .pipe(nunjucksRender({
            path: [`${config.entry}/pages_templates`],
            data: config.njkOpt,
            ext: ".php"
        }))
        // output files in app folder
        .pipe(dest(config.outputPath.html))
        .on('end', () => {
            console.log('=================================');
            console.log(`generate HTML OK!`);
            console.log('=================================');
            // sync.reload();
        });
}


function jsconfig() {
    // return src(`${config.entry}/script/0.0-start.js`)
    return src(`${config.entry}/config.tmpl.js`)
        .pipe(tmpl({
            jsconfig: JSON.stringify(config.jsConfigOpt)
        }))
        .pipe(rename('0-config.js'))
        .pipe(dest(`${config.entry}/script`));
}

function script() {
    return src(config.entryPath.js)
        .pipe(concat('script.js'))
        .pipe(dest(config.outputPath.js))
        .on('end', () => {
            console.log('=================================');
            console.log(`script concat OK!`);
            console.log('=================================');
            browserSync.reload();
        });
}

function fileMoveScriptPage() {
    return src(`${config.entry}/script_page/*`)
        .pipe(dest(`${config.outputPath.js}/page/`))
        .on('end', () => {
            browserSync.reload();
        });
}


// function browserSync() {
//     sync.init({
//         ui: {
//             port: config.port
//         },
//         server: {
//             baseDir: `./dist`
//         },
//         port: config.port,
//     });

//     console.log('=================================');
//     console.log(config.project + " serving!!");
//     console.log('=================================');


//     global.isWatching = true;

//     watch(config.entryPath.sass, generateCSS);
//     watch(config.entryPath.js, script);
//     watch([`${config.entry}/pages/**/*`, `${config.entry}/pages_templates/**/*`], nunjucks);
//     watch([`${config.entry}/script_page/*`], fileMoveScriptPage);
// }

function phpConnect() {
    connectphp.server({
        // port: 8081
    }, function () {
        browserSync({
            port: 8081,
            proxy: `127.0.0.1:8081/${config.codxfolder}/dist/`
        });
    });

    watch(config.entryPath.sass, generateCSS);
    watch(config.entryPath.js, script);
    watch([`${config.entry}/pages/**/*`, `${config.entry}/pages_templates/**/*`], nunjucks);
    watch([`${config.entry}/script_page/*`], fileMoveScriptPage);

    watch(`${config.output}/*.php`).on('change', function () {
        browserSync.reload();
    });
}



// exports.nunjucks = nunjucks;


exports.default = series(jsconfig, browserSync);
exports.php = series(jsconfig, phpConnect);
