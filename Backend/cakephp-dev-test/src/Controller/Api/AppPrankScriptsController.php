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
        $params = $this->request->getQuery();
        $page = $params['page'] ?? 1;
        $limit = $params['limit'] ?? 10;
        $slug = $params['slug'] ?? '';
        $conditions = $slug === '' ? [] : ['slug'=>$slug];
        $appScripts = $this->paginate($this->AppPrankScripts,['limit'=>$limit,'page'=>$page,'conditions'=> $conditions]);
        $appScriptsCount = $this->AppPrankScripts->find()->count();
        $page = new Page($appScripts,$appScriptsCount,$page,$limit);
        $this->set(['my_response' => $page,'_serialize' => 'my_response']);
        $this->RequestHandler->renderAs($this, 'json');
    }

}
