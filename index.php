<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Piekarnia</title>
</head>

<body>
  <div>
    <h1>Zamowienie</h1>
  </div>
  <form action="order.php" method="POST">
    <label for="paczki">
      Ile paczkow koszt(0.99/szt):
      <input  name="paczkow" type="text">
    </label>
    <br/>
    <label for="paczki">
      Ile grzebieni koszt(1.99/szt):
      <input  name="grzebieni" type="text">
    </label>

    <br/><br/>

    <input type="submit" value="Wyslij Zamowienie">

  </form>
  <?php
    
  ?>

</body>

</html>