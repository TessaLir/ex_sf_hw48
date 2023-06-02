<?php

    class Plane extends Aircraft 
    {
        function Special()
        {
            echo("Plane successful flight in turbulence<br />");
        }

        public function MoveForward() 
        {
            echo("Plane move forward<br />");
        }

        public function MoveBack() 
        {
            echo("Plane move back<br />");
        }

        function MoveUp()
        {
            echo("Plane flight up<br />");
        }

        function MoveDown()
        {
            echo("Plane flight down<br />");
        }

    }