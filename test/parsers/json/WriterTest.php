<?php

use \grinfeld\phpjsonable\utils\streams\StringOutputStream;
use \grinfeld\phpjsonable\parsers\json\Writer;
use grinfeld\phpjsonable\parsers\json\Json;

/**
 * @author Grinfeld Mikhail
 * @since 8/26/2015.
 */
class WriterTest extends PHPUnit_Framework_TestCase {
    public function testParse() {

        $str = new StringOutputStream();
        Json::encode("string", $str);
        $this->assertEquals("\"string\"", $str->toString(), "Should be \"string\"");

        $str = new StringOutputStream();
        (new Writer($str))->parse("string");
        $this->assertEquals("\"string\"", $str->toString(), "Should be \"string\"");
    }
}