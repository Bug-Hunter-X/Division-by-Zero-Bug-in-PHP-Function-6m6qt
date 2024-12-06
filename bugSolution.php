```php
function my_function($a, $b) {
  if ($b === 0) {
    trigger_error('Division by zero', E_USER_ERROR);
  }
  return $a / $b;
}
```