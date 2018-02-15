<?php


namespace Blog\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;



class BlogController extends AbstractActionController
{

    public function indexAction()
    {
        $posts = [
            ['title'=>'Post1','content'=>'Content1'],
            ['title'=>'Post2','content'=>'Content2'],
            ['title'=>'Post3','content'=>'Content3'],
            ['title'=>'Post4','content'=>'Content4'],

        ];
        return new ViewModel([
            'posts'=>$posts
        ]);
    }

}