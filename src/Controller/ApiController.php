<?php
// src/Controller/UploaderController.php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\Exception\RecordNotFoundException;
use Cake\Network\Exception\NotFoundException;
use App\Controller\QueryExpression;
use App\Controller\Query;
use Cake\Event\Event;
use Cake\Utility\ClassRegistry;

class ApiController extends AppController
{
  public function initialize()
  {
    $this->loadModel('Uploader');
    //$this->Uploader = ClassRegistry::init('Uploader');
    parent::initialize();
  }
  public function beforeFilter(Event $event)
  {
    // allow all action
    $this->Auth->allow();
  }

    public function list(){
        $this->loadComponent('Paginator');
        $uploader = $this->Paginator->paginate($this->Uploader->find('all', [
            'order' => ['id' => 'DESC']
        ]));
        $this->set(compact('uploader'));
    }
    
    public function product($id = null)
    {
        if($id){
            $uploader = $this->Uploader->findById($id)->firstOrFail();
            $this->set(compact('uploader'));
            return;
        }

        $uploader = [];

        $unique_id = $this->request->getQuery('unique_id');
        $filename = $this->request->getQuery('filename');
        $limit = $this->request->getQuery('limit');
        $all = $this->request->getQuery('all');
        
        $query = $this->Uploader->find('all', [
            'order' => ['id' => 'DESC']
        ])->where([
            'url LIKE' => '%'.$filename,
            'unique_id' => $unique_id
        ])->distinct(['url'])
        ->limit($limit);

        if($all==1){
            foreach($query as $singleFile){
                $path = explode("/", $singleFile->url);
                $uploader[] = $singleFile;                
            }
        }
        else{
            foreach($query as $singleFile){
                $path = explode("/", $singleFile->url);
                if(count($path) < 4){
                    $uploader[] = $singleFile;
                }
            }
        }
        //var_dump($file);
        $this->set(compact('uploader'));
    }
}