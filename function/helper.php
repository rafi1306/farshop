<?php

    define("BASE_URL", "http://localhost/farshop/");

    function rupiah($nilai = 0) {
        $string = "Rp".number_format($nilai);
        return $string;
    }
