<?php 
class Cms5b9280335f51e267518414_1d8b070ebcb96ad3d2cc42aceafacadcClass extends Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
