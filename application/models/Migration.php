<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration extends CI_Model{

	function __construct(){
		//
	}


	function migrate(){

		$this->load->dbforge();

		// --------------- Create users_tbl -------------------

		$fields = array(
			'Id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE
				),
			'userName' => array(
				'type' => 'VARCHAR',
				'constraint' => 55,
				),
			'password' => array(
				'type' => 'VARCHAR',
				'constraint' => 100
				),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => 100
				),
			'userLevel' => array(
				'type' => 'INT',
				'constraint' => 5
				),
			'activate' => array(
				'type' => 'INT',
				'constraint' => 5
				),
			);
		$this->dbforge->add_key('Id',TRUE);
		$this->dbforge->add_field($fields);
		$this->dbforge->create_table('users_tbl',TRUE);

		// ----------------------------------------------

		$num_row = $this->db->count_all_results('users_tbl');
		if($num_row < 1){
			$insert = array(
				'userName' => 'system',
				'password' => md5(123456),
				'name' => 'System Administrator',
				'userLevel' => 1,
				'activate' => 1
				);
			$this->db->insert('users_tbl',$insert);
		}

		// --------------- Create blocks_tbl --------------

		$fields_block = array(
			'Id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE
				),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				),
			'note' => array(
				'type' => 'VARCHAR',
				'constraint' => 200
				),
			'file' => array(
				'type' => 'VARCHAR',
				'constraint' => 100
				),
			'type' => array(
				'type' => 'VARCHAR',
				'constraint' => 22
				),
			'relatedId' => array(
				'type' => 'INT',
				'constraint' => 5
				),
			'relatedLink' => array(
				'type' => 'INT',
				'constraint' => 5
				),
			'layout' => array(
				'type' => 'INT',
				'constraint' => 55
				),
			);

		$this->dbforge->add_key('Id',TRUE);
		$this->dbforge->add_field($fields_block);
		$this->dbforge->create_table('blocks_tbl',TRUE);

		// ----------------------------------------------

		if(!file_exists('./application/views/blocks/main_menu.php')){
			$code = read_file('./application/views/backend/menu.php');
			$code = str_replace('variable','nav_relatedId',$code);
			write_file('./application/views/blocks/main_menu.php',$code,'w');
		}

		$block_row = $this->db->count_all_results('blocks_tbl');
		if($block_row < 1){
			$insert_block = array(
				'name' => 'Main menu',
				'note' => 'System main menu',
				'file' => 'main_menu',
				'type' => 'menu',
				'relatedId' => 1,
				'relatedLink' => 0,
				'layout' => 3
				);
			$this->db->insert('blocks_tbl',$insert_block);
		}

		// --------------- Create carousel_tbl --------------

		$fields_carousel = array(
			'Id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE
				),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => 100
				),
			'note' => array(
				'type' => 'VARCHAR',
				'constraint' => 200
				),
			'type' => array(
				'type' => 'INT',
				'constraint' => 5
				),
			'blockId' => array(
				'type' => 'INT',
				'constraint' => 5
				),
			);

		$this->dbforge->add_key('Id',TRUE);
		$this->dbforge->add_field($fields_carousel);
		$this->dbforge->create_table('carousel_tbl',TRUE);

		// ----------------------------------------------

		// --------------- Create carousel_img_tbl --------------

		$fields_carousel_img = array(
			'Id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE
				),
			'path' => array(
				'type' => 'VARCHAR',
				'constraint' => 200,
				),
			'carouselId' => array(
				'type' => 'INT',
				'constraint' => 5
				),
			);

		$this->dbforge->add_key('Id',TRUE);
		$this->dbforge->add_field($fields_carousel_img);
		$this->dbforge->create_table('carousel_img_tbl',TRUE);

		// ----------------------------------------------

		// --------------- Create Content_tbl --------------

		$fields_content = array(
			'Id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE
				),
			'title' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				),
			'summary' => array(
				'type' => 'VARCHAR',
				'constraint' => 200
				),
			'text' => array(
				'type' => 'TEXT'
				),
			'link' => array(
				'type' => 'INT',
				'constraint' => 5
				),
			'createdUserId' => array(
				'type' => 'INT',
				'constraint' => 5
				),
			'createdDate' => array(
				'type' => 'INT',
				'constraint' => 22
				),
			'publishedDate' => array(
				'type' => 'INT',
				'constraint' => 22
				),
			'published' => array(
				'type' => 'INT',
				'constraint' => 5
				),
			'frontPage' => array(
				'type' => 'INT',
				'constraint' => 5
				),
			'showDate' => array(
				'type' => 'INT',
				'constraint' => 5
				),
			'blockId' => array(
				'type' => 'INT',
				'constraint' => 5
				),
			'filterId' => array(
				'type' => 'INT',
				'constraint' => 5
				),
			'contentTypeId' => array(
				'type' => 'INT',
				'constraint' => 5
				)
			);

		$this->dbforge->add_key('Id',TRUE);
		$this->dbforge->add_field($fields_content);
		$this->dbforge->create_table('content_tbl',TRUE);

		// ----------------------------------------------

		// --------------- Create content_type_tbl --------------

		$fields_content_type = array(
			'Id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE
				),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => 200,
				),
			'note' => array(
				'type' => 'VARCHAR',
				'constraint' => 200,
				),
			'relatedLink' => array(
				'type' => 'INT',
				'constraint' => 5
				),
			'filterId' => array(
				'type' => 'INT',
				'constraint' => 5
				),
			'relatedBlock' => array(
				'type' => 'INT',
				'constraint' => 8
				),
			);

		$this->dbforge->add_key('Id',TRUE);
		$this->dbforge->add_field($fields_content_type);
		$this->dbforge->create_table('content_type_tbl',TRUE);

		// ----------------------------------------------

		$contentType_row = $this->db->count_all_results('content_type_tbl');
		if($contentType_row < 1){
			$insert_basicPage = array(
				'name' => 'Add Content',
				'note' => 'To Create Content',
				'relatedLink' => 0,
				'filterId' => 0
				);
			$this->db->insert('content_type_tbl',$insert_basicPage);
		}

		// --------------- Create menu_tbl --------------

		$fields_menu = array(
			'Id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE
				),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => 200,
				),
			'note' => array(
				'type' => 'VARCHAR',
				'constraint' => 200
				),
			'blockId' => array(
				'type' => 'INT',
				'constraint' => 5
				),
			);

		$this->dbforge->add_key('Id',TRUE);
		$this->dbforge->add_field($fields_menu);
		$this->dbforge->create_table('menu_tbl',TRUE);

		// ----------------------------------------------

		$menu_row = $this->db->count_all_results('menu_tbl');
		if($menu_row < 1){
			$insert_menu = array(
				'name' => 'Main Menu',
				'note' => 'System main menu',
				'blockId' => 1
				);
			$this->db->insert('menu_tbl',$insert_menu);
		}

		// --------------- Create link_structure_tbl --------------

		$fields_link_structure = array(
			'Id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE
				),
			'sort' => array(
				'type' => 'INT',
				'constraint' => 5
				),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => 200,
				),
			'type' => array(
				'type' => 'VARCHAR',
				'constraint' => 200,
				),
			'menuId' => array(
				'type' => 'INT',
				'constraint' => 5
				),
			'mainMenu' => array(
				'type' => 'INT',
				'constraint' => 5
				),
			'note' => array(
				'type' => 'VARCHAR',
				'constraint' => 200
				),
			'img_path' => array(
				'type' => 'VARCHAR',
				'constraint' => 200,
				),
			);

		$this->dbforge->add_key('Id',TRUE);
		$this->dbforge->add_field($fields_link_structure);
		$this->dbforge->create_table('link_structure_tbl',TRUE);

		// ----------------------------------------------

		$link_row = $this->db->count_all_results('link_structure_tbl');
		if($link_row < 1){
			$insert_link = array(
				'sort' => 1,
				'name' => 'Home',
				'type' => 'Main',
				'menuId' => 1,
				'note' => 'system created',
				'img_path' => 'null'
				);
			$this->db->insert('link_structure_tbl',$insert_link);
		}

		// --------------- Create slogam_tbl --------------

		$fields_slogam = array(
			'Id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE
				),
			'logo' => array(
				'type' => 'VARCHAR',
				'constraint' => 200,
				),
			'slogam' => array(
				'type' => 'VARCHAR',
				'constraint' => 200
				),
			);

		$this->dbforge->add_key('Id',TRUE);
		$this->dbforge->add_field($fields_slogam);
		$this->dbforge->create_table('slogam_tbl',TRUE);

		// ----------------------------------------------

		$slogam_row = $this->db->count_all_results('slogam_tbl');
		if($slogam_row < 1){
			$insert_slogam = array(
				'logo' => 'asset/system_img/logo.png',
				'slogam' => 'Ignite Source'
				);
			$this->db->insert('slogam_tbl',$insert_slogam);
		}

		// --------------- Create upload_img_tbl --------------

		$fields_upload = array(
			'Id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE
				),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => 200,
				),
			'path' => array(
				'type' => 'VARCHAR',
				'constraint' => 200
				),
			);

		$this->dbforge->add_key('Id',TRUE);
		$this->dbforge->add_field($fields_upload);
		$this->dbforge->create_table('upload_img_tbl',TRUE);

		// ----------------------------------------------

		// --------------- Create layout_tbl --------------

		$fields_layout = array(
			'Id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE
				),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => 200,
				),
			);

		$this->dbforge->add_key('Id',TRUE);
		$this->dbforge->add_field($fields_layout);
		$this->dbforge->create_table('layout_tbl',TRUE);

		// ----------------------------------------------

		// ******** Inserting Layout Data **********

		$menu_row = $this->db->count_all_results('layout_tbl');
		if($menu_row < 1){
			$layouts = layout();
			foreach($layouts as $layout){
				$insert_layout = array(
					'name' => $layout
					);
				$this->db->insert('layout_tbl',$insert_layout);
			}
		}

		// ----------------------------------------------

		// --------------- content_items_tbl --------------

		$fields_items = array(
			'Id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE
				),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => 200
				),
			'machine' => array(
				'type' => 'VARCHAR',
				'constraint' => 20
				),
			'note' => array(
				'type' => 'VARCHAR',
				'constraint' => 200
				),
			'type' => array(
				'type' => 'VARCHAR',
				'constraint' => 50
				),
			'required' => array(
				'type' => 'INT',
				'constraint' => 5
				),
			'contentTypeId' => array(
				'type' => 'INT',
				'constraint' => 5
				),
			);

		$this->dbforge->add_key('Id',TRUE);
		$this->dbforge->add_field($fields_items);
		$this->dbforge->create_table('content_items_tbl',TRUE);

		// ----------------------------------------------

		// ******** Inserting Layout Data **********

		$item_row = $this->db->count_all_results('content_items_tbl');
		if($item_row < 1){
			$insert_item1 = array(
				'name' => 'Title',
				'machine' => 'title',
				'note' => 'Input for Title',
				'type' => 'title',
				'required' => 1,
				'contentTypeId' => 1
				);
			$this->db->insert('content_items_tbl',$insert_item1);

			$insert_item2 = array(
				'name' => 'Summary',
				'machine' => 'summary',
				'note' => 'Input for Summary',
				'type' => 'summary',
				'required' => 0,
				'contentTypeId' => 1
				);
			$this->db->insert('content_items_tbl',$insert_item2);

			$insert_item3 = array(
				'name' => 'Body',
				'machine' => 'body',
				'note' => 'Input for Body Text',
				'type' => 'body',
				'required' => 1,
				'contentTypeId' => 1
				);
			$this->db->insert('content_items_tbl',$insert_item3);
		}

		// ----------------------------------------------

		// --------------- Create items_type_tbl --------------

		$fields_item = array(
			'Id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE
				),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => 200,
				),
			'machine' => array(
				'type' => 'VARCHAR',
				'constraint' => 200
				),
			);

		$this->dbforge->add_key('Id',TRUE);
		$this->dbforge->add_field($fields_item);
		$this->dbforge->create_table('items_type_tbl',TRUE);

		// ----------------------------------------------

		// ******** Inserting Items Data **********

		$item_row = $this->db->count_all_results('items_type_tbl');
		if($item_row < 1){
			$insert_item1 = array(
				'name' => 'Title',
				'machine' => 'title'
				);
			$this->db->insert('items_type_tbl',$insert_item1);
			$insert_item2 = array(
				'name' => 'Summary',
				'machine' => 'summary'
				);
			$this->db->insert('items_type_tbl',$insert_item2);
			$insert_item3 = array(
				'name' => 'Body Text',
				'machine' => 'body'
				);
			$this->db->insert('items_type_tbl',$insert_item3);
			$insert_item4 = array(
				'name' => 'Download',
				'machine' => 'download'
				);
			$this->db->insert('items_type_tbl',$insert_item4);
		}

		// ----------------------------------------------

		// *************** End Of Initializing *****************
	}

}	