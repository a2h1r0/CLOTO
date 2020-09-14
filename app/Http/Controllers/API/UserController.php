<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    // アイコン保存ディレクトリ
    const ICON_STORE_DIR = 'public/user/icon/';


    /** @var User */
    protected $user;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  UserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        //
    }

    /**
     * ユーザーデータの表示
     *
     * @param  String $username ユーザー名
     * @return \Illuminate\Http\Response
     */
    public function show(String $username)
    {
        return response()->json(['user' => get_user($username), 'authId' => Auth::id()]);
    }

    /**
     * ユーザーデータの更新
     *
     * @param  UserRequest $request 更新内容
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request)
    {
        $param = $request->toArray();

        // 更新するユーザーを取得
        $edit_user = $this->user->where('username', $request['username'])->first();

        // アイコンの処理
        if (!empty($param['upload-image'])) {
            // 削除処理
            if ($edit_user->icon != 'default.jpg') {
                // 初期値以外の場合には削除
                Storage::delete(self::ICON_STORE_DIR . $edit_user->icon);
            }

            // 保存処理
            $savename = $request->file('upload-image')->hashName();
            $request->file('upload-image')->storeAs(self::ICON_STORE_DIR, $savename);

            $param['icon'] = $savename;
        }

        // SNSの処理
        $param['sns'] = array('twitter' => $param['twitter'], 'github' => $param['github'], 'qiita' => $param['qiita']);

        // データの更新
        $edit_user->update($param);

        return response()->json('OK');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
