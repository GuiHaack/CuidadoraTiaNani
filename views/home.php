<div class="container-fluid home">
    <div class="row banner g-0">
        <div class="col-md-12 some-mobile" style="height: 100vh; width: 100% ">
            <img src="assets/images/banners/banner.jpg" style="height: 100vh; width: 100%; filter:brightness(0.6)" alt="">
        </div>
        <div class="col-md-12 some-pc" style="height: 100vh; width: 100% ">
            <img src="assets/images/banners/banner-mobile.jpg" style="height: 100vh; width: 100%; filter:brightness(0.6)" alt="">
        </div>
    </div>

    <div class="row titulo-cima g-0 d-flex justify-content-center">
        <div class="col-md-12 d-flex justify-content-center">
            <h1 id="titulo">
                AQUI SE DESENVOLVE<br>
                CRIATIVIDADE E SE<br>
                PROPAGA O CONHECIMENTO
            </h1>
        </div>
    </div>
    <div class="row g-0 onda-cima">
        <div class="col-md-12">
            <img src="assets/images/ondaazul2.png " class="imagem-fluida onda-1920 some-mobile">
            <img src="assets/images/onda-azul-mobile.png " class="imagem-fluida onda-1920 some-pc">
            <img src="assets/images/ondaazul-2560.png" class="imagem-fluida onda-2560 some-mobile">
        </div>
    </div>
    <div class="row mouse-cima g-0 d-flex justify-content-center">
        <div class="col-md-1 d-flex justify-content-center">
            <a class="mouse-link" id="mouse-roll" href="#sobre">
                <img src="assets/images/mouse.png" alt="">
            </a>
        </div>
    </div>
</div>
<div class="container-fluid sobre-section">
    <div class="row" id="sobre">
        <div class="col-md-6 texto-sobre">
            <h1><strong>Sobre nós</strong></h1>
            <div class="bar-title"></div>
            <p class="txt-sobre-1">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Vestibulum varius, quam id eleifend egestas, libero nisi
                posuere odio, sit amet viverra leo lorem eget enim.
                Consectetur purus. Integer faucibus faucibus erat a
                hendrerit. Cursus consectetur libero, at consectetur
                ligula fringilla ut.
                <b>
                    Curabitur scelerisque pulvinar quam, vel aliquam felis tincidunt sit amet. Fusce non nulla id nunc facilisis scelerisque tincidunt at.
                </b>
            </p>
            <b class="">Propósito:</b>
            <p>Criar uma infância saudável e acolhedora para as crianças.</p>
            <b class="">Visão:</b>
            <p>Sermos reconhecidos pela competência e personalidade adequada para educação dos alunos.</p>
            <b class="">Missão:</b>
            <p>Entregar um serviço de excelência para educar e cuidar dos alunos, criando laços e nos aprofundando nos problemas que as crianças possam vir a desenvolver.</p>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6 col-6 sobre-right">
                    <div class="row">
                        <div class="col">
                            <img src="assets/images/IMG_1.jpg" class="imagem-sobre">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="assets/images/IMG_3.jpg" class="imagem-sobre">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-6 sobre-left">
                    <div class="row">
                        <div class="col">
                            <img src="assets/images/IMG_4.jpg" class="imagem-sobre">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="assets/images/IMG_2.jpg" class="imagem-sobre">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid planos-section" id="novidades">
    <div class="row plano-col">
        <div class="col-md-12">
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
            <div class="row d-flex justify-content-center">

                <?php foreach ($novidades as $item) if ($tmp++ < 4) { ?>
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
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <a class="btn btn-primary ver-mais" href="<?= $actual_link ?>/novidades">VER MAIS</a>
        </div>
    </div>
</div>
<div class="container-fluid planos-section galeria-section" id="galeria">
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
        <div class="col-md-12 some-mobile">
            <div class="row galeria d-flex justify-content-center">

                <?php foreach ($galeria as $item) if ($tmp2++ < 5) { ?>
                    <div class="col-md-2">
                        <div class="card" style="width: 100%;">
                            <a href="<?= $item['imagem'] ?>" data-toggle="lightbox" data-gallery="portfoliogallery">
                                <img src="<?= $item['imagem'] ?>" class="card-img-top">
                            </a>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
        <div class="col-md-12 some-pc">
            <div class="row galeria d-flex justify-content-center">

                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                        <?php foreach ($galeria as $item) if ($tmp4++ < 5) { ?>
                            <div class="carousel-item <?= $tmp4 == 1 ? 'active' : '' ?>">
                                <img src="<?= $item['imagem'] ?>" class="d-block w-100">
                            </div>
                        <?php } ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <a class="btn btn-primary ver-mais" href="<?= $actual_link ?>/galeria">VER MAIS</a>
        </div>
    </div>
</div>
<div class="container-fluid contato-section " id="contato">
    <div class="row contato-row d-flex justify-content-center">
        <div class="col-md-6 ">
            <div class="row">
                <h1 class="contato-titulo">Chama a gente</h1>
            </div>
            <div class="row formulario">
                <form role="form" action="<?= $actual_link ?>/enviar-contato" method="POST" enctype="multipart/form-data">

                    <input style="display: none;" type="text" name="lb" value="">
                    <input style="display: none;" type="text" name="assunto" value="Contato">
                    <input class="form-control" type="text" name="nome" placeholder="Nome" required>
                    <input class="form-control" type="text" name="email" placeholder="E-mail" required>
                    <input class="form-control" type="phone" name="phone" placeholder="Celular" required>
                    <input class="form-control" type="message" name="mensagem" placeholder="Mensagem" required>

                    <button type="submit" class="btn btn-primary">ENVIAR</button>
                </form>
            </div>
        </div>
        <div class="col-md-6 ">
            <img src="assets/images/garotaloira.png" class="img-mao some-mobile">
        </div>
    </div>
    <div class="row onda-cima-footer g-0">
        <div class="col-md-12">
            <img src="assets/images/onda-footer.png" class="imagem-fluida onda-1920">
            <img src="assets/images/onda-footer-2550.png" class="imagem-fluida onda-2560">
        </div>
    </div>
</div>