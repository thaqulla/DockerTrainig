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
      
      // 改行する
      echo '<br>';
      $user_names[1] = '侍花子'; // 2番目の要素を更新する
      $user_names[] = '侍五郎'; // 末尾に要素を追加する
      echo '<br>';
      print_r($user_names);
      echo '<br>';
      for ($i = 1; $i <= 10; $i++) {
        echo $i . '<br>'; // 1～10までの整数を順番に出力する
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
      class Product { // クラスを定義する
        public $name; // プロパティを定義する
        public function set_name(string $name) {
          $this->name = $name;
        }
        public function show_name() {
          echo $this->name . '<br>';
        }
      }

      $coffee = new Product();
      $coffee->set_name('COFFEE');
      $coffee->show_name();
      
      $shampoo = new Product(); // インスタンス化する
      $shampoo->name = 'シャンプー'; // プロパティにアクセスし、値を代入する
      echo $shampoo->name . '<br>'; // プロパティにアクセスし、値を出力する
      class User { // クラスを定義する
        private $name; // プロパティを定義する 
        private $age;
        private $gender;
        
        public function __construct(string $name, int $age, string $gender) { // コンストラクタを定義する
          $this->name = $name;
          $this->age = $age;
          $this->gender = $gender;
        }
      }
      
      $user = new User('侍太郎', 36, '男性'); // インスタンス化する

      print_r($user); // インスタンス$userの各プロパティの値を出力する

      ?>
    </p>
  </body>
</html>