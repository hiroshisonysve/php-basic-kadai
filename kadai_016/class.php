<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編_16章課題</title>
</head>

<body>
<p>
    <?php
    class Food
    {
        private $name;
        private $price;

        public function show_price()
        {
            echo $this->price . '<br>';
        }

        public function __construct(string $name, int $price)
        {
            $this->name = $name;
            $this->price = $price;
        }
    }
    $food = new Food('potato', 250);
    print_r($food);
    echo '<br';

    class Animal
    {
        private $name;
        private $height;
        private $weight;

        public function show_height()
        {
            echo $this->height . '<br>';
        }
        public function __construct(string $name, int $height, int $weight)
        {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }
    }
    $animal = new Animal('dog', 60, 5000);
    print_r($animal);
    echo '<br>';

    $food->show_price();
    $animal->show_height();
    ?>
</p>
</body>
</html>
