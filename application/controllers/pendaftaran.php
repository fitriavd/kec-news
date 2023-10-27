<?php
class pendaftaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_mahasiswa');
    }

    function index()
    {
        $this->load->view('v_pendaftaran');
    }
}

function simpan_mhs()
{
    // Memastikan metode request adalah POST
    if ($this->input->server('REQUEST_METHOD') === 'POST') {
        // Mengambil data dari form
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $confirm_password = $this->input->post('confirm-password');

        // Lakukan validasi data jika diperlukan
        if ($password !== $confirm_password) {
            // Password tidak cocok, bisa melakukan redirect atau memberikan pesan error
            echo "Password confirmation does not match.";
            return;
        }

        // Load model jika diperlukan
        $this->load->model('M_pendaftaran');

        // Panggil fungsi di model untuk menyimpan data ke database
        $result = $this->M_pendaftaran->simpan_mhs($nim, $nama, $email, $password);

        if ($result) {
            // Jika berhasil menyimpan data, arahkan ke halaman login
            redirect('v_login'); // Asumsi halaman login memiliki URL 'login'
        } else {
            // Jika gagal menyimpan data, berikan pesan error atau redirect ke halaman yang sesuai
            echo "Failed to save data to the database.";
        }
    } else {
        // Jika metode request bukan POST, bisa berikan pesan error atau redirect ke halaman yang sesuai
        echo "Invalid request method.";
    }
}
