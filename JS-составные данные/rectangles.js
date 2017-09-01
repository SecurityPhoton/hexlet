// eslint-disable-next-line
import { makePoint, getX, getY, quadrant, toString as pointToString } from 'hexlet-points';
// eslint-disable-next-line
import { cons, car, cdr, toString as pairToString } from 'hexlet-pairs';

// BEGIN (write your solution here)
export const makeRectangle = (startPoint, width, height) => {
  return cons(startPoint,cons(width,height));
}

export const startPoint = (r) => {
  return car(r);
}

export const width = (r) => {
  return car(cdr(r));
}

export const height = (r) => {
  return cdr(cdr(r));
}

export const square = (r) => {
  return width(r)*height(r);
}

export const perimeter = (r) => {
  return 2*(width(r)+height(r));
}

export const containsTheOrigin = (rectangle) => {
  const point1 = startPoint(rectangle);
  const point2 = makePoint(getX(point1) + width(rectangle), getY(point1) - height(rectangle));

  return quadrant(point1) === 2 && quadrant(point2) === 4;
};


// END
