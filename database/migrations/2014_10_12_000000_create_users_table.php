<?php

use Illuminate\Database\Migrations\Migration;
use App\Database\Blueprint;
use App\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');                               // ユーザーID
            $table->string('username')->unique();                   // ユーザー名
            $table->string('email')->unique();                      // メール
            $table->dateTime('email_verified_at')->nullable();      // メール認証日時
            $table->string('password');                             // パスワード
            $table->string('handlename')->nullable();               // 表示名
            $table->string('icon')->nullable();                     // アイコン
            $table->string('sns')->nullable();                      // SNS
            $table->string('web')->nullable();                      // Webページ
            $table->text('introduction')->nullable();               // 自己紹介
            $table->string('setting_notification');                 // 通知の設定
            $table->dateTime('timer_started_at')->nullable();       // タイマー開始日時
            $table->rememberToken();
            $table->dateTimes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
