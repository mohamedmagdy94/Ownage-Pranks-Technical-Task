<?php
namespace App\Controller\Api;

use App\Controller\AppController;
use App\Model\Behavior\Page;

/**
 * AppPrankScripts Controller
 *
 *
 * @method \App\Model\Entity\AppPrankScript[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AppPrankScriptsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function getAllScripts()
    {
        $page = $this->request->query['page'] ?? 1;
        $limit = $this->request->query['limit'] ?? 10;
        $slug = $this->request->query['slug'] ?? '';
        $conditions = $slug === '' ? [] : ['slug'=>$slug];
        $appScripts = $this->paginate($this->AppPrankScripts,['limit'=>$limit,'page'=>$page,'conditions'=> $conditions]);
        $appScriptsCount = $this->AppPrankScripts->find()->count();
        $page = new Page($appScripts,$appScriptsCount,$page,$limit);
        $this->set(['my_response' => $page,'_serialize' => 'my_response']);
        $this->RequestHandler->renderAs($this, 'json');
    }

}
