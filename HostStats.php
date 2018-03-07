<?php
/**
 * The HostStats extension adds a special page that displays
 * the statistics of the host that the wiki is running on.
 *
 * This extension may expose some private information about
 * your server, so please use it with care, especially when
 * you change $wgHostStatsCommands below.
 *
 * @file
 * @ingroup Extensions
 */

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'HostStats' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['HostStats'] = __DIR__ . '/i18n';
	$wgExtensionMessagesFiles['HostStatsAlias'] = __DIR__ . '/HostStats.alias.php';
	/* wfWarn(
		'Deprecated PHP entry point used for HostStats extension. Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	); */
	return true;
} else {
	die( 'This version of the HostStats extension requires MediaWiki 1.29+' );
}
