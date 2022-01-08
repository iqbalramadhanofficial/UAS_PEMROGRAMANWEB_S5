<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="">

    <!-- Home Cover + Title -->
    <div class="row">
        <img src="/img/Home.jpg" class="home" alt="...">
        <div class="centered p1">Comator Studio</div>
        <div class="centered2">We are here as a connector between the customer and creator</div>
    </div>

    <!-- Desc + Logo -->
    <div class="row ml rwlpad mt-5">
        <div class="col-sm">
            <p class="txtjustify mt-5">
                Comator Studio is the right choice for those of you who have projects to be completed faster with guaranteed quality. Both small or complex projects that require teamwork. The projects work will be directed by a Team of Freelancers managed by a Studio Leader and 24 hours Customer Service.
                <br><br>
                Our Studio has been around since April 1, 2019, and has collaborated with many Countries also Customer Satisfaction. We have several services for now in the fields of Digital Marketing, Graphics & Design, Programming & Tech, Animation. Each field has 10+ Artists, so don’t worry about the results.
            </p>
        </div>

        <div class="col-sm">
            <img src="/img/Logo.png" class="logo" alt="...">
        </div>
    </div>

    <!-- Gigs Section -->
    <div class="row text-center bg-light">
        <h1 class="mt-5">Want to know more?</h1>
        <p class="mb-5">There are several choices of services that you can get</p>
    </div>


    <!-- Gigs Section -->
    <div class="row mt-5 d-flex align-items-center">

        <!-- Gigs 1 -->
        <div class="col text-center">
            <img src="/img/Char.jpg" class="gigsm" alt="">
            <h4 class="mt-3">Character Design</h2>
                <p>Are you dreaming of Your own Character and want to make it? <br>
                    We can make it for you!</p>
        </div>

        <!-- Gigs 2 -->
        <div class="col text-center">
            <img src="/img/Vtuber.jpg" class="gigsm" alt="">
            <h4 class="mt-3">Vtuber Debut</h2>
                <p>Do you imagine being a Vtuber who has a lot of Fans? <br>Let's start making it happen with us!</p>
        </div>

        <!-- Gigs 3 -->
        <div class="col text-center">
            <img src="/img/Ghibli.jpg" class="gigsm" alt="">
            <h4 class="mt-3">Animation</h2>
                <p>Are you dreaming of Your own Character and want to make it? <br>
                    We can make it for you!</p>
        </div>

    </div>

    <!-- Previous work -->
    <div class="row  bg-light my-5">
        <h1 class="text-center mt-5">Our Testimonial</h1>
        <p class="text-center mb-5 ">There are several choices of services that you can get</p>
    </div>

    <!-- Testimonial -->
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4">
                <h2>trayal</h2>
                <p class="txtjustify">Absolutely astounding partner to work with. I was nervous about this as my idea had a lot of things not very common for this type of gig. </p>
            </div>
            <div class="col-md-4">
                <h2>ragnarr_konungr</h2>
                <p class="txtjustify">The seller was very communicative about the project, and the work was astounding. I would highly recommend this seller to anyone looking to get a great Vtuber model!.</p>
            </div>
            <div class="col-md-4">
                <h2>indecisivefox</h2>
                <p class="txtjustify">This is my second time working with comator and I will do so again in the future! Love their work.</p>
            </div>
        </div>

        <!-- Rating testimonial -->
        <div class="row">
            <div class="col-md-4">
                <button type="button" class="btn btn-lg btn-success" disabled>10/10</button>
            </div>
            <div class="col-md-4">
                <button type="button" class="btn btn-lg btn-success" disabled>10/10</button>
            </div>
            <div class="col-md-4">
                <button type="button" class="btn btn-lg btn-success" disabled>10/10</button>
            </div>
        </div>
    </div>



    <!-- Bagian kontak -->
    <div class="row my-5 bg-light">
        <h1 class="text-center mt-5"> Feel free to ask us </h1>
        <p class="text-center mb-5">You can contact us through this social media</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="alert alert-success" role="alert">
                WhatsApp - 08515 6464 891
            </div>
            <div class="alert alert-primary" role="alert">
                Telegram - 08515 6464 891
            </div>
            <div class="alert alert-danger" role="alert">
                Mail - support@comator.com
            </div>
            <div class="alert alert-danger" role="alert">
                Youtube - Comator
            </div>
        </div>
    </div>


</div>

<?= $this->endSection(); ?>