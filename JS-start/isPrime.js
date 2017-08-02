// BEGIN (write your solution here)
export default function isPrime(num)
{
  if (num < 2) return false;
  let acc = 2;
  while (acc != 10)
  {
    if (num == acc) {return true;}
    if (num % acc === 0) {return false; }
    console.log("!!!! n= "+ num + " %= " + num % acc + " - !!! -" + acc);
    acc++;
  }
  return true;
}
// END



// BEGIN
// Visualize Execution: https://goo.gl/lkO59x
const isPrime = (num) => {
  if (num < 2) {
    return false;
  }

  let i = 2;

  while (i <= num / 2) {
    if (num % i === 0) {
      return false;
    }
    i += 1; // вместо i++;
  }

  return true;
};

export default isPrime;
// END
