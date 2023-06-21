<table border = "1">
    <thead>
        <th scope="col">Judul Artikel</th>
        <th scope="col">Tanggal Artikel</th>
        <th scope="col">Deskripsi Artikel</th>
    </thead>
    <tbody>
    @foreach($welcome as $d)
        <tr>
                <td>{{ $d -> judul_artikel }}</td>
                <td>{{ $d -> tanggal_artikel }}</td>
                <td>{{ $d -> deskripsi_artikel }}</td>
        </tr>
    @endforeach
    </tbody>
</table




