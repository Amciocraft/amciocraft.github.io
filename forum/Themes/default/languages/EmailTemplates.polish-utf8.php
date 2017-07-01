<?php
// Version: 2.0; EmailTemplates

global $context, $birthdayEmails;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Since all of these strings are being used in emails, numeric entities should be used.
// Do not translate anything that is between {}, they are used as replacement variables and MUST remain exactly how they are.
//   Additionally do not translate the @additioinal_parmas: line or the variable names in the lines that follow it.  You may
//   translate the description of the variable.  Do not translate @description:, however you may translate the rest of that line.
// Do not use block comments in this file, they will have special meaning.
$txt['scheduled_approval_email_topic'] = 'Następujące tematy oczekują na zatwierdzenie:';
$txt['scheduled_approval_email_msg'] = 'Następujące wiadomości oczekują na zatwierdzenie:';
$txt['scheduled_approval_email_attach'] = 'Następujące załączniki oczekują na zatwierdzenie:';
$txt['scheduled_approval_email_event'] = 'Następujące wydarzenia oczekują na zatwierdzenie:';

$txt['emails'] = array(

'resend_activate_message' => array(

/*
@additional_params: resend_activate_message
REALNAME: The display name for the member receiving the email.
USERNAME: The user name for the member receiving the email.
ACTIVATIONLINK: The url link to activate the member's account.
ACTIVATIONCODE: The code needed to activate the member's account.
ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
FORGOTPASSWORDLINK: The url to the "forgot password" page.
@description:
*/

'subject' => 'Witamy na {FORUMNAME}',

'body' => 'Dziękujemy za rejestrację na {FORUMNAME}. Twoja nazwa użytkownika to "{USERNAME}". Jeśli zapomniałeś swojego hasła możesz je zresetować za pomocą {FORGOTPASSWORDLINK}

Zanim będziesz mógł się zalogować, musisz najpierw aktywować swoje konto. Aby to zrobić, kliknij w poniższy link:

{ACTIVATIONLINK}

Masz problemy z aktywacją? Odwiedź {ACTIVATIONLINKWITHOUTCODE} i wpisz kod aktywacyjny "{ACTIVATIONCODE}".

{REGARDS}',

),

'resend_pending_message' => array(

/*
@additional_params: resend_pending_message
REALNAME: The display name for the member receiving the email.
USERNAME: The user name for the member receiving the email.
@description:
*/

'subject' => 'Witamy na {FORUMNAME}',

'body' => '{REALNAME}, otrzymaliśmy Twoją prośbę o rejestrację na {FORUMNAME}.

Nazwa użytkownika, pod którą się zarejestrowałeś, to {USERNAME}.

Zanim będziesz mógł się zalogować i używać forum, Twoja prośba o rejestrację musi zostać zatwierdzona. Kiedy to nastąpi, otrzymasz kolejnego maila z tego adresu.

{REGARDS}',

),

'mc_group_approve' => array(

/*
@additional_params: mc_group_approve
USERNAME: The user name for the member receiving the email.
GROUPNAME: The name of the membergroup that the user was accepted into.
@description: The request to join a particular membergroup has been accepted.
*/

'subject' => 'Zostałeś dodany do grupy',

'body' => '{USERNAME},

Pragniemy poinformować, że Twoja prośba o dołączenie do grupy "{GROUPNAME}" na {FORUMNAME} została przyjęta. Twoje konto zostało zaktualizowane i uwzględnia teraz członkostwo w tej grupie.

{REGARDS}',

),

'mc_group_reject' => array(

/*
@additional_params: mc_group_reject
USERNAME: The user name for the member receiving the email.
GROUPNAME: The name of the membergroup that the user was rejected from.
@description: The request to join a particular membergroup has been rejected.
*/

'subject' => 'Członkostwo w grupie odrzucone',

'body' => '{USERNAME},

Z przykrością informujemy, że Twoja prośba o dołączenie do "{GROUPNAME}" na {FORUMNAME} została odrzucona.

{REGARDS}',

),

'mc_group_reject_reason' => array(

/*
@additional_params: mc_group_reject_reason
USERNAME: The user name for the member receiving the email.
GROUPNAME: The name of the membergroup that the user was rejected from.
REASON: Reason for the rejection.
@description: The request to join a particular membergroup has been rejected with a reason given.
*/

'subject' => 'Członkostwo w grupie odrzucone',

'body' => '{USERNAME},

Z przykrością informujemy, że Twoja prośba o dołączenie do "{GROUPNAME}" na {FORUMNAME} została odrzucona.

Powód odrzucenia Twojej prośby: {REASON}

{REGARDS}',

),

'admin_approve_accept' => array(

/*
@additional_params: admin_approve_accept
NAME: The display name of the member.
USERNAME: The user name for the member receiving the email.
PROFILELINK: The URL of the profile page.
FORGOTPASSWORDLINK: The URL of the "forgot password" page.
@description:
*/

'subject' => 'Witamy na {FORUMNAME}',

'body' => 'Witaj, {NAME}!

Twoje konto zostało aktywowane ręcznie przez Admina. Teraz możesz się zalogować i korzystać z forum. Twoja nazwa użytkownika to: {USERNAME}

Jeśli zapomniałeś swojego hasła możesz je zmienić klikając w:
{FORGOTPASSWORDLINK}

{REGARDS}',

),

'admin_approve_activation' => array(

/*
@additional_params: admin_approve_activation
USERNAME: The user name for the member receiving the email.
ACTIVATIONLINK: The url link to activate the member's account.
ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
ACTIVATIONCODE: The activation code.
@description:
*/

'subject' => 'Witamy na {FORUMNAME}',

'body' => 'Witaj, {USERNAME}!

Twoje konto na {FORUMNAME} zostało zatwierdzone przez administratora i musi zostać aktywowane, zanim będziesz mógł korzystać z forum. Proszę, użyj poniższego linku, aby aktywować swoje konto:
{ACTIVATIONLINK}

Masz problemy z aktywacją? Odwiedź {ACTIVATIONLINKWITHOUTCODE} i wpisz kod aktywacyjny "{ACTIVATIONCODE}".

{REGARDS}',

),

'admin_approve_reject' => array(

/*
@additional_params: admin_approve_reject
USERNAME: The user name for the member receiving the email.
@description:
*/

'subject' => 'Rejestracja odrzucona',

'body' => '{USERNAME},

Przykro nam, ale Twoja prośba o rejestrację na {FORUMNAME} została odrzucona.

{REGARDS}',

),

'admin_approve_delete' => array(

/*
@additional_params: admin_approve_delete
USERNAME: The user name for the member receiving the email.
@description:
*/

'subject' => 'Konto zostało usunięte',

'body' => '{USERNAME},

Twoje konto na {FORUMNAME} zostało usunięte. Prawdopodobna przyczyna: Nie aktywowałeś swojego konta po rejestracji. Jeśli chcesz korzystać z forum, musisz powtórzyć proces rejestracji.

{REGARDS}',

),

'admin_approve_remind' => array(

/*
@additional_params: admin_approve_remind
USERNAME: The user name for the member receiving the email.
ACTIVATIONLINK: The url link to activate the member's account.
ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
ACTIVATIONCODE: The activation code.
@description:
*/

'subject' => 'Przypomnienie o rejestracji',

'body' => '{USERNAME},
Nie dokonałeś aktywacji swojego konta na {FORUMNAME}.

Aby aktywować konto i korzystać z forum, kliknij poniższy link:
{ACTIVATIONLINK}

Masz problemy z aktywacją? Odwiedź {ACTIVATIONLINKWITHOUTCODE} i wpisz kod aktywacyjny "{ACTIVATIONCODE}".

{REGARDS}',

),

'admin_register_activate' => array(

/*
@additional_params:
USERNAME: The user name for the member receiving the email.
ACTIVATIONLINK: The url link to activate the member's account.
ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
ACTIVATIONCODE: The activation code.
@description:
*/

'subject' => 'Witaj na {FORUMNAME}',

'body' => 'Dziękujemy za rejestrację na {FORUMNAME}. Twoja nazwa użytkownika to {USERNAME} oraz hasło {PASSWORD}.

Przed zalogowaniem musisz aktywować swoje konto klikając w poniższy link:

{ACTIVATIONLINK}

Masz problemy z aktywacją? Odwiedź {ACTIVATIONLINKWITHOUTCODE} i wpisz kod aktywacyjny "{ACTIVATIONCODE}".

{REGARDS}',

),

'admin_register_immediate' => array(

'subject' => 'Witaj na {FORUMNAME}',

'body' => 'Dziękujemy za rejestrację na {FORUMNAME}. Twoja nazwa użytkownika to {USERNAME} oraz hasło {PASSWORD}.

{REGARDS}',

),

'new_announcement' => array(

/*
@additional_params: new_announcement
TOPICSUBJECT: The subject of the topic being announced.
MESSAGE: The message body of the first post of the announced topic.
TOPICLINK: A link to the topic being announced.
@description:
*/

'subject' => 'Powiadomienie: {TOPICSUBJECT}',

'body' => '{MESSAGE}

Aby zrezygnować z powiadomień, zaloguj się na forum i odznacz "Otrzymuj powiadomienia i ważne informacje przez email" w swoim profilu.

Aby zobaczyć treść powiadomienia kliknij na poniższy link:
{TOPICLINK}

{REGARDS}',

),

'notify_boards_once_body' => array(

/*
@additional_params: notify_boards_once_body
TOPICSUBJECT: The subject of the topic causing the notification
TOPICLINK: A link to the topic.
MESSAGE: This is the body of the message.
UNSUBSCRIBELINK: Link to unsubscribe from notifications.
@description:
*/

'subject' => 'Nowy Wątek: {TOPICSUBJECT}',

'body' => 'Nowy wątek, \'{TOPICSUBJECT}\', powstał na forum, które obserwujesz.

Możesz go zobaczyć tutaj:
{TOPICLINK}

Więcej odpowiedzi może zostać wysłane, ale nie otrzymasz nowych powiadomień emailem, dopóki nie przeczytasz wątku.

Treść wątku:
{MESSAGE}

Przestań śledzić nowe wątki na tym forum, klikając tutaj:
{UNSUBSCRIBELINK}

{REGARDS}',

),

'notify_boards_once' => array(

/*
@additional_params: notify_boards_once
TOPICSUBJECT: The subject of the topic causing the notification
TOPICLINK: A link to the topic.
UNSUBSCRIBELINK: Link to unsubscribe from notifications.
@description:
*/

'subject' => 'Nowy Wątek: {TOPICSUBJECT}',

'body' => 'Nowy wątek, \'{TOPICSUBJECT}\', powstał na forum, które obserwujesz.

Możesz go zobaczyć tutaj:
{TOPICLINK}

Więcej odpowiedzi może zostać wysłane, ale nie otrzymasz nowych powiadomień emailem, dopóki nie przeczytasz wątku.

Przestań śledzić nowe wątki na tym forum, klikając tutaj:
{UNSUBSCRIBELINK}

{REGARDS}',

),

'notify_boards_body' => array(

/*
@additional_params: notify_boards_body
TOPICSUBJECT: The subject of the topic causing the notification
TOPICLINK: A link to the topic.
MESSAGE: This is the body of the message.
UNSUBSCRIBELINK: Link to unsubscribe from notifications.
@description:
*/

'subject' => 'Nowy Wątek: {TOPICSUBJECT}',

'body' => 'Nowy wątek, \'{TOPICSUBJECT}\', powstał na forum, które obserwujesz.

Możesz go zobaczyć tutaj:
{TOPICLINK}

Treść wątku:
{MESSAGE}

Przestań śledzić nowe wątki na tym forum, klikając tutaj:
{UNSUBSCRIBELINK}

{REGARDS}',

),

'notify_boards' => array(

/*
@additional_params: notify_boards
TOPICSUBJECT: The subject of the topic causing the notification
TOPICLINK: A link to the topic.
UNSUBSCRIBELINK: Link to unsubscribe from notifications.
@description:
*/

'subject' => 'Nowy Wątek: {TOPICSUBJECT}',

'body' => 'Nowy wątek, \'{TOPICSUBJECT}\', powstał na forum, które obserwujesz.
Możesz go zobaczyć tutaj:
{TOPICLINK}

Przestań śledzić nowe wątki na tym forum, klikając tutaj:
{UNSUBSCRIBELINK}

{REGARDS}',

),

'request_membership' => array(

/*
@additional_params: request_membership
RECPNAME: The name of the person recieving the email
APPYNAME: The name of the person applying for group membership
GROUPNAME: The name of the group being applied to.
REASON: The reason given by the applicant for wanting to join the group.
MODLINK: Link to the group moderation page.
@description:
*/

'subject' => 'Nowe zgłoszenie do grupy',

'body' => '{RECPNAME},

{APPYNAME} poprosił o członkostwo w grupie "{GROUPNAME}". Użytkownik podał następujące uzasadnienie:

{REASON}

Możesz zaakceptować lub odrzucić tę prośbę, przez kliknięcie w poniższy link:

{MODLINK}

{REGARDS}',

),

'paid_subscription_reminder' => array(

/*
@additional_params: scheduled_approval
REALNAME: The real (display) name of the person receiving the email.
PROFILE_LINK: Link to profile of member receiving email where can renew.
SUBSCRIPTION: Name of the subscription.
END_DATE: Date it expires.
@description:
*/

'subject' => 'Twoja subskrypcja na {FORUMNAME}, niebawem wygaśnie',

'body' => '{REALNAME},

Subskrypcja, którą zaznaczyłeś na {FORUMNAME}, wkrótce wygaśnie. Jeśli chcesz zrezygnować z subskrypcji, po prostu nie rób nic. Zawsze możesz ponownie uruchomić subskrypcję później. Szczegóły poniżej:

Nazwa Powiadomienia: {SUBSCRIPTION}
Wygasa: {END_DATE}

Żeby edytować swoje powiadomienia, odwiedź adres URL:
{PROFILE_LINK}

{REGARDS}',

),

'activate_reactivate' => array(

/*
@additional_params: activate_reactivate
ACTIVATIONLINK: The url link to reactivate the member's account.
ACTIVATIONCODE: The code needed to reactivate the member's account.
ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
@description:
*/

'subject' => 'Witamy ponownie na {FORUMNAME}',

'body' => 'Żeby ponownie zatwierdzić Twój adres email, konto zostało zdezaktywowane. Kliknij na poniższy link, aby ponownie aktywować swoje konto:
{ACTIVATIONLINK}

Masz problemy z aktywacją? Odwiedź {ACTIVATIONLINKWITHOUTCODE} i wpisz kod aktywacyjny "{ACTIVATIONCODE}".

{REGARDS}',

),

'forgot_password' => array(

/*
@additional_params: forgot_password
REALNAME: The real (display) name of the person receiving the reminder.
REMINDLINK: The link to reset the password.
IP: The IP address of the requester.
MEMBERNAME:
@description:
*/

'subject' => 'Nowe hasło dla {FORUMNAME}',

'body' => 'Drogi {REALNAME},
Ten email został wysłany, ponieważ użyłeś funkcji \'forgot password\'. Aby ustawić nowe hasło, kliknij w poniższy link:
{REMINDLINK}

IP: {IP}
Użytkownik: {MEMBERNAME}

{REGARDS}',

),

'forgot_openid' => array(

/*
@additional_params: forgot_password
REALNAME: The real (display) name of the person receiving the reminder.
IP: The IP address of the requester.
OPENID: The members OpenID identity.
@description:
*/

'subject' => 'OpenID - przypomnienie dla {FORUMNAME}',

'body' => 'Drogi {REALNAME},
Ten email został wysłany, ponieważ użyłeś funkcji \'forgot OpenID\'. Poniżej znajdziesz OpenID, z którym powiązane jest Twoje konto:
{OPENID}

IP: {IP}
Użytkownik: {MEMBERNAME}

{REGARDS}',

),

'scheduled_approval' => array(

/*
@additional_params: scheduled_approval
REALNAME: The real (display) name of the person receiving the email.
BODY: The generated body of the mail.
@description:
*/

'subject' => 'Zestawienie postów oczekujących na zatwierdzenie na {FORUMNAME}',

'body' => '{REALNAME},

Ten email zawiera Zestawienie postów oczekujących na zatwierdzenie na {FORUMNAME}.

{BODY}

Zaloguj się na forum aby obejrzeć te pozycje.
{SCRIPTURL}

{REGARDS}',

),

'send_topic' => array(
/*
@additional_params: send_topic
TOPICSUBJECT: The subject of the topic being sent.
SENDERNAME: The name of the member sending the topic.
RECPNAME: The name of the person receiving the email.
TOPICLINK: A link to the topic being sent.
@description:
*/

'subject' => 'Wątek: {TOPICSUBJECT} (Od: {SENDERNAME})',

'body' => 'Drogi {RECPNAME},
Chciałbym abyś sprawdził "{TOPICSUBJECT}" na {FORUMNAME}. Aby go obejrzeć, kliknij na link:

{TOPICLINK}

Dzięki,

{SENDERNAME}',

),

'send_topic_comment' => array(

/*
@additional_params: send_topic_comment
TOPICSUBJECT: The subject of the topic being sent.
SENDERNAME: The name of the member sending the topic.
RECPNAME: The name of the person receiving the email.
TOPICLINK: A link to the topic being sent.
COMMENT: A comment left by the sender.
@description:
*/

'subject' => 'Wątek: {TOPICSUBJECT} (Od: {SENDERNAME})',

'body' => 'Drogi {RECPNAME},
Chciałbym abyś sprawdził "{TOPICSUBJECT}" na {FORUMNAME}. Aby go obejrzeć, kliknij na link:

{TOPICLINK}

Odnośnie tego tematu, był dodany również komentarz:
{COMMENT}

Dzięki,

{SENDERNAME}',

),
	
'send_email' => array(

/*
@additional_params: send_email
EMAILSUBJECT: The subject the user wants to email.
EMAILBODY: The body the user wants to email.
SENDERNAME: The name of the member sending the email.
RECPNAME: The name of the person receiving the email.
@description:
*/

'subject' => '{EMAILSUBJECT}',

'body' => '{EMAILBODY}',

),

'report_to_moderator' => array(

/*
@additional_params: report_to_moderator
TOPICSUBJECT: The subject of the reported post.
POSTERNAME: The report post's author's name.
REPORTERNAME: The name of the person reporting the post.
TOPICLINK: The url of the post that is being reported.
REPORTLINK: The url of the moderation center report.
COMMENT: The comment left by the reporter, hopefully to explain why they are reporting the post.
@description: When a user reports a post this email is sent out to moderators and admins of that board.
*/

'subject' => 'Wiadomość zaraportowana : {TOPICSUBJECT} przez {POSTERNAME}',

'body' => 'Następująca wiadomość, "{TOPICSUBJECT}" napisana przez {POSTERNAME} została zaraportowana przez {REPORTERNAME} na forum, które moderujesz:

Temat: {TOPICLINK}
Centrum moderacji: {REPORTLINK}

Raportujący zostawił następujący komentarz:
{COMMENT}

{REGARDS}',

),

'change_password' => array(

/*
@additional_params: change_password
USERNAME: The user name for the member receiving the email.
PASSWORD: The password for the member.
@description:
*/

'subject' => 'Informacja o Zmianie hasła',

'body' => 'Cześć, {USERNAME}!

Ustawienia Twojego konta na {FORUMNAME} zostały zmienione a hasło zostało zresetowane. Poniżej Twoje nowe dane do logowania.

Twoja nazwa użytkownika to: "{USERNAME}" a Twoje hasło to: "{PASSWORD}".

Możesz zmienić te dane w swoim profilu, po zalogowaniu na forum. Możesz też użyć poniższego linka, po zalogowaniu na forum:
{SCRIPTURL}?action=profile

{REGARDS}',

),

'register_activate' => array(

/*
@additional_params: register_activate
REALNAME: The display name for the member receiving the email.
USERNAME: The user name for the member receiving the email.	
PASSWORD: The password for the member.
ACTIVATIONLINK: The url link to reactivate the member's account.
ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
ACTIVATIONCODE: The code needed to reactivate the member's account.
FORGOTPASSWORDLINK: The url to the "forgot password" page.
@description:
*/

'subject' => 'Witamy na {FORUMNAME}',

'body' => 'Dziękujemy za rejestrację na {FORUMNAME}. Twoja nazwa użytkownika to {USERNAME}. Jeśli zapomniałeś hasła, zresetuj je odwiedzając {FORGOTPASSWORDLINK}.

Zanim będziesz mógł się zalogować, najpierw musisz aktywować swoje konto. Aby to zrobić, użyj poniższego linku:

{ACTIVATIONLINK}

Masz problemy z aktywacją? Odwiedź {ACTIVATIONLINKWITHOUTCODE} i wpisz kod aktywacyjny "{ACTIVATIONCODE}".

{REGARDS}',

),

'register_openid_activate' => array(

/*
@additional_params: register_activate
REALNAME: The display name for the member receiving the email.
USERNAME: The user name for the member receiving the email.
OPENID: The openID identity for the member.
ACTIVATIONLINK: The url link to reactivate the member's account.
ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
ACTIVATIONCODE: The code needed to reactivate the member's account.
@description:
*/

'subject' => 'Witamy na {FORUMNAME}',

'body' => 'Dziękujemy za rejestrację na {FORUMNAME}. Twoja nazwa użytkownika to {USERNAME}. Wybrałeś identyfikację za pomocą OpenID:
{OPENID}

Zanim będziesz mógł się zalogować, najpierw musisz aktywować swoje konto. Aby to zrobić, użyj poniższego linku:

{ACTIVATIONLINK}

Masz problemy z aktywacją? Odwiedź {ACTIVATIONLINKWITHOUTCODE} i wpisz kod aktywacyjny "{ACTIVATIONCODE}".

{REGARDS}',

),

'register_coppa' => array(
/*
@additional_params: register_coppa
REALNAME: The display name for the member receiving the email.
USERNAME: The user name for the member receiving the email.
PASSWORD: The password for the member.
COPPALINK: The url link to the coppa form.
FORGOTPASSWORDLINK: The url to the "forgot password" page.
@description:
*/

'subject' => 'Witamy na {FORUMNAME}',

'body' => 'Dziękujemy za rejestrację na {FORUMNAME}. Twoja nazwa użytkownika to {USERNAME}. Jeśli zapomniałeś swojego hasła możesz je zmienić odwiedzając {FORGOTPASSWORDLINK}

Zanim będziesz mógł się zalogować, administrator poprosi Twoich rodziców/opiekunów o zgodę na Twoje uczestnictwo w społeczności forum. Więcej informacji uzyskasz pod tym adresem:

{COPPALINK}

{REGARDS}',

),

'register_openid_coppa' => array(
/*
@additional_params: register_coppa
REALNAME: The display name for the member receiving the email.
USERNAME: The user name for the member receiving the email.
OPENID: The openID identity for the member.
COPPALINK: The url link to the coppa form.
@description:
*/

'subject' => 'Witamy na {FORUMNAME}',

'body' => 'Dziękujemy za rejestrację na {FORUMNAME}. Twoja nazwa użytkownika to {USERNAME}.

Wybrałeś identyfikację za pomocą OpenID:
{OPENID}

Zanim będziesz mógł się zalogować, admin poprosi Twoich rodziców/opiekunów o zgodę na Twoje uczestnictwo w społeczności forum. Więcej informacji uzyskasz pod tym adresem:

{COPPALINK}

{REGARDS}',

),

'register_immediate' => array(
/*
@additional_params: register_immediate
REALNAME: The display name for the member receiving the email.
USERNAME: The user name for the member receiving the email.
PASSWORD: The password for the member.
FORGOTPASSWORDLINK: The url to the "forgot password" page.
@description:
*/

'subject' => 'Witamy na {FORUMNAME}',

'body' => 'Dziękujemy za zarejestrowanie się na {FORUMNAME}. Twoja nazwa użytkownika to {USERNAME}. Jeśli zapomniałeś swojego hasła możesz je zmienić w {FORGOTPASSWORDLINK}.

{REGARDS}',

),

'register_openid_immediate' => array(
/*
@additional_params: register_immediate
REALNAME: The display name for the member receiving the email.
USERNAME: The user name for the member receiving the email.
OPENID: The openID identity for the member.
@description:
*/

'subject' => 'Witamy na {FORUMNAME}',

'body' => 'Dziękujemy za zarejestrowanie się na {FORUMNAME}. Twoja nazwa użytkownika to {USERNAME}.

Wybrałeś identyfikację za pomocą OpenID:
{OPENID}

Po zalogowaniu na forum, możesz zaktualizować swój profil, odwiedzając tę stronę:

{SCRIPTURL}?action=profile

{REGARDS}',

),

'register_pending' => array(

/*
@additional_params: register_pending
REALNAME: The display name for the member receiving the email.
USERNAME: The user name for the member receiving the email.
PASSWORD: The password for the member.
FORGOTPASSWORDLINK: The url to the "forgot password" page.
@description:
*/

'subject' => 'Witamy na {FORUMNAME}',

'body' => 'Twoja prośba o rejestrację na {FORUMNAME} została otrzymana, {REALNAME}. 

Twoja nazwa użytkownika to {USERNAME}. Jeśli zapomniałeś swojego hasła możesz je zmienić w {FORGOTPASSWORDLINK}.

Zanim będziesz mógł się zalogować i korzystać z forum, Twoja prośba musi zostać rozważona i zatwierdzona. Kiedy to się stanie, otrzymasz kolejną wiadomość z tego adresu email.

{REGARDS}',

),

'register_openid_pending' => array(

/*
@additional_params: register_pending
REALNAME: The display name for the member receiving the email.
USERNAME: The user name for the member receiving the email.
OPENID: The openID identity for the member.
@description:
*/

'subject' => 'Witamy na {FORUMNAME}',

'body' => 'Twoja prośba o rejestrację na {FORUMNAME} została otrzymana, {REALNAME}. 

Twoja nazwa użytkownika to {USERNAME}.

Wybrałeś identyfikację za pomocą OpenID:
{OPENID}

Zanim będziesz mógł się zalogować i korzystać z forum, Twoja prośba musi zostać rozważona i zatwierdzona. Kiedy to się stanie, otrzymasz kolejną wiadomość z tego adresu email.

{REGARDS}',


),

'notification_reply' => array(

/*
@additional_params: notification_reply
TOPICSUBJECT:
POSTERNAME:
TOPICLINK:
UNSUBSCRIBELINK:
@description:
*/

'subject' => 'Odpowiedź na wątek: {TOPICSUBJECT}',

'body' => '{POSTERNAME} napisał odpowiedź na wątek, który śledzisz.

Zobacz ją pod tym adresem: {TOPICLINK}

Przestań śledzić ten wątek klikając tutaj: {UNSUBSCRIBELINK}

{REGARDS}',

),

'notification_reply_body' => array(

/*

@additional_params: notification_reply_body
TOPICSUBJECT:
POSTERNAME:
TOPICLINK:
UNSUBSCRIBELINK:
MESSAGE:
@description:
*/

'subject' => 'Odpowiedź na wątek: {TOPICSUBJECT}',

'body' => '{POSTERNAME} napisał odpowiedź w wątku, który śledzisz.

Zobacz ją pod tym adresem: {TOPICLINK}

Przestań śledzić ten wątek klikając tutaj: {UNSUBSCRIBELINK}

Tekst odpowiedzi brzmi:
{MESSAGE}

{REGARDS}',

),

'notification_reply_once' => array(

/*
@additional_params: notification_reply_once
TOPICSUBJECT:
POSTERNAME:
TOPICLINK:
UNSUBSCRIBELINK:
@description:
*/

'subject' => 'Odpowiedź na wątek: {TOPICSUBJECT}',

'body' => '{POSTERNAME} napisał odpowiedź w wątku, który śledzisz.

Zobacz ją pod tym adresem: {TOPICLINK}

Przestań śledzić ten wątek klikając tutaj: {UNSUBSCRIBELINK}

Więcej odpowiedzi może zostać wysłane, ale nie otrzymasz nowych powiadomień emailem, dopóki nie przeczytasz wątku.

{REGARDS}',

),

'notification_reply_body_once' => array(

/*
@additional_params: notification_reply_body_once
TOPICSUBJECT:
POSTERNAME:
TOPICLINK:
UNSUBSCRIBELINK:
MESSAGE:
@description:
*/

'subject' => 'Odpowiedź na wątek: {TOPICSUBJECT}',

'body' => '{POSTERNAME} napisał odpowiedź w wątku, który śledzisz.

Zobacz ją pod tym adresem: {TOPICLINK}

Przestań śledzić ten wątek klikając tutaj: {UNSUBSCRIBELINK}

Tekst odpowiedzi brzmi:
{MESSAGE}

Więcej odpowiedzi może zostać wysłane, ale nie otrzymasz nowych powiadomień emailem, dopóki nie przeczytasz wątku.

{REGARDS}',

),

'notification_sticky' => array(

/*
@additional_params: notification_sticky
@description:
*/

'subject' => 'Wątek: {TOPICSUBJECT}, został przyklejony',

'body' => 'Wątek który śledzisz, został oznaczony jako przyklejony przez {POSTERNAME}.

Obejrzyj wątek pod adresem: {TOPICLINK}

Przestań śledzić ten wątek klikając tutaj: {UNSUBSCRIBELINK}

{REGARDS}',

),

'notification_lock' => array(

/*
@additional_params: notification_lock
@description:
*/

'subject' => 'Wątek: {TOPICSUBJECT}, został zamknięty',

'body' => 'Wątek który śledzisz, został zamknięty przez {POSTERNAME}.

Obejrzyj wątek pod adresem: {TOPICLINK}

Przestań śledzić ten wątek klikając tutaj: {UNSUBSCRIBELINK}

{REGARDS}',

),

'notification_unlock' => array(

/*
@additional_params: notification_unlock
@description:
*/

'subject' => 'Wątek: {TOPICSUBJECT}, został otwarty',

'body' => 'Wątek który śledzisz, został otwarty przez {POSTERNAME}.

Obejrzyj wątek pod adresem: {TOPICLINK}

Przestań śledzić ten wątek klikając tutaj: {UNSUBSCRIBELINK}
{REGARDS}',

),

'notification_remove' => array(

/*
@additional_params: notification_remove
@description:
*/

'subject' => 'Wątek: {TOPICSUBJECT}, został usunięty',

'body' => 'Wątek który śledzisz, został usunięty przez {POSTERNAME}.

{REGARDS}',

),

'notification_move' => array(

/*
@additional_params: notification_move
@description:
*/

'subject' => 'Wątek: {TOPICSUBJECT}, został przesunięty',

'body' => 'Wątek który śledzisz, został przesunięty przez {POSTERNAME}.

Obejrzyj wątek pod adresem: {TOPICLINK}

Przestań śledzić ten wątek klikając tutaj: {UNSUBSCRIBELINK}

{REGARDS}',

),

'notification_merge' => array(

/*
@additional_params: notification_merged
@description:
*/

'subject' => 'Wątek: {TOPICSUBJECT}, został scalony',

'body' => 'Wątek który śledzisz, został scalony z innym wątkiem przez {POSTERNAME}.

Zobacz nowy wątek pod adresem: {TOPICLINK}

Przestań śledzić ten wątek klikając tutaj: {UNSUBSCRIBELINK}

{REGARDS}',

),

'notification_split' => array(

/*
@additional_params: notification_split
@description:
*/

'subject' => 'Wątek: {TOPICSUBJECT} został podzielony',

'body' => 'Wątek który śledzisz, został podzielony na dwa lub więcej wątków, przez {POSTERNAME}.

To co pozostało z wątku, obejrzyj pod adresem: {TOPICLINK}

Przestań śledzić ten wątek klikając tutaj: {UNSUBSCRIBELINK}

{REGARDS}',

),

'admin_notify' => array(

/*
@additional_params: admin_notify
USERNAME:
PROFILELINK:
@description:
*/

'subject' => 'Dołączył nowy użytkownik',

'body' => '{USERNAME} właśnie zarejestrował/ła się na Twoim forum. Kliknij w adres poniżej, aby obejrzeć jego profil.
{PROFILELINK}

{REGARDS}',

),

'admin_notify_approval' => array(

/*
@additional_params: admin_notify_approval
USERNAME:
PROFILELINK:
APPROVALLINK:
@description:
*/

'subject' => 'Dołączył nowy użytkownik',

'body' => '{USERNAME} właśnie zarejestrował/ła się na Twoim forum. Kliknij w adres poniżej, aby obejrzeć jego profil.
{PROFILELINK}

Zanim ten użytkownik będzie mógł korzystać z forum, jego konto musi zostać zatwierdzone.
Kliknij w link poniżej, aby przejść do ekranu zatwierdzenia konta.
{APPROVALLINK}

{REGARDS}',

),

'admin_attachments_full' => array(

/*
@additional_params: admin_attachments_full
REALNAME:
@description:
*/

'subject' => 'PILNE! Folder załączników prawie pełny!',

'body' => '{REALNAME},

Folder załączników na {FORUMNAME} jest prawie pełny. Odwiedź forum aby rozwiązać ten problem.

Kiedy folder załączników osiągnie swój maksymalny rozmiar, użytkownicy nie będą mogli dodawać załączników do postów i ładować nowych awatarów (jeśli ta opcja jest aktywna).

{REGARDS}',

),

'paid_subscription_refund' => array(

/*
@additional_params: paid_subscription_refund
NAME: Subscription title.
REALNAME: Recipients name
REFUNDUSER: Username who took out the subscription.
REFUNDNAME: User's display name who took out the subscription.
DATE: Today's date.
PROFILELINK: Link to members profile.
@description:
*/

'subject' => 'Zwrot płatnej subskrypcji',

'body' => '{REALNAME},

Użytkownik otrzymał zwrot płatnej subskrypcji. Poniżej znajdziesz szczegóły:

Subskrypcja: {NAME}

Użytkownik: {REFUNDNAME} ({REFUNDUSER})

Data: {DATE}

Możesz obejrzeć profil tego użytkownika przez kliknięcie na link poniżej:
{PROFILELINK}

{REGARDS}',

),

'paid_subscription_new' => array(

/*
@additional_params: paid_subscription_new
NAME: Subscription title.
REALNAME: Recipients name
SUBEMAIL: Email address of the user who took out the subscription
SUBUSER: Username who took out the subscription.
SUBNAME: User's display name who took out the subscription.
DATE: Today's date.
PROFILELINK: Link to members profile.
@description:
*/

'subject' => 'Nowa płatna subskrypcja',


'body' => '{REALNAME},

Użytkownik wybrał nową płatną subskrypcję. Poniżej znajdziesz szczegóły:

Subskrypcja: {NAME}

Użytkownik: {SUBNAME} ({SUBUSER})

Email użytkownika: {SUBEMAIL}

Cena: {PRICE}

Data: {DATE}

Aby obejrzeć profil tego użytkownika, odwiedź adres:
{PROFILELINK}

{REGARDS}',

),

'paid_subscription_error' => array(

/*
@additional_params: paid_subscription_error
ERROR: Error message.
REALNAME: Recipients name
@description:
*/

'subject' => 'Pojawił się błąd Płatnej Subskrypcji',

'body' => '{REALNAME},

Następujący błąd pojawił się podczas tworzenia płatnej subskrypcji.
---------------------------------------------------------------
{ERROR}

{REGARDS}',

),
);

