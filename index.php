<?php
/*
Stampare tutti i nostri hotel con tutti i dati disponibili.
Iniziate per steps:
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
Bonus: 1
Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
 */

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4,
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2,
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1,
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5,
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50,
    ],

];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-12 mt-5">
        <table class="table">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Descrizione</th>
              <th>Parcheggio</th>
              <th>Voto</th>
              <th>Distanza dal centro</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($hotels as $hotel): ?>
              <tr>
                <td>
                  <?=$hotel['name'];?>
                </td>
                <td>
                  <?=$hotel['description'];?>
                </td>
                <td>
                  <?=$hotel['parking'] ? 'Sì' : 'No';?>
                </td>
                <td>
                  <?=$hotel['vote'];?>
                </td>
                <td>
                  <?=$hotel['distance_to_center'];?> km
                </td>
              </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>