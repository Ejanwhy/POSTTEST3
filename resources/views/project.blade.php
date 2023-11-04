<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .table-container {
            max-width: 1000px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container table-container">
        <h1 class="text-center mb-4">Daftar Project Donasi</h1>
        <a href="/tambahproyek" class="btn btn-primary mb-3">Project Donasi +</a>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID Proyek</th>
                    <th scope="col">Judul Proyek</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Tujuan Dana</th>
                    <th scope="col">Target Dana</th>
                    <th scope="col">Tanggal Mulai</th>
                    <th scope="col">Tanggal Selesai</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posting as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->judul_proyek}}</td>
                    <td>{{$p->deskripsi}}</td>
                    <td>{{$p->tujuan_dana}}</td>
                    <td>{{$p->dana_terkumpul}}</td>
                    <td>{{$p->tanggal_mulai}}</td>
                    <td>{{$p->tanggal_selesai}}</td>
                    <td>
                        <a href="/edit/{{$p->id}}">Edit</a> /
                        <a href="#" onclick="hapusProyek({{$p->id}})">Hapus</a>
                    </td>
                </tr>    
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Add Bootstrap JS scripts (optional, if needed) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function hapusProyek(id) {
            if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                window.location.href = '/hapus/' + id;
            }
        }

        @if(session('success'))
            alert('Data telah terhapus');
        @endif
    </script>
</body>
</html>
