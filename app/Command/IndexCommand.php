<?php

namespace App\Command;

class IndexCommand
{
    public static function index()
    {
        echo 'hello, world';
    }

    public static function staticize()
    {
        $uri = clone Helper()->uri;
        Helper()->uri = function () use ($uri) {
            return call_user_func_array($uri, func_get_args()).'.html';
        };
        
        $distdir = __DIR__.'/../../xbookpub.github.io/';
        $books = findAll('books', ['status'=>1]);

        // 书
        $dir = $distdir; @mkdir($dir, 0777, true);
        file_put_contents($dir.'index.html', View('books', ['title'=>'xboox.pub | SOSTART', 'books'=>$books]));
        
        // 章节
        $dir = $distdir.'books/'; @mkdir($dir, 0777, true);
        foreach ($books as $book) {
            if ($volumes = findAll('volumes', ['book_id'=>$book['id']])) {
                foreach ($volumes as $k=>$volume) {
                    $volumes[$k]['chapters'] = findAll('chapters', ['volume_id'=>$volumes[$k]['id']], '`num` ASC');
                }
                $html = view('chapters', ['title'=>$book['name'], 'book_id'=>$book['id'], 'volumes'=>$volumes]);
            } else {
                $chapters = findAll('chapters', ['book_id'=>$book['id']], '`num` ASC');
                $html = view('chapters', ['title'=>$book['name'], 'book_id'=>$book['id'], 'chapters'=>$chapters]);
            }
            file_put_contents($dir.$book['id'].'.html', $html);
        }
        
        // 内容
        foreach ($books as $book) {
            $dir = $distdir.'books/'.$book['id'].'/chapters/'; @mkdir($dir, 0777, true);
            
            foreach (findAll('chapters', ['book_id'=>$book['id']]) as $chapter) {
                $pre = $chapter['num']-1;
                $pre = $pre<1 ? 1 : $pre;

                $next = $chapter['num']+1;
                $next = $next>$book['chapters'] ? $book['chapters'] : $next;

                $chapter['pre']  = find('chapters', ['book_id'=>$chapter['book_id'], 'num'=>$pre])['id'];
                $chapter['next'] = find('chapters', ['book_id'=>$chapter['book_id'], 'num'=>$next])['id'];
                
                file_put_contents($dir.$chapter['id'].'.html', View('reader', $chapter));
            }
        }
    }
}
