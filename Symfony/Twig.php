<?php

composer require twig/extensions

services:
    twig.extension.text:
            class: Twig_Extensions_Extension_Text
            tags:
                - { name: twig.extension }
                
#truncate->for create summary
{{ "Hello World!" | truncate(7, true) }}

#Format Number
{{entities.price|number_format}} #10000 -> 10,000

#cara mengalikan dua entity
{% set total=(entities.p_harga)*(entities.c_jumlah) %} {{total|number_format}}