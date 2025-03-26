<?php 

namespace Tests\Support\Models;

use CodeIgniter\Test\CIUnitTestCase;
use App\Models\BabUntukUjianModel;

class BabUntukUjianModelTest extends CIUnitTestCase
{
    protected $refresh = true;
    
    public function setUp(): void
    {
        parent::setUp();
        $this->model = new BabUntukUjianModel();
    }
    
    // Test insert data
    public function testGetUjian()
    {        
        $result = $this->model->getBab(1);
        $this->assertEquals(1,$result[0]);
    }
}
?>