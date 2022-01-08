<!-- Mewariskan Sifat dari file template -->
<?= $this->extend('layout/template'); ?>

<!-- Menampilkan bagian konten -->
<?= $this->section('content'); ?>

<!-- Membuat bagian isi artikel/jasa -->
<div class="">
    <div class="container">
        <div class="row">
            <div class="col-sm mt-5">
                <h1>Gigs</h1>
                <p class="txtjustify">
                    On this page you can see the services/products we provide. There are many variations that you can choose from
                </p>

                <h3>How to order?</h3>
                <p class="txtjustify">
                    1. Choose the type of service that suits your project
                    <br>2. Look at the portfolio and description on the gigs page
                    <br>3. Choose the packages you want
                    <br>4. Discuss with us to get the best experience
                    <br>5. Make a work contract with us, and we will start the project
                    <br>6. You will invited to join our board timeline to see the progress
                    <br>7. We will send the file along with the instructions according to the gigs you choose

                </p>
            </div>
        </div>
    </div>


    <!-- Bagian card untuk gigs/jasa beserta tombol untuk mengarahkan ke detail halaman -->
    <div class="container">
        <div class="row">

            <!-- card 1 -->
            <div class="card " style="width: 18rem;">
                <img src="/img/Char.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Make a Live2d Character Design</h5>
                    <p class="card-text txtjustify mt-3">Are you dreaming of Your own Character and want to make it? We can make it for you!</p>
                    <a href="/pages/characterDesign" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <!-- card 2 -->
            <div class="card" style="width: 18rem;">
                <img src="/img/Vtuber.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> Advanced live2d Vtuber Character and Rigging </h5>
                    <p class="card-text txtjustify mt-3">Do you imagine being a Vtuber who has a lot of Fans?
                        Let's start making it happen with us!</p>
                    <a href="/pages/vtuber" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <!-- card 3 -->
            <div class="card" style="width: 18rem;">
                <img src="/img/Ghibli.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Make Ghibli or Chibi Styles from your request</h5>
                    <p class="card-text txtjustify mt-3">Have you thought of an interesting animation? We have the best artist for it!</p>
                    <a href="/pages/ghibli" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <!-- card 4 -->
            <div class="card" style="width: 18rem;">
                <img src="/img/Cute.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Make Cute Children Watercolor Animation</h5>
                    <p class="card-text txtjustify mt-3">Have you thought of an interesting animation? We have the best artist for it!</p>
                    <a href="/pages/cute" class="btn btn-primary">Order Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>