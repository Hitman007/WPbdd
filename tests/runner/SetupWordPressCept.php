<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Setup WordPress');
$I->amOnPage("/");
$I->see("Welcome to WordPress.");