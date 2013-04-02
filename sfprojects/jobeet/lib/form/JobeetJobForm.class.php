<?php

/**
 * JobeetJob form.
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class JobeetJobForm extends BaseJobeetJobForm
{
  public function configure()
  {
	 $this->removeFields();

	/*$this->useFields(array('category_id','type','company','logo','url','position','location','description','how_to_apply','token','is_public','email'));*/
	
	//$this->validatorSchema['email'] = new sfValidatorEmail(); 
	$this->validatorSchema['email'] = new sfValidatorAnd(array(
		$this->validatorSchema['email'],
		new sfValidatorEmail(),
	));


	$this->widgetSchema['type'] = new sfWidgetFormChoice(array(
		'choices' => JobeetJobPeer::$types,
		'expanded' => true,
	));

	$this->validatorSchema['type'] = new sfValidatorChoice(array(
		'choices' => array_keys(JobeetJobPeer::$types),
	));

	
	$this->widgetSchema['logo'] = new sfWidgetFormInputFile(array(
		'label' => 'Company logo',
	));
	
	$this->widgetSchema->setLabels(array(
		'category_id' => 'Category',
		'is_public' => 'Public?',
		'how_to_apply' => 'How to apply?',
	));
	
	$this->validatorSchema['logo'] = new sfValidatorFile(array(
		'required' => false,
		'path' => sfConfig::get('sf_upload_dir').'/jobs',
		'mime_types' => 'web_images',
	));
	
	$this->widgetSchema->setHelp('is_public','Whether the job can also be published on affiliate websites or not.');

    $this->widgetSchema->setNameFormat('job[%s]');
  }

    protected function removeFields()
    {
        unset(
            $this['created_at'],$this['updated_at'],
            $this['expires_at'],$this['is_activated'],
            $this['token']
        );
    }
}
