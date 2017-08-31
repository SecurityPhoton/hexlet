import { length, toUpperCase } from './strings';

const bigLettersCount = (str) => {
  // BEGIN (write your solution here)
  let str1='';
  for (let i=0; i <length(str); i+=1 )
  {
    if (toUpperCase(str[i]) === str[i])
    str1 +=str[i];
  }
  return length(str1);
  // END
};


const compare = (first, second) => {
  const firstCount = bigLettersCount(first);
  const secondCount = bigLettersCount(second);

  // BEGIN (write your solution here)
  if (firstCount > secondCount) return 1;
  if (firstCount < secondCount) {return -1;}
  else return 0;
  // END
};

export const greaterThan = (first, second) =>
  compare(first, second) === 1;

export const lessThan = (first, second) =>
  compare(first, second) === -1;

export const isEqual = (first, second) =>
  compare(first, second) === 0;
