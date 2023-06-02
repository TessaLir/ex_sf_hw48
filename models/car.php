<?php

    class Car extends MotorVehicle 
    {
        // Метод для специальной способности
        function Special()
        {
            echo("Car use Special!!!<br />");
        }

        // Метод из интерфейса, для движения авто
        public function MoveForward() 
        {
            echo("Car move forward<br />");
        }

        // Метод из интерфейса, для движения авто
        public function MoveBack() 
        {
            echo("Car move back<br />");
        }
    }