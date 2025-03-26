<?php 

namespace Tests\Support\Models;

use App\Models\KodeUjianModel;
use CodeIgniter\Test\CIUnitTestCase;

class KodeUjianModelTest extends CIUnitTestCase
{
    protected $refresh = true;
    
    public function setUp(): void
    {
        parent::setUp();
        $this->model = new KodeUjianModel();
    }
    
    // Test insert data
    public function testInsertKodeUjian()
    {
        
        $result = $this->model->getUjian("1A");
        $this->assertEquals(1,$result);

    }
}
?>