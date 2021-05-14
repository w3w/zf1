<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Test
 * @subpackage PHPUnit
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
 */

use PHPUnit\Framework\AssertionFailedError;
use SebastianBergmann\Comparator\ComparisonFailure;

/**
 * Zend_Test_PHPUnit_Constraint_Exception
 *
 * @uses       PHPUnit_Framework_ExpectationFailedException
 * @category   Zend
 * @package    Zend_Test
 * @subpackage PHPUnit
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Test_PHPUnit_Constraint_Exception extends AssertionFailedError
{
    /**
     * @var ComparisonFailure
     */
    protected $comparisonFailure;

    public function __construct(string $message, ComparisonFailure $comparisonFailure = null, Exception $previous = null)
    {
        $this->comparisonFailure = $comparisonFailure;

        parent::__construct($message, 0, $previous);
    }

    public function getComparisonFailure(): ?ComparisonFailure
    {
        return $this->comparisonFailure;
    }

}
