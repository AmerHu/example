<?php
/**
 * Created by PhpStorm.
 * User: premait
 * Date: 21/11/17
 * Time: 10:57 ص
 */
namespace App\Billing;
class Stripe{
    protected $key;
    public function __construct($key)
    {
        $this->$key=$key;
    }
}