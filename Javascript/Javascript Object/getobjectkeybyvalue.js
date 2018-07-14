Object.prototype.getKeyByValue = function( value ) 
{
    for( var prop in this ) 
    {
        if( this.hasOwnProperty( prop ) ) 
        {
             if( this[ prop ] === value )
             {
             	return prop;
             }     
        }
    }
}

var test = 
{
   key1: 42,
   key2: 'foo'
};

test.getKeyByValue(42);  // returns 'key1'