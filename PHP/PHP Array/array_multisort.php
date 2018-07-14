<?php
#array_multisort — Sort multiple or multi-dimensional arrays

bool array_multisort ( array &$array1 [, mixed $array1_sort_order = SORT_ASC 
									  		[, mixed $array1_sort_flags = SORT_REGULAR [, mixed $... ]
									  		]
							  		  ] 
			  		)

#Result
array_multisort() can be used to sort several arrays at once, 
or a multi-dimensional array by one or more dimensions.
Associative (string) keys will be maintained, but numeric keys will be re-indexed.

#Parameters
$array1
An array being sorted.

$array1_sort_order
The order used to sort the previous array argument. 
Either SORT_ASC to sort ascendingly or SORT_DESC to sort descendingly.

This argument can be swapped with array1_sort_flags or omitted entirely, 
in which case SORT_ASC is assumed.

$array1_sort_flags
Sort options for the previous array argument:

Sorting type flags:

SORT_REGULAR - compare items normally (don't change types)
SORT_NUMERIC - compare items numerically
SORT_STRING - compare items as strings
SORT_LOCALE_STRING - compare items as strings, based on the current locale. It uses the locale, 
which can be changed using setlocale()
SORT_NATURAL - compare items as strings using "natural ordering" like natsort()
SORT_FLAG_CASE - can be combined (bitwise OR) with SORT_STRING or SORT_NATURAL to sort 
strings case-insensitively
This argument can be swapped with array1_sort_order or omitted entirely, in which case 
SORT_REGULAR is assumed.

$...
More arrays, optionally followed by sort order and flags. Only elements corresponding 
to equivalent elements in previous arrays are compared. In other words, the sort is lexicographical.


$ar1 = array(10, 100, 100, 0);
$ar2 = array(1, 3, 2, 4);
array_multisort($ar1, $ar2);

var_dump($ar1);
var_dump($ar2);

#Example ONe
array(4) 
{
  [0]=> int(0)
  [1]=> int(10)
  [2]=> int(100)
  [3]=> int(100)
}

array(4) 
{
  [0]=> int(4)
  [1]=> int(1)
  [2]=> int(2)
  [3]=> int(3)
}
In this example, after sorting, the first array will contain 0, 10, 100, 100. 
The second array will contain 4, 1, 2, 3. The entries in the second array corresponding to 
the identical entries in the first array (100 and 100) were sorted as well.

#Example Two
$ar = array
		(
	       array("10", 11, 100, 100, "a"),
	       array( 1,  2, "2",   3,   1)
      	);

array_multisort($ar[0], SORT_ASC, SORT_STRING, $ar[1], SORT_NUMERIC, SORT_DESC);
var_dump($ar);

array(2) 
{
  [0]=> array(5) 
  {
    [0]=> string(2) "10"
    [1]=> int(100)
    [2]=> int(100)
    [3]=> int(11)
    [4]=> string(1) "a"
  }

  [1]=> array(5) 
  {
    [0]=> int(1)
    [1]=> int(3)
    [2]=> string(1) "2"
    [3]=> int(2)
    [4]=> int(1)
  }
}

In this example, after sorting, the first array will transform to "10", 100, 100, 11, "a" 
(it was sorted as strings in ascending order). 
The second will contain 1, 3, "2", 2, 1 (sorted as numbers, in descending order).

$data[] = array('volume' => 67, 'edition' => 2);
$data[] = array('volume' => 86, 'edition' => 1);
$data[] = array('volume' => 85, 'edition' => 6);
$data[] = array('volume' => 98, 'edition' => 2);
$data[] = array('volume' => 86, 'edition' => 6);
$data[] = array('volume' => 67, 'edition' => 7);

foreach ($data as $key => $row) 
{
    $volume[$key]  = $row['volume'];
    $edition[$key] = $row['edition'];
}

// Sort the data with volume descending, edition ascending
// Add $data as the last parameter, to sort by the common key
array_multisort($volume, SORT_DESC, $edition, SORT_ASC, $data);

volume | edition
-------+--------
    98 |       2
    86 |       1
    86 |       6
    85 |       6
    67 |       2
    67 |       7