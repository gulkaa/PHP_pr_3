
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
</body>
</html>
<?php

class Animal {
    protected $weight; 
    protected $age; 
    protected $color; 

    public function __construct($weight, $age, $color) {
        $this->weight = $weight;
        $this->age = $age;
        $this->color = $color;
    }

    public function getInfo() {
        return "Вес: {$this->weight} кг, Возраст: {$this->age} лет, Окрас: {$this->color}";
    }
}


class Lion extends Animal {
    private $prideSize; 

    public function __construct($weight, $age, $color, $prideSize) {
        parent::__construct($weight, $age, $color);
        $this->prideSize = $prideSize;
    }

    public function roar() {
        return "Лев рычит! Размер прайда: {$this->prideSize}";
    }

}


class Rabbit extends Animal {
    private $earLength; 

    public function __construct($weight, $age, $color, $earLength) {
        parent::__construct($weight, $age, $color);
        $this->earLength = $earLength;
    }

    public function hop() {
        return "Кролик прыгает! Длина ушей: {$this->earLength} см";
    }

}


class Wolf extends Animal {
    private $howl;

    public function __construct($weight, $age, $color, $howl) {
        parent::__construct($weight, $age, $color);
        $this->howl = $howl;
    }

    public function howl() {
        return "Волк воет: {$this->howl}";
    }


}

$lion = new Lion(170, 7, 'рыжий', 7);
$rabbit = new Rabbit(2, 2, 'белый', 12);
$wolf = new Wolf(35, 4, 'серый', 'Ауф!');
?>
<div class="anim">
<div class="lion aaa">
    <?php
echo "Информация о льве: " . $lion->getInfo() . "\n";
echo $lion->roar() . "\n\n";
?>
<img src="media/lion.webp" alt="">
</div>

<div class="rabbit aaa">
    <?php
echo "Информация о кролике: " . $rabbit->getInfo() . "\n";
echo $rabbit->hop() . "\n\n";
?>
<img src="media/rabbit.webp" alt="">
</div>

<div class="wolf aaa">
    <?php
echo "Информация о волке: " . $wolf->getInfo() . "\n";
echo $wolf->howl() . "\n";
?>
<img src="media/wolf.jpg" alt="">
</div>
</div>
