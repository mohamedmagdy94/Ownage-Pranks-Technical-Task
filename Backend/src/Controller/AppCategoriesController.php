<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use App\Model\Behavior\PageResponse;

class AppCategoriesController extends AppController
{
    public function getCategories()
    {
        $params = $this->request->getQuery();
        $settings = [
            'limit' => $params['limit'] ?? 10,
            'page' => $params['page'] ?? 1,
            'conditions' => []
        ];
        if (isset($params['slug'])) {
            $settings['conditions']['slug'] = $params['slug'];
        }
        $categories = $this->paginate('AppCategories', $settings);
        $pagingParams = $this->Paginator->getPagingParams()['AppCategories'];
        $categoriesPage = new PageResponse($categories, $pagingParams);
        $this->set(['categories' => $categoriesPage, '_serialize' => 'categories']);
        $this->RequestHandler->renderAs($this, 'json');
    }
}
