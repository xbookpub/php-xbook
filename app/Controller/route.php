<?php

Route::get('/', function () {
    header('HTTP/1.1 302 Moved Temporarily');
    redirect('books');
});

Route::get('books/{:id?}', function ($id=false) {
    if ($id !== false) {
        if ($book = find('books', ['id'=>$id, 'status'=>1])) {
            if ($volumes = findAll('volumes', ['book_id'=>$book['id']])) {
                foreach ($volumes as $k=>$volume) {
                    $volumes[$k]['chapters'] = findAll('chapters', ['volume_id'=>$volumes[$k]['id']], '`num` ASC');
                }
                echo view('chapters', ['title'=>$book['name'], 'book_id'=>$book['id'], 'volumes'=>$volumes]);
            } else {
                $chapters = findAll('chapters', ['book_id'=>$book['id']], '`num` ASC');
                echo view('chapters', ['title'=>$book['name'], 'book_id'=>$book['id'], 'chapters'=>$chapters]);
            }
        } else {
            redirect('/');
        }
    } else {
        echo View('books', ['title'=>'xboox.pub | SOSTART', 'books'=>findAll('books', ['status'=>1])]);
    }
});

Route::get('books/{:book_id}/chapters/{:chapter_id}', function ($book_id, $chapter_id) {
    $book = find('books', ['id'=>$book_id, 'status'=>1]);
    $chapter = find('chapters', ['id'=>$chapter_id]);
    
    if ($book && $chapter && ($chapter['book_id']==$book['id'])) {
    
        $pre = $chapter['num']-1;
        $pre = $pre<1 ? 1 : $pre;

        $next = $chapter['num']+1;
        $next = $next>$book['chapters'] ? $book['chapters'] : $next;

        $chapter['pre']  = find('chapters', ['book_id'=>$chapter['book_id'], 'num'=>$pre])['id'];
        $chapter['next'] = find('chapters', ['book_id'=>$chapter['book_id'], 'num'=>$next])['id'];

        echo View('reader', $chapter);
    } else {
        redirect('/');
    }
});
