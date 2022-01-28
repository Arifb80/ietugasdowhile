<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center> 
     <form method = "POST" action= "">
     <table>
        <tr>
             <td>input</td>
             <td>:</td>
             <td><input type='text' name='ulang'></td>
        </tr> 
        
        <tr>
             <td></td>
             <td></td>
             <td><input type="submit" name ="simpan" value='KIRIM'></td>
        </tr>
     </table>
     </form>
    </center>
</body>
</html>
<?php
if(isset($_POST['simpan'])){
$ulangi = $_POST['ulang'];


do {
    echo "<p>ini adalah perulangan ke-$ulangi</p>";
    $ulangi++;
} while ($ulangi < 10);
}
?>