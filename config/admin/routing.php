<?php
/**
 * Return array of key to Intervention class for routing.
 *
 * @see Intervention
 * @see Application
 */
namespace Jacoby\Intervention;

return [
	'login' => 'Admin\Login',
	'common.adminbar' => 'Admin\Common\Adminbar',
	'common.editor' => 'Admin\Common\Editor',
	'common.footer' => 'Admin\Common\Footer',
	'common.tabs' => 'Admin\Common\Tabs',
	'common.menu' => 'Admin\Common\Menu',
	'common.updates' => 'Admin\Common\Updates',
	'common.title-link' => 'Admin\Common\TitleLink',
	'common.all.pagination' => 'Admin\Common\All\Pagination',
	'common.all.search' => 'Admin\Common\All\Search',
	'common.all.subsets' => 'Admin\Common\All\Subsets',
	'common.all.list' => 'Admin\Common\All\Lists',
	'dashboard' => 'Admin\Dashboard',
	'dashboard.home' => 'Admin\Dashboard\Home',
	'dashboard.updates' => 'Admin\Dashboard\Updates',
	'posts' => 'Admin\Posts',
	'posts.all' => 'Admin\Posts\All',
	'posts.add' => 'Admin\Posts\Add',
	'posts.edit' => 'Admin\Posts\Edit',
	'posts.item' => 'Admin\Posts\Item',
	'posts.categories.all' => 'Admin\Posts\Categories\All',
	'posts.categories.item' => 'Admin\Posts\Categories\Item',
	'posts.tags.all' => 'Admin\Posts\Tags\All',
	'posts.tags.item' => 'Admin\Posts\Tags\Item',
	'media' => 'Admin\Media',
	'media.all' => 'Admin\Media\All',
	'media.add' => 'Admin\Media\Add',
	'pages' => 'Admin\Pages',
	'pages.all' => 'Admin\Pages\All',
	'pages.add' => 'Admin\Pages\Add',
	'pages.edit' => 'Admin\Pages\Edit',
	'pages.item' => 'Admin\Pages\Item',
	'comments' => 'Admin\Comments',
	'comments.all' => 'Admin\Comments\All',
	'appearance' => 'Admin\Appearance',
	'appearance.themes' => 'Admin\Appearance\Themes',
	'appearance.customize' => 'Admin\Appearance\Customize',
	'appearance.widgets' => 'Admin\Appearance\Widgets',
	'appearance.menus' => 'Admin\Appearance\Menus',
	'appearance.theme-editor' => 'Admin\Appearance\ThemeEditor',
	'plugins' => 'Admin\Plugins',
	'plugins.all' => 'Admin\Plugins\All',
	'plugins.add' => 'Admin\Plugins\Add',
	'plugins.plugin-editor' => 'Admin\Plugins\PluginEditor',
	'users' => 'Admin\Users',
	'users.all' => 'Admin\Users\All',
	'users.add' => 'Admin\Users\Add',
	'users.profile' => 'Admin\Users\Profile',
	'tools' => 'Admin\Tools',
	'tools.available' => 'Admin\Tools\Available',
	'tools.import' => 'Admin\Tools\Import',
	'tools.export' => 'Admin\Tools\Export',
	'tools.site-health' => 'Admin\Tools\SiteHealth',
	'tools.export-personal-data' => 'Admin\Tools\ExportPersonalData',
	'tools.erase-personal-data' => 'Admin\Tools\ErasePersonalData',
	'settings' => 'Admin\Settings',
	'settings.general' => 'Admin\Settings\General',
	'settings.writing' => 'Admin\Settings\Writing',
	'settings.reading' => 'Admin\Settings\Reading',
	'settings.discussion' => 'Admin\Settings\Discussion',
	'settings.media' => 'Admin\Settings\Media',
	'settings.permalinks' => 'Admin\Settings\Permalinks',
	'settings.privacy' => 'Admin\Settings\Privacy',
];
