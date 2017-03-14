var obj = {
   key1: 'value1',
   key2: 'value2',
   key3: 'value3',
   key4: 'value4'
}
#Example Satu
var keydariboject = [];
for(var k in obj) 
{
	keydariboject.push(k);
}
console.log(keydariboject);
["key1","key2","key3","key4"]

#Example Dua
var keydariobject = Object.keys(obj)
console.log(keydariobject); 
['key1', 'key2', 'key3', 'key4']

#Example Tiga
var keyobjectpertama = Object.keys(obj)[0];
console.log(keyobjectpertama);
#Result
key1
