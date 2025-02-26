<?php
$pattern = "/[$]/";  // Check for '$' presence

$tests = [":)", "D:~", ":D", ";)", ":$", "$:)", "D$", "$"];

foreach ($tests as $test) {
    if (preg_match($pattern, $test)) {
        echo "❌ Found '$' in: \"$test\"\n";
    } else {
        echo "✅ No '$' in: \"$test\"\n";
    }
}
