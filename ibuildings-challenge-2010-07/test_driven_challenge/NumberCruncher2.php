<?php
/**
 * NumberCruncher
 * @author [rg] r.gravestein <r.gravestein@triple-networks.com>, 16 jun 2010
 */
class NumberCruncher{
	public function __call($method,$args){
		return $this->{substr($method,9)}($args[0]);
	}
	public function A($n){
		$n+=4;
		return $n;
	}
	public function B($n){
		$n*=3;
		return $n;
	}
	public function C($n){
		$result=pow($n,2)/2;
		return $result;
	}
	public function D($n){
		$result=($n>0)?$n*$this->D($n-1):1;
		return $result;
	}
	public function E($n){
		$result=($n>1)?$this->E($n-1)+$this->E($n-2):$n;
		return $result;
	}
	public function F($n){
		$result=($n>0)?($n-1)*9+4.5+$this->F($n-1):$n;
		return $result;
	}
	public function G($n){
		$result=$this->D($n)-$this->E($n);
		return $result;
	}
}