<?php 

/**
* Clase clientes_model
*/
class experiencia_model extends CI_Model
{
	
	private $tabla;
	public function __construct()
        {
            // Call the CI_Model constructor
            parent::__construct();

            $this->tabla = "clientes";
            $this->tabla2 = "exp_laboral";
        }
    //agregar registros
    public function add($_post)
    {
    	if (empty($_post))
    		return false;
    	
    	return $this->db->insert($this->tabla,$_post);


    }

     public function add_exp_alboral($_post)
    {
        if (empty($_post))
            return false;
        
        return $this->db->insert($this->tabla2,$_post);


    }



    //actualizar registros
   public function update($_post,$id)
    {
        if (empty($_post)) 
            return false;
        
        if (!is_numeric($id))
            return false;
        
       
        return $this->db->where("id",$id)->update($this->tabla,$_post);
    }
     //actualizar registros
  
    public function delete($_post,$id)
    {
        if (empty($_post)) 
            return false;
        
        if (!is_numeric($id))
            return false;
        
       
        return $this->db->where("id",$id)->update($this->tabla,$_post);
    }

    public function delete_exp($_post,$id)
    {
        if (empty($_post)) 

            return false;
        
        if (!is_numeric($id))
            return false;
        
       
        return $this->db->where("id",$id)->update($this->tabla2,$_post);
    }
    //listado de registros
    public function get()
    {
        return $this->db->where("estado!=",99)->get($this->tabla)->result();    
    }

      public function get_exp()
    {
        return $this->db->where("estado!=",99)->get($this->tabla2)->result();    
    }
    //busqueda de un registro
    public function get_by_id($id)
    {   
    	if (!is_numeric($id)) 
    		return false;
    	
    	return $this->db->where("id",$id)->get($this->tabla)->row();
    }

     public function get_by_id_exp($id)
    {
        if (!is_numeric($id)) 
            return false;
        
        return $this->db->where("id",$id)->get($this->tabla2)->row();
    }

    public function getIp()
    {
        echo "mi ip es: ";
    }
}

