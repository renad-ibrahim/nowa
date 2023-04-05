<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/****************************Dashboard Pages pathes************************ */

Route::get('/', function () {
    return view('Dashboard/index');
});
Route::get('/index1', function () {
    return view('Dashboard/index1');
});
Route::get('/index2', function () {
    return view('Dashboard/index2');
});

/****************************Apps Pages pathes************************ */

Route::get('cards', function () {
    return view('Apps/cards');
});
Route::get('darggablecards', function () {
    return view('Apps/darggablecards');
});
Route::get('rangeslider', function () {
    return view('Apps/rangeslider');
});
Route::get('calendar', function () {
    return view('Apps/calendar');
});
Route::get('contacts', function () {
    return view('Apps/contacts');
});
Route::get('image-compare', function () {
    return view('Apps/image-compare');
});
Route::get('notification', function () {
    return view('Apps/notification');
});
Route::get('widget-notification', function () {
    return view('Apps/widget-notification');
});
Route::get('treeview', function () {
    return view('Apps/treeview');
});
Route::get('file-manager', function () {
    return view('Apps/file-manager');
});
Route::get('file-manager1', function () {
    return view('Apps/file-manager1');
});
Route::get('file-details', function () {
    return view('Apps/file-details');
});

/****************************Elements Pages pathes************************ */
Route::get('alerts', function () {
    return view('Elements/alerts');
});
Route::get('avatar', function () {
    return view('Elements/avatar');
});
Route::get('breadcrumbs', function () {
    return view('Elements/breadcrumbs');
});
Route::get('buttons', function () {
    return view('Elements/buttons');
});
Route::get('badge', function () {
    return view('Elements/badge');
});
Route::get('dropdown', function () {
    return view('Elements/dropdown');
});
Route::get('thumbnails', function () {
    return view('Elements/thumbnails');
});
Route::get('list-group', function () {
    return view('Elements/list-group');
});
Route::get('navigation', function () {
    return view('Elements/navigation');
});
Route::get('images', function () {
    return view('Elements/images');
});
Route::get('pagination', function () {
    return view('Elements/pagination');
});
Route::get('popover', function () {
    return view('Elements/popover');
});
Route::get('progress', function () {
    return view('Elements/progress');
});
Route::get('spinners', function () {
    return view('Elements/spinners');
});
Route::get('media-object', function () {
    return view('Elements/media-object');
});
Route::get('typography', function () {
    return view('Elements/typography');
});
Route::get('tooltip', function () {
    return view('Elements/tooltip');
});
Route::get('toast', function () {
    return view('Elements/toast');
});
Route::get('tags', function () {
    return view('Elements/tags');
});
Route::get('tabs', function () {
    return view('Elements/tabs');
});

/****************************Advanced UI Pages pathes************************ */
Route::get('accordion', function () {
    return view('Advanced-ui/accordion');
});
Route::get('carousel', function () {
    return view('Advanced-ui/carousel');
});
Route::get('collapse', function () {
    return view('Advanced-ui/collapse');
});
Route::get('modals', function () {
    return view('Advanced-ui/modals');
});
Route::get('timeline', function () {
    return view('Advanced-ui/timeline');
});
Route::get('sweet-alert', function () {
    return view('Advanced-ui/sweet-alert');
});
Route::get('rating', function () {
    return view('Advanced-ui/rating');
});
Route::get('counters', function () {
    return view('Advanced-ui/counters');
});
Route::get('search', function () {
    return view('Advanced-ui/search');
});
Route::get('userlist', function () {
    return view('Advanced-ui/userlist');
});
Route::get('blog', function () {
    return view('Advanced-ui/blog');
});
Route::get('blog-details', function () {
    return view('Advanced-ui/blog-details');
});
Route::get('edit-post', function () {
    return view('Advanced-ui/edit-post');
});
Route::get('file-attached-tags', function () {
    return view('Advanced-ui/file-attached-tags');
});
/* ********************************** Pages /Authentication **************************************** */

