<html>

<head>
    <title>CJA Dev</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <a href="{{ route('comment.create') }}">
        <button>Tambah</button>
    </a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Konten</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->content }}</td>
                    <td>
                        <a href="{{ route('comment.edit', $item->id) }}"><button>Edit</button></a>
                        <form method="post" action="{{ route('comment.destroy', $item->id) }}">
                            @csrf
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
