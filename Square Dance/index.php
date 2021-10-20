<?php
include_once "Dancer.php";

$male = new SplQueue();
$female = new SplQueue();

$male->enqueue(new Dancer('Sơn', 'male'));
$male->enqueue(new Dancer('Nghĩa', 'male'));
$male->enqueue(new Dancer('Phong', 'male'));
$male->enqueue(new Dancer('Trung', 'male'));
$male->enqueue(new Dancer('Vũ', 'male'));
$male->enqueue(new Dancer('Nam', 'male'));

$female->enqueue(new Dancer('Xuân', 'female'));
$female->enqueue(new Dancer('Hạ', 'female'));
$female->enqueue(new Dancer('Thu', 'female'));
$female->enqueue(new Dancer('Đông', 'female'));

$fr = [];
$male_wait = [];
$female_wait = [];
while (!$male->isEmpty() || !$female->isEmpty()) {
    if (!$male->isEmpty() && !$female->isEmpty()) {
        $fr[] = $male->dequeue()->name." + ".$female->dequeue()->name;
    } else if (!$male->isEmpty() && $female->isEmpty()) {
        $male_wait[] = $male->dequeue()->name;
    }else if ($male->isEmpty() && !$female->isEmpty()) {
        $female_wait[] = $female->dequeue()->name;
    }
}

echo "<pre?";
echo "Bạn Nhảy: <br>";
print_r($fr);
echo "<br>";
echo "Hàng đợi Nam: <br>";
print_r($male_wait);
echo "<br>";
echo "Hàng đợi Nữ: <br>";
print_r($female_wait);
