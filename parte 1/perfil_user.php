<?php
// Backend
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADM - Locadora de veículos</title>
    <!-- link do css -->
    <link rel="stylesheet" href="style.css">
    <!-- Link do bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Link dos ícones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  
</head>
<body class="container py-4">
    <div class="container py-4">
    <!-- barra de informações de usuário -->
     <div class="row mb-4">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center inicio">
                <h1>Sistema de Locadora de Veículos</h1>
                <div class="d-flex align-items-center gap-3 user-info mx-3">
                    <span class="user-icon">
                        <i class="bi bi-person-circle" style="font-size:24px;"></i>
                    </span>

                    <!-- Bem vindo, [usuário] -->
                     <span class="welcome-text">
                        Bem-vindo, <strong>Usuário</strong>!
                     </span>

                     <!-- botão de logout -->
                      <a href="" class="btn btn-outline-danger d-flex align-items-center gap-1">
                        <i class="bi bi-box-arrow-right"></i>
                        Sair
                    </a>
                </div>
            </div>
        </div>
     </div>

        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-header">
                    <h4 class="mb-0">
                        Calcular a previsão de aluguel 💰
                    </h4>
                </div>
                <div class="card-body">
                    <form action="post" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="tipo" class="input-label">
                                Tipo de veículo:
                            </label>
                            <select  class="form-select" name="tipo" id="tipo" 
                            required>
                                <option value="carro">Carro</option>
                                <option value="moto">Moto</option>
                                <option value="caminhao">Caminhão</option>
                                <option value="aviao">Avião</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="quantidade" class="form-label">Quantidade de dias 📆:</label>
                            <input type="number" class="form-control" name="dias_calculo" value="1" required>
                        </div>
                        <button class="btn btn-success w-100" type="submit" 
                        name="calcular">
                            Calcular Previsão
                        </button>
                    </form>
                </div>
            </div>
        </div>
     </div>

     <!-- Tabela de veículos cadastrados -->
     <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">
                        Veículos Cadastrados📄
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <th>Tipo</th>
                                <th>Modelo</th>
                                <th>Placa</th>
                                <th>Status</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Carro</td>
                                    <td>Uno</td>
                                    <td>ABC1D34</td>
                                    <td>
                                        <span class="badge bg-success">
                                            Disponível
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>Moto</td>
                                    <td>Kawasaki Ninja</td>
                                    <td>FEM3L18</td>
                                    <td>
                                        <span class="badge bg-warning">
                                            Alugado
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>Caminhão</td>
                                    <td>Truck</td>
                                    <td>DUD2A17</td>
                                    <td>
                                        <span class="badge bg-success">
                                            Disponível
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
     </div>

    </div>
  
</body>
</html>