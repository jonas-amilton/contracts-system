<?php
require_once __DIR__ . "/../../src/helpers/Formatter.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Lista de Contratos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4">
    <div class="container">
        <h1 class="mb-4">Lista de Contratos</h1>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Banco</th>
                    <th>Verba</th>
                    <th>Contrato</th>
                    <th>Data Inclusão</th>
                    <th>Valor</th>
                    <th>Prazo</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contracts as $c): ?>
                <tr>
                    <td><?= htmlspecialchars($c['name']) ?></td>
                    <td><?= htmlspecialchars(Formatter::moneyBR($c['budget'])) ?></td>
                    <td><?= htmlspecialchars($c['contract_id']) ?></td>
                    <td><?= htmlspecialchars(Formatter::dateBR($c['inclusion_date'])) ?></td>
                    <td><?= htmlspecialchars(Formatter::moneyBR($c['value'])) ?></td>
                    <td><?= htmlspecialchars($c['term']) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="report" class="btn btn-primary mt-3">Ver Relatório Agrupado</a>
    </div>
</body>

</html>