import { makePoint, getX, getY } from 'hexlet-points'; // eslint-disable-line

// BEGIN (write your solution here)

export function quadrant(p)
{
  if (getX(p) > 0 && getY(p) > 0) {return 1;} else
  if (getX(p) < 0 && getY(p) < 0) {return 3;} else
  if (getX(p) < 0 && getY(p) > 0) {return 2;} else
  if (getX(p) > 0 && getY(p) < 0) {return 4;} else return null;

}

export function symmetricalPoint(p)
{
  let a = 0;
  let b = 0;

  if (getX(p) > 0) { a = -getX(p)} else {a = -getX(p);}
  if (getY(p) > 0) { b = -getY(p)} else {b = -getY(p);}
  return makePoint(a, b);
}

export function distance(p1,p2)
{
  return Math.sqrt(Math.pow(getX(p2)-getX(p1),2)+Math.pow(getY(p2)-getY(p1),2));
}
