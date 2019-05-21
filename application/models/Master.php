<?php
class Master extends CI_Model
{
    public function __construct() 
    {

       parent::__construct();
    }

     public function check_login($user_name,$password)
     {
        $sql = $this->db->get_where('admin',array('email'=>$user_name,'password'=>$password));
        return $sql->row_array();
     }
      public function registernew($add_data=NULL)
    {
       $this->db->insert('admin', $add_data);
       return $this->db->insert_id();
    }
     
    public function addtest($add_data=NULL,$product)
    {  
      if ($product == 1) {
        $this->db->insert('urinal', $add_data);
      }
      elseif ($product == 2) {
       $this->db->insert('onepiece', $add_data);
      }
      elseif ($product == 3) {
       $this->db->insert('washbasin_pe', $add_data);
      }
      elseif ($product == 4) {
       $this->db->insert('tabletop', $add_data);
      }
      elseif ($product == 5) {
       $this->db->insert('washbasin', $add_data);
      }
      elseif ($product == 6) {
       $this->db->insert('watercloset', $add_data);
      }
      elseif ($product == 7) {
       $this->db->insert('seatcovers', $add_data);
      }
      elseif ($product == 8) {
       $this->db->insert('pan', $add_data);
      }
       elseif ($product == 9) {
       $this->db->insert('couplesuite', $add_data);
      }
       elseif ($product == 10) {
       $this->db->insert('mattvitrassa_series', $add_data);
      }
       elseif ($product == 11) {
       $this->db->insert('vitrassa_series', $add_data);
      }
       elseif ($product == 12) {
       $this->db->insert('new_designer_series', $add_data);
      }
       elseif ($product == 13) {
       $this->db->insert('rustic_series', $add_data);
      }
       elseif ($product == 14) {
       $this->db->insert('vitrasa_washbasin', $add_data);
      }
       elseif ($product == 15) {
       $this->db->insert('designer_tabletop', $add_data);
      }
       elseif ($product == 16) {
       $this->db->insert('dual_color_one_piece', $add_data);
      }
       elseif ($product == 17) {
       $this->db->insert('dual_color_orrisa_pan', $add_data);
      }
       elseif ($product == 18) {
       $this->db->insert('rustic_water_closet', $add_data);
      }
       elseif ($product == 19) {
       $this->db->insert('rustic_orrisa_pan', $add_data);
      }
       elseif ($product == 20) {
       $this->db->insert('seat_cover_fitting', $add_data);
      }
      elseif ($product == 21) {
       $this->db->insert('vitrassa', $add_data);
      }
        
        return $this->db->insert_id();
    }
    public function getlatestPosts()
    {
        $query = "SELECT * FROM onepiece  ORDER BY id DESC LIMIT 5";
        $query = $this->db->query($query);
        return $query->result();
    }
       public function getlatestPosts1()
    {
        $query = "SELECT * FROM urinal  ORDER BY id DESC LIMIT 5";
        $query = $this->db->query($query);
        return $query->result();
    }
        public function getlatestPosts2()
    {
        $query = "SELECT * FROM vitrassa  ORDER BY id DESC LIMIT 5";
        $query = $this->db->query($query);
        return $query->result();
    }
    public function getproduct(){
         $response = array();
      
      $this->db->select('*');
      $q = $this->db->get('sanitry_product');
      $response = $q->result_array();

      return $response;
     }
    

   
     public function get_product($id = FALSE,$table)
          { 
            if ($id === FALSE)
          {
             $this->db->select("*"); 
             $this->db->from($table);
             $query = $this->db->get();
             return $query->result_array();
          }
            $query = $this->db->get_where($table, array('id' => $id));
             return $query->row_array();
             //echo $this->db->last_query(); die();
          }

    public function test2($table)
    {

      $response = array();
      $this->db->select('*');
      $q = $this->db->get($table);
      $response = $q->result_array();
      return $response;
    }

    public function deletedata($id=NULL ,$table)
    {
        $this->db->where('id', $id);
        $this->db->delete($table);
         return $this->db->affected_rows();
    }


