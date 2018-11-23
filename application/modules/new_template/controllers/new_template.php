<?php
class New_template extends MX_Controller
{
    function __construct()
    {
     parent::__construct();
    }
    
    function loadview($data=NULL,$page = NULL)
    {
        $this->load->view('header',$data);  
        $this->load->view('left_panel',$data);
        $this->load->view('right_panel',$data);
        if (isset($data['breadcrumb'])) {
            $this->load->view('historian',$data); 
        } 
        // $this->load->view('v_content',$data); 
        if($page != NULL){
            $this->load->view($page,$data);
        } else {
           $this->load->view('v_content',$data);
        }
        $this->load->view('footer',$data);
    }

    function trial(){
        $this->load->view('index');
    }
}