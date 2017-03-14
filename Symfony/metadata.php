<?php
####Get Table Name
$em 			= $this->getDoctrine()->getManager();
$className 		= "EntityBundle\Entity\Product";
Cara Satu
// $metadata 		= $em->getClassMetadata('EntityBundle\Entity\Product')->getTableName();

Cara Dua
// $metadata 		= $em->getClassMetadata('EntityBundle:ProductCategory')->getTableName();
print_r($metadata);
Result : product_category
###########################################################################################
Get Field Name Such(id,nama,createAt)
###########################################################################################
1.Cara Pertama
-----------------
	$em 			= $this->getDoctrine()->getManager();
	$className 		= "EntityBundle\Entity\Product";
	$metadata 		= $em->getClassMetadata($className)->getFieldNames();
	print_r($metadata);

2.Cara Kedua
-----------------
	$em 			= $this->getDoctrine()->getManager();
	$className 		= "EntityBundle\Entity\Product";
    $metadata 		= $em->getClassMetadata($className);
    $nameMetadata 	= $metadata->fieldMappings;
    $metadata 		= array();
    foreach($nameMetadata as $key=>$value)
    {
    	array_push($metadata,$key);
    }
    print_r($metadata);
################################################################################################
