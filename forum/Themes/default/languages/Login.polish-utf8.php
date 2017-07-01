<?php
// Version: 2.0; Login

global $context;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Registration agreement page.
$txt['registration_agreement'] = 'Regulamin rejestracji';
$txt['agreement_agree'] = 'Akceptuję';
$txt['agreement_agree_coppa_above'] = 'Akceptuję i mam powyżej %1$d lat.';
$txt['agreement_agree_coppa_below'] = 'Akceptuję i mam mniej niż %1$d lat.';

// Registration form.
$txt['registration_form'] = 'Formularz rejestracji';
$txt['need_username'] = 'Powinieneś podać nazwę użytkownika.';
$txt['no_password'] = 'Pole hasła jest puste';
$txt['incorrect_password'] = 'Hasło niewłaściwe';
$txt['choose_username'] = 'Wybierz nazwę użytkownika';
$txt['maintain_mode'] = 'Forum chwilowo niedostępne';
$txt['registration_successful'] = 'Rejestracja zakończona pomyślnie';
$txt['now_a_member'] = 'Jesteś teraz członkiem forum.';
// Use numeric entities in the below string.
$txt['your_password'] = 'twoje hasło to';
$txt['valid_email_needed'] = 'Wpisz prawidłowy adres email, %1$s.';
$txt['required_info'] = 'Informacje wymagane';
$txt['identification_by_smf'] = 'Używane do identyfikacji przez SMF. Możesz używać znaków specjalnych po zalogowaniu, zmieniając wyświetlaną nazwę użytkownika w profilu.';
$txt['additional_information'] = 'Informacje dodatkowe';
$txt['warning'] = 'Uwaga!';
$txt['only_members_can_access'] = 'Tylko zarejestrowani użytkownicy mają dostęp do tej sekcji.';
$txt['login_below'] = 'Zaloguj się lub';
$txt['register_an_account'] = 'zarejestruj konto';
$txt['login_with_forum'] = 'na %1$s.';
// Use numeric entities in the below two strings.
$txt['may_change_in_profile'] = 'Możesz je zmienić po zalogowaniu wchodząc do profilu lub odwiedzając tę stronę:';
$txt['your_username_is'] = 'Twoja nazwa użytkownika to: ';

$txt['login_hash_error'] = 'Ustawienia bezpieczeństwa zostały podniesione. Proszę ponownie wpisać hasło.';

$txt['ban_register_prohibited'] = 'Przykro nam, nie możesz zarejestrować się na tym forum';
$txt['under_age_registration_prohibited'] = 'Przykro nam, ale użytkownicy poniżej %1$d nie mają pozwolenia na rejestrację na tym forum.';

$txt['activate_account'] = 'Aktywacja konta';
$txt['activate_success'] = 'Twoje konto zostało aktywowane. Teraz możesz się zalogować.';
$txt['activate_not_completed1'] = 'Twój adres email musi zostać zweryfikowany, zanim będziesz mógł się zalogować.';
$txt['activate_not_completed2'] = 'Potrzebujesz następnego emaila aktywacyjnego?';
$txt['activate_after_registration'] = 'Dziękujemy za rejestrację. Wkrótce otrzymasz email z odnośnikiem potrzebnym do aktywacji konta.';
$txt['invalid_userid'] = 'Użytkownik nie istnieje';
$txt['invalid_activation_code'] = 'Nieprawidłowy kod aktywacyjny';
$txt['invalid_activation_username'] = 'Nazwa użytkownika lub email';
$txt['invalid_activation_new'] = 'Jeśli zarejestrowałeś się ze złym adresem wpisz właściwy adres i twoje hasło tutaj.';
$txt['invalid_activation_new_email'] = 'Nowy adres email';
$txt['invalid_activation_password'] = 'Stare hasło';
$txt['invalid_activation_resend'] = 'Wyślij kod aktywacyjny ponownie';
$txt['invalid_activation_known'] = 'Jeśli już znasz twój kod aktywacyjny, wpisz go tutaj.';
$txt['invalid_activation_retry'] = 'Kod aktywacyjny';
$txt['invalid_activation_submit'] = 'Aktywuj';

