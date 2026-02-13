<?php
    get_header();
?>

<div class="jumbotron jumbo-front">
    <h1>Bienvenidos</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="<?=get_theme_file_uri("inc/img/chaqueta1")?>" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Visita nuestro blog</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary"></h6>
                    <p class="card-text">Visita la nostra pàgina</p>
                    <a href="" class="card-link">Card link</a>
                    <a href="" class="card-link">Another link</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>