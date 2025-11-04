<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>da01</title>
</head>
<body>
    <h1>DADOS</h1>
    <form action="da02.php" method="post">
        <div>
            <label>Nº de dados</label>
            <select name="nDados">
                <option>1</option>
                <option>2</option>
                <option>3</option>
            </select>
        </div>
        <div>
            <label>Nº de caras</label>
            <select name="nCaras">
                <option>4</option>
                <option>6</option>
                <option>8</option>
                <option>10</option>
                <option>12</option>
                <option>20</option>
            </select>
        </div>
        <div>
            Puntos del oponente: <input type="text" name="oponente">
        </div>
        <div>
            <input type="submit" value="Suerte!">
        </div>
    </form>
</body>
</html>