#Day #1

##Installation Docker & Phpstorm

##Les bases "word_counter.php"
###Functions
git checkout word_counter_1_function
docker run -it --rm -v "$PWD":/usr/src/php-course -w /usr/src/php-course php:8.0-cli php word_counter.php

###Variables
git checkout word_counter_2_variable
docker run -it --rm -v "$PWD":/usr/src/php-course -w /usr/src/php-course php:8.0-cli php word_counter.php

###Tableaux
git checkout word_counter_3_array
docker run -it --rm -v "$PWD":/usr/src/php-course -w /usr/src/php-course php:8.0-cli php word_counter.php

###Boucles
git checkout word_counter_4_loop
docker run -it --rm -v "$PWD":/usr/src/php-course -w /usr/src/php-course php:8.0-cli php word_counter.php

###Conditions
git checkout word_counter_5_condition
docker run -it --rm -v "$PWD":/usr/src/php-course -w /usr/src/php-course php:8.0-cli php word_counter.php
