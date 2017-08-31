import { length, toUpperCase } from './strings';

// BEGIN (write your solution here)
export default function f(s)
{
  let r = '';
  //console.log(s[0]);
  for (let i=0; i < length(s); i+=1)
  {
    let status = false;

    if ((s[i] !== " ") && (s[i-1] === ' ' || i === 0)) { status = true;}
    if (status === true) {
      r+=toUpperCase(s[i]); status = false; console.log(s[i+1] + ' ! ' +status);
    } else r+=s[i];
  }

  console.log(r);
  return r;
}
// END



export default (str) => {
  let result = '';
  for (let i = 0; i < length(str); i += 1) {
    const shouldBeBig = str[i] !== ' ' && (i === 0 || str[i - 1] === ' ');
    result += shouldBeBig ? toUpperCase(str[i]) : str[i];
  }

  return result;
};
