<?php 

namespace Tests\Support\Models;

use CodeIgniter\Test\CIUnitTestCase;
use App\Models\KodeUsersModel;

class KodeUsersModelTest extends CIUnitTestCase
{
    protected $refresh = true;
    
    public function setUp(): void
    {
        parent::setUp();
        $this->model = new KodeUsersModel();
    }
    
    // Test insert data
    public function testInsertKodeUsers()
    {
        // $data = [
        //     'kode_ujian' => "1A",
        //     'id_users' => 1,
        // ];

        // $id = $this->model->insert($data);
        // $this->assertIsInt($id);
        
        $result = $this->model->getKode(1);
        $this->assertEquals("1A",$result);

    }
}
?>