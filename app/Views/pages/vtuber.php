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
                    Advanced live2d Vtuber Character and Rigging
                </h1>

            </div>
        </div>
    </div>


    <!-- Bagian Foto -->
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="/img/Vtuber.jpg" class="img-fluid w-50" alt="...">
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

                    How was your day? We hope you are always blessed! VTuber which was pioneered by Kizuna Ai in 2016. She has gained a lot of attention from her fans. This can happen because this Content is different from other Streamer.

                    You can start a career as a VTuber too from now on! We can make an Advanced Character and Rigging from scratch with the Concept You have.

                    With this service you can choose one of 5 types Characters. (Animals, Ghosts, Humans, Monsters, and Mechas.)

                    <br>
                    <br>
                    <b>1. Basic
                        <br>You will get : </b>

                    <br>
                <ul>
                    <li>Bustup</li>
                    <li>Headtilt (9 axis movement)</li>
                    <li>Blinking</li>
                    <li>Eyebrows</li>
                    <li>Eyeballs</li>
                    <li>Mouth (AIUEO)</li>
                    <li>Body Rotation (9 axis movement)</li>
                    <li>Physics</li>
                    <li>3 Expressions(Idle, Happy, Talk)</li>
                    <li>3 Revisions</li>
                </ul>
                </p>

                <p>
                    <br>
                    <b>2. Standard
                        <br>You will get : </b>
                    <br>
                <ul>
                    <li>Halfbody</li>
                    <li>Headtilt (9 axis movement)</li>
                    <li>Blinking</li>
                    <li>Eyebrows</li>
                    <li>Eyeballs</li>
                    <li>Mouth (AIUEO)</li>
                    <li>Body Rotation (9 axis movement)</li>
                    <li>Physics</li>
                    <li>3 Expressions(Idle, Happy, Talk)</li>
                    <li>3 Revisions</li>
                </ul>
                </p>

                <p>
                    <br>
                    <b>3. Premium
                        <br>You will get : </b>
                    <br>
                <ul>
                    <li>Fullbody</li>
                    <li>Headtilt (9 axis movement)</li>
                    <li>Blinking</li>
                    <li>Eyebrows</li>
                    <li>Eyeballs</li>
                    <li>Mouth (AIUEO)</li>
                    <li>Body Rotation (9 axis movement)</li>
                    <li>Physics</li>
                    <li>3 Expressions(Idle, Happy, Talk)</li>
                    <li>3 Revisions</li>
                </ul>
                </p>
                <p>
                    <br>
                    <b>The file you receive can be used in the VTube Studio/Facerig/3Tene/Prprlive software. (Choose one).

                        *PM For More Samples and check another gigs for advanced services
                </p>


            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col"></div>
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
                            <th scope="row">Rigging</th>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <th scope="row">Detailed Movements</th>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <th scope="row">Project File Delivery</th>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <th scope="row">Number of Characters</th>
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
                            <td>7 Days</td>
                            <td>10 Days</td>
                            <td>14 Days</td>
                        </tr>
                        <tr>
                            <th scope="row">Total</th>
                            <td>US$700</td>
                            <td>US$800</td>
                            <td>US$1000</td>
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