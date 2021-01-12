<?php
namespace App\Model\Behavior;

class Page{
    public $data;
    public $numberOfElements;
    public $currentPage;
    public $pageSize;
    public $pagesCount;
    public $isLast;

    function __construct($data,$numberOfElements,$currentPage,$pageSize) {
        $this->data = $data;
        $this->numberOfElements = $numberOfElements;
        $this->currentPage = $currentPage;
        $this->pageSize = $pageSize;
        $this->pagesCount = ceil($numberOfElements/$pageSize);
        $this->isLast = $this->currentPage >= $this->pagesCount;
    }

}
