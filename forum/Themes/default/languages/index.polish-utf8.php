<?php
// Version: 2.0.10; Index

global $forum_copyright, $forum_version, $webmaster_email, $scripturl, $context, $boardurl;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'pl_PL.utf8';
$txt['lang_dictionary'] = 'pl';
$txt['lang_spelling'] = '';

// Ensure you remember to use uppercase for character set strings.
$txt['lang_character_set'] = 'UTF-8';
// Character set and right to left?
$txt['lang_rtl'] = false;
// Capitalize day and month names?
$txt['lang_capitalize_dates'] = true;

$txt['days'] = array('Niedziela', 'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota');
$txt['days_short'] = array('Nd', 'Pn', 'Wt', 'Śr', 'Cz', 'Pt', 'So');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj', 'Czerwiec', 'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień');
$txt['months_titles'] = array(1 => 'Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj', 'Czerwiec', 'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień');
$txt['months_short'] = array(1 => 'Sty', 'Lut', 'Mar', 'Kwi', 'Maj', 'Cze', 'Lip', 'Sie', 'Wrz', 'Paź', 'Lis', 'Gru');

$txt['time_am'] = 'am';
$txt['time_pm'] = 'pm';

$txt['newmessages0'] = 'nowa';
$txt['newmessages1'] = 'nowych';
$txt['newmessages3'] = 'Nowych';
$txt['newmessages4'] = ',';

$txt['admin'] = 'Administracja';
$txt['moderate'] = 'Moderuj';

$txt['save'] = 'Zapisz';

$txt['modify'] = 'Modyfikuj';
$txt['forum_index'] = '%1$s - Indeks';
$txt['members'] = 'użytkowników';
$txt['board_name'] = 'Nazwa działu';
$txt['posts'] = 'Wiadomości';

$txt['member_postcount'] = 'Wiadomości';
$txt['no_subject'] = '(Bez tematu)';
$txt['view_profile'] = 'Zobacz profil';
$txt['guest_title'] = 'Gość';
$txt['author'] = 'Autor';
$txt['on'] = 'dnia';
$txt['remove'] = 'Usuń';
$txt['start_new_topic'] = 'Rozpocznij nowy wątek';

$txt['login'] = 'Zaloguj się';
// Use numeric entities in the below string.
$txt['username'] = 'Nazwa użytkownika';
$txt['password'] = 'Hasło';

$txt['username_no_exist'] = 'Nazwa użytkownika nie istnieje.';
$txt['no_user_with_email'] = 'Brak użytkowników powiązanych z tym adresem email.';

$txt['board_moderator'] = 'Moderator działu';
$txt['remove_topic'] = 'Usuń wątek';
$txt['topics'] = 'wątkach,';
$txt['modify_msg'] = 'Modyfikuj wiadomość';
$txt['name'] = 'Nazwa';
$txt['email'] = 'Email';
$txt['subject'] = 'Temat';
$txt['message'] = 'Wiadomość';
$txt['redirects'] = 'Przekierowania';
$txt['quick_modify'] = 'Szybka edycja';

$txt['choose_pass'] = 'Wybierz hasło';
$txt['verify_pass'] = 'Potwierdź hasło';
$txt['position'] = 'Pozycja';

$txt['profile_of'] = 'Zobacz profil';
$txt['total'] = 'W sumie';
$txt['posts_made'] = 'wiadomości';
$txt['website'] = 'Strona WWW';
$txt['register'] = 'Rejestracja';
$txt['warning_status'] = 'Status ostrzeżenia';
$txt['user_warn_watch'] = 'Użytkownik jest na liście obserwowanych';
$txt['user_warn_moderate'] = 'Wiadomość użytkownika dołączyła do kolejki oczekujących na zatwierdzenie';
$txt['user_warn_mute'] = 'Użytkownik jest zbanowany i nie może wysyłać wiadomości';
$txt['warn_watch'] = 'Obserwowany';
$txt['warn_moderate'] = 'Moderowany';
$txt['warn_mute'] = 'Wyciszony';

$txt['message_index'] = 'Indeks wiadomości';
$txt['news'] = 'Aktualności';
$txt['home'] = 'Strona główna';

$txt['lock_unlock'] = 'Zamknij/Otwórz wątek';
$txt['post'] = 'Wyślij wiadomość';
$txt['error_occured'] = 'Wystąpił błąd!';
$txt['at'] = 'w';
$txt['logout'] = 'Wyloguj się';
$txt['started_by'] = 'Zaczęty przez';
$txt['replies'] = 'Odpowiedzi';
$txt['last_post'] = 'Ostatnia wiadomość';
$txt['admin_login'] = 'Logowanie do administracji';
// Use numeric entities in the below string.
$txt['topic'] = 'Wątek';
$txt['help'] = 'Pomoc';
$txt['notify'] = 'Powiadamiaj';
$txt['unnotify'] = 'Przestań śledzić';
$txt['notify_request'] = 'Czy chcesz otrzymywać powiadomienia, kiedy ktoś odpowie na ten wątek?';
// Use numeric entities in the below string.
$txt['regards_team'] = 'Pozdrowienia, Załoga' . "\n" . $context['forum_name'] .'.';
$txt['notify_replies'] = 'Powiadamiaj o odpowiedziach';
$txt['move_topic'] = 'Przesuń wątek';
$txt['move_to'] = 'Przesuń do';
$txt['pages'] = 'Strony';
$txt['users_active'] = 'Użytkownicy aktywni w ciągu ostatnich %s minut';
$txt['personal_messages'] = 'Prywatne Wiadomości';
$txt['reply_quote'] = 'Odpowiedz cytując';
$txt['reply'] = 'Odpowiedz';
$txt['reply_noun'] = 'Odpowiedź';
$txt['approve'] = 'Zatwierdź';
$txt['approve_all'] = 'zatwierdź wszystko';
$txt['awaiting_approval'] = 'Oczekujące na zatwierdzenie';
$txt['attach_awaiting_approve'] = 'Załączniki oczekujące na zatwierdzenie';
$txt['post_awaiting_approval'] = 'Uwaga: Ta wiadomość oczekuje na zatwierdzenie przez moderatora.';
$txt['there_are_unapproved_topics'] = 'Jest %1$s wątków i %2$s wiadomości oczekujących na zatwierdzenie w tym forum. Kliknij <a href="%3$s">tutaj</a> aby wyświetlić wszystkie.';

