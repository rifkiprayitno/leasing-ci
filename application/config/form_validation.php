<?php
$config = array(
	'registrasi' => array(

		array(
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'required|min_length[6]',
			'errors'=> array(
				'required' 	=> '%s harus diisi.',
				'min_length'=> '%s minimal 6 karakter'
			)
		),
		array(
			'field' => 'konfirmasi_password',
			'label' => 'Konfirmasi Password',
			'rules' => 'required|matches[password]',
			'errors'=> array(
				'required' 	=> '%s harus diisi.',
				'matches'	=> '%s harus sesuai dengan password'
			)
		),
		array(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'required|valid_email',
			'errors'=> array(
				'required' 	=> '%s harus diisi.',
				'valid_email'=> '%s tidak valid!'
			)
		),
		array(
			'field' => 'no_hp',
			'label' => 'Nomor Handphone',
			'rules' => 'required|numeric|min_length[10]',
			'errors'=> array(
				'required' 	=> '%s harus diisi.',
				'numeric'	=> '%s isi dengan angka!',
				'min_length'=> '%s minimal 10 digit angka'
			)
		),
		array(
			'field' => 'no_ktp',
			'label' => 'Nomor KTP',
			'rules' => 'required|numeric|min_length[14]',
			'errors'=> array(
				'required' 	=> '%s harus diisi.',
				'numeric'	=> '%s isi dengan angka!',
				'min_length'=> '%s minimal 14 digit angka'
			)
		)					
		
	)
);