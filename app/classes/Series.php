<?php


namespace App\classes;


class Series
{
    protected $i;
    protected $result;
    protected $sum;
    protected $startingNumber;
    protected $endingNumber;


    public function __construct($post = null)
    {
     $this->startingNumber = $_POST['starting_number'];
     $this->endingNumber = $_POST['ending_number'];
    }

    public function getSeries(){
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            $this->result .= $this->i.'+';
            $this->sum += $this->i;
        }

        return rtrim($this->result, '+'). ' = '. $this->sum;
    }

}