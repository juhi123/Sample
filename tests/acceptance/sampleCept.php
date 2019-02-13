<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('visit my blog website see the number of views I got!');
$I->amOnPage('/');
$I->waitForElementVisible('.widget_blog-stats',30);
$I->seeElement('.widget_blog-stats');
?>
