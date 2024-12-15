# PHP Type Juggling Bug

This example demonstrates a common issue in PHP: unexpected behavior due to loose typing when performing arithmetic operations.  The `calculateSum` function attempts to sum an array of numbers, but one element is a string ('4a'). This leads to the string being treated as 0 and the result being incorrect.  The solution provides a type check to prevent this error.