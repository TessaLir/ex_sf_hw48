<?php

    // Интерфейс способность выпустить струю воды
    interface JetOfWater
    {
        // Функция позволяющая выпустить большое количество воды
        function ReleaseLongStreamOfWater();

        // Функция позволяющая выпустить небольшое количество воды
        function ReleaseShortStreamOfWater();
    }