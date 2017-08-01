<?php
Deserialize = > Menjadikan format JSON/XML Menjadi Object (Proses Ini Langsung Tanpa Mengubah Ke Bentuk Array)

Serialize = > Menjadikan format Object Menjadi JSON/XML   (Proses Ini Langsung Tanpa Mengubah Ke Bentuk Array)

Sebelum Object Dijadikan Menjadi Format JSON/XML Harus Terlebih Dahulu
Dikonversi Menjadi Array Proses Ini Dinamakan Normalize, 
Setalah Object Menjadi Array Baru Bisa Dijadikan Menjadi Format JSON/XML,
Proses Mengubah Array Ke Dalam Bentuk JSON/XML Dinamakan Encode


Sebaliknya Proses Mengubah JSON/XML Menjadi Array Dinamakan Dengan Decode,
dan Proses Menjadikan Array Menjadi Object Dinamakan Dengan Denormalize

Untuk Melakukan Deserialize, ada tiga hal yang harus diperhatikan yaitu:
1. Informasi Yang Akan Di Decoded
2. Nama Model Class Yang Akan Di Decoded
3. Encode Yang Akan Digunakan Untuk Mengkonversi Informasi Ke Dalam Bentuk Array (apakah json atau xml)


Untuk bisa menggunakan Normalize tambahkan kode di bawah ini ke dalam service.yml 
services:
    get_set_method_normalizer:
        class: Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer
        tags:
            - { name: serializer.normalizer }

#Contoh Ini Mengunakan JMS Serializer Bundle
public function listproductAction()
{
    $em = $this->getDoctrine()->getManager();
    
    #Ini mengambil data dari database dan menjadikannya Object
    $entities = $em->getRepository('EntityBundle:Product')->findProductAll();

    #Kode Dibawah Ini Dinamakan Normalize(Dari Object Menjadi Array)
    // foreach($entities as $productList)
    // {
    //     $data[] = array(
    //         'id' => $productList['p_id'],
    //         'namaproduct' => $productList['p_nama'],
    //         'slug' => $productList['p_slug'],
    //         'defaultPrice' => $productList['p_defaultPrice'],
    //         'createAt' => $productList['p_createAt'],
    //         'updateAt' => $productList['p_updateAt'],
    //         'productBrand' => $productList['b_brandName'],
    //         'productCategory' => $productList['c_categoryName'],
    //     );
    // }

    //Using Symfony Serialize Object To Json
    // $jsonProducts = $this->get('serializer')->serialize($entities, 'json');
    // $response = new Response($jsonProducts);
    // $response->setStatusCode(Response::HTTP_OK);
    // return $response;

    #Kode dibawah Ini Dinamakan Dengan Encode (Menjadikan Array Menjadi JSON)
    $jsonProducts = $this->get('serializer')->serialize($entities, 'json');
    return new JsonResponse(array('productlist'=>$jsonProducts));
}

#Manual Using Symfony Serializer
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;

$encoders = array(new XmlEncoder(), new JsonEncoder());
$normalizers = array(new GetSetMethodNormalizer());
$serializer = new Serializer($normalizers, $encoders);