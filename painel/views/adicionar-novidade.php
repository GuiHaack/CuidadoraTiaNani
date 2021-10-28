<style>
  .form-select {
    display: block;
    width: 100%;
    padding: .375rem 2.25rem .375rem .75rem;
    -moz-padding-start: calc(0.75rem - 3px);
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    border-radius: 4px;
    border: 1px solid #ced4da;
  }
</style>

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Adicionar Novidade</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= $actual_link ?>/painel/home">Home</a></li>
          <li class="breadcrumb-item active">Adicionar Novidade</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <form id="form" role="form" action="<?= $actual_link ?>/painel/adicionar-novidade/action" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-7">
        <div class="card card-primary card-outline">
          <div class="card-body">
            <div class="form-group">
              <label for="nome">Título</label>
              <input type="text" id="nome" class="form-control" required name="nome">
            </div>
            <div class="form-group">
              <label for="data">Data</label>
              <input type="text" id="data" class="form-control" required name="data">
            </div>
            <div class="form-group">
              <label for="texto">Texto</label>
              <textarea type="text" id="texto" class="form-control" required name="texto"></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="card card-primary card-outline">
          <div class="card-header with-border">
            <h3 class="card-title">Foto</h3>
          </div>
          <div class="card-body">
            <h2 style="font-size: 0.850vw;">Recomendamos Imagens 1920x1080</h2>
            <div class="form-group">
              <div class="box box-warning" style="margin-bottom:25px;">
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-12">
                      <input type="file" name="imagem">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card card-primary card-outline">
          <div class="card-body">
            <div class="card-body">
              <div class="form-group">
                <div class="text-left">
                  <a href="<?= $actual_link ?>/painel/listar-novidades" class="btn btn-secondary">Cancelar</a>
                  <input type="submit" value="Adicionar Imagem" class="btn btn-success">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</section>