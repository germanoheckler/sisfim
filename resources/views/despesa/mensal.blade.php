<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SisFIM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
</head>
<body class="bg-primary bg-opacity-25">
    <div class="container-fluid text-black">
        <div class="row align-items-start justify-content-center mx-auto">
            <div class="text-center col-12 p-1 mt-5">
                <h1 class="display-3">° Despesas do Mês °</h1>
            </div>
            <div class="text-center col-12 col-md-6">
                <div class="form-group col-12 col-md-6 my-1 d-block mx-auto m-1">
                    <h4><label for="month" class="link-dark link-underline-opacity-0">Mês das Despesas</label></h4>
                    <input type="month" class="rounded p-1 border-light-subtle" name="meseano" id="meseano" placeholder="">
                    <input type="submit" value="Buscar" class="ms-2 btn btn-primary">
                </div>
            <table class="table table-striped">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Nr</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Data</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="bg-dark text-white"><i class="bi bi-coin"></i></th>
                        <td class="bg-dark text-white"><b>Total de Despesas</b></td>
                        <td class="bg-dark text-white"><b>3.977,50</b></td>
                        <td class="bg-dark text-white"><b>JAN/2024</b></td>
                      </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Cheque</td>
                    <td>2.103,40</td>
                    <td>10/01/2024</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Cartão</td>
                    <td>1.345,20</td>
                    <td>15/01/2024</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Gasolina</td>
                    <td>528,90</td>
                    <td>20/01/2024</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="text-center col-12 p-1 mb-5">
                <h6>Criado por Germano Heckler</h6>
            </div>
        </div>
    </div>
</body>
</html>