<?php

// Triggered during un-installation of the plugin.

if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

delete_option('netlify_status_website_id');
