<?php
interface Car2
{
    public function run();
    public function sound();
}
class Vinfast implements Car2
{
    public function run()
    {
        echo "Xe vinfast chạy rất nhanh<br>";
    }
    public function sound()
    {
        echo "Xe Vinfast kêu Bùm Bùm<br>";
    }
}
