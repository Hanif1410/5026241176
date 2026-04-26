<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tugas Pertemuan 3 - 5026241176</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            position: relative;
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
        }

        section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 100px 0;
        }

        .navbar {
            background-color: rgba(52, 58, 64, 0.95);
            backdrop-filter: blur(5px);
        }

        .nav-link {
            transition: 0.3s;
            border-bottom: 2px solid transparent;
        }

        .nav-link.active {
            color: #ffc107;
            border-bottom: 2px solid #ffc107;
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .bg-home {
            background: linear-gradient(45deg, #1d976c, #93f9b9);
            color: white;
        }

        .bg-about {
            background-color: #f8f9fa;
        }

        .bg-alam {
            background-color: #e9ecef;
        }

        .bg-kota {
            background-color: #dee2e6;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="80">

    <nav class="navbar navbar-expand-sm navbar-dark fixed-top shadow">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="#">LENSA KREATIF</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="galDrop"
                            data-toggle="dropdown">Gallery</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#alam">Alam</a>
                            <a class="dropdown-item" href="#kota">Kota</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home" class="bg-home text-center">
        <div class="container">
            <h1 class="display-4 font-weight-bold">Visualkan Ceritamu</h1>
            <p class="lead">Tugas Pemrograman Web Pertemuan 3: JS Scrollspy</p>
            <a href="#alam" class="btn btn-outline-light btn-lg mt-3">Lihat Galeri</a>
        </div>
    </section>

    <section id="about" class="bg-about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="font-weight-bold">Tentang Tugas Ini</h2>
                    <hr class="ml-0" style="width: 50px; border-top: 3px solid #ffc107;">
                    <p>Halaman ini dibuat untuk mendemonstrasikan fitur <b>Scrollspy</b>. Perhatikan menu navigasi di
                        atas; warna kuning akan berpindah secara otomatis sesuai dengan posisi layar saat ini.</p>
                    <button class="btn btn-dark">Pelajari Lebih Lanjut</button>
                </div>
                <div class="col-md-6 text-center mt-4 mt-md-0">
                    <img src="https://th.bing.com/th/id/OIP.i_XZ0xZiIXM9G118baxqIQHaE8?w=284&h=189&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"
                        class="img-fluid rounded shadow" alt="About Image">
                </div>
            </div>
        </div>
    </section>

    <section id="alam" class="bg-alam">
        <div class="container">
            <h2 class="text-center mb-5">Koleksi Alam</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="https://th.bing.com/th/id/OIP.46BsHj5der_851x8lJkDAgHaE7?w=302&h=201&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"
                        class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Gunung Kabut</h5>
                        <p class="card-text text-muted">Keindahan pagi di puncak gunung.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="https://th.bing.com/th/id/OIP.FazM8ytStTNidgtSj5bvCQHaFu?w=210&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"
                        class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Hutan Pinus</h5>
                        <p class="card-text text-muted">Kedamaian di tengah hutan hijau.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="https://th.bing.com/th/id/OIP.LfmCqgmKTH7GrPMEomTqugHaFK?w=260&h=181&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"
                        class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Danau Biru</h5>
                        <p class="card-text text-muted">Pantulan langit di air yang tenang.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kota" class="bg-kota">
        <div class="container">
            <h2 class="text-center mb-5">Kehidupan Kota</h2>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <img src="https://th.bing.com/th/id/OIP.C6aiYfQtmc4CHA5L8RIDpAHaE9?w=247&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"
                        class="card-img-top">
                    <div class="card-body text-center">
                        <h5>Metropolitan</h5>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="https://th.bing.com/th/id/OIP.WhJlLvyz7r0l5OMYUf6QCAHaEK?w=311&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"
                        class="card-img-top">
                    <div class="card-body text-center">
                        <h5>Lampu Malam</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-4">
        <p class="mb-0"><b>Tugas Pertemuan 3</b> | Muhammad Hanif Syahnandra | NRP: 5026241176</p>
    </footer>

    <script>
        $(document).ready(function() {
            $('body').scrollspy({
                target: ".navbar",
                offset: 100
            });
        });
    </script>

</body>

</html>
