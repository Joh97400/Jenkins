<?php
class DefaultTest extends PHPUnit_Extensions_Selenium2TestCase {

    /*
     * Setup
     */
    protected function setUp() {
        $this->setHost('http://localhost');
        $this->setBrowser('chrome');
        $this->setBrowserUrl('http://www.google.com');
    }
	
    /**
     * @test
     */
    public function testTitle() {
        $this->url('http://www.google.com');
        $this->assertEquals('Google', $this->title());
    }
}
?>