<?php
namespace App\Controller;

use App\Controller\AppController;

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
        $appCategories = $this->paginate($this->AppCategories);

        $this->set(compact('appCategories'));
    }


}
