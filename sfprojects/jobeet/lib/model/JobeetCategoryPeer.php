<?php


/**
 * Skeleton subclass for performing query and update operations on the 'jobeet_category' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.0 on:
 *
 * 12/17/12 18:28:04
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class JobeetCategoryPeer extends BaseJobeetCategoryPeer {

	static public function getWithJobs()
	{
		$criteria = new Criteria();
		$criteria->addJoin(self::ID, JobeetJobPeer::CATEGORY_ID);
		$criteria->add(JobeetJobPeer::EXPIRES_AT, time(), Criteria::GREATER_THAN);
		$criteria->setDistinct();
        $criteria->add(JobeetJobPeer::IS_ACTIVATED,true);
 
		return self::doSelect($criteria);
  }

  static public function getForSlug($slug)
  {
      $criteria = new Criteria();
      $criteria->add(self::SLUG,$slug);

      return self::doSelectOne($criteria);
  }
} // JobeetCategoryPeer
