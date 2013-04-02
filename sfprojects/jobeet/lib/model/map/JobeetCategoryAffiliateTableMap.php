<?php


/**
 * This class defines the structure of the 'jobeet_category_affiliate' table.
 *
 *
 * This class was autogenerated by Propel 1.4.0 on:
 *
 * 02/12/13 15:26:23
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class JobeetCategoryAffiliateTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.JobeetCategoryAffiliateTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('jobeet_category_affiliate');
		$this->setPhpName('JobeetCategoryAffiliate');
		$this->setClassname('JobeetCategoryAffiliate');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addForeignPrimaryKey('CATEGORY_ID', 'CategoryId', 'INTEGER' , 'jobeet_category', 'ID', true, null, null);
		$this->addForeignPrimaryKey('AFFILIATE_ID', 'AffiliateId', 'INTEGER' , 'jobeet_affiliate', 'ID', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('JobeetCategory', 'JobeetCategory', RelationMap::MANY_TO_ONE, array('category_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('JobeetAffiliate', 'JobeetAffiliate', RelationMap::MANY_TO_ONE, array('affiliate_id' => 'id', ), 'CASCADE', null);
	} // buildRelations()

	/**
	 * 
	 * Gets the list of behaviors registered for this table
	 * 
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
		);
	} // getBehaviors()

} // JobeetCategoryAffiliateTableMap
