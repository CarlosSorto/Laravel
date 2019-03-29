<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
</head>
<body>
    <h1>USUARIOS</h1>
    <ul>
        <?php foreach ($users as $users): ?>
            <li><?php echo $users ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>