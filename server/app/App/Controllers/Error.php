<?php 
namespace App\Controllers;

use App\Controllers\Controller;

abstract class Error extends Controller
{
    protected $ex;

    public function __construct(\Exception $ex)
    {
        parent::__construct();
        $this->ex = $ex;
    }
}