$txt['coppa_no_concent'] = 'Administrator wciąż nie otrzymał zgody twojego rodzica bądź opiekuna';
$txt['coppa_need_more_details'] = 'Więcej szczegółów?';

$txt['awaiting_delete_account'] = 'Twoje konto zostało zaznaczone jako do usunięcia! Jeśli chcesz je odzyskać, proszę zaznaczyć "Reaktywuj moje konto" i zaloguj się ponownie.';
$txt['undelete_account'] = 'Reaktywuj moje konto';

// Use numeric entities in the below three strings.
$txt['change_password'] = 'Nowe hasło';
$txt['change_password_login'] = 'Informacje o logowaniu na';
$txt['change_password_new'] = 'zostały zmienione, a twoje hasło zostało zresetowane. Poniżej znajdują się informacje o twoim nowym loginie i haśle.';

$txt['in_maintain_mode'] = 'To forum jest w trybie obsługi.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Proszę przeczytaj i zaakceptuj warunki aby wysłać formularz.';
$txt['register_passwords_differ_js'] = 'Wpisane hasła nie są takie same !';

$txt['approval_after_registration'] = 'Dziękujemy za rejestrację. Administrator musi zatwierdzić Twoją rejestrację zanim będziesz mógł używać swojego konta. Wkrótce otrzymasz email z decyzją administratora.';

$txt['admin_settings_desc'] = 'Możesz tutaj zmienić rozmaite ustawienia dotyczące rejestracji nowych użytkowników.';

$txt['setting_enableOpenID'] = 'Zezwól użytkownikom na rejestrację używając OpenID';

$txt['setting_registration_method'] = 'Metoda rejestracji dla nowych użytkowników';
$txt['setting_registration_disabled'] = 'Rejestracja wyłączona';
$txt['setting_registration_standard'] = 'Natychmiastowa rejestracja';
$txt['setting_registration_activate'] = 'Aktywacja email';
$txt['setting_registration_approval'] = 'Zatwierdzenie użytkownika';
$txt['setting_notify_new_registration'] = 'Powiadom administrację gdy nowy użytkownik się dołącza';
$txt['setting_send_welcomeEmail'] = 'Wysyłaj emaile powitalne nowym użytkownikom';

$txt['setting_coppaAge'] = 'Wiek poniżej którego należy dać ograniczenia związane z rejestracją';
$txt['setting_coppaAge_desc'] = '(Ustaw 0 aby wyłączyć)';
$txt['setting_coppaType'] = 'Co należy zrobić z użytkownikami próbującymi się zarejestrować poniżej wymaganego wieku';
$txt['setting_coppaType_reject'] = 'Odrzuć ich próbę rejestracji';
$txt['setting_coppaType_approval'] = 'Wymaga zatwierdzenia przez rodzica bądź opiekuna';
$txt['setting_coppaPost'] = 'Adres pocztowy na który należy wysyłać formularze zatwierdzające';
$txt['setting_coppaPost_desc'] = 'Ma sens tylko gdy rejestracja jest ograniczona wiekowo';
$txt['setting_coppaFax'] = 'Numer faksu na jaki mają być przesłane formularze zatwierdzające';
$txt['setting_coppaPhone'] = 'Numer kontaktowy dla rodziców w sprawie ograniczeń wiekowych';

$txt['admin_register'] = 'Rejestracja nowego użytkownika';
$txt['admin_register_desc'] = 'Tutaj możesz zarejestrować nowych użytkowników i jeśli chcesz wysłać im szczegóły emailem.';
$txt['admin_register_username'] = 'Nowa nazwa użytkownika';
$txt['admin_register_email'] = 'Adres email';
$txt['admin_register_password'] = 'Hasło';
$txt['admin_register_username_desc'] = 'Nazwa użytkownika dla nowego członka';
$txt['admin_register_email_desc'] = 'Adres email użytkownika<br />(wymagany jeśli zechcesz wysłać szczegóły rejestracji)';
$txt['admin_register_password_desc'] = 'Nowe hasło dla użytkownika';
$txt['admin_register_email_detail'] = 'Wyślij hasło użytkownikowi';
$txt['admin_register_email_detail_desc'] = 'Adres email wymagany jest nawet, gdy nie zaznaczono tej opcji';
$txt['admin_register_email_activate'] = 'Użytkownik musi aktywować konto';
$txt['admin_register_group'] = 'Podstawowa grupa użytkowników';
$txt['admin_register_group_desc'] = 'Podstawowa grupa, do której będzie należał nowy użytkownik';
$txt['admin_register_group_none'] = '(brak podstawowej grupy użytkowników)';
$txt['admin_register_done'] = 'Użytkownik %1$s został zarejestrowany!';

