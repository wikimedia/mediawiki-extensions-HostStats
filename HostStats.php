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

$wgExtensionCredits['specialpage'][] = array(
        'name' => 'HostStats',
        'author' => 'Hydriz',
        'url' => 'http://www.mediawiki.org/wiki/Extension:HostStats',
        'descriptionmsg' => 'hoststats-desc',
        'version' => '1.2.0',
);

// An array of commands that you wish to run and output.
$wgHostStatsCommands = array(
	'hostname',
	'df -h'
);

$dir = dirname(__FILE__) . '/';
$wgAutoloadClasses['SpecialHostStats'] = $dir . 'SpecialHostStats.php';
$wgExtensionMessagesFiles['HostStats'] = $dir . 'HostStats.i18n.php';
$wgSpecialPages['HostStats'] = 'SpecialHostStats';
