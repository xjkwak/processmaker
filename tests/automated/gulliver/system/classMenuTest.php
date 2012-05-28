<?php 
  require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php'; 
  require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php'; 
  require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php'; 
  require_once PATH_TRUNK . 'gulliver/system/class.menu.php'; 

  /** 
   * Generated by ProcessMaker Test Unit Generator on 2012-05-10 at 20:39:58.
  */ 

  class classMenuTest extends PHPUnit_Framework_TestCase 
  { 
    /**
    * @covers Menu::SetClass
    * @todo   Implement testSetClass().
    */
    public function testSetClass() 
    { 
        if (class_exists('Menu')) {
             $methods = get_class_methods( 'Menu');
            $this->assertTrue( in_array( 'SetClass', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Menu::Load
    * @todo   Implement testLoad().
    */
    public function testLoad() 
    { 
        if (class_exists('Menu')) {
             $methods = get_class_methods( 'Menu');
            $this->assertTrue( in_array( 'Load', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Menu::OptionCount
    * @todo   Implement testOptionCount().
    */
    public function testOptionCount() 
    { 
        if (class_exists('Menu')) {
             $methods = get_class_methods( 'Menu');
            $this->assertTrue( in_array( 'OptionCount', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Menu::AddOption
    * @todo   Implement testAddOption().
    */
    public function testAddOption() 
    { 
        if (class_exists('Menu')) {
             $methods = get_class_methods( 'Menu');
            $this->assertTrue( in_array( 'AddOption', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Menu::AddIdOption
    * @todo   Implement testAddIdOption().
    */
    public function testAddIdOption() 
    { 
        if (class_exists('Menu')) {
             $methods = get_class_methods( 'Menu');
            $this->assertTrue( in_array( 'AddIdOption', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Menu::AddRawOption
    * @todo   Implement testAddRawOption().
    */
    public function testAddRawOption() 
    { 
        if (class_exists('Menu')) {
             $methods = get_class_methods( 'Menu');
            $this->assertTrue( in_array( 'AddRawOption', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Menu::AddIdRawOption
    * @todo   Implement testAddIdRawOption().
    */
    public function testAddIdRawOption() 
    { 
        if (class_exists('Menu')) {
             $methods = get_class_methods( 'Menu');
            $this->assertTrue( in_array( 'AddIdRawOption', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Menu::DisableOptionPos
    * @todo   Implement testDisableOptionPos().
    */
    public function testDisableOptionPos() 
    { 
        if (class_exists('Menu')) {
             $methods = get_class_methods( 'Menu');
            $this->assertTrue( in_array( 'DisableOptionPos', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Menu::DisableOptionId
    * @todo   Implement testDisableOptionId().
    */
    public function testDisableOptionId() 
    { 
        if (class_exists('Menu')) {
             $methods = get_class_methods( 'Menu');
            $this->assertTrue( in_array( 'DisableOptionId', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Menu::RenderOption
    * @todo   Implement testRenderOption().
    */
    public function testRenderOption() 
    { 
        if (class_exists('Menu')) {
             $methods = get_class_methods( 'Menu');
            $this->assertTrue( in_array( 'RenderOption', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Menu::generateArrayForTemplate
    * @todo   Implement testgenerateArrayForTemplate().
    */
    public function testgenerateArrayForTemplate() 
    { 
        if (class_exists('Menu')) {
             $methods = get_class_methods( 'Menu');
            $this->assertTrue( in_array( 'generateArrayForTemplate', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

  } 