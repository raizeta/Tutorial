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
    								"nama":"Radumta Sitepu",
    								"alamat":
    									{
											"propinsi":"Medan",
	    									"kabupaten":"Samosir"    	
    									}
    							}
							]
					}';

    	$data = json_decode($jsonfile, true);
    	foreach($data["Data"] as $data)
    	{
    		print_r($data["alamat"]["propinsi"] . "</br>");
    		#Sumut Medan
    	}


    	
    }
}
