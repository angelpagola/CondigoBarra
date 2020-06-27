<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Código de barras</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="js/JsBarCode.all.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Generar código e barras dinámico con php, mysql y jsbarcode</h1>
        <div class="row">
            <div class="col-sm-4">
                <form action="php/insertar.php" method="POST">
                    <label for="" class="">Nombre</label>
                    <input type="text" name="codigo" class="form-control">
                    <br>
                    <button type="submit" class="btn btn-primary">Generar codigo barras</button>
                </form>
            </div>
        </div>
        <p><br></p>
        <div class="row">
            <div class="col-sm-10">
                <?php require_once "table/tabla.php"; ?>
            </div>
        </div>
    </div>
</body>

</html>