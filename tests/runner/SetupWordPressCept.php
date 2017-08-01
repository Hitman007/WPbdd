<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Setup WordPress');
$I->amOnPage("/wp-admin/setup-config.php?step=1");
$I->see("Below you should enter your database connection details.");
$I->fillField('uname', 'wordpressuser');
$I->click('.button');