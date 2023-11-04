@extends('layouts.base')

@section('content')
    <div class="form-container">
        <div class="container">
        <h2>Form Donasi</h2>
        </div>
        <form class="form" action="/donors/store" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="id_proyek">ID Proyek:</label>
                <input type="text" id="id_proyek" name="id_proyek" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" required>
            </div>
            <div class="form-group">
                <label for="nomor_telepon">Nomor Telepon:</label>
                <input type="tel" id="nomor_telepon" name="nomor_telpon" required>
            </div>
            <div class="form-group">
                <label for="jumlah_sumbangan">Jumlah Sumbangan:</label>
                <input type="number" id="jumlah_sumbangan" name="jumlah_sumbangan" required>
            </div>
            <div class="form-group">
                <label for="metode_pembayaran">Metode Pembayaran:</label>
                <select id="metode_pembayaran" name="metode_pembayaran" required>
                    <option value="kartu_kredit">Kartu Kredit</option>
                    <option value="transfer_bank">Transfer Bank</option>
                    <option value="paypal">PayPal</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Kirim</button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('donorForm');
            form.addEventListener('submit', function(event) {
                event.preventDefault();

                const nama = document.getElementById('nama').value;
                const id_proyek = document.getElementById('id_proyek').value;
                const email = document.getElementById('email').value;
                const alamat = document.getElementById('alamat').value;
                const nomor_telepon = document.getElementById('nomor_telepon').value;
                const jumlah_sumbangan = document.getElementById('jumlah_sumbangan').value;
                const metode_pembayaran = document.getElementById('metode_pembayaran').value;

                if (!nama || !email || !alamat || !nomor_telepon || !jumlah_sumbangan || !metode_pembayaran) {
                    alert('Harap isi semua kolom!');
                    return;
                }

                alert('Terima kasih atas sumbangannya semoga sehat selalu ' + nama + '!');

                document.querySelector('.form-container').classList.add('success');

                form.reset();
            });
        });
    </script>
@endsection
