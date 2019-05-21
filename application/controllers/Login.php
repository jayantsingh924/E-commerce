<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		session_start();
		$this->load->model('Master');
		$this->load->library('form_validation');
	
	}


	public function index()
	{  
      if (empty($_SESSION['ad_uid']))
      { 
        $this->load->view('login/login');
      }
  else
      {
        redirect('login/dashboard');
		  }
	}

	public function signup()
	{  
		$this->load->view('login/signup');
	}

  public function client()
  {  
    $this->load->view('login/client_login');
  }

  public function register()
  {  
        
             $post = $this->input->post();
             $this->load->library('form_validation');
             $this->form_validation->set_rules('email',  "E-mail", 'required');
             $this->form_validation->set_rules('password', "Password", 'required');
     
    
          if($this->form_validation->run() == FALSE)
            {  
               $this->addnew();
            }
        else
            {  
              $insert_data['firstname']=$post['firstname'];
              $insert_data['lastname']=$post['lastname'];
              $insert_data['email']=$post['email'];
              $insert_data['password']=$post['password'];
              $insert_data['reg_date']=date('Y-m-d H:i:s');
              $insert_data['about_me']=$post['aboutme'];
              
            $result=$this->Master->registernew($insert_data,$product);
           //a print_r($result); die();
           // echo  $this->db->last_query(); die();
           
              if($result)
                {
                    redirect('/home');
                }
              else
                {
                    redirect('/login/signup');
                }
            }
      
  } 

		public function dashboard()
	    { 
        
	    	 if (!empty($_SESSION['ad_uid']))
	            {  
                $allcount = $this->Master->onepiece_Count($a, $table = 'onepiece');
                $data['onepiece'] = $allcount;
                $allcount = $this->Master->Washbasin_pe_Count();
                $data['washbasin_pe'] = $allcount;
                $allcount = $this->Master->urinal_count();
                $data['urinal'] = $allcount;
                $allcount = $this->Master->tabletop_Count();
                $data['tabletop'] = $allcount;
                $allcount = $this->Master->Washbasin_Count();
                $data['washbasin'] = $allcount;
                $allcount = $this->Master->watercloset_Count();
                $data['watercloset'] = $allcount;
                $allcount = $this->Master->seatcovers_Count();
                $data['seatcovers'] = $allcount;
                $allcount = $this->Master->pan_Count();
                $data['pan'] = $allcount;
                $allcount = $this->Master->couplesuite_Count();
                $data['couplesuite'] = $allcount;
                $allcount = $this->Master->vitrassa_Count();
                $data['vitrassa'] = $allcount;
                $allcount = $this->Master->mattvitrassa_series_Count();
                $data['mattvitrassa_series'] = $allcount;
                $allcount = $this->Master->vitrassa_series_Count();
                $data['vitrassa_series'] = $allcount;
                $allcount = $this->Master->new_designer_series_Count();
                $data['new_designer_series'] = $allcount;
                $allcount = $this->Master->rustic_series_Count();
                $data['rustic_series'] = $allcount;
                $allcount = $this->Master->vitrasa_washbasin_Count();
                $data['vitrasa_washbasin'] = $allcount;
                $allcount = $this->Master->designer_tabletop_Count();
                $data['designer_tabletop'] = $allcount;
                $allcount = $this->Master->dual_color_one_piece_Count();
                $data['dual_color_one_piece'] = $allcount;
                $allcount = $this->Master->dual_color_orrisa_pan_Count();
                $data['dual_color_orrisa_pan'] = $allcount;
                $allcount = $this->Master->rustic_water_closet_Count();
                $data['rustic_water_closet'] = $allcount;
                $allcount = $this->Master->rustic_orrisa_pan_Count();
                $data['rustic_orrisa_pan'] = $allcount;
                $allcount = $this->Master->seat_cover_fitting_Count();
                $data['seat_cover_fitting'] = $allcount;
               
                $this->load->view('login/dashboard', $data);
                
               }
          else
               {
		                 $this->load->view('login/login');
                  
		       }
     	}

	public function check_login()
	     {  
	     	  $this->load->library('form_validation');
          $this->form_validation->set_rules('email', 'Email', 'required');
		      $this->form_validation->set_rules('password', 'Password', 'required');

		       if($this->form_validation->run() == FALSE)
		          { 
			         $this->login();
              }
		      else
		          {   
	                if(isset($_POST['email']))
	                 {
			           $user_data = $this->Master->check_login($_POST['email'],$_POST['password']);
			           $_SESSION['ad_uid']= $user_data['id']; 
		    	       $_SESSION['ad_uname']= $user_data['email']; 
		             $_SESSION['ad_name']= $user_data['firstname'];

		                //die('yaha');
		                redirect('Login/dashboard');
		             }
		         else
		             {  die('hiii');
		             	$this->login();
		    	     }	
		          }
	     }
    
    public function client_login()
    { 
          $this->load->library('form_validation');
          $this->form_validation->set_rules('email', 'Email', 'required');
          $this->form_validation->set_rules('password', 'Password', 'required');

           if($this->form_validation->run() == FALSE)
              {  
               $this->client();
              }
          else
              { 
                  if(isset($_POST['email']))
                    {            
                      $user_data = $this->Master->client_login($_POST['email'],$_POST['password']);
                    
                         if (!empty($user_data)) 
                          {
                            $_SESSION['ad_uid']= $user_data['id']; 
                            $_SESSION['ad_uname']= $user_data['email']; 
                            $_SESSION['ad_name']= $user_data['firstname'];

                              redirect('home/client_dash');
                          }
                          else  { $this->client();}
                          
                    }
                 else
                    { 
                      die('haaqaa');
                      $this->client();
                    }  
              }
       

	 }

	 public function logout()
     {
           session_destroy();             //  Used To Destroy All Sessions
           redirect('Login');
           //$this->Home();
     }

    public function dump_session()
    {
       echo'<pre>';
       print_r($_SESSION);
       echo '</pre>';
       die();
    }
    
	
}
