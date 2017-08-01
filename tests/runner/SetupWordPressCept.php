<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Setup WordPress');
$I->amOnPage("/wp-admin/setup-config.php?step=1");
$I->see("Below you should enter your database connection details.");
$I->fillField('dbname', 'wordpress_unit_test');
$I->fillField('uname', 'wordpressuser');
$I->click('.button');
$I->click('.button');
$I->fillField('weblog_title', 'AWS Remote Dev Server');
$I->fillField('user_name', 'admin');
//$I->fillField('#pass1-text', 'password');
$I->fillField(['id' => 'pass1-text'], 'password');
$I->fillField('admin_email', 'admin@email.com');
$I->click('.button');