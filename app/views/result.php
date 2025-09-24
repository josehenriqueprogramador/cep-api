<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Busca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Resultado da Busca</h2>
        <?php if ($data): ?>
            <ul class="list-group">
                <li class="list-group-item"><strong>CEP:</strong> <?= $data['cep'] ?></li>
                <li class="list-group-item"><strong>Logradouro:</strong> <?= $data['logradouro'] ?></li>
                <li class="list-group-item"><strong>Bairro:</strong> <?= $data['bairro'] ?></li>
                <li class="list-group-item"><strong>Cidade:</strong> <?= $data['localidade'] ?></li>
                <li class="list-group-item"><strong>Estado:</strong> <?= $data['uf'] ?></li>
            </ul>
        <?php else: ?>
            <div class="alert alert-danger" role="alert">
                CEP não encontrado ou inválido.
            </div>
        <?php endif; ?>
        <a href="/" class="btn btn-secondary">Voltar</a>
    </div>
</body>
</html>
