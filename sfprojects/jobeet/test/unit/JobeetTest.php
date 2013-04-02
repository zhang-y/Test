// test/unit/JobeetTest.php
<?php
require_once dirname(__FILE__).'/../bootstrap/unit.php';
 
$t = new lime_test(4);

$t->is(Jobeet::slugify('Sensio'),'sensio');
$t->is(Jobeet::slugify('sensio labs'),'sensio-labs');
$t->is(Jobeet::slugify('sensio   labs'),'sensio-labs');
$t->is(Jobeet::slugify('paris,france'),'paris-france');

?>