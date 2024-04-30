<?php
/* Snack 1 */
$matches = [
  [
    "home_team" => "Olimpia Milano",
    "guest_team" => "Cantù",
    "points_home" => 55,
    "points_guest" => 60
  ],
  [
    "home_team" => "Virtus Bologna",
    "guest_team" => "Varese",
    "points_home" => 72,
    "points_guest" => 68
  ],
  [
    "home_team" => "Fortitudo Bologna",
    "guest_team" => "Dinamo Sassari",
    "points_home" => 78,
    "points_guest" => 76
  ],
  [
    "home_team" => "Civitavecchia",
    "guest_team" => "Viterbo",
    "points_home" => 90,
    "points_guest" => 30
  ]
];

/* Snack 2 */
$access_result = '';
if (empty($_GET['name']) || empty($_GET['mail']) || empty($_GET['age'])) {

} else {
  $name = $_GET['name'];
  $mail = $_GET['mail'];
  $age = $_GET['age'];

  if (strlen($name) > 3 && str_contains($mail, '@') && str_contains($mail, '.') && is_numeric($age)) {
    $access_result = 'Accesso riuscito';
  } else {
    $access_result = 'Accesso negato';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/859/859354.png">
  <title>PHP Snacks 1</title>
</head>

<body>
  <main class="container">

    <!-- Snack1 -->
    <section class="my-4">
      <ul>
        <?php foreach ($matches as $match) {
          echo "<li>{$match["home_team"]} - {$match["guest_team"]} | {$match["points_home"]} - {$match["points_guest"]}</li>";
        } ?>
      </ul>
    </section>

    <!-- Snack2 -->
    <section class="my-2">
      <h2 class="text-center mb-4">Verifica Accesso</h2>
      <form action="index.php" method="get">
        <div class="form-group">
          <label for="name">Nome:</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="mail">Email:</label>
          <input type="email" class="form-control" id="mail" name="mail" required>
        </div>
        <div class="form-group">
          <label for="age">Età:</label>
          <input type="number" class="form-control" id="age" name="age" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block mt-2 ">Invia</button>
      </form>
      <p class="text-center mt-2">
        <?php echo $access_result; ?>
      </p>
    </section>
  </main>
</body>

</html>