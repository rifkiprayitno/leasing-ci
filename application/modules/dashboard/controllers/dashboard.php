<?php 

class Dashboard extends MX_Controller
{
	function index()
    {
    	$data['title'] = 'index | Dadhsboard';
    	

        $page = 'dashboard/new_dashboard';

        echo modules::run('new_template/loadview', $data, $page);
    }
}