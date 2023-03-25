<?php
echo basename(__FILE__). "<br>";

echo pathinfo(__FILE__)["basename"]. "<br>";

echo substr(__FILE__, 25). "<br>";

echo basename($_SERVER["SCRIPT_NAME"]);

// Output

// "index.php"
// "index.php"
// "index.php"
// "index.php"
?>
