<?php
$config = array(

	'registrasi' => array(
		array(
			'field' => 'nama',
			'label' => 'Nama',
			'rules' => 'required',
			'errors'=> array(
				'required' 	=> '%s harus diisi.',
			)
		),
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
	),

	'registrasi_p' => array(
		array(
			'field' => 'nama',
			'label' => 'Nama',
			'rules' => 'required',
			'errors'=> array(
				'required' 	=> '%s harus diisi.',
			)
		),
		array(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'valid_email',
			'errors'=> array(
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
	),

	'form_barang' => array(
		array(
			'field' => 'barang_nama',
			'label' => 'Nama Barang',
			'rules' => 'required',
			'errors'=> array(
				'required' 	=> '%s harus diisi.'
			)
		),
		array(
			'field' => 'harga',
			'label' => 'Harga',
			'rules' => 'required|integer',
			'errors'=> array(
				'required' 	=> '%s harus diisi.',
				'integer'	=> '%s harus menggunakan bilangan bulat'
			)
		),
		array(
			'field' => 'insentif',
			'label' => 'Insentif',
			'rules' => 'required|numeric|integer',
			'errors'=> array(
				'required' 	=> '%s harus diisi.',
				'numeric'	=> '%s isi dengan angka!',
				'integer'	=> '%s isi denga bilangan bulat'
			)
		),
		array(
			'field' => 'detail',
			'label' => 'Detail Barang',
			'rules' => 'required|min_length[14]',
			'errors'=> array(
				'required' 	=> '%s harus diisi.',
				'min_length'=> '%s minimal 14 karakter detail'
			)
		)			
	),

	'form_aplikasi' => array(
		array(
			'field' => 'aplikasi_kode',
			'label' => 'Kode Aplikasi',
			'rules' => 'required',
			'errors'=> array(
				'required' 	=> '%s harus diisi.'
			)
		),
		array(
			'field' => 'barang',
			'label' => 'Barang',
			'rules' => 'required',
			'errors'=> array(
				'required' 	=> '%s harus diisi.'
			)
		),
		array(
			'field' => 'user',
			'label' => 'Member',
			'rules' => 'required',
			'errors'=> array(
				'required' 	=> '%s harus diisi.',
			)
		),
		array(
			'field' => 'dp',
			'label' => 'Down Payment',
			'rules' => 'required|min_length[4]',
			'errors'=> array(
				'required' 	=> '%s harus diisi.',
				'min_length'=> '%s minimal 4 digit dp'
			)
		),
		array(
			'field' => 'angsuran',
			'label' => 'Angsuran',
			'rules' => 'required|min_length[3]',
			'errors'=> array(
				'required' 	=> '%s harus diisi.',
				'min_length'=> '%s minimal 4 digit angka'
			)
		),
		array(
			'field' => 'tenor',
			'label' => 'Tenor',
			'rules' => 'required|min_length[1]|max_length[2]',
			'errors'=> array(
				'required' 	=> '%s harus diisi.',
				'min_length'=> '%s minimal 1 digit tenor',
				'max_length'=> '%s minimal 2 digit tenor'
			)
		),
		array(
			'field' => 'awal_tempo',
			'label' => 'Awal Tempo',
			'rules' => 'required',
			'errors'=> array(
				'required' 	=> '%s harus diisi.',
			)
		),
		array(
			'field' => 'jatuh_tempo',
			'label' => 'Jatuh Tempo',
			'rules' => 'required',
			'errors'=> array(
				'required' 				=> '%s harus diisi.'
			)
		)			
	),

	'form_angsuran' => array(
		array(
			'field' => 'nomor_cari',
			'label' => 'kode aplikasi',
			'rules' => 'required',
			'errors'=> array(
				'required' 	=> '%s harus diisi.'
			)
		),
		array(
			'field' => 'select_tenor',
			'label' => 'nomor angsura',
			'rules' => 'required|integer',
			'errors'=> array(
				'required' 	=> '%s harus dipilih.',
				'integer'	=> '%s harus menggunakan bilangan bulat'
			)
		),
		array(
			'field' => 'bayar',
			'label' => 'nominal pembayaran',
			'rules' => 'required|numeric|integer',
			'errors'=> array(
				'required' 	=> '%s harus diisi.',
				'numeric'	=> '%s isi dengan angka!',
				'integer'	=> '%s isi dengan bilangan bulat'
			)
		),
		array(
			'field' => 'tgl_bayar',
			'label' => 'tanggal pembayaran',
			'rules' => 'required|min_length[6]',
			'errors'=> array(
				'required' 	=> '%s harus diisi.',
				'min_length'=> '%s minimal 6 karakter (dd/mm/yyyy)'
			)
		)			
	),

);