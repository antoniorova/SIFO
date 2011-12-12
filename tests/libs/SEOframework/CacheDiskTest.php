<?php

CoverageAnalysis::add( ROOT_PATH . '/libs/Sifo/CacheDisk.php' );

/**
 * Test class for CacheDisk.
 * Generated by PHPUnit on 2009-11-01 at 12:17:06.
 */
class CacheDiskTest extends PHPUnit_Extensions_ControllerTest
{
    /**
     * @var CacheDisk
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = $this->getProxyClass( 'CacheDisk', array( 'Sifo' ) );
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
		$this->object = null;
    }

	/**
	 * Test object correct creation.
	 */
	public function testObjectCreation()
	{
		$this->assertTrue( $this->object instanceof \Sifo\CacheDisk );
	}

	/**
	 * Test singleton.
	 */
	public function testGetInstance()
	{
		$object = \Sifo\CacheDisk::singleton();
		$this->assertTrue( $object instanceof \Sifo\CacheDisk );

		$singleton = \Sifo\CacheDisk::singleton();
		$this->assertEquals( $object, $singleton );
	}
}
?>
