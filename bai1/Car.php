<?php
//Tạo lớp Car
abstract class Car
{
    protected $name;
    protected $color;
    abstract function sound();
    public function run()
    {
        echo "<br>Ô tô đang chạy";
    }
}
//Tạo lớp Toyota kế thừa từ Car
class Toyota extends Car
{
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function sound()
    {
        echo "<br>$this->name có tiếng kêu Bruumm Bruumm!";
    }
}
//tạo đối tương của lớp Toyota
$camry = new Toyota('Camry 2.0', 'Black');
$camry->sound();
