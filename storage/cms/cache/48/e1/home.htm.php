<?php 
class Cms5b8d45d94981f789602548_101d535bbde13c6a6cfdb0020e724509Class extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
