function unique(list) 
{
    var result = [];
    $.each(list, function(i, e) 
    {
        if ($.inArray(e, result) == -1) 
    	{
    		result.push(e);
    	}
    });
    return result;
}

var thelist = ["ball_1", "ball_13", "ball_23", "ball_1"];
var x =unique(thelist);
console.log(x);

#result["ball_1", "ball_13", "ball_23"]
