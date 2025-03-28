<?php 

namespace Tests\Support\Models;

use CodeIgniter\Test\CIUnitTestCase;
use App\Models\AuthModel;

class AuthModelTest extends CIUnitTestCase
{
    protected $refresh = true;
    
    public function setUp(): void
    {
        parent::setUp();
        $this->model = new AuthModel();
    }
    
    // Test insert data
    public function testGetFullNameByUserName()
    {        
        $result = $this->model->getFullnameByUsername('hariachmad');
        $this->assertEquals('Hari Achmad',$result["fullname"]);
    }

    public function testVerifyPassword(){
        $result = $this->model->verifyPassword('hariachmad','Oper@ti0n');
        $this->assertTrue($result);
    }
}
?>