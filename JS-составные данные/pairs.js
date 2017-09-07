/* eslint-disable no-unused-vars */
export const cons = (x, y) => m => m(x, y);

// BEGIN (write your solution here)
export const car = z => z((x, y) => x);
export const cdr = z => z((x, y) => y); // selector
// END

var car = function car(z) {
  return z(function (x, y) {
    return x;
  });
};
