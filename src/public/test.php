<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
  </head>
  <body>
    <p>この文章はHTMLで出力しています。</p>
    <p>
      <?php
      $name = 'samurai';
      $user_names = ['侍太郎', '侍一郎', '侍二郎', '侍三郎', '侍四郎'];
      $user_ages = [36, 33, 29, 25, 22];

      echo 'この文章はPHPで出力しています。';
      echo '<br>';
      echo '私の名前は'. $name . 'です';
      ?>
    </p>
  </body>
</html>