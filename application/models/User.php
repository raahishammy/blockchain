<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class User extends CI_Model{ 
    function __construct() { 
        // Set table name 
        $this->table = 'ci_aauth_users'; 
    } 
     
    /* 
     * Fetch user data from the database 
     * @param array filter data based on the passed parameters 
     */ 
    function getRows($params = array()){ 
        $this->db->select('*'); 
        $this->db->from($this->table); 
         
        if(array_key_exists("conditions", $params)){ 
            foreach($params['conditions'] as $key => $val){ 
                $this->db->where($key, $val); 
            } 
        } 
         
        if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){ 
            $result = $this->db->count_all_results(); 
        }else{ 
            if(array_key_exists("id", $params) || $params['returnType'] == 'single'){ 
                if(!empty($params['id'])){ 
                    $this->db->where('id', $params['id']); 
                } 
                $query = $this->db->get(); 
                $result = $query->row_array(); 
            }else{ 
                $this->db->order_by('id', 'desc'); 
                if(array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
                    $this->db->limit($params['limit'],$params['start']); 
                }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
                    $this->db->limit($params['limit']); 
                } 
                 
                $query = $this->db->get(); 
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE; 
            } 
        } 
         
        // Return fetched data 
        return $result; 
    } 
     
    /* 
     * Insert user data into the database 
     * @param $data data to be inserted 
     */ 
    public function insert($data = array()) { 
        if(!empty($data)){ 
            // Add created and modified date if not included 
            if(!array_key_exists("created", $data)){ 
                $data['created_at'] = date("Y-m-d H:i:s"); 
            } 
            if(!array_key_exists("modified", $data)){ 
                $data['modified_at'] = date("Y-m-d H:i:s"); 
            } 
             
            // Insert member data 
            $insert = $this->db->insert($this->table, $data); 
             
            // Return the status 
            return $insert?$this->db->insert_id():false; 
        } 
        return false; 
    } 


  public function processLogin($email=NULL,$password)
  {
      $this->db->select("*");
      $whereCondition = $array = array('email' =>$email,'password'=>$password);
      $this->db->where($whereCondition);
      $this->db->from($this->table);
      $query = $this->db->get();
      return $query;
 }

 public function get_user($id)
    {
    $this->db->select('*');
    $this->db->from($this->table);
    $this->db->where('id', $id);  // Also mention table name here
    $query = $this->db->get();    
    if($query->num_rows() > 0)
        return $query->result();
    }
 
    public function get_user_by_encrypted_id($id)
    {
    $this->db->select('*');
    $this->db->from($this->table);
    $this->db->where('md5(id)', $id);  // Also mention table name here
    $query = $this->db->get();    
    if($query->num_rows() > 0)
        return $query->result();
    }

    public function update_profile_info($id, $data) 
    {
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
       
    }


    public function get_userinfo($id)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }
  

}