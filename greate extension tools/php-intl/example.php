<?php
// currency
$number = 12345.67;

$formatter = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
$formatted_currency = $formatter->format($number);  // Output: $12,345.67 (US Dollars)

$formatter = new NumberFormatter('de_DE', NumberFormatter::CURRENCY);
$formatted_currency = $formatter->format($number);  // Output: 12.345,67 € (Euros)



// date 
$date = new DateTime('2024-03-25');

// Short date format (e.g., 03/25/2024)
$formatter = new DateFormat('en_US', DateFormat::SHORT);
$formatted_date = $formatter->format($date);
echo "Short date (US): " . $formatted_date . "\n";

// Long date format (e.g., Monday, March 25, 2024)
$formatter = new DateFormat('en_US', DateFormat::LONG);
$formatted_date = $formatter->format($date);
echo "Long date (US): " . $formatted_date . "\n";

// Custom date format (e.g., 25-Mar-2024)
$formatter = new DateFormat('en_US', DateFormat::NONE);
$formatter->setPattern('d-M-Y');
$formatted_date = $formatter->format($date);
echo "Custom format: " . $formatted_date . "\n";
