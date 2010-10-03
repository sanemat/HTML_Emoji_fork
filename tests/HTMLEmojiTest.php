<?php
require_once 'HTML/Emoji.php';
class HTMLEmojiTest extends PHPUnit_Framework_TestCase
{
  public function testInit()
  {
    $emoji = HTML_Emoji::getInstance('docomo');
    $this->assertEquals($emoji->isSjisCarrier(), true, 'sjisなキャリアであること');
  }
}
?>
