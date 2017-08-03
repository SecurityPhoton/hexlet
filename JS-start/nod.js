// BEGIN (write your solution here)
export default function gcd(a, b)
{
  if (b === 0) return a;
  return gcd(b, a % b);
//  return b ? gcd(b, a % b) : a;
}
// END
