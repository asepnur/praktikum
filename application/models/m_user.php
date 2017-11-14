<?
    class m_user extends CI_Model{

        public function __construct(){
            $this->load->database();
        }
        public function get($id = null){
            if($id != null){
                $perintah = $this->db->get_where('users', ['id'=>$id]);
                return $perintah->result_array();
            }
            $perintah = $this->db->get('users');
            return $perintah->result_array();
        }
        public function auth($email, $password){
            $password_query = md5($password);
            $result = $this->db->get_where('users',['email' =>$email, 'password'=>$password_query]);
            return $result->result_array();
        }
    }