<?php 

namespace Tests\Support\Models;

use CodeIgniter\Test\CIUnitTestCase;
use App\Models\UsersModel;

class UsersModelTest extends CIUnitTestCase
{
    protected $refresh = true;
    
    public function setUp(): void
    {
        parent::setUp();
        $this->model = new UsersModel();
    }
    
    // Test insert data
    public function testInsertUjian()
    {
        $data = [
            "username"=> "hariachmad",
            "password_hash"=>"12345",
            "email"=>"hari08achmad@gmail.com",
            "role"=>"software engineer",
            "fullname"=>"Hari Achmad",
        ];

        $id = $this->model->insert($data);
        $this->assertIsInt($id);
        
        $result = $this->model->getUser(1);
        $this->assertEquals("hariachmad",$result["username"]);
    }
}
?>