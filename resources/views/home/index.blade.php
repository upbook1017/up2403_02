@extends('layouts.kejiban')

@section('main')
    <main>
        <h1>掲示板一覧</h1>
        <nav>
            <ul>
                <li><a href="create">新規話題を作成</a></li>
            </ul>
        </nav>
        <input type="text" name="topic" value="" class="search" placeholder="3~5文字内で「話題名」から検索します。">
        <input type="submit" value="検索">

        <table border="1">
            <tr>
                <th class="date">話題作成日</th>
                <th class="contents">話題名</th>
                <th class="people">書き込み人数</th>
            </tr>
            <tr>
                <td class="datetext">{{ $msg }}</td>
                <td class="contentstext">{{ $msg }}</td>
                <td class="peopletext">{{ $msg }}</td>
            </tr>
        </table>
    </main>
@endsection
