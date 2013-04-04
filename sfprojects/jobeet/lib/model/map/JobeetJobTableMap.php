<?php


/**
 * This class defines the structure of the 'jobeet_job' table.
 *
 *
 * This class was autogenerated by Propel 1.4.0 on:
 *
 * 04/04/13 11:33:53
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class JobeetJobTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.JobeetJobTableMap';

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
		$this->setName('jobeet_job');
		$this->setPhpName('JobeetJob');
		$this->setClassname('JobeetJob');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('CATEGORY_ID', 'CategoryId', 'INTEGER', 'jobeet_category', 'ID', true, null, null);
		$this->addColumn('TYPE', 'Type', 'VARCHAR', false, 255, null);
		$this->addColumn('COMPANY', 'Company', 'VARCHAR', true, 255, null);
		$this->addColumn('LOGO', 'Logo', 'VARCHAR', false, 255, null);
		$this->addColumn('URL', 'Url', 'VARCHAR', false, 255, null);
		$this->addColumn('POSITION', 'Position', 'VARCHAR', true, 255, null);
		$this->addColumn('LOCATION', 'Location', 'VARCHAR', true, 255, null);
		$this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', true, null, null);
		$this->addColumn('HOW_TO_APPLY', 'HowToApply', 'LONGVARCHAR', true, null, null);
		$this->addColumn('TOKEN', 'Token', 'VARCHAR', true, 255, null);
		$this->addColumn('IS_PUBLIC', 'IsPublic', 'BOOLEAN', true, null, true);
		$this->addColumn('IS_ACTIVATED', 'IsActivated', 'BOOLEAN', true, null, false);
		$this->addColumn('EMAIL', 'Email', 'VARCHAR', true, 255, null);
		$this->addColumn('EXPIRES_AT', 'ExpiresAt', 'TIMESTAMP', true, null, null);
		$this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
		$this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('JobeetCategory', 'JobeetCategory', RelationMap::MANY_TO_ONE, array('category_id' => 'id', ), null, null);
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
			'symfony_timestampable' => array('create_column' => 'created_at', 'update_column' => 'updated_at', ),
		);
	} // getBehaviors()

} // JobeetJobTableMap
