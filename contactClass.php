<?php 
class Contact{
    private $emri;
    private $mbiemri;
    private $email;
    private $mesazhi;

    public function __construct($emri,  $mbiemri, $email, $mesazhi)
    {
        $this->emri = $emri;
        $this->mbiemri = $mbiemri;
        $this->email = $email;
        $this->mesazhi = $mesazhi;
    }

    public function getEmri(){
		return $this->emri;
	}

	public function setEmri($emri){
		$this->emri = $emri;
	}
	 public function getMbiemri(){
		return $this->mbiemri;
	}

	public function setMbiemri($mbiemri){
		$this->mbiemri = $mbiemri;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getMesazhi(){
		return $this->mesazhi;
	}

	public function setMesazhi($mesazhi){
		$this->mesazhi = $mesazhi;
	}
}
?>