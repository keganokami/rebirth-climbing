"use strict";

var gulp = require("gulp");
var sass = require("gulp-sass");

gulp.task("sass", function(done) {
  gulp
    // scssファイルのパス
    .src("./_src/sass/**/*.scss")
    // 出力形式
    .pipe(sass({ outputStyle: "expanded" }))
    // 返還後のcssファイルの出力先
    .pipe(gulp.dest("./css"));
  // gulp4からコールバック関数を呼んであげないと正常終了できない。
  done();
});

// 自動生成用の関数　タスクをコマンドプロンプトから実行するため
gulp.task("watch", function(done) {
  gulp.watch("./_src/sass/**/*.scss", gulp.task("sass"));
  done();
});

// デフォルトでの設定をしているためgulpと実行すればOK
gulp.task("default", gulp.series("watch"));

// 正常終了しないとウォッチ関数が実行されないので注意。
