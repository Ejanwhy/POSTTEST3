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
        <h1 class="text-center mb-4">Daftar Donatur</h1>
        <a href="/donors" class="btn btn-primary mb-3">Donasi Sekarang +</a>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">ID Proyek</th>
                    <th scope="col">Email</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No. Telp</th>
                    <th scope="col">Jumlah Sumbangan (Rp)</th>
                    <th scope="col">Metode Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posting as $p)
                <tr>
                    <td>{{$p->nama}}</td>
                    <td>{{$p->id_proyek}}</td>
                    <td>{{$p->email}}</td>
                    <td>{{$p->alamat}}</td>
                    <td>{{$p->nomor_telpon}}</td>
                    <td>{{$p->jumlah_sumbangan}}</td>
                    <td>{{$p->metode_pembayaran}}</td>
                </tr>    
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Add Bootstrap JS scripts (optional, if needed) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
