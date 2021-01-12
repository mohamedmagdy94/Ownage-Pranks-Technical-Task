<?php
namespace App\Controller;

use App\Controller\AppController;

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
        $appPrankScripts = $this->paginate($this->AppPrankScripts);

        $this->set(compact('appPrankScripts'));
    }

}
