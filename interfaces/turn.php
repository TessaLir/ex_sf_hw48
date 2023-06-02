<?php

    // Интерфейс для поворота в лево и в право.
    interface Turn
    {
        // Движение вперед
        function TurnRight();

        // Движение назад
        function TurnLeft();
    }