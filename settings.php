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

if ($ADMIN->fulltree) {
//--- general settings -----------------------------------------------------------------------------------
    $settings->add(new admin_setting_heading('enrol_mentor_settings', '', get_string('pluginname_desc', 'enrol_mentor')));

    $settings->add(new admin_setting_heading('enrol_mentor_exdbheader', get_string('settingsheaderdb', 'enrol_mentor'), ''));

    $options = array('', "access","ado_access", "ado", "ado_mssql", "borland_ibase", "csv", "db2", "fbsql", "firebird", "ibase", "informix72", "informix", "mssql", "mssql_n", "mssqlnative", "mysql", "mysqli", "mysqlt", "oci805", "oci8", "oci8po", "odbc", "odbc_mssql", "odbc_oracle", "oracle", "postgres64", "postgres7", "postgres", "proxy", "sqlanywhere", "sybase", "vfp");
    $options = array_combine($options, $options);
    $settings->add(new admin_setting_configselect('enrol_mentor/dbtype', get_string('dbtype', 'enrol_mentor'), get_string('dbtype_desc', 'enrol_mentor'), 'mysql', $options));

    $settings->add(new admin_setting_configtext('enrol_mentor/dbhost', get_string('dbhost', 'enrol_mentor'), get_string('dbhost_desc', 'enrol_mentor'), 'localhost'));

    $settings->add(new admin_setting_configtext('enrol_mentor/dbuser', get_string('dbuser', 'enrol_mentor'), '', ''));

    $settings->add(new admin_setting_configpasswordunmask('enrol_mentor/dbpass', get_string('dbpass', 'enrol_mentor'), '', ''));

    $settings->add(new admin_setting_configtext('enrol_mentor/dbname', get_string('dbname', 'enrol_mentor'), '', ''));

    $settings->add(new admin_setting_configtext('enrol_mentor/dbencoding', get_string('dbencoding', 'enrol_mentor'), '', 'utf-8'));
    
    $settings->add(new admin_setting_configtext('enrol_mentor/remoteenroltable', get_string('remoteenroltable', 'enrol_mentor'), get_string('remoteenroltable_desc', 'enrol_mentor'), ''));

    $settings->add(new admin_setting_heading('enrol_mentor_remoteheader', get_string('remote_fields_mapping', 'enrol_mentor'), ''));

    $settings->add(new admin_setting_configtext('enrol_mentor/localsubjectuserfield', get_string('localsubjectuserfield', 'enrol_mentor'), get_string('localsubjectuserfield_desc', 'enrol_mentor'), 'username'));

    $settings->add(new admin_setting_configtext('enrol_mentor/localobjectuserfield', get_string('localobjectuserfield', 'enrol_mentor'), get_string('localobjectuserfield_desc', 'enrol_mentor'), 'username'));		

    $settings->add(new admin_setting_configtext('enrol_mentor/localrolefield', get_string('localrolefield', 'enrol_mentor'), get_string('localrolefield_desc', 'enrol_mentor'), 'shortname'));	

    $settings->add(new admin_setting_configtext('enrol_mentor/remotesubjectuserfield', get_string('remotesubjectuserfield', 'enrol_mentor'), get_string('remotesubjectuserfield_desc', 'enrol_mentor'), ''));	

    $settings->add(new admin_setting_configtext('enrol_mentor/remoteobjectuserfield', get_string('remoteobjectuserfield', 'enrol_mentor'), get_string('remoteobjectuserfield_desc', 'enrol_mentor'), ''));		

    $settings->add(new admin_setting_configtext('enrol_mentor/remoterolefield', get_string('remoterolefield', 'enrol_mentor'), get_string('remoterolefield_desc', 'enrol_mentor'), ''));
}
