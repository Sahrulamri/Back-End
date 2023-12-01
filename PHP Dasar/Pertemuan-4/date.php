<?php
// Date
echo date("l, d-M-Y", time() + 60 * 60 * 24 * 5);

// Time
echo time();

// mktime
echo date("l", mktime(0, 0, 0, 5, 7, 2002));

// strtotimme

echo date("l", strtotime("5 Jul 2022"));
