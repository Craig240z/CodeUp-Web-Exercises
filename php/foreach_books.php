<?php

$books = array(
    'The Hobbit' => array(
        'Published' => 1937,
        'Author' => 'J. R. R. Tolkien',
        'Pages' => 310
    ),
    'Game of Thrones' => array(
        'Published' => 1996,
        'Author' => 'George R. R. Martin',
        'Pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'Published' => 1951,
        'Author' => 'J. D. Salinger',
        'Pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'Published' => 1859,
        'Author' => 'Charles Dickens',
        'Pages' => 544
    )
);

$books = array(
    array('Title' => 'The Hobbit', 'Published' => 1937, 'Author' => 'J. R. R. Tolkien', 'Pages' => 310),
    array('Title' => 'Game of Thrones', 'Published' => 1996, 'Author' => 'George R. R. Martin', 'Pages' => 835),
    array('Title' => 'The Catcher in the Rye', 'Published' => 1951, 'Author' => 'J. D. Salinger', 'Pages' => 220),
    array('Title' => 'A Tale of Two Cities', 'Published' => 1859, 'Author' => 'Charles Dickens', 'Pages' => 544),
);

foreach ($books as $title => $book1) {
    if ($book1['Published'] > 1950) {
        echo $title . PHP_EOL;
        foreach ($book1 as $key => $value) {
            echo "Book: $key $value" . PHP_EOL;
    }
    echo PHP_EOL;
}
}