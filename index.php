<!doctype html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.rtl.css">
    <link rel="stylesheet" href="css/bootstrap-grid.rtl.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.rtl.css">
    <link rel="stylesheet" href="css/bootstrap-utilities.css">
    <link rel="stylesheet" href="css/bootstrap-utilities.rtl.css">

</head>

<body>
<!--Inicio do corpo do formulario-->
<div class="container-fluid">

    <form action="formulario.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">

            <label for="exampleFormControlInput1" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="email@exemplo.com">
            <br />
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Celular/Whatsapp</span>
                <input type="numeric" id="inputGroup-sizing" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="celular">
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Deixe sua mensagem:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">

            <button class="btn btn-success" name="send" type="button">Enviar</button>
        </div>

    </form>
</div>
<!--Final do formulario-->
</body>

<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.esm.js"></script>
<script src="js/bootstrap.js"></script>


</html>