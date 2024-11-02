<!-- start body -->
<?php require __DIR__ . "/layout/body.php"; ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Cadastro Produto</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Cadastro</li>
        <li class="breadcrumb-item active">Produto</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="container-fluid">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
      Cadastro de Produto
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog custom-size">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Cadastro Produto</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <!-- navbar Conteudo Modal -->
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Disabled</button>
            </li>
          </ul>

          <!-- Conteudo Do Modal -->
          <form action="POST" class="needs-validation" novalidate>
            <div class="modal-body">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade container show active d-block justify-item-center" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                  <div class="col-md-3 mt-5">
                    <div class="input-group has-validation">
                      <label for="validationCustomUsername" class="form-label me-3">ID <b style="color: red;">*</b></label>
                      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" disabled>
                      <div class="invalid-feedback">
                        Please choose a username.
                      </div>
                    </div>
                  </div>
                  <label class="me-3 mt-3">Ativo <b style="color: red;">*</b></label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Sim</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Não</label>
                  </div>
                  <div class="col-md-3 mt-5">
                    <div class="input-group has-validation">
                      <label for="validationCustomUsername" class="form-label me-3">Produto <b style="color: red;">*</b></label>
                      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                      <div class="invalid-feedback">
                        Please choose a username.
                      </div>
                    </div>
                  </div>



                </div>
                <div class="tab-pane fade container" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0"></div>
                <div class="tab-pane fade container" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
                <div class="tab-pane fade container" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
              </div>
            </div>
          </form>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary">Salvar</button>
          </div>
        </div>
      </div>
    </div>


  </div>


  <section class="section mt-4">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Produto</h5>


            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th class="col-1"><b>N</b>ome</th>
                  <th class="col-1">Codigo</th>
                  <th class="col-2">Descrição</th>
                  <th class="col-2" data-type="date" data-format="YYYY/DD/MM">Data do Produto</th>
                  <th class="col-1">Quantidade</th>
                  <th class="col-1">Valor</th>
                  <th class="col-1">Alterar</th>
                </tr>
              </thead>
              <tbody>
                <?php
                // Exemplo de dados de uma matriz para fins de demonstração

                // Loop para percorrer os dados e gerar as linhas da tabela
                foreach ($Lista as $dados) {
                  echo "<tr>";
                  echo "<td>{$dados["Nome"]}</td>";
                  echo "<td>{$dados["Codigo"]}</td>";
                  echo "<td>{$dados["Descricao"]}</td>";
                  echo "<td>{$dados["Data"]}</td>";
                  echo "<td>{$dados["Qtd"]}</td>";
                  echo "<td>R$ {$dados["Valor"]}</td>";
                  echo "<td><button class='btn btn-outline-primary'>Alterar</button></td>";
                  echo "</tr>";
                }
                ?>
              </tbody>
            </table>

            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->


<!-- Footer -->
<?php require __DIR__ . "/layout/footer.php" ?>