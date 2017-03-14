<?php

namespace TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Finder\Finder;

class ReadJsonFromFileController extends Controller
{
    public function readjsonAction()
    {
    	// $finder = new Finder();
    	// $finder->files()->in('ecommerce/src/TestBundle/JSON');
    	$filename = 'propinsi.json';
		$path = $this->get('kernel')->getRootDir(). "/../src/TestBundle/JSON/";
        $content = file_get_contents($path.$filename);
        
    	$data = json_decode($content);
        $data = $data->Data;
    	foreach($data as $key => $value)
    	{
    		print_r($value->nama . "</br>");
            print_r($value->alamat->propinsi . "</br>");
    		#Sumut Medan
    	} 	
    }
}
