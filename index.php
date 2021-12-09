<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugasan 2</title>
</head>

<body>
    <form action="simpan.php" method="post">
        <input type="text" name="nama">
        <button type="submit">Simpan</button>
    </form>

    <?php
    $myfile = fopen("test.txt", "r") or die("Unable to open file!");
    echo nl2br(fread($myfile, filesize("test.txt")));
    fclose($myfile);
    ?>
</body>

</html>