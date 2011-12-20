<?php
return array(
    'access_denied_privlages' => 'Your account level does not have sufficient privlages to preform this action.',
    'account_ban_success' => 'Account successfully banned.',
    'account_ban_error' => 'Account ban was unsuccessfull! Please check your error logs.',
    'account_cant_ban_self' => 'You can\'t ban yourself!',
    'account_delete_success' => 'Account Deleted, You will be redirected now...',
    'account_delete_error' => 'There was an error deleting the account! Please check your error log.',
    'account_lock_success' => 'User account now locked',
    'account_lock_error' => 'Unable to lock account. Please check your error log.',
    'account_recover_failed_not_set' => 'We are sorry, but your account cannot be recovered because your recovery question was never set. Please contact an administrator',
    'account_recover_failed_wrong_answer' => 'The answer to the secret question was invalid. Please check your spelling and try again',
    'account_recover_invalid_email' => 'The email entered does not match the email tied to this account. Please check your spelling or try a different email address',
    'account_recover_pass_failed' => 'A critical error happened while updating your password. Please contact an admin to resolve this issue.',
    'account_recover_pass_success' => 'Your account was recovered successfully! Your new password is <b>%s</b>',
    'account_recover_pass_success_email' => 'Your account was recovered successfully! We have sent an email with your new password to the registered email address.',
    'account_recovery_set_success' => 'Account recovery options are now set. You now have full access to your account',
    'account_recovery_set_failed' => 'An error occured while setting your account recovery options, Please contact an administrator.',
    'account_update_email_failed' => 'There was an error updating you email. Please contact support.',
    'account_update_email_invalid' => 'The current email you entered for this account was invalid. Please check your spelling and try again.',
    'account_update_email_success' => 'Your email was successfully updated!',
    'account_unlock_success' => 'User account is now unlocked',
    'account_unlock_error' => 'Failed to unlock user account! Please check your error log',
    'account_unban_success' => 'Account successfully Unbanned.',
    'account_unban_error' => 'Account Unban was unsuccessfull! Please check your error logs.',
    'account_update_success' => 'Account successfully updated!',
    'account_update_error' => 'Unable to update user account. Please check your error log.',
    'account_update_login_failed' => 'The current password you entered for this account is incorrect.',
    'account_update_nochanges' => 'Update cancelled, You did not make any changes',
    'account_update_pass_failed' => 'There was a problem updating your password. Please contact an administrator.',
    'account_update_pass_success' => 'Password successfully updated!',
    'account_unable_to_activate' => 'Invalid activation key or email. If you feel you recieved this message in error, Please contact and adminstrator',
    'account_activate_success' => 'Success! Your account has been activated. You may now login to our site and servers.',
    'captcha_bad_font_dir' => 'Could not open the Font directory. Please make sure the directory exists.',
    'captcha_incorrect' => 'The Captcha you entered was incorrect. Please try again.',
    'captcha_init_failed' => 'It seems your webserver does not have the required imagettftext() method. Please Make sure you have GD library installed. If you cannot enable this feature, 
        you will need to turn Captcha\'s off in the config file.',
    'captcha_no_fonts' => 'There are no fonts found in the Fonts directory. Please place some .ttf text files in the directory.',
    'config_save_success' => "<strong>Success!</strong> Config successfully updated!",
    'config_save_error' => "Error: There was a problem updating the config file. Please check you error log for details.!",
    'emulator_doesnt_exist' => "Emulator '%s' can't be found in the 'Application/Library/Emulators' folder.",
    'form_validation_failed' => 'One or more fields where not filled out correctly. Please try again',
    'fetal_error' => "Fetal error! Please notify an administrator.",
    'invalid_realm_id' => 'The realm ID specified does not exist',
    'login_failed_field_invalid' => "<strong>Login Failed:</strong> One or more fileds were not filled correctly.",
    'login_failed_wrong_credentials' => "<strong>Login Failed:</strong> Username or password is incorrect. Please check your spelling",
    'login_failed_account_unactivated' => "<strong>Login Failed:</strong> Your account has not been activated. Please click the link in your account acctivation email to enable access to your account.",
    'news_delete_success' => "<strong>Success!</strong> News post successfully deleted!",
    'news_delete_error' => "<strong>Error!</strong> There was an error deleteing the news post. Please check your error log for errors.",
    'news_post_error' => "<strong>Error!</strong> There was an error submiting the news post. Please check your error log for errors.",
    'news_posted_successfully' => "<strong>Success!</strong> News post successfully submitted!",
    'news_update_error' => "There was an error updating the news post. This can be due to the fact no changes were made.",
    'news_update_success' => "<strong>Success!</strong> News post successfully updated!",
    'news_validation_error' => "<strong>Error:</strong> News post failed validation checks. Please make sure all fields are filled out properly",
    'no_realms_installed' => "No realms found. Please come back later!",
    'page_access_denied' => 'Your account level does not have sufficient privlages to view this page.',
    'realm_default_failed' => 'There was an error updating the config file! Please check your error log.',
    'realm_default_success' => 'Success! The default realm has been changed.',
    'realm_install_error' => 'There was an error installing the realm in the database. Please check your error logs',
    'realm_install_success' => '<strong>Success!</strong> Realm successfully installed',
    'realm_install_warning' => 'Realm installed successfully, but we were unable to connect to the World and Character databases.',
    'realm_update_error' => 'There was an error updating the realm in the database. Please check your error logs',
    'realm_update_success' => 'Realm successfully updated',
    'realm_update_warning' => 'Realm updated successfully, but we were unable to connect to the World and Character databases.',
    'realm_uninstall_error' => 'There was an error un-installing the realm in the database. Please check your error logs',
    'realm_uninstall_success' => 'Realm successfully un-installed',
    'reg_disabled' => 'Registration has been disabled by the administrator of this site. Please try again later.',
    'reg_failed_email_exists' => "The entered email is already in use, Please pick a different email address and try again.",
    'reg_failed_field_invalid' => "<strong>Registration Failed:</strong> One or more fileds were not filled correctly.",
    'reg_failed_ip_banned' => "Your Ip is Banned. You are unauthorized to create anymore accounts.",
    'reg_failed_invalid_key' => 'The registration key entered is invalid. If you continue to see this error, please notify an administrator',
    'passwords_dont_match' => 'Passwords did not match. Please try again.',
    'reg_failed_username_exists' => "Username already exists, Please pick a different username and try again.",
    'reg_success' => "Account Created Successfully!",
    'reg_success_email_error' => "Your account was created successfully, but we unfortunatly are unable to send your verification email. Please contact an administrator.",
    'reg_success_activation_required' => 'Account Created Successfully! You will need to activate your account via email before you can login and play on our servers.',
    'submit_failed_fields_empty' => 'One or more fields where left empty. Please try again',
    'user_not_found_1' => "Error: Invalid Username or ID.",
    'user_not_found_2' => "Invalid Username or ID. Please make sure: 
        <ol><li>You have selected the right Emulator in the site config</li><li>The account data for this account is in both the Realm and Plexis account tables.</li></ol>
        If neither of these are the issue, Contact a Plexis Web Developer.",
    'username_doesnt_exist' => 'Username doesnt exist',
    'validation_failed' => 'Form submission cancelled, One or more fields are not filled in correctly', 
    'wowlib_driver_doesnt_exist' => "WowLib driver '%s' does not exists in the 'application/library/WoWLib' folder",
    'wowlib_realm_doesnt_exist' => "WowLib library failed to load a realm with an id of  '%s'. Please make sure the realm is installed."
);