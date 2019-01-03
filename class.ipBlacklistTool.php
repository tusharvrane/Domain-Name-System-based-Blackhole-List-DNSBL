<?php
/*
	-> 1. We have used baracuda central service for DNSBL
	-> 2. As per rule whenever you need to test the ip address you will have to inverse the ip address first and then place a request
*/

error_reporting(-1);
ini_set('display_errors', 'On');

class ipBlacklistTool{

	public $ip;
	private $message;

/**
	@param array $ip_address
*/
	public function set_ip($ip_address)
	{
		if(!is_array($ip_address))
		{
			throw new Exception("Ip address should be an array element");
			exit;
		}

		$this->ip = $ip_address;
	}

	public function get_result()
	{
		$result = array();

		foreach($this->ip as $ip_address)
		{
			//inversing ip address as mentioned in above point 2
			$ip_list = array_reverse(explode('.', $ip_address));
			$rev_address = implode('.', $ip_list);

			$check_result = shell_exec("host $rev_address.b.barracudacentral.org");

			if(strpos($check_result, 'has address'))
			{
				$result[] = array('ip' => $ip_address, 'status' => 'flagged');
			}else{
				$result[] = array('ip' => $ip_address, 'status' => 'unflagged');
			}
		}

		return $result;	
	}
}



