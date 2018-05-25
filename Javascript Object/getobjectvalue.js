var obj = 
{
   key1: 'value1',
   key2: 'value2',
   key3: 'value3',
   key4: 'value4'
}

#Example Satu
var x = obj.key1;
console.log(x); //'value1'


#Example Dua
var values = Object.values(obj);
console.log(values);
#Result
['value1','value2','value3','value4']

#Example Tiga
var values = [];
for(var key in obj) 
{
    values.push(obj[key]);
}

console.log(values);
#Result
['value1','value2','value3','value4']