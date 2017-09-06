const flip = (f) => (a, b) => f(b, a);


export default flip;

// well (замыкание)
//const compose = (f,g) => (value) => f(g(value));
// Example
// const normalize = compose(Math.round, Math.abs);
// const normalize = (value) => Math.round(Math.abs(value));


//
const cons = (a, b) => (message) => {
switch (message)
{
  case 'car': return a;
  case 'cdr': return b;
}
}

const car = (pair) => pair('car');
const cdr = (pair) => pair('cdr');
