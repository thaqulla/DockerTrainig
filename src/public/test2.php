<?php declare(strict_types=1) ?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
  </head>
  <body>
    <p>
      <?php 
      $global_name = '侍華子';
      function show_user_name() {
        // ローカル変数を定義する
        $user_name = '侍太郎';
        // ローカルスコープの範囲内でローカル変数を使う
        echo $user_name . '<br>';
        // グローバルスコープの範囲外でグローバル変数を使う（エラーが発生する）
        echo $global_name . '<br>';
      }

      show_user_name();

      // ローカルスコープの範囲外でローカル変数を使う（エラーが発生する）
      echo $user_name;
      ?>
    </p>
  </body>
</html>