<?php
class Cls
{

    public $name;
    public $email;
    public $z;

    public function getData($md)
    {
       return 'Vy vveli' .' ' . $this->name. ' ' . $this->email .' '. $md; 
    }

    public function getDamage($dam)
    {
        $this->z = $this->z-$dam;
    }

}


class FormFor extends Cls{

     public function forMethod($count)
     {
	for ($i=1; $i<=$count; $i++)
        {
          echo $this->getData($i);
        }
     }

 
}


class FormWhile extends Cls{


}

$form = new FormFor();
$form->forMethod(4); 


