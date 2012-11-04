## HostStats

HostStats is a MediaWiki extension for displaying the host statistics of the server hosting the wiki. The commands that you wish to run and display to the public is configurable with `$wgHostStatsCommands`.

### Installing and Configuring
To install this extension, either git clone this repository or download one of the git tag tarballs and extract it in the extensions directory. After that, add this to your wiki's LocalSettings.php:

	require_once("$IP/extensions/HostStats/HostStats.php");

If you need, you can configure the commands you wish to run and display using `$wgHostStatsCommands`. The default is:

	$wgHostStatsCommands = array(
		'hostname',
		'df -h'
	);

**Note**: You are configuring this at your own risk! Such commands may accidentally reveal information that an attacker may steal and manipulate to launch an attack against your server!

### Issues/Questions?
Proceed directly to the [issue tracker](https://github.com/Hydriz/HostStats/issues) and create a new issue. It will be looked at as soon as possible.
