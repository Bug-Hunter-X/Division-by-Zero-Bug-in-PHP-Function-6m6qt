```php
function my_function($a, $b) {
  if ($a === 0 || $b === 0) {
    return 0; //Incorrect return
  }
  return $a / $b;
}
```