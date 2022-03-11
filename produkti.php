<?php 
class Produkti 
{   

    private $image;
    private $productName;
    private $pershkrimi;
    private $qmimi;    

    public function __construct($image, $productName, $pershkrimi, $qmimi)
    {   
        $this->image = $image;
        $this->productName = $productName;
        $this->pershkrimi = $pershkrimi;
        $this->qmimi = $qmimi;
    }

    public function getProductname()
    {
        return $this->productName;
    }

    public function setProductname($productName)
    {
        $this->productName = $productName;
    }

    public function getPershkrimi()
    {
        return $this->pershkrimi;
    }

    public function setPershkrimi($pershkrimi)
    {
        $this->pershkrimi = $pershkrimi;
    }

    public function getQmimi()
    {
        return $this->qmimi;
    }

    public function setQmimi($qmimi)
    {
        $this->qmimi = $qmimi;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }
}
?>