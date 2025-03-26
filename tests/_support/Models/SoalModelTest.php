<?php 

namespace Tests\Support\Models;

use CodeIgniter\Test\CIUnitTestCase;
use App\Models\SoalModel;

class SoalModelTest extends CIUnitTestCase
{
    protected $refresh = true;
    
    public function setUp(): void
    {
        parent::setUp();
        $this->model = new SoalModel();
    }
    
    // Test insert data
    public function testGetSoal()
    {        
        $result = $this->model->getSoal(1);
        $this->assertEquals("jawaban_a",$result["jawaban_benar"]);
    }
}
?>