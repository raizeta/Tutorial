<?php

namespace APIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use JMS\Serializer\SerializationContext;

class CountYesterdayController extends Controller
{

    public function countProductBrandByCategoryAction(Request $request)
    {
	    $em = $this->getDoctrine()->getManager();

    	$charts = $em->getRepository('FusionChartsBundle:FusionBar')->findAll();
    	$normalizers = new GetSetMethodNormalizer();
    	// ##########################################
    	//#Digunakan Untuk Menyembunyikan Property ID
    	// http://symfony.com/doc/current/components/serializer.html
    	$normalizers->setIgnoredAttributes(array('id'));
    	// #########################################
		$chart = $normalizers->normalize($charts);

		$dataset[] = array('seriesname'=>"Laki Laki",'data'=>$lakilaki);
		$dataset[] = array('seriesname'=>"Perempuan",'data'=>$perempuan);

		$categories[]=array('category'=>$namabrands);


        return new JsonResponse(array('chart'=>$chart,'categories'=>$categories,'dataset'=>$dataset));
    }
}