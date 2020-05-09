<?php

namespace App\Http\Controllers;

use App\Notifications\NewsLetter;
use Illuminate\Http\Request;

class OptOutController extends Controller
{
    public function update($uuid) {

        $ticket = \App\OptOutTicket::where('uuid', $uuid)->first();

        if(is_null($ticket)) {

            abort(404);

        }

        // ユーザーの受信設定を「拒否」へ変更
        $user = \App\User::find($ticket->user_id);
        $user->email_accepted = false;
        $user->save();

        // オプトアウトのデータを削除
        $ticket->delete();

        return 'メール受信設定を「拒否」に変更しました。';

    }

    public function test() {

	$users = \App\User::all();
	foreach($users as $user)
	$view = 'emails.news_letter';
	\Notification::send($users,new NewsLetter($view));
    }
}