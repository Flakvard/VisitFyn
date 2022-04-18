<?php
	
	class eventClass
	{
		// set database config for mysql
		function __construct($consetup)
		{
			$this->host = $consetup->host;
			$this->user = $consetup->user;
			$this->pass =  $consetup->pass;
			$this->db = $consetup->db;            					
		}
		// open mysql data base
		public function open_db()
		{
			$this->condb=new mysqli($this->host,$this->user,$this->pass,$this->db);
			if ($this->condb->connect_error) 
			{
    			die("Erron in connection: " . $this->condb->connect_error);
			}
		}
		// close database
		public function close_db()
		{
			$this->condb->close();
		}	

		// insert record
		public function insertRecord($obj)
		{
			try
			{	
				$this->open_db();
				$query=$this->condb->prepare("INSERT INTO event_template (category,name) VALUES (?, ?)");
                //$query=$this->condb->prepare("INSERT INTO event_template (category, name, description, updatedAt) VALUES (:category, :name, :description, :updatedAt)");
				$query->bind_param("ss",$obj->category,$obj->name);
				$query->execute();
				$res= $query->get_result();
				$last_id=$this->condb->insert_id; //fanger id for eventet
				$query->close();
				$this->close_db(); // lukker datebasen
				return $last_id; //returner id for eventet
			}
			catch (Exception $e) 
			{
				$this->close_db();	
            	throw $e;
        	}
		}
		public function deleteRecord($id)
		{	
			try{
				$this->open_db();
				$query=$this->condb->prepare("DELETE FROM event_template WHERE id=?");
				$query->bind_param("i",$id);
				$query->execute();
				$res=$query->get_result();
				$query->close();
				$this->close_db();
				return true;	
			}
			catch (Exception $e) 
			{
            	$this->closeDb();
            	throw $e;
        	}		
        }  
        // select record     
		public function selectRecord($id)
		{
			try
			{
                $this->open_db();
                if($id>0)
				{	
					$query=$this->condb->prepare("SELECT * FROM event_template WHERE id=?");
					$query->bind_param("i",$id);
				}
                else
                {$query=$this->condb->prepare("SELECT * FROM event_template");	}		
				
				$query->execute();
				$res=$query->get_result();	//setter query i en variabel
				$query->close();		//lukker query
				$this->close_db();      //lukker datebasen
                return $res;	//returnerer listen af events fra query variabelen 
			}
			catch(Exception $e)
			{
				$this->close_db();
				throw $e; 	
			}
			
		}

		//update record
		public function updateRecord($obj)
		{
			try
			{	
				$this->open_db();
				$query=$this->condb->prepare("UPDATE event_template SET category=?,name=? WHERE id=?");
				$query->bind_param("ssi", $obj->category,$obj->name,$obj->id);
				$query->execute();
				$res=$query->get_result();						
				$query->close();
				$this->close_db();
				return true;
			}
			catch (Exception $e) 
			{
            	$this->close_db();
            	throw $e;
        	}
        }
	}

?>