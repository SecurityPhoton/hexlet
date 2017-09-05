const flip = (f) => (a, b) => f(b, a);


export default flip;

// well (замыкание)
//const compose = (f,g) => (value) => f(g(value));
// Example
// const normalize = compose(Math.round, Math.abs);
// const normalize = (value) => Math.round(Math.abs(value));
