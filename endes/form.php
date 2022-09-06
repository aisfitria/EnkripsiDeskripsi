<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cryptography</title>
    <link rel="stylesheet" href=" ">
</head>
<body>
    <h1>Enkripsi dan Deskripsi</h1>
    <form action= "enkripsi.php" method="post">
        <h2>Plainteks to Cipherteks</h2>
        <input type="text" name="input" placeholder = "Masukkan Deskripsi" >
        <input type="submit" value="Enkripsi" />
</form>
<form action= "deskripsi.php" method="post">
        <h2>Cipherteks to Plainteks</h2>
        <input type="text" name="input" placeholder = "Masukkan Enkripsi" >
        <input type="submit" value="Deskripsi" />
</form>
</body>
</html>