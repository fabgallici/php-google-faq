<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
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
  <div class="container">
    <?php printSection($faqs); ?>
  </div>


</body>

</html>