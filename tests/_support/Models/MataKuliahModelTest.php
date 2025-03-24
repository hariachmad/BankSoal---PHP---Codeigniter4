<?php 

namespace Tests\Support\Models;

use CodeIgniter\Test\CIUnitTestCase;
use App\Models\MataKuliahModel;

class MataKuliahModelTest extends CIUnitTestCase
{
    protected $refresh = true;
    
    public function setUp(): void
    {
        parent::setUp();
        $this->model = new MataKuliahModel();
    }
    
    // Test insert data
    public function testInsertMataKuliah()
    {
        $data = [
            'nama_mata_kuliah' => 'logika_algoritma',
            'kode_mata_kuliah' => 'A1',
        ];

        $id = $this->model->insert($data);
        $this->assertIsInt($id);
        
        $result = $this->model->getMataKuliah(1);
        $this->assertEquals("logika_algoritma",$result["nama_mata_kuliah"]);
    }
}
?>