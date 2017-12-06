<?php

$I = /*am a */ new AcceptanceTester($scenario);

$I->wantTo('See that a test will fail on purpose');
$I->amOnUrl("https://wordpress-bdd.com");
$I->see("Some gibberish text.");