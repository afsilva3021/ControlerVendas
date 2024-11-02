<?php require __DIR__ . "/layout/body.php"; ?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Tables</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Produtos</li>
        <li class="breadcrumb-item active">Catalago</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Datatables</h5>
            <p>Add lightweight datatables to your project with using the <a href="#" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="#" target="_blank">more examples</a>.</p>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col"><b>N</b>ame</th>
                  <th scope="col">Ext.</th>
                  <th scope="col" >City</th>
                  <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                  <th scope="col" >Completion</th>
                  <th scope="col">Alterar</th>
                </tr>
              </thead>
              <tbody>
                <?php
                // Exemplo de dados de uma matriz para fins de demonstração
                $dados = [
                  ['Unity Pugh', '9958', 'Curicó', '2005/02/11', '37%'],
                  ['Theodore Duran', '8971', 'Dhanbad', '1999/04/07', '97%'],
                  ['Kylie Bishop', '3147', 'Norman', '2005/09/08', '63%'],
                  ['Unity Pugh', '9958', 'Curicó', '2005/02/11', '37%'],
                  ['Unity Pugh', '9958', 'Curicó', '2005/02/11', '37%'],
                  ['Theodore Duran', '8971', 'Dhanbad', '1999/04/07', '97%'],
                  ['Kylie Bishop', '3147', 'Norman', '2005/09/08', '63%'],
                  ['Unity Pugh', '9958', 'Curicó', '2005/02/11', '37%'],
                  ['Unity Pugh', '9958', 'Curicó', '2005/02/11', '37%'],
                  ['Theodore Duran', '8971', 'Dhanbad', '1999/04/07', '97%'],
                  ['Kylie Bishop', '3147', 'Norman', '2005/09/08', '63%'],
                  ['Unity Pugh', '9958', 'Curicó', '2005/02/11', '37%'],
                  ['Unity Pugh', '9958', 'Curicó', '2005/02/11', '37%'],
                  ['Theodore Duran', '8971', 'Dhanbad', '1999/04/07', '97%'],
                  ['Kylie Bishop', '3147', 'Norman', '2005/09/08', '63%'],
                  ['Unity Pugh', '9958', 'Curicó', '2005/02/11', '37%'],
                  ['Unity Pugh', '9958', 'Curicó', '2005/02/11', '37%'],
                  ['Theodore Duran', '8971', 'Dhanbad', '1999/04/07', '97%'],
                  ['Kylie Bishop', '3147', 'Norman', '2005/09/08', '63%'],
                  ['Unity Pugh', '9958', 'Curicó', '2005/02/11', '37%'],
                  ['Unity Pugh', '9958', 'Curicó', '2005/02/11', '37%'],
                  ['Theodore Duran', '8971', 'Dhanbad', '1999/04/07', '97%'],
                  ['Kylie Bishop', '3147', 'Norman', '2005/09/08', '63%'],
                  ['Unity Pugh', '9958', 'Curicó', '2005/02/11', '37%'],
                  ['Unity Pugh', '9958', 'Curicó', '2005/02/11', '37%'],
                  ['Theodore Duran', '8971', 'Dhanbad', '1999/04/07', '97%'],
                  ['Kylie Bishop', '3147', 'Norman', '2005/09/08', '63%'],
                  ['Unity Pugh', '9958', 'Curicó', '2005/02/11', '37%'],
                ];

                // Loop para percorrer os dados e gerar as linhas da tabela
                foreach ($dados as $linha) {
                  echo "<tr>";
                    echo "<td>{$linha[0]}</td>"; // Nome
                    echo "<td>{$linha[1]}</td>"; // Ext.
                    echo "<td>{$linha[2]}</td>"; // Cidade
                    echo "<td>{$linha[3]}</td>"; // Data de início
                    echo "<td>{$linha[4]}</td>"; // Conclusão
                    echo "<td> <button type='submit' class='btn btn-outline-primary'>Alterar</button> </td>";
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

<?php require __DIR__ . "/layout/footer.php" ?>