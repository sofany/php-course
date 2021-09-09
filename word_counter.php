<?php
declare(strict_types=1);

function countWord(string $phrase): int {
    $counter = 0;
    $words = explode(' ', $phrase);

    return count($words);
}

function display(string $phrase): void {
    echo "Phrase \"$phrase\" has ".countWord($phrase)." word(s).";
}

display('Hello world !');
