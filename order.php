<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Podsumowanie zamowienia</h1>

  <?php
  $paczkow = $_POST['paczkow'];
  $grzebieni = $_POST['grzebieni'];
  $suma = 0.99 * $paczkow + 2 * $grzebieni;


  echo <<<END
   <table border="1" cellpadding="10" cellspacing="0">
    <tbody>
      <tr>
        <td>Paczek (0.99zl/szt)</td>
        <td>$paczkow</td>
      </tr>
      <tr>
        <td>Grzebien (2zl/szt)</td>
        <td>$grzebieni</td>
      </tr>
      <tr>
        <td>Suma</td>
        <td>$suma</td>
      </tr>
    </tbody>

  </table>
  <tabel>
  <br>
  <a href="index.php"> Wroc</a>
  END

    ?>
</body>

</html>