<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Editar Novidade</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= $actual_link ?>/painel/home">Home</a></li>
                    <li class="breadcrumb-item active">Editar Novidade</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <form id="form" role="form" action="<?= $actual_link ?>/painel/editar-novidade/<?= $projeto['id'] ?>/action" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="imagem-antiga" value="<?= $projeto['imagem'] ?>">
        <input type="hidden" name="id-antiga" value="<?= $projeto['id'] ?>">

        <div class="row">
            <div class="col-md-7">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nome">Título</label>
                            <input type="text" id="nome" value="<?= $projeto['titulo'] ?>" class="form-control" required name="nome">
                        </div>
                        <div class="form-group">
                            <label for="data">Data</label>
                            <input type="text" id="data" value="<?= $projeto['data'] ?>" class="form-control" required name="data">
                        </div>
                        <div class="form-group">
                            <label for="texto">Texto</label>
                            <textarea type="text" id="texto" class="form-control" required name="texto"><?= $projeto['conteudo'] ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card card-primary card-outline">
                    <div class="form-group">
                        <div class="card-header with-border">
                            <h3 class="card-title">Foto</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <?php $temDestaque = (isset($projeto['imagem']) and $projeto['imagem'] != '') ? true : false;
                                if ($temDestaque) { ?>
                                    <div class="col-md-12">
                                        <div class="img-item">
                                            <img style="margin-bottom:25px; max-width: 100%;" class="scale-with-grid imagem-destaque" src="<?= $projeto['imagem'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="file" name="imagem">
                                    </div>
                                <?php } else { ?>
                                    <div class="col-md-12">
                                        <input type="file" name="imagem">
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="text-left">
                                <a href="<?= $actual_link ?>/painel/" class="btn btn-secondary">Cancelar</a>
                                <input type="submit" value="Alterar Novidade" class="btn btn-success">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>