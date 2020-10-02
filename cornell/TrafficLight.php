<?php

class TrafficLight
{


    public function __construct($code)
    {

        private $lights;
        private $code;
        private $active;

        



    }



    public function switchOn($color)
    {

        $this->active = true;
        $this->switchOn('red');



    }



    public function switchOff($color)
    {



        $this->active = false;
        $this->switchAllLightsOff();


    }




    public function deactivateTrafficLight()
    {

        $this->code = $code;
        $this->active = true;
        $this->lights = [
            'red' => 1,
            'orange' => 0,
            'green' => 0,
        ];



    }



    public function activateTrafficLight()
    {
$validColors = ['red', 'orange', 'green'];
if (!$this->isValidColor($color)) {
	echo 'Ik heb geen licht met de kleur: ' . $color . "\n";
	return;
}
$this->switchAllLightsOff();
$this->lights[$color] = 1;




    }



    public function getCode()
    {
        return $this->code;




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

        $this->active = false;
        $this->switchAllLightsOff();





    }

}

