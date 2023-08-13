<?php
/*
 * Generates a characters to display as a link
 * date: 13 May 2023
 * Author: Blessing G. Sithole
 * 
 * @params len
 * return chars
 */
class Randomizer{
    //properties
    private $len;
    //methods
    public function __construct($len)
    {
        $this->len = $len;
    }
    private function generator(){
    
        $rand_chars  = "";
        for($i =0; $i < $this->len; $i++){
            $rand_chars .= $this->chars()[(rand(0,$this->leng()-1))];
        }
        
        return $rand_chars;
    }
    
    public function getChars(){
        /*
         * returns characters generated at random
         */
        return $this->generator();
    }
    
    private function chars()
    {
        /*
         * returns the characters or a string with different characters
         */
        return "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz@#!";
    }
    
    private function leng()
    {
        /*
         * return size or length of character string
         */
        return strlen($this->chars());
    }
}

//instantiate 
$len = 10;
$rand_link = new Randomizer($len);

echo $rand_link->getChars();
