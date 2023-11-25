<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Formulir Pendaftaran</h1>
    <form action="/welcome" method="POST">
        @csrf
        <label for="nama_depan">Nama Depan:</label>
        <input type="text" id="nama_depan" name="nama_depan" required>
        
        <label for="nama_belakang">Nama Belakang:</label>
        <input type="text" id="nama_belakang" name="nama_belakang" required>

        <button type="submit">Register</button>
    </form>
</body>
</html>
