<?php
class HTMLWriter implements WriterInterface
{

    public function write(Article $article){
        $html='<h1>'.$article->title.'</h1>';
        $html.='<h2>'.$article->author.'</h2>';
        $html.='<div>'.$article->price.'</div>';
        return $html;
    }
}