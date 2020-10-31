<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index($pas = 1)
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        if ($pas == 3) {
            return $data;
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->nilai();
        $this->add();
        $this->load->view('templates/footer');
    }


    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
    }


    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }


    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
    }
    public function add()
    {
        if (!$_POST == null) {
            $insert['Judul_Materi'] = $_POST['one'];
            $insert['Link_Materi'] = $_POST['two'];
            $insert['Active'] = 1;
            $this->db->insert('materi', $insert);
            redirect('/Admin');
        } else {

            $this->load->view('Class/new_materi');
        }
    }
    public function nilai()
    {
        if (!$_POST == null) {
            $data = array(
                'nilai' => $_POST['nilai']
            );
            $this->db->where('id', $_POST['id']);
            $this->db->update('Raport', $data);
            return redirect('user');
            // $this->db->set('nilai', $_POST['nilai']);
            // // $this->db->set('title', $title);
            // // $this->db->set('status', $status);
            // $this->db->where('id', $_POST['id']);
            // $this->db->update('Raport',$);
        }

        $this->db->select('*');
        $this->db->from('Raport');
        $this->db->join('materi', 'materi.id=Raport.id_tugas');
        $car = $this->db->get();
        $data['car'] = $car->result();
        $this->load->view('Class/nilai', $data);
    }
}
