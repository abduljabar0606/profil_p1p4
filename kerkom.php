<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h1>Biodata siswa</h1>
    <form action="#" method="POST">
        <input type="Text" name="nama" placeholder="Nama"><br><br>
        <input type="Text" name="rombel" placeholder="Rombel"><br><br>
        <input type="Text" name="rayon" placeholder="Rayon"><br><br>
        <hr>
  <h1>Masukan nilai</h1>
        <input type="number" name="nil1"><br><br>
        <input type="number" name="nil2"><br><br>
        <input type="number" name="nil3"><br><br>
        <input type="number" name="nil4"><br><br>
        <input type="number" name="nil5"><br><br>
        <input type="number" name="nil6"><br><br>
        <input type="number" name="nil7"><br><br>
        <input type="submit" name="submit">
    </form> 
    <hr>
    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $rombel = $_POST['rombel'];
        $rayon = $_POST['rayon'];
        $nil1 = $_POST['nil1'];
        $nil2 = $_POST['nil2'];
        $nil3 = $_POST['nil3'];
        $nil4 = $_POST['nil4'];
        $nil5 = $_POST['nil5'];
        $nil6 = $_POST['nil6'];
        $nil7 = $_POST['nil7'];
        $min = min($nil1,$nil2,$nil3,$nil4,$nil5,$nil6,$nil7);
        $max = max($nil1,$nil2,$nil3,$nil4,$nil5,$nil6,$nil7);
        $Rata = $nil1 + $nil2 + $nil3 + $nil4 + $nil5 + $nil6 + $nil7;
        $Rata = $Rata / 7; 

        echo "Nama :" . $nama. "<br>";
        echo "Rombel : " . $rombel. "<br>";
        echo "Rayon : " . $rayon. "<br>";
        echo "Min nilai :" .$min. "<br>";
        echo "Max nilai :" . $max. "<br>";
        echo "Rata-Rata :" . $Rata;

        
    }
    ?>
</body>
</html>