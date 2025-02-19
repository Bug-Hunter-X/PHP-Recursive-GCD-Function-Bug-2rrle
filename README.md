# PHP Recursive GCD Function Bug

This repository demonstrates an uncommon bug in a PHP function designed to calculate the greatest common divisor (GCD) of two numbers using recursion. The bug manifests when dealing with large numbers or specific edge cases. 

## Bug Description
The `foo()` function, implemented recursively, aims to compute the GCD. However, it produces incorrect results under certain input conditions. The core issue lies in the handling of zero values and potential stack overflow issues with large inputs.

## Solution
The `gcdSolution.php` file provides a corrected version of the GCD function with improved handling of edge cases and optimization to avoid potential stack overflow issues.