<?php

    // Абстрактный класс для легковых автомобилей
    abstract class MotorVehicle extends BaseMachine
    {

        function Special()
        {
            echo("MotorVehicle successful road trip<br />");
        }


        public function MoveForward() 
        {
            echo("MotorVehicle move forward<br />");
        }

        public function MoveBack() 
        {
            echo("MotorVehicle move back<br />");
        }
    }