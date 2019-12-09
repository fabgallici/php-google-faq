<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Google Faq</title>
  <!-- Riscrivere questa pagina del sito google
  https://policies.google.com/faq.
  Ci sono diverse domande con relative risposte.
  Gestire il "Database" e la visualizzazione di
  queste domande e risposte con PHP. -->

  <?php
  include 'data.php';
  include 'helper.php';

  ?>
</head>

<body>

  <?php
  foreach ($faqs as $faq) {
    echo '<h1>' . $faq['title'] . '</h1>';
    $content = $faq['content'];
    for ($i = 0; $i < count($content); $i++) {
      echo '<p>' . $content[$i] . '</p>';
    }
  }
  ?>

</body>

</html>