/*
	@additional_params: happy_birthday
		REALNAME: The real (display) name of the person receiving the birthday message.
	@description: A message sent to members on their birthday.
*/
$birthdayEmails = array(
	'happy_birthday' => array(
		'subject' => 'Życzenia urodzinowe z {FORUMNAME}.',
		'body' => 'Drogi {REALNAME},

Społeczność {FORUMNAME} pragnie złożyć Ci najlepsze Życzenia Urodzinowe! Niech ten dzień i kolejny rok będą pełne radości i sukcesów. 

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=2676">Thantos</a>',
	),
	'karlbenson1' => array(
		'subject' => 'W dniu Twoich urodzin...',
		'body' => 'Mogliśmy wysłać Ci kartkę urodzinową. Mogliśmy wysłać Ci bukiet kwiatów lub tort.

Ale tego nie zrobiliśmy.

Mogliśmy nawet wysłać Ci jedną z tych automatycznie generowanych wiadomości z życzeniami urodzinowymi, gdzie nawet nie trzeba umieszczać Twojego imienia.

Ale tego nie zrobiliśmy.

Napisaliśmy te Serdeczne Życzenia Urodzinowe dokładnie dla Ciebie! 

Chcielibyśmy życzyć Ci naprawdę wyjątkowych urodzin! 

{REGARDS}

//:: Ta wiadomość została wygenerowana automatycznie :://',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>',
	),
	'nite0859' => array(
		'subject' => 'Wszystkiego Najlepszego z okazji urodzin!',
		'body' => '{REALNAME}, Twoi znajomi na {FORUMNAME} chcieliby zabrać Ci chwilę Twojego czasu i złożyć Ci Życzenia Urodzinowe! Jeśli nie robiłeś tego ostatnio, odwiedź forum, aby inni użytkownicy również mieli okazję złożyć Ci Życzenia! 

Nawet w dniu Twoich urodzin, {REALNAME}, chcielibyśmy abyś pamiętał, że Twoje uczestnictwo w naszej społeczności, jest najlepszą rzeczą jaka nas dotąd spotkała. 

Najlepsze Życzenia,
Załoga {FORUMNAME}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=46625">nite0859</a>',
	),
	'zwaldowski' => array(
		'subject' => 'Życzenia urodzinowe dla {REALNAME}',
		'body' => 'Drogi {REALNAME},

Minął kolejny rok w Twoim życiu!  My, na {FORUMNAME} mamy nadzieję, że był on przepełniony szczęściem i życzymy Ci powodzenia na kolejny! 

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=72038">zwaldowski</a>',
	),
	'geezmo' => array(
		'subject' => '{REALNAME}, Wszystkiego najlepszego z okazji urodzin!',
		'body' => '{REALNAME}, czy wiesz, kto dziś obchodzi urodziny? 

My wiemy... TY! 

Wszystkiego Najlepszego!

Jesteś wszak, o rok starszy, ale żywimy nadzieję, że jesteś bardziej szczęśliwy niż w rok temu! 

{REALNAME}, ciesz się dzisiejszym dniem!

- Od Twojej rodziny z {FORUMNAME}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=48671">geezmo</a>',
	),
	'karlbenson2' => array(
		'subject' => 'Twoje Życzenia Urodzinowe',
		'body' => 'Czy będzie pochmurnie, czy deszczowo, czy jakakolwiek inna aura, życzymy Ci, aby Twoje urodziny były The Best! 
Dużo tortów urodzinowych, zabawy, aha... i opowiedz nam co wyprawiałeś/aś! 

Mamy nadzieję, że ta wiadomość doda Ci otuchy aż do następnego roku, w tym samym miejscu i czasie! 

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>',
	),
);

?>