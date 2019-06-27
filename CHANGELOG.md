## HostStats

HostStats is a MediaWiki extension for displaying the
host statistics of the server hosting the wiki.

This file documents the development changes.

### 2.0.0

Released on 2019-06-27

- Remove initial settings to configuration parameter `$wgHostStatsCommands`
- Converted to PHP short array syntax
- Removed deprecated PHP entry point
- Translation updates by translatewiki.net community

### 1.5.0

Released on 2018-02-06

- Converted to extension registration
- Dropped compatibility with MediaWiki 1.28 and lower
- Translation updates by translatewiki.net community

### 1.4.0

Released on 2017-07-18

- Removed I18n shim for php files
- Translation updates by translatewiki.net community

### 1.3.1

Released on 2014-08-10

- Added entry point security
- Switch consistently to `__DIR__` constant
- Improved file documentation
- Added CHANGELOG
- Translation updates by translatewiki.net community

### 1.3.0

Released on 2014-06-25

- Added aliases for special page "Special:Hoststats"
- Added "hoststats" permission
- Improved licensing information
- Translation updates by translatewiki.net community

### 1.2.0

Released on 2012-12-19

- Changed special page categorization on special page "Special:SpecialPages"
- Changed to use an internal MediaWiki function for running the shell commands
- Removed dependency on globals.
- Improved extension messages (escaping)
- Translation updates by translatewiki.net community

### 1.1.0

Released on 2012-10-25

- Fixed special page "Special:HostStats"
- Added new configruation parameter `$wgHostStatsCommands`
- Improved file documentation
- Translation updates by translatewiki.net community

### 1.0.0

Released on 2012-10-03

- Initial release
