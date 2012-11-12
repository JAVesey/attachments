<?php
/**
 * Attachments component
 *
 * @package Attachments
 * @subpackage Attachments_Component
 *
 * @copyright Copyright (C) 2007-2012 Jonathan M. Cameron, All Rights Reserved
 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
 * @link http://joomlacode.org/gf/project/attachments/frs/
 * @author Jonathan M. Cameron
 */

defined('_JEXEC') or die('Restricted access');
?>
<pre>
Attachments 3.x Extension for Joomla 1.7/2.5+

2012-??: Release 3.1
   - 2012-08-18 Added attachments list sort option: description (reversed, z-a).
   - 2012-09-08 Several updates to support upgrade to Joomla 3.0:
      - Updated deprecated classes/functions (JRules->JAccessRules,
        user->authorisedLevels(), user->getAuthorisedViewLevels()).
      - Converted all 'X' toolbar items to non-X versions (eg, addNewX->addNew,
        editListX->editList, deleteListX->deleteList) for future compatibility with
        Joomla 3.0.
      - Converted several Joomal classes to legacy version for future compatibility
        for Joomla 3.0 (JModel->JModelLegacy, JController->JControllerLegacy,
        JView->JViewLegacy).
      - NOTE that these legacy classes only work with Joomla 2.5.5 or later, so
        earlier versions of Joomla are not longer supported (including Joomla 1.7).
   - 2012-10-13 Added in missing translation term for error messages.
   - 2012-10-17 Fixed issue in display of insert_attachments_editor editor button.
        (Primarily affected joomlaCK editor.)
   - 2012-10-25 Added optional display of 'Created' date in front end displays
	    of attachments lists.  Changed modification date format to be date format
	    since it now applies to both creation and modification dates.
   - 2012-11-10 Fixed many permissions issues for backend users with limited
	    permissions.
   - 2012-11-10 Renumbered all error numbers.
   - 2012-11-10 Added extra code to handle legacy classes for Joomla version 2.5.5
     	and earlier.  (The new legacy classes were introduced in Joomla version 2.5.6.)
   - 2012-11-11 Cleaned up some permissions issues with adding/editing attachments
	    in the backend by non-super-user.
   - 2012-11-11 Changed all JError::raiseWarning() to JError::raiseError().
	    Apparently, raiseWarning is not well supported by Joomla. 

2012-09-07: Release 3.0.4
   - 2012-09-07 Fixed bug causing crashes when component (only) is uninstalled.

2012-08-11: Release 3.0.3
   - 2011-09-27 Fixed errors in the English version of the help file
   - 2011-10-30 Changes access/view level dialog to show all access levels to Super-User.
   - 2011-10-30 Fixed issue that caused the backend to crash when users disabled the framework plugin.
   - 2011-10-31 More updates to make things fail more gracefully if the framework plugin is disabled.
   - 2011-12-01 Fix to prevent incorrectly displaying attachments for creating article from category layout.
   - 2012-02-10 Added trim() function to import code to clean field names from CSV files.
   - 2012-02-10 Minor translation fix to search plugin code.
   - 2012-02-11 Fix pagination so that is remembers the limit start.
   - 2012-02-14 Fixed bug in handling errors when checking URLs.
   - 2012-02-23 Cleaned up quoting in DB calls.
   - 2012-03-08 Added jimports for JController to a few files.
   - 2012-03-09 IE-specific fix for downloading filenames with special characters in Internet Explorer.
                Thanks to crassus168 (chris@gamehit.net) for suggestions for this fix.
   - 2012-03-10 Fixed handling of showing attachments for editing articles
                from category blog and category list.
   - 2012-03-10 Updated minor translation fix to search plugin code to resolve issues in Joomla 2.5.
   - 2012-03-19 Fixed issue with displayString refactor (front end upload failing).
   - 2012-03-23 Fixed bug in sorting by Creator name in backend attachments list.
   - 2012-03-23 Fixed issue with redisplay after editing/deleting attachments from
                category blog view on front end.
   - 2012-03-23 Suppress extra info messages during installation.
   - 2012-04-01 Fixed bug when adding URLs during creating an article from front end.
   - 2012-04-03 Fix to make sure that pre-existing orphaned attachments are displayed
                when creating an article.
   - 2012-04-06 Removed code to translate access levels.  Apparently they are not translated!
   - 2012-04-06 Added code to warn user there are bad attachments (eg, ones whose parents are uninstalled).
   - 2012-04-17 Fixed several 'strict PHP' issues.
   - 2012-04-20 Fixed issue with the display of attachments for categories.
   - 2012-04-20 Fixed issue with attachments list display in editor displaying badly when the
                'toggle editor' button is used.
   - 2012-05-07 Fixed issue with missing translation items.
   - 2012-05-11 Added trunction of filenames if longer than the filename field in the database.
   - 2012-05-13 Added warning messages when a filename is truncated.
   - 2012-05-13 Updated behavior: Do not kill display-name when updating/replacing a file.
   - 2012-05-14 Fixed issue with adding attachments while editing an article (in category list/blog)
   - 2012-05-15 Updated most of the error numbers, added a warning about potential templates
                problems in the category blog view
   - 2012-05-16 Updated the CSS rules for the attachments display to be more robust.
   - 2012-08-04 Fixed frontend display of category attachments using regular onContentPrepare event.
   - 2012-08-10 Updated minimum supported version of Joomla to 1.7.
                Generalized error message when trying to install Attachments on an old/unsupported
                version of Joomla.
   - 2012-08-11 Tested with Joomla 2.5.6 on Linux and Windows.

2011-09-17: Release 3.0.2
   - 2011-09-12 Improved display of frontend upload/update forms
   - 2011-09-17 Fixed bug in delete dialog while editing article on front end
   - 2011-09-17 Fixed save2New issue for Joomla 1.6.x

2011-09-09: Release 3.0.1
   - 2011-09-06 Fixed bug in migration import code that prevented proper error
     messages when imports fail (eg, file not found, etc).  Changed the dry_run
     success message to show number of attachments found in CSV file
   - 2011-09-07 Fixed error in token IDs for admin unpublish messages
   - 2011-09-08 Added Save+New button in admin form to add attachments
   - 2011-09-09 Added missing error numbers in import code

2011-08-28: Release 3.0
   - Derived from unreleased 2.3
   - Significant refactoring, reimplementing, new features, cleanups, etc.
   - Testing several RC versions by over 140 testers

</pre>
