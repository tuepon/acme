<?php 
class Cms5b8fe5cab6ebc137192828_87831d27981a7a498629d944b27cbf00Class extends Cms\Classes\PageCode
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
