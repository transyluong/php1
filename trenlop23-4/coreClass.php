
        <?php
            class product{
                public $id;
                public $name;
                public $company;
                public $color;
                public $amount;
                public $price;

                public function __construct($id,$name,$company,$color,$amount,$price)
                {
                    $this->id = $id;
                    $this->name = $name;
                    $this->company = $company;
                    $this->color = $color;
                    $this->amount = $amount;
                    $this->price = $price;
                }
                //GET-------------------------------
                function set_id($n){
                    $this->id = $n;
                }
                function set_name($n){
                    $this->name = $n;
                }
                function set_company($n){
                    $this->company = $n;
                }
                function set_color($n){
                    $this->color = $n;
                }
                function set_amount($n){
                    $this->amount = $n;
                }
                function set_price($n){
                    $this->price = $n;
                }

                //SET-----------------------------
                function get_id(){
                    return $this->id ;
                }
                function get_name(){
                    return $this->name ;
                }
                function get_company(){
                    return $this->company ;
                }
                function get_color(){
                    return $this->color ;
                }
                function get_amount(){
                    return $this->amount ;
                }
                function get_price(){
                    return $this->price;
                }
                

                public function subtotal(){
                    return intval($this->price) * intval($this->amount);
                }
                public function toString(){
                   return $this->id."-".$this->name . "-" . $this->company . "-" . $this->color . "-" . $this->amount . "-" . $this->price . "-" . $this->subtotal();
                }

            }
                
           
        ?>
