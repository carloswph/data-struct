# Functional Data Structures

This package relies on PHP-DS extension to provide a functional way of dealing with advanced data structures, such as vectors, stacks or sets. As provided by the extension, a number of classes offer an object-oriented way of creating, managing and dealing with those structures, although no functions have been so far provided to create those structures.

Idea is to give the developer a way of creating new structures in the same way he does with array(...), or similarly to C++ or Java approach for those data types.

# How it works

This package allows you to create a stack or a vector the same way you do with a common array:

```php
$vector = vector(1, 10, 34, 1, 11, 20);
$stack = stack(2, 4, 78, 2, 1, 445);
$set = set(1, 2, 3, 4, 5);

var_dump($vector);
var_dump($stack);
var_dump($set);

/*

object(Ds\Vector)#3 (6) {
  [0]=>
  int(1)
  [1]=>
  int(10)
  [2]=>
  int(34)
  [3]=>
  int(1)
  [4]=>
  int(11)
  [5]=>
  int(20)
}
object(Ds\Stack)#2 (6) {
  [0]=>
  int(445)
  [1]=>
  int(1)
  [2]=>
  int(2)
  [3]=>
  int(78)
  [4]=>
  int(4)
  [5]=>
  int(2)
}
object(Ds\Set)#4 (5) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
  [3]=>
  int(4)
  [4]=>
  int(5)
}

*/
```

## Which functions can I use?

All data structures covered by PHP-DS received an equivalent function, which accepts ANY number of elements, just like an array. However, contrary to an array in PHP, these functions only allow the values to be set (later, you can use the objected instantiated by each function to have access to the respective class' methods). So, this includes:

* stack(...elements)
* vector(...elements)
* set(...elements)
* queue(...elements)
* deque(...elements)
* map(...elements)

The only exception happens with the pqueue() functions. This particular data structure entangles each value added to a priority level. So, when using this function, the number of elements must be always even - and from these, all the odds will correspond to the previous value priority. 

Example: pqueue(3, 10, 1, 5, 2, 25);

In this case, the values to be added to your PriorityQueue object will be (2, 3, 1) - in this order. That happens because, according to the elements provided, the number "2" has the highest priority, then "3" and finally "1", with the lowest priority of 5.