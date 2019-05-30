<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	class Security_super extends CI_Model
		{
			public function get_security_pusat($level)
			{
				if(!$this->db->get_where('admin', array('level' => $level))->row())
					{
						$this->session->sess_destroy();
						$this->session->set_flashdata('info', 'anda tidak di izinkan');
						redirect(base_url('admin'));
					}
			}

		}