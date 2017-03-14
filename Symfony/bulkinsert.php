<?php
$batchSize = 20;
for ($i = 1; $i <= 10000; ++$i) 
{
	$user = new CmsUser;
	$user->setStatus('user');
	$user->setUsername('user' . $i);
	$user->setName('Mr.Smith-' . $i);
	$em->persist($user);
	if (($i % $batchSize) == 0) 
	{
		$em->flush();
		$em->clear(); // Detaches all objects from Doctrine!
	}
}