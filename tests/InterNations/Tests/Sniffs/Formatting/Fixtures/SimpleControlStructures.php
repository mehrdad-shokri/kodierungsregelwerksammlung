<?php
$b = true;
if (true) {
    $b = false;
}

$c = 1;
while (false) {

}
// Shouldn't show error
for ($i = 0; $i < 0; $i++) {

}
for ($i = 0; $i < 0; $i++) {

}

$c = 1;
switch ($b) {
    default:
        break;
}

function test() {
    if (true) {

    }
}

$c = 1;
foreach ([1] as $a) {

}

$c = 1;
do {

} while (false);