<?php

    // Интерфейс способность выпустить струю пламени
    interface JetOfFire
    {
        // Функция позволяющая выпустить большое количество пламени
        function ReleaseLongStreamOfFire();

        // Функция позволяющая выпустить небольшое количество пламени
        function ReleaseShortStreamOfFire();
    }