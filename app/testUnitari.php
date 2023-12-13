<?php
	
	require_once(__DIR__ . '/vendor/autoload.php');
	use \PHPUnit\Framework\TestCase;
		
	class  testUnitari extends PHPUnit\Framework\TestCase {
	 
		public function testSubxarxa(){
			# Test 1
			$sub = new IPv4\SubnetCalculator("192.168.1.10", "27");
			$network= $sub->getNetworkPortion();
			$this->assertEquals("192.168.1.0", $network);
			# Test 2
			$sub = new IPv4\SubnetCalculator("192.168.1.167", "28");
			$network= $sub->getNetworkPortion();
			$this->assertEquals("192.168.1.160", $network);						
		}
		
		public function testNumHosts(){
			# Test 1
			$sub = new IPv4\SubnetCalculator("192.168.1.167", "28");
			$numberHosts = $sub->getNumberAddressableHosts();
			$this->assertEquals(14, $numberHosts);
			# Test 2
			$sub = new IPv4\SubnetCalculator("192.168.1.211", "26");
			$numberHosts = $sub->getNumberAddressableHosts();
			$this->assertEquals(62, $numberHosts);				
		}
		
		public function testBroadcast(){
			# Test 1
			$sub = new IPv4\SubnetCalculator("192.168.1.167", "28");
			$broadcastAddress = $sub->getBroadcastAddress();
			$this->assertEquals("192.168.1.175", $broadcastAddress);
			# Test 2
			$sub = new IPv4\SubnetCalculator("192.168.1.47", "27");
			$broadcastAddress = $sub->getBroadcastAddress();
			$this->assertEquals("192.168.1.63", $broadcastAddress);				
		}		
 	}
?>
	
	
