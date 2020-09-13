<?php

use App\Models\User;


if (!function_exists('get_user')) {
    /**
     * ユーザーの取得
     *
     * @param   String  $user_param ユーザーIDまたはユーザー名
     * @return  User    $user       ユーザーデータ
     */
    function get_user(String $user_param)
    {
        if (preg_match('/^[0-9]+$/', $user_param)) {
            $user = User::where('id', $user_param)->first();
        } else {
            $user = User::where('username', $user_param)->first();
        }

        return $user;
    }
}


if (!function_exists('compress_text')) {
    /**
     * 文字数制限
     * 超過分は.....で表示
     *
     * @param   string  $str        制限する文字列
     * @param   int     $limit      制限文字数
     * @return  string  $display    表示する文字列
     */
    function compress_text(string $str, int $limit)
    {
        if (mb_strlen($str) > $limit) {
            $display = mb_substr($str, 0, $limit);
            $display .= '.....';
        } else {
            $display = $str;
        }

        return $display;
    }
}
