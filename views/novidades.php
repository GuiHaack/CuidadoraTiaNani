<div class="container-fluid planos-section novidades-page" id="novidades">
    <div class="row plano-col">
        <div class="col-md-12 pt-5">
            <div class="row">
                <div class="col-md-12">
                    <h1>NOVIDADES</h1>
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
        <div class="col-md-12 novidades-section">
            <div class="row d-flex justify-content-start">

            <?php foreach ($novidades as $item) { ?>
                <div class="col-md-3">
                    <div class="card" style="width: 100%;">
                        <img src="<?= $item['imagem'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="margin-bottom: 5px"><?= $item['titulo'] ?></h5>
                            <p class="card-text" style="margin-bottom: 0"><?= $item['data'] ?></p>
                            <p class="card-text"><?= $item['conteudo'] ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>

            </div>
        </div>
    </div>
</div>