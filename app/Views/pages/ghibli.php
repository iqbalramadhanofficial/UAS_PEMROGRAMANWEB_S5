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
                    Make Ghibli or Chibi Styles from your request
                </h1>

            </div>
        </div>
    </div>

    <!-- Bagian Foto -->
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="/img/Ghibli.jpg" class="img-fluid w-50" alt="...">
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

                    Welcome to Ghibli or Chibi Style Commission from your request!

                    We have a specialist Ghibli Style artist with the commission description as follows :
                    <br>
                    <br>
                    <b>1. Basic</b>
                <p>

                    <b>2. Standard</b>
                </p>
                <p>

                    <b>3. Premium</b>
                </p>
                <p>

                    <b>
                        The file you receive can be used in the VTube Studio/Facerig/3Tene/Prprlive software. (Choose one).
                    </b>

                    *PM For More Samples and check another gigs for advanced services
                </p>

                <br>


                PS : The files you will receive are transparent png, jpeg. Source file not included.

                Thank you for stopping by, don’t forget to chat with us before ordering.



                Comator Studio

                We prioritize customer satisfaction because that is our main goal.




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
                            <th scope="row">High Resolutions</th>
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
                            <th scope="row"> Color</th>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
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
                            <td>3</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <th scope="row">Delivery Time</th>
                            <td>2 Days</td>
                            <td>3 Days </td>
                            <td>5 Days</td>
                        </tr>
                        <tr>
                            <th scope="row">Total</th>
                            <td>US$20</td>
                            <td>US$30</td>
                            <td>US$40</td>
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