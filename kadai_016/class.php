<?php
class Food {
    private $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function show_price(){   //tuika
        //echo $this->name;     //tuika
        echo $this->price; 
    }
}
// 食品オブジェクトの作成
$food = new Food("potato", 250);

class Animal {
    private $name;
    private $height;
    private $weight;

    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }
    public function show_height(){   //tuika
        //echo $this->name;     //tuika
        echo $this->height; 
    }
}

// 動物オブジェクトの作成
$animal = new Animal("dog", 60, 5000);

// オブジェクトを出力
print_r($food);
echo '<br>';
print_r($animal);
echo '<br>';
$food->show_price();
echo '<br>';
$animal->show_height();
?>