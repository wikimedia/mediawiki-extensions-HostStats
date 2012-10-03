<?php
/**
 * Copyright (C) 2012 Hydriz
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @ingroup Extensions
 */

$wgExtensionCredits['specialpage'][] = array(
        'name' => 'HostStats',
        'author' => 'Hydriz',
        'url' => 'http://www.mediawiki.org/wiki/Extension:HostStats',
        'description' => 'Adds a special page to display the host server statistics.',
        'descriptionmsg' => 'hoststats-desc',
        'version' => '1.0.0',
);

$dir = dirname(__FILE__) . '/';
$wgAutoloadClasses['SpecialHostStats'] = $dir . 'SpecialHostStats.php';
$wgExtensionMessagesFiles['HostStats'] = $dir . 'HostStats.i18n.php';
$wgSpecialPages['HostStats'] = 'SpecialHostStats';
