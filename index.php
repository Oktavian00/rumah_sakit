<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSU Sehat</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="images/logo.png" alt="Logo Rumah Sakit">
        </div>
        <nav>
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang Kami</a></li>
                <li><a href="#services">Layanan</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <div class="slideshow-container">
        <?php
        $images = ['1.jpg', '2.jpg', '3.jpg']; // Daftar gambar
        foreach ($images as $image) {
            echo '<div class="slide">
                    <img src="images/' . $image . '" alt="Slide Image">
                  </div>';
        }
        ?>
        <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
        <a class="next" onclick="changeSlide(1)">&#10095;</a>
    </div>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            const slides = document.getElementsByClassName("slide");
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            slides[slideIndex - 1].style.display = "block";  
            setTimeout(showSlides, 3000); // Ganti slide setiap 3 detik
        }

        function changeSlide(n) {
            slideIndex += n - 1;
            showSlides();
        }
    </script>

    <!-- <body>
        <div class="container">
            <div class="content-slide">
                <div class="imgslide fade">
            <img src="images/background.jpg" alt=" ">
        </div>

        <div class="container">
            <div class="content-slide">
                <div class="imgslide fade">
            <img src="images/background.jpg" alt=" ">
        </div>

        <div class="container">
            <div class="content-slide">
                <div class="imgslide fade">
            <img src="images/background.jpg" alt=" ">
        </div> -->

        <section id="about">
            <h2>Tentang Kami</h2>
            <p>RSU Sehat didirikan untuk memberikan pelayanan kesehatan yang berkualitas.</p>
        </section>

        <section id="services">
            <h2>Layanan Kami</h2>
            <ul>
                <li>Rawat Inap</li>
                <li>Rawat Jalan</li>
                <li>Ugd</li>
                <li>Laboratorium</li>
                <li>Radiologi</li>
            </ul>
        </section>

        <section id="contact">
            <h2>Kontak Kami</h2>
            <p>Email: info@rsusehat.com</p>
            <p>Telepon: (021) 12345678</p>
        </section>
</body>

    <footer>
        <p>&copy; 2024 RSU Sehat. Semua hak dilindungi.</p>
    </footer>
</body>
</html>
