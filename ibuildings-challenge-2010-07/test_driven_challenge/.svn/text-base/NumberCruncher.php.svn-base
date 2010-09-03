<?php

/**
 * NumberCruncher class for iBuildings Challenge: 2010
 * 
 * @author [rg] r.gravestein <r.gravestein@triple-networks.com>, 16 jun 2010
 */
class NumberCruncher {

	/**
	 * Increment (by 4)
	 * 
	 * 5 Points
	 * 
     * @param int $n
	 * @return int
	 */
	public function OperationA ($n) {
		$n += 4;
		return $n;
	}
	
	/**
	 * Multiplication (by 3)
	 * 
	 * 5 points
	 * 
     * @param int $n
     * @return int
	 */
	public function OperationB($n) {		
		$n *= 3;		
		return $n;
	}
	
	/**
	 * Square and division (by 2) 
	 * 
     * @param int $n
     * @return double
	 */
	public function OperationC($n) {		
		$result = pow ($n, 2) / 2;
        return $result;
	}

	/**
	 * factorial
	 * 
     * @param int $n
     * @return int
	 */
	public function OperationD ($n) {
        $result = ($n > 0) ? $n * $this->OperationD ($n-1) : 1;
        return $result;
	}
	
	/**
	 * fabionacci
	 * 
     * @param int $n
     * @return int
	 */
	public function OperationE ($n) {
		$result = ($n > 1) ? $this->OperationE($n-1) + $this->OperationE($n-2) : $n;  
		return $result;
    }
    
    /** ---- Composite operations ---- **/
	
	/**
	 * Composite operation F
	 * 
     * @param int $n
     * @return double
	 */
	public function OperationF ($n) {
		$result = ($n > 0) ? ($n - 1) * 9 + 4.5 + $this->OperationF ($n-1) : $n;
		return $result;
	}
	  
	/**
	 * Composite operation: factorial min fabionacci
	 * 
     * @param int $n
     * @return int
	 */
	public function OperationG ($n) {
		$result = $this->OperationD ($n) - $this->OperationE ($n);
		return $result;
	}

}