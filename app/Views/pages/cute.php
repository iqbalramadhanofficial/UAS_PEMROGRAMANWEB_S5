<!-- Mewariskan Sifat dari file template -->
<?= $this->extend('layout/template'); ?>

<!-- Menampilkan bagian konten -->
<?= $this->section('content'); ?>

<!-- Membuat kontainer untuk isi konten -->
<div class="">

    <!-- Bagian Judul -->
    <div class="container">
        <div class="row">
            <div class="col-sm mt-5">
                <h1>
                    Make Cute Children Watercolor Animation
                </h1>

            </div>
        </div>
    </div>

    <!-- Bagian Foto -->
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="/img/Cute.jpg" class="img-fluid w-50" alt="...">
            </div>
        </div>
    </div>

    <!-- Bagian isi artikel -->
    <div class="container">
        <div class="row">
            <div class="col-sm-7 mt-5">
                <h1>About This Gig</h1>
                <p class="txtjustify">

                    Hi Customer!

                    How was your day? We hope you are always blessed!

                    In this gig we will create for you an animation like the example in the gig portfolio above. This animation can loop, please let us know first so we can do the loop. (If there is no request, then the animation will not loop)

                    You can use this animation as social media content, advertisements, personal animations, video cover needs or so on.

                    If the duration given for the gigs is still not enough, you can discuss it with us and add an extra duration.

                    Here are the details you will get:

                    <br>
                    <br>
                    <b>1. Basic
                        <br>You will get : </b>

                    <br>
                <ul>
                    <li>15 Seconds Animation</li>
                    <li>1 Character (9 axis movement)</li>
                    <li>2 Revision</li>
                    <li>Full HD</li>
                    <li>Custom Song</li>
                    <li>Mp4</li>
                </ul>
                </p>

                <p>
                    <br>
                    <b>2. Standard
                        <br>You will get : </b>
                    <br>
                <ul>
                    <li>30 Seconds Animation</li>
                    <li>1 Character</li>
                    <li>Custom BG</li>
                    <li>3 Revisioin</li>
                    <li>Full HD</li>
                    <li>Custom Song</li>
                    <li>Mp4</li>
                    <li>Commercial Use</li>
                </ul>
                </p>

                <p>
                    <br>
                    <b>3. Premium
                        <br>You will get : </b>
                    <br>
                <ul>
                    <li>60 Seconds Animation</li>
                    <li>1 Character</li>
                    <li>Custom BG</li>
                    <li>3 Revisioin</li>
                    <li>Full HD</li>
                    <li>Custom Song</li>
                    <li>Mp4</li>
                    <li>Commercial Use</li>
                </ul>
                </p>
                <p>
                    <br>
                    <b>Please discuss in advance so that the project results can meet your wishes. Thank you for visiting us and see you!
                </p>


            </div>
        </div>


    </div>

    <!-- Bagian Tabel -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <table class="table">
                    <thead class="thead-dark">

                        <!-- Kolom Tabel -->
                        <tr>
                            <th scope="col">Pakcages</th>
                            <th scope="col">Basic</th>
                            <th scope="col">Standard</th>
                            <th scope="col">Premium</th>
                        </tr>
                    </thead>


                    <!-- Isi Tabel -->
                    <tbody>
                        <tr>
                            <th scope="row">Character Design</th>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <th scope="row">Backgrounds</th>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <th scope="row">Animation</th>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <th scope="row">Running Time</th>
                            <td>15 Seconds </td>
                            <td>30 Seconds</td>
                            <td>60 Seconds</td>
                        </tr>
                        <tr>
                            <th scope="row">Figures</th>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <th scope="row">Revisions</th>
                            <td>2</td>
                            <td>3 </td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <th scope="row">Delivery Time</th>
                            <td>10 Days</td>
                            <td>12 Days</td>
                            <td>15 Days</td>
                        </tr>
                        <tr>
                            <th scope="row">Total</th>
                            <td>US$25</td>
                            <td>US$50</td>
                            <td>US$80</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Tombol Pemesanan -->
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <a href="/pages/characterDesign" class="btn btn-success algin-right">Order Now</a>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>