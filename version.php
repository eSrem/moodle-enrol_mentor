<?php
/**
 * Easily (mass) enrol mentors
 *
 * This plugin synchronises user roles with external database table.
 *
 * @package    enrol
 * @subpackage mentors
 * @copyright  Virgil Ashruf <v.ashruf@avetica.nl>
 * @copyright  Maxime Pelletier <maxime.pelletier@educsa.org> Greatly inspired!
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2012082000;        // The current plugin version (Date: YYYYMMDDXX)
$plugin->requires  = 2012061700;        // Requires this Moodle version
$plugin->release   = '0.1';
$plugin->component = 'enrol_mentor';  // Full name of the plugin (used for diagnostics)
$plugin->maturity  = MATURITY_BETA;
