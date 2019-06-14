<?php

class Pdf {

    function Pdf() {
        $CI = & get_instance();
        log_message('Debug', 'mPDF class is loaded.');
    }

    function load($param = NULL) {
        require_once APPPATH .'third_party/mpdf/mpdf.php';

        if ($param == NULL) {
            $param = "'format'=> 'A4', 0,'',15, 15, 16, 16, 9, 9, 'L'";
        }
        return new mPDF($param);
    }

     function load_a6() {
        require_once APPPATH .'third_party/mpdf/mpdf.php';

        return new mPDF('utf-8', "A6");
    }

     function load_a3() {
        require_once APPPATH .'third_party/mpdf/mpdf.php';

        return new mPDF('utf-8', "A3");
    }

}