$txt['msg_alert_none'] = 'Brak wiadomości...';
$txt['msg_alert_you_have'] = 'masz';
$txt['msg_alert_messages'] = 'wiadomości';
$txt['remove_message'] = 'Usunąć tą wiadomość';

$txt['online_users'] = 'Użytkownicy online';
$txt['personal_message'] = 'Prywatne Wiadomości';
$txt['jump_to'] = 'Skocz do';
$txt['go'] = 'Idź';
$txt['are_sure_remove_topic'] = 'Na pewno chcesz usunąć ten wątek?';
$txt['yes'] = 'Tak';
$txt['no'] = 'Nie';

$txt['search_end_results'] = 'Koniec wyników';
$txt['search_on'] = 'w';

$txt['search'] = 'Szukaj';
$txt['all'] = 'Wszystkie';

$txt['back'] = 'Wróć';
$txt['password_reminder'] = 'Przypomnienie hasła';
$txt['topic_started'] = 'Wątek zaczęty przez';
$txt['title'] = 'Tytuł';
$txt['post_by'] = 'Wiadomość wysłana przez';
$txt['memberlist_searchable'] = 'Lista zarejestrowanych użytkowników.';
$txt['welcome_member'] = 'Witamy';
$txt['admin_center'] = 'Centrum administracji';
$txt['last_edit'] = 'Ostatnia zmiana';
$txt['notify_deactivate'] = 'Czy chcesz wyłączyć powiadamianie o tym wątku?';

$txt['recent_posts'] = 'Ostatnie wiadomości';

$txt['location'] = 'Miejsce pobytu';
$txt['gender'] = 'Płeć';
$txt['date_registered'] = 'Data rejestracji';

$txt['recent_view'] = 'Zobacz ostatnio wysłane wiadomości';
$txt['recent_updated'] = 'jest najbardziej aktualnym wątkiem';

$txt['male'] = 'Mężczyzna';
$txt['female'] = 'Kobieta';

$txt['error_invalid_characters_username'] = 'Nieprawidłowy znak w nazwie użytkownika.';

$txt['welcome_guest'] = 'Witamy, <strong>%1$s</strong>. <a href="' . $scripturl . '?action=login">Zaloguj się</a> lub <a href="' . $scripturl . '?action=register">zarejestruj</a>.';
$txt['login_or_register'] = '<a href="' . $scripturl . '?action=login">Zaloguj się</a> lub <a href="' . $scripturl . '?action=register">zarejestruj</a>.';
$txt['welcome_guest_activate'] = 'Czy dotarł do Ciebie <a href="' . $scripturl . '?action=activate">email aktywacyjny?</a>';
$txt['hello_member'] = 'Hej,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Witamy,';
$txt['welmsg_hey'] = 'Hej,';
$txt['welmsg_welcome'] = 'Witamy,';
$txt['welmsg_please'] = 'Proszę';
$txt['select_destination'] = 'Wybierz cel';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['posted_by'] = 'Wysłany przez';

$txt['icon_smiley'] = 'Uśmiech';
$txt['icon_angry'] = 'Złość';
$txt['icon_cheesy'] = 'Chichot';
$txt['icon_laugh'] = 'Śmiech';
$txt['icon_sad'] = 'Smutny';
$txt['icon_wink'] = 'Mrugnięcie';
$txt['icon_grin'] = 'Duży uśmiech';
$txt['icon_shocked'] = 'Szok';
$txt['icon_cool'] = 'Spoko';
$txt['icon_huh'] = 'Co?';
$txt['icon_rolleyes'] = 'Z politowaniem';
$txt['icon_tongue'] = 'Język';
$txt['icon_embarrassed'] = 'Zawstydzony';
$txt['icon_lips'] = 'Buzia na kłódkę';
$txt['icon_undecided'] = 'Niezdecydowany';
$txt['icon_kiss'] = 'Buziak';
$txt['icon_cry'] = 'Płacz';

$txt['moderator'] = 'Moderator';
$txt['moderators'] = 'Moderatorzy';

$txt['mark_board_read'] = 'Zaznacz wątki w tym dziale jako przeczytane';
$txt['views'] = 'Wyświetleń';
$txt['new'] = 'Nowy';

$txt['view_all_members'] = 'Zobacz wszystkich użytkowników';
$txt['view'] = 'Zobacz';

$txt['viewing_members'] = 'Przeglądanie użytkowników %1$s do %2$s';
$txt['of_total_members'] = 'z %1$s wszystkich użytkowników';

$txt['forgot_your_password'] = 'Zapomniałeś hasła?';

$txt['date'] = 'Data';
// Use numeric entities in the below string.
$txt['from'] = 'Od';
$txt['check_new_messages'] = 'Sprawdź czy nie ma nowych wiadomości';
$txt['to'] = 'Do';

$txt['board_topics'] = 'Wątków';
$txt['members_title'] = 'Użytkownicy';
$txt['members_list'] = 'Lista użytkowników';
$txt['new_posts'] = 'Nowe wiadomości';
$txt['old_posts'] = 'Brak nowych wiadomości';
$txt['redirect_board'] = 'Przekieruj forum';

$txt['sendtopic_send'] = 'Wyślij';
$txt['report_sent'] = 'Twój raport został wysłany pomyślnie.';

$txt['time_offset'] = 'Przesunięcie czasu';
$txt['or'] = 'lub';

$txt['no_matches'] = 'Nic nie znaleziono';

$txt['notification'] = 'Powiadomienie';

$txt['your_ban'] = 'Przepraszamy %1$s, zostałeś zbanowany na tym forum!';
$txt['your_ban_expires'] = 'Twój ban wygaśnie za %1$s.';
$txt['your_ban_expires_never'] = 'Twój ban nie wygaśnie.';
$txt['ban_continue_browse'] = 'Możesz kontynuować przeglądanie forum jako gość.';

$txt['mark_as_read'] = 'Zaznacz wątki jako przeczytane';

$txt['hot_topics'] = 'Gorący wątek (Więcej niż %s odpowiedzi)';
$txt['very_hot_topics'] = 'Bardzo gorący wątek (Więcej niż %s odpowiedzi)';
$txt['locked_topic'] = 'Zamknięty wątek';
$txt['normal_topic'] = 'Normalny wątek';
$txt['participation_caption'] = 'Wątek w którym uczestniczyłeś';

$txt['go_caps'] = 'IDŹ';

$txt['print'] = 'Drukuj';
$txt['profile'] = 'Profil';
$txt['topic_summary'] = 'Podgląd wątku';
$txt['not_applicable'] = 'brak';
$txt['message_lowercase'] = 'wiadomość';
$txt['name_in_use'] = 'Ta nazwa jest już używana przez innego użytkownika.';

$txt['total_members'] = 'Użytkowników w sumie';
$txt['total_posts'] = 'Wiadomości w sumie';
$txt['total_topics'] = 'Wątków w sumie';

$txt['mins_logged_in'] = 'Czas zalogowania (w minutach)';

$txt['preview'] = 'Podgląd';
$txt['always_logged_in'] = 'Bądź zawsze zalogowany';

$txt['logged'] = 'Zapisane';
// Use numeric entities in the below string.
$txt['ip'] = 'IP';

$txt['www'] = 'WWW';

$txt['by'] = 'wysłana przez';

$txt['hours'] = 'godzin';
$txt['days_word'] = 'dni';

$txt['newest_member'] = ', nasz najnowszy użytkownik.';

$txt['search_for'] = 'Szukaj';

$txt['aim'] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Czesc.+Jestes+tam?';
$txt['aim_title'] = 'Błyskawiczny komunikator AOL';
$txt['icq'] = 'ICQ';
$txt['icq_title'] = 'Komunikator ICQ';
$txt['msn'] = 'MSN';
$txt['msn_title'] = 'Komunikator MSN';
$txt['yim'] = 'YIM';
$txt['yim_title'] = 'Błyskawiczny komunikator Yahoo';

$txt['maintain_mode_on'] = 'Pamiętaj, forum jest tymczasowo zamknięte.';

$txt['read'] = 'Przeczytany';
$txt['times'] = 'razy';

$txt['forum_stats'] = 'Statystyki forum';
$txt['latest_member'] = 'Najnowszy użytkownik';
$txt['total_cats'] = 'Kategorii w sumie';
$txt['latest_post'] = 'Ostatnio wysłane';

$txt['you_have'] = 'Masz';
$txt['click'] = 'kliknij';
$txt['here'] = 'tutaj';
$txt['to_view'] = 'aby je zobaczyć.';

$txt['total_boards'] = 'Działów w sumie';

$txt['print_page'] = 'Drukuj stronę';

$txt['valid_email'] = 'Podaj prawidłowy adres email.';

$txt['geek'] = 'Jestem kujonem!';
$txt['info_center_title'] = '%1$s - Centrum informacji';

$txt['send_topic'] = 'Wyślij ten wątek';

$txt['sendtopic_title'] = 'Wyślij wątek &quot;%1$s&quot; do znajomego.';
$txt['sendtopic_sender_name'] = 'Twoje imię';
$txt['sendtopic_sender_email'] = 'Twój adres email';
$txt['sendtopic_receiver_name'] = 'Imię odbiorcy';
$txt['sendtopic_receiver_email'] = 'Adres email odbiorcy';
$txt['sendtopic_comment'] = 'Dodaj komentarz';

$txt['allow_user_email'] = 'Zezwól użytkownikom na wysyłanie emaili';

$txt['check_all'] = 'Zaznacz wszystko';

// Use numeric entities in the below string.
$txt['database_error'] = 'Błąd bazy danych';
$txt['try_again'] = 'Spróbuj ponownie. Jeśli powrócisz do tego komunikatu, zgłoś błąd administratorowi.';
$txt['file'] = 'Plik';
$txt['line'] = 'Linia';
// Use numeric entities in the below string.
$txt['tried_to_repair'] = 'SMF wykryło i spróbowało automatycznie naprawić błąd w bazie danych. Jeśli nadal będziesz napotykał problemy, lub otrzymywał te listy, skontaktuj się z właścicielem serwera.';
$txt['database_error_versions'] = '<strong>Uwaga:</strong> Wygląda na to, że twoja baza danych wymaga uaktualnienia. Pliki forum mają obecnie wersję %1$s, podczas gdy baza danych jest w wersji %2$s. Powinieneś uruchomić najnowszą wersję upgrade.php.';
$txt['template_parse_error'] = 'Błąd parsowania stylu!';
$txt['template_parse_error_message'] = 'Wygląda na to, że coś poszło nie tak w systemie stylów. Ten problem powinien być tylko tymczasowy, spróbuj później. Jeśli nadal będzie się pojawiał ten komunikat, skontaktuj się z administratorem.<br /><br />Możesz również spróbować <a href="javascript:location.reload();">odświeżyć tę stronę</a>.';
$txt['template_parse_error_details'] = 'Wystąpił problem z załadowaniem pliku stylu lub języka <tt><strong>%1$s</strong></tt> Sprawdź składnię i spróbuj ponownie - pamiętaj, pojedyncze cudzysłowy (<tt>\'</tt>) często muszą być poprzedzone ukośnikiem (<tt>\\</tt>).  Aby zobaczyć bardziej szczegółową informację o błędzie z PHP, spróbuj <a href="' . $boardurl . '%1$s">połączyć się z plikiem bezpośrednio</a>.<br /><br />Możesz również <a href="javascript:location.reload();">odświeżyć tę stronę</a> lub <a href="' . $scripturl . '?theme=1">użyć domyślnego stylu</a>.';

$txt['today'] = '<strong>Dzisiaj</strong> o ';
$txt['yesterday'] = '<strong>Wczoraj</strong> o ';
$txt['new_poll'] = 'Nowa ankieta';
$txt['poll_question'] = 'Pytanie';
$txt['poll_vote'] = 'Zagłosuj';
$txt['poll_total_voters'] = 'Głosów w sumie';
$txt['shortcuts'] = 'Skróty: naciśnij alt+s aby wysłać wiadomość, alt+p aby ją podejrzeć';
$txt['shortcuts_firefox'] = 'Skróty: naciśnij shift+alt+s aby wysłać wiadomość, shift+alt+p aby ją podejrzeć';
$txt['poll_results'] = 'Zobacz wyniki';
$txt['poll_lock'] = 'Zamknij głosowanie';
$txt['poll_unlock'] = 'Otwórz głosowanie';
$txt['poll_edit'] = 'Modyfikuj ankietę';
$txt['poll'] = 'Ankieta';
$txt['one_day'] = '1 Dzień';
$txt['one_week'] = '1 Tydzień';
$txt['one_month'] = '1 Miesiąc';
$txt['forever'] = 'Zawsze';
$txt['quick_login_dec'] = 'Zaloguj się podając nazwę użytkownika, hasło i długość sesji';
$txt['one_hour'] = '1 Godzina';
$txt['moved'] = 'PRZENIESIONY';
$txt['moved_why'] = 'Wprowadź krótki opis, tłumaczący<br />powód przeniesienia wątku.';
$txt['board'] = 'Dział';
$txt['in'] = 'w';
$txt['sticky_topic'] = 'Wątek przyklejony';

$txt['delete'] = 'Usuń';

$txt['your_pms'] = 'Twoje prywatne wiadomości';

$txt['kilobyte'] = 'kB';

$txt['more_stats'] = '[Więcej statystyk]';

// Use numeric entities in the below three strings.
$txt['code'] = 'Kod';
$txt['code_select'] = '[Zaznacz]';
$txt['quote_from'] = 'Cytat';
$txt['quote'] = 'Cytuj';

$txt['merge_to_topic_id'] = 'ID docelowego wątku';
$txt['split'] = 'Podziel wątek';
$txt['merge'] = 'Scal wątki';
$txt['subject_new_topic'] = 'Temat nowego wątku';
$txt['split_this_post'] = 'Wydziel tylko tę wiadomość.';
$txt['split_after_and_this_post'] = 'Wydziel tę wiadomość i wszystkie nowsze od niej.';
$txt['select_split_posts'] = 'Wybierz wiadomości do wydzielenia.';
$txt['new_topic'] = 'Nowy wątek';
$txt['split_successful'] = 'Wątek pomyślnie został podzielony na dwa wątki.';
$txt['origin_topic'] = 'Wątek oryginalny';
$txt['please_select_split'] = 'Wybierz, które wiadomości chcesz wydzielić.';
$txt['merge_successful'] = 'Wątki zostały scalone.';
$txt['new_merged_topic'] = 'Nowo scalony wątek';
$txt['topic_to_merge'] = 'Wątek do scalenia';
$txt['target_board'] = 'Dział docelowy';
$txt['target_topic'] = 'Wątek docelowy';
$txt['merge_confirm'] = 'Na pewno chcesz scalić';
$txt['with'] = 'i';
$txt['merge_desc'] = 'Ta funkcja scali wiadomości z dwóch wątków w jeden. Wiadomości będą posortowane według daty wysłania. Najwcześniej wysłana wiadomość będzie pierwszą wiadomością wątku.';

$txt['set_sticky'] = 'Przyklej wątek';
$txt['set_nonsticky'] = 'Odklej wątek';
$txt['set_lock'] = 'Zamknij wątek';
$txt['set_unlock'] = 'Otwórz wątek';

$txt['search_advanced'] = 'Szukanie zaawansowane';

$txt['security_risk'] = 'POWAŻNE RYZYKO BEZPIECZEŃSTWA:';
$txt['not_removed'] = 'Nie usunąłeś ';
$txt['not_removed_extra'] = '%1$s jest kopią %2$s która nie została wygenerowana przez SMF. Można uzyskać do niej bezpośredni dostęp, żeby uzyskać nieautoryzowany dostęp do forum. Powinna natychmiast zostać usunięta.';

$txt['cache_writable_head'] = 'Alarm wydajności';
$txt['cache_writable'] = 'Nie można zapisywać w katalogu cache - wpływa to niekorzystnie na działanie Twojego forum.';

$txt['page_created'] = 'Strona wygenerowana w ';
$txt['seconds_with'] = ' sekund z ';
$txt['queries'] = ' zapytaniami.';

$txt['report_to_mod_func'] = 'Użyj tej funkcji aby poinformować moderatorów i administratorów forum o wiadomości łamiącej zasady forum.<br /><em>Twój adres email zostanie odkryty przed moderatorami, jeżeli jej użyjesz.</em>';

$txt['online'] = 'Online';
$txt['offline'] = 'Offline';
$txt['pm_online'] = 'Prywatna wiadomość (Online)';
$txt['pm_offline'] = 'Prywatna wiadomość (Offline)';
$txt['status'] = 'Status';

$txt['go_up'] = 'Do góry';
$txt['go_down'] = 'Do dołu';

$forum_copyright = '<a href="' . $scripturl . '?action=credits" title="Simple Machines Forum" target="_blank" class="new_win">%1$s</a> |
<a href="http://www.simplemachines.org/about/smf/license.php" title="Licencja" target="_blank" class="new_win">SMF &copy; 2015</a>, <a href="http://www.simplemachines.org" title="Simple Machines" target="_blank" class="new_win">Simple Machines</a>';

$txt['birthdays'] = 'Urodziny:';
$txt['events'] = 'Wydarzenia:';
$txt['birthdays_upcoming'] = 'Nadchodzące urodziny:';
$txt['events_upcoming'] = 'Nadchodzące wydarzenia:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar_prompt'] = '';
$txt['calendar_month'] = 'Miesiąc:';
$txt['calendar_year'] = 'Rok:';
$txt['calendar_day'] = 'Dzień:';
$txt['calendar_event_title'] = 'Nazwa wydarzenia:';
$txt['calendar_event_options'] = 'Opcje wydarzenia';
$txt['calendar_post_in'] = 'Dodaj w:';
$txt['calendar_edit'] = 'Modyfikuj wydarzenie';
$txt['event_delete_confirm'] = 'Usunąć to wydarzenie?';
$txt['event_delete'] = 'Usuń wydarzenie';
$txt['calendar_post_event'] = 'Dodaj wydarzenie';
$txt['calendar'] = 'Kalendarz';
$txt['calendar_link'] = 'Odnośnik do kalendarza';
$txt['calendar_upcoming'] = 'Nadchodzące wydarzenia';
$txt['calendar_today'] = 'Kalendarz na dziś';
$txt['calendar_week'] = 'Tydzień';
$txt['calendar_week_title'] = 'Tydzień %1$d z %2$d ';
$txt['calendar_numb_days'] = 'Liczba dni:';
$txt['calendar_how_edit'] = 'jak modyfikować wydarzenia?';
$txt['calendar_link_event'] = 'Połącz Zdarzenie z Wiadomością:';
$txt['calendar_confirm_delete'] = 'Na pewno chcesz usunąć to zdarzenie?';
$txt['calendar_linked_events'] = 'Połączone Zdarzenia';
$txt['calendar_click_all'] = 'Kliknij, by zobaczyć wszystkie %1$s';

$txt['moveTopic1'] = 'Wyślij wątek przekierowujący';
$txt['moveTopic2'] = 'Zmień temat wątku';
$txt['moveTopic3'] = 'Nowy temat';
$txt['moveTopic4'] = 'Zmień temat każdej wiadomości';
$txt['move_topic_unapproved_js'] = 'Uwaga! Ten wątek nie został jeszcze zaakceptowany.\\n\\nNie jest zalecane abyś przesuwał wątek, chyba że zamierzasz zaakceptować wiadomości natychmiast po tym ruchu.';

$txt['theme_template_error'] = 'Nie można załadować szablonu \'%1$s\'.';
$txt['theme_language_error'] = 'Nie można załadować pliku języka \'%1$s\'.';

$txt['parent_boards'] = 'Działy podrzędne';

$txt['smtp_no_connect'] = 'Nie można połączyć się z hostem SMTP';
$txt['smtp_port_ssl'] = 'Błędne ustawienie portu SMTP, powinno być 465 dla serwerów SSL.';
$txt['smtp_bad_response'] = 'Nie można uzyskać odpowiedzi z serwera poczty';
$txt['smtp_error'] = 'Wystąpiły błędy podczas wysyłania poczty. Błąd: ';
$txt['mail_send_unable'] = 'Nie można wysłać wiadomości email na adres \'%1$s\'';

$txt['mlist_search'] = 'Szukaj użytkowników';
$txt['mlist_search_again'] = 'Szukaj ponownie';
$txt['mlist_search_email'] = 'Szukaj wg adresu email';
$txt['mlist_search_messenger'] = 'Szukaj wg identyfikatora komunikatora';
$txt['mlist_search_group'] = 'Szukaj wg pozycji';
$txt['mlist_search_name'] = 'Szukaj wg nazwy';
$txt['mlist_search_website'] = 'Szukaj wg strony WWW';
$txt['mlist_search_results'] = 'Szukaj w wynikach';
$txt['mlist_search_by'] = 'Szukaj w %1$s';
$txt['mlist_menu_view'] = 'Widok listy użytkowników';

$txt['attach_downloaded'] = 'pobrany';
$txt['attach_viewed'] = 'wyświetlony';
$txt['attach_times'] = 'razy';

$txt['settings'] = 'Konfiguracja';
$txt['never'] = 'Nigdy';
$txt['more'] = 'więcej';

$txt['hostname'] = 'Nazwa hosta';
$txt['you_are_post_banned'] = 'Przykro nam %1$s, nie wolno Ci wysyłać wiadomości normalnych i prywatnych na tym forum.';
$txt['ban_reason'] = 'Powód';

$txt['tables_optimized'] = 'Tabele bazy danych zoptymalizowane';

$txt['add_poll'] = 'Dodaj ankietę';
$txt['poll_options6'] = 'Możesz wybrać maksymalnie %1$s opcji.';
$txt['poll_remove'] = 'Usuń ankietę';
$txt['poll_remove_warn'] = 'Na pewno chcesz usunąć ankietę z tego wątku?';
$txt['poll_results_expire'] = 'Wyniki będą pokazane, kiedy głosowanie będzie skończone';
$txt['poll_expires_on'] = 'Głosowanie się kończy';
$txt['poll_expired_on'] = 'Głosowanie skończone';
$txt['poll_change_vote'] = 'Usuń głos';
$txt['poll_return_vote'] = 'Opcje głosowania';
$txt['poll_cannot_see'] = 'Nie możesz obejrzeć wyników głosowania w tej chwili.';

$txt['quick_mod_approve'] = 'Akceptuj zaznaczone';
$txt['quick_mod_remove'] = 'Usuń zaznaczone';
$txt['quick_mod_lock'] = 'Zamknij/otwórz zaznaczone';
$txt['quick_mod_sticky'] = 'Przyklej/odklej zaznaczone';
$txt['quick_mod_move'] = 'Przenieś zaznaczone do';
$txt['quick_mod_merge'] = 'Scal zaznaczone';
$txt['quick_mod_markread'] = 'Ustaw zaznaczone jako przeczytane';
$txt['quick_mod_go'] = 'Wykonaj!';
$txt['quickmod_confirm'] = 'Na pewno chcesz to zrobić?';

$txt['spell_check'] = 'Sprawdź ortografię';

$txt['quick_reply'] = 'Szybka odpowiedź';
$txt['quick_reply_desc'] = 'W <em>szybkiej odpowiedzi</em> możesz użyć kodów BBC i uśmieszków tak jak przy normalnej odpowiedzi.';
$txt['quick_reply_warning'] = 'Uwaga: ten wątek jest obecnie zamknięty!<br />Tylko administratorzy i moderatorzy mogą wysyłać do niego odpowiedzi.';
$txt['quick_reply_verification'] = 'Po wysłaniu wiadomości zostaniesz przekierowany do regularnej strony wiadomości, aby ją zweryfikować %1$s.';
$txt['quick_reply_verification_guests'] = '(wymagany dla wszystkich gości)';
$txt['quick_reply_verification_posts'] = '(wymagany dla wszystkich użytkowników, który mają mniej niż %1$d postów)';
$txt['wait_for_approval'] = 'Uwaga: ta wiadomość nie zostanie pokazana dopóki nie będzie zaakceptowana przez moderatora.';

$txt['notification_enable_board'] = 'Na pewno chcesz włączyć powiadamianie o nowych wątkach w tym dziale?';
$txt['notification_disable_board'] = 'Na pewno chcesz wyłączyć powiadamianie o nowych wątkach w tym dziale?';
$txt['notification_enable_topic'] = 'Na pewno chcesz włączyć powiadamianie o nowych odpowiedziach w tym wątku?';
$txt['notification_disable_topic'] = 'Na pewno chcesz wyłączyć powiadamianie o nowych odpowiedziach w tym wątku?';

$txt['report_to_mod'] = 'Zgłoś do moderatora';
$txt['issue_warning_post'] = 'Daj ostrzeżenie z powodu tej wiadomości';

$txt['unread_topics_visit'] = 'Ostatnie nieprzeczytane wątki';
$txt['unread_topics_visit_none'] = 'Brak nieprzeczytanych wątków od twojej ostatniej wizyty.  <a href="' . $scripturl . '?action=unread;all">Kliknij tu, aby wyświetlić wszystkie nieprzeczytane wątki</a>.';
$txt['unread_topics_all'] = 'Wszystkie nieprzeczytane wątki';
$txt['unread_replies'] = 'Wątki z nowymi odpowiedziami';

$txt['who_title'] = 'Kto jest online';
$txt['who_and'] = ' i ';
$txt['who_viewing_topic'] = ' przegląda ten wątek.';
$txt['who_viewing_board'] = ' przeglądają ten dział.';
$txt['who_member'] = 'Użytkownik';

// No longer used by default theme, but for backwards compat
$txt['powered_by_php'] = 'Działa na PHP';
$txt['powered_by_mysql'] = 'Działa na MySQL';
$txt['valid_css'] = 'Prawidłowy CSS!';

// Current footer strings
$txt['valid_html'] = 'Prawidłowy HTML 4.01!';
$txt['valid_xhtml'] = 'Prawidłowy XHTML 1.0!';
$txt['wap2'] = 'WAP2';
$txt['rss'] = 'RSS';
$txt['xhtml'] = 'XHTML';
$txt['html'] = 'HTML';

$txt['guest'] = 'Gość';
$txt['guests'] = 'Gości';
$txt['user'] = 'Użytkownik';
$txt['users'] = 'Użytkowników';
$txt['hidden'] = 'Ukrytych';
$txt['buddy'] = 'Znajomy';
$txt['buddies'] = 'Znajomi';
$txt['most_online_ever'] = 'Najwięcej online';
$txt['most_online_today'] = 'Dziś online';

$txt['merge_select_target_board'] = 'Wybierz dział docelowy dla scalonego wątku';
$txt['merge_select_poll'] = 'Wybierz, którą ankietę powinien mieć scalony wątek';
$txt['merge_topic_list'] = 'Wybierz wątki do scalenia';
$txt['merge_select_subject'] = 'Wybierz temat scalonego wątku';
$txt['merge_custom_subject'] = 'Nowy temat';
$txt['merge_enforce_subject'] = 'Zmień temat wszystkich wiadomości';
$txt['merge_include_notifications'] = 'Dołącz powiadomienia?';
$txt['merge_check'] = 'Scal?';
$txt['merge_no_poll'] = 'Bez ankiety';

$txt['response_prefix'] = 'Odp: ';
$txt['current_icon'] = 'Obecna ikona';
$txt['message_icon'] = 'Ikona wiadomości';

$txt['smileys_current'] = 'Obecny zestaw uśmieszków';
$txt['smileys_none'] = 'Bez uśmieszków';
$txt['smileys_forum_board_default'] = 'Domyślne dla tego forum bądź działu';

$txt['search_results'] = 'Pokaż wyniki';
$txt['search_no_results'] = 'Nic nie znaleziono';

$txt['totalTimeLogged1'] = 'Czas zalogowania w sumie: ';
$txt['totalTimeLogged2'] = ' dni, ';
$txt['totalTimeLogged3'] = ' godz. ';
$txt['totalTimeLogged4'] = ' min.';
$txt['totalTimeLogged5'] = 'd';
$txt['totalTimeLogged6'] = 'g ';
$txt['totalTimeLogged7'] = 'm';

$txt['approve_thereis'] = 'Jest';
$txt['approve_thereare'] = 'Jest';
$txt['approve_member'] = 'użytkownik';
$txt['approve_members'] = 'użytkowników';
$txt['approve_members_waiting'] = 'do zatwierdzenia.';

$txt['notifyboard_turnon'] = 'Czy chcesz być powiadamianym przez email o nowych wątkach w tym dziale?';
$txt['notifyboard_turnoff'] = 'Na pewno nie chcesz być już powiadamianym o nowych wątkach w tym dziale?';

$txt['activate_code'] = 'Twój kod aktywacyjny to';

$txt['find_members'] = 'Znajdź użytkowników';
$txt['find_username'] = 'Nazwa użytkownika lub adres email';
$txt['find_buddies'] = 'Pokaż tylko znajomych?';
$txt['find_wildcards'] = 'Dozwolone znaki: *, ?';
$txt['find_no_results'] = 'Nic nie znaleziono';
$txt['find_results'] = 'Wyniki';
$txt['find_close'] = 'Zamknij';

$txt['unread_since_visit'] = 'Pokaż wiadomości od ostatniej wizyty.';
$txt['show_unread_replies'] = 'Pokaż nowe odpowiedzi na twoje wątki.';

$txt['change_color'] = 'Zmień kolor';

$txt['quickmod_delete_selected'] = 'Usuń zaznaczone';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Otrzymałeś jedną lub więcej prywatnych wiadomości.\\nPokazać je teraz (w nowym oknie)?';

$txt['previous_next_back'] = '&laquo; poprzedni';
$txt['previous_next_forward'] = 'następny &raquo;';

$txt['movetopic_auto_board'] = '[DZIAŁ]';
$txt['movetopic_auto_topic'] = '[ODNOŚNIK DO WĄTKU]';
$txt['movetopic_default'] = 'Ten wątek został przeniesiony do ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Zmniejsz lub zwiększ nagłówek.';

$txt['mark_unread'] = 'Zaznacz jako nieprzeczytane';

$txt['ssi_not_direct'] = 'Nie łącz się z SSI.php bezpośrednio; powinieneś użyć ścieżki (%1$s) lub dodać ?ssi_function=something.';
$txt['ssi_session_broken'] = 'SSI.php nie mogło załadować sesji!  Może to powodować problemy z wylogowaniem i innymi funkcjami - upewnij się, że SSI.php jest "includowane" w kodzie przed *czymkolwiek* innym we wszystkich Twoich skryptach!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Podgląd';
$txt['preview_fetch'] = 'Generowanie podglądu...';
$txt['preview_new'] = 'Nowa wiadomość';
$txt['error_while_submitting'] = 'Podczas wysyłania wiadomości, pojawiły się następujące błędy:';
$txt['error_old_topic'] = 'Uwaga: W tym wątku nie pisano od %1$d dni.<br />Jeżeli nie masz pewności, że chcesz tu odpowiedzieć, rozważ rozpoczęcie nowego wątku.';

$txt['split_selected_posts'] = 'Zaznaczone wiadomości';
$txt['split_selected_posts_desc'] = 'Poniższe wypowiedzi utworzą nowy temat po podziale.';
$txt['split_reset_selection'] = 'anuluj zaznaczenie';

$txt['modify_cancel'] = 'Anuluj';
$txt['mark_read_short'] = 'Zaznacz jako przeczytane';

$txt['pm_short'] = 'Moje wiadomości';
$txt['pm_menu_read'] = 'Przeczytaj wiadomości';
$txt['pm_menu_send'] = 'Wyślij wiadomość';

$txt['hello_member_ndt'] = 'Witaj';

$txt['unapproved_posts'] = 'Niezaakceptowane wiadomości (Wątków: %1$d, Wiadomości: %2$d)';

$txt['ajax_in_progress'] = 'Ładowanie...';

$txt['mod_reports_waiting'] = 'Aktualnie otwarte są %1$d raporty moderatora.';

$txt['view_unread_category'] = 'Nieprzeczytane wiadomości';
$txt['verification'] = 'Weryfikacja';
$txt['visual_verification_description'] = 'Wpisz litery widoczne na obrazku';
$txt['visual_verification_sound'] = 'Posłuchaj liter';
$txt['visual_verification_request_new'] = 'Prośba o inny obrazek';

// Sub menu labels
$txt['summary'] = 'Podsumowanie';
$txt['account'] = 'Ustawienia konta';
$txt['forumprofile'] = 'Profil Forum';

$txt['modSettings_title'] = 'Właściwości i Opcje';
$txt['package'] = 'Pakiety';
$txt['errlog'] = 'Log błędów';
$txt['edit_permissions'] = 'Zezwolenia';
$txt['mc_unapproved_attachments'] = 'Niezatwierdzone załączniki';
$txt['mc_unapproved_poststopics'] = 'Niezatwierdzone wiadomości i wątki';
$txt['mc_reported_posts'] = 'Raportowane wiadomości';
$txt['modlog_view'] = 'Log moderacji';
$txt['calendar_menu'] = 'Pokaż kalendarz';

//!!! Send email strings - should move?
$txt['send_email'] = 'Wyślij e-mail';
$txt['send_email_disclosed'] = 'Ta treść będzie widoczna u odbiorcy.';
$txt['send_email_subject'] = 'Temat email';

$txt['ignoring_user'] = 'Ignorujesz tego użytkownika.';
$txt['show_ignore_user_post'] = 'Pokaż mi wiadomość.';

$txt['spider'] = 'Robot';
$txt['spiders'] = 'Roboty';
$txt['openid'] = 'OpenID';

$txt['downloads'] = 'Pobieranie';
$txt['filesize'] = 'Rozmiar pliku';
$txt['subscribe_webslice'] = 'Zapisz się do Webslice';

// Restore topic
$txt['restore_topic'] = 'Przywróć wątek';
$txt['restore_message'] = 'Przywróć wiadomość';
$txt['quick_mod_restore'] = 'Przywróć zaznaczone';

// Editor prompt.
$txt['prompt_text_email'] = 'Wpisz adres email.';
$txt['prompt_text_ftp'] = 'Wpisz adres ftp.';
$txt['prompt_text_url'] = 'Wpisz adres URL.';
$txt['prompt_text_img'] = 'Wpisz lokalizację obrazka';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['autosuggest_delete_item'] = 'Usuń przedmiot';

// Debug related - when $db_show_debug is true.
$txt['debug_templates'] = 'Style:';
$txt['debug_subtemplates'] = 'Pod-szablony:';
$txt['debug_language_files'] = 'Pliki językowe:';
$txt['debug_stylesheets'] = 'Arkusze stylów:';
$txt['debug_files_included'] = 'Uwzględnione pliki:';
$txt['debug_kb'] = 'KB.';
$txt['debug_show'] = 'pokaż';
$txt['debug_cache_hits'] = 'Użycia cache:';
$txt['debug_cache_seconds_bytes'] = '%1$ss - %2$s bajtów';
$txt['debug_cache_seconds_bytes_total'] = '%1$ss dla %2$s bajtów';
$txt['debug_queries_used'] = 'Użytych zapytań: %1$d.';
$txt['debug_queries_used_and_warnings'] = 'Użytych zapytań:: %1$d, %2$d ostrzeżeń';
$txt['debug_query_in_line'] = 'w <em>%1$s</em> linia <em>%2$s</em>,';
$txt['debug_query_which_took'] = 'co zajęło %1$s sekund.';
$txt['debug_query_which_took_at'] = 'które zajęło %1$s sekund w %2$s na żądanie.';
$txt['debug_show_queries'] = '[Pokaż zapytania]';
$txt['debug_hide_queries'] = '[Ukryj zapytania]';

?>