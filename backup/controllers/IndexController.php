<?php
class IndexController extends RenderView
{
    public function index()
    { 
        $this->loadView('home', [ ]);
    }
}
