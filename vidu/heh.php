
<!DOCTYPE html>
<html>
    <body>
        <?php
/*        $nhap = "t2";

        //$t1=$t3=$t5=$t7=$t8=$t10=$t12= 31;
        //$t4=$t6=$t9=$T11=30;
        //$t2 =28;

        switch($nhap){
                case "t1":
                case "t3":
                case "t5":
                case "t7":
                case "t8":
                case "t10":
                case "t12":
                    echo "Tháng có 31 ngày";
                    break;
                
                case "t4":
                case "t6":
                case "t9":
                case "t11":
                    echo "thang co 30 ngay";
                break;
            case("t2"):
                echo "thang co 28 ngay";
                break;
        }



        
        $sv = array("SV1","SV2","SV3","SV4","SV5","SV6","SV7","SV8","SV9","SV10");

        foreach($sv as $x){
            echo "$x <br>";
        }
*/

        $employee = array(
            "Name " => "Alex",
            "Email" => "alex_jty@gmail.com",
            "Age" => 21,
            "Gender" => "Male"
        );


        foreach ($employee as $key => $element){
            echo $key . ":" . $element;
            echo "<br>";
        }







        ?>
    </body>
</html>