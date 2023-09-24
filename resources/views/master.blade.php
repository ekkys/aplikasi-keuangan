<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tutorial #8 : Sistem Template Blade Laravel</title>
</head>

<body>
    <header>
        <h2>Blog Curhatan Koding</h2>
        <nav>
            <a href="/blog">HOME</a>|
            <a href="/blog/tentang">TENTANG</a>|
            <a href="/blog/kontak">KONTAK</a>
        </nav>
    </header>

    <!-- bagian judul halaman blog -->
    <h3>@yield('judul_halaman')</h3>

    <!-- bagian konten blog -->
    @yield('konten')

    <br><br><br>

    <footer>
        <p>&copy;<a href="https://www.curhatancoding.com">www.www.curhatancoding.com></a>.202</p>
    </footer>

</body>

</html>
