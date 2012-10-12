<?php

 /**
 * Solspace - Tracker
 *
 * @package		Solspace:Tracker
 * @author		Solspace DevTeam
 * @copyright	Copyright (c) 2008-2012, Solspace, Inc.
 * @link		http://solspace.com/docs/addon/c/Tracker/
 * @version		2.1.0
 * @filesource 	./system/expressionengine/third_party/tracker/language/english/
 */

$lang = $L = array(

//----------------------------------------
//	Required for MODULES page
//----------------------------------------

"tracker_module_name" =>
"Tracker",

"tracker_label" =>
"Tracker",

"tracker_module_description" =>
"Tracks visits to entry pages and displays stats",

"tracker_module_version" =>
"Tracker",


//----------------------------------------
//	Language for Menu
//----------------------------------------

"tracker" =>
"Tracker",

"online_documentation"	 =>
(rand() < 42) ? "Don't Panic!" : "Online Documentation",

'tracker_utility' =>
"Utility",

'tracker_utilities' =>
"Utilities",

'tracker_update_statistics' =>
"Update Statistics",

'unsupported_mysql_version' =>
"Unsupported version of MySQL found on server. &nbsp; Please contact your host about upgrading your
version of MySQL to meet the requirements of this module.",

//----------------------------------------
//	Chart Tag
//----------------------------------------

'tracker_week' =>
"Week",

//----------------------------------------
//	CP Main Menus
//----------------------------------------

"homepage" =>
"Homepage",

'tracker_statistics' =>
"Statistics",

'tracker_preferences' =>
"Preferences",

// --------------------------------------------
//  Preferences Area - Sections
// --------------------------------------------

'tracker_tracking' =>
"Tracking",

'tracker_display_preferences' =>
"Display",

'tracker_member_group_permissions' =>
"Member Group Permissions",

// --------------------------------------------
//  Preferences Area - Preferences
// --------------------------------------------

'track_views_member_groups' =>
"Track Views from these Member Groups",

'display_tracker_fieldtype_for_channels' =>
"Display the Tracker Field Type for Channels",

'display_tracker_stats_in_edit' =>
"Display Tracker Stats in Edit",

'display_tracker_stats_in_edit_time_range' =>
"Display Tracker Stats in Edit: Time Range",

'display_tracker_stats_in_edit_label' =>
"Display Tracker Stats in Edit: Column Label",

'display_live_views_tracker_stats' =>
"Display Live Views in Tracker CP",

'display_live_views_tracker_stats_subtext' =>
"Will automatically update the statistics for the selected channels every few seconds.",

'display_tracker_stats_column_in_edit' =>
"Display Tracker Stats column in Edit",

'display_tracker_stats_fieldtype_in_publish' =>
"Display Tracker Stats Field Type in Publish",

'display_statistics_in_cp' =>
"Display Statistics tab in Tracker CP",

'display_charts_in_cp' =>
"Display Charts tab in Tracker CP",

'display_utilities_in_cp' =>
"Display Utilities tab in Tracker CP",

'display_preferences_in_cp' =>
"Display Preferences tab in Tracker CP",

'display_documentation_in_cp' =>
"Display Documentation tab in Tracker CP",

'can_update_module' =>
"Can Update Module?",

'tracker_stats' =>
"Tracker Stats",

'all_member_groups' =>
"All Member Groups",

'all_channels' =>
"All Channels",

'today' =>
"Today",

'yesterday' =>
"Yesterday",

'current_week' =>
"Current Week",

'current_month' =>
"Current Month",

'current_year' =>
"Current Year",

'save_preferences' =>
"Save Preference",

'tracker_preferences_updated' =>
"Tracker Preferences Updated!",

'stats_update_interval' =>
"Stats Update Interval",

'stats_update_interval_subtext' =>
"The amount of time between calculations of an entry's Tracker statistics.",

'5_minutes' =>
"5 Minutes",

'10_minutes' =>
"10 Minutes",

'30_minutes' =>
"30 Minutes",

'2_hours' =>
"2 Hours",

'12_hours' =>
"12 Hours",

'24_hours' =>
"24 Hours",

'stats_track_analytics' =>
"Track Analytics Data",

'stats_track_analytics_subtext' =>
"If set to 'no', then all IP Address and Referrer information will not be recorded. This
will reduce the amount of data collected, but it will also prevent any future features from using 
this information.",

//----------------------------------------
//	CP - Statistics/Homepage
//----------------------------------------

'tracker_loading_ellipsis' =>
"Loading...",

'tracker_make_settings_default' =>
"Make these settings your default view?",

'tracker_default_view' =>
"Default View",

'tracker_everything' =>
"Everything",

'tracker_channel' =>
"Channel",

'tracker_channels' =>
"Channels",

'tracker_other_channels' =>
"Other Channels",

'tracker_view_options' =>
"View Options",

'tracker_view_statistics_for' =>
"View Statistics for",

'tracker_save' =>
"Save",

'tracker_view_statistics_for_period' =>
'View Statistics for the period',

'tracker_today' =>
"Today",

'tracker_last_365_days' =>
"Last 365 days",

'tracker_last_7_days' =>
"Last 7 days",

'tracker_last_14_days' =>
"Last 14 days",

'tracker_last_30_days' =>
"Last 30 days",

'tracker_last_1_days' =>
"Last day",

'tracker_last_#_days' =>
"Last %#% days",

'tracker_last_4_weeks' =>
"Last 4 weeks",

'tracker_last_8_weeks' =>
"Last 8 weeks",

'tracker_last_12_weeks' =>
"Last 12 weeks",

'tracker_last_24_weeks' =>
"Last 24 weeks",

'tracker_last_1_weeks' =>
"Last week",

'tracker_last_#_weeks' =>
"Last %#% weeks",

'tracker_last_1_months' =>
"Last Month",

'tracker_last_3_months' =>
"Last 3 months",

'tracker_last_6_months' =>
"Last 6 months",

'tracker_last_12_months' =>
"Last year",

'tracker_last_#_months' =>
"Last %#% months",

'tracker_last_year' =>
"Last year",

'tracker_all_time' =>
"All Time",

'tracker_this_week' =>
"This Week",

'tracker_this_month' =>
"This Month",

'tracker_this_year' =>
"This Year",

'tracker_alltime' =>
"All Time",

'tracker_days' =>
"Days",

'tracker_weeks' =>
"Weeks",

'tracker_months' =>
"Months",

'tracker_hits' =>
"Hits",

'tracker_overall_hits_for'=>
"Overall Hits for",

'tracker_for'=>
"for",

'tracker_view_by' =>
"View by",

'tracker_view_statistics_by' =>
"View statistics by",

'tracker_overall_statistics' =>
"Overall Statistics",

'tracker_channel_statistics' =>
"Channel Statistics",

'tracker_7_days' =>
"7 days",

'tracker_30_days' =>
"30 days",

'tracker_sitewide' =>
"Sitewide",

'tracker_site_averages' =>
"Site Averages",

'tracker_daily' =>
"Daily",

'tracker_weekly' =>
"Weekly",

'tracker_monthly' =>
"Monthly",

'tracker_average_hits' =>
"Average Hits",

'tracker_overall' =>
"Overall",

'tracker_date_range' =>
"Date Range",

'tracker_last' =>
"Last",

'tracker_average_hits_per_channel' =>
"Average Hits per Tracked Channel",

'tracker_average_hits_per_entry' =>
"Average Hits per Tracked Entry",

'tracker_average_traffic_share_per_entry' =>
"Average Traffic Share per Entry",

'tracker_average_traffic_share' =>
"Average Traffic Share",

'tracker_entry_statistics' =>
"Entry Statistics",

'tracker_entry_title' =>
"Entry Title",

'tracker_no_results' =>
"No Results!",

'tracker_no_results_chart_ajax' =>
"Unable to load the chart's data or there was no data to load.",

// --------------------------------------------
//  Publish Page
// --------------------------------------------

'tracker_new_entry_no_statistics' =>
"New Entry, No Statistics",

'tracker_entry_not_found' =>
"Entry Not Found",

'tracker_entry_no_statistics' =>
"No Statistics found for this entry.",

// --------------------------------------------
//  Trim Tracker Data
// --------------------------------------------

'tracker_trim_data' =>
"Trim Tracker Data",

'tracker_trim_data_subtext' =>
"This allows you to remove older stats from Tracker, which will reduce the size of your database and 
improve performance. Recommended for sites where there are thousands of entries being tracked.",

'tracker_trim_data_warning' =>
"The deleting and rebuilding of the index may take a while.  Do not close browser window until the processing is finished.",

'tracker_limit_tracker_data_to' =>
"Limit Tracker Data to ",

'tracker_last_two_years' =>
"Last 2 Years",

'tracker_stats_cleaned_out' =>
"Tracker Stats have been cleaned out.",

//----------------------------------------
//	General
//----------------------------------------

"submit" =>
"Submit",

"search" =>
"Search",

"edit" =>
"Edit",

"action_can_not_be_undone" =>
"This action cannot be undone.",

// -------------------------------------
//	Stat Counts
// -------------------------------------

'update_tracker_stats' =>
"Update Tracker Stats",

'tracker_update_stat_count_purpose' =>
"This will update the Tracker Stats for each entry via AJAX and will notify you when all entries have been recounted.
Click 'Update All Stats' to begin.",

'tracker_update_all_entry_stats' =>
"Update All Entry Stats",

"updating_counts_for_entry_" =>
"Updating counts for Entry: ",

'tracker_percent_completed' =>
"Percent Completed",

'tracker_number_of_entries_updated' =>
"Number Of Entries Updated",

'tracker_pause' =>
"Pause",

'tracker_resume' =>
"Resume",

'return_to_tracker_homepage' =>
"You may now return to the Tracker Homepage.",

'tracker_stats_recounts_complete' =>
"All Tracker Stats have been completed.",

'tracker_stats_updated' =>
"Tracker Stats Updated",

'tracker_invalid_values' =>
"Invalid Values Received",

// --------------------------------------------
//  Tracker 1.x Importer
// --------------------------------------------

'tracker_entry_imported' =>
"Tracker Entry Imported",

'tracker_1x_importer' =>
"Tracker 1.x Importer",

'tracker_import_subtext' =>
"Imports hits from Tracker 1.x and recounts the statistics.",

'tracker_entries_imported' =>
"All Tracker Entries have been imported.",

'tracker_import_count_purpose' =>
"This will import the Tracker 1.x data for each entry via AJAX and will notify you when all entries have been imported.
Click 'Import All Entries' to begin.",

'tracker_import_all_entries' =>
"Import All Entries",

'tracker_no_entries_to_import' =>
"No Entries Available for Importing",

'tracker_1x_entry_imported' =>
"Tracker 1.x Entry Imported",

// --------------------------------------------
//  DevDemon Hits Importer - Uses a few of the language variables from Tracker 1.x Importer too
// --------------------------------------------

'devdemon_hits_entry_imported' =>
"DevDemon Hits Entry Imported",

'devdemon_hits_importer' =>
"DevDemon Hits Importer",

'hits_importer_subtext' =>
"Imports data from DevDemon Hits",

'devdemon_hits_entries_imported' =>
"All DevDemon Hits Entries have been imported.",

'devdemon_hits_import_count_purpose' =>
"This will import the DevDemon Hits data for each entry via AJAX and will notify you when all entries have been imported.
Click 'Import All Entries' to begin.",

'devdemon_hits_entry_imported' =>
"DevDemon Hits Entry Imported",

// --------------------------------------------
//  Errors
// --------------------------------------------

'tracker_module_disabled' =>
"The Tracker module is currently disabled.  Please insure it is installed and up to date by going 
to the module's control panel in the ExpressionEngine Control Panel",

'disable_module_to_disable_extension' =>
"To disable this extension, you must disable its corresponding <a href='%url%'>module</a>.",

'enable_module_to_enable_extension' =>
"To enable this extension, you must install its corresponding <a href='%url%'>module</a>.",

'invalid_page_request' =>
"Invalid Page Request - You do not have permission to view this page.",

// --------------------------------------------
//  Update Routine
// --------------------------------------------

'update_tracker_module' =>
"Update Tracker Module",

'tracker_update_message' =>
"You have recently uploaded a new version of Tracker, please click here to run the update script.",

'update_successful' =>
"Update Successful!",

"tracker_update_successful" =>
"The module was successfully updated.",

"tracker_update_failure" =>
"There was an error while trying to update your module to the latest version.",


// END
''=>''
);