<?php
/*
 * Map of regular expressions which map to models the controller will construct
 */
$routes = array();

// Optional calendar short name, which prefixes all routes
$calendar                = '(?P<calendar_shortname>([a-zA-Z-_]([0-9]+)?)+)';
$user 					 = '(?P<user_uid>([a-zA-Z0-9-_]+))';
$calendar_slash_required = '(' . $calendar . '\/)?';
$calendar_slash_optional = '(' . $calendar . '(\/)?)?';

$routes['/^(\/)?$/'] = 'UNL\UCBCN\Manager\CalendarList';
$routes['/^'.$calendar_slash_optional.'$/'] = 'UNL\UCBCN\Manager\Calendar';
$routes['/^'.$calendar_slash_required.'create(\/)?$/'] = 'UNL\UCBCN\Manager\CreateEvent';
$routes['/^calendar\/new(\/)?$/'] = 'UNL\UCBCN\Manager\CreateCalendar';
$routes['/^'.$calendar_slash_required.'edit(\/)?$/'] = 'UNL\UCBCN\Manager\CreateCalendar';
$routes['/^'.$calendar_slash_required.'subscriptions\/new(\/)?$/'] = 'UNL\UCBCN\Manager\CreateSubscription';
$routes['/^'.$calendar_slash_required.'subscriptions(\/)?$/'] = 'UNL\UCBCN\Manager\Subscription';
$routes['/^'.$calendar_slash_required.'users(\/)?$/'] = 'UNL\UCBCN\Manager\Users';
$routes['/^'.$calendar_slash_required.'users\/new(\/)?$/'] = 'UNL\UCBCN\Manager\AddUser';
$routes['/^'.$calendar_slash_required.'users\/' . $user . '\/edit(\/)?$/'] = 'UNL\UCBCN\Manager\AddUser';

return $routes;