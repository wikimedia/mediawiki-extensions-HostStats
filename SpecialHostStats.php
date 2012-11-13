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

	public function execute( $par ) {
		global $wgHostStatsCommands;
		$this->setHeaders();
		$this->getOutput()->setPageTitle( wfMessage( 'hoststats-title' )->escaped() );
		$outpage = wfMessage( 'hoststats-intro' )->escaped();
		$outpage .= "\n";
		foreach ( $wgHostStatsCommands as $cmd ) {
			$outpage .= '<h3>' . $cmd . '</h3>';
			$outpage .= "\n<pre>\n" . $this->query( $cmd ) . "</pre>";
		}
		$this->getOutput()->addWikiText( $outpage );
	}

	protected function query( $query ) {
		$output = wfShellExec( $query );
		return $output;
	}
}
