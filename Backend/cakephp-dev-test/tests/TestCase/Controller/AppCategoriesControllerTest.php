<?php
namespace App\Test\TestCase\Controller;

use App\Controller\AppCategoriesController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\AppCategoriesController Test Case
 *
 * @uses \App\Controller\AppCategoriesController
 */
class AppCategoriesControllerTest extends TestCase
{
    use IntegrationTestTrait;

    // /**
    //  * Fixtures
    //  *
    //  * @var array
    //  */
    // public $fixtures = [
    //     'app.AppCategories',
    // ];

    /**
     * Test getAllCategories method
     *
     * @return void
     */
    public function testGetAllCategorieFirstPage()
    {
        $this->configRequest([
            'headers' => ['API-key' => 'DlKlimeUB8b12vbIIwDKtFR5Pk7aKDigjNsqRdSh']
        ]);
        $this->get('/api/categories');
        $this->expectOutputString('');
        $resultInJson = json_decode($this->_response);
        $dataCount = count($resultInJson->data);
        $this->assertTrue($dataCount == 10);
    }


}
