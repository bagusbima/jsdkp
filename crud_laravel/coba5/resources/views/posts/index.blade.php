<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{ $judul }}</h1>
    <nav> 
        <ul>
            <li><a href="/Posts">Posts</a></li>
            <li><a href="/tambah_posts">Tambah Posts</a></li>
        </ul>
    </nav>
    <ul>
        <li>
            @foreach ($data_postingan as $dp)
            <p>{{ $dp['title'] }}</p>
            <p>{{ $dp['content'] }}</p>
            <a href="/Posts/{{ $dp['id'] }}">Edit Post</a>
            <form action="/Posts/{{ $dp['id'] }}" method="POST">
                @method('delete')
                @csrf
                <button type="submit">Delete</button>
            </form>
            @endforeach
        </li>
    </ul>    
    
</body>
</html>