<?php

    include "init.php";

    class MachineController
    {
        public function MoveFrwardAndSpecial(BaseMachine $machine)
        {
            $machine->MoveForward();
            $machine->Special();
            echo("<hr />");
        }
    }

    $controller = new MachineController();

    $car = new Car();
    $plane = new Plane();
    $tank = new Tank();

    $controller->MoveFrwardAndSpecial($car);
    $controller->MoveFrwardAndSpecial($plane);
    $controller->MoveFrwardAndSpecial($tank);
