<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
class fruit{
    public $name;
    public $color;

    function __construct($name,$color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }

    function set_color($color){
        $this->color = $color;
    }
    function get_color(){
        return $this->color;
    }
}
?>
<?php
//$lemon = new fruit();
$lemon -> set_name('lemon');
//$apple= new fruit();
$apple -> set_name('apple');

echo $lemon->get_name();
echo $apple->get_name();

$apple = new fruit("apple","red");
echo $apple->get_name();
echo ("<br>");
echo $apple->get_color();

?>   
</body>
</html>
