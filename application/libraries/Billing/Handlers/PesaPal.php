<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @package     Codeignitor starter
 * @author      John Kiragu
 * @copyright   Copyright (c) 2017 - 2021, John Kiragu. (http://mutuakiragu.wordpress.com)
 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause
 */


 class PesaPal{

   /**
    ** Main CI application loaded
    ** @object
    **/
    public $CI;

    /**
     ** Application constructor
     **/
    function __construct(){
       $this->CI = &get_instance();
    }

 }