<?php



class Model
{
	protected $db, $result;
	private $rows = array();

	public function __construct()
	{
		$this->db = new mysqli('localhost','root','root','lifechoice');
	}

	public function query($sql)
	{
            $this->rows=null;
		$this->result = $this->db->query($sql);
                return $this->result;
	}

	public function rows()
	{
		for($x=1;$x <= $this->db->affected_rows; $x++)
		{
			$this->rows[] = $this->result->fetch_assoc();
		}
		return $this->rows;
	}
}



?>