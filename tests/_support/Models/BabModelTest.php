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
        $data = [
            'nomor_bab' => 1,
            'nama_bab' => 'pendahuluan',
            'sub_cpmk' => 'ringkasan sebelum memulai ke pembahasan',
            'id_mata_kuliah' => 1
        ];

        $id = $this->model->insert($data);
        $this->assertIsInt($id);
        
        $result = $this->model->getBab(1);
        $this->assertEquals(1,$result["nomor_bab"]);
    }
}
?>