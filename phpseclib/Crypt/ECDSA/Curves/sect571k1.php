<?php

/**
 * sect571k1
 *
 * PHP version 5 and 7
 *
 * @category  Crypt
 * @package   ECDSA
 * @author    Jim Wiggint  on <terrafrost@php.net>
 * @copyright 2017 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://pear.php.net/package/Math_BigInteger
 */

namespace phpseclib\Crypt\ECDSA\Curves;

use phpseclib\Crypt\ECDSA\BaseCurves\Binary;
use phpseclib\Math\BigInteger;

class sect571k1 extends Binary
{
    public function __construct()
    {
        $this->setModulo(571, 10, 5, 2, 0);
        $this->setCoefficients(
            '000000000000000000000000000000000000000000000000000000000000000000000000' .
            '000000000000000000000000000000000000000000000000000000000000000000000000',
            '000000000000000000000000000000000000000000000000000000000000000000000000' .
            '000000000000000000000000000000000000000000000000000000000000000000000001'
        );
        $this->setBasePoint(
            '026EB7A859923FBC82189631F8103FE4AC9CA2970012D5D46024804801841CA443709584' .
            '93B205E647DA304DB4CEB08CBBD1BA39494776FB988B47174DCA88C7E2945283A01C8972',
            '0349DC807F4FBF374F4AEADE3BCA95314DD58CEC9F307A54FFC61EFC006D8A2C9D4979C0' .
            'AC44AEA74FBEBBB9F772AEDCB620B01A7BA7AF1B320430C8591984F601CD4C143EF1C7A3'
        );
        $this->setOrder(new BigInteger(
            '020000000000000000000000000000000000000000000000000000000000000000000000' .
            '131850E1F19A63E4B391A8DB917F4138B630D84BE5D639381E91DEB45CFE778F637C1001', 16
        ));
    }
}
