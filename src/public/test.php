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

      const SHIPPING_FEE = 500;
      class Product { // クラスを定義する
        public const TAX = 1.1;
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
      echo Product::TAX . '<br>';

      $shampoo = new Product(); // インスタンス化する
      $shampoo->name = 'シャンプー'; // プロパティにアクセスし、値を代入する
      echo $shampoo->name . '<br>'; // プロパティにアクセスし、値を出力する
      echo Product::TAX . '<br>';

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
      echo '<br>';

      const SEVEN_REGIONS = [
        '北海道地方',
        '東北地方',
        '関東地方',
        '中部地方',
        '近畿地方',
        '中国・四国地方',
        '九州地方'
      ];

      print_r(SEVEN_REGIONS); // 定数（配列）の中身を出力する
      echo '<br>';

      date_default_timezone_set('Asia/Tokyo'); // 使用するデフォルトのタイムゾーンを指定する

      echo date('Y年n月j日H時i分s秒') . '<br>'; // 現在の日時を指定したフォーマットで出力する

      echo strtotime('+1 week') . '<br>'; // 現在を基準として1週間後の日時のUNIXタイムスタンプを出力する

      echo date('Y/m/d H:i:s', strtotime('-3 year')) . '<br>'; // 現在を基準として3年前の日時を指定したフォーマットで出力する

      $date_time = new DateTime('2015-03-10 12:15:29');

      echo $date_time->format('Y年n月j日H時i分s秒') . '<br>';

      $big_dice = mt_rand(100000,999999); //乱数生成

      echo $big_dice . '<br>';

      $omikuji = ['大吉','小吉','凶'];
      $key = array_rand($omikuji,1);
      $result = $omikuji[$key];

      echo $result . '<br>';

      ?>
    </p>
  </body>
</html>