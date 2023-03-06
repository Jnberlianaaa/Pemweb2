<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Form Pendaftaran Mahasiswa</h1>
   <form action="belajar_post.php" method="post">
        
        <label for="">Nama Mahasiswa</label><br>
        <input type="text" name="nama"><br><br>

        <label for="">Jenis Kelamin</label><br>
        <input type="radio" name="Jenis_Kelamin" value="Laki-Laki">
            <label for="">Laki-laki</label>
        <input type="radio" name="Jenis_Kelamin" value="Perempuan ">
            <label for="">Perempuan</label><br><br>
        
        <label for="">Hoby</label><br>
        <input type="checkbox" name="Hoby" value="Basket">
            <label for="">Basket</label>
        <input type="checkbox" name="Hoby" value="Renang">
            <label for="">Renang</label>
        <input type="checkbox" name="Hoby" value="Badminton">
            <label for="">Badminton</label><br><br>

        <label for="">NIM</label><br>
        <input type="number" name="NIM"><br><br>

        <label for="">Prodi</label><br>
        <select name="Prodi">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Bisnis Digital">Bisnis Digital</option>
        </select><br><br>
        
        <button type="submit">Kirim !</button>
        <button type="reset">Reset</button>
    
   </form> 
</body>
</html>