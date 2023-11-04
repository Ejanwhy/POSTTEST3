<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyek Baru</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Form Proyek Baru</h1>
        <form class="form" action="/tambahproyek/store" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="judulProyek">Judul Proyek</label>
                <input type="text" class="form-control" name="judul_proyek" placeholder="Masukkan judul proyek">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" rows="3" placeholder="Masukkan deskripsi proyek"></textarea>
            </div>
            <div class="form-group">
                <label for="tujuanDana">Tujuan Dana</label>
                <textarea class="form-control" name="tujuan_dana" rows="3" placeholder="Apa tujuan dari proyek ini?"></textarea>
            </div>
            <div class="form-group">
                <label for="danaTerkumpul">Dana Terkumpul</label>
                <input type="number" class="form-control" name="dana_terkumpul" placeholder="0">
            </div>
            <div class="form-group">
                <label for="tanggalMulai">Tanggal Mulai</label>
                <input type="date" class="form-control" name="tanggal_mulai">
            </div>
            <div class="form-group">
                <label for="tanggalSelesai">Tanggal Selesai</label>
                <input type="date" class="form-control" name="tanggal_selesai">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Add Bootstrap JS scripts (optional, if needed) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
