<?php
//Search All Index With Value = 2
var dataset = [2,2,4,2,6,4,7,8];
var results = [];
for ( i=0; i < dataset.length; i++ )
{
    if ( dataset[i] == 2 )
    {
        results.push( i );
    }
}

return results;