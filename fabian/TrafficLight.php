<?php

class TrafficLight
{
    private $lights;
    private $code;
    private $active;

    public function __construct($code)
    {






    }



    public function switchOn($color)
    {





    }



    public function switchOff($color)
    {






    }




    public function deactivateTrafficLight()
    {





    }



    public function activateTrafficLight()
    {





    }



    public function getCode()
    {





    }

    public function showLightStatus()
    {
        echo 'Status van Stoplicht ' . $this->code . ":\n";

        if ($this->active === true) {
            foreach ($this->lights as $color => $status) {
                echo $color . ' --> ' . $status . "\n";
            }
        } else {
            echo 'Stoplicht inactief: oranje knippert' . "\n";
        }





    }




    private function isValidColor($color)
    {
        $validColors = ['red', 'orange', 'green'];
        if (in_array($color, $validColors)) {
            return true;
        } else {
            return false;
        }






    }



    private function switchAllLightsOff()
    {







    }

}

