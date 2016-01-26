<?php
/*
Plugin Name: Relative URL
Plugin URI: http://sparanoid.com/work/relative-url/
Description: Relative URL applies wp_make_link_relative function to links (posts, categories, pages and etc.) to convert them to relative URLs. Useful for developers when debugging local WordPress instance on a mobile device (iPad. iPhone, etc.).
Version: 0.1.1
Author: Tunghsiao Liu
Author URI: http://sparanoid.com/
Author Email: t@sparanoid.com
License: GPLv2 or later

  Copyright 2016 Tunghsiao Liu, aka. Sparanoid (t@sparanoid.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function callback_relative_url($buffer) {
  $server_host = '//' . $_SERVER['HTTP_HOST'];
  $home_url = esc_url(home_url('/'));
  $home_url_relative = $server_host . wp_make_link_relative($home_url);
  $home_url_escaped = str_replace('/', '\/', $home_url);
  $home_url_escaped_relative = str_replace('/', '\/', $home_url_relative);

  $buffer = str_replace($home_url, $home_url_relative, $buffer);
  $buffer = str_replace($home_url_escaped, $home_url_escaped_relative, $buffer);

  return $buffer;
}

function buffer_start_relative_url() { ob_start('callback_relative_url'); }
function buffer_end_relative_url() { ob_end_flush(); }

// http://codex.wordpress.org/Plugin_API/Action_Reference
add_action('registered_taxonomy', 'buffer_start_relative_url');
add_action('shutdown', 'buffer_end_relative_url');
