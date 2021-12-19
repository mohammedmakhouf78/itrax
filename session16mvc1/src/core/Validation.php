<?php
namespace moham\mvc\core;

class Validation
{
    private $patterns = [
        'uri'           => '[A-Za-z0-9-\/_?&=]+',
        'url'           => '[A-Za-z0-9-:.\/_?&=#]+',
        'alpha'         => '[\p{L}]+',
        'words'         => '[\p{L}\s]+',
        'alphanum'      => '[\p{L}0-9]+',
        'int'           => '[0-9]+',
        'float'         => '[0-9\.,]+',
        'tel'           => '[0-9+\s()-]+',
        'text'          => '[\p{L}0-9\s-.,;:!"%&()?+\'°#\/@]+',
        'file'          => '[\p{L}\s0-9-_!%&()=\[\]#@,.;+]+\.[A-Za-z0-9]{2,4}',
        'folder'        => '[\p{L}\s0-9-_!%&()=\[\]#@,.;+]+',
        'address'       => '[\p{L}0-9\s.,()°-]+',
        'date_dmy'      => '[0-9]{1,2}\-[0-9]{1,2}\-[0-9]{4}',
        'date_ymd'      => '[0-9]{4}\-[0-9]{1,2}\-[0-9]{1,2}',
        'email'         => '[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})'
    ];

    private $errors = [];
    private $input;
    private $value;

    public function input($input)
    {
       if(!isset($_REQUEST[$input])){
           $this->errors[] = "input $input not exsist";
        }else{
            $this->input = $input;
            $this->value();
        }

        return $this;
    }

    public function value()
    {
        $this->value = $_REQUEST[$this->input];
        return $this;
    }

    public function max($max)
    {
        if(strlen($this->value) > $max){
            $this->errors[] = "input : {$this->input} max should be {$max}"; 
        }
        return $this;
    }

    public function min($min)
    {
        if(strlen($this->value) < $min){
            $this->errors[] = "input : {$this->input} min should be {$min}"; 
        }
        return $this;
    }

    public function email()
    {
        $regex = '/^('.$this->patterns['email'].')$/u';
        if(!preg_match($regex,$this->value)){
            $this->errors[] = "input : {$this->input} must be Email";        
        }
        return $this;
    }

    public function int()
    {
        $regex = '/^('.$this->patterns['int'].')$/u';
        if(!preg_match($regex,$this->value)){
            $this->errors[] = "input : {$this->input} must be integer";        
        }
        return $this;
    }

    public function required()
    {
        if(
            !(
                strlen($this->value) > 0
                && !empty($this->value)
                && $this->value != ""
            )
        ){
            $this->errors[] = "input : {$this->input} must be required";
        }
        return $this;
    }

    public function float()
    {
        $regex = '/^('.$this->patterns['float'].')$/u';
        if(!preg_match($regex,$this->value)){
            $this->errors[] = "input : {$this->input} must be float";        
        }
        return $this;
    }

    public function string()
    {
        $regex = '/^('.$this->patterns['words'].')$/u';
        if(!preg_match($regex,$this->value)){
            $this->errors[] = "input : {$this->input} must be words";        
        }
        return $this;
    }

    public function showError()
    {
        echo "<ul>";
        foreach ($this->errors as $error) {
            echo "<li style='color:red'> $error </li>"; 
        }
        echo "</ul>";
    }

    public function success()
    {
        return (empty($this->errors)) ? true : false;
    }
}