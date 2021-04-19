<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab9-1</title>
    </head>
    <body>
        <?php

        class Donation {

            private $name;
            private $amount;
            public static $totalDonated = 0;
            public static $numberOfDonors = 0;
            private $data = array();

            public function Donation($n, $a) {
                $this->name = $n;
                $this->amount = $a;
            }

            public function __set($name, $amount) {
                echo "Setting '$name' to '$amount'\n";
                $this->data[$name] = $amount;
            }
            public static function Sum( $a)
            {
                self::$totalDonated += $a;
                self::$numberOfDonors++;
            }
            public static function Show( )
            {
                echo "Total Donations = ".self::$totalDonated;
                echo "<br>Number of Donors = ".self::$numberOfDonors++;
            }
            
            public function &__get($name) {
                return $this->data[$name];
            }

            public  function info() {
                echo "$this->name Donatetd: $this->amount ( ".round(($this->amount/self::$totalDonated*100),2);
                echo ")<br>";
            }

        }

        $donors = array("1" => array("Nicola", 85.00),
            "vtori" => array("Mitko ", 50.00),
            "treti" => array("Emily ", 90.00),
            "chetvuri" => array("Iliana ", 65.00));

        foreach ($donors as $key => $value) {
            Donation::Sum( $donors[$key][1]);
        }
        foreach ($donors as $key => $value) {
            $donor = new Donation($donors[$key][0], $donors[$key][1]);
            $donor->info();
        }
        Donation::Show();
        
        ?>
    </body>
</html>
