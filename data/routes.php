<?php
/*
 * Map of regular expressions which map to models the controller will construct
 */
$routes         = array();

/* Commonly used regular expressions */

// Optional calendar short name, which prefixes all routes
$calendar = '((?P<calendar_shortname>([a-zA-Z-_]([0-9]+)?)+)\/)?';

// Date specific regular expressions
$year     = '(?P<y>[\d]{4})';
$month    = '(?P<m>([0-1])?[0-9])';
$day      = '(?P<d>([0-3])?[0-9])';

// Used for determining an output format, e.g. .xml, .html
$format   = '(\.(?P<format>[\w]+))?';

$routes['/^'.$calendar.'$/']                                                        = 'UNL\UCBCN\Frontend\Day';
$routes['/^'.$calendar.'upcoming'.$format.'$/']                                     = 'UNL\UCBCN\Frontend\Upcoming';
$routes['/^'.$calendar.'search(\/(?P<q>.+))'.$format.'$/']                          = 'UNL\UCBCN\Frontend\Search';
$routes['/^'.$calendar.$year.$format.'$/']                                          = 'UNL\UCBCN\Frontend\Year';
$routes['/^'.$calendar.$year.'\/'.$month.$format.'$/']                              = 'UNL\UCBCN\Frontend\Month';
$routes['/^'.$calendar.$year.'\/'.$month.'\/'.$day.$format.'$/']                    = 'UNL\UCBCN\Frontend\Day';
$routes['/^'.$calendar.$year.'\/'.$month.'\/'.$day.'\/(?P<id>[\d]+)'.$format.'$/']  = 'UNL\UCBCN\Frontend\Day';


return $routes;