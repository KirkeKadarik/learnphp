<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}

function dump(...$var)
{
    echo '<pre>';
    var_dump(...$var);
    echo '</pre>';
}

switch ($_SERVER['REQUEST_URI']) {
    case '/':
        $title = 'World';
$posts = [
  [
    'title' => 'some world title 1',
   'content' => 'some world content 1',
    'date' => 'January 1, 2021',
     'author' => 'Pets',
     ],

  ['title' => 'some world title 2',
   'content' => 'some world content 2',
    'date' => 'January 2, 2021',
     'author' => 'Dogs',
      ],

  ['title' => 'some world title 3',
   'content' => 'some world content 3',
    'date' => 'January 3, 2021',
     'author' => 'Cats',
     ],
     
['title' => 'some world title 4',
   'content' => 'some world content 4',
    'date' => 'January 4, 2021',
     'author' => 'Seals',
     ],
    
];

        include __DIR__ . '/../views/index.php';
        break;

    case '/us':
        $title = 'U.S.';
$posts = [
  [
    'title' => 'some U.S world title 1',
   'content' => 'some U.S world content 1',
    'date' => 'January 1, 2021',
     'author' => 'Pets',
     ],

  ['title' => 'some U.S world title 2',
   'content' => 'some U.S world content 2',
    'date' => 'January 2, 2021',
     'author' => 'Dogs',
      ],

  ['title' => 'some U.S world title 3',
   'content' => 'some U.S world content 3',
    'date' => 'January 3, 2021',
     'author' => 'Cats',
     ],
     
['title' => 'some U.S world title 4',
   'content' => 'some U.S world content 4',
    'date' => 'January 4, 2021',
     'author' => 'Seals',
     ],
    
];
        include __DIR__ . '/../views/us.php';
        break;

    case '/tech':
        $title = 'Tech';
$posts = [
  [
    'title' => 'some Technology title 1',
   'content' => 'some Technology content 1',
    'date' => 'January 1, 2021',
     'author' => 'Pets',
     ],

  ['title' => 'some Technology title 2',
   'content' => 'some Technology content 2',
    'date' => 'January 2, 2021',
     'author' => 'Dogs',
      ],

  ['title' => 'some Technology title 3',
   'content' => 'some Technology content 3',
    'date' => 'January 3, 2021',
     'author' => 'Cats',
     ],
     
['title' => 'some Technology title 4',
   'content' => 'some Technology content 4',
    'date' => 'January 4, 2021',
     'author' => 'Seals',
     ],
    
];
        include __DIR__ . '/../views/tech.php';
        break;
    default:
        echo '404';
}
