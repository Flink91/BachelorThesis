<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2010 Michael Knoll <mimi@kaktusteam.de>
 *           Daniel Lienert <daniel@lienert.cc>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Builder for tree repository
 *
 *
 * @package Tree
 * @author Michael Knoll <mimi@kaktusteam.de>
 */
class Tx_PtExtbase_Tree_TreeRepositoryBuilder
{
    /**
     * @var \TYPO3\CMS\Extbase\Object\ObjectManagerInterface
     */
    protected $objectManager;


    /**
     * Holds singleton instance of TreeRepositoryBuilder
     *
     * @var Tx_PtExtbase_Tree_TreeRepositoryBuilder
     */
    private static $instance = null;


    /**
     * Holds class name of node repository
     *
     * @var string
     */
    protected $nodeRepositoryClassName = 'Tx_PtExtbase_Tree_NodeRepository';


    /**
     * Holds class name for tree storage
     *
     * @var string
     */
    protected $treeStorageClassName = 'Tx_PtExtbase_Tree_NestedSetTreeStorage';


    /**
     * Holds class name for tree builder
     *
     * @var Holds class name for tree builder
     */
    protected $treeBuilderClassName = 'Tx_PtExtbase_Tree_TreeBuilder';


    /**
     * Holds restricted depth of tree to be build
     *
     * @var integer
     */
    protected $restrictedDepth = -1;


    /**
     * @param \TYPO3\CMS\Extbase\Object\ObjectManagerInterface $objectManager
     */
    public function injectObjectManager(\TYPO3\CMS\Extbase\Object\ObjectManagerInterface $objectManager)
    {
        $this->objectManager = $objectManager;
    }


    /**
     * Returns singleton instance of this class
     *
     * @return Tx_PtExtbase_Tree_TreeRepositoryBuilder
     */
    public static function getInstance()
    {
        if (self::$instance === null) {
            $objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\CMS\Extbase\Object\ObjectManager');
            self::$instance = $objectManager->get('Tx_PtExtbase_Tree_TreeRepositoryBuilder');
        }
        return self::$instance;
    }


    /**
     * return Tx_PtExtbase_Tree_TreeRepositoryBuilder
     */
    public function __construct()
    {
    }


    /**
     * Returns instance of tree repository
     *
     * @return Tx_PtExtbase_Tree_TreeRepository
     */
    public function buildTreeRepository()
    {
        $nodeRepository = $this->buildNodeRepository();

        $treeBuilder = $this->buildTreeBuilder($nodeRepository);
        $treeBuilder->setRestrictedDepth($this->restrictedDepth);

        $treeStorage = $this->buildTreeStorage($nodeRepository);

        return $this->objectManager->get('Tx_PtExtbase_Tree_TreeRepository', $nodeRepository, $treeBuilder, $treeStorage);
    }


    /**
     * Setter for node repository class name
     *
     * @param $nodeRepositoryClassName
     */
    public function setNodeRepositoryClassName($nodeRepositoryClassName)
    {
        $this->nodeRepositoryClassName = $nodeRepositoryClassName;
    }


    /**
     * Setter for tree storage classe name
     *
     * @param $treeStorageClassName
     */
    public function setTreeStorageClassName($treeStorageClassName)
    {
        $this->treeStorageClassName = $treeStorageClassName;
    }


    /**
     * Setter for tree builder class name
     *
     * @param $treeBuilderClassName
     */
    public function setTreeBuilderClassName($treeBuilderClassName)
    {
        $this->treeBuilderClassName = $treeBuilderClassName;
    }


    /**
     * Setter for restricted depth
     *
     * @param $restrictedDepth
     */
    public function setRestrictedDepth($restrictedDepth)
    {
        $this->restrictedDepth = $restrictedDepth;
    }


    /**
     * Returns instance of node repository for class name set in builder
     *
     * @return Tx_PtExtbase_Tree_NodeRepositoryInterface Instance of node repository
     * @throws Exception
     */
    protected function buildNodeRepository()
    {
        if (!$this->nodeRepositoryClassName) {
            throw new Exception('No Repository Class Name given.', 1369732947);
        }
        if (!class_exists($this->nodeRepositoryClassName)) {
            throw new Exception('The given class ' . $this->nodeRepositoryClassName . ' does not exist!', 1328287190);
        }

        $nodeRepository = $this->objectManager->get($this->nodeRepositoryClassName);

        if (!is_a($nodeRepository, 'Tx_PtExtbase_Tree_NodeRepositoryInterface')) {
            throw new Exception('Given class name ' . $this->nodeRepositoryClassName . ' must implement Tx_PtExtbase_Tree_NodeRepositoryInterface!', 1328201591);
        }
        return $nodeRepository;
    }


    /**
     * Returns instance of tree builder for class name set in builder
     *
     * @param Tx_PtExtbase_Tree_NodeRepositoryInterface $nodeRepository
     * @throws Exception
     * @return Tx_PtExtbase_Tree_TreeBuilderInterface
     */
    protected function buildTreeBuilder(Tx_PtExtbase_Tree_NodeRepositoryInterface $nodeRepository)
    {
        $treeBuilder = new $this->treeBuilderClassName($nodeRepository);

        if (!is_a($treeBuilder, 'Tx_PtExtbase_Tree_TreeBuilderInterface')) {
            throw new Exception('Given class name ' . $this->treeBuilderClassName . ' must implement Tx_PtExtbase_Tree_TreeBuilderInterface!', 1328201592);
        }
        /* @var $treeBuilder Tx_PtExtbase_Tree_TreeBuilderInterface */

        $treeBuilder->setRespectRestrictedDepth(true);
        $treeBuilder->setRestrictedDepth($this->restrictedDepth);

        return $treeBuilder;
    }


    /**
     * Returns instance of tree storage for class name set in builder
     *
     * @param Tx_PtExtbase_Tree_NodeRepositoryInterface $nodeRepository
     * @throws Exception
     * @return Tx_PtExtbase_Tree_TreeStorageInterface
     */
    protected function buildTreeStorage(Tx_PtExtbase_Tree_NodeRepositoryInterface $nodeRepository)
    {
        $treeStorage = new $this->treeStorageClassName($nodeRepository);
        if (!is_a($treeStorage, 'Tx_PtExtbase_Tree_TreeStorageInterface')) {
            throw new Exception('Given class name ' . $this->treeStorageClassName . ' does not implement Tx_PtExtbase_Tree_TreeStorageInterface!', 1328201593);
        }
        return $treeStorage;
    }
}
