<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Userlog {

	protected $CI;

    // We'll use a constructor, as you can't directly call a function
    // from a property definition.
    public function __construct()
    {
            // Assign the CodeIgniter super-object
            $this->CI =& get_instance();

            $this->CI->load->dbforge();

            $this->CI->dbforge->add_field(array(
            	'logId' => array(
            		'type' => 'INT',
            		'constraint' => 8,
            		'auto_increment' => TRUE
            	),
            	'username' => array(
            		'type' => 'VARCHAR',
            		'constraint' => 255
            	),
            	'password' => array(
            		'type' => 'VARCHAR',
            		'constraint' => 255
            	),
            	'name' => array(
            		'type' => 'VARCHAR',
            		'constraint' => 255
            	),
            	'browser' => array(
            		'type' => 'VARCHAR',
            		'constraint' => 255,
            	),
            	'platform' => array(
            		'type' => 'VARCHAR',
            		'constraint' => 255,
            	),
            	'ip_address' => array(
            		'type' => 'VARCHAR',
            		'constraint' => 255,
            	),
            	'active' => array(
            		'type' => 'BOOLEAN'
            	),
            	'login_at' => array(
            		'type' => 'DATETIME',
            	),
            	'logout_at' => array(
            		'type' => 'DATETIME',
            		'null' => TRUE
            	)
            ));

            $this->CI->dbforge->add_key('logId', TRUE);
            $this->CI->dbforge->create_table('user_log_tbl', TRUE);
    }

    public function create_log($data){
    	$date = getDate();

    	$createDate = date('Y-m-d h:i:s', $date[0]);
    	$arr = array(
    		'username' => $data['username'],
    		'password' => $data['password'],
    		'name' => $data['name'],
    		'browser' => $this->CI->agent->browser(),
    		'platform' => $this->CI->agent->platform(),
    		'ip_address' => $this->CI->input->ip_address(),
    		'active' => true,
    		'login_at' => $createDate
    	);

    	$this->CI->db->insert('user_log_tbl', $arr);
    }

    public function logout($username){
    	$date = getDaet();
    	$logoutDate = date('Y-m-d h:i:s', $date[0]);

    	$this->CI->db->where('username', $username);
    	$this->CI->db->where('active', true);
    	$this->CI->db->update(['logout_at' => $logoutDate, 'active' => false]);
    }

    
}