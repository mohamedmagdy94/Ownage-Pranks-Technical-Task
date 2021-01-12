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
        $params = $this->request->getQuery();
        $page = $params['page'] ?? 1;
        $limit = $params['limit'] ?? 10;
        $slug = $params['slug'] ?? '';
        $conditions = $slug === '' ? [] : ['slug'=>$slug];
        $appCategories = $this->paginate($this->AppCategories,['limit'=>$limit,'page'=>$page,'conditions'=> $conditions]);
        $appCategoriesCount = $this->AppCategories->find()->count();
        $page = new Page($appCategories,$appCategoriesCount,$page,$limit);
        $this->set(['my_response' => $page,'_serialize' => 'my_response']);
        $this->RequestHandler->renderAs($this, 'json');

    }


}
