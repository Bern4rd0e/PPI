<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova compra</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Nova compra</h1>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="form.php">Criar</a></li>
        </ul>
    </nav>
    <main>
        <form action="ws/salvar.php" method="get" class="container">

            <div class="form-group"><label for="txtItem">Item</label>
                <input type="text" name="item" id="txtItem" class="form-control">
            </div>
            <div class="form-group"><label for="numvalor">Valor</label>
                <input type="number" name="valor" id="numvalor" class="form-control">
            </div>
            <div class="form-group"><label for="numqtdd">Quantidade</label>
                <input type="number" name="qtdd" id="numqtdd" class="form-control">
            </div>

            <input type="submit" value="Salvar" class="btn btn-primary">

            <a href="index.php" class="btn btn-secondary">Voltar</a>
        </form>
    </main>