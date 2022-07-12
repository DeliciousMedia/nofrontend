<?php
/**
 * The main template file.
 *
 * Redirects users on non-dev environments to login or a URL supplied via a filter.
 *
 * @package nofrontend
 */

wp_safe_redirect( apply_filters( 'nofrontend.redirect_url', get_admin_url() ) );
exit();