$txt['coppa_title'] = 'Forum ograniczone wiekowo';
$txt['coppa_after_registration'] = 'Dziękujemy za rejestrację w ' . $context['forum_name_html_safe'] . '.<br /><br />Ponieważ nie masz jeszcze {MINIMUM_AGE} lat, prawnym wymogiem jest otrzymanie zgody twojego rodzica bądź opiekuna zanim będziesz mógł użyć swojego konta. Aby ją zdobyć proszę wydrukować poniższy formularz:';
$txt['coppa_form_link_popup'] = 'Pokaż formularz w nowym oknie';
$txt['coppa_form_link_download'] = 'Ściągnij formularz jako plik tekstowy';
$txt['coppa_send_to_one_option'] = 'Potem poproś swojego rodzica bądź opiekuna aby wysłał wypełniony formularz na adres:';
$txt['coppa_send_to_two_options'] = 'Potem poproś swojego rodzica bądź opiekuna aby wysłał wypełniony formularz:';
$txt['coppa_send_by_post'] = 'Wyślij na następujący adres:';
$txt['coppa_send_by_fax'] = 'Prześlij fax na następujący numer:';
$txt['coppa_send_by_phone'] = 'Alternatywnie możesz skontaktować się poprzez numer telefonu {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Formularz dotyczący zgody na rejestrację w ' . $context['forum_name_html_safe'];
$txt['coppa_form_address'] = 'Adres';
$txt['coppa_form_date'] = 'Data';
$txt['coppa_form_body'] = 'Ja, {PARENT_NAME},<br /><br />Daję pozwolenie {CHILD_NAME} (imię i nazwisko dziecka) aby stał się pełnym użytkownikiem forum: ' . $context['forum_name_html_safe'] . ', z nazwą użytkownika: {USER_NAME}.<br /><br />Rozumiem, że informacje osobiste wpisane przez {USER_NAME} mogą być widoczne dla innych jego użytkowników.<br /><br />Podpisano:<br />{PARENT_NAME} (Rodzic/Opiekun).';

$txt['visual_verification_sound_again'] = 'Odtwórz';
$txt['visual_verification_sound_close'] = 'Zamknij okno';
$txt['visual_verification_sound_direct'] = 'Masz problem z odsłuchaniem? Spróbuj pobrać plik bezpośrednio.';

// Use numeric entities in the below.
$txt['registration_username_available'] = 'Nazwa użytkownika jest dostępna';
$txt['registration_username_unavailable'] = 'Nazwa użytkownika jest niedostępna';
$txt['registration_username_check'] = 'Sprawdź czy nazwa użytkownika jest dostępna';
$txt['registration_password_short'] = 'Hasło jest za krótkie';
$txt['registration_password_reserved'] = 'Hasło zawiera twoją nazwę użytkownika/email';
$txt['registration_password_numbercase'] = 'Hasło musi zawierać wielkie i małe litery oraz cyfry';
$txt['registration_password_no_match'] = 'Hasła nie są takie same';
$txt['registration_password_valid'] = 'Hasło jest poprawne';

$txt['registration_errors_occurred'] = 'Następujące błędy zostały wykryte podczas rejestracji. Popraw je aby kontynuować:';

$txt['authenticate_label'] = 'Używając bezpiecznego połączenia';
$txt['authenticate_password'] = 'Hasło';
$txt['authenticate_openid'] = 'OpenID';
$txt['authenticate_openid_url'] = 'URL uwierzytelnienia OpenID';

?>