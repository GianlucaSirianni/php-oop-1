<?php

include_once __DIR__ . '/class.php';

$movie1 = new Movie('"Il Miglio Verde"', 'Drama', 'Eng', 8);
$movie2 = new Movie('"Forrest Gump"', 'Drama', 'Eng', 9);
$movie3 = new Movie('"Tre Uomini e una Gamba"', 'Comedy', 'Ita', 10);
$movie4 = new Movie('"Thor: Ragnarok"', 'Action', 'Eng', 3);
$movie5 = new Movie('"Men"', 'Horror', 'Eng', 1);


echo $movie1->showMe();
echo $movie2->showMe();
echo $movie3->showMe();
echo $movie4->showMe();
echo $movie5->showMe();
