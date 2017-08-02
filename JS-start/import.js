export const getTriangleArea = (h, b) => {
  const area = (h * b) / 2;
  return area;
};

import { getTriangleArea } from './myMathModule';

const solution = n => getTriangleArea(n, square(n) / 2);

export default solution;
