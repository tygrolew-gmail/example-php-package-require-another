<?php
namespace TygrolewGmail\Page;

use TygrolewGmail\Page\Item\IFooterCreator;
use TygrolewGmail\Page\Item\TextFooterCreator;
use TygrolewGmail\Page\Item\DomFooterCreator;

use TygrolewGmail\Page\Item\IHeaderCreator;
use TygrolewGmail\Page\Item\TextHeaderCreator;
use TygrolewGmail\Page\Item\DomHeaderCreator;

class ExamplePageCreator
{
  public function getPage()
  {
    displayHeader( new TextHeaderCreator("Tytuł strony") );
    echo "Test content";
    displayFooter( new TextFooterCreator() );
  }
}
