@extends("includes.base")

@section("title")
我的影片清單
@endsection

@section("titlemessage")
<h2>何敏煌的影片清單</h2>
@endsection

@section("maincontent")
<h2>我的影音列表</h2>
        <hr>
        <form action="/add/" method="POST">
            @csrf
            標題：<input type="text" name="title" size=20 required>
            VID:<input type="text" name="vid" size=20 required>
            <input type=submit value="加入">
        </form>
        <table class="table table-striped">
            <tr><td>標題</td><td>Video id</td><td>管理</td></tr>
            @foreach($data as $item)
            <tr>
                <td><a href="/show/{{ $item->id }}/">{{ $item->title }}</a></td>
                <td>{{ $item->vid }}</td>
                <td><a href="/delete/{{ $item->id }}">刪除</a></td>
            </tr>
            @endforeach
        </table>
@endsection