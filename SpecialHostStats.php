<?php
/**
 * The file that implements Special:HostStats.
 *
 * @file
 * @ingroup Extensions
 */

class SpecialHostStats extends SpecialPage {
	public function __construct() {
		parent::__construct( 'HostStats' );
	}

	/**
	 * @param string|null $par
	 */
	public function execute( $par ) {
		global $wgHostStatsCommands;

		if ( !$this->getUser()->isAllowed( 'hoststats' ) ) {
			throw new PermissionsError( 'hoststats' );
		}

		$this->setHeaders();
		$this->getOutput()->setPageTitle( wfMessage( 'hoststats-title' )->escaped() );
		$outpage = wfMessage( 'hoststats-intro' )->escaped();
		$outpage .= "\n";
		foreach ( $wgHostStatsCommands as $cmd ) {
			$outpage .= '<h3>' . $cmd . '</h3>';
			$outpage .= "\n<pre>\n" . $this->query( $cmd ) . "</pre>";
		}
		$this->getOutput()->addWikiTextAsInterface( $outpage );
	}

	/**
	 * @inheritDoc
	 */
	protected function query( $query ) {
		$output = wfShellExec( $query );
		return $output;
	}

	/**
	 * @return string
	 */
	protected function getGroupName() {
		return 'wiki';
	}
}
