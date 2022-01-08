<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS Buatan sendiri -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Mengambil dan menetapkan judul melalui variabel $title -->
    <title><?= $title; ?></title>

</head>



<body>

    <!-- Menampilkan navbar -->
    <?= $this->include('layout/navbar'); ?>

    <!-- Mendeklarasi dan menampilkan bagian konten -->
    <?= $this->renderSection('content'); ?>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <!-- Membuat Footer -->
    <div class="container">
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">

                <!-- Footer 1 -->
                <div class="col-12 col-md">
                    <img class="mb-2" src="/img/LogoSite.png" alt="" width="24" height="24">
                    <small class="d-block mb-3 text-muted">© 2019-2021</small>
                </div>

                <!-- Footer 2 -->
                <div class="col-6 col-md">
                    <h5>Attributions</h5>
                    <ul class="list-unstyled text-small">
                        <p>www.comatorstudio.com</p>
                    </ul>
                </div>

                <!-- Footer 3 -->
                <div class="col-6 col-md">
                    <h5>Support</h5>
                    <ul class="list-unstyled text-small">
                        <p>Email: support@comatorstudio
                            <br>Address: Jakarta Selatan., Indonesia
                        </p>
                    </ul>
                </div>

                <!-- Footer 4 -->
                <div class="col-6 col-md">
                    <h5>About</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="/pages/about">About Us</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>