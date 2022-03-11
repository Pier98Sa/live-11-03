<?php

$posts = [
    '09/03/2022'=>[
        [
            'title' => 'Post 1',
            'author' => 'Pierluigi',
            'text' => 'Ciao'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Chiara',
            'text' => 'Ciao'
        ],
        [
            'title' => 'Post 3',
            'author' => 'Paola',
            'text' => 'Ciao'
        ]
    ],
    '10/03/2022'=>[
        [
            'title' => 'Post 1',
            'author' => 'Pierluigi',
            'text' => 'Ciao'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Chiara',
            'text' => 'Ciao'
        ],
        [
            'title' => 'Post 3',
            'author' => 'Paola',
            'text' => 'Ciao'
        ]
    ],
    '11/03/2022'=>[
        [
            'title' => 'Post 1',
            'author' => 'Pierluigi',
            'text' => 'Ciao'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Chiara',
            'text' => 'Ciao'
        ],
        [
            'title' => 'Post 3',
            'author' => 'Paola',
            'text' => 'Ciao'
        ]
    ],
];

foreach($posts as $key => $post){
    echo '<h1>Post del : '. $key . '</h1>';
    foreach($post as $messages){
        echo"<ul>";
        echo"<li>" . $messages['title']. "</li>";
        echo"<li>" . $messages['author']. "</li>";
        echo"<li>" . $messages['text']. "</li>";
        echo "</ul>";
       
    }
}
    

