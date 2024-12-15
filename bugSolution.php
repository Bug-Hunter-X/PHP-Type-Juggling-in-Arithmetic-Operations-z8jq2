```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number; 
    } else {
      //Handle non-numeric input appropriately.  Here we throw an exception
      throw new InvalidArgumentException('Array element is not numeric');
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4a'];

try {
  $sum = calculateSum($numbers);
echo "Sum: " . $sum;
} catch (InvalidArgumentException $e) {
  echo "Error: " . $e->getMessage();
}
```