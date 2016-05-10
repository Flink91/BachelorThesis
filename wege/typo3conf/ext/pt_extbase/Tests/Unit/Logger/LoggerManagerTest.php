<?php

namespace PunktDe\PtExtbase\Tests\Unit\Logger;

/***************************************************************
 *  Copyright (C) 2014 punkt.de GmbH
 *  Authors: el_equipo <opiuqe_le@punkt.de>
 *
 *  This script is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Lesser General Public License as published
 *  by the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Lesser General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Logger Manager Testcase
 *
 * @package pt_extbase
 */
class LoggerManagerTest extends \Tx_PtExtbase_Tests_Unit_AbstractBaseTestcase
{
    /**
     * @var \PunktDe\PtExtbase\Logger\LoggerManager
     */
    protected $proxy;


    /**
     * @return void
     */
    public function setUp()
    {
        $proxyClass = $this->buildAccessibleProxy('PunktDe\\PtExtbase\\Logger\\LoggerManager');
        $this->proxy = new $proxyClass();
    }



    /**
     * @return array
     */
    public function unifyComponentNameUnifiesComponentNameDataProvider()
    {
        return array(
            'deprecatedClassName' => array(
                'componentName' => 'Tx_Acme_Utility_ToonDrawer',
                'expected' => 'Tx.Acme.Utility.ToonDrawer'
            ),
            'namespacedClassName' => array(
                'componentName' => 'Acme\\Utility\\ToonDrawer',
                'expected' => 'Acme.Utility.ToonDrawer'
            ),
            'dotSeparatedComponentName' => array(
                'componentName' => 'acme.utility.toondrawer',
                'expected' => 'acme.utility.toondrawer'
            ),
            'componentNameWithoutSeparator' => array(
                'componentName' => 'AcmeUtilityToonDrawer',
                'expected' => 'AcmeUtilityToonDrawer'
            ),
        );
    }



    /**
     * @test
     * @dataProvider unifyComponentNameUnifiesComponentNameDataProvider
     *
     * @param string $componentName
     * @param string $expected
     */
    public function unifyComponentNameUnifiesComponentName($componentName, $expected)
    {
        $actual = $this->proxy->_call('unifyComponentName', $componentName);
        $this->assertSame($expected, $actual);
    }



    /**
     * @return array
     */
    public function evaluateIndexNameByComponentNameDataProvider()
    {
        return array(
            'noConfigurationAvailable' => array(
                'componentName' => 'Tx.Acme.Utility.ToonDrawer',
                'loggerConfigurationConfiguration' => array(
                ),
                'expected' => 'PTEXTBASE'
            ),
            'onlyWriterConfigurationAvailable' => array(
                'componentName' => 'Tx.Acme.Utility.ToonDrawer',
                'loggerConfigurationConfiguration' => array(
                    'Tx' => array(
                        'writerConfiguration' => array(
                            'Duffy', 'Duck'
                        )
                    )
                ),
                'expected' => 'PTEXTBASE.Tx'
            ),
            'onlyProcessorConfigurationAvailable' => array(
                'componentName' => 'Tx.Acme.Utility.ToonDrawer',
                'loggerConfiguration' => array(
                    'Tx' => array(
                        'processorConfiguration' => array(
                            'Duffy', 'Duck'
                        )
                    )
                ),
                'expected' => 'PTEXTBASE.Tx'
            ),
            'levelTwoConfigurationAvailable' => array(
                'componentName' => 'Tx.Acme.Utility.ToonDrawer',
                'loggerConfiguration' => array(
                    'Tx' => array(
                        'Acme' => array(
                            'processorConfiguration' => array(
                                'Duffy', 'Duck'
                            )
                        )
                    )
                ),
                'expected' => 'PTEXTBASE.Tx.Acme'
            ),
            'maximumSpecificConfigurationAvailable' => array(
                'componentName' => 'Tx.Acme.Utility.ToonDrawer',
                'loggerConfiguration' => array(
                    'Tx' => array(
                        'Acme' => array(
                            'Utility' => array(
                                'ToonDrawer' => array(
                                    'processorConfiguration' => array(
                                        'Duffy', 'Duck'
                                    )
                                )
                            )
                        )
                    )
                ),
                'expected' => 'PTEXTBASE.Tx.Acme.Utility.ToonDrawer'
            ),
            'writerAndProcessorWithConfigurationOfUnequalSpecificityAvailable' => array(
                'componentName' => 'Tx.Acme.Utility.ToonDrawer',
                'loggerConfiguration' => array(
                    'Tx' => array(
                        'Acme' => array(
                            'Utility' => array(
                                'ToonDrawer' => array(
                                    'processorConfiguration' => array(
                                        'Duffy', 'Duck'
                                    )
                                )
                            )
                        ),
                        'writerConfiguration' => array(
                            'Bugs', 'Bunny'
                        )
                    )
                ),
                'expected' => 'PTEXTBASE.Tx.Acme.Utility.ToonDrawer'
            )
        );
    }



    /**
     * @test
     * @dataProvider evaluateIndexNameByComponentNameDataProvider
     *
     * @param string $componentName
     * @param array $loggerConfiguration
     * @param string $expected
     */
    public function evaluateIndexNameByComponentName($componentName, $loggerConfiguration, $expected)
    {
        $this->proxy->_set('loggerConfiguration', $loggerConfiguration);
        $actual = $this->proxy->_call('evaluateIndexNameByComponentName', $componentName);
        $this->assertSame($expected, $actual);
    }



    /**
     * @return array
     */
    public function getLoggerCreatesValidIndexOfLoggersAndReturnsLoggerWithCorrectComponentNameDataProvider()
    {
        return array(
            array(
                'loggerNames' => array(
                    'Tx.Acme.Utility.ToonDrawer',
                    'Tx.Acme.Utility',
                    'Tx.Acme',
                    'Tx.Roadrunner',
                ),
                'loggerConfiguration' => array(
                    'Tx' => array(
                        'Acme' => array(
                            'processorConfiguration' => array(
                                'Duffy', 'Duck'
                            )
                        )
                    )
                ),
                'expectedLoggerIndexKeys' => array(
                    '',
                    'PTEXTBASE.Tx.Acme',
                    'PTEXTBASE.Tx',
                )
            ),
        );
    }



    /**
     * @test
     * @dataProvider getLoggerCreatesValidIndexOfLoggersAndReturnsLoggerWithCorrectComponentNameDataProvider
     *
     * @param array $loggerNames
     * @param array $loggerConfiguration
     * @param array $expectedLoggerIndexKeys
     */
    public function getLoggerCreatesValidIndexOfLoggersAndReturnsLoggerWithCorrectComponentName($loggerNames, $loggerConfiguration, $expectedLoggerIndexKeys)
    {
        $this->proxy->_set('loggerConfiguration', $loggerConfiguration);

        foreach ($loggerNames as $loggerName) {
            $logger = $this->proxy->getLogger($loggerName);
        }

        $actualLoggerIndexKeys = $this->proxy->getLoggerNames();
        $this->assertSame($expectedLoggerIndexKeys, $actualLoggerIndexKeys, 'Expected and actual logger index keys are not equal');
    }
}
