@extends('layouts.kejiban')

<style>
    ul#topic1 {
        margin: 15px auto 15px;
    }

    .scroll {
        width: 700px;
        height: 240px;
        overflow: auto;
        border: 1px solid #6E6E6E;
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 5px;
    }

    table#topic1 {
        padding: 0px 0px;
        margin: 0px 0px 0px 212px;
        border: #FFFFFF;
    }

    table#topic1 tr .error1 {
        background-color: #FFFFFF;
        color: #FF0000;
    }

    table#topic1 tr .myname1 {
        text-align: left;
    }

    table#topic1 tr td {
        background-color: #FFFFFF;
    }

    table#topic2 {
        padding: 0px 0px;
        margin: 0px 0px 0px 212px;
        border: #FFFFFF;
    }

    table#topic2 tr .topic1 {
        text-align: left;
    }

    table#topic2 tr td {
        background-color: #FFFFFF;
    }

    table#topic2 td .topic2 {
        width: 250px;
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
        height: 100px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 0px;
        margin-bottom: 0px;
        font-size: 16px;
    }

    .posts {
        margin-left: 1028px;
        margin-top: 5px;
        margin-bottom: 9px;
    }
</style>

@section('main')
    <main>
        <h1>話題内容</h1>
        <nav>
            <ul id="topic1">
                <li><a href="home">一覧に戻る</a></li>
            </ul>
        </nav>

        <div class="scroll">
            <table id="topic2">
                <tr>
                    <th class="topic1">話題名：</th>
                    <td>
                        <input type="text" name="topic" value="" class="topic2" placeholder="15文字以内">
                    </td>
                </tr>
            </table>
        </div>

        <table id="topic1">
            @csrf
            <tr>
                <td colspan="2" class="error1">ニックネームを入力してください。</td>
            </tr><!--エラーメッセージ用-->
            <tr>
                <th class="myname1">ニックネーム：</th>
                <td>
                    <input type="text" name="name" value="" class="myname2" placeholder="10文字以内">
                </td>
            </tr>
        </table>

        <p class="error3">投稿内容を入力してください。</p><!--エラーメッセージ用-->
        <textarea class="comment" name="comment" rows="20" placeholder="投稿内容(100文字以内)" required></textarea>
        <input type="submit" value="投稿" class="posts">
    </main>
@endsection
