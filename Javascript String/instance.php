<?php
	var aStringObject = new String("string");
	console.log(typeof aStringObject); //"object"
	console.log(aStringObject instanceof String); //true
	
	var aString = "This is a string";
	console.log(typeof aString); // "string";
	console.log(aString instanceof String); //false