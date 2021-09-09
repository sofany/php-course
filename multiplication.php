<?php
declare(strict_types=1);

do {
    echo 'Enter limit: ';
    $limit = trim(fgets(STDIN));
} while ($limit < 0 || $limit > 20);

echo "\n";

for ($i=1; $i <= $limit; $i++) {
    for ($j=1; $j <= $limit; $j++) {
        echo str_pad((string) ($i*$j), 4, ' ', STR_PAD_LEFT);
    }
    echo "\n";
}

echo "\n";