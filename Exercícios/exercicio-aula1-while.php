<?php

$cont = 0;
while ($cont <= 10) {
	echo $cont++ . " - ";
}
echo PHP_EOL;
echo "==================" . PHP_EOL;

$cont = 0;
while ($cont < 20) {
	echo ($cont += 2) . " - ";
}

echo PHP_EOL;
echo "==================" . PHP_EOL;

$cont = 1;
while ($cont < 20) {
	if ($cont % 2 != 0) {
		echo $cont . " - ";
	}
	$cont++;
}

echo PHP_EOL;
echo "==================" . PHP_EOL;
echo "DOWHILE" . PHP_EOL;
echo "==================" . PHP_EOL;

$cont = 0;
do {
	echo $cont++ . " - ";
} while ($cont <= 10);

echo PHP_EOL;
echo "==================" . PHP_EOL;

$cont = 0;
do {
	if ($cont % 2 == 0) {
		echo $cont . " - ";
	}
	$cont++;
} while ($cont <= 20);

echo PHP_EOL;
echo "==================" . PHP_EOL;

$cont = 0;
do {
	if ($cont % 2 != 0) {
		echo $cont . " - ";
	}
	$cont++;
} while ($cont <= 20);

echo PHP_EOL;
echo "==================" . PHP_EOL;
echo "FOR" . PHP_EOL;
echo "==================" . PHP_EOL;

for ($i=0; $i <= 10; $i++) { 
	echo $i . " - ";
}

echo PHP_EOL;
echo "==================" . PHP_EOL;

for ($i=0; $i <= 20; $i++) { 
	if ($i % 2 == 0) {
		echo $i . " - ";
	}
}

echo PHP_EOL;
echo "==================" . PHP_EOL;

for ($i=0; $i <= 20; $i++) { 
	if ($i % 2 != 0) {
		echo $i . " - ";
	}
}

echo PHP_EOL;
echo "==================" . PHP_EOL;
echo "BREAK E CONTINUE" . PHP_EOL;
echo "==================" . PHP_EOL;

for ($i=10; $i <= 50; $i++) { 
	if($i % 5 == 0){
		continue;
	}
	echo $i . " - ";
}

echo PHP_EOL;
echo "==================" . PHP_EOL;

for ($i=200; $i <= 300 ; $i++) { 
	if ($i == 277){
		break;
	}
	echo $i . " - ";
}

echo PHP_EOL;