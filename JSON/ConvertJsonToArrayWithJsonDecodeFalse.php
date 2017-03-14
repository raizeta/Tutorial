<?php

namespace TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class JsonToArrayController extends Controller
{
    public function jsontoarrayAction()
    {
    	$jsonfile = '{
    					"Data":
    						[
    							{
    								"nama":"Radumta Sitepu",
    								"alamat":
    									{
											"propinsi":"Sumut",
	    									"kabupaten":"Samosir"    	
    									}
    							},

    							{
    								"nama":"Lalala",
    								"alamat":
    									{
											"propinsi":"Medan",
	    									"kabupaten":"Samosir"    	
    									}
    							}
							]
					}';

    	$data = json_decode($jsonfile);
        $data = $data->Data;
    	foreach($data as $key => $value)
    	{
    		print_r($value->nama . "</br>");
            print_r($value->alamat->propinsi . "</br>");
    		#Sumut Medan
    	}


    	
    }
}
