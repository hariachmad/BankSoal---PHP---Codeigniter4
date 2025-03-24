<?php 

namespace Tests\Support\Models;

use CodeIgniter\Test\CIUnitTestCase;
use App\Models\UjianModel;

class UjianModelTest extends CIUnitTestCase
{
    protected $refresh = true;
    
    public function setUp(): void
    {
        parent::setUp();
        $this->model = new UjianModel();
    }
    
    // Test insert data
    public function testInsertUjian()
    {
        $data = [
            'nama_ujian' => 'ujian logika algoritma',
            'deskripsi_ujian' => 'Ujian Dilakukan Secara Online',
            'waktu_tutup_ujian' => '15:00:00',
            'waktu_buka_ujian' => '13:00:00',
            'durasi_ujian' => 120,
            'nilai_minimum_kelulusan'=> 70,
            'ruang_ujian' => 'AB1',
            'jumlah_soal' => 100,
            'random' => 0,
            'tunjukan_nilai'=> 1,
        ];

        $id = $this->model->insert($data);
        $this->assertIsInt($id);
        
        $result = $this->model->getUjian(1);
        $this->assertEquals("ujian logika algoritma",$result["nama_ujian"]);
    }
}
?>