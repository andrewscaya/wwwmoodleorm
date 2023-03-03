<!DOCTYPE html>
<!--[if lt IE 7]> <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<?php if (isset($view['headjs'])): ?>
    <?=$this->section('headjs', $this->fetch('headjs', ['view' => $view]))?>
<?php else: ?>
    <?=$this->section('head', $this->fetch('head', ['view' => $view]))?>
<?php endif ?>

<body id="body">
<?=$this->section('navbar', $this->fetch('navbar', ['view' => $view]))?>

<main class="site-content" role="main">

    <!-- hero area -->
    <section class="hero-area bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 mx-auto">
                    <h1 class="text-white font-tertiary">A simple ORM<br />for Moodle plugins</h1>
                </div>
            </div>
        </div>
        <div class="layer-bg w-100">
            <img class="img-fluid w-100" src="<?=$view['urlbaseaddr'] ?>images/illustrations/leaf-bg.png" alt="bg-shape">
        </div>
        <div class="layer" id="l2">
            <img src="<?=$view['urlbaseaddr'] ?>images/illustrations/dots-cyan.png" alt="bg-shape">
        </div>
        <div class="layer" id="l4">
            <img src="<?=$view['urlbaseaddr'] ?>images/illustrations/dots-orange.png" alt="bg-shape">
        </div>
        <div class="layer" id="l5">
            <img src="<?=$view['urlbaseaddr'] ?>images/illustrations/leaf-yellow.png" alt="bg-shape">
        </div>
        <div class="layer" id="l7">
            <img src="<?=$view['urlbaseaddr'] ?>images/illustrations/dots-group-orange.png" alt="bg-shape">
        </div>
        <div class="layer" id="l9">
            <img src="<?=$view['urlbaseaddr'] ?>images/illustrations/leaf-cyan-2.png" alt="bg-shape">
        </div>
    </section>
    <!-- /hero area -->

    <!-- about -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center">
                    <p class="font-secondary paragraph-lg text-dark">
                        A simple ORM, with a Unit of Work, to easily save cascading data from Moodle Forms,
                        using Moodle Entities, via single database transactions.
                    </p>
                    <a class="btn btn-transparent" target="_blank" href="https://moodleorm.readthedocs.io/en/latest/">Learn more</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /about -->

    <!-- features -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">Main feature development</h2>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                    <div class="card shadow text-center">
                        <div class="position-relative rounded-top progress-wrapper" data-color="#fdb157">
                            <div class="wave" data-progress="100%"></div>
                        </div>
                        <div class="card-footer bg-white">
                            <h4 class="card-title">Unit of Work support (100%)</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                    <div class="card shadow text-center">
                        <div class="position-relative rounded-top progress-wrapper" data-color="#9473e6">
                            <div class="wave" data-progress="100%"></div>
                        </div>
                        <div class="card-footer bg-white">
                            <h4 class="card-title">Multiple vertical child tables 1-1 (100%)</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                    <div class="card shadow text-center">
                        <div class="position-relative rounded-top progress-wrapper" data-color="#bdecf6">
                            <div class="wave" data-progress="90%"></div>
                        </div>
                        <div class="card-footer bg-white">
                            <h4 class="card-title">Cascade delete (90%)</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                    <div class="card shadow text-center">
                        <div class="position-relative rounded-top progress-wrapper" data-color="#ffbcaa">
                            <div class="wave" data-progress="10%"></div>
                        </div>
                        <div class="card-footer bg-white">
                            <h4 class="card-title">Multiple horizontal child tables 1-N (Upcoming)</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /features -->

    <!-- client logo slider -->
    <section class="section pb-0">
        <div class="container">
            <div class="client-logo-slider d-flex align-items-center">
                <a href="contact.html" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
                                                                                      src="<?=$view['urlbaseaddr'] ?>images/clients-logo/client-logo-1.png" alt="client-logo"></a>
            </div>
        </div>
    </section>
    <!-- /client logo slider -->

</main> <!-- /content -->

<div class="container-footer">
    <?=$this->section('footer', $this->fetch('footer', ['view' => $view]))?>
</div>

<?php if ($view['bodyjs'] === 1): ?>
    <?=$this->section('bodyjs', $this->fetch('bodyjs', ['view' => $view]))?>
<?php endif ?>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?=$view['urlbaseaddr'] ?>js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>
