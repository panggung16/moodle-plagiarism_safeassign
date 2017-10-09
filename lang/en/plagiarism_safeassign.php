<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * SafeAssign language strings.
 *
 * @package   plagiarism_safeassign
 * @copyright Copyright (c) 2017 Blackboard Inc.
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'SafeAssign plagiarism plugin';
$string['getscores'] = 'Get scores for submissions';
$string['getscoreslog'] = 'SafeAssign score task log';
$string['getscoreslogfailed'] = 'SafeAssign score task fail';
$string['getscoreslog_desc'] = 'SafeAssign score task ran successfully.';
$string['studentdisclosuredefault']  ='All files uploaded will be submitted to a plagiarism detection service';
$string['studentdisclosure'] = 'Institution Release Statement';
$string['studentdisclosure_help'] = 'This text will be displayed to all students on the file upload page.';
$string['safeassignexplain'] = 'For more information on this plugin see: ';
$string['safeassign'] = 'SafeAssign';
$string['safeassign:enable'] = 'Allow the teacher to enable/disable SafeAssign inside an activity';
$string['safeassign:viewreport'] = 'Allow the teacher to view the full report from SafeAssign';
$string['usesafeassign'] ='Enable SafeAssign';
$string['savedconfigsuccess'] = 'Plagiarism Settings Saved';
$string['safeassign_api']= 'SafeAssign integration URL';
$string['safeassign_api_help'] = 'This is the address of the SafeAssign API.';
$string['instructor_role_credentials'] = 'Instructor Role Credentials';
$string['safeassign_instructor_username'] = 'Shared key';
$string['safeassign_instructor_username_help'] = "Instructor's shared key provided by SafeAssign.";
$string['safeassign_instructor_password'] = 'Shared secret';
$string['safeassign_instructor_password_help'] = "Instructor's shared secret provided by SafeAssign.";
$string['student_role_credentials'] = 'Student Role Credentials';
$string['safeassign_student_username'] = 'Shared key';
$string['safeassign_student_username_help'] = "Student's shared key provided by SafeAssign.";
$string['safeassign_student_password'] = 'Shared secret';
$string['safeassign_student_password_help'] = "Student's shared secret provided by SafeAssign.";
$string['safeassign_enableplugin'] = 'Enable SafeAssign for {$a}';
$string['safeassign_institutioninfo'] = 'Institution name: ';
$string['safeassign_cachedefault'] = '<div class="form-defaultinfo text-muted">&nbsp Default value: 0</div> <br>';
$string['safeassign_contactname'] = 'Contact First Name: ';
$string['safeassign_contactlastname'] = 'Contact Last Name: ';
$string['safeassign_contactemail'] = 'Contact Email: ';
$string['safeassign_contactjob'] = 'Contact Job Title: ';
$string['safeassign_showid'] = 'Show Student ID';
$string['safeassign_alloworganizations'] = 'Allow SafeAssignments in Organizations';
$string['safeassign_referencedbactivity'] = 'Global Reference Database Activity';
$string['safeassing_response_header'] = '<br>SafeAssign server response: <br>';
$string['safeassign_instructor_credentials'] = 'Instructor Role Credentials: ';
$string['safeassign_student_credentials'] = 'Student Role Credentials: ';
$string['safeassign_credentials_verified'] = 'Connection verified.';
$string['safeassign_credentials_fail'] = 'Connection not verified. Check key, secret and url.';
$string['credentials'] = 'Credentials and Service URL';
$string['shareinfo'] = 'Share info with SafeAssign';
$string['disclaimer']= '<br>Submitting to the SafeAssign Global Reference Database allows papers from other institutions <br>
                        to be checked against your students paper to protect the origin of their work.';
$string['settings'] = 'SafeAssign Settings';
$string['timezone_help'] = 'The timezone set in your Moodlerooms environment.';
$string['timezone'] = 'Timezone';
$string['safeassign_status'] = 'SafeAssign status';
$string['status:pending'] = 'Pending';
$string['safeassign_score'] = 'SafeAssign score';
$string['safeassign_reporturl'] = 'Report URL';
$string['button_disabled'] = 'Save form to test connection';
// Rest provider.
$string['error_generic'] = '{$a}';
$string['error_behat_getjson'] = 'Timezone';
$string['safeassign_curlcache'] = 'Cache timeout';
$string['safeassign_curlcache_help'] = 'Web service cache timeout.';
$string['rest_error_nocurl'] = 'cURL module must be present and enabled!';
$string['rest_error_nourl'] = 'You must specify URL!';
$string['rest_error_nomethod'] = 'You must specify request method!';
$string['rest_error_server'] = '{$a}';
$string['rest_error_curl'] = '{$a}';
$string['test_credentials'] = 'Test connection';
$string['connectionfailed'] = 'Connection Failed';
$string['connectionverified'] = 'Connection Verified';
$string['cachedef_request'] = 'SafeAssign request cache';
// Behat test.
$string['error_behat_getjson'] = 'Error to get json file "{$a}" from folder plagiarism/safeassign/tests/fixtures for '.
    'simulating a call to SafeAssign webservices when running behat tests.';
$string['error_behat_instancefail'] = 'This is an instance configured to fail with behat tests.';
$string['safeassign'] = 'Safeassign Plagiarism plugin';
$string['assignment_check_submissions'] = 'Check submissions for plagiarism';
$string['assignment_check_submissions_help'] = 'SafeAssign Originality Reports will not be available to Teachers if anonymous grading
 is set, but Students will be able to view their own SafeAssign Originality Reports if "Allow students to view originality report" is selected.
<br>N.B. SafeAssign currently only supports English-language submissions.';
$string['students_originality_report'] = 'Allow students to view originality report';
$string['submissions_global_reference'] = 'Exclude submissions from institutional and global reference database';

// Disclosure agreement.
$string['plagiarism_tools'] = 'Plagiarism Tools';
$string['files_accepted'] = 'SafeAssign accepts files in .doc, .docx, .docm, .ppt, .pptx, .odt, .txt, .rtf, .pdf and .html file formats only. Files of any other format will not be checked through SafeAssign.';
$string['agreement'] = 'I agree to submit my paper(s) to the Global Reference Database.';
$string['error_api_generic'] = 'There was an error processing your request.';
$string['error_api_unauthorized'] = 'There was an authentication error processing your request.';
$string['error_api_forbidden'] = 'There was an authorization error processing your request.';
$string['error_api_not_found'] = 'The requested resource was not found.';
$string['sync_assignments'] = 'Sends the available information to the SafeAssign server.';
$string['api_call_log_event'] = 'SafeAssign log for API calls.';
$string['course_error_sync'] = 'An error occurred trying to sync the Course with ID: {$a} into SafeAssign: <br>';
$string['assign_error_sync'] = 'An error occurred trying to sync the Assignment with ID: {$a} into SafeAssign: <br>';
$string['submission_error_sync'] = 'An error ocurred trying to sync the Submission with ID: {$a} into SafeAssign: <br>';
$string['submission_success_sync'] = 'Submissions synced successfully';
$string['assign_success_sync'] = 'Assignments synced successfully';
$string['course_success_sync'] = 'Courses synced successfully';
$string['license_header'] = 'SafeAssign&trade; License Agreement';
$string['license_title'] = 'SafeAssign License Agreement';
$string['license_text'] = '(LICENSE TEXT)';
$string['not_configured'] = 'SafeAssign&trade; is not configured. Please have your system administrator submit a ticket on Behind the Blackboard for assistance.';

