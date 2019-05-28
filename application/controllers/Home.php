<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    session_start();
    $this->load->model('Master');
    $this->load->library('form_validation');
  
  }


	public function index()
	{
    $data['posts'] = $this->Master->getlatestPosts();
    $data['posts1'] = $this->Master->getlatestPosts1();
    $data['posts2'] = $this->Master->getlatestPosts2();
    //echo '<pre>'; print_r($data['posts2'][0]); die();
    $this->load->view('home', $data);
	}

  public function blog()
  {   
      $this->load->view('sanitary/blog');
  }

  public function product($id = NULL,$table)
	{ 
      $data['posts'] = $this->Master->get_product($id,$table);
      $this->load->view('product', $data);
	}

  function delete($id,$table)
    {
      
       $this->Master->deletedata($id,$table);
          redirect('/login/dashboard/'.$table.'/d');
    }

  public function urinals_view()
  { 
    $table = 'urinal';
    $all = $this->Master->test2($table);
    $data['product'] = $all;
    $this->load->view('product_page/urinal',$data);
  }
  public function onepiece_view()
  { 
    $table = 'onepiece';
    $all = $this->Master->test2($table);
    $data['product'] = $all;
    $this->load->view('product_page/onepiece', $data);
  }
  public function washbasin_pe_view()
  { 
    $table = 'washbasin_pe';
    $all = $this->Master->test2($table);
    $data['product'] = $all;
    $this->load->view('product_page/washbasin_pe', $data);
  }
  public function tabletop_view()
  { 
    $table = 'tabletop';
    $all = $this->Master->test2($table);
    $data['product'] = $all;
    $this->load->view('product_page/tabletop', $data);
  }
  public function washbasin_view()
  { 
    $table = 'washbasin';
    $all = $this->Master->test2($table);
    $data['product'] = $all;
    //print_r($all); die();
    $this->load->view('product_page/washbasin', $data);
  }
  public function watercloset_view()
  { 
    $table = 'watercloset';
    $all = $this->Master->test2($table);
    $data['product'] = $all;
    $this->load->view('product_page/watercloset', $data);
  }
  public function seatcovers_view()
  { 
    $table = 'seatcovers';
    $all = $this->Master->test2($table);
    $data['product'] = $all;
    $this->load->view('product_page/seatcovers', $data);
  }
  public function pan_view()
  { 
    $table = 'pan';
    $all = $this->Master->test2($table);
    $data['product'] = $all;
    $this->load->view('product_page/pan');
  }
   public function couplesuite()
  { 
    $table = 'couplesuite';
    $all = $this->Master->test2($table);
    $data['product'] = $all;
    $this->load->view('product_page/couplesuite', $data);
  }

  // Navigation Menu For Designer Collection
  
  public function vitrassa()
  { 
    $table = 'vitrassa';
    $all = $this->Master->test2($table);
    $data['product'] = $all;
    $this->load->view('designer_collection/vitrassa', $data);
  }
  public function mattvitrassa_series()
  { 
    $table = 'mattvitrassa_series';
    $all = $this->Master->test2($table);
    $data['product'] = $all;
    $this->load->view('designer_collection/mattvitrassa_series', $data);
  }
  public function vitrassa_series()
  { 
    $table = 'vitrassa_series';
    $all = $this->Master->test2($table);
    $data['product'] = $all;
    $this->load->view('designer_collection/vitrassa_series', $data);
  }
  public function new_designer_series()
  { 
    $table = 'new_designer_series';
    $all = $this->Master->test2($table);
    $data['product'] = $all;
    $this->load->view('designer_collection/new_designer_series', $data);
  }
  public function rustic_series()
  { 
    $table = 'rustic_series';
    $all = $this->Master->test2($table);
    $data['product'] = $all;
    $this->load->view('designer_collection/rustic_series', $data);
  }
  public function vitrasa_washbasin()
  { 
    $table = 'vitrasa_washbasin';
    $all = $this->Master->test2($table);
    $data['product'] = $all;
    $this->load->view('designer_collection/vitrasa_washbasin', $data);
  }
  public function designer_tabletop()
  { 
    $table = 'designer_tabletop';
    $all = $this->Master->test2($table);
    $data['product'] = $all;
    $this->load->view('designer_collection/designer_tabletop', $data);
  }
  public function dual_color_one_piece()
  { 
    $table = 'dual_color_one_piece';
    $all = $this->Master->test2($table);
    $data['product'] = $all;
    $this->load->view('designer_collection/dual_color_one_piece', $data);
  }
  public function dual_color_orrisa_pan()
  { 
    $table = 'dual_color_orrisa_pan';
    $all = $this->Master->test2($table);
    $data['product'] = $all;
    $this->load->view('designer_collection/dual_color_orrisa_pan', $data);
  }
  public function rustic_water_closet()
  { 
    $table = 'rustic_water_closet';
    $all = $this->Master->test2($table);
    $data['product'] = $all;
    $this->load->view('designer_collection/rustic_water_closet', $data);
  }
  public function rustic_orrisa_pan()
  { 
    $table = 'rustic_orrisa_pan';
    $all = $this->Master->test2($table);
    $data['product'] = $all;
    $this->load->view('designer_collection/rustic_orrisa_pan', $data);
  }
  public function seat_cover_fitting()
  { 
    $table = 'seat_cover_fitting';
    $all = $this->Master->test2($table);
    $data['product'] = $all;
    $this->load->view('designer_collection/seat_cover_fitting', $data);
  }
  public function color_range()
  {
    $this->load->view('designer_collection/color_range');
  }
  public function technical_instruction()
  { 
    $this->load->view('designer_collection/technical_instruction');
  }

    public function contact()
  {
    $data['posts'] = $this->Master->getlatestPosts();
    $this->load->view('contact',$data);
  }

	public function addnew()
	{
        $data['sanitry_product'] = $this->Master->getproduct();
        $this->load->view('crud/add',$data);
	} 

	public function add()
	{  
	     	 $file = $this->upload_file();
	       $file_2 = $this->upload_file_2();
	     	 $file_3 = $this->upload_file_3();
	     	 $file_4 = $this->upload_file_4();
	     	 $post = $this->input->post();
         $product = $_POST['product'];
             $this->load->library('form_validation');
	     	     $this->form_validation->set_rules('name',  "EWC'S Name", 'required');
             $this->form_validation->set_rules('price', "EWC'S Price", 'required');
     
    
          if($this->form_validation->run() == FALSE)
            {  
               $this->addnew();
            }
        else
            {  
        	    $insert_data['name']=$post['name'];
        	    $insert_data['price']=$post['price'];
        	    
        	    $insert_data['reg_date']=date('Y-m-d H:i:s');
        	    $insert_data['image_1']=$file['file_name'];
        	    $insert_data['image_2']=$file_2['file_name'];
        	    $insert_data['image_3']=$file_3['file_name'];
        	    $insert_data['image_4']=$file_4['file_name'];
              $insert_data['description']=$post['description'];
              
            $result=$this->Master->addtest($insert_data,$product);
        	 //a print_r($result); die();//echo  $this->db->last_query(); die();
           
              if($result)
                {
                    redirect('/Login/dashboard/as');
                }
              else
                {
                    redirect('/home/addnew');
                }
            }
			
	  } 


    public function edit($id)
     { //print_r($_POST['edit']); die();

      $id = $this->uri->segment(3);
      $table = $this->uri->segment(4);
    
      if(@$_POST['edit'] == 'edit')
        { 
                $post = $this->input->post();
                $update_data['name']=$post['name'];
                $update_data['price']=$post['price'];
                $update_data['model']=$post['model'];
                $update_data['description']=$post['description'];
               
                $result=$this->Master->updatedata($id, $table, $update_data);
             
                if($this->db->affected_rows() > 0)
                {
                    redirect('/login/dashboard/es');
                 }
                else
                {
                    redirect('/auth/profile/ef');
                }
        }
          $result = $this->Master->edit_product($id,$table);
      $data['post'] = $result;
       $this->load->view('crud/edit',$data);
    }



	  public function upload_file()
    {
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'jpg|jpeg|png';

            $this->load->library('upload', $config);
               if ( ! $this->upload->do_upload('image_1'))
                { 
                  $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
                  $error = array('error' => $this->upload->display_errors());
         
                }
                else
                { 
                    return $this->upload->data();
                }
    }
    public function upload_file_2()
    {
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'jpg|jpeg|png';

            $this->load->library('upload', $config);
               if ( ! $this->upload->do_upload('image_2'))
                { 
                  $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
                  $error = array('error' => $this->upload->display_errors());
                }
                else
                { 
                    return $this->upload->data();
                }
    }
    public function upload_file_3()
    {
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'jpg|jpeg|png';

            $this->load->library('upload', $config);
               if ( ! $this->upload->do_upload('image_3'))
                { 
                  $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
                  $error = array('error' => $this->upload->display_errors());
                }
                else
                { 
                    return $this->upload->data();
                }
    }
    public function upload_file_4()
    {
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'jpg|jpeg|png';

            $this->load->library('upload', $config);
               if ( ! $this->upload->do_upload('image_4'))
                { 
                  $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
                  $error = array('error' => $this->upload->display_errors());
                }
                else
                { 
                    return $this->upload->data();
                }
    }   

    public function dash_data($table) 
    {
      $search_text = ""; 
      if ($this->input->post() != '')
        {
          $search_text = $this->input->post('search');
          $_SESSION["search"] = @$search_text;
        }
      $allcount = $this->Master->onepiece_Count($search_text,$table);
      $data['count'] = $allcount;
      $data['posts'] = $this->Master->get_onepiece($search_text,$table);
     $this->load->view('crud/list', $data); 
   } 

   public function total_data()
   {
     $count = $this->Master->Count();
     $data['count'] = $allcount;

     $this->load->view('login/dashboard', $data);
   }



  // public function urinal() 
  //  {
  //     $allcount = $this->Master->urinal_count();
  //     $data['count'] = $allcount;
  //     $data['posts'] = $this->Master->get_urinal();
  //     $this->load->view('product_page/list', $data); 
  //  }    






  // public function onepiece($table) 
  //  {//print_r($table); die();
  //    $search_text = ""; 
  //        if ($this->input->post() != '')
  //          {
  //             $search_text = $this->input->post('search');
  //             $_SESSION["search"] = @$search_text;
  //       }
  //       //print_r($search_text); print_r($table); die('hiii');
  //     $allcount = $this->Master->onepiece_Count($search_text,$table);


  //     $data['count'] = $allcount;
  //     $data['posts'] = $this->Master->get_onepiece($search_text,$table);
  //     //echo '<pre>'; print_r($data); die();
  //     $this->load->view('product_page/list', $data); 
  //  }                     
    
  // public function Washbasin_pe() 
  //  {
  //     $allcount = $this->Master->Washbasin_pe_Count();
  //     $data['count'] = $allcount;
  //     $data['posts'] = $this->Master->get_Washbasin_pe();
  //     $this->load->view('product_page/list', $data); 
  //  } 

  //  public function tabletop() 
  //  {
  //     $allcount = $this->Master->tabletop_Count();
  //     $data['count'] = $allcount;
  //     $data['posts'] = $this->Master->get_tabletop();
  //     $this->load->view('product_page/list', $data); 
  //  }

  //  public function washbasin() 
  //  {
  //     $allcount = $this->Master->washbasin_Count();
  //     $data['count'] = $allcount;
  //     $data['posts'] = $this->Master->get_washbasin();
  //     $this->load->view('product_page/list', $data); 
  //  }
	
  //  public function watercloset() 
  //  {
  //     $allcount = $this->Master->watercloset_Count();
  //     $data['count'] = $allcount;
  //     $data['posts'] = $this->Master->get_watercloset();
  //     $this->load->view('product_page/list', $data); 
  //  }
   
  //  public function seatcovers() 
  //  {
  //     $allcount = $this->Master->seatcovers_Count();
  //     $data['count'] = $allcount;
  //     $data['posts'] = $this->Master->get_seatcovers();
  //     $this->load->view('product_page/list', $data); 
  //  }
   
  //  public function pan() 
  //  {
  //     $allcount = $this->Master->pan_Count();
  //     $data['count'] = $allcount;
  //     $data['posts'] = $this->Master->get_pan();
  //     $this->load->view('product_page/list', $data); 
  //  }
  //  public function couplesuit_c() 
  //  {
  //     $allcount = $this->Master->couplesuite_Count();
  //     $data['count'] = $allcount;
  //     $data['posts'] = $this->Master->get_couplesuite();
  //     $this->load->view('product_page/list', $data); 
  //  }
  //   public function vitrassa_c() 
  //  {
  //     $allcount = $this->Master->vitrassa_Count();
  //     $data['count'] = $allcount;
  //     $data['posts'] = $this->Master->get_vitrassa();
  //     $this->load->view('product_page/list', $data); 
  //  }
  //   public function mattvitrassa_series_c() 
  //  {
  //     $allcount = $this->Master->mattvitrassa_series_Count();
  //     $data['count'] = $allcount;
  //     $data['posts'] = $this->Master->get_mattvitrassa_series();
  //     $this->load->view('product_page/list', $data); 
  //  }
  //   public function vitrassa_series_c() 
  //  {
  //     $allcount = $this->Master->vitrassa_series_Count();
  //     $data['count'] = $allcount;
  //     $data['posts'] = $this->Master->get_vitrassa_series();
  //     $this->load->view('product_page/list', $data); 
  //  }
  //   public function new_designer_series_c() 
  //  {
  //     $allcount = $this->Master->new_designer_series_Count();
  //     $data['count'] = $allcount;
  //     $data['posts'] = $this->Master->get_new_designer_series();
  //     $this->load->view('product_page/list', $data); 
  //  }
  //   public function rustic_series_c() 
  //  {
  //     $allcount = $this->Master->rustic_series_Count();
  //     $data['count'] = $allcount;
  //     $data['posts'] = $this->Master->get_rustic_series();
  //     $this->load->view('product_page/list', $data); 
  //  }
  //   public function vitrasa_washbasin_c() 
  //  {
  //     $allcount = $this->Master->vitrasa_washbasin_Count();
  //     $data['count'] = $allcount;
  //     $data['posts'] = $this->Master->get_vitrasa_washbasin();
  //     $this->load->view('product_page/list', $data); 
  //  }
  //   public function designer_tabletop_c() 
  //  {
  //     $allcount = $this->Master->designer_tabletop_Count();
  //     $data['count'] = $allcount;
  //     $data['posts'] = $this->Master->get_designer_tabletop();
  //     $this->load->view('product_page/list', $data); 
  //  }
  //   public function dual_color_one_piece_c() 
  //  {
  //     $allcount = $this->Master->dual_color_one_piece_Count();
  //     $data['count'] = $allcount;
  //     $data['posts'] = $this->Master->get_dual_color_one_piece();
  //     $this->load->view('product_page/list', $data); 
  //  }
  //   public function dual_color_orrisa_pan_c() 
  //  {
  //     $allcount = $this->Master->dual_color_orrisa_pan_Count();
  //     $data['count'] = $allcount;
  //     $data['posts'] = $this->Master->get_dual_color_orrisa_pan();
  //     $this->load->view('product_page/list', $data); 
  //  }
  //   public function rustic_water_closet_c() 
  //  {
  //     $allcount = $this->Master->rustic_water_closet_Count();
  //     $data['count'] = $allcount;
  //     $data['posts'] = $this->Master->get_rustic_water_closet();
  //     $this->load->view('product_page/list', $data); 
  //  }
  //   public function rustic_orrisa_pan_c() 
  //  {
  //     $allcount = $this->Master->rustic_orrisa_pan_Count();
  //     $data['count'] = $allcount;
  //     $data['posts'] = $this->Master->get_rustic_orrisa_pan();
  //     $this->load->view('product_page/list', $data); 
  //  }
  //   public function seat_cover_fitting_c() 
  //  {
  //     $allcount = $this->Master->seat_cover_fitting_Count();
  //     $data['count'] = $allcount;
  //     $data['posts'] = $this->Master->get_seat_cover_fitting();
  //     $this->load->view('product_page/list', $data); 
  //  }
}