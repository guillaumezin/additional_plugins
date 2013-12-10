<?php

# serendipity_event_cal.php, langfile(en) v1.64 2011-02-05 ian

@define('PLUGIN_EVENTCAL_HEADLINE', 'Headline (optional)');
@define('PLUGIN_EVENTCAL_HEADLINE_BLAHBLAH', 'The headline of the page.');
@define('PLUGIN_EVENTCAL_TITLE', 'Event-Calendar (MySQL-only)');
@define('PLUGIN_EVENTCAL_TITLE_BLAHBLAH', 'Shows an event calendar inside your blogs with your normal blog design. It supports backend/frontend administration, multiple events and iCal export.');
@define('PLUGIN_EVENTCAL_PERMALINK', 'Permalink');
@define('PLUGIN_EVENTCAL_PERMALINK_BLAHBLAH', 'Defines a permalink for the URL. Needs the absolute HTTP path and needs to end with .htm or .html!');
@define('PLUGIN_EVENTCAL_PAGETITLE', 'Static Pagetitle & URL');
@define('PLUGIN_EVENTCAL_PAGETITLE_BLAHBLAH', 'Staticpage title of page. Attention: this also defines the URL of the page (index.php?serendipity[subpage]=name)');
@define('PLUGIN_EVENTCAL_ARTICLEFORMAT', 'Format as article?');
@define('PLUGIN_EVENTCAL_ARTICLEFORMAT_BLAHBLAH', 'if yes the output is automatically formatted as an article (just the main divs.) (default: yes)');
@define('PLUGIN_EVENTCAL_SHOWINTRO', 'Introductory Text (optional)');
@define('PLUGIN_EVENTCAL_SHOWINTRO_BLAHBLAH', 'Text to show in front of entries. (HTML allowed)');
@define('PLUGIN_EVENTCAL_SHOWCAPTCHA', 'Show Captchas?');
@define('PLUGIN_EVENTCAL_SHOWCAPTCHA_BLAHBLAH', 'Do you want to use CAPTCHAS (requires Spamblock plugin activated)');
@define('PLUGIN_EVENTCAL_SHOWICAL', 'Export iCal Feed?');
@define('PLUGIN_EVENTCAL_SHOWICAL_BLAHBLAH', 'If yes, you will allow iCal export as monthly and single events via buttons in frontend.');
@define('PLUGIN_EVENTCAL_ICAL_LOG', 'Log iCal exports?');
@define('PLUGIN_EVENTCAL_ICAL_LOG_BLAHBLAH', 'Defines if iCal export requests will be logged.');
@define('PLUGIN_EVENTCAL_ICAL_LOG_EMAIL', 'Admins email address');
@define('PLUGIN_EVENTCAL_ICAL_LOG_EMAIL_BLAHBLAH', 'Your email address, on which an iCal export requests will be sent. If empty, log is logged to file only.');
@define('PLUGIN_EVENTCAL_ICAL_ICSURL', 'Export iCal URL?');
@define('PLUGIN_EVENTCAL_ICAL_ICSURL_BLAH', 'Set, how the selected iCal file will be exported.');
@define('PLUGIN_EVENTCAL_ICAL_ICSURL_BLAHBLAH', 'As users download, users webcal-push, email (via frontend buttons to admin - address has to be set in next field or in \'personal settings\' alias john@example.com) or all 3 of them) or all 3 of them. In this case the users decides which one to choose.');
@define('PLUGIN_EVENTCAL_ICAL_ICSURL_INLIST_NO',    'no ics file');
@define('PLUGIN_EVENTCAL_ICAL_ICSURL_INLIST_DL',  'ics download');
@define('PLUGIN_EVENTCAL_ICAL_ICSURL_INLIST_WEBCAL',  'ics via webcal://');
@define('PLUGIN_EVENTCAL_ICAL_ICSURL_INLIST_MAIL',  'ics via mail');
@define('PLUGIN_EVENTCAL_ICAL_ICSURL_INLIST_USER',  'users decision');
@define('PLUGIN_EVENTCAL_ICAL_ICSURL_INLIST_EXPORT',  'to user');
@define('PLUGIN_EVENTCAL_ICAL_ICSURL_INLIST_INTERN',  'to admin');

