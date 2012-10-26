<?php
/**
 * The file that implements Special:HostStats.
 * 
 * @file
 * @ingroup Extensions
 */

class SpecialHostStats extends SpecialPage {
	function __construct() {
		parent::__construct( 'HostStats' );
	}

	function execute( $par ) {
		global $wgRequest, $wgOut;
		global $wgHostStatsCommands;
		$this->setHeaders();
		$wgOut->setPageTitle( wfMessage( 'hoststats-title' ) );
		$outpage = wfMessage( 'hoststats-intro' );
		$outpage .= "\n";
		foreach ( $wgHostStatsCommands as $cmd ) {
			$outpage .= '<h3>' . $cmd . '</h3>';
			$outpage .= "\n<pre>\n" . $this->query( $cmd ) . "</pre>";
		}
		$wgOut->addWikiText( $outpage );
	}

	function query( $query ) {
		$output = wfShellExec( $query );
		return $output;
	}
}
