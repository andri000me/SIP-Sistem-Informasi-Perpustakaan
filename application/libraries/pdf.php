<?php 

require_once dirname(__FILE__).'/fpdf/fpdf.php';

class Pdf extends FPDF
{
    function __construct() {
        parent::__construct();
    }
}


?>