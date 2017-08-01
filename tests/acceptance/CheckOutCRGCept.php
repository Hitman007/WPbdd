<?php

$I = new AcceptanceTester($scenario);

$I->wantTo('See that the browser can launch');
$I->maximizeWindow();
$I->amOnUrl("https://customrayguns.com");
$I->see("Idea Engineers");