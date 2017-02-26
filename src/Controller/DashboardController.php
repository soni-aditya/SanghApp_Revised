<?php
namespace App\Controller;

use App\Controller\AppController;

class DashboardController extends AppController
{
    public function index(){
    //Fetching all posts into an array
    	$posts=$this->loadModel('Posts')->find('all');
        $this->set(compact('posts'));
    }
    public function display($id){
        $posts=$this->loadModel('Posts')->find('all');
        $post=$this->Posts->get($id);   //Fetching the row having id=$id from the table 'Posts'
        
        $this->set(compact('posts','post'));
    }
}
