<?php

    // Интерфейс предоставляющий возможность полета
    interface Flight
    {

        // Функция подняться в воздух
        function MoveUp();

        // Функция спуститься ниже в воздухе
        function MoveDown();
    }