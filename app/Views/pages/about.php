<!-- Mewariskan Sifat dari file template -->
<?= $this->extend('layout/template'); ?>

<!-- Menampilkan bagian konten -->
<?= $this->section('content'); ?>

<!-- Membuat bagian konten untuk deskripsi about us  -->
<div class="">
    <div class="container">
        <div class="row">
            <div class="col-sm mt-5">
                <h1>About Us</h1>
                <p class="txtjustify">
                    Comator Studio is the right choice for those of you who have projects to be completed faster with guaranteed quality. Both small or complex projects that require teamwork. The projects work will be directed by a Team of Freelancers managed by a Studio Leader and 24 hours Customer Service.
                    <br><br>
                    Our Studio has been around since April 1, 2019, and has collaborated with many Countries also Customer Satisfaction. We have several services for now in the fields of Digital Marketing, Graphics & Design, Programming & Tech, Animation. Each field has 10+ Artists, so don’t worry about the results.
                </p>
            </div>
            <div class="col-sm mt-5">
                <img src="/img/Logo.png" class="logo" alt="...">
            </div>

            <!-- Membuat bagian nama anggota perusahaan -->
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2>Member of Comator Studio</h2>

                        <ul>
                            <li><b>Alda Natasya</b></li>
                            <li><b>Iqbal Ramadhan </b>
                            <li><b>Jaja Jumhara </b></li>
                            <li><b>Muhamad Zainal</b></li>
                        </ul>

                    </div>
                </div>
            </div>

            <!-- Membuat bagian kontak yang dapat dihubungi -->
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2>Contact Us</h2>

                        <ul>
                            <li><b>Location : </b>
                                Jakarta Selatan, Indonesia.
                            </li>
                            <li><b>Mail : </b>
                                support@comatorstudio.com</li>
                            <li><b>Phone : </b>
                                085156464891
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<?= $this->endSection(); ?>