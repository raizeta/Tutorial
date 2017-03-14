#Making Object
var person = new Object();
person.firstName = "John";
person.lastName = "Doe";
person.age = 50;
person.eyeColor = "blue";

var person = {
				firstName:"John", 
				lastName:"Doe", 
				age:50, 
				eyeColor:"blue",
				fullName:function() 
				{
					return this.firstName + " " + this.lastName;
				}
			};

firsname,lastname,age,eyeColor 	= property;
"John","Done",50,"blue"			= property Value;
fullName 						= method;

#Object Constructor
#function person yang dibawah ini dinamakan dengan Prototype
function person(first, last, age, eye) 
{
    this.firstName = first;
    this.lastName = last;
    this.age = age;
    this.eyeColor = eye;
}

var myFather = new person("John", "Doe", 50, "blue");
var myMother = new person("Sally", "Rally", 48, "green");


#How To Access Object
var person = {
				firstName:"John", 
				lastName:"Doe", 
				age:50, 
				eyeColor:"blue",
				fullName:function() 
				{
					return this.firstName + " " + this.lastName;
				}
			};
console.log(person.firstName); 			//"John"
console.log(person.['firstName']);		//"John"


#Adding New Properties To Object
var person = {
				firstName:"John", 
				lastName:"Doe", 
				age:50, 
				eyeColor:"blue",
				fullName:function() 
				{
					return this.firstName + " " + this.lastName;
				}
			};
person.nationality = "Indonesia";
console.log(person);
var person = {
				firstName:"John", 
				lastName:"Doe", 
				age:50, 
				eyeColor:"blue",
				nationality:"Indonesia",
				fullName:function() 
				{
					return this.firstName + " " + this.lastName;
				}
			};

#Deleting Properties From Object
var person = {
				firstName:"John", 
				lastName:"Doe", 
				age:50, 
				eyeColor:"blue",
				nationality:"Indonesia",
				fullName:function() 
				{
					return this.firstName + " " + this.lastName;
				}
			};
delete person.eyeColor;
console.log(person);
var person = {
				firstName:"John", 
				lastName:"Doe", 
				age:50,
				nationality:"Indonesia",
				fullName:function() 
				{
					return this.firstName + " " + this.lastName;
				}
			};

#Property Attributes
All properties have a name. In addition they also have a value.

The value is one of the property's attributes.

Other attributes are: enumerable, configurable, and writable.

These attributes define how the property can be accessed (is it readable?, is it writable?)

In JavaScript, all attributes can be read, but only the value attribute can be changed (and only if the property is writable).

( ECMAScript 5 has methods for both getting and setting all property attributes)

#Prototype Properties
JavaScript objects inherit the properties of their prototype.

The delete keyword does not delete inherited properties, 
but if you delete a prototype property, it will affect all objects inherited from the prototype.

#Adding Properties to a Prototype
You cannot add a new property to a prototype the same way as you add a new property to an existing object, 
because the prototype is not an existing object.
