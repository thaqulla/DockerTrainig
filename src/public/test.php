<?php declare(strict_types=1) ?>
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
      $user_ages = [36, 33, 29, 25, 22];
      // 配列に値を代入する
      $user_names = ['侍太郎', '侍一郎', '侍二郎', '侍三郎', '侍四郎'];
      // 配列の値を出力する
      print_r($user_names);
      // 改行する
      echo '<br>';

      // 2番目の要素を更新する
      $user_names[1] = '侍花子';

      // 末尾に要素を追加する
      $user_names[] = '侍五郎';

      // 配列の値を出力する
      print_r($user_names);

      echo '<br>';
      // 1～10までの整数を順番に出力するじ
      for ($i = 1; $i <= 10; $i++) {
        echo $i . '<br>';
      }

      function setString(string $str): void {
        echo $str . '<br>';
      }
      function setInt(int $x): void {
        echo $x . '<br>';
      }
      $value = '0101';
      setString($value);
      // setInt($value);
      function show_user_name() {
        // ローカル変数を定義する
        $user_name = '侍太郎';

        // ローカルスコープの範囲内でローカル変数を使う
        echo $user_name . '<br>';
      }

      show_user_name();

      // ローカルスコープの範囲外でローカル変数を使う（エラーが発生する）
      echo $user_name;
      // クラスを定義する
      class Product {
        // プロパティを定義する
        public $name;
        }

        // インスタンス化する
        $shampoo = new Product();

        // プロパティにアクセスし、値を代入する
        $shampoo->name = 'シャンプー';

        // プロパティにアクセスし、値を出力する
        echo $shampoo->name;
      ?>
    </p>
  </body>
</html>