<!DOCTYPE html>
<html>
    <body>
        <?php 
/*      $color = "red";
        $COLOR = "green";
        $coLOR = "blue";
        echo "My first PHP script!<br>";
        echo"Hello World!<br>";
        ECHO "Hello World!<br>";
        EcHo "Hello World!<br>";
        echo "My car is ". $color ."<br>";
        echo "My house is ". $COLOR ."<br>";
        echo "My boat is ". $coLOR ."<br>";
        

        $txt = "Hanoi";
        echo "I love $txt!<br>";
        
        $txt = "Hanoi";
        echo "I love ". $txt ."!<br>";

        $x = 5;
        $y = 4;
        echo $x + $y ."<br>";   


        var_dump(5);
        var_dump("john");
        var_dump(3.14);
        var_dump(true);
        var_dump([2,3,56]);
        var_dump(NULL);


        $x=$y=$z="<br>Fruit";
        echo $x;
        echo $y;
        echo $z;



        $a = 5;
        function myTest() {
            echo "<p>Variable x inside function is: $a<p>";
        }
        myTest();
            echo "<p>Variable x outside function is: $a<p>";
        


        $x = 5;
        $y = 10;
        function myTest1(){
            global $x, $y;
            $y = $x + $y;
        }
        myTest1();
        echo $y


        function myTest(){
            static $x = 0;
            echo $x;
            $x++;
        }
        myTest();
        echo "<br>";
        myTest();
        echo "<br>";
        myTest();



        echo "<h2> PHP is fun!</h2>";
        echo "Hello World!<br>";
        echo "I'm abuot to learn PHP!<br>";
        echo "This","string","was","made","with multiple parameters.";
       

       
        $x = "Hello World!";
        $y = 'I love Halong bay!';
        var_dump($x);
        echo "<br>";
        var_dump($y);
      

        $x = "Hello World!";
        $x = NULL;
        var_dump($x);
 


        echo strlen("Hello World!");
        echo str_word_count("hello word!");
        echo strpos("Hello world!","world");
        echo strrev("Hello world!");
        echo strtoupper(str_replace("Nguyễn Minh An","Nguyễn Thanh An","Nguyễn Minh An"));
        $seach = "Minh";
        $replace = "Thanh";
        $subject = "Nguyễn Minh An";
        echo strtoupper(str_replace($seach,$replace,$subject));



       $x = "Hello World!";
        $y = explode(" ", $x);
        print_r($y);
 
        $Ten = "Nguyễn,An,Ninh";
        $y = explode(",",$Ten);
        print_r($y);
        echo "<br>".$y[0];
        echo "<br>".$y[1];
        echo "<br>".$y[2];
 



        $ten = "Nguyễn Thanh An";
        $lop = "KHMT4";
        echo "Xin Chào '$ten' học lớp \"$lop\"";
        echo "Xin Chào", "\"",$ten,"học lớp";


       $x = 5985;
       var_dump(is_int($x));
       echo "<br>";
        $x = 59.85;
        var_dump(is_int($x)); 

        $x = 1.9e411;
        var_dump($x);

        $x = acos(8);
        var_dump($x);

        define("TênTrường","Xin Chào Đại học Hạ long");
        echo TênTrường;

        $txt1 = "Nguyễn Anh";
        $txt2 = " Minh";

        echo $txt1.$txt2 ;

        $t = date("H");
        echo"<p>The hour (of the server) is " . $t;
        echo ", and will give the following mesage:</p>";
        if ($t<"10"){
            echo"Have a good morning";
        }elseif($t<"20"){
            echo"Have a good day!";
        }else{
            echo "Have a good night!";
        }
*/
       $hoten = "Nguyen Mai Van";
       $gioitinh = "nu";
       $tuoi = 64;  
        
       if($tuoi <"18"){
        echo "chao em $hoten";
       }
       elseif($tuoi <40){
            if($gioitinh=="nam"){
                echo "chao anh ".$hoten;
            }else{
                echo "chao chi ".$hoten;
            }
       }elseif($tuoi <60){
        echo "chao bac ".$hoten;
       }else{
            if($gioitinh=="nam"){
                echo "chao ong ".$hoten;
            }else{
                echo "chao ba ".$hoten;
            }
       }




       ?>
    </body>
</html>