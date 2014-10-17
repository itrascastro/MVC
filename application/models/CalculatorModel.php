<?php
/**
 * xenFramework (http://xenframework.com/)
 *
 * This file is part of the xenframework package.
 *
 * (c) Ismael Trascastro <itrascastro@xenframework.com>
 *
 * @link        http://github.com/xenframework for the canonical source repository
 * @copyright   Copyright (c) xenFramework. (http://xenframework.com)
 * @license     MIT License - http://en.wikipedia.org/wiki/MIT_License
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace models;


class CalculatorModel 
{
    private $_op1;
    private $_op2;
    private $_result;

    public function __construct($_op1, $_op2)
    {
        $this->_op1 = $_op1;
        $this->_op2 = $_op2;
    }

    public function sum()
    {
        $this->_result = $this->_op1 + $this->_op2;
    }

    public function subtract()
    {
        $this->_result = $this->_op1 - $this->_op2;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->_result;
    }

}