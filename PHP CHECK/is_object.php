<?php
use TestBundle\OOP\Customer;
$customers = new Customer();
$customers->setNama('Radumta');
$customers->setEmail('radumta@gmail.com');

if(is_object($customers))
{
    echo 'Yes.Is Is An Object'; //Result 'Yes.Is An Object'
}
else
{
    echo 'Bukan Object';
}