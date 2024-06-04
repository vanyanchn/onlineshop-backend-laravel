<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/landing_page.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Landing Page</title>
</head>

<body>
    {{-- START SECTION 1 --}}
    <div class="section-1">
        <div class="bg-section-1">
            <img src="{{ asset('assets/images/background_baju.png') }}" alt="">
        </div>
        <div class="element-section-1">
            <img src="{{ asset('assets/images/backgroundlandingpage1.png') }}" alt="">
            <div class="logo">
                <img src="{{ asset('assets/images/logo.png') }}" alt="">
                <h1>LUXESHOP</h1>
            </div>
            <div class="fill-element-section-1">
                <p class="description">Belanja nyaman di LUXESHOP! Temukan fashion, aksesori, sepatu, dan lebih lagi
                    kemewahan dengan
                    harha yang terjangkau. Dapatkan produk terbaik dari merek terkemuka dengan pengalaman mulus.
                    Nikmati fitur pencarian dan pembayaran aman. Akses LUXESHOP kapan saja, di mana saja via web dan
                    mobile.
                </p>
                <div class="btn">
                    <a href="#section2"><button>lihat selanjutnya</button></a>
                </div>
            </div>
        </div>
    </div>
    {{-- END SECTION 1 --}}

    {{-- START SECTION 2 --}}
    <div class="section-2" id="section2">
        <div class="tittle-fitur">
            <h1>Fitur-Fitur</h1>
        </div>
        <div class="fill-section-fitur-up">
            <div class="fitur">
                <img src="{{ asset('assets/images/fitur-1.png') }}" alt="">
                <div class="tittle-fitur">
                    <h1>LOGIN/REGISTER</h1>
                </div>
            </div>
            <div class="fitur">
                <img src="{{ asset('assets/images/fitur-2.png') }}" alt="">
                <div class="tittle-fitur">
                    <h1>HOME PAGE</h1>
                </div>
            </div>
            <div class="fitur">
                <img src="{{ asset('assets/images/fitur-3.png') }}" alt="">
                <div class="tittle-fitur">
                    <h1>DESCRIPTION PRODUCT</h1>
                </div>
            </div>
        </div>
        <div class="fill-section-fitur-below">
            <div class="fitur">
                <img src="{{ asset('assets/images/fitur-4.png') }}" alt="">
                <div class="tittle-fitur">
                    <h1>DETAIL ORDERS</h1>
                </div>
            </div>
            <div class="fitur">
                <img src="{{ asset('assets/images/fitur-5.png') }}" alt="">
                <div class="tittle-fitur">
                    <h1>PAYMENT</h1>
                </div>
            </div>
            <div class="fitur">
                <img src="{{ asset('assets/images/fitur-6.png') }}" alt="">
                <div class="tittle-fitur">
                    <h1>DETAIL SHIPPING</h1>
                </div>
            </div>
        </div>
    </div>
    {{-- END SECTION 2 --}}

    {{-- START SECTION 3 --}}
    <div class="section-3">
        <div class="title-visi-misi">
            <h1>Visi Misi</h1>
        </div>
        <div class="fill-section-3">{{-- flex --}}
            <div class="section-3-left">
                <p class="visi">Visi: Menjadi destinasi utama bagi para pecinta barang mewah di seluruh dunia, dengan
                    koleksi produk
                    mewah terbaik dan layanan pelanggan yang luar biasa.</p>

                <div class="misi">Misi :
                    <ol>
                        <li>Memberikan akses mudah dan aman kepada pelanggan untuk produk-produk mewah terbaik dari
                            seluruh
                            dunia.</li>
                        <li>Menyajikan pengalaman belanja yang unggul dan memuaskan dengan pelayanan pelanggan yang
                            ramah,
                            responsif, dan berkualitas.</li>
                        <li>Membangun hubungan yang kuat dengan merek-merek mewah terkemuka serta pelanggan untuk
                            menciptakan
                            ekosistem yang saling menguntungkan.</li>
                    </ol>
                </div>
            </div>
            <div class="section-3-right">
                <img src="{{ asset('assets/images/img-section-3.png') }}" alt="">
            </div>
        </div>
    </div>
    {{-- END SECTION 3 --}}

    {{-- START SECTION 4 --}}
    <div class="section-4">
        <div class="title-about-us">
            <h1>About Us</h1>
        </div>
        <div class="fill-section-4">
            <div class="descriprion">
                <p>"Luxeshop" merupakan gabungan dari kata "luxe" yang bermakna mewah atau bergengsi, dan "shop" yang
                    artinya toko. Jadi, secara keseluruhan, "Luxeshop" dapat diartikan sebagai toko yang menawarkan
                    barang-barang mewah atau berkualitas tinggi. Ini bisa merujuk pada toko fisik atau toko online yang
                    menjual produk-produk seperti pakaian, aksesori, kosmetik, atau barang-barang lainnya yang memiliki
                    standar kualitas tinggi atau merek terkenal dengan harga yang cenderung lebih tinggi daripada barang
                    biasa. Sebagian besar pelanggan Luxeshop adalah mereka yang mencari barang-barang dengan kualitas
                    dan desain yang eksklusif.</p>

                <span>Mulailah petualangan belanja Anda bersama LUXESHOP!</span>
            </div>
        </div>

        <div class="instagram">
            <button>
                <i class='bx bxl-instagram'></i>
                <h1>@kelompok2inter</h1>
            </button>{{-- flex --}}

        </div>
    </div>
    {{-- END SECTION 4 --}}
</body>

</html>