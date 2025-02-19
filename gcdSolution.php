function gcd(a, b) {
  // Handle edge cases
  if (a === 0) {
    return b;
  }
  if (b === 0) {
    return a;
  }

  // Euclidean algorithm
  while (b !== 0) {
    let temp = b;
    b = a % b;
    a = temp;
  }
  return a;
}

console.log(gcd(12, 18)); // Output: 6
console.log(gcd(10, 16)); // Output: 2
console.log(gcd(0,10)); // Output: 10
console.log(gcd(10,0)); // Output: 10