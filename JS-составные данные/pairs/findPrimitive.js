import { car, cdr, isPair, toString } from 'hexlet-pairs'; // eslint-disable-line

// BEGIN (write your solution here)
function findPrimitiveBox(obj)
{

 if (isPair(car(obj)) === false && isPair(cdr(obj)) === false) {return obj;}
 if (car(obj) === null) {findPrimitiveBox(cdr(obj));} else {findPrimitiveBox(car(obj));}
 
}
// END

export default findPrimitiveBox;


/*&
import { cons, car, cdr, toString } from 'hexlet-pairs';

const pair = cons(
  null,
  cons('one', 'two'),
);
toString(findPrimitiveBox(pair)); // ('one', 'two')

const pair2 = cons(
  cons(null, cons(1, 5)),
  null,
);
toString(findPrimitiveBox(pair2)); // (1, 5)

/ Preorder Traversal – английское название для прямого порядка
procedure PreorderTraversal({Аргументы});
begin
  //Прохождение корня
  DoSomething({Аргументы});

  //Прохождение левого поддерева
  if {Существует левое поддерево} then
    PreorderTransversal({Аргументы 2});

  //Прохождение правого поддерева
  if {Существует правое поддерево} then
    PreorderTransversal({Аргументы 3});
end;
*/
