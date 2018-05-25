1. Instal gulp untuk global, jika belum pernah di install sama sekali
	-- sudo npm install -g gulp 
2. Install grunt untuk global,jika belum pernah di install sama sekali
	-- sudo npm install -g grunt-cli
3. Install grunt di Local Project Anda
	-- npm install grunt --save-dev

4. Masuk Ke Root Project Ionic Anda
5. Install Dependeny Gulp 
	-- npm install gulp-angular-templatecache --save-dev //Untuk Template
	-- npm install gulp-ng-annotate --save-dev //Untuk Mebuat Array Injector Dependency Injection File JS Seperti Controller,Service,Directive,Factory,Filter
	-- npm install gulp-concat-css --save-dev  //Untuk Menggabungkan seluruh File CSS Ke Dalam Satu File
	-- npm install gulp-clean-css --save-dev //Untuk meminify File CSS
	-- npm install gulp-minify-css --save-dev //Depraced Gunakan gulp-clean-css

6. Install Dependeny Grunt
	-- npm install grunt-contrib-uglify --save-dev //Digunakan Untuk Meminify File JS Yang Sudah Di Annotate 

7. Buka file gulpfile,js pada root project anda;
8. Import Dependency Gulp Yang Dibutuhkan Pada gulpfile.js
	//Sudah Disediakan Secara Default Pada Project IONIC
	var gulp = require('gulp');
	var gutil = require('gulp-util');
	var bower = require('bower');
	var concat = require('gulp-concat');
	var sass = require('gulp-sass');
	var rename = require('gulp-rename');
	var sh = require('shelljs');

	//Dependeny Yang Barusan Kita Install
	var minifyCss = require('gulp-minify-css');
	var cleanCss = require('gulp-clean-css');
	var concatCss = require('gulp-concat-css');
	var templateCache = require('gulp-angular-templatecache');
	var ngAnnotate = require('gulp-ng-annotate');

9. Secara Default Pada Project Ionic gulpfile.js akan berisi codingan dibawah ini;
	==============================================================================
	var gulp = require('gulp');
	var gutil = require('gulp-util');
	var bower = require('bower');
	var concat = require('gulp-concat');
	var sass = require('gulp-sass');
	var minifyCss = require('gulp-minify-css');
	var rename = require('gulp-rename');
	var sh = require('shelljs');

	var paths = {
	  sass: ['./scss/**/*.scss']
	};

	gulp.task('default', ['sass']);

	// Customize Radumta Sitepu
	// gulp.task('serve:before', ['watch']);

	gulp.task('sass', function(done) 
	{
	  gulp.src('./scss/ionic.app.scss')
	    .pipe(sass())
	    .on('error', sass.logError)
	    .pipe(gulp.dest('./www/css/'))
	    .pipe(minifyCss({
	      keepSpecialComments: 0
	    }))
	    .pipe(rename({ extname: '.min.css' }))
	    .pipe(gulp.dest('./www/css/'))
	    .on('end', done);
	});

	gulp.task('watch', ['sass'], function() 
	{
	  gulp.watch(paths.sass, ['sass']);
	});

	gulp.task('install', ['git-check'], function() 
	{
	  return bower.commands.install()
	    .on('log', function(data) {
	      gutil.log('bower', gutil.colors.cyan(data.id), data.message);
	    });
	});

	gulp.task('git-check', function(done) 
	{
	  if (!sh.which('git')) 
	  {
	    console.log(
	      '  ' + gutil.colors.red('Git is not installed.'),
	      '\n  Git, the version control system, is required to download Ionic.',
	      '\n  Download git here:', gutil.colors.cyan('http://git-scm.com/downloads') + '.',
	      '\n  Once git is installed, run \'' + gutil.colors.cyan('gulp install') + '\' again.'
	    );
	    process.exit(1);
	  }
	  done();
	});
	================================================================================================
	PROSES MINIFY CSS
	================================================================================================
10. Tambahkan Kodingan Dibawah Ini Untuk Menggabungkan Seluruh File CSS dan Sekaligus meminify file css yang telah digabungkan tadi
	================================================================================================================
	gulp.task('css-minify', function (done) 
	{
	    gulp.src(['!./www/css/ionic.app.min.css','!./www/css/ionic.app.min.css','./www/css/*.css']) 
	    //Source Folder Yang Akan Digabung
	    // Tambahkan Tanda ! jika anda menginginkan file tersebut tidak dimasukkan ke dalam file penggabungan
	    // File Yang Ingin Diabaikan Harus Terlebih Dahulu Di Deklarasikan Sebelum File Yang Ingin Digabung
    	// Lihat Format Diatas
	    .pipe(concatCss("styles.css")) // Nama File Yanga Akan Dibuat Setelah Penggabungan Selesai
	    .pipe(gulp.dest('./www/build/before_minify')) //Folder Tempat Source Code Setelah Selesai Digabung,File Inilah Yang Akan Di Minify
	    .pipe(minifyCss()) // Fungsi Yang Akan Melakukan Minify Source Code
	    .pipe(rename({ extname: '.min.css' })) // Ekstensi Yang Akan Ditambahkan Ke Nama File Setelah Proses Minify Selesai,Nama File akan menjadi styles.min.css
	    .pipe(gulp.dest('./www/build/after_minify')) //Folder Tempat Source Setelah Selesai Proses Minify
	    .on('end', done);
	});

11. Deklerasikan Task Ke gulp task
	Awalnya : gulp.task('default', ['sass']);
	Setelah : gulp.task('default', ['sass','css-minify']);

12.Ketik gulp pada Command Prompt Pada Root Project Anda
13.Jika Terjadi Error Akan Muncul Error,Cari Tahu Kesalahan Yang Terjadi Pada File CSS anda.
	Error Terjadi biasanya,jika pada file css anda terdapat syntaks scss,kurung kurawal tidak tertutup sempurna,
	atau ada komentar yang tidak tertutup secara sempurna.

	================================================================================================
	PROSES MINIFY JS
	================================================================================================
14.Sebelum File JS Pada Ionic Dapat Di Minify Maka Harus Terlebih Dahulu Di Annotate
15.Proses ini adalah untuk memastikan dipendency injection dimasukkan ke dalam array
16.Untuk Annotate Tambahkan Source Code Dibawah Ini Pada File gulp.js
	gulp.task('js-annotate', function (done) 
	{
	  gulp.src('./www/js/**/*.js') //source file yang akan di annotate
	  .pipe(ngAnnotate({single_quotes: true}))
	  .pipe(gulp.dest('./www/build/annotate')) //folder hasil annotate
	  .on('end', done);
	});
17. Deklarasikan Task Ke gulp task
	Awalnya : gulp.task('default', ['sass','css-minify']);
	Setelah : gulp.task('default', ['sass','css-minify','js-annotate']);

18.Ketik gulp pada Command Prompt Pada Root Project Anda Untuk Menjalankan Prose Annotate

19.Setelah Prose Annotate Selesai Tambahkan Sebuah File Baru Pada Root Project Anda
	nama filenya harus :Gruntfile.js














