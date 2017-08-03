import { length } from './strings';

// BEGIN (write your solution here)
const reverse = (str) => {
  let str1='';
  for (let i = length(str)-1; i>=0; i-=1)
  {
    console.log(i);
    console.log(str[i]);
    str1+=str[i];
  }
  return str1;
}

export default reverse;
// END
