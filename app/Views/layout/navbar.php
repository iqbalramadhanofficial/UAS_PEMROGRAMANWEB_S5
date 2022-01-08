<nav class="navbar navbar-expand-lg navbar-dark bg-black">

    <!-- Membuat kontainer untuk menu navbar -->
    <div class="container">

        <!-- Membuat Logo/brand perusahaan navbar -->
        <a class="navbar-brand" href="#">ComatorStudio</a>

        <!-- Membuat Tombol menu navbar -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

            <a class="navbar-brand" href="#">
                <img src="/img/LogoSite.png" width="30" height="30" alt="">
            </a>

            <div class="navbar-nav">
                <a class="nav-link active" href="/pages/about">About</a>
                <a class="nav-link active" href="<?= base_url('/'); ?>">Home</a>
                <a class="nav-link active" href="/pages/gigs">Gigs</a>
                <a class="nav-link active" href="/pages/admin">Admin</a>
            </div>
        </div>
    </div>
</nav>