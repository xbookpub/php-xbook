<?php

Route::get('/', function () {
    redirect('books');
});

Route::get('books/{:id?}', function ($id=false) {
    if ($id !== false) {
        if ($book = find('books', ['id'=>$id])) {
            echo view('chapters', ['title'=>$book['name'], 'chapters'=>findAll('chapters', ['book_id'=>$id], '`num` ASC')]);
        } else {
            redirect('/');
        }
    } else {
        echo View('books', ['title'=>'xboox.pub | SOSTART', 'books'=>findAll('books')]);
    }
});

Route::get('chapters/{:id?}', function ($id=false) {
    if ($id && ($chapter = find('chapters', ['id'=>$id])) ) {
        $book = find('books', ['id'=>$chapter['book_id']]);

        $pre = $chapter['num']-1;
        $pre = $pre<1 ? 1 : $pre;

        $next = $chapter['num']+1;
        $next = $next>$book['chapters'] ? $book['chapters'] : $next;

        $chapter['pre']  = find('chapters', ['book_id'=>$chapter['book_id'], 'num'=>$pre])['id'];
        $chapter['next'] = find('chapters', ['book_id'=>$chapter['book_id'], 'num'=>$next])['id'];

        echo View('reader', $chapter);exit;
    } else {
        redirect('/');
    }
});
