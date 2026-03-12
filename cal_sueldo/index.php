<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Sueldo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="css/style.css">
</head>
<body>
        <h1>Calcular Sueldo</h1>
                <form method="post" action="calcular.php">
                    <div class="mb-3">
                        <label for="txt_horas" class="form-label">Horas</label>
                        <input name="Horas" type="texto" class="form-control" id="txt_horas" placeholder="Digite la cantidad de horas">
                    </div>

                    <div class="mb-3">
                        <label for="txt_turno" class="form-label">Turno</label>
                        <input name="Turno" type="texto" class="form-control" id="txt_turno" placeholder="Digite el tipo de turno">
                        <small>1 para mañana, 2 para tarde y 3 para noche</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Calcular</button>
                </form>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"></script>

</body>
</html>