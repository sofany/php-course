Day #1

Installation
Docker & Phpstorm

Les bases "word_counter.php"
git checkout word_counter_1_function
docker run -it --rm -v "$PWD":/usr/src/php-course -w /usr/src/php-course php:8.0-cli php word_counter.php
