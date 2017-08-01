<?php
##Tambahkan style="flex-wrap:wrap" pada row,maka akan otomatis menjadi baris baru
<div class="row" style="flex-wrap: wrap;">
    <div class="col col-25" ng-repeat="btnName in btnNames"> 
        <button class="button button-dark" >{{btnName}}</button>
    </div>
</div>