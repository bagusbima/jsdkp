<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/Posts">Posts</a></li>
            <li><a href="/tambah_posts">Tambah Posts</a></li>
        </ul>
        <form action="/Posts/{{ $post['id'] }}" method="POST">
            @method('put')
            @csrf
            <label for="">Title</label>
            <input type="text" name="title" value="{{ $post['title'] }}"><br>
            <label for="">Content</label>
            <input type="text" name="content" value="{{ $post['content'] }}"><br>
            <button type="submit">Simpan</button><br>
        </form>
    </nav>
</body>
</html>
