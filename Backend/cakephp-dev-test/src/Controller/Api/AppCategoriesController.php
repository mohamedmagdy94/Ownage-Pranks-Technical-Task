<?php
namespace App\Controller\Api;

use App\Controller\AppController;
use App\Model\Behavior\Page;

/**
 * AppCategories Controller
 *
 *
 * @method \App\Model\Entity\AppCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AppCategoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function getAllCategories()
    {
        $page = $this->request->query['page'] ?? 1;
        $limit = $this->request->query['limit'] ?? 10;
        $slug = $this->request->query['slug'] ?? '';
        $conditions = $slug === '' ? [] : ['slug'=>$slug];
        $appCategories = $this->paginate($this->AppCategories,['limit'=>$limit,'page'=>$page,'conditions'=> $conditions]);
        $appCategoriesCount = $this->AppCategories->find()->count();
        $page = new Page($appCategories,$appCategoriesCount,$page,$limit);
        $this->set(['my_response' => $page,'_serialize' => 'my_response']);
        $this->RequestHandler->renderAs($this, 'json');

    }


}
