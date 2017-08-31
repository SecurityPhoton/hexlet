// eslint-disable-next-line
import { makePoint, getX, getY, toString as pointToString } from 'hexlet-points';
// eslint-disable-next-line
import { cons, car, cdr } from 'hexlet-pairs';

// BEGIN (write your solution here)
export function makeSegment(p1,p2)
{
  return cons(p1,p2);
}

export function startSegment(s)
{
  return car(s);
}

export function endSegment(s)
{
  return cdr(s);
}

export function segmentToString(s)
{
   let a1=car(s);
   let b1=cdr(s);
  return "[("+car(a1)+", "+cdr(a1)+"), ("+car(b1)+", "+cdr(b1)+")]";
}

 export function midpointSegment(s)
 {
   let a1=car(s);
   let b1=cdr(s);
   return makePoint((getX(a1)+getX(b1))/2,((getY(a1)+getY(b1))/2));
 }
