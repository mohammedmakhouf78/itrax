<?php

use ExportNS\FileType\Typeinterface;

class Pdf implements Typeinterface
{
    public function run()
    {
        echo "Pdf";
    }
}