<?php

namespace App\Model\Behavior;

use Cake\Routing\Router;

class PageResponse
{
    public $data;
    public $totalCount;
    public $currentPage;
    public $pageSize;
    public $pagesCount;
    public $nextPageURL = null;
    public $prevPageURL = null;

    function __construct($pageData, $pagingOptions)
    {
        $this->data = $pageData;
        $this->totalCount = $pagingOptions['count'];
        $this->currentPage = $pagingOptions['page'];
        $this->pageSize = $pagingOptions['perPage'];
        $this->pagesCount = $pagingOptions['pageCount'];

        //Process Page
        $currentURL = Router::url(null, true);
        $currentURLParams = explode('?', $currentURL);
        $currentURLQueryParams = [];
        parse_str($currentURLParams[1] ?? '', $currentURLQueryParams);
        if ($this->currentPage < $this->pagesCount)
            $this->nextPageURL = $currentURLParams[0] . "?" .
                http_build_query(array_merge($currentURLQueryParams, ['page' => $this->currentPage + 1]));
        if ($this->currentPage > 1)
            $this->prevPageURL = $currentURLParams[0] . "?" .
                http_build_query(array_merge($currentURLQueryParams, ['page' => $this->currentPage - 1]));
    }
}
