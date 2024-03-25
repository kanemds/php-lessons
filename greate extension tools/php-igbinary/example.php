<?php


// Sample data
$data = [
  'name' => 'Alice',
  'age' => 30,
  'city' => 'New York',
];

// Serialize data using igbinary
$serialized_data = igbinary_serialize($data);

// Do something with the serialized data (e.g., store in cache, send over network)
// ...

// Deserialize the data back into an array
$deserialized_data = igbinary_unserialize($serialized_data);

// Verify the deserialized data
var_dump($deserialized_data);  // Output: array(3) { ... } (matches original data)