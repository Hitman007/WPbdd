<?php

$I = new AcceptanceTester($scenario);

$I->amOnPage('/');
$I->seeElement('body.home');
