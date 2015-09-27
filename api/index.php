<?php
/**
/api/books GET Считывание﻿массива﻿книг
/api/books/:id GET Считывание﻿книги﻿с﻿идентификатором﻿:id
/api/books POST Добавление﻿новой﻿книги﻿и﻿ее﻿возврат﻿с﻿добавленным﻿атрибутом﻿:id
/api/books/:id PUT Обновление﻿книги﻿с﻿идентификатором﻿:id
/api/books/:id DELETE Удаление﻿книги﻿с﻿идентификатором﻿:id


var books = [
{ title: 'JavaScript: The Good Parts', author: 'Douglas Crockford', releaseDate: '2008', keywords: 'JavaScript Programming' },
{ title: 'The Little Book on CoffeeScript', author: 'Alex MacCaw', releaseDate: '2012', keywords: 'CoffeeScript Programming' },
{ title: 'Scala for the Impatient', author: 'Cay S. Horstmann', releaseDate: '2012', keywords: 'Scala Programming' },
{ title: 'American Psycho', author: 'Bret Easton Ellis', releaseDate: '1991', keywords: 'Novel Splatter' },
{ title: 'Eloquent JavaScript', author: 'Marijn Haverbeke', releaseDate: '2011', keywords: 'JavaScript Programming' }
];
*/
//phpinfo(INFO_VARIABLES);
$q = $_REQUEST["q"];
if(substr($q, 0, strlen("books"))=="books"){
    if($_SERVER['REQUEST_METHOD']=="GET"){
        $x = substr($q, strlen("books")+1);
        if($x) {
        }else{
            $_books = array();
            $_books[] = (object)array(id=>0, title=>'JavaScript: The Good Parts', author=>'Douglas Crockford', releaseDate=>'2008', keywords=>array('JavaScript', 'Programming'));
            $_books[] = (object)array(id=>1, title=>'JavaScript: The Good Parts', author=>'Douglas Crockford', releaseDate=>'2008', keywords=>'JavaScript Programming');
            $_books[] = (object)array(id=>2, title=>'JavaScript: The Good Parts', author=>'Douglas Crockford', releaseDate=>'2008', keywords=>'JavaScript Programming');
            echo json_encode($_books);
        }
    }else if($_SERVER['REQUEST_METHOD']=="POST"){
        $_books = (object)array(id=>3, title=>'JavaScript: The Good Parts', author=>'Douglas Crockford', releaseDate=>'2008', keywords=>'JavaScript Programming');
        echo json_encode($_books);
    }else if($_SERVER['REQUEST_METHOD']=="DELETE"){
        $_books = (object)array(id=>3);
        echo json_encode($_books);
    }
}

//if($_REQUEST["q"]
/*
if($_SERVER['REQUEST_METHOD'])
*/