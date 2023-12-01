<?php
class About extends Controller
{
    public function index($nama = 'sandhika', $pekerjaan = 'pekerjaan', $umur = 32)
    {

        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
        // echo "Halo nama saya $nama ssaya adalah seorang $pekerjaan, dan saya berumur $umur tahun";
    }
    public function page()
    {
        $data['judul'] = 'Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
