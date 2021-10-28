<section class="content-header" style="padding-bottom: 5px;">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Novidades</h1>
        <a class="btn btn-success" href="<?= $actual_link ?>/painel/adicionar-novidade"><i class="fal fa-image pe-1"></i>Adicionar Novidade</a>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= $actual_link ?>/painel/home">Home</a></li>
          <li class="breadcrumb-item active">Novidades</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Novidades</h3>
    </div>
    <div class="card-body p-0">
      <table class="table table-striped projects">
        <thead>
          <tr>
            <th style="width: 1%" class="text-center">
              ID
            </th>
            <th style="width: 10%" class="text-center">
              Titulo
            </th>
            <th style="width: 10%" class="text-center">
              Data
            </th>
            <th style="width: 20%" class="text-center">
              Texto
            </th>
            <th style="width: 10%" class="text-center">
              Imagem
            </th>
            <th style="width: 30%; text-align: end !important; padding-right: 10%;" class="text-center">
              Ações
            </th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($galeria as $proj) { ?>
            <tr>
              <td class="text-center"><?= $proj["id"] ?></td>
              <td class="text-center"><?= $proj["titulo"] ?></td>
              <td class="text-center"><?= $proj["data"] ?></td>
              <td class="text-start"><?= $proj["conteudo"] ?></td>
              <td class="text-center"><small><img class="img-fluid" src="<?= $proj["imagem"] ?>"></small></td>
              <td class="text-center project-actions" style="text-align: end !important; padding-right: 10%;">
                <a class="btn btn-info btn-sm" href="<?= $actual_link ?>/painel/editar-novidade/<?= $proj["id"] ?>"><i class="fas fa-pencil-alt"></i> Editar</a>
                <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?= $proj["id"] ?>"><i class="fas fa-trash"></i> Apagar</a>
              </td>
            </tr>

            <div class="modal fade" id="staticBackdrop<?= $proj["id"] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Confirmar Exclusão</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Você deseja confirmar a exclusão da novidade <?= $proj["titulo"] ?>?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <a href="<?= $actual_link ?>/painel/apagar-novidades/<?= $proj["id"] ?>">
                      <button type="button" class="btn btn-warning">
                        Confirmar
                      </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>

          <?php } ?>
          <!---->
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->