<html>

<head>
    <title>Create</title>
</head>

<body>
    <form action="{{ route('comment.store') }}" method="post">
        @csrf
        <p>Nama</p>
        <input type="text" name="name" placeholder="isikan dengan nama">

        <p>Email</p>
        <input type="text" name="email" placeholder="isikan dengan nama">

        <p>Konten</p>
        <textarea name="content" cols="20" rows="3"></textarea>

        <br>
        <button type="submit">Kirim</button>
    </form>
</body>

</html>
