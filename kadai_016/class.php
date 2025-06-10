<?php
class FoodObject {
    private $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }
}

// 食品オブジェクトの作成
$food = new FoodObject("potato", 250);

class AnimalObject {
    private $name;
    private $height;
    private $weight;

    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }
}

// 動物オブジェクトの作成
$animal = new AnimalObject("dog", 60, 5000);

// オブジェクトを出力
print_r($food);
echo "\n";
print_r($animal);

?>