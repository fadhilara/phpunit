<?php

Class Gifts
{

    public $kuantitas;
    public $harga_makanan;    
    public function getAward($kuantitas, $harga_makanan)
    {
        
        if (($kuantitas * $harga_makanan) <= 0) { return "Error";} 
        elseif (($kuantitas * $harga_makanan) < 150000) { return "Masker & Hand Sanitizer";} 
        elseif (($kuantitas * $harga_makanan) < 250000) {return "Goodie Bag & Cutlery";}
        elseif (($kuantitas * $harga_makanan) < 350000) {return "Tumbler";}
        elseif (($kuantitas * $harga_makanan) < 450000) {return "Lunch Box";}
        else {return "Member Card";}
        

    }

}
?>