@define('PLUGIN_EVENTCAL_NEXTPAGE', 'next page');
@define('PLUGIN_EVENTCAL_PREVPAGE', 'prev page');
@define('PLUGIN_EVENTCAL_TEXT_DELETE', 'delete');
@define('PLUGIN_EVENTCAL_TEXT_SAY', 'said');
@define('PLUGIN_EVENTCAL_TEXT_EMAIL', 'E-mail');
@define('PLUGIN_EVENTCAL_TEXT_NAME', 'Name');
@define('PLUGIN_EVENTCAL_TEXT_EACH', 'Each');
@define('PLUGIN_EVENTCAL_TEXT_TO', 'to');
@define('PLUGIN_EVENTCAL_TEXT_INTERVAL', 'Interval');
@define('PLUGIN_EVENTCAL_TEXT_BIWEEK', 'fortnightly');
@define('PLUGIN_EVENTCAL_TEXT_YEARLY', 'yearly');
@define('PLUGIN_EVENTCAL_TEXT_CW', 'CW-');

@define('PLUGIN_EVENTCAL_HALLO_ADMIN', 'Hello user: %s ( %s )<br />');
@define('PLUGIN_EVENTCAL_INSERT_DONE_BLAHBLAH', 'Thank your for your entry with ID %d.');
@define('PLUGIN_EVENTCAL_INSERT_DONE_EVALUATE', 'Before this event has been evaluated by the admin, you can find it in the section: "Unapproved event(s)".');
@define('PLUGIN_EVENTCAL_REJECT_DONE_BLAHBLAH', 'You have erased the entry ID %d successfully from database.');
@define('PLUGIN_EVENTCAL_APPROVE_DONE_BLAHBLAH', 'The entry ID %d has been successfully approved.');
@define('PLUGIN_EVENTCAL_SENDMAIL_BLAHBLAH', 'The iCal file has been sent successfully!');
@define('PLUGIN_EVENTCAL_SENDMAIL_ERROR', 'A problem occurred sending email!');

@define('CAL_EVENT_PLEASECORRECT', 'Please correct.');
@define('CAL_EVENT_SHORTTITLE', 'Please insert a short title for this event!');
@define('CAL_EVENT_EVENTDESC', 'Please insert a full description of the upcoming event!');
@define('CAL_EVENT_APPBY', 'You have to insert a authors token(sig) for event validation!');
@define('CAL_EVENT_START_DATE', 'Unvalid event begin!');
@define('CAL_EVENT_START_RECUR', 'The Startdate to be the &raquo; <u>%s</u> &laquo; (day %s) of first occurrence!');
@define('CAL_EVENT_START_DATE_HISTORY', 'Unvalid event date! Setting history events is supported only to 31 days in the past!');
@define('CAL_EVENT_END_DATE', 'Unvalid event end!');
@define('CAL_EVENT_REAL_START_DATE', 'The event startdate has to be a valid day of given month (%s)!');
@define('CAL_EVENT_REAL_END_DATE', 'The event enddate has to be a valid day of given month (%s) and has to be in the future of startdate!');
@define('CAL_EVENT_REAL_MONTHLY_DATE', 'The recurring value for monthly events is not allowed to be "Weekly"!');
@define('CAL_EVENT_IDENTICAL_DATE', 'The event has an indentical start and end time!');
@define('CAL_EVENT_ORDER_DATE', 'Your inserted event sequence is not valid!');
@define('CAL_EVENT_WEEKLY_DATE', 'The correct value hast to be: "Weekly" and choosen "Weekday".');
@define('CAL_EVENT_FALSECAPTCHA', 'The CAPTCHAS of your entry did not match!');

@define('CAL_EVENT_FORM_DAY_FIRST', 'First');
@define('CAL_EVENT_FORM_DAY_SECOND', 'Second');
@define('CAL_EVENT_FORM_DAY_THIRD', 'Third');
@define('CAL_EVENT_FORM_DAY_FOURTH', 'Fourth');
@define('CAL_EVENT_FORM_DAY_LAST', 'Last');
@define('CAL_EVENT_FORM_DAY_SECONDLAST', 'Secondlast');
@define('CAL_EVENT_FORM_DAY_THIRDLAST', 'Thirdlast');
@define('CAL_EVENT_FORM_DAY_EACH', 'Weekly');

