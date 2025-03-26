<?php 

namespace Tests\Support\Models;

use CodeIgniter\Test\CIUnitTestCase;
use App\Models\CountdownModel;

class CountdownModelTest extends CIUnitTestCase
{
    protected $refresh = true;
    
    public function setUp(): void
    {
        parent::setUp();
        $this->model = new CountdownModel();
    }
    
    // Test insert data
    public function testInsertCountdown()
    {        
        $result = $this->model->getCountdown(1);
        $this->assertEquals(60,$result);
    }
}
?>