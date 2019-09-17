<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Auth extends CI_Controller {

		public function sign_in()
		{
			$data['google_url'] = $this->google->get_login_url();

			$this->load->view('layout/header');
			$this->load->view('auth/login', $data);
			$this->load->view('layout/script');
		}

		public function form_login()
		{
			$this->load->view('layout/header');
			$this->load->view('auth/form_login');
			$this->load->view('layout/script');
		}

		public function form_daftar()
		{
			$this->load->view('layout/header');
			$this->load->view('auth/form_daftar');
			$this->load->view('layout/script');
		}

		public function proses_login()
		{
			$table = 'user';

			$data['email'] = $this->input->post('email');
			$data['password'] = md5($this->input->post('password'));

			$cek_login = $this->M_gaptek->get_where($table, $data)->num_rows();

			if ($cek_login == 0) {

				$pesan['login-gagal'] = 'username atau passwordnya salah gan';
				$this->session->set_flashdata($pesan);

				redirect('form-login');
			}

			elseif($cek_login == 1) {

				$cek_login_gan = $this->M_gaptek->get_where($table, $data)->result();

				foreach ($cek_login_gan as $user):

					$userdata['id'] = $user->id_user;
					$userdata['email'] = $user->email;
					$userdata['username'] = $user->nama;
					$userdata['password'] = $user->password;
					$userdata['platform'] = $user->platform;
					$userdata['level'] = $user->level;
					$userdata['join_at'] = $user->join_at;
					$userdata['foto'] = $user->foto;
					$userdata['verifikasi'] = $user->verifikasi;

				endforeach;

				$jam = date('H:i');

				$userdata['status'] = 'online';
				$pesan['waktu'] = $jam;
				$pesan['new-user'] = 'Selamat datang '.$userdata['username'].' :)';

				$this->session->set_flashdata($pesan);
				$this->session->set_userdata($userdata);
				redirect('dashboard');
			}
		}

		public function proses_daftar()
		{
			$password = $this->input->post('password');
			$fpassword =$this->input->post('fpassword');

			if ($password != $fpassword) {

				$pesan['dissmatch-pass'] = 'password ente yang bener yang mana nih?';
				$this->session->set_flashdata($pesan);
				redirect('form-daftar');
			}

			elseif ($password == $fpassword) {

				$username = $this->form_validation->set_rules('username','username','required');
				$email = $this->form_validation->set_rules('email','email','required');
				$password = $this->form_validation->set_rules('password','password','required');

				if ($this->form_validation->run() == FALSE) {

					$pesan['dissmatch-input'] = 'tidak dapat di proses, silahkan lengkapi dulu form nya gan';
					$this->session->set_flashdata($pesan);
					redirect('form-daftar');
				}

				elseif ($this->form_validation->run() == TRUE) {

					$table = 'user';

					$data['id_user'] = md5($this->input->post('email'));
					$data['nama'] = $this->input->post('username');
					$data['email'] = $this->input->post('email');
					$data['password'] = md5($this->input->post('password'));
					$data['platform'] = 'form';
					$data['level'] = 'guest';
					$data['join_at'] = date('d/M/Y');
					$data['verifikasi'] = 'unverified';
					$data['foto'] = 'user.png';

					$cek_kntl_username = preg_match('/(kontol)/', $this->input->post('username'));
					$cek_mmk_username = preg_match('/(memek)/', $this->input->post('username'));
					$cek_jmbt_username = preg_match('/(jembut)/', $this->input->post('username'));
					$cek_ngentot_username = preg_match('/(ngentot)/', $this->input->post('username'));
					$cek_ngewe_username = preg_match('/(ngewe)/', $this->input->post('username'));
					$cek_lonte_username = preg_match('/(lonte)/', $this->input->post('username'));
					$cek_jablay_username = preg_match('/(jablay)/', $this->input->post('username'));
					$cek_ttt_username = preg_match('/(titit)/', $this->input->post('username'));

					if ($cek_kntl_username == TRUE) {

						$pesan['kalimat-terlarang'] = 'maap maap nih, kami sangat menentang orang yang menggunakan kata kotor, khususnya ente gan. <b>'.$this->input->post('username').'</b>';
						$this->session->set_flashdata($pesan);
						redirect('form-daftar');
					}
					if ($cek_mmk_username == TRUE) {

						$pesan['kalimat-terlarang'] = 'maap maap nih, kami sangat menentang orang orang yang menggunakan kata kotor, khususnya ente gan. <b>'.$this->input->post('username').'</b>';
						$this->session->set_flashdata($pesan);
						redirect('form-daftar');
					}
					if ($cek_jmbt_username == TRUE) {

						$pesan['kalimat-terlarang'] = 'maap maap nih, kami sangat menentang orang orang yang menggunakan kata kotor, khususnya ente gan. <b>'.$this->input->post('username').'</b>';
						$this->session->set_flashdata($pesan);
						redirect('form-daftar');
					}
					if ($cek_ngentot_username == TRUE) {

						$pesan['kalimat-terlarang'] = 'maap maap nih, kami sangat menentang orang orang yang menggunakan kata kotor, khususnya ente gan. <b>'.$this->input->post('username').'</b>';
						$this->session->set_flashdata($pesan);
						redirect('form-daftar');
					}
					if ($cek_ngewe_username == TRUE) {

						$pesan['kalimat-terlarang'] = 'maap maap nih, kami sangat menentang orang orang yang menggunakan kata kotor, khususnya ente gan. <b>'.$this->input->post('username').'</b>';
						$this->session->set_flashdata($pesan);
						redirect('form-daftar');
					}
					if ($cek_lonte_username == TRUE) {

						$pesan['kalimat-terlarang'] = 'maap maap nih, kami sangat menentang orang orang yang menggunakan kata kotor, khususnya ente gan. <b>'.$this->input->post('username').'</b>';
						$this->session->set_flashdata($pesan);
						redirect('form-daftar');
					}
					if ($cek_jablay_username == TRUE) {

						$pesan['kalimat-terlarang'] = 'maap maap nih, kami sangat menentang orang orang yang menggunakan kata kotor, khususnya ente gan. <b>'.$this->input->post('username').'</b>';
						$this->session->set_flashdata($pesan);
						redirect('form-daftar');
					}
					if ($cek_ttt_username == TRUE) {

						$pesan['kalimat-terlarang'] = 'maap maap nih, kami sangat menentang orang orang yang menggunakan kata kotor, khususnya ente gan. <b>'.$this->input->post('username').'</b>';
						$this->session->set_flashdata($pesan);
						redirect('form-daftar');
					}

					$this->M_gaptek->insert($table, $data);
					$pesan['berhasil'] = 'akun anda sudah terdaftar, silahkan login';
					$this->session->set_flashdata($pesan);
					redirect('form-login');
				}
			}
		}
		public function google_api()
		{
			$data_google = $this->google->validate();
			$table = 'user';

			$record['email'] = $data_google['email'];

			$cek_login_gan = $this->M_gaptek->get_where($table, $record)->num_rows();
			$cek_login = $this->M_gaptek->get_where($table, $record)->result();

			if ($cek_login_gan == 0) {

				$data['id_user'] = $data_google['id'];
				$data['email'] = $data_google['email'];
				$data['nama'] = $data_google['name'];
				$data['platform'] = 'google';
				$data['level'] = 'guest';
				$data['password'] = md5($data_google['email']);
				$data['join_at'] = date('d/M/Y');
				$data['foto'] = 'google.png';
				$data['verifikasi'] = 'verified';

				$this->M_gaptek->insert($table, $data);

				redirect('google');
			}

			elseif($cek_login_gan == 1) {

				foreach ($cek_login as $user):

					$userdata['id'] = $user->id_user;
					$userdata['email'] = $user->email;
					$userdata['username'] = $user->nama;
					$userdata['password'] = $user->password;
					$userdata['platform'] = $user->platform;
					$userdata['level'] = $user->level;
					$userdata['join_at'] = $user->join_at;
					$userdata['foto'] = $user->foto;
					$userdata['verifikasi'] = $user->verifikasi;

				endforeach;

				$jam = date('H:i');

				$userdata['status'] = 'online';
				$pesan['waktu'] = $jam;
				$pesan['new-user'] = 'Selamat datang '.$userdata['username'].' :)';

				$this->session->set_flashdata($pesan);
				$this->session->set_userdata($userdata);
				redirect('dashboard');
			}
		}

		public function logout()
		{
			session_destroy();
			redirect('dashboard');
		}
	}
