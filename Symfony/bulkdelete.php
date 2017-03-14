<?php
public function deleteproductAction()
    {
		$em = $this->getDoctrine()->getManager();
		$entity = $em->getRepository('EntityBundle:Product')->findAll();
		$batchSize = 20;
		$i= 0;
		foreach ($entity as $entity)
		{
			$em->remove($entity);
			if(($i % $batchSize) == 0)
			{
				$em->flush();
			}
			$i++;
			
		}
	  	$em->flush();
	  	$em->clear();

    }