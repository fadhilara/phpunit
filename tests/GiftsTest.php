<?php

use PHPUnit\Framework\TestCase;
require_once "Gifts.php";

class GiftsTest extends TestCase
{
    private $gifts;
 
    protected function setUp(): void
    {
        parent::setUp();
        $this->gifts = new Gifts();
    }
 
    protected function tearDown(): void
    {
        $this->gifts = NULL;
        parent::tearDown();
    }
    
    //Test of User Requirement / Specification
    //jika kurang dari 250.000 maka dapat Goodie Bag & Cutlery
    public function testGetGift_req1()
    {
        $kuantitas = 3;
        $harga_makanan = 60000;
        $award = $this->gifts->getAward($kuantitas, $harga_makanan);
        $this->assertEquals('Goodie Bag & Cutlery', $award); 
    }
    //Test of User Requirement / Specification
    //jika kurang dari 150.000 maka dapat Masker & Hand Sanitizer
    public function testGetGift_req2()
    {
        $kuantitas = 1;
        $harga_makanan = 55500;
        $award = $this->gifts->getAward($kuantitas, $harga_makanan);
        $this->assertEquals('Masker & Hand Sanitizer', $award); 
    }
    //Test of User Requirement / Specification
    //jika kurang dari 350.000 maka dapat Tumbler
    public function testGetGift_req3()
    {
        $kuantitas = 3;
        $harga_makanan = 100000;
        $award = $this->gifts->getAward($kuantitas, $harga_makanan);
        $this->assertEquals('Tumbler', $award); 
    }
    //Test of User Requirement / Specification
    //jika kurang dari atau sama dengan 0 maka muncul error
    public function testGetGift_req4()
    {
        $kuantitas = -2;
        $harga_makanan = 135000;
        $award = $this->gifts->getAward($kuantitas, $harga_makanan);
        $this->assertEquals('Error', $award); 
    }
    //Test of User Requirement / Specification
    //jika kurang dari atau sama dengan 0 maka muncul error
    public function testGetGift_req5()
    {
        $kuantitas = 4;
        $harga_makanan = -95000;
        $award = $this->gifts->getAward($kuantitas, $harga_makanan);
        $this->assertEquals('Error', $award); 
    }
    //Test of User Requirement / Specification
    //jika kurang dari atau sama dengan 0 maka muncul error
    public function testGetGift_req6()
    {
        $kuantitas = 0;
        $harga_makanan = -160000;
        $award = $this->gifts->getAward($kuantitas, $harga_makanan);
        $this->assertEquals('Error', $award); 
    }
    //Equivalence Partitioning
    //jika kurang dari atau sama dengan 0 maka muncul error
    public function testGetGift_eq1()
    {
        $kuantitas = 0;
        $harga_makanan = 0;
        $award = $this->gifts->getAward($kuantitas, $harga_makanan);
        $this->assertEquals('Error', $award); 
    }
    //Equivalence Partitioning
    //jika kurang dari 150.000 maka dapat Masker & Hand Sanitizer
    public function testGetGift_eq2()
    {
        $kuantitas = 2;
        $harga_makanan = 45000;
        $award = $this->gifts->getAward($kuantitas, $harga_makanan);
        $this->assertEquals('Masker & Hand Sanitizer', $award); 
    }
    //Equivalence Partitioning
    //jika kurang dari 250.000 maka dapat Goodie Bag & Cutlery
    public function testGetGift_eq3()
    {
        $kuantitas = 1;
        $harga_makanan = 220000;
        $award = $this->gifts->getAward($kuantitas, $harga_makanan);
        $this->assertEquals('Goodie Bag & Cutlery', $award); 
    }
    //Equivalence Partitioning
    //jika kurang dari 350.000 maka dapat Tumbler
    public function testGetGift_eq4()
    {
        $kuantitas = 4;
        $harga_makanan = 80000;
        $award = $this->gifts->getAward($kuantitas, $harga_makanan);
        $this->assertEquals('Tumbler', $award); 
    }
    //Equivalence Partitioning
    //jika kurang dari 450000 maka dapat lunch box
    public function testGetGift_eq5()
    {
        $kuantitas = 6;
        $harga_makanan = 70000;
        $award = $this->gifts->getAward($kuantitas, $harga_makanan);
        $this->assertEquals('Lunch Box', $award); 
    }
    //Equivalence Partitioning
    //jika kurang dari atau sama dengan 1000000 maka dapat member card
    public function testGetGift_eq6()
    {
        $kuantitas = 4;
        $harga_makanan = 250000;
        $award = $this->gifts->getAward($kuantitas, $harga_makanan);
        $this->assertEquals('Member Card', $award); 
    }
    //Boundary Value Analysis / Limit Testing
    //jika kurang dari atau sama dengan 0 maka muncul error 
    public function testGetGift_bound1()
    {
        $kuantitas = 0;
        $harga_makanan = 149999;
        $award = $this->gifts->getAward($kuantitas, $harga_makanan);
        $this->assertEquals('Error', $award); 
    }
    //Boundary Value Analysis / Limit Testing 
    //jika kurang dari 150.000 maka dapat Masker & Hand Sanitizer
    public function testGetGift_bound2()
    {
        $kuantitas = 1;
        $harga_makanan = 149999;
        $award = $this->gifts->getAward($kuantitas, $harga_makanan);
        $this->assertEquals('Masker & Hand Sanitizer', $award); 
    }
    //Boundary Value Analysis / Limit Testing 
    //jika kurang dari 250.000 maka dapat Goodie Bag & Cutlery
    public function testGetGift_bound3()
    {
        $kuantitas = 2;
        $harga_makanan = 124999;
        $award = $this->gifts->getAward($kuantitas, $harga_makanan);
        $this->assertEquals('Goodie Bag & Cutlery', $award); 
    }
    //Boundary Value Analysis / Limit Testing 
    //jika kurang dari 350.000 maka dapat Tumbler
    public function testGetGift_bound4()
    {
        $kuantitas = 1;
        $harga_makanan = 250001;
        $award = $this->gifts->getAward($kuantitas, $harga_makanan);
        $this->assertEquals('Tumbler', $award); 
    }
    //Boundary Value Analysis / Limit Testing 
    //jika kurang dari 450.000 maka dapat Lunch Box
    public function testGetGift_bound5()
    {
        $kuantitas = 1;
        $harga_makanan = 449999;
        $award = $this->gifts->getAward($kuantitas, $harga_makanan);
        $this->assertEquals('Lunch Box', $award); 
    }
    //Boundary Value Analysis / Limit Testing
    //jika kurang dari atau sama dengan 1000000 maka dapat member card 
    public function testGetGift_bound6()
    {
        $kuantitas = 1;
        $harga_makanan = 999999;
        $award = $this->gifts->getAward($kuantitas, $harga_makanan);
        $this->assertEquals('Member Card', $award); 
    }
    //Decision Table -> mencakup test of requirement, equivalence testing, boundary value analysis
    //Cause Effect Graph -> mencakup test of requirement, equivalence testing, boundary value analysis
    //Error Guessing -> negatif test 
}