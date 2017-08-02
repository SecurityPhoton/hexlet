// BEGIN (write your solution here)
export default function(num, a, b)
{
  let sum = 0
  for (let i = 1; i<num; i+=1)
  {
    if ((i % a === 0) || (i % b === 0))
    sum +=i;
  }

  return sum;
}
// END
