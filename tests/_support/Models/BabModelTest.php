<?php 

namespace Tests\Support\Models;

use CodeIgniter\Test\CIUnitTestCase;
use App\Models\BabModel;

class BabModelTest extends CIUnitTestCase
{
    protected $refresh = true;
    
    public function setUp(): void
    {
        parent::setUp();
        $this->model = new BabModel();
    }
    
    // Test insert data
    public function testInsertBab()
    {        
        $result = $this->model->getBab(1);
        $this->assertEquals(1,$result["nomor_bab"]);
    }
}
?>