<?php
/*
Plugin Name: qTranslate loves WPEC
Description: Adds translation fields to WP e-commerce (wpec) taxonomies
Plugin URI: http://stereohero.se
Author: StereoHero
Author URI: http://stereohero.se
Version: 1.0 
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

/*  
    Copyright (C) 2013  StereoHero  (email : info@stereohero.se)

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

// Add qTranslation to product variations

add_action('wpsc-variation_add_form', 'qtrans_modifyTermFormFor');
add_action('wpsc-variation_edit_form', 'qtrans_modifyTermFormFor');

// Add qTranslation to product categories

add_action('wpsc_product_category_add_form', 'qtrans_modifyTermFormFor');
add_action('wpsc_product_category_edit_form', 'qtrans_modifyTermFormFor');

// Add qTranslation to product tags

add_action('product_tag_add_form', 'qtrans_modifyTermFormFor');
add_action('product_tag_edit_form', 'qtrans_modifyTermFormFor');