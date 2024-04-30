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

/* Snack 3 */
$posts = [
  '10/01/2019' => [
    [
      'title' => '10 Cose da Fare durante le Vacanze Estive',
      'author' => 'Laura Rossi',
      'text' => 'Le vacanze estive sono il momento perfetto per rilassarsi e divertirsi. Ecco 10 attività da fare durante le tue vacanze per sfruttare al massimo il tuo tempo libero.'
    ],
    [
      'title' => '5 Idee per Arredare la Tua Camera da Letto',
      'author' => 'Marco Bianchi',
      'text' => 'La camera da letto è uno spazio personale e accogliente. Ecco 5 idee creative per arredare la tua camera da letto e renderla un luogo perfetto per il relax.'
    ],
  ],
  '10/02/2019' => [
    [
      'title' => 'Ricetta della Settimana: Pasta al Pomodoro',
      'author' => 'Giulia Verdi',
      'text' => 'La pasta al pomodoro è un classico della cucina italiana. Segui questa semplice ricetta e prepara una deliziosa pasta al pomodoro per la tua prossima cena.'
    ]
  ],
  '15/05/2019' => [
    [
      'title' => 'Consigli per Viaggiare in Modo Sostenibile',
      'author' => 'Francesco Martini',
      'text' => 'Viaggiare in modo sostenibile è importante per ridurre l\'impatto ambientale. Scopri alcuni semplici consigli per viaggiare in modo responsabile e rispettoso dell\'ambiente.'
    ],
    [
      'title' => 'Come Gestire lo Stress nella Vita Quotidiana',
      'author' => 'Valentina Rossi',
      'text' => 'Lo stress può influire negativamente sulla nostra salute e benessere. Segui questi consigli pratici per gestire lo stress nella tua vita quotidiana e migliorare il tuo benessere.'
    ],
    [
      'title' => 'Guida alla Cura delle Piante da Interno',
      'author' => 'Giacomo Ferrari',
      'text' => 'Le piante da interno possono portare gioia e vitalità nella tua casa. Scopri come prenderti cura delle tue piante da interno con questa semplice guida alla cura delle piante.'
    ]
  ],
];

/* Snack 4 */
$random_numbers = [];
while (count($random_numbers) < 10) {
  $random_number = mt_rand(1, 100);
  if (!in_array($random_number, $random_numbers)) {
    array_push($random_numbers, $random_number);
  }
}

/* Snack 5 */
$long_text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget ante urna. Nulla convallis mauris a condimentum interdum. Sed commodo arcu eget sapien tristique, ut malesuada felis convallis. Sed nec neque eu odio convallis mollis. Vivamus nec semper lorem. Mauris varius dolor quis lacinia dictum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris feugiat quam sed nulla ultrices, quis sagittis purus fermentum. Nulla convallis, velit non feugiat vulputate, arcu tortor convallis purus, non vestibulum diam mauris eu magna. Proin lobortis ullamcorper enim, non ultricies nisl laoreet vel. Nulla vitae vehicula purus, a fringilla nulla. Fusce mattis est eu mollis tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque varius bibendum orci nec fermentum. Nulla facilisi. Vivamus vitae dictum libero. Sed dignissim euismod diam, in feugiat urna efficitur vitae. Sed et lacinia nisl.";
$ex_text = array_filter(explode(".", $long_text));

/* Snack 6 */
$db = [
  'teachers' => [
      [
          'name' => 'Michele',
          'lastname' => 'Papagni'
      ],
      [
          'name' => 'Fabio',
          'lastname' => 'Forghieri'
      ]
  ],
  'pm' => [
      [
          'name' => 'Roberto',
          'lastname' => 'Marazzini'
      ],
      [
          'name' => 'Federico',
          'lastname' => 'Pellegrini'
      ]
  ]
];
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
  <link rel="stylesheet" href="./style.css">
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
    <section class="my-4">
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

    <!-- Snack3 -->
    <section class="my-4">
      <ul>
        <?php foreach ($posts as $date => $post_list) { ?>
          <li>
            Data <?php echo $date; ?>:
            <?php foreach ($post_list as $post) { ?>
              <ol class="mt-3">
                <li>
                  <?php echo $post['title']; ?>
                </li>
                <li>
                  <?php echo $post['author']; ?>
                </li>
                <li>
                  <?php echo $post['text']; ?>
                </li>
              </ol>
            <?php } ?>
          </li>
        <?php } ?>
      </ul>
    </section>

    <!-- Snack4 -->
    <section class="my-4">
      <?php
      echo "<pre>";
      print_r($random_numbers);
      echo "</pre>";
      ?>
    </section>

    <!-- Snack5 -->
    <section class="my-4">
      <?php foreach ($ex_text as $text) {
        echo "<p>$text.</p>\n";
      } ?>
    </section>

    <!-- Snack6 -->
    <section class="my-4 d-flex justify-content-between">
      <div class="box grey">
        <h5 class="text-center">Insegnanti</h5>
        <ul>
          <?php foreach ($db['teachers'] as $teacher) {
            echo "<li>{$teacher['name']} {$teacher['lastname']}</li>";
          } ?>
        </ul>
      </div>
      <div class="box green">
        <h5 class="text-center">PM</h5>
        <ul>
          <?php foreach ($db['pm'] as $pm) {
            echo "<li>{$pm['name']} {$pm['lastname']}</li>";
          } ?>
        </ul>
      </div>
    </section>
  </main>
</body>

</html>