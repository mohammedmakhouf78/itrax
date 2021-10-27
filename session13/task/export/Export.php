<?php

namespace ExportNS;

class Export extends AbstractExport
{
    private $file;
    private $type;

    public function __construct($file,$type)
    {
        $this->file = $file;
        $this->type = $type;
    }

    public function generate()
    {
        $this->type->run();
    }
}