<?php

class OldExport
{
    public $file;
    public $type;

    public function __construct($file,$type)
    {
        $this->file = $file;
        $this->type = $type;
    }

    public function generate()
    {
        if($this->type == "pdf")
        {
            $this->pdf();
        }
        else if($this->type == "word")
        {
            $this->word();
        }
        else if($this->type == "excel")
        {
            $this->excel();
        }
    }

    public function pdf()
    {
        echo "pdf";
    }   

    public function word()
    {
        echo "pdf";
    }

    public function excel()
    {
        echo "pdf";
    }
}