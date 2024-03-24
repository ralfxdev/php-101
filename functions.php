<?php

declare(strict_types=1);

require('classes/Author.php');

function getPosts(): array
{

    $author1 = new Author('John Doe');
    $author2 = new Author('Jane Doe');

    return [
        [
            'title' => 'How to learn PHP',
            'content' => 'This is how you learn PHP.',
            'author' => $author1->name,
        ],
        [
            'title' => 'How to learn MySQL',
            'content' => 'This is how you learn MySQL.',
            'author' => $author2->name,
        ],
        [
            'title' => 'How to learn Nginx',
            'content' => 'This is how you learn Nginx.',
            'author' => $author1->name,
        ],
    ];
}

function getPostText(int $numPosts): string
{
    return $numPosts === 1 ? 'post' : 'posts';
}
