<?php 

namespace Tests\Support\Models;

use CodeIgniter\Test\CIUnitTestCase;
use App\Models\UserSoalUjianModel;

class UserSoalUjianModelTest extends CIUnitTestCase
{
    protected $refresh = true;
    
    public function setUp(): void
    {
        parent::setUp();
        $this->model = new UserSoalUjianModel();
    }
    
    // Test insert data
    public function testGetUjian()
    {        
        $result = $this->model->getSoalId(1);
        $this->assertEquals(1,$result[0]);
    }
}
?>