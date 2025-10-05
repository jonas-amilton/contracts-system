<?php
require_once __DIR__ . "/../../src/helpers/Formatter.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Relatório Agrupado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4">
    <div class="container">
        <h1 class="mb-4">Relatório Agrupado por Banco e Verba</h1>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Banco</th>
                    <th>Verba</th>
                    <th>Data Mais Antiga</th>
                    <th>Data Mais Recente</th>
                    <th>Total Valor</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($groups as $g): ?>
                    <tr>
                        <td><?= htmlspecialchars($g['name']) ?></td>
                        <td><?= htmlspecialchars(Formatter::moneyBR($g['budget'])) ?></td>
                        <td><?= htmlspecialchars(Formatter::dateBR($g['oldest_date'])) ?></td>
                        <td><?= htmlspecialchars(Formatter::dateBR($g['newest_date'])) ?></td>
                        <td><?= htmlspecialchars(Formatter::moneyBR($g['total_value'])) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="list_contracts" class="btn btn-secondary mt-3">Voltar para Lista</a>
    </div>
</body>

</html>