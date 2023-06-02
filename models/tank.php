<?php

    class Tank extends WarMachine 
    {
        function Special()
        {
            echo("Tank a shot from the guns<br />");
        }


        public function MoveForward() 
        {
            echo("Tank move forward<br />");
        }

        public function MoveBack() 
        {
            echo("Tank move back<br />");
        }
    }