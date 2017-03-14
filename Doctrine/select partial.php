<?php

public function findProductAll()
{
        $qb = $this->createQueryBuilder('p');
        $qb             ->      select('p.id','p.nama','p.harga','p.quantity','c','b','v','s','cl')
                        ->      innerjoin('p.productCategory','c')
                        ->      innerjoin('p.productBrand','b')
                        ->      innerjoin('p.variant','v')
                        ->      innerjoin('v.size','s')
                        ->      innerjoin('v.color','cl');      
        return $qb->getQuery()->getResult();        
}

public function findProductAll()
{
        $qb = $this->createQueryBuilder('p');
        $qb             ->      select('partial p.{id,nama,harga,quantity}','c','b','v','s','cl')
                        ->      innerjoin('p.productCategory','c')
                        ->      innerjoin('p.productBrand','b')
                        ->      innerjoin('p.variant','v')
                        ->      innerjoin('v.size','s')
                        ->      innerjoin('v.color','cl');      
        return $qb->getQuery()->getResult();        
}