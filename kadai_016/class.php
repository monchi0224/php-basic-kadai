<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
      <?php
        class Food {
            // プロパティの定義（例：public $name;）
            private $name;
            private $price;
        
            // コンストラクタの定義
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
            // メソッドを定義する
            public function show_price() {
                echo $this->price. '<br>';
                // $this->name = $name;
                // $this->price = $price;
                // 中身やっていることはコンストラクタとかわらないため
            }
        }
        $potato = new Food('potato',250);
        
        class Animal {
            private $name;
            private $height;
            private $weight;
        
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
            public function show_height() {
                echo $this->height;
            }
        }
        
        $dog = new Animal('dog', 60, 5000);
        
        print_r($potato);
        echo '<br>';
        print_r($dog);
        echo '<br>';
        
        $potato->show_price();
        $dog->show_height();

      ?>
     </p>
 </body>
 </html>