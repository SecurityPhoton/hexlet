Сложение
a/b + c/d = (a * d + b * c) / (b * d)
Вычитание
a/b - c/d = (a * d - b * c) / (b * d)
Умножение
a/b * c/d = (a * c) / (b * d)
Деление
a/b / c/d = (a * d) / (b * c)
Равенство
a/b = c/d, если a * d = c * b

// eslint-disable-next-line
import { cons, car, cdr, toString as pairToString } from 'hexlet-pairs';

// BEGIN (write your solution here)
export const make = (a,b) => cons(a,b);
export const numer = (a) => car(a);
export const denom = (a) => cdr(a);
export const toString = (a) => ""+numer(a)+" / "+denom(a)+"";
export const isEqual = (a,b) => { if ((car(a)*cdr(b)) == (car(b)*cdr(a))) {return true;} else {return false;} }// a/b = c/d, если a * d = c * b
export const add = (a,b) => make(car(a)*cdr(b)+cdr(a)*car(b),(cdr(a)*cdr(b))); // (a*d+b*c)/(b*d)
export const sub = (a,b) => make(car(a)*cdr(b)-cdr(a)*car(b),(cdr(a)*cdr(b))); // (a * d - b * c) / (b * d)
export const mul = (a,b) => make(car(a)*(car(b)),(cdr(a)*cdr(b)));
export const div = (a,b) => make(car(a)*(cdr(b)),(cdr(a)*car(b)));



// END
