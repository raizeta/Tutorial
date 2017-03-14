<?php
<div class="col-sm-3"  ng-show="contents" ng-repeat="item in products | dynamicFilter:Filters:this">
    <div class="product-image-wrapper">
        <div class="single-products">
                <div class="productinfo text-center">
                	{% set imagename = '{{item.imageName}}' %}
                	#combine with angular item
                    {# <img src="{{asset('ecommerce/images/shop/'~ imagename )}}" /> #}
                	<img src="{{asset('ecommerce/images/shop/'~ '{{item.imageName}}' )}}" />
                        <h2>Rp.{{' {{item.harga}} '}}</h2>
                        <p>{{' {{item.nama}} '}}</p>
                        <a ng-click="addtocart({% verbatim %} item.id 
                        {% endverbatim %} )" class="btn btn-default add-to-cart">
                                <i class="fa fa-shopping-cart"></i>Add To Cart
                            </a>
                    	Add to cart
                    </a> 
                 
                </div>
        </div>
        <div class="choose">
            <ul class="nav nav-pills nav-justified">
                <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                <li><a href=""><i class="fa fa-plus-square"></i>Detail Product</a></li>
            </ul>
        </div>
    </div>
</div>

                            <a ng-click="addtocart({% verbatim %} item.id 
                        {% endverbatim %} )" class="btn btn-default add-to-cart">
                                <i class="fa fa-shopping-cart"></i>Add To Cart
                            </a>