@define('CAL_EVENT_FORM_RIGHT_SHORTMAX', 'max. 16 characters!');
@define('CAL_EVENT_FORM_RIGHT_RECURSTRICT1', 'Attention:');
@define('CAL_EVENT_FORM_RIGHT_RECURSTRICT2', 'be strict to startday to all recurring events!');
@define('CAL_EVENT_FORM_RIGHT_URLDESC', 'Either as');
@define('CAL_EVENT_FORM_RIGHT_URL', 'http://www.domain.com');
@define('CAL_EVENT_FORM_RIGHT_MAIL', 'mailto:your@email.com');
@define('CAL_EVENT_FORM_RIGHT_OR', 'or');
@define('CAL_EVENT_FORM_RIGHT_DETAILDESC', 'Please <b>do not forget</b> to put the exact time of your event into this textfield or into the shorttitle eg. \'19:00 text\'.');
@define('CAL_EVENT_FORM_RIGHT_BBC', 'Use plain BBcode (strong, italic, unterline, strike).');
@define('CAL_EVENT_FORM_RIGHT_SINGLE', 'Only one day');
@define('CAL_EVENT_FORM_RIGHT_SINGLE_NOEND', 'no event end date needed');
@define('CAL_EVENT_FORM_RIGHT_MULTI', 'Multi-day event');
@define('CAL_EVENT_FORM_RIGHT_RECUR', 'Reoccurring');
@define('CAL_EVENT_FORM_RIGHT_RECUR_MONTH', 'each month');
@define('CAL_EVENT_FORM_RIGHT_RECUR_WEEK', 'each week');
@define('CAL_EVENT_FORM_RIGHT_RECUR_BIWEEK', 'each bi-week');
@define('CAL_EVENT_FORM_RIGHT_RECUR_YEAR', 'each year');

@define('CAL_EVENT_FORM_RIGHT_HELP_SINGLE', 'Single Event. No need of \'Enddate\' and any other indications!');
@define('CAL_EVENT_FORM_RIGHT_HELP_MULTI', 'Multi Event: View monthly. Needs \'Startdate\' and \'Enddate\'.');
@define('CAL_EVENT_FORM_RIGHT_HELP_WEEK', 'Weekly Event. Definitely needs: \'always on\', \'Weekly\' and \'Weekday\'. View each Calendarweek in month. Needs \'Startdate\' and \'Enddate\'.');
@define('CAL_EVENT_FORM_RIGHT_HELP_BIWEEK', 'Bi-Weekly Event. Definitely needs: \'always on\', \'Weekly\' and \'Weekday\'. View each 2nd Calendarweek in month. Needs \'Startdate\' and \'Enddate\'.');
@define('CAL_EVENT_FORM_RIGHT_HELP_MONTH', 'Monthly Event. Definitely needs: \'always on\', \'nDay\' and \'Weekday\'. View monthly. Needs \'Startdate\' and \'Enddate\'.');
@define('CAL_EVENT_FORM_RIGHT_HELP_YEAR', 'Yearly Single Event: View yearly from Startdate. No need of \'Enddate\' and any other indications!');

@define('CAL_EVENT_FORM_BUTTON_ADD_EVENT', 'Insert event');
@define('CAL_EVENT_FORM_BUTTON_APPROVE_EVENT', 'Unapproved event(s)');
@define('CAL_EVENT_FORM_BUTTON_CLOSE', 'Close form');
@define('CAL_EVENT_FORM_BUTTON_FREETABLE', 'clean old data (> 1 month) and rebuild data IDs');
@define('CAL_EVENT_FORM_BUTTON_LOGOFF', 'logoff');
@define('CAL_EVENT_FORM_BUTTON_MARK', 'mark all / unmark');
@define('CAL_EVENT_FORM_BUTTON_OPEN', 'Open form');
@define('CAL_EVENT_FORM_BUTTON_REJECT_SED', 'Erase approved single event entry');
@define('CAL_EVENT_FORM_BUTTON_EDIT_SED', 'Change approved single event entry');
@define('CAL_EVENT_FORM_BUTTON_SUBMIT', '&raquo; Send entry &laquo;');
@define('CAL_EVENT_FORM_BUTTON_TOAPPROVE', 'Event(s) pending');
@define('CAL_EVENT_FORM_BUTTON_HELP_ICALM', 'Events iCal download of current month inclusive all reccuring events in past and future.');

@define('CAL_EVENT_FORM_TITLE_DATE', 'date');
@define('CAL_EVENT_FORM_TITLE_TITLE', 'title');
@define('CAL_EVENT_FORM_TITLE_DESC', 'description');
@define('CAL_EVENT_FORM_TITLE_URL', 'url');
@define('CAL_EVENT_FORM_TITLE_OK', 'ok');
@define('CAL_EVENT_FORM_TITLE_EDIT', 'edit');
@define('CAL_EVENT_FORM_TITLE_DEL', 'erase');

@define('CAL_EVENT_FORM_LEFT_AUTHOR', '<u>Au</u>thor');
@define('CAL_EVENT_FORM_LEFT_TITLE', '<u>Short</u>title');
@define('CAL_EVENT_FORM_LEFT_LINK', 'homepage or email');
@define('CAL_EVENT_FORM_LEFT_DESC', '<u>Full</u> description');
@define('CAL_EVENT_FORM_LEFT_SINGLE', '<u>Start</u>date');
@define('CAL_EVENT_FORM_LEFT_MULTI', '<u>End</u>date');
@define('CAL_EVENT_FORM_LEFT_RECUR', 'always on');
@define('CAL_EVENT_FORM_LEFT_SPAM', 'Security');

@define('CAL_EVENT_DB_ERROR_ONE', 'DB error in eventcal table occurred:');
@define('CAL_EVENT_DB_ERROR_TWO', 'Database access not possible!');
@define('CAL_EVENT_USER_LOGINFIRST', 'For event administration you have to log in to blog administration before.');
@define('CAL_EVENT_USER_LOGINFIRST', 'For continuity of this process you have to be logged in with a valid blog user account. If you have, log in to the blog administration.');
@define('CAL_EVENT_USER_VALIDATION', 'Your username or password was incorrect.');
@define('CAL_EVENT_USER_LOGGEDOFF', 'You Session expired or you have logged-of your system. For event calendar administration you have to log-in to your blog again.');
@define('CAL_EVENT_USER_FREETABLE', 'You have successfully erased data older 1 month and rebuild the database table with %d remaining records.');
@define('CAL_EVENT_USER_FREE_SURE', 'Do you really want to erase old event datasets and rebuild the IDs of your event database table?<br />Be aware: this will have have negative effects to syndicated data of search engines or other services!');
@define('CAL_EVENT_USER_NOPERMISSION', 'You do not have the permission to continue!');
@define('CAL_EVENT_CHGSELECTED_ARRAY', 'You want to change one entry, please unmark the others.');
@define('CAL_EVENT_CHECKBOXALERT', 'Please check the checkbox of the entry you want to evaluate, change or erase.');

@define('CAL_EVENT_TODAY', 'TODAY');
@define('PLUGIN_EVENTCAL_CAL', ' Draw calendar ');
@define('PLUGIN_EVENTCAL_ADD', ' Draw add ');
@define('PLUGIN_EVENTCAL_APP', ' Draw app ');

/* Backend main constants */
@define('PLUGIN_EVENTCAL_ADMIN_NAME', 'Event calendar');
@define('PLUGIN_EVENTCAL_ADMIN_NAME_MENU', 'Event calendar  v.%s - Backend Administration Menu');
@define('PLUGIN_EVENTCAL_ADMIN_DBC', 'Event calendar - Plugin Administration');
@define('PLUGIN_EVENTCAL_ADMIN_VIEW', 'Event calendar - View approved events');
@define('PLUGIN_EVENTCAL_ADMIN_VIEW_DESC', 'Grouped by event type (tipo) single, multi, recur, weekly, yearly - ascending.');
@define('PLUGIN_EVENTCAL_ADMIN_ORDERBY_DESC', 'Grouped by event type (timestamp) descending.');
@define('PLUGIN_EVENTCAL_ADMIN_APP', 'Event Kalender - View unapproved events');
@define('PLUGIN_EVENTCAL_ADMIN_APP_DESC', 'Group by Startdate [ youngest above ].');
@define('PLUGIN_EVENTCAL_ADMIN_ERASE', 'Event Kalender - Erase Events');
@define('PLUGIN_EVENTCAL_ADMIN_LOG', 'Event Kalender - iCal Log');
@define('PLUGIN_EVENTCAL_ADMIN_LOG_ERROR', 'ATTENTION: There was an error writing the iCal log file. Please have a look what went wrong (is writable path and file)!');
@define('PLUGIN_EVENTCAL_ADMIN_ADD', 'Event Kalender - Insert events');
@define('PLUGIN_EVENTCAL_ADMIN_NORESULT', 'There are no events pending %s!');
@define('PLUGIN_EVENTCAL_ADMIN_NORESULT_APP', 'to approve');
@define('PLUGIN_EVENTCAL_ADMIN_NORESULT_DROP', 'to erase');
@define('PLUGIN_EVENTCAL_ADMIN_NORESULT_FREE', 'to cleanup');
@define('PLUGIN_EVENTCAL_ADMIN_FREE_SURE', 'Do you really want to free up old events from eventcal database table?');
@define('PLUGIN_EVENTCAL_ADMIN_CLEAN_SURE', 'Do you really want to set new autoincrement values (id) to all data in eventcal database table?');
@define('PLUGIN_EVENTCAL_ADMIN_CLEAN_SURE_ADD', '<u>Attention:</u> This might have negative effects to cached data in searchengines or other services!');
@define('PLUGIN_EVENTCAL_ADMIN_DROP_SURE', 'Do you really want to erase the eventcal database table with all data completly? Please confirm here!');
@define('PLUGIN_EVENTCAL_ADMIN_DROP_OK', 'Your %s database table was successful erased!');
@define('PLUGIN_EVENTCAL_ADMIN_DUMP_SELF', 'Before continuing you should for sure make a mysql dump via PhpMyAdmin!');
@define('PLUGIN_EVENTCAL_ADMIN_ICAL_EMAILLINK', 'Download all approved events as an ics file via email to admins email address, if set in this plugins config! Be sure there is one!');
@define('PLUGIN_EVENTCAL_ADMIN_ICAL_DOWNLINK', 'Download all approved events as an ics file!');
/* backend database (dbc) administration constants */
@define('PLUGIN_EVENTCAL_ADMIN_DBC_TITLE', 'Please be careful using this admin panel.');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_TITLE_DESC', 'Some links might be enhanced in future versions!');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_DUMP', 'Administration - dump');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_DUMP_DESC', 'backup your eventcal table from database');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_DUMP_TITLE', 'Manage dump eventcal db values');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_DUMP_DONE', 'Your eventcal database table has been backuped successfully!');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_DUMP_MSG', "Since this is not trivial, please use admin tools like phpMyAdmin to dump the data!");
@define('PLUGIN_EVENTCAL_ADMIN_DBC_INSERT', 'Administration - insert');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_INSERT_DESC', 'insert into eventcal table in database');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_INSERT_TITLE', 'insert eventcal db values');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_INSERT_MSG', 'Since this is not trivial, please use admin tools like phpMyAdmin to re-fill the database!');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_ERASE', 'Administration - erase');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_ERASE_DESC', 'remove your eventcal table from database ');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_ERASE_TITLE', 'erase the eventcal database');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_DELFILE_MSG', 'Database table sql file <u>%s</u> erased successfully');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_DELOLD', 'Administration - clean');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_DELOLD_DESC', 'remove events older 1 month from eventcal table in database');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_DELOLD_TITLE', 'delete old data > 1 month in eventcal table');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_DELOLD_MSG', 'You have removed %d old events older 30 days in past from eventcal database table.');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_DOWNLOAD', 'Administration - management');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_DOWNLOAD_DESC', 'Download and erase the eventcal database table dumps');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_DOWNLOAD_MSG', 'There is no eventcal directory in templates_c.');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_INCREMENT', 'Administration - increment');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_INCREMENT_DESC', 'set new increment id\'s to events in eventcal table in database');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_INCREMENT_TITLE', 'set new increment id\'s to eventcal table');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_INCREMENT_MSG', 'You have restructured the eventcal database with %d remaining values.');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_ICALALL', 'Administration - iCal');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_ICALALL_DESC', 'send all events as iCal file to admin - via email if is set in config, else as download');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_ICALALL_TITLE', 'send ical all via email or download to admin');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_ILOG', 'Administration - iLog');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_ILOG_DESC', 'view the iCal export iLog file, if is');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_ILOG_TITLE', 'view the ical export log file');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_ILOG_MSG', 'The ilog file does not exist!');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_NIXDA_DESC', 'there is no eventcal table in database');
@define('PLUGIN_EVENTCAL_ADMIN_DBC_NIXDA_TITLE', 'Administration - error');
