@extends('layouts.kejiban')

<style>
    ul#create1 {
        margin: 15px auto 0px;
    }

    table#create1 {
        padding: 0px 0px;
        margin: 0px 0px 0px 212px;
        border: #FFFFFF;
    }

    table#create1 tr .error1 {
        background-color: #FFFFFF;
        color: #FF0000;
    }

    table#create1 tr .myname1 {
        text-align: left;
    }

    table#create1 tr td {
        background-color: #FFFFFF;
    }

    table#create2 {
        padding: 0px 0px;
        margin: 0px 0px 0px 212px;
        border: #FFFFFF;
    }

    table#create2 tr .error2 {
        background-color: #FFFFFF;
        color: #FF0000;
    }

    table#create2 tr .topic1 {
        text-align: left;
    }

    table#create2 tr td {
        background-color: #FFFFFF;
    }

    table#create2 td .topic2 {
        width: 300px;
    }

    .error3 {
        margin-top: 5px;
        margin-bottom: 5px;
        margin-left: 215px;
        color: #FF0000;
    }

    textarea {
        display: block;
        width: 860px;
        height: 200px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 0px;
        margin-bottom: 0px;
        font-size: 16px;
    }

    .posts {
        margin-left: 1028px;
        margin-top: 5px;
        margin-bottom: 112px;
    }
</style>

@section('main')
    <main>
        <h1>新規話題作成</h1>
        <nav>
            <ul id="create1">
                <li><a href="home">一覧に戻る</a></li>
            </ul>
        </nav>
        <form action="/home/create" method="post"><!--なぜかform属性記入後デザインがおかしくなる-->

            <table id="create1">
                @csrf
                <tr>
                    <td colspan="2" class="error1">ニックネームを入力してください。</td>
                </tr><!--エラーメッセージ用-->
                <tr>
                    <th class="myname1">ニックネーム：</th>
                    <td>
                        <input type="text" name="name" class="myname2" placeholder="10文字以内">
                    </td>
                </tr>
            </table>
            <table id="create2">
                <tr>
                    <td colspan="2" class="error2">話題名を入力してください。</td>
                </tr><!--エラーメッセージ用-->
                <tr>
                    <th class="topic1">話題名：</th>
                    <td>
                        <input type="text" name="topic" class="topic2" placeholder="20文字以内">
                    </td>
                </tr>
            </table>
            <p class="error3">投稿内容を入力してください。</p><!--エラーメッセージ用-->
            <textarea class="comment" name="comment" rows="20" placeholder="投稿内容(100文字以内)" required></textarea>
            <input type="submit" value="投稿" class="posts">
        </form>
    </main>
@endsection
