<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_Crypt
 */
namespace Zend\Crypt\Password\Exception;

use Zend\Crypt\Exception;

/**
 * Invalid argument exception
 *
 * @category   Zend
 * @package    Zend_Crypt
 * @subpackage Exception
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class InvalidArgumentException
<<<<<<< Updated upstream
    extends \InvalidArgumentException
    implements ExceptionInterface
{
}
=======
    extends Exception\InvalidArgumentException
    implements ExceptionInterface
{}
>>>>>>> Stashed changes