Route::get('signin', function () {
    return view('Pages/Authentication/signin');
});
Route::get('signup', function () {
    return view('Pages/Authentication/signup');
});
Route::get('forgot-password', function () {
    return view('Pages/Authentication/forgot-password');
});
Route::get('reset-password', function () {
    return view('Pages/Authentication/reset-password');
});
Route::get('lockscreen', function () {
    return view('Pages/Authentication/lockscreen');
});
Route::get('underconstruction', function () {
    return view('Pages/Authentication/underconstruction');
});
Route::get('404', function () {
    return view('Pages/Authentication/404');
});
Route::get('500', function () {
    return view('Pages/Authentication/500');
});
Route::get('501', function () {
    return view('Pages/Authentication/501');
});
/* ********************************** Pages//switcher **************************************** */
Route::get('switcher-1', function () {
    return view('Pages/switcher/switcher-1');
});
/* ********************************** Pages//ecommerce **************************************** */
Route::get('shop', function () {
    return view('Pages/ecommerce/shop');
});
Route::get('product-details', function () {
    return view('Pages/ecommerce/product-details');
});
Route::get('product-cart', function () {
    return view('Pages/ecommerce/product-cart');
});
Route::get('check-out', function () {
    return view('Pages/ecommerce/check-out');
});
Route::get('wish-list', function () {
    return view('Pages/ecommerce/wish-list');
});
/* ********************************** Pages//Profile **************************************** */
Route::get('profile', function () {
    return view('Pages/profile/profile');
});
/* ********************************** Pages//Notification list **************************************** */
Route::get('profile-notifications', function () {
    return view('Pages/notifications/profile-notifications');
});
/* ********************************** Pages//About Us **************************************** */
Route::get('aboutus', function () {
    return view('Pages/aboutus/aboutus');
});
/* ********************************** Pages// settings **************************************** */
Route::get('settings', function () {
    return view('Pages/settings/settings');
});
/* ********************************** Pages// mail **************************************** */
Route::get('mail', function () {
    return view('Pages/mail/mail');
});
Route::get('mail-compose', function () {
    return view('Pages/mail/mail-compose');
});
Route::get('mail-read', function () {
    return view('Pages/mail/mail-read');
});
Route::get('mail-settings', function () {
    return view('Pages/mail/mail-settings');
});
Route::get('chat', function () {
    return view('Pages/mail/chat');
});
/* ********************************** Pages// invoice **************************************** */
Route::get('invoice', function () {
    return view('Pages/invoice/invoice');
});
/* ********************************** Pages// Pricing **************************************** */
Route::get('pricing', function () {
    return view('Pages/pricing/pricing');
});
/* ********************************** Pages// Gallery **************************************** */
Route::get('gallery', function () {
    return view('Pages/gallery/gallery');
});
/* ********************************** Pages// Todotask **************************************** */
Route::get('todotask', function () {
    return view('Pages/todotask/todotask');
});
/* ********************************** Pages// Faqs **************************************** */
Route::get('faq', function () {
    return view('Pages/faq/faq');
});
/* ********************************** Pages// EmptyPage **************************************** */
Route::get('empty', function () {
    return view('Pages/empty/empty');
});
/* ********************************** Utilities **************************************** */
Route::get('background', function () {
    return view('Utilities/background');
});
Route::get('border', function () {
    return view('Utilities/border');
});
Route::get('display', function () {
    return view('Utilities/display');
});
Route::get('extras', function () {
    return view('Utilities/extras');
});
Route::get('flex', function () {
    return view('Utilities/flex');
});
Route::get('height', function () {
    return view('Utilities/height');
});
Route::get('margin', function () {
    return view('Utilities/margin');
});
Route::get('padding', function () {
    return view('Utilities/padding');
});
Route::get('position', function () {
    return view('Utilities/position');
});
Route::get('width', function () {
    return view('Utilities/width');
});
/* ********************************** Icons **************************************** */
Route::get('icons', function () {
    return view('Icons/icons');
});
Route::get('icons2', function () {
    return view('Icons/icons2');
});
Route::get('icons3', function () {
    return view('Icons/icons3');
});
Route::get('icons4', function () {
    return view('Icons/icons4');
});
Route::get('icons5', function () {
    return view('Icons/icons5');
});
Route::get('icons6', function () {
    return view('Icons/icons6');
});
Route::get('icons7', function () {
    return view('Icons/icons7');
});
Route::get('icons8', function () {
    return view('Icons/icons8');
});
Route::get('icons9', function () {
    return view('Icons/icons9');
});
Route::get('icons10', function () {
    return view('Icons/icons10');
});
Route::get('icons11', function () {
    return view('Icons/icons11');
});
Route::get('icons12', function () {
    return view('Icons/icons12');
});
/* ********************************** Charts **************************************** */
Route::get('chart-morris', function () {
    return view('Charts/chart-morris');
});
Route::get('chart-flot', function () {
    return view('Charts/chart-flot');
});
Route::get('chart-chartjs', function () {
    return view('Charts/chart-chartjs');
});
Route::get('chart-echart', function () {
    return view('Charts/chart-echart');
});
Route::get('chart-sparkline', function () {
    return view('Charts/chart-sparkline');
});
Route::get('chart-peity', function () {
    return view('Charts/chart-peity');
});
/* ********************************** Forms **************************************** */
Route::get('form-elements', function () {
    return view('Forms/form-elements');
});
Route::get('form-advanced', function () {
    return view('Forms/form-advanced');
});
Route::get('form-layouts', function () {
    return view('Forms/form-layouts');
});
Route::get('form-validation', function () {
    return view('Forms/form-validation');
});
Route::get('form-wizards', function () {
    return view('Forms/form-wizards');
});
/* ********************************** Tables **************************************** */
Route::get('table-basic', function () {
    return view('Tables/table-basic');
});
Route::get('table-data', function () {
    return view('Tables/table-data');
});
/* ********************************** Widgets **************************************** */
Route::get('widgets', function () {
    return view('Widgets/widgets');
});
/* ********************************** Maps **************************************** */
Route::get('map-leaflet', function () {
    return view('Maps/map-leaflet');
});
Route::get('map-vector', function () {
    return view('Maps/map-vector');
});
