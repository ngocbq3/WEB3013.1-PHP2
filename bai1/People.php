<?php
//Khởi tạo lớp people
class People
{
    private $name;
    protected $age;
    public $weight;
    const MAX_AGE = 200;
    public function __construct($name, $age, $weight)
    {
        $this->name = $name;
        $this->age = $age;
        $this->weight = $weight;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    function run()
    {
        echo "<p>$this->name đang chạy để tăng sức khoe</p>";
    }

    public function __destruct()
    {
        echo "$this->name Kêt thúc";
    }
}


//Khởi tạo đối tượng
$minh = new People("Minh", 20, 50);

$minh->run();
//Tạo thêm đối tượng 
$thang = new People('Thắng', 21, 70);
$thang->run();
//Truy cập vào hằng
echo "Max_age: " . People::MAX_AGE;
