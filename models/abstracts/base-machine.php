<?php

    // Базовый абстрактный файл для мехеники
    abstract class BaseMachine implements Drive
    {

        // Метод для специальной способности
        function Special()
        {
            echo("BaseMachine use Special!!!<br />");
        }

        // Метод из интерфейса, для движения авто
        public function MoveForward() 
        {
            echo("BaseMachine move forward<br />");
        }

        // Метод из интерфейса, для движения авто
        public function MoveBack() 
        {
            echo("BaseMachine move back<br />");
        }

    }