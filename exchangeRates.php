<?php

namespace Uniwizard;

class ExchangeRates {
	protected $cc = '';
	protected $cnbc = '';
	
	public function setCurrencyCode($code) {
		$this->cc = $code;
	}
	
	public function setCurrencyNationalBankCode($code) {
		$this->cnbc = $code;
	}
	
	public function getExchangeRate() {
		return $this->cc;
	}
}
