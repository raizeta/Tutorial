<?php
use TestBundle\OOP\Customer;
$customers = new Customer();
$customers->setNama('Radumta');
$customers->setEmail('radumta@gmail.com');

if(is_array($customers))
{
    echo 'Yes.Is An Array'; 
}
else
{
    echo 'Bukan Array'; //Result 'Bukan Array'
}