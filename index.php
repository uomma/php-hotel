<?php


$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-HOTELS</title>
    <!-- bootstrap   -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>
    <h1>Hotels</h1>
    <ul>
        <?php foreach ($hotels as $hotel) { ?>
            <li>
                <h4><?php echo $hotel['name']; ?></h4>
                <div>descrizione:<?php echo $hotel['description']; ?></div>
                <div>parking:<?php echo $hotel['parking'] === true ? 'Si' : 'No'; ?></div>
                <div>vote:<?php echo $hotel['vote']; ?></div>
                <div>distance:<?php echo $hotel['distance_to_center']; ?>KM</div>

            </li>
        <?php } ?>
    </ul>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">description</th>
      <th scope="col">parking</th>
      <th scope="col">vote</th>
      <th scope="col">distance</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($hotels as $hotel) { ?>
    <tr>
      <td><?php echo $hotel['name']; ?></td>
      <td><?php echo $hotel['description']; ?></td>
      <td><?php echo $hotel['parking'] === true ? 'Si' : 'No'; ?></td>
      <td><?php echo $hotel['vote']; ?></td>
      <td><?php echo $hotel['distance_to_center']; ?>KM</td>


    </tr>
    <?php } ?>

  </tbody>
</table>
</body>

</html>