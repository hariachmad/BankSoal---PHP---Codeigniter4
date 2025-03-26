<?php 

namespace Tests\Support\Models;

use CodeIgniter\Test\CIUnitTestCase;
use App\Models\UserNilaiModel;

class UserNilaiModelTest extends CIUnitTestCase
{
    protected $refresh = true;
    
    public function setUp(): void
    {
        parent::setUp();
        $this->model = new UserNilaiModel();
    }
    
    // Test insert data
    public function testGetNilai()
    {        
        $result = $this->model->getNilai(1,1);
        $this->assertEquals(80,$result["nilai"]);
    }
}
?>