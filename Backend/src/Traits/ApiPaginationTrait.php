<?php

namespace App\Traits;

use App\Model\Behavior\PageResponse;

trait ApiPaginationTrait
{
    function ApiPaginate($modelName, $settings)
    {
        $pageData = $this->paginate($modelName, $settings);
        $pagingParams = $this->Paginator->getPagingParams()[$modelName];
        $pageResponse = new PageResponse($pageData, $pagingParams);
        $this->set(['page' => $pageResponse, '_serialize' => 'page']);
        $this->RequestHandler->renderAs($this, 'json');
    }
}
