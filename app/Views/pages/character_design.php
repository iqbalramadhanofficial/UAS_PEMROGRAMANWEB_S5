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
                <h1>Make a Live2d Character Design</h1>

            </div>
        </div>
    </div>

    <!-- Bagian Foto -->
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="/img/Char.jpg" class="img-fluid w-50" alt="...">
            </div>
        </div>
    </div>

    <!-- Bagian isi artikel -->
    <div class="container">
        <div class="row">
            <div class="col-sm-7 mt-5">
                <h1>About This Gig</h1>
                <p class="txtjustify">
                    Hi Customer! Welcome to character commission gig’s! We are opening art commission, Here’s the menu hope u’ll love it!
                    <br>
                    <br>
                    <b>1. Fresh Apple Juice – $350
                        <br>You will get : </b>

                    <br>
                <ul>
                    <li>Halfbody for Live2d/VTuber set</li>
                    <li>PSD only</li>
                    <li>3 Expressions</li>
                </ul>
                </p>

                <p>
                    <br>
                    <b>2. Tiny Apple Pie – $400
                        <br>You will get : </b>
                    <br>
                <ul>
                    <li>Fullbody for Live2d/VTuber set</li>
                    <li>PSD Only(not rigged)</li>
                    <li>Simple Character</li>
                    <li>3 Expressions</li>
                </ul>
                </p>

                <p>
                    <br>
                    <b>3. Royal Apple Pie – $500
                        <br>You will get : </b>
                    <br>
                <ul>
                    <li>Fullbody for Live2d/VTuber set</li>
                    <li>PSD Only(not rigged)</li>
                    <li>Complicated character (use armor/detailed dress/detailed uniform)</li>
                    <li>3 Expressions</li>
                </ul>
                </p>

                <p>
                    <br>
                    <b>#EXTRA GIGS
                        <br>
                        <ul>
                            <li>Add more poses or expression = $3/request</li>
                            <li>Add detail (wings, pet, etc) = $10/request</li>
                            <li>Add new dress/uniform = $25/request</li>
                        </ul>
                </p>

                <p>
                    <br>
                    <b>PS : Before placing an order, we should discuss it first, Please note that this commission doesn’t include Rigging</b>

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
                            <th scope="row">PSD</th>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <th scope="row">Rigging</th>
                            <td>No</td>
                            <td>No</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <th scope="row">Revisions</th>
                            <td>2</td>
                            <td>2</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <th scope="row">Range Body</th>
                            <td>Halfbody</td>
                            <td>Halfbody</td>
                            <td>Halfbody</td>
                        </tr>
                        <tr>
                            <th scope="row">Expressions</th>
                            <td>3</td>
                            <td>3</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <th scope="row">Delivery Time</th>
                            <td>7 Days</td>
                            <td>9 Days </td>
                            <td>10 Days</td>
                        </tr>
                        <tr>
                            <th scope="row">Expressions</th>
                            <td>US$350</td>
                            <td>US$400</td>
                            <td>US$500</td>
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