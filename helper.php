<?php
function printSection($sectArr)
{
  foreach ($sectArr as $article) {
    echo '<article>' .
      '<h2>' . $article['title'] . '</h2>';
    $content = $article['content'];
    foreach ($content as $paragraph) {
      echo '<p>' . $paragraph . '</p>';
    }
    echo '</article>';
  }
}
