<div class="container-fluid planos-section galeria-section-page" id="galeria">
    <div class="row plano-col">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <h1>GALERIA</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="bar-title-plano"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 ">
            <div class="row galeria d-flex justify-content-start">

                <?php foreach ($galeria as $item) { ?>
                    <div class="col-md-3">
                        <div class="card" style="width: 100%;">
                            <a href="<?= $item['imagem'] ?>" data-toggle="lightbox" data-gallery="portfoliogallery">
                                <img src="<?= $item['imagem'] ?>" class="card-img-top">
                            </a>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</div>