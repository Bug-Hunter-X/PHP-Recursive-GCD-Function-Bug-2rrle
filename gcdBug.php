function foo(a, b) {
  if (a === 0) {
    return b;
  }
  if (b === 0) {
    return a;
  }
  return foo(Math.min(a, b), Math.abs(a - b));
}

console.log(foo(12, 18)); // Output: 6
console.log(foo(10, 16)); // Output: 2