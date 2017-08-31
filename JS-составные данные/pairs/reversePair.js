import { cons, car, cdr, toString } from 'hexlet-pairs'; // eslint-disable-line

// BEGIN (write your solution here)
function reversePair(pair)
{
  return cons(cdr(pair),car(pair));
}
// END
export default reversePair;