    public function urinal_count() 
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('urinal');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }
    public function get_urinal()
    {
           $this->db->select("*"); 
           $this->db->from('urinal');
           $query = $this->db->get();
           return $query->result();
    }
      public function onepiece_Count($search_text=NULL,$table = NULL) 
    { 

        $this->db->select('count(*) as allcount');
        $this->db->from($table);
        
        if($search_text != '')
        {
           $this->db->like('name', $search_text);
           $this->db->or_like('reg_date', $search_text);
        }

        $query = $this->db->get();
        
        $result = $query->result_array();
        //print_r($result); die();
        return $result[0]['allcount'];
    }
      public function get_onepiece($search_text,$table)
    { //print_r($search_text); print_r($table); die( 'here');
           $this->db->select("*"); 
           $this->db->from($table);
            if($search_text != '')
            {
              $this->db->like('name', $search_text);
              $this->db->or_like('reg_date', $search_text);
            }
           $query = $this->db->get();
          // echo $this->db->last_query(); die();
           return $query->result();
    }
     public function Washbasin_pe_Count() 
    {

        $this->db->select('count(*) as allcount');
        $this->db->from('washbasin_pe');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }
          public function get_Washbasin_pe()
    {
           $this->db->select("*"); 
           $this->db->from('washbasin_pe');
           $query = $this->db->get();
           return $query->result();
    }
     public function tabletop_Count() 
     {

        $this->db->select('count(*) as allcount');
        $this->db->from('tabletop');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
     }
    public function get_tabletop()
    {
          $this->db->select("*"); 
          $this->db->from('tabletop');
          $query = $this->db->get();
          return $query->result();
    }
      public function Washbasin_Count() 
    {

        $this->db->select('count(*) as allcount');
        $this->db->from('washbasin');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }
          public function get_Washbasin()
    {
           $this->db->select("*"); 
           $this->db->from('washbasin');
           $query = $this->db->get();
           return $query->result();
    }
      public function watercloset_Count() 
    {

        $this->db->select('count(*) as allcount');
        $this->db->from('watercloset');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }
          public function get_watercloset()
    {
           $this->db->select("*"); 
           $this->db->from('watercloset');
           $query = $this->db->get();
           return $query->result();
    }

      public function seatcovers_Count() 
    {

        $this->db->select('count(*) as allcount');
        $this->db->from('seatcovers');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }
          public function get_seatcovers()
    {
           $this->db->select("*"); 
           $this->db->from('seatcovers');
           $query = $this->db->get();
           return $query->result();
    }

     public function pan_Count() 
    {

        $this->db->select('count(*) as allcount');
        $this->db->from('pan');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }
          public function get_pan()
    {
           $this->db->select("*"); 
           $this->db->from('pan');
           $query = $this->db->get();
           return $query->result();
    }

    public function couplesuite_Count() 
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('couplesuite');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }
    public function get_couplesuite()
    {
           $this->db->select("*"); 
           $this->db->from('couplesuite');
           $query = $this->db->get();
           return $query->result();
    }

     public function vitrassa_Count() 
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('vitrassa');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }
    public function get_vitrassa()
    {
           $this->db->select("*"); 
           $this->db->from('vitrassa');
           $query = $this->db->get();
           return $query->result();
    }

     public function mattvitrassa_series_Count() 
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('mattvitrassa_series');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }
    public function get_mattvitrassa_series()
    {
           $this->db->select("*"); 
           $this->db->from('mattvitrassa_series');
           $query = $this->db->get();
           return $query->result();
    }

     public function vitrassa_series_Count() 
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('vitrassa_series');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }
    public function get_vitrassa_series()
    {
           $this->db->select("*"); 
           $this->db->from('vitrassa_series');
           $query = $this->db->get();
           return $query->result();
    }

     public function new_designer_series_Count() 
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('new_designer_series');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }
    public function get_new_designer_series()
    {
           $this->db->select("*"); 
           $this->db->from('new_designer_series');
           $query = $this->db->get();
           return $query->result();
    }

     public function rustic_series_Count() 
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('rustic_series');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }
    public function get_rustic_series()
    {
           $this->db->select("*"); 
           $this->db->from('rustic_series');
           $query = $this->db->get();
           return $query->result();
    }

     public function vitrasa_washbasin_Count() 
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('vitrasa_washbasin');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }
    public function get_vitrasa_washbasin()
    {
           $this->db->select("*"); 
           $this->db->from('vitrasa_washbasin');
           $query = $this->db->get();
           return $query->result();
    }

     public function designer_tabletop_Count() 
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('designer_tabletop');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }
    public function get_designer_tabletop()
    {
           $this->db->select("*"); 
           $this->db->from('designer_tabletop');
           $query = $this->db->get();
           return $query->result();
    }

     public function dual_color_one_piece_Count() 
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('dual_color_one_piece');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }
    public function get_dual_color_one_piece()
    {
           $this->db->select("*"); 
           $this->db->from('dual_color_one_piece');
           $query = $this->db->get();
           return $query->result();
    }

     public function dual_color_orrisa_pan_Count() 
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('dual_color_orrisa_pan');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }
    public function get_dual_color_orrisa_pan()
    {
           $this->db->select("*"); 
           $this->db->from('dual_color_orrisa_pan');
           $query = $this->db->get();
           return $query->result();
    }

     public function rustic_water_closet_Count() 
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('rustic_water_closet');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }
    public function get_rustic_water_closet()
    {
           $this->db->select("*"); 
           $this->db->from('rustic_water_closet');
           $query = $this->db->get();
           return $query->result();
    }

     public function rustic_orrisa_pan_Count() 
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('rustic_orrisa_pan');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }
    public function get_rustic_orrisa_pan()
    {
           $this->db->select("*"); 
           $this->db->from('rustic_orrisa_pan');
           $query = $this->db->get();
           return $query->result();
    }

     public function seat_cover_fitting_Count() 
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('seat_cover_fitting');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }
    public function get_seat_cover_fitting()
    {
           $this->db->select("*"); 
           $this->db->from('seat_cover_fitting');
           $query = $this->db->get();
           return $query->result();
    }



    
}