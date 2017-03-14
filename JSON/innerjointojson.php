<?
http://stackoverflow.com/questions/32855367/how-to-do-inner-join-with-multiple-rows-return-json-in-php
foreach($entities as $productList)
{
    $varianto=array();
    foreach ($productList->getVariant() as $variant)
    {
        $varianto[]=array
        (
            'variantprice' => $variant->getHarga(),
            'variantcolor' => $variant->getColor() ->getColor(),
            'variantsize' => $variant->getSize() ->getSize(),
        );     
    }

    $data[] = array
                    (
                        'id'=>$productList ->getId(),
                        'nama'=> $productList->getNama(),
                        'variants'=>$varianto
                    );
}
return new JsonResponse(array('lazy'=>$data));
//result
{"lazy":
    [
        {
            "id":1,
            "nama":"Polo Satu",
            "variants":
            [
                {
                    "variantprice":15000,
                    "variantcolor":"Red",
                    "variantsize":"Small"
                },
                {
                    "variantprice":17000,
                    "variantcolor":"Black",
                    "variantsize":"Small"
                }
            ]
        },
        {
            "id":2,
            "nama":"Product Dua",
            "variants":
            [
                {
                    "variantprice":22000,
                    "variantcolor":"Red",
                    "variantsize":"Medium"
                }
            ]
        }
    ]
}