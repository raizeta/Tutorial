#Cara Pertama
############################################################################
var cars = ["Saab", "Volvo", "BMW","Volvo","Bis","Kota"];
var result = [];
var i,j,temparray;
var chunk = 2;
for (i=0,j=cars.length; i<j; i+=chunk) 
{
     temparray = cars.slice(i,i+chunk);
     result.push(temparray);
}
console.log(result);
#result
[['Saab','Volvo'],['BMW'.'Volvo'],['Bis','Kota']]

#Cara Kedua
############################################################################
var cars = ["Saab", "Volvo", "BMW","Volvo","Bis","Kota"];
Object.defineProperty(Array.prototype, 'chunk_inefficient', {
    value: function(chunkSize) {
        var array=this;
        return [].concat.apply([],
            array.map(function(elem,i) {
                return i%chunkSize ? [] : [array.slice(i,i+chunkSize)];
            })
        );
    }
});

var result = cars.chunk_inefficient(2);
console.log(result);
#result
[['Saab','Volvo'],['BMW'.'Volvo'],['Bis','Kota']]