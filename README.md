# Simple php stack realization
## Usage:
```php
    $simpleStack = new SimpleStack();
    // Add some data
    $simpleStack->push("Some data");
    $simpleStack->push(42);
    
    // Getting data
    $lastData = $simpleStack->pop();
    
    // Get data without delete from stack
    $lastData = $simpleStack->peek();
    
    // Is stack empty?
    $isEmpty = $simpleStack->isEmpty();
```