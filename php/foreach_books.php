<?php

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

$books = array(
    array('title' => 'The Hobbit', 'published' => 1937, 'author' => 'J. R. R. Tolkien', 'pages' => 310),
    array('title' => 'Game of Thrones', 'published' => 1996, 'author' => 'George R. R. Martin', 'pages' => 835),
    array('title' => 'The Catcher in the Rye', 'published' => 1951, 'author' => 'J. D. Salinger', 'pages' => 220),
    array('title' => 'A Tale of Two Cities', 'published' => 1859, 'author' => 'Charles Dickens', 'pages' => 544),
);

foreach ($books as $title => $book1) {
    if ($book1['published'] > 1950) {
        echo "Published $key $value" . PHP_EOL;
        foreach ($book1 as $key => $value) {
            echo "Book $key $value" . PHP_EOL;
    }
    echo PHP_EOL;
}
}