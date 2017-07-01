<?php
// Version: 2.0; Profile

global $scripturl, $context;

$txt['no_profile_edit'] = 'Nie masz uprawnień do zmian tego profilu.';
$txt['website_title'] = 'Tytuł strony';
$txt['website_url'] = 'Adres strony';
$txt['signature'] = 'Podpis';
$txt['profile_posts'] = 'Wiadomości';
$txt['change_profile'] = 'Zachowaj zmiany';
$txt['delete_user'] = 'Usuń użytkownika';
$txt['current_status'] = 'Obecny status:';
$txt['personal_text'] = 'Tekst osobisty';
$txt['personal_picture'] = 'Awatar';
$txt['no_avatar'] = 'Brak awatara';
$txt['choose_avatar_gallery'] = 'Wybierz awatar z galerii';
$txt['picture_text'] = 'Obrazek/tekst';
$txt['reset_form'] = 'Resetuj formularz';
$txt['preferred_language'] = 'Preferowany język';
$txt['age'] = 'Wiek';
$txt['no_pic'] = '(brak obrazka)';
$txt['latest_posts'] = 'Ostatnie wiadomości: ';
$txt['additional_info'] = 'Dodatkowe informacje';
$txt['avatar_by_url'] = 'Podaj adres do swojego awatara. (np.: <em>http://www.mojastrona.pl/obrazek.gif</em>)';
$txt['my_own_pic'] = 'Podaj adres awatara';
$txt['date_format'] = 'Zmiana tej opcji spowoduje zmianę formatu wyświetlania daty na całym forum.';
$txt['time_format'] = 'Format czasu';
$txt['display_name_desc'] = 'Tę nazwę zobaczą inni użytkownicy.';
$txt['personal_time_offset'] = 'Ilość dodanych lub odjętych godzin, aby twój czas równał się czasowi forum.';
$txt['dob'] = 'Data urodzin';
$txt['dob_month'] = 'Miesiąc (MM)';
$txt['dob_day'] = 'Dzień (DD)';
$txt['dob_year'] = 'Rok (RRRR)';
$txt['password_strength'] = 'Dla zachowania największego bezpieczeństwa, powinieneś użyć co najmniej sześciu znaków z kombinacją liter, cyfr i innych znaków.';
$txt['include_website_url'] = 'Musisz to wypełnić, jeśli dodasz pod spodem adres.';
$txt['complete_url'] = 'Wpisz kompletny adres URL.';
$txt['your_icq'] = 'Twój numer ICQ.';
$txt['your_aim'] = 'Twój nick na AIM.';
$txt['your_yim'] = 'Twój adres Yahoo! Instant Messenger.';
$txt['sig_info'] = 'Podpisy są wyświetlane na dole każdej normalnej i prywatnej wiadomości. W podpisie może być użyty kod BBC, jak i uśmieszki.';
$txt['max_sig_characters'] = 'Maksymalnie: %1$d; znaków, pozostało znaków: ';
$txt['send_member_pm'] = 'Wyślij temu użytkownikowi prywatną wiadomość';
$txt['hidden'] = 'ukryty';
$txt['current_time'] = 'Obecny czas forum';
$txt['digits_only'] = 'Pole \'liczba wiadomości\' może zawierać tylko cyfry.';

$txt['language'] = 'Język';
$txt['avatar_too_big'] = 'Awatar jest zbyt duży, zmniejsz jego wymiary i spróbować ponownie (maksymalnie';
$txt['invalid_registration'] = 'Nieprawidłowa data rejestracji, przykład:';
$txt['msn_email_address'] = 'Adres email MSN Messenger';
$txt['current_password'] = 'Obecne hasło';
// Don't use entities in the below string, except the main ones. (lt, gt, quot.)
$txt['required_security_reasons'] = 'Ze względów bezpieczeństwa Twoje obecne hasło jest wymagane, aby dokonać modyfikacji Twojego konta.';

$txt['timeoffset_autodetect'] = '(wykryj automatycznie)';

$txt['secret_question'] = 'Sekretne pytanie';
$txt['secret_desc'] = 'Aby pomóc w odzyskaniu swojego hasła, skorzystaj z dodatkowego pytania i odpowiedzi które znasz <strong>tylko</strong> Ty.';
$txt['secret_desc2'] = 'Wybierz z uwagą, nie chcesz przecież, żeby ktoś odgadł twoją odpowiedź!';
$txt['secret_answer'] = 'Odpowiedź';
$txt['secret_ask'] = 'Zadaj mi moje pytanie';
$txt['cant_retrieve'] = 'Nie możesz otrzymać swojego hasła ale możesz ustawić nowe. Użyj odnośnika wysłanego do Ciebie mailem. Istnieje również możliwość ustawienia nowego hasła po wpisaniu poprawnej odpowiedzi na (ustawione wcześniej w profilu) sekretne pytanie.';
$txt['incorrect_answer'] = 'Niestety, nie ustawiłeś w swoim profilu prawidłowej kombinacji sekretnego pytania i odpowiedzi. Kliknij na przycisk powrót i użyj domyślnej metody uzyskania nowego hasła.';
$txt['enter_new_password'] = 'Wprowadź odpowiedź na pytanie i nowe hasło, które chcesz używać. Twoje hasło zostanie zmienione na nowe jeśli udzielisz prawidłowej odpowiedzi na swoje pytanie.';
$txt['password_success'] = 'Twoje hasło zostało zmienione. <br />kliknij <a href="' . $scripturl . '?action=login">tutaj</a> aby się zalogować.';
$txt['secret_why_blank'] = 'dlaczego to pole jest puste?';

$txt['authentication_reminder'] = 'Przypomnienie hasła';
$txt['password_reminder_desc'] = 'Jeśli nie pamiętasz szczegółów logowania, nie martw się, możesz je odzyskać. Aby rozpocząć ten proces, prosimy podać swoją nazwę użytkownika lub adres e-mail poniżej.';
$txt['authentication_options'] = 'Wybierz jedną z dwóch opcji poniżej';
$txt['authentication_openid_email'] = 'Wyślij mi przypomnienie mojego identyfikatora OpenID';
$txt['authentication_openid_secret'] = 'Odpowiedz na &quot;sekretne pytanie&quot; aby zobaczyć mój identyfikator OpenID';
$txt['authentication_password_email'] = 'Wyślij mi nowe hasło na adres email.';
$txt['authentication_password_secret'] = 'Pozwól mi ustawić nowe hasło przez odpowiedź na moje &quot;sekretne pytanie&quot;';
$txt['openid_secret_reminder'] = 'Wpisz poniżej swoją odpowiedź na pytanie. Jeśli zrobisz to prawidłowo, zobaczysz swój identyfikator OpenID.';
$txt['reminder_openid_is'] = 'Identyfikator OpenID powiązany z Twoim kontem to:<br />&nbsp;&nbsp;&nbsp;&nbsp;<b>%1$s</b><br /><br />Nie zapomnij o zapisaniu sobie swojego identyfikatora.';
$txt['reminder_continue'] = 'Kontynuuj';

$txt['current_theme'] = 'Obecny styl';
$txt['change'] = '(zmień)';
$txt['theme_preferences'] = 'Ustawienia stylu';
$txt['theme_forum_default'] = 'Domyślny dla forum lub działu';
$txt['theme_forum_default_desc'] = 'To jest styl domyślny, twój styl będzie zmieniał się razem z ustawieniami administratora i działem, który będziesz przeglądał.';

$txt['profileConfirm'] = 'Czy na pewno chcesz usunąć konto tego użytkownika?';

$txt['custom_title'] = 'Własny tytuł';

$txt['lastLoggedIn'] = 'Ostatnio aktywny';

$txt['notify_settings'] = 'Ustawienia powiadomień:';
$txt['notify_save'] = 'Zachowaj ustawienia';
$txt['notify_important_email'] = 'Otrzymuj powiadomienia i ważne informacje przez email.';
$txt['notify_regularity'] = 'Dla wątków i działów dla których zażądałem włączenia powiadomień, powiadamiaj mnie';
$txt['notify_regularity_instant'] = 'Natychmiast';
$txt['notify_regularity_first_only'] = 'Natychmiast, ale tylko dla pierwszej nieprzeczytanej odpowiedzi';
$txt['notify_regularity_daily'] = 'Codziennie';
$txt['notify_regularity_weekly'] = 'Co tydzień';
$txt['auto_notify'] = 'Włącz powiadomienia kiedy wysyłasz nowy wątek lub wiadomość.';
$txt['notify_send_types'] = 'Dla wątków i działów dla których zażądałem włączenia powiadomień, powiadamiaj mnie o';
$txt['notify_send_type_everything'] = 'Odpowiedziach i moderacji';
$txt['notify_send_type_everything_own'] = 'Moderacji, jeśli to ja rozpocząłem wątek';
$txt['notify_send_type_only_replies'] = 'Tylko o odpowiedziach';
$txt['notify_send_type_nothing'] = 'Nie powiadamiaj mnie o niczym! ';
$txt['notify_send_body'] = 'Gdy będziesz wysyłał powiadomienie o odpowiedzi na wątek, wysyłaj treść wiadomości w poczcie elektronicznej (ale proszę nie odpowiadać na tego e-mail\'a.)';

$txt['notifications_topics'] = 'Śledzone wątki';
$txt['notifications_topics_list'] = 'Jesteś powiadamiany o odpowiedziach na następujące tematy';
$txt['notifications_topics_none'] = 'Nie jesteś obecnie powiadamiany o żadnym wątku.';
$txt['notifications_topics_howto'] = 'Aby otrzymywać powiadomienia o danym wątku, kliknij przycisk &quot;powiadamiaj&quot; podczas jego przeglądania.';
$txt['notifications_boards'] = 'Śledzone działy';
$txt['notifications_boards_list'] = 'Jesteś powiadamiany o nowych tematach w następujących działach';
$txt['notifications_boards_none'] = 'Nie jesteś obecnie powiadamiany o żadnym dziale.';
$txt['notifications_boards_howto'] = 'Aby otrzymywać powiadomienia o danym dziale, kliknij przycisk &quot;powiadamiaj&quot; w indeksie wątków tego działu.';
$txt['notifications_update'] = 'Przestań śledzić';

$txt['statPanel_showStats'] = 'Statystyki użytkownika: ';
$txt['statPanel_users_votes'] = 'Liczba oddanych głosów';
$txt['statPanel_users_polls'] = 'Liczba wysłanych ankiet';
$txt['statPanel_total_time_online'] = 'Całkowity czas spędzony online';
$txt['statPanel_noPosts'] = 'Nie ma żadnych wiadomości!';
$txt['statPanel_generalStats'] = 'Statystyki ogólne';
$txt['statPanel_posts'] = 'wiadomości';
$txt['statPanel_topics'] = 'wątków';
$txt['statPanel_total_posts'] = 'Wszystkich wiadomości';
$txt['statPanel_total_topics'] = 'Wszystkich rozpoczętych wątków';
$txt['statPanel_votes'] = 'głosów';
$txt['statPanel_polls'] = 'ankiet';
$txt['statPanel_topBoards'] = 'Najpopularniejsze działy wg wiadomości';
$txt['statPanel_topBoards_posts'] = '%1$d wiadomości z wybranego działu %2$d wiadomości (%3$01.2f%%)';
$txt['statPanel_topBoards_memberposts'] = '%1$d wiadomości użytkownika %2$d (%3$01.2f%%) ';
$txt['statPanel_topBoardsActivity'] = 'Najpopularniejsze działy wg aktywności';
$txt['statPanel_activityTime'] = 'Wysyłanie wiadomości wg czasu';
$txt['statPanel_activityTime_posts'] = '%1$d wiadomości (%2$d%%)';
$txt['statPanel_timeOfDay'] = 'Pora dnia';

$txt['deleteAccount_warning'] = 'Uwaga - te operacje są nieodwracalne!';
$txt['deleteAccount_desc'] = 'Na tej stronie możesz usunąć konto tego użytkownika i wiadomości przez niego wysłane.';
$txt['deleteAccount_member'] = 'Usuń konto tego użytkownika';
$txt['deleteAccount_posts'] = 'Wiadomości użytkownika podlegające usunięciu';
$txt['deleteAccount_none'] = 'Żadne';
$txt['deleteAccount_all_posts'] = 'Wszystkie';
$txt['deleteAccount_topics'] = 'Wątki i wiadomości';
$txt['deleteAccount_confirm'] = 'Czy na pewno chcesz usunąć to konto?';
$txt['deleteAccount_approval'] = 'Zauważ, że moderatorzy forum będą musieli zatwierdzić usunięcie tego konta zanim zostanie skasowane.';

$txt['profile_of_username'] = 'Profil użytkownika %1$s';
$txt['profileInfo'] = 'Informacja o Profilu';
$txt['showPosts'] = 'Pokaż wiadomości';
$txt['showPosts_help'] = 'Ta sekcja pozwala Ci zobaczyć wszystkie wiadomości wysłane przez tego użytkownika. Zwróć uwagę, że możesz widzieć tylko wiadomości wysłane w działach do których masz aktualnie dostęp.';
$txt['showMessages'] = 'Wiadomości';
$txt['showTopics'] = 'Pokaż wątki';
$txt['showAttachments'] = 'Pokaż załączniki';
$txt['statPanel'] = 'Pokaż statystyki';
$txt['editBuddyIgnoreLists'] = 'Lista znajomych/ignorowanych';
$txt['editBuddies'] = 'Edytuj znajomych';
$txt['editIgnoreList'] = 'Edytuj listę ignorowanych';
$txt['trackUser'] = 'Śledź użytkownika';
$txt['trackActivity'] = 'Aktywność';
$txt['trackIP'] = 'Śledź adres IP';

$txt['authentication'] = 'Identyfikacja';
$txt['change_authentication'] = 'W tej sekcji możesz zmienić sposób logowania na na forum. Możesz wybrać identyfikator OpenID lub alternatywnie skorzystać z logowania za pomocą użytkownika i hasła.';

$txt['profileEdit'] = 'Modyfikuj profil';
$txt['account_info'] = 'To są ustawienia dotyczące twojego konta. Strona ta zawiera wszystkie niezbędne informacje identyfikujące cię na forum. Ze względów bezpieczeństwa, będziesz musiał podać swoje obecne hasło aby dokonać zmian w tych informacjach.';
$txt['forumProfile_info'] = 'Tu możesz zmienić informacje dotyczące Ciebie. Będą one publicznie dostępne w ' . $context['forum_name'] . '. Jeśli nie chcesz dzielić się niektórymi danymi, pomiń je - nic tutaj nie jest wymagane.';
$txt['theme'] = 'Opcje wyglądu';
$txt['theme_info'] = 'Tu możesz dostosować wygląd forum do swoich potrzeb.';
$txt['notification'] = 'Powiadomienia';
$txt['notification_info'] = 'SMF może powiadamiać cię o nowych wątkach, wiadomościach i ogłoszeniach. Tutaj możesz zmienić te ustawienia lub nadzorować wątki i działy, które obecnie śledzisz.';
$txt['groupmembership'] = 'Grupy użytkowników';
$txt['groupMembership_info'] = 'W tej sekcji Twojego profilu, możesz zmieniać swoje ustawienia członkostwa w grupach.';
$txt['ignoreboards'] = 'Ignoruj Fora - ustawienia';
$txt['ignoreboards_info'] = 'Ta strona pozwala ignorować poszczególne działy. Kiedy dział jest ignorowany, ikona nowych postów nie będzie się pokazywać na stronie głównej. Nowe wiadomości nie pokażą się wśród wyników wyszukiwania "nieprzeczytanych postów" (przeszukując nie zwróci uwagi na te działy), jednak ignorowane działy dalej będą widoczne na stronie głównej i podczas ich przeglądania pokażą, które tematy mają nowe wiadomości. "Nieprzeczytane odpowiedzi" wciąż pokażą nowe wiadomości w ignorowanych działach.';
$txt['pmprefs'] = 'Prywatne wiadomości';

$txt['profileAction'] = 'Inne czynności';
$txt['deleteAccount'] = 'Usuń to konto';
$txt['profileSendIm'] = 'Wyślij prywatną wiadomość';
$txt['profile_sendpm_short'] = 'Wyślij PW';

$txt['profileBanUser'] = 'Zbanuj użytkownika';

$txt['display_name'] = 'Nazwa wyświetlana';
$txt['enter_ip'] = 'Wprowadź adres IP (lub zakres)';
$txt['errors_by'] = 'Komunikaty błędów użytkownika';
$txt['errors_desc'] = 'Poniżej znajduje się lista wszystkich najnowszych błędów, które napotkał użytkownik.';
$txt['errors_from_ip'] = 'Komunikaty błędów z adresu IP (lub zakresu)';
$txt['errors_from_ip_desc'] = 'Poniżej znajduje się lista wszystkich ostatnich komunikatów o błędach spowodowanych przez ten adres IP (lub zakres).';
$txt['ip_address'] = 'Adres IP';
$txt['ips_in_errors'] = 'Adresy IP użyte w komunikatach błędów';
$txt['ips_in_messages'] = 'Adresy IP użyte w ostatnich wiadomościach';
$txt['members_from_ip'] = 'Użytkownicy adresu IP (lub zakresu)';
$txt['members_in_range'] = 'Użytkownicy mogący znajdować się w tym samym zakresie';
$txt['messages_from_ip'] = 'Wiadomości wysłane z adresu IP (lub zakresu)';
$txt['messages_from_ip_desc'] = 'Poniżej znajduje się lista wszystkich wiadomości wysłanych z tego adresu IP (lub zakresu).';
$txt['most_recent_ip'] = 'Najnowszy adres IP';
$txt['why_two_ip_address'] = 'Dlaczego są tutaj wypisane dwa adresy IP?';
$txt['no_errors_from_ip'] = 'Brak komunikatów błędów z tego adresu IP (lub zakresu)';
$txt['no_errors_from_user'] = 'Brak komunikatów błędów u tego użytkownika';
$txt['no_members_from_ip'] = 'Brak użytkowników z tego adresu IP (lub zakresu)';
$txt['no_messages_from_ip'] = 'Brak wiadomości z tego adresu IP (lub zakresu)';
$txt['none'] = 'Brak';
$txt['own_profile_confirm'] = 'Na pewno chcesz usunąć swoje konto?';
$txt['view_ips_by'] = 'Zobacz adresy IP używane przez';

$txt['avatar_will_upload'] = 'Wyślij awatar';

$txt['activate_changed_email_title'] = 'Adres e-mail zmieniony';
$txt['activate_changed_email_desc'] = 'Dokonałeś zmiany adresu e-mail. Aby zweryfikować nowy adres otrzymasz e-mail. Kliknij w link znajdujący się w liście aby reaktywować konto.';

// Use numeric entities in the below three strings.
$txt['no_reminder_email'] = 'Nie można wysłać emaila z przypomnieniem.';
$txt['send_email'] = 'Wyślij email do';
$txt['to_ask_password'] = 'aby zapytać o hasło';

$txt['user_email'] = 'Nazwa użytkownika/email';

// Use numeric entities in the below two strings.
$txt['reminder_subject'] = 'Nowe hasło na forum ' . $context['forum_name'];
$txt['reminder_mail'] = 'Ten email został wysłany, ponieważ na Twoim koncie użyto funkcji \'przypomnij hasło\'. Aby ustawić nowe hasło kliknij na ten odnośnik';
$txt['reminder_sent'] = 'Na Twój adres email została wysłana wiadomość. Kliknij na zawarty w niej odnośnik aby ustawić nowe hasło.';
$txt['reminder_openid_sent'] = 'Twoja aktualna identyfikacja OpenID została wysłana na Twój adres email.';
$txt['reminder_set_password'] = 'Ustaw hasło';
$txt['reminder_password_set'] = 'Hasło ustawione poprawnie';
$txt['reminder_error'] = '%1$s udzielił/a błędnej odpowiedzi na sekretne pytanie, podczas próby zmiany zapomnianego hasła.';

$txt['registration_not_approved'] = 'To konto nie zostało jeszcze zatwierdzone. Jeśli chcesz zmienić adres email, kliknij';
$txt['registration_not_activated'] = 'To konto nie zostało jeszcze aktywowane. Jeśli chcesz aby ponownie wysłano email aktywacyjny, kliknij';

$txt['primary_membergroup'] = 'Podstawowa grupa użytkowników';
$txt['additional_membergroups'] = 'Dodatkowe grupy użytkowników';
$txt['additional_membergroups_show'] = '[ wyświetl dodatkowe grupy ]';
$txt['no_primary_membergroup'] = '(brak podstawowej grupy)';
$txt['deadmin_confirm'] = 'Czy na pewno chcesz się nieodwołalnie pozbawić rangi administratora?';

$txt['account_activate_method_2'] = 'Konto wymaga reaktywacji po zmianie adresu poczty elektronicznej';
$txt['account_activate_method_3'] = 'Konto nie zostało zatwierdzone';
$txt['account_activate_method_4'] = 'Konto oczekuje na zatwierdzenie do usunięcia';
$txt['account_activate_method_5'] = 'Konto jest w trakcie zatwierdzania kont &quot;poniżej wieku&quot;';
$txt['account_not_activated'] = 'Konto nie jest obecnie aktywne';
$txt['account_activate'] = 'aktywuj';
$txt['account_approve'] = 'zatwierdź';
$txt['user_is_banned'] = 'Użytkownik jest obecnie zbanowany';
$txt['view_ban'] = 'Zobacz';
$txt['user_banned_by_following'] = 'Tego użytkownika dotyczą następujące bany';
$txt['user_cannot_due_to'] = 'Użytkownik nie może %1$s w wyniku bana: &quot;%2$s&quot;';
$txt['ban_type_post'] = 'pisać';
$txt['ban_type_register'] = 'zarejestrować się';
$txt['ban_type_login'] = 'zalogować się';
$txt['ban_type_access'] = 'wejść na forum';

$txt['show_online'] = 'Pokaż innym swój status online';

$txt['return_to_post'] = 'Domyślnie powracaj do wątków po wysłaniu wiadomości.';
$txt['no_new_reply_warning'] = 'Nie ostrzegaj o nowych odpowiedziach w czasie wysyłania wiadomości.';
$txt['posts_apply_ignore_list'] = 'Ukryj wiadomości wysłane przez ignorowanych przeze mnie użytkowników.';
$txt['recent_posts_at_top'] = 'Pokaż najnowsze wiadomości na górze.';
$txt['recent_pms_at_top'] = 'Pokazuj najnowsze prywatne wiadomości na górze.';
$txt['wysiwyg_default'] = 'Domyślnie pokaż edytor WYSIWYG gdy piszesz nową wiadomość.';

$txt['timeformat_default'] = '(Domyślne dla forum)';
$txt['timeformat_easy1'] = 'Miesiąc Dzień, Rok, GG:MM:SS am/pm';
$txt['timeformat_easy2'] = 'Miesiąc Dzień, Rok, GG:MM:SS (24H)';
$txt['timeformat_easy3'] = 'RRRR-MM-DD, GG:MM:SS';
$txt['timeformat_easy4'] = 'DD Miesiąc RRRR, GG:MM:SS';
$txt['timeformat_easy5'] = 'DD-MM-RRRR, GG:MM:SS';

$txt['poster'] = 'Autor';

$txt['board_desc_inside'] = 'Pokazuj opisy działów wewnątrz działów.';
$txt['show_children'] = 'Pokaż działy podrzędne na każdej stronie działu nadrzędnego.';
$txt['use_sidebar_menu'] = 'Jeśli to tylko możliwe użyj bocznych menu zamiast rozwijanych.';
$txt['show_no_avatars'] = 'Nie pokazuj awatarów innych użytkowników.';
$txt['show_no_signatures'] = 'Nie pokazuj podpisów innych użytkowników.';
$txt['show_no_censored'] = 'Pozostaw słowa nieocenzurowane.';
$txt['topics_per_page'] = 'Ilość wątków pokazanych na stronie:';
$txt['messages_per_page'] = 'Ilość wiadomości pokazanych na stronie:';
$txt['per_page_default'] = 'domyślnie dla forum';
$txt['calendar_start_day'] = 'Pierwszy dzień tygodnia w kalendarzu';
$txt['display_quick_reply'] = 'Tryb użycia szybkiej odpowiedzi: ';
$txt['display_quick_reply1'] = 'nie pokazuj';
$txt['display_quick_reply2'] = 'pokazuj, domyślnie ukryta';
$txt['display_quick_reply3'] = 'pokazuj, domyślnie włączona';
$txt['display_quick_mod'] = 'Pokaż szybką moderację w indeksie wiadomości jako ';
$txt['display_quick_mod_none'] = 'nie pokazuj';
$txt['display_quick_mod_check'] = 'pola wyboru';
$txt['display_quick_mod_image'] = 'ikony';

$txt['whois_title'] = 'Szukaj IP na regionalnym serwerze whois';
$txt['whois_afrinic'] = 'AfriNIC (Afryka)';
$txt['whois_apnic'] = 'APNIC (Azja i Pacyfik)';
$txt['whois_arin'] = 'ARIN (Ameryka Pn., część Karaibów, Afryka Pn.)';
$txt['whois_lacnic'] = 'LACNIC (Ameryka Łacińska i Karaiby)';
$txt['whois_ripe'] = 'RIPE (Europa, Środkowy Wschód i części Afryki i Azji)';

$txt['moderator_why_missing'] = 'dlaczego nie ma tu moderatora?';
$txt['username_change'] = 'zmień';
$txt['username_warning'] = 'Aby zmienić nazwę tego użytkownika, forum musi również zresetować jego hasło. Zostanie ono do niego wysłane, wraz z nową nazwą użytkownika.';

$txt['show_member_posts'] = 'Zobacz wiadomości użytkownika';
$txt['show_member_topics'] = 'Zobacz wątki użytkownika';
$txt['show_member_attachments'] = 'Zobacz załączniki użytkownika';
$txt['show_posts_none'] = 'Użytkownik nie napisał jeszcze żadnych wiadomości.';
$txt['show_topics_none'] = 'Nie został jeszcze utworzony żaden wątek.';
$txt['show_attachments_none'] = 'Użytkownik nie dodał jeszcze żadnych załączników.';
$txt['show_attach_filename'] = 'Nazwa pliku';
$txt['show_attach_downloads'] = 'Pobrań';
$txt['show_attach_posted'] = 'Opublikowany';

$txt['showPermissions'] = 'Pokaż zezwolenia';
$txt['showPermissions_status'] = 'Status zezwolenia';
$txt['showPermissions_help'] = 'Ta sekcja pozwala Ci wyświetlić wszystkie zezwolenia dla tego użytkownika (zabronione pozwolenia są <del>wykreślone</del>).';
$txt['showPermissions_given'] = 'Wydane przez';
$txt['showPermissions_denied'] = 'Zabroniony przez';
$txt['showPermissions_permission'] = 'Zezwolenie (nie posiadane zezwolenia są <del>przekreślone</del>)';
$txt['showPermissions_none_general'] = 'Ten użytkownik nie posiada żadnych zezwoleń ogólnych.';
$txt['showPermissions_none_board'] = 'Ten użytkownik nie posiada żadnych zezwoleń dot. konkretnego działu.';
$txt['showPermissions_all'] = 'Jako administrator, ten użytkownik posiada wszystkie możliwe zezwolenia.';
$txt['showPermissions_select'] = 'Zezwolenia dla działu';
$txt['showPermissions_general'] = 'Zezwolenia ogólne';
$txt['showPermissions_global'] = 'Wszystkie działy';
$txt['showPermissions_restricted_boards'] = 'Ograniczenia działów';
$txt['showPermissions_restricted_boards_desc'] = 'Następujące działy nie są dostępne dla tego użytkownika';

$txt['local_time'] = 'Czas lokalny';
$txt['posts_per_day'] = 'na dzień';

$txt['buddy_ignore_desc'] = 'Ta sekcja pozwala na zarządzanie listą znajomych i ignorowanych na tym forum. Dodawanie członków do tych list między innymi pomoże Ci kontrolować napływ maili i prywatnych wiadomości, w zależności od twoich preferencji.';

$txt['buddy_add'] = 'Dodaj do listy znajomych';
$txt['buddy_remove'] = 'Usuń z listy znajomych';
$txt['buddy_add_button'] = 'Dodaj';
$txt['no_buddies'] = 'Twoja lista znajomych jest pusta';

$txt['ignore_add'] = 'Dodaj do listy ignorowanych';
$txt['ignore_remove'] = 'Usuń z listy ignorowanych';
$txt['ignore_add_button'] = 'Dodaj';
$txt['no_ignore'] = 'Twoja lista ignorowanych jest obecnie pusta';

$txt['regular_members'] = 'Zarejestrowani użytkownicy';
$txt['regular_members_desc'] = 'Każdy zarejestrowany użytkownik forum należy do tej grupy.';
$txt['group_membership_msg_free'] = 'Operacja zakończona powodzeniem. Dołączyłeś do grupy.';
$txt['group_membership_msg_request'] = 'Twoja prośba została wysłana ale musi zostać rozpatrzona. Bądź cierpliwy proszę.';
$txt['group_membership_msg_primary'] = 'Twoja podstawowa grupa została zmieniona';
$txt['current_membergroups'] = 'Aktualnie należysz do:';
$txt['available_groups'] = 'Pozostałe dostępne grupy:';
$txt['join_group'] = 'Dołącz do grupy';
$txt['leave_group'] = 'Opuść grupę';
$txt['request_group'] = 'Poproś o członkostwo';
$txt['approval_pending'] = 'Oczekuje na zatwierdzenie';
$txt['make_primary'] = 'Ustaw jako podstawową';

$txt['request_group_membership'] = 'Prośba o członkostwo w grupie';
$txt['request_group_membership_desc'] = 'Zanim będziesz mógł dołączyć do tej grupy, Twoja prośba musi zostać zaakceptowana przez moderatora. Proszę, uzasadnij swoją prośbę o dołączenie do grupy';
$txt['submit_request'] = 'Wyślij';

$txt['profile_updated_own'] = 'Twój profil został pomyślnie zaktualizowany';
$txt['profile_updated_else'] = 'Profil użytkownika %1$s został pomyślnie zaktualizowany';

$txt['profile_error_signature_max_length'] = 'Twój podpis nie może być większy niż %1$d znaków';
$txt['profile_error_signature_max_lines'] = 'Twój podpis nie może być dłuższy niż %1$d linii';
$txt['profile_error_signature_max_image_size'] = 'Obrazy w Twoim podpisie nie mogą być większe niż %1$dx%2$d pikseli';
$txt['profile_error_signature_max_image_width'] = 'Obrazy w Twoim podpisie nie mogą być szersze niż %1$d pikseli';
$txt['profile_error_signature_max_image_height'] = 'Obrazy w Twoim podpisie nie mogą być wyższe niż %1$d pikseli';
$txt['profile_error_signature_max_image_count'] = 'Nie możesz mieć więcej niż %1$d obrazów w swoim podpisie';
$txt['profile_error_signature_max_font_size'] = 'Tekst w Twoim podpisie nie może być większy niż %1$s pikseli';
$txt['profile_error_signature_allow_smileys'] = 'Nie możesz używać emotikon w swojej sygnauturze';
$txt['profile_error_signature_max_smileys'] = 'Nie wolno Ci użyć więcej niż %1$d emotikon w Twoim podpisie';
$txt['profile_error_signature_disabled_bbc'] = 'Następujący tag BBC nie jest dozwolony w Twoim podpisie: %1$s';

$txt['profile_view_warnings'] = 'Pokaż ostrzeżenia';
$txt['profile_issue_warning'] = 'Przyznaj Ostrzeżenie';
$txt['profile_warning_level'] = 'Poziom ostrzeżenia';
$txt['profile_warning_desc'] = 'W tej sekcji możesz ustawić użytkownikowi Poziom Ostrzeżenia i jeśli to konieczne, wysłać pisemne ostrzeżenie. Możesz też śledzić jego historię ostrzeżeń oraz sprawdzić, czym skutkuje dla niego obecny poziom ostrzeżenia.';
$txt['profile_warning_name'] = 'Nazwa Użytkownika';
$txt['profile_warning_impact'] = 'Rezultat';
$txt['profile_warning_reason'] = 'Powód ostrzeżenia';
$txt['profile_warning_reason_desc'] = 'To jest obowiązkowe i zostanie zapisane w logu.';
$txt['profile_warning_effect_none'] = 'Brak.';
$txt['profile_warning_effect_watch'] = 'Użytkownik zostanie dodany do listy obserwowanych użytkowników.';
$txt['profile_warning_effect_own_watched'] = 'Jesteś na liście obserwowanych moderatora.';
$txt['profile_warning_is_watch'] = 'Użytkownik jest obserwowany';
$txt['profile_warning_effect_moderation'] = 'Wszystkie wiadomości użytkownika będą moderowane.';
$txt['profile_warning_effect_own_moderated'] = 'Wszystkie twoje wiadomości będą moderowane.';
$txt['profile_warning_is_moderation'] = 'Wszystkie wiadomości użytkownika są moderowane';
$txt['profile_warning_effect_mute'] = 'Użytkownik nie będzie mógł pisać postów.';
$txt['profile_warning_effect_own_muted'] = 'Nie będziesz w stanie wysyłać wiadomości.';
$txt['profile_warning_is_muted'] = 'Użytkownik nie może pisać postów';
$txt['profile_warning_effect_text'] = 'Poziom >= %1$d: %2$s';
$txt['profile_warning_notify'] = 'Wyślij powiadomienie';
$txt['profile_warning_notify_template'] = 'Wybierz szablon:';
$txt['profile_warning_notify_subject'] = 'Temat powiadomienia';
$txt['profile_warning_notify_body'] = 'Treść wiadomości';
$txt['profile_warning_notify_template_subject'] = 'Otrzymałeś Ostrzeżenie';
// Use numeric entities in below string.
$txt['profile_warning_notify_template_outline'] = '{MEMBER},' . "\n\n" . 'Otrzymałeś ostrzeżenie za %1$s. Proszę, zaniechaj tego i podporządkuj się regułom panującym na forum. W przeciwnym wypadku poczynimy dalsze kroki.' . "\n\n" . '{REGARDS}';
$txt['profile_warning_notify_template_outline_post'] = '{MEMBER},' . "\n\n" . 'Otrzymałeś ostrzeżenie za %1$s w odniesieniu do wiadomości:' . "\n" . '{MESSAGE}.' . "\n\n" . 'Proszę, zaniechaj tego i podporządkuj się regułom panującym na forum. W przeciwnym wypadku poczynimy dalsze kroki.' . "\n\n" . '{REGARDS}';
$txt['profile_warning_notify_for_spamming'] = 'spamowanie';
$txt['profile_warning_notify_title_spamming'] = 'Spamowanie';
$txt['profile_warning_notify_for_offence'] = 'zamieszczanie obraźliwych, nieprzyzwoitych treści';
$txt['profile_warning_notify_title_offence'] = 'Zamieszczanie obraźliwych, nieprzyzwoitych treści';
$txt['profile_warning_notify_for_insulting'] = 'Obrażanie innych użytkowników i/lub administracji';
$txt['profile_warning_notify_title_insulting'] = 'Obrażanie Użytkowników/Administracji';
$txt['profile_warning_issue'] = 'Zatwierdź';
$txt['profile_warning_max'] = '(Max 100)';
$txt['profile_warning_limit_attribute'] = 'Pamiętaj, że nie możesz ustawić poziomu tego użytkownika na więcej niż %1$d%% w odstępie 24 godzin.';
$txt['profile_warning_errors_occured'] = 'Ostrzeżenie nie zostało wysłane z powodu następujących błędów';
$txt['profile_warning_success'] = 'Ostrzeżenie zostało przyznane';
$txt['profile_warning_new_template'] = 'Nowy szablon';

$txt['profile_warning_previous'] = 'Poprzednie ostrzeżenia';
$txt['profile_warning_previous_none'] = 'Ten użytkownik nie otrzymał wcześniej żadnych ostrzeżeń.';
$txt['profile_warning_previous_issued'] = 'Dodane przez';
$txt['profile_warning_previous_time'] = 'Czas';
$txt['profile_warning_previous_level'] = 'Punkty';
$txt['profile_warning_previous_reason'] = 'Powód';
$txt['profile_warning_previous_notice'] = 'Zobacz wiadomość wysłaną użytkownikowi';

$txt['viewwarning'] = 'Pokaż ostrzeżenia';
$txt['profile_viewwarning_for_user'] = 'Ostrzeżenia dla %1$s';
$txt['profile_viewwarning_no_warnings'] = 'Nie przydzielono jeszcze żadnego ostrzeżenia.';
$txt['profile_viewwarning_desc'] = 'Poniżej znajduje się podsumowanie wszystkich ostrzeżeń przydzielonych przez zespół moderujący.';
$txt['profile_viewwarning_previous_warnings'] = 'Poprzednie ostrzeżenia';
$txt['profile_viewwarning_impact'] = 'Rezultat Ostrzeżenia';

$txt['subscriptions'] = 'Subskrypcja płatna';

$txt['pm_settings_desc'] = 'Na tej stronie możesz zmienić różne opcje prywatnych wiadomości - w tym jak są wyświetlane. Możesz również utworzyć listę osób, od których wiadomości będziesz ignorował.';
$txt['email_notify'] = 'Powiadom przez email, kiedy otrzymasz prywatną wiadomość:';
$txt['email_notify_never'] = 'Nigdy';
$txt['email_notify_buddies'] = 'Tylko od znajomych';
$txt['email_notify_always'] = 'Zawsze';

$txt['pm_receive_from'] = 'Odbieraj prywatne wiadomości od:';
$txt['pm_receive_from_everyone'] = 'Wszystkich użytkowników';
$txt['pm_receive_from_ignore'] = 'Wszystkich użytkowników, z wyjątkiem ignorowanych';
$txt['pm_receive_from_admins'] = 'Tylko od administratorów';
$txt['pm_receive_from_buddies'] = 'Tylko od znajomych i administratorów';

$txt['copy_to_outbox'] = 'Domyślnie zachowuj kopię każdej prywatnej wiadomości w wysłanych.';
$txt['popup_messages'] = 'Pokaż wyskakujące okienko gdy otrzymasz prywatną wiadomość.';
$txt['pm_remove_inbox_label'] = 'Usuń etykietę odebranych gdy dodajesz kolejną.';
$txt['pm_display_mode'] = 'Pokazuj prywatne wiadomości';
$txt['pm_display_mode_all'] = 'jednocześnie wszystko';
$txt['pm_display_mode_one'] = 'jednocześnie jedną';
$txt['pm_display_mode_linked'] = 'jako rozmowa';
// Use entities in the below string.
$txt['pm_recommend_enable_outbox'] = 'Aby w pełni korzystać z ustawień zalecamy włączenie opcji &quot;Domyślnie zachowuj kopię każdej prywatnej wiadomości w wysłanych.&quot;\\n\\nZapewni Ci to lepszy widok oraz przepływ całej konwersacji.';

$txt['tracking'] = 'Śledzenie';
$txt['tracking_description'] = 'Ta sekcja pozwala na przeglądanie niektórych działań wykonanych przez profil użytkownika, jak również na śledzenie jego IP.';

$txt['trackEdits'] = 'Edycje profilu';
$txt['trackEdit_deleted_member'] = 'Usunięci użytkownicy';
$txt['trackEdit_no_edits'] = 'Żadne zmiany tego użytkownika nie zostały zarejestrowane.';
$txt['trackEdit_action'] = 'Pole';
$txt['trackEdit_before'] = 'Wartość przed';
$txt['trackEdit_after'] = 'Wartość po';
$txt['trackEdit_applicator'] = 'Zmieniony przez';

$txt['trackEdit_action_real_name'] = 'Nazwa wyświetlana';
$txt['trackEdit_action_usertitle'] = 'Obecny tytuł';
$txt['trackEdit_action_member_name'] = 'Nazwa użytkownika';
$txt['trackEdit_action_email_address'] = 'Adres email';
$txt['trackEdit_action_id_group'] = 'Podstawowa grupa';
$txt['trackEdit_action_additional_groups'] = 'Dodatkowe grupy';

?>