<?php
/* !Error Handling! */

//phpinfo();

/*
// Report simple running errors
error_reporting(E_ALL);
// Make sure they're on screen 1 means true
ini_set('display_errors', 1);
// HTML formatted errors 1 means true
ini_set("html_errors", 1);

$error_levels = array("E_ALL", "E_NOTICE", "E_WARNING", "E_ERROR",
                      "E_STRICT", "E_DEPRECATED", "E_PARSE");

foreach ($errors as $error){
  echo $error."<br />";
  
}
*/

/*
// Report simple running errors
error_reporting(E_ALL);
// Make sure they're on screen
ini_set('display_errors', 1);
// HTML formatted errors
ini_set("html_errors", 1);

// Fatal
@require "non_existent_file";

// Warning
include "non_existent_file";

// Warning
$my_file = @file('non_existent_file') or die("Failed opening file");

function error_function($error) {
    echo $bad;
    // Notice
    return $error;
}

// Warning
echo error_function();

echo "End of File.";
*/


// Report simple running errors
error_reporting(E_ALL);
// Make sure they're on screen
ini_set('display_errors', 1);
// HTML formatted errors
ini_set("html_errors", 1);

// Do some errors

// Notice
var_dump(5 + $nope);

// Warning
$wrestler->name = 'Hulk Hogan';

// Strict
class Foo
{
    public function bar() {}
}
Foo::bar();

// Error

Foo::nope();

echo "We'll never get here.";

?>

