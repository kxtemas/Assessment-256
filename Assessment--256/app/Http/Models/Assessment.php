<?php
namespace App\Http\Models;

/**
 * @author munoz
 *
 */
class Assessment
{ // variables
    private $firstname;
    private $lastname;
    private $color;
    private $month;
    
    public function __construct($firstname, $lastname, $color, $month) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->color= $color;
        $this->month = $month;
        
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @param mixed $month
     */
    public function setMonth($month)
    {
        $this->month = $month;
    }

   
}


