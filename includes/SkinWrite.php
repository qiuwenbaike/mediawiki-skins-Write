<?php

use MediaWiki\MediaWikiServices;
use MediaWiki\Output\OutputPage;

/**
 * SkinTemplate class for the Write skin
 *
 * @ingroup Skins
 */
class SkinWrite extends SkinTemplate {
	/** @var string lowercase skin name */
	public $skinname = 'write';
	/** @var string full skin name */
	public $stylename = 'Write';
	/** @var string skin template */
	public $template = 'WriteTemplate';

	/**
	 * Add meta tags
	 *
	 * @param OutputPage $out OutputPage
	 */
	public function initPage( OutputPage $out ): void {
		parent::initPage( $out );

		$out->addMeta( 'theme-color', (string)$this->getConfig()->get( 'WriteColor' ) );

		if ( MediaWikiServices::getInstance()
			->getUserOptionsLookup()
			->getOption( $this->getUser(), 'skin-responsive' ) ) {
				$out->addMeta( 'viewport', 'width=device-width' );
		}
	}
}
