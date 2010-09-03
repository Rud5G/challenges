<?php

/** 
 * The Ibuildings Test Driven Challenge 
 * See http://www.ibuildings.com/challenge for instructions
 */ 

require_once '../NumberCruncher2.php';

/**
 * NumberCruncher test case.
 */
class NumberCruncherTest2 extends PHPUnit_Framework_TestCase {
	
	/**
	 * @var NumberCruncher
	 */
	private $nc;
	
	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp() {
		parent::setUp ();
		$this->nc = new NumberCruncher();
	}
	
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {	
		$this->nc = null;
		parent::tearDown ();
	}
	
	/** ---- Standard operations ---- **/   
	
	/**
	 * Tests NumberCruncher->operationA()
	 * 5 Points
	 */
	public function testOperationA() {
		
	    $this->assertEquals( 5, $this->nc->operationA(1));
	    $this->assertEquals(10, $this->nc->operationA(6));
	    $this->assertEquals(12, $this->nc->operationA(8));
	    $this->assertEquals(42, $this->nc->operationA(38));
	}
	
	/**
	 * Tests NumberCruncher->operationB()
	 * 5 points
	 */
	public function testOperationB() {
		
		$this->assertEquals(0  , $this->nc->operationB(0));
		$this->assertEquals(7.5, $this->nc->operationB(2.5));
		$this->assertEquals(42 , $this->nc->operationB(14));
		$this->assertEquals(-6 , $this->nc->operationB(-2));
	
	}
	
	/**
	 * Tests NumberCruncher->operationC()
	 * 10 points
	 */
	public function testOperationC() {		
        $this->assertEquals(0.5 , $this->nc->operationC(1));
        $this->assertEquals(2   , $this->nc->operationC(2));
        $this->assertEquals(4.5 , $this->nc->operationC(3));
        $this->assertEquals(8   , $this->nc->operationC(4));
		$this->assertEquals(12.5, $this->nc->operationC(5));
		$this->assertEquals(18  , $this->nc->operationC(6));
		$this->assertEquals(24.5, $this->nc->operationC(7));
		$this->assertEquals(32  , $this->nc->operationC(8));
		$this->assertEquals(40.5, $this->nc->operationC(9));
		$this->assertEquals(50  , $this->nc->operationC(10));
	}
	
	/**
	 * Tests NumberCruncher->operationD()
	 * 10 points
	 */
	public function testOperationD() {
		
        $this->assertEquals(1  , $this->nc->operationD(0));
        $this->assertEquals(120, $this->nc->operationD(5));
        $this->assertEquals(1  , $this->nc->operationD(1));
        $this->assertEquals(6  , $this->nc->operationD(3));
        $this->assertEquals(720, $this->nc->operationD(6));	
	}
	
	/**
	 * Tests NumberCruncher->operationE()
	 * 15 points
	 */
	public function testOperationE() {
		
        $this->assertEquals(5 , $this->nc->operationE(5));
        $this->assertEquals(0 , $this->nc->operationE(0));
        $this->assertEquals(1 , $this->nc->operationE(1));
        $this->assertEquals(2 , $this->nc->operationE(3));
        $this->assertEquals(13, $this->nc->operationE(7));
        $this->assertEquals(3 , $this->nc->operationE(4));
        $this->assertEquals(34, $this->nc->operationE(9));	
    }
    
    /** ---- Composite operations ---- **/
	
	/**
	 * Tests NumberCruncher->operationF()
	 * 15 points
	 */
	public function testOperationF() {
        $this->assertEquals(4.5  , $this->nc->operationF(1));        
        $this->assertEquals(40.5 , $this->nc->operationF(3));
        $this->assertEquals(112.5, $this->nc->operationF(5));
        $this->assertEquals(220.5, $this->nc->operationF(7));
        $this->assertEquals(364.5, $this->nc->operationF(9));

        $this->assertEquals(0    , $this->nc->operationF(0));
        $this->assertEquals(18   , $this->nc->operationF(2));
        $this->assertEquals(72   , $this->nc->operationF(4));
        $this->assertEquals(162  , $this->nc->operationF(6));
        $this->assertEquals(288  , $this->nc->operationF(8));
        $this->assertEquals(450  , $this->nc->operationF(10));
			
	}
	
	/**
	 * Tests NumberCruncher->operationG()
	 * 20 points
	 */
	public function testOperationG() {

        $this->assertEquals(1      , $this->nc->operationG(0)); //                                1/0
        $this->assertEquals(0      , $this->nc->operationG(1)); //                                0
        $this->assertEquals(1      , $this->nc->operationG(2)); //                                0,5
        $this->assertEquals(4      , $this->nc->operationG(3)); //                                1,3333333333333333333333333333333
        $this->assertEquals(21     , $this->nc->operationG(4)); //                                5,25
        $this->assertEquals(115    , $this->nc->operationG(5)); //                    2          23
        $this->assertEquals(712    , $this->nc->operationG(6)); //                    3+1/6     118,66666666666666666666666666667   
        $this->assertEquals(5027   , $this->nc->operationG(7)); //   6 + 1/7          6+1/7     718,14285714285714285714285714286   - 0,14285714285714285714285714285714 + 6
        $this->assertEquals(40299  , $this->nc->operationG(8)); //  10 + 3/8                   5037,375
        $this->assertEquals(362846 , $this->nc->operationG(9)); //  17 + 2/9                  40316,222222222222222222222222222
        
		
	}

}
