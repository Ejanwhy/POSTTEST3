
@extends('layouts.base')

@section('content')
<div class="box-container">

    <div class="slide" style="background-image: url('assets/bencana1.jpg');">
        <h3>Gunung Meletus</h3>
    </div>

    <div class="slide" style="background-image: url('assets/bencana2.jpg');">
        <h3>Banjir</h3>
    </div>

    <div class="slide" style="background-image: url('assets/bencana3.png');">
        <h3>Gempa Bumi</h3>
    </div>

    <div class="slide" style="background-image: url('assets/bencana4.jpg');">
        <h3>Tsunami</h3>
    </div>
</div>

<div class="container text-center pt-4">
    <h1>@auth
        selamat datang {{ auth()->user()->name }}
        @endauth</h1>
</div>

<div class="div">
    <form class="form" action="/logout" method="POST">
        @csrf
        <input type="submit" class="btn btn-danger" value="Logout">
    </form>
</div>

<div>
    <h2>Bencana Alam di Indonesia: Kita Dapat Membantu!</h2>

    <p>
        Indonesia adalah negara yang sering kali menghadapi berbagai bencana alam, termasuk gempa bumi, gunung meletus, banjir, dan tsunami. Setiap tahun, ribuan nyawa hilang dan banyak komunitas terkena dampak serius dari bencana-bencana ini.
    </p>

    <p>
        Saat ini, ribuan orang dan keluarga membutuhkan bantuan darurat untuk memulihkan kehidupan mereka. Anda dapat berperan dalam membantu mereka bangkit dari bencana ini dan memulai proses pemulihan.
    </p>

    <h3>Bagaimana Anda Dapat Membantu:</h3>

    <ol>
        <li>Sumbangkan Barang-Barang Penting : Selain donasi uang, Anda juga dapat menyumbangkan barang-barang seperti pakaian, selimut, makanan kaleng, dan barang-barang kebutuhan sehari-hari lainnya.</li>
        <li>Volunteer : Jika Anda memiliki keterampilan khusus atau ingin terlibat secara langsung, menjadi seorang sukarelawan adalah cara yang sangat berharga untuk membantu. Bergabunglah dengan tim relawan kami dan bantu komunitas yang terkena dampak.</li>
        <li>Donasi : Donasi finansial Anda akan digunakan untuk memberikan bantuan medis, makanan, air bersih, tempat tinggal sementara, dan dukungan penting lainnya kepada para korban bencana. Maka dari itu, kami membuat sebuah wadah yang dapat digunakan untuk menyalurkan niat baik anda semua terhadap mereka yang membutuhkan</li>
    </ol>

    <h3>Setiap Donasi Anda Membuat Perbedaan Besar</h3>
    <p>
        Setiap sumbangan, baik besar maupun kecil, memiliki dampak besar. Dengan bantuan Anda, kami dapat menyediakan bantuan mendesak dan membantu para korban bencana untuk membangun kembali hidup mereka.
    </p>

    <p>
        Bersama-sama, kita dapat membuat perbedaan positif dan membantu mereka yang paling membutuhkan. Terima kasih atas dukungan Anda!
    </p>

</div>



@section('footer')
@endsection
<script>
    activeslideimg();

    function activeslideimg(activeSlide = 2) {
        const slides = document.querySelectorAll(".slide");

        slides[activeSlide].classList.add("active");

        for (const slide of slides) {
            slide.addEventListener("click", () => {
                clearActiveClasses();

                slide.classList.add("active");
            });
        }


        function clearActiveClasses() {
            slides.forEach((slide) => {
                slide.classList.remove("active");
            })
        }


    }
</script>


@endsection