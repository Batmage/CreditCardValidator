<?php
namespace Batmage\CreditCardValidator\Filter;

/**
 * Tests that the default filter works as expected
 *
 * @package CreditCardValidator
 * @author  Robbie Averill <robbie@averill.co.nz>
 */
class FilterDefaultTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Ensure that spaces and dashes are stripped, but nothing else
     * @param  string|int $input
     * @param  string     $expected
     * @dataProvider filterProvider
     */
    public function testFilter($input, $expected)
    {
        $filter = new FilterDefault;
        $result = $filter->filter($input);
        $this->assertSame($expected, $result);
    }

    public function filterProvider()
    {
        return array(
            array('        ', ''),
            array('   - - -     - - - ', ''),
            array('A string with spaces', 'Astringwithspaces'),
            array('A-string-with-dashes and spaces', 'Astringwithdashesandspaces'),
            array('  Spaces at start, dashes at end---', 'Spacesatstart,dashesatend')
        );
    }
}
