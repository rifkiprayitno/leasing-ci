<?php 
class Users extends MX_Controller
{
    
    function __construct()
    {
        parent::__construct();
    }
 
    function index()
    {
        $data['title'] = 'index | users';
        $data['breadcrumb'] = array(
                            "/"         => "Home",
                            "/bilang"   => "Homebilaheng",
                            "/seu"      => "Homebilahengseu"
                        );
        $data['breadcrumb_active'] = 'Users';


        $data['content'] = 'daftar list users akses';
        $page = 'users/v_show'; //panggil view untuk users di lasing-ci/applications/modules/users/views/v_show/php

        echo modules::run('template/loadview', $data, $page);
    }
}
?>