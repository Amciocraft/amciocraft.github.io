<?php
// Version: 2.0; Admin

global $settings, $scripturl;

$txt['admin_boards'] = 'Działy forum';
$txt['admin_users'] = 'Użytkownicy';
$txt['admin_newsletters'] = 'Wyślij email do użytkowników';
$txt['admin_edit_news'] = 'Aktualności';
$txt['admin_groups'] = 'Grupy';
$txt['admin_members'] = 'Zobacz wszystkich użytkowników';
$txt['admin_members_list'] = 'Poniżej znajduje się lista wszystkich obecnie zarejestrowanych użytkowników twojego forum.';
$txt['admin_next'] = 'Następna';
$txt['admin_censored_words'] = 'Modyfikuj cenzurowane słowa';
$txt['admin_censored_where'] = 'Po lewej wpisz słowo do ocenzurowania, po prawej na co ma być zmienione.';
$txt['admin_censored_desc'] = 'Z uwagi na publiczny charakter forum, mogą istnieć słowa, których wysyłania chcesz zabronić swoim użytkownikom. Pod spodem możesz wprowadzić słowa, które mają być ocenzurowane przy każdym użyciu przez któregoś z użytkowników.<br />Wyczyść pole aby usunąć dane słowo.';
$txt['admin_reserved_names'] = 'Ustaw zarezerwowane nazwy użytkowników';
$txt['admin_template_edit'] = 'Edytuj styl forum';
$txt['admin_modifications'] = 'Ustawienia modyfikacji';
$txt['admin_security_moderation'] = 'Bezpieczeństwo i Moderacja';
$txt['admin_server_settings'] = 'Ustawienia serwera';
$txt['admin_reserved_set'] = 'Ustaw zarezerwowane nazwy użytkowników';
$txt['admin_reserved_line'] = 'Jedno zarezerwowane słowo na linię.';
$txt['admin_basic_settings'] = 'Na tej stronie możesz zmienić podstawowe ustawienia forum. Bądź ostrożny, gdyż nieprawidłowa zmiana niektórych z nich może negatywnie wpłynąć na działanie forum. Niektóre z tych opcji (np. format czasu) są domyślne lub tylko dla gości.';
$txt['admin_maintain'] = 'Włącz tryb konserwacji forum';
$txt['admin_title'] = 'Nazwa forum';
$txt['admin_url'] = 'Adres forum';
$txt['cookie_name'] = 'Nazwa cookie';
$txt['admin_webmaster_email'] = 'Email Administratora';
$txt['boarddir'] = 'Katalog SMF';
$txt['sourcesdir'] = 'Katalog źródeł';
$txt['cachedir'] = 'Ścieżka cache';
$txt['admin_news'] = 'Włącz aktualności';
$txt['admin_guest_post'] = 'Włącz wysyłanie wiadomości przez gości';
$txt['admin_manage_members'] = 'Użytkownicy';
$txt['admin_main'] = 'Główne';
$txt['admin_config'] = 'Konfiguracja';
$txt['admin_version_check'] = 'Szczegółowe sprawdzenie wersji';
$txt['admin_smffile'] = 'Plik SMF';
$txt['admin_smfpackage'] = 'Pakiet SMF';
$txt['admin_maintenance'] = 'Konserwacja';
$txt['admin_image_text'] = 'Pokaż przyciski jako obrazki, zamiast tekstu';
$txt['admin_credits'] = 'Twórcy';
$txt['admin_agreement'] = 'Pokaż umowę rejestracyjną przy rejestracji';
$txt['admin_agreement_default'] = 'Domyślny';
$txt['admin_agreement_select_language'] = 'Język do edycji';
$txt['admin_agreement_select_language_change'] = 'Zmień';
$txt['admin_delete_members'] = 'Usuń wybranych użytkowników';
$txt['admin_repair'] = 'Napraw wszystkie działy i wątki';
$txt['admin_main_welcome'] = 'To jest "%1$s". Tu możesz modyfikować ustawienia, obsługiwać forum, przeglądać raporty, instalować pakiety, zarządzać stylami i robić wiele innych rzeczy.<div style="margin-top: 1ex;">Jeśli masz jakiekolwiek problemy, zajrzyj do działu "najczęstsze pytania". Jeśli zawarte tam informacje nie pomogą Ci <a href="http://www.simplemachines.org/community/index.php" target="_blank" class="new_win">zwróć się po pomoc do nas</a>.</div>Odpowiedzi na twoje pytania i rozwiązania problemów możesz również znaleźć klikając na ikonę <img src="' . $settings['images_url'] . '/helptopics.gif" alt="%2$s" title="%3$s" /> umieszczoną przy danych opcjach.<br /><br />Autorzy polonizacji SMF: Nolt, ronin, Kemac, CyPhErR, tommass, HaWaN, WilK i voythas.<br />Wszelkie zauważone błędy w tłumaczeniu prosimy zgłaszać na <a href="http://www.smf.pl">www.smf.pl (Polska Pomoc Simple Machines Forum)</a>.';
$txt['admin_news_desc'] = 'Umieszczaj jedną wiadomość na okienko. Niektóre kody BBC, np. <span title="Pogrubienie">[b]</span>, <span title="Kursywa">[i]</span> i <span title="Podkreślenie">[u]</span> mogą być użyte w aktualnościach, podobnie jak emotikony i kod HTML. Wyczyść okienko aby usunąć daną wiadomość.';
$txt['administrators'] = 'Administratorzy forum';
$txt['admin_reserved_desc'] = 'Zarezerwowane nazwy użytkowników, nie mogą być użyte podczas rejestracji lub jako nazwy wyświetlane. Wybierz opcje widoczne na dole, przed zatwierdzeniem.';
$txt['admin_activation_email'] = 'Wyślij do użytkowników email aktywacyjny po rejestracji?';
$txt['admin_match_whole'] = 'Bierz pod uwagę tylko całe nazwy.';
$txt['admin_match_case'] = 'Bierz pod uwagę wielkość liter.';
$txt['admin_check_user'] = 'Sprawdź nazwę użytkownika.';
$txt['admin_check_display'] = 'Sprawdź nazwę wyświetlaną.';
$txt['admin_newsletter_send'] = 'Stąd możesz wysłać wiadomości email do użytkowników. Adresy członków wybranych grup użytkowników powinny być wyświetlone na dole, możesz też dodać lub usunąć wybrane adresy email. Upewnij się, że adresy są wymienione w następujący sposób: \'adres1; adres2\'.';
$txt['admin_fader_delay'] = 'Czas w milisekundach na wyświetlenie każdej z wiadomości na pasku aktualności';
$txt['admin_bbc'] = 'Pokaż przyciski BBC w oknie wysyłania wiadomości normalnych i prywatnych';

$txt['admin_backup_fail'] = 'Nie można wykonać kopii zapasowej pliku Settings.php - upewnij się, że plik Settings_bak.php istnieje i można go zapisywać.';
$txt['modSettings_info'] = 'Zmień lub ustaw opcje wpływające na działanie forum.';
$txt['database_server'] = 'Serwer bazy danych:';
$txt['database_user'] = 'Nazwa użytkownika bazy danych:';
$txt['database_password'] = 'Hasło bazy danych:';
$txt['database_name'] = 'Nazwa bazy danych:';
$txt['registration_agreement'] = 'Modyfikuj umowę rejestracyjną';
$txt['registration_agreement_desc'] = 'Ta umowa jest wyświetlana tylko, jeśli włączysz to w ustawieniach forum.';
$txt['database_prefix'] = 'Prefiks tabel bazy danych';
$txt['errors_list'] = 'Wykaz błędów na forum';
$txt['errors_found'] = 'Na twoim forum obecne są następujące błędy (lista jest pusta, przy braku błędów)';
$txt['errors_fix'] = 'Czy chcesz naprawić te błędy?';
$txt['errors_do_recount'] = 'Wszystkie błędy naprawione - Dział odzysku został utworzony! Kliknij na przycisk poniżej, aby przeliczyć kluczowe statystyki.';
$txt['errors_recount_now'] = 'Przelicz statystyki';
$txt['errors_fixing'] = 'Naprawianie błędów';
$txt['errors_fixed'] = 'Wszystkie błędy naprawione! Musisz przejrzeć utworzone działy, kategorie i wątki i zdecydować, co z nimi zrobić.';
$txt['attachments_avatars'] = 'Załączniki i awatary';
$txt['attachments_desc'] = 'Tu możesz zarządzać załącznikami. Możesz usuwać zbyt duże lub stare pliki. Wyświetlane są tu również statystyki załączników.';
$txt['attachment_stats'] = 'Statystyki załączników';
$txt['attachment_integrity_check'] = 'Sprawdzenie spójności załączników';
$txt['attachment_integrity_check_desc'] = 'Ta funkcja sprawdzi oraz jeśli będzie to konieczne naprawi błędy związane ze spójnością i rozmiarem załączników, a także listę ich nazw w bazie danych.';
$txt['attachment_check_now'] = 'Uruchom sprawdzanie teraz';
$txt['attachment_pruning'] = 'Czyszczenie załączników';
$txt['attachment_pruning_message'] = 'Informacja dodana do wiadomości';
$txt['attachment_pruning_warning'] = 'Czy aby na pewno usunąć te załączniki?\\nTej operacji nie można cofnąć!';
$txt['attachment_total'] = 'Wszystkich załączników';
$txt['attachmentdir_size'] = 'Całkowity rozmiar katalogu załączników';
$txt['attachmentdir_size_current'] = 'Rozmiar całkowity obecnego katalogu z załącznikami';
$txt['attachment_space'] = 'Wolne miejsce w katalogu załączników';
$txt['attachment_space_current'] = 'Powierzchnia całkowita dostępna w obecnym katalogu';
$txt['attachment_options'] = 'Opcje załączników';
$txt['attachment_log'] = 'Raport o załącznikach';
$txt['attachment_remove_old'] = 'Usuń załączniki starsze niż';
$txt['attachment_remove_size'] = 'Usuń załączniki większe niż';
$txt['attachment_name'] = 'Nazwa załącznika';
$txt['attachment_file_size'] = 'Rozmiar pliku';
$txt['attachmentdir_size_not_set'] = 'Nie ustalono maksymalnego rozmiaru katalogu załączników';
$txt['attachment_delete_admin'] = '[załącznik usunięty przez administratora]';
$txt['live'] = 'Na żywo z www.simplemachines.org...';
$txt['remove_all'] = 'Usuń wszystkie';
$txt['approve_new_members'] = 'Admin musi zatwierdzić wszystkich nowych użytkowników';
$txt['agreement_not_writable'] = 'Ostrzeżenie - agreement.txt nie jest zapisywalny, zmiany które dokonasz zostaną niezapisane.';

$txt['version_check_desc'] = 'Informacja pokazuje wersję twoich plików instalacyjnych przeciwko najnowszym plikom. Jeśli któryś z plików jest nieaktualny, powinieneś pobrać i zaktualizować je do najnowszej wersji <a href="http://www.simplemachines.org/" target="_blank" class="new_win">www.simplemachines.org</a>.';
$txt['version_check_more'] = '(bardziej szczegółowo)';

$txt['lfyi'] = 'Nie można połączyć się z plikiem aktualności na simplemachines.org.';

$txt['manage_calendar'] = 'Kalendarz';
$txt['manage_search'] = 'Szukaj';

$txt['smileys_manage'] = 'Emotikony';
$txt['smileys_manage_info'] = 'Instaluj nowe zestawy emotikon lub dodawaj emotikony do już istniejących.';
$txt['package_info'] = 'Instaluj nowe opcje lub modyfikuj już istniejące.';
$txt['theme_admin'] = 'Zarządzanie stylami';
$txt['theme_admin_info'] = 'Ustaw i zarządzaj swoimi stylami oraz ustawiaj i resetuj opcje stylów.';
$txt['registration_center'] = 'Rejestracja';
$txt['member_center_info'] = 'Przeglądaj listę użytkowników, wyszukuj oraz zarządzaj użytkownikami oczekującymi na aktywację oraz tymi, którzy nie aktywowali jeszcze swoich kont.';

$txt['viewmembers_name'] = 'Nazwa użytkownika (nazwa wyświetlana)';
$txt['viewmembers_online'] = 'Ostatnio online';
$txt['viewmembers_today'] = 'Dziś';
$txt['viewmembers_day_ago'] = 'dzień temu';
$txt['viewmembers_days_ago'] = 'dni temu';

$txt['display_name'] = 'Nazwa wyświetlana';
$txt['email_address'] = 'Adres email';
$txt['ip_address'] = 'Adres IP';
$txt['member_id'] = 'ID';

$txt['unknown'] = 'nieznany';
$txt['security_wrong'] = 'Próba zalogowania jako administrator!' . "\n" . 'Referer: %1$s' . "\n" . 'User agent: %2$s' . "\n" . 'IP: %3$s';

$txt['email_as_html'] = 'Wysyłaj jako HTML. (dzięki temu możesz dodawać kod HTML do treści wiadomości email.)';
$txt['email_parsed_html'] = 'Dodaj &lt;br /&gt;s i &amp;nbsp;s do tej wiadomości.';
$txt['email_variables'] = 'W tej wiadomości możesz użyć kilku &quot;kodów&quot;. Kliknij <a href="' . $scripturl . '?action=helpadmin;help=emailmembers" onclick="return reqWin(this.href);" class="help">tu</a> po więcej informacji.';
$txt['email_force'] = 'Wyślij do użytkowników, którzy nie zgodzili się na wysyłanie im ogłoszeń.';
$txt['email_as_pms'] = 'Wyślij to do tych grup za pomocą prywatnych wiadomości.';
$txt['email_continue'] = 'Kontynuuj';
$txt['email_done'] = 'skończone.';

$txt['ban_title'] = 'Banowanie';
$txt['ban_ip'] = 'Banowanie IP: (np. 192.168.12.213 lub 128.0.*.*) - jeden wpis na linię';
$txt['ban_email'] = 'Banowanie adresów email: (np. lobuz@gdziestam.pl) - jeden wpis na linię';
$txt['ban_username'] = 'Banowanie nazw użytkowników: (np. h4k3r) - jeden wpis na linię';

$txt['ban_description'] = 'Stąd możesz banować użytkowników stwarzających problemy, wprowadzając ich adres IP, nazwę hosta, nazwę użytkownika lub adres email.';
$txt['ban_add_new'] = 'Dodaj nowy ban';
$txt['ban_banned_entity'] = 'Banuj według';
$txt['ban_on_ip'] = 'Adresu IP (np. 192.168.10-20.*)';
$txt['ban_on_hostname'] = 'Nazwy hosta (np. *.mil)';
$txt['ban_on_email'] = 'Adresu email (np. *@zlastrona.com)';
$txt['ban_on_username'] = 'Nazwy użytkownika';
$txt['ban_notes'] = 'Uwagi';
$txt['ban_restriction'] = 'Restrykcje';
$txt['ban_full_ban'] = 'Pełny ban';
$txt['ban_partial_ban'] = 'Częściowy ban';
$txt['ban_cannot_post'] = 'Nie może wysyłać wiadomości';
$txt['ban_cannot_register'] = 'Nie może się zarejestrować';
$txt['ban_cannot_login'] = 'Nie może się logować';
$txt['ban_add'] = 'Dodaj';
$txt['ban_edit_list'] = 'Modyfikuj listę banów';
$txt['ban_type'] = 'Typ bana';
$txt['ban_days'] = 'dniu/dniach';
$txt['ban_will_expire_within'] = 'Ban wygaśnie po';
$txt['ban_added'] = 'Dodane';
$txt['ban_expires'] = 'Wygasa';
$txt['ban_hits'] = 'Trafienia';
$txt['ban_actions'] = 'Czynności';
$txt['ban_expiration'] = 'Wygaśnięcie';
$txt['ban_reason_desc'] = 'Powód bana wyświetlany banowanemu użytkownikowi.';
$txt['ban_notes_desc'] = 'Uwagi mogące służyć reszcie załogi forum.';
$txt['ban_remove_selected'] = 'Usuń zaznaczone';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_confirm'] = 'Na pewno chcesz usunąć zaznaczone bany?';
$txt['ban_modify'] = 'Modyfikuj';
$txt['ban_name'] = 'Nazwa bana';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_edit'] = 'Edytuj ban';
$txt['ban_add_notes'] = '<strong>Uwaga</strong>: po dodaniu powyższego bana, możesz dodać dodatkowe blokady, np. - adresy IP, nazwy hostów i adresy email.';
$txt['ban_expired'] = 'Wygasły / wyłączony';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_restriction_empty'] = 'Nie wybrano żadnych ograniczeń';

$txt['ban_triggers'] = 'Blokada';
$txt['ban_add_trigger'] = 'Dodaj ban';
$txt['ban_add_trigger_submit'] = 'Dodaj';
$txt['ban_edit_trigger'] = 'Modyfikuj';
$txt['ban_edit_trigger_title'] = 'Edytuj ban';
$txt['ban_edit_trigger_submit'] = 'Modyfikuj';
$txt['ban_remove_selected_triggers'] = 'Usuń zaznaczone bany';
$txt['ban_no_entries'] = 'W tym momencie nie ma żadnych aktywnych banów.';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_triggers_confirm'] = 'Czy jesteś pewien, że chcesz usunąć zaznaczone bany?';
$txt['ban_trigger_browse'] = 'Przeglądaj bany';
$txt['ban_trigger_browse_description'] = 'Ten ekran pokazuje wszystkie zbanowane wpisy pogrupowane według adresu IP, nazwy hosta, adresu email i nazwy użytkownika.';

$txt['ban_log'] = 'Rejestr';
$txt['ban_log_description'] = 'Rejestr pokazuje wszystkie próby wejścia na forum dokonane przez banowanych użytkowników (dotyczy tylko: \'pełnego bana\' i \'zakazu rejestracji\').';
$txt['ban_log_no_entries'] = 'Brak wpisów.';
$txt['ban_log_ip'] = 'IP';
$txt['ban_log_email'] = 'Adres email';
$txt['ban_log_member'] = 'Użytkownik';
$txt['ban_log_date'] = 'Data';
$txt['ban_log_remove_all'] = 'Usuń wszystkie';
$txt['ban_log_remove_all_confirm'] = 'Na pewno chcesz usunąć wszystkie wpisy w rejestrze?';
$txt['ban_log_remove_selected'] = 'Usuń zaznaczone';
$txt['ban_log_remove_selected_confirm'] = 'Na pewno chcesz usunąć wszystkie zaznaczone wpisy?';
$txt['ban_no_triggers'] = 'Brak banów.';

$txt['settings_not_writable'] = 'Opcje nie mogą zostać zmienione gdyż plik Settings.php jest tylko do odczytu.';

$txt['maintain_title'] = 'Konserwacja forum';
$txt['maintain_info'] = 'Optymalizuj bazę danych, rób kopie zapasowe, szukaj błędów i czyść działy za pomocą tych narzędzi.';
$txt['maintain_sub_database'] = 'Baza danych';
$txt['maintain_sub_routine'] = 'Zadania';
$txt['maintain_sub_members'] = 'Użytkownicy';
$txt['maintain_sub_topics'] = 'Wątki';
$txt['maintain_done'] = 'Zadanie \'%1$s\' zakończone powodzeniem.';
$txt['maintain_no_errors'] = 'Gratulacje, nie znaleziono żadnych błędów! Dzięki za sprawdzenie.';

$txt['maintain_tasks'] = 'Zaplanowane zadania';
$txt['maintain_tasks_desc'] = 'Zarządzaj wszystkimi zaplanowanymi zadaniami przez SMF.';

$txt['scheduled_log'] = 'Log zadania';
$txt['scheduled_log_desc'] = 'Lista logów zadań które zostały uruchomione.';
$txt['admin_log'] = 'Log administratora';
$txt['admin_log_desc'] = 'Lista zadań administracyjnych, które zostały wykonane przez Administratorów Twojego forum.';
$txt['moderation_log'] = 'Raport moderacji';
$txt['moderation_log_desc'] = 'Lista czynności moderujących, które zostały wykonane przez Moderatorów Twojego forum.';
$txt['spider_log_desc'] = 'Przejrzyj wpisy związane z aktywnością robotów wyszukiwarek internetowych na twoim forum.';
$txt['pruning_log_desc'] = 'Użyj tych narzędzi do usunięcia starszych wpisów w różnych raportach.';

$txt['mailqueue_title'] = 'Mail';

$txt['db_error_send'] = 'Wyślij wiadomość email przy błędzie w połączeniu MySQL';
$txt['db_persist'] = 'Używaj ciągłego połączenia';
$txt['ssi_db_user'] = 'Nazwa użytkownika w bazie danych do użycia w trybie SSI';
$txt['ssi_db_passwd'] = 'Hasło użytkownika w bazie danych do użycia w trybie SSI';

$txt['default_language'] = 'Domyślny język forum';

$txt['maintenance_subject'] = 'Wyświetlany temat';
$txt['maintenance_message'] = 'Wyświetlana wiadomość';

$txt['errlog_desc'] = 'Raport błędów śledzi każdy błąd napotkany przez twoje forum. Aby usunąć jakiś błąd z listy, zaznacz odpowiednie okienko i kliknij przycisk %s na dole strony.';
$txt['errlog_no_entries'] = 'Obecnie nie ma wpisów z raportami o błędach.';

$txt['theme_settings'] = 'Ustawienia stylów';
$txt['theme_current_settings'] = 'Ustawienia obecnego stylu';

$txt['dvc_your'] = 'Twoja wersja';
$txt['dvc_current'] = 'Obecna wersja';
$txt['dvc_sources'] = 'Źródła';
$txt['dvc_default'] = 'Domyślne szablony';
$txt['dvc_templates'] = 'Obecne szablony';
$txt['dvc_languages'] = 'Pliki języków';

$txt['smileys_default_set_for_theme'] = 'Wybierz domyślny zestaw emotikon dla tego stylu';
$txt['smileys_no_default'] = '(Użyj zestawu domyślnego)';

$txt['censor_test'] = 'Testuj ocenzurowane słowa';
$txt['censor_test_save'] = 'Testuj';
$txt['censor_case'] = 'Ignoruj wielkość liter podczas cenzurowania';
$txt['censor_whole_words'] = 'Sprawdzaj tylko całe słowa';

$txt['admin_confirm_password'] = '(potwierdź)';
$txt['admin_incorrect_password'] = 'Błędne hasło';

$txt['date_format'] = '(RRRR-MM-DD)';
$txt['undefined_gender'] = 'Nie określono';
$txt['age'] = 'Wiek użytkownika';
$txt['activation_status'] = 'Status aktywacji';
$txt['activated'] = 'Aktywne';
$txt['not_activated'] = 'Nieaktywne';
$txt['primary'] = 'Podstawowe';
$txt['additional'] = 'Dodatkowe';
$txt['messenger_address'] = 'Adres komunikatora';
$txt['wild_cards_allowed'] = 'Możesz używać znaków * i ?';
$txt['search_for'] = 'Szukaj';
$txt['member_part_of_these_membergroups'] = 'Użytkownik jest członkiem tych grup';
$txt['membergroups'] = 'Grupy użytkowników';
$txt['confirm_delete_members'] = 'Na pewno chcesz usunąć wybranych użytkowników?';

$txt['support_credits_title'] = 'Wsparcie i twórcy';
$txt['support_credits_info'] = 'Pomoc techniczna dotycząca częstych problemów oraz informacja o wersji oprogramowania';
$txt['support_title'] = 'Informacja techniczna';
$txt['support_versions_current'] = 'Obecna wersja SMF';
$txt['support_versions_forum'] = 'Wersja zainstalowana';
$txt['support_versions_php'] = 'Wersja PHP';
$txt['support_versions_db'] = '%1$s wersja';
$txt['support_versions_server'] = 'Wersja serwera';
$txt['support_versions_gd'] = 'Wersja GD';
$txt['support_versions'] = 'Informacja o wersjach';
$txt['support_resources'] = 'Zasoby wsparcia';
$txt['support_resources_p1'] = 'Nasz <a href="%1$s">Online Manual</a> to główna dokumentacja dla SMF. SMF Online Manual posiada wiele dokumentów niosących pomoc dotyczących skryptu oraz wyjaśnień <a href="%2$s">Funkcji</a>, <a href="%3$s">Ustawień</a>, <a href="%4$s">Styli</a>, <a href="%5$s">Pakietów</a>, itd. Dokumentacja pomoże nam w szybkim odszukaniu odpowiedzi na pytania oraz problemy dotyczące SMF.';
$txt['support_resources_p2'] = 'Jeśli nie możesz znaleźć odpowiedzi na Twoje pytanie w Online Manual, spróbuj poszukać na naszym oficjalnym <a href="%1$s">Forum</a> lub poproś o pomoc w dziale <a href="%2$s">Angielskim</a> lub jednym z wielu <a href="%3$s">działów międzynarodowych</a>. Na Oficjalnym Forum SMF możesz uzyskać pomoc w <a href="%4$s">obsłudze</a>, <a href="%5$s">dostosowaniu</a>, znalezieniu firmy hostingowej, a także dyskusji dotyczącej administracji i jej problemami oraz wymienić się spostrzeżeniami z innymi administratorami for opartych o skrypt SMF. ';

$txt['support_latest'] = 'Najczęstsze pytania';
$txt['support_latest_fetch'] = 'Pobieranie informacji o pomocy...';

$txt['edit_permissions_info'] = 'Modyfikuj zezwolenia i dostępne opcje globalnie lub w poszczególnych działach.';
$txt['membergroups_members'] = 'Użytkownicy bez grupy';
$txt['membergroups_guests'] = 'Goście';
$txt['membergroups_guests_na'] = 'brak';
$txt['membergroups_add_group'] = 'Dodaj grupę';
$txt['membergroups_permissions'] = 'Zezwolenia';

$txt['permitgroups_restrict'] = 'Restrykcyjne';
$txt['permitgroups_standard'] = 'Standardowe';
$txt['permitgroups_moderator'] = 'Moderatorskie';
$txt['permitgroups_maintenance'] = 'Konserwacja forum';
$txt['permitgroups_inherit'] = 'Dziedziczone';

$txt['confirm_delete_attachments_all'] = 'Na pewno chcesz usunąć wszystkie załączniki?';
$txt['confirm_delete_attachments'] = 'Na pewno chcesz usunąć wybrane załączniki?';
$txt['attachment_manager_browse_files'] = 'Przeglądaj pliki';
$txt['attachment_manager_repair'] = 'Napraw błędy';
$txt['attachment_manager_avatars'] = 'Awatary';
$txt['attachment_manager_attachments'] = 'Załączniki';
$txt['attachment_manager_thumbs'] = 'Miniaturki';
$txt['attachment_manager_last_active'] = 'Ostatni aktywny';
$txt['attachment_manager_member'] = 'Użytkownik';
$txt['attachment_manager_avatars_older'] = 'Usuń awatary użytkowników nieaktywnych dłużej niż';
$txt['attachment_manager_total_avatars'] = 'Awatarów w sumie';

$txt['attachment_manager_avatars_no_entries'] = 'Nie ma obecnie żadnych awatarów';
$txt['attachment_manager_attachments_no_entries'] = 'Nie ma obecnie żadnych załączników';
$txt['attachment_manager_thumbs_no_entries'] = 'Nie ma obecnie żadnych miniatur';

$txt['attachment_manager_settings'] = 'Ustawienia załączników';
$txt['attachment_manager_avatar_settings'] = 'Ustawienia Awatarów';
$txt['attachment_manager_browse'] = 'Przeglądaj pliki';
$txt['attachment_manager_maintenance'] = 'Zarządzanie plikami';
$txt['attachment_manager_save'] = 'Zapisz';

$txt['attachmentEnable'] = 'Tryb załączników';
$txt['attachmentEnable_deactivate'] = 'Wyłącz załączniki';
$txt['attachmentEnable_enable_all'] = 'Włącz wszystkie załączniki';
$txt['attachmentEnable_disable_new'] = 'Wyłącz nowe załączniki';
$txt['attachmentCheckExtensions'] = 'Sprawdzaj rozszerzenie załącznika';
$txt['attachmentExtensions'] = 'Dozwolone rozszerzenia załączników';
$txt['attachmentRecodeLineEndings'] = 'Przekoduj zakończenia linii w załącznikach tekstowych';
$txt['attachmentShowImages'] = 'Wyświetlaj załączniki graficzne jako obrazki pod wiadomością';
$txt['attachmentEncryptFilenames'] = 'Szyfruj przechowywane nazwy plików';
$txt['attachmentUploadDir'] = 'Katalog załączników<div class="smalltext"><a href="' . $scripturl . '?action=admin;area=manageattachments;sa=attachpaths">Konfiguruj multi katalogi załączników</a></div>';
$txt['attachmentUploadDir_multiple'] = 'Katalog załączników';
$txt['attachmentUploadDir_multiple_configure'] = '<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=attachpaths">[Konfiguruj multi katalogi załączników]</a>';
$txt['attachmentDirSizeLimit'] = 'Maksymalny rozmiar folderu z załącznikami<div class="smalltext">(0 = bez limitu)</div>';
$txt['attachmentPostLimit'] = 'Maksymalny rozmiar załączników na jedną wiadomość<div class="smalltext">(0 = bez limitu)</div>';
$txt['attachmentSizeLimit'] = 'Maksymalny rozmiar jednego załącznika<div class="smalltext">(0 = bez limitu)</div>';
$txt['attachmentNumPerPostLimit'] = 'Maksymalna liczba załączników na wiadomość<div class="smalltext">(0 = bez limitu)</div>';
$txt['attachment_gd_warning'] = 'Moduł GD nie jest obecnie zainstalowany. Ponowne kodowanie obrazu nie jest możliwe.';
$txt['attachment_image_reencode'] = 'Ponowne kodowanie potencjalnie niebezpiecznych obrazów w załącznikach';
$txt['attachment_image_reencode_note'] = '(wymagany moduł GD)';
$txt['attachment_image_paranoid_warning'] = 'Przeprowadzenie kontroli bezpieczeństwa może doprowadzić do odrzucenia dużej liczby załączników.';
$txt['attachment_image_paranoid'] = 'Przeprowadzenie kontroli bezpieczeństwa wysłanych obrazków';
$txt['attachmentThumbnails'] = 'Zmień rozmiar obrazka, gdy ten jest wyświetlany pod wiadomością';
$txt['attachment_thumb_png'] = 'Zapisz miniatury jako pliki PNG';
$txt['attachmentThumbWidth'] = 'Maksymalna szerokość miniaturki';
$txt['attachmentThumbHeight'] = 'Maksymalna wysokość miniaturki';

$txt['attach_dir_does_not_exist'] = 'Nie istnieje';
$txt['attach_dir_not_writable'] = 'Niezapisywalny';
$txt['attach_dir_files_missing'] = 'Brak pliku (<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=repair;%2$s=%1$s">Napraw</a>)';
$txt['attach_dir_unused'] = 'Nieużywany';
$txt['attach_dir_ok'] = 'OK';

$txt['attach_path_manage'] = 'Zarządzaj ściężką załączników';
$txt['attach_paths'] = 'Ścieżki załączników';
$txt['attach_current_dir'] = 'Obecny katalog';
$txt['attach_path'] = 'Ścieżka';
$txt['attach_current_size'] = 'Obecny rozmiar (KB)';
$txt['attach_num_files'] = 'Pliki';
$txt['attach_dir_status'] = 'Status';
$txt['attach_add_path'] = 'Dodaj ścieżkę';
$txt['attach_path_current_bad'] = 'Nieprawidłowa ścieżka załączników';

$txt['mods_cat_avatars'] = 'Awatary';
$txt['avatar_directory'] = 'Katalog awatarów';
$txt['avatar_url'] = 'URL do awatarów';
$txt['avatar_dimension_note'] = '(0 = brak limitu)';
$txt['avatar_max_width_external'] = 'Maksymalna szerokość zewnętrznego awatara<div class="smalltext">(0 = brak limitu)</div>';
$txt['avatar_max_height_external'] = 'Maksymalna wysokość zewnętrznego awatara<div class="smalltext">(0 = brak limitu)</div>';
$txt['avatar_action_too_large'] = 'Jeśli awatar jest zbyt duży...';
$txt['option_refuse'] = 'Odrzuć go';
$txt['option_html_resize'] = 'Pozwól HTML na zmniejszenie go';
$txt['option_js_resize'] = 'Zmień rozmiar za pomocą JavaScript';
$txt['option_download_and_resize'] = 'Pobierz go i zmniejsz (wymaga modułu GD)';
$txt['avatar_max_width_upload'] = 'Maksymalna szerokość wysyłanego awatara<div class="smalltext">(0 = brak limitu)</div>';
$txt['avatar_max_height_upload'] = 'Maksymalna wysokość wysyłanego awatara<div class="smalltext">(0 = brak limitu)</div>';
$txt['avatar_resize_upload'] = 'Zmniejsz zbyt duże awatary';
$txt['avatar_resize_upload_note'] = '(wymaga modułu GD)';
$txt['avatar_download_png'] = 'Użyj formatu PNG dla zmniejszonych awatarów';
$txt['avatar_gd_warning'] = 'Moduł GD nie jest zainstalowany. Niektóre opcje awatarów zostały wyłączone.';
$txt['avatar_external'] = 'Zewnętrzne awatary';
$txt['avatar_upload'] = 'Awatary użytkowników';
$txt['avatar_server_stored'] = 'Galeria awatarów';
$txt['avatar_server_stored_groups'] = 'Grupy użytkowników uprawnione do wykorzystywania awatarów zamieszczonych w galerii';
$txt['avatar_upload_groups'] = 'Grupy użytkowników uprawnione do wysyłania awatarów na serwer';
$txt['avatar_external_url_groups'] = 'Grupy użytkowników uprawnione do korzystania z zewnętrznego awatara';
$txt['avatar_select_permission'] = 'Ustaw zezwolenia dla każdej grupy';
$txt['avatar_download_external'] = 'Pobieraj awatary ze wskazanego odnośnika';
$txt['custom_avatar_enabled'] = 'Pobieraj awatary do...';
$txt['option_attachment_dir'] = 'Katalog załączników';
$txt['option_specified_dir'] = 'Określonego katalogu...';
$txt['custom_avatar_dir'] = 'Katalog uploadu';
$txt['custom_avatar_dir_desc'] = 'Powinien być to inny katalog, niż katalog główny serwera.';
$txt['custom_avatar_url'] = 'URL uploadu';
$txt['custom_avatar_check_empty'] = 'Wybrany katalog awatarów może być pusty albo niepoprawny. Upewnij się, że te ustawienia są poprawne.';
$txt['avatar_reencode'] = 'Ponowne kodowanie potencjalnie niebezpiecznych awatarów';
$txt['avatar_reencode_note'] = '(wymagany moduł GD)';
$txt['avatar_paranoid_warning'] = 'Przeprowadzenie kontroli bezpieczeństwa może doprowadzić do odrzucenia dużej liczby awatarów.';
$txt['avatar_paranoid'] = 'Przeprowadzenie kontroli bezpieczeństwa przesłanych awatarów';

$txt['repair_attachments'] = 'Napraw załączniki';
$txt['repair_attachments_complete'] = 'Naprawa zakończona';
$txt['repair_attachments_complete_desc'] = 'Wszystkie zaznaczone błędy zostały usunięte';
$txt['repair_attachments_no_errors'] = 'Nie znaleziono błędów!';
$txt['repair_attachments_error_desc'] = 'Podczas naprawy zostały wykryte następujące błędy. Zaznacz te które chcesz naprawić i naciśnij guzik Napraw.';
$txt['repair_attachments_continue'] = 'Kontynuuj';
$txt['repair_attachments_cancel'] = 'Anuluj';
$txt['attach_repair_missing_thumbnail_parent'] = '%1$d miniaturki nie posiadają oryginalnego załącznika';
$txt['attach_repair_parent_missing_thumbnail'] = '%1$d załączonych obrazków nie ma miniaturek, choć w opisie je mają';
$txt['attach_repair_file_missing_on_disk'] = '%1$d załączników/awatarów istnieje w bazie, lecz nie ma ich na dysku';
$txt['attach_repair_file_wrong_size'] = '%1$d załączników/awatarów ma źle opisany rozmiar pliku';
$txt['attach_repair_file_size_of_zero'] = '%1$d załączników/awatarów ma zerowy rozmiar na dysku (zostaną usunięte)';
$txt['attach_repair_attachment_no_msg'] = '%1$d załączników nie jest powiązanych z żadnymi wiadomościami';
$txt['attach_repair_avatar_no_member'] = '%1$d awatarów nie jest powiązanych z żadnym użytkownikiem';
$txt['attach_repair_wrong_folder'] = '%1$d załączniki są w złym folderze';

$txt['news_title'] = 'Aktualności i email do użytkowników';
$txt['news_settings_desc'] = 'Tutaj możesz zmieniać ustawienia i uprawnienia związane z aktualnościami oraz emailami do użytkowników.';
$txt['news_settings_submit'] = 'Zapisz';
$txt['news_mailing_desc'] = 'Za pomocą tego menu możesz wysyłać wiadomości do wszystkich zarejestrowanych użytkowników, którzy podali swój adres email. Możesz edytować listę odbiorców lub wysłać wiadomość do wszystkich. Jest to bardzo użyteczne do przekazywania ważnych informacji technicznych lub informowania o nowościach.';
$txt['groups_edit_news'] = 'Grupy uprawnione do edycji aktualności';
$txt['groups_send_mail'] = 'Grupy uprawnione do rozsyłania Newsletterów';
$txt['xmlnews_enable'] = 'Włącz aktualności XML/RSS';
$txt['xmlnews_maxlen'] = 'Maksymalna długość wiadomości:<div class="smalltext">(0 aby wyłączyć - zły pomysł.)</div>';
$txt['editnews_clickadd'] = 'Kliknij tu aby dodać następną.';
$txt['editnews_remove_selected'] = 'Usuń zaznaczone';
$txt['editnews_remove_confirm'] = 'Na pewno chcesz usunąć zaznaczone aktualności?';
$txt['censor_clickadd'] = 'Kliknij tu aby dodać następne słowo.';

$txt['layout_controls'] = 'Forum';
$txt['logs'] = 'Logi';
$txt['generate_reports'] = 'Raporty';

$txt['update_available'] = 'Dostępna aktualizacja!';
$txt['update_message'] = 'Używasz przestarzałej wersji SMF, która zawiera błędy, które zostały naprawione.
	Jest zalecane abyś <a href="" id="update-link">zaktualizował forum</a> do najnowszej wersji najszybciej jak to tylko możliwe. Zabierze Ci to tylko minutę!';

$txt['manageposts'] = 'Wiadomości i wątki';
$txt['manageposts_title'] = 'Zarządzanie wiadomościami i wątkami';
$txt['manageposts_description'] = 'Tu możesz zarządzać wszystkimi ustawieniami odnoszącymi się do wątków i wiadomości.';

$txt['manageposts_seconds'] = 'sekund';
$txt['manageposts_minutes'] = 'minut';
$txt['manageposts_characters'] = 'znaków';
$txt['manageposts_days'] = 'dni';
$txt['manageposts_posts'] = 'wiadomości';
$txt['manageposts_topics'] = 'wątki';

$txt['manageposts_settings'] = 'Ustawienia Wiadomości';
$txt['manageposts_settings_description'] = 'Tu możesz zarządzać wszystkimi ustawieniami odnoszącymi się do tworzenia wiadomości i ich wysyłania.';
$txt['manageposts_settings_submit'] = 'Zapisz';

$txt['manageposts_bbc_settings'] = 'Bulletin Board Code';
$txt['manageposts_bbc_settings_description'] = 'Znaczniki Bulletin Board Code mogą być używane do formatowania tekstu wiadomości. Na przykład, aby wytłuścić słowo \'dom\' wpisz [b]dom[/b]. Wszystkie znaczniki BBC są umieszczane wewnątrz nawiasów kwadratowych (\'[\' i \']\').';
$txt['manageposts_bbc_settings_title'] = 'Ustawienia Bulletin Board Code';
$txt['manageposts_bbc_settings_submit'] = 'Zapisz';

$txt['manageposts_topic_settings'] = 'Ustawienia Wątków';
$txt['manageposts_topic_settings_description'] = 'Tu możesz ustawić wszystkie opcje związane z wątkami.';
$txt['manageposts_topic_settings_submit'] = 'Zapisz';

$txt['removeNestedQuotes'] = 'Usuń zagnieżdżone cytaty podczas wysyłania wiadomości';
$txt['enableEmbeddedFlash'] = 'Zamieszczaj pliki flash w wiadomościach';
$txt['enableEmbeddedFlash_warning'] = 'może być niebezpieczne!';
$txt['enableSpellChecking'] = 'Włącz sprawdzanie pisowni';
$txt['enableSpellChecking_warning'] = 'może nie działać na niektórych serwerach!';
$txt['disable_wysiwyg'] = 'Wyłącz edytor WYSIWYG';
$txt['max_messageLength'] = 'Maksymalny rozmiar wiadomości';
$txt['max_messageLength_zero'] = '0 dla braku ograniczeń';
$txt['fixLongWords'] = 'Dziel słowa dłuższe niż dana ilość liter';
$txt['fixLongWords_zero'] = '0 aby wyłączyć';
$txt['fixLongWords_warning'] = 'opcja nie działa na wszystkich serwerach!';
$txt['topicSummaryPosts'] = 'Ilość wiadomości w przeglądzie wątku';
$txt['spamWaitTime'] = 'Czas wymagany pomiędzy wiadomościami z tego samego numeru IP';
$txt['edit_wait_time'] = 'Czas utajonej edycji';
$txt['edit_disable_time'] = 'Przez jaki czas od wysłania wiadomości możliwa jest jej edycja';
$txt['edit_disable_time_zero'] = '0 aby wyłączyć';

$txt['enableBBC'] = 'Włącz bulletin board code (BBC)';
$txt['enablePostHTML'] = 'Włącz <em>prosty</em> HTML w wiadomościach';
$txt['autoLinkUrls'] = 'Automatycznie przekształcaj adresy internetowe w odnośniki?';
$txt['disabledBBC'] = 'Tagi BBC włączone';
$txt['bbcTagsToUse'] = 'Włącz tagi BBC';
$txt['bbcTagsToUse_select'] = 'Wybierz tagi dozwolone do użycia';
$txt['bbcTagsToUse_select_all'] = 'Zaznacz wszystkie znaczniki';

$txt['enableStickyTopics'] = 'Włącz przyklejone tematy';
$txt['enableParticipation'] = 'Włącz ikony uczestnictwa';
$txt['oldTopicDays'] = 'Czas po którym temat zostanie oznaczony jako stary przy odpowiedzi';
$txt['oldTopicDays_zero'] = '0 aby wyłączyć';
$txt['defaultMaxTopics'] = 'Maksymalna ilość wątków na stronę';
$txt['defaultMaxMessages'] = 'Maksymalna ilość wiadomości na stronę';
$txt['hotTopicPosts'] = 'Ilość wiadomości w popularnym wątku';
$txt['hotTopicVeryPosts'] = 'Ilość wiadomości w bardzo popularnym wątku';
$txt['enableAllMessages'] = 'Maksymalna ilość odpowiedzi w wątku pozwalająca na włączenie funkcji "Pokaż wszystkie"';
$txt['enableAllMessages_zero'] = '0 aby wyłączyć';
$txt['disableCustomPerPage'] = 'Wyłącz dostosowywanie wątków/wiadomości liczonych na stronę';
$txt['enablePreviousNext'] = 'Włącz odnośniki do poprzedniego/następnego wątku';

$txt['not_done_title'] = 'Jeszcze nie gotowe!';
$txt['not_done_reason'] = 'Aby uniknąć przeciążenia serwera proces został chwilowo wstrzymany. Powinien zostać automatycznie wznowiony za kilka sekund. Jeśli tak się nie stanie proszę klinkąć \'kontynuuj\'.';
$txt['not_done_continue'] = 'Kontynuuj';

$txt['general_settings'] = 'Główne';
$txt['database_paths_settings'] = 'Baza danych i ścieżki';
$txt['cookies_sessions_settings'] = 'Ciasteczka i Sesje';
$txt['caching_settings'] = 'Cache';
$txt['load_balancing_settings'] = 'Załaduj optymalne';

$txt['language_configuration'] = 'Języki';
$txt['language_description'] = 'Sekcja ta pozwala na edytowanie zainstalowanych języków na forum, pobranie nowych ze strony Simple Machines. Możesz tutaj także edytować ustawienia dotyczące języka.';
$txt['language_edit'] = 'Edytuj język';
$txt['language_add'] = 'Dodaj język';
$txt['language_settings'] = 'Ustawienia';

$txt['advanced'] = 'Zaawansowane';
$txt['simple'] = 'Proste';

$txt['admin_news_select_recipients'] = 'Wybierz kto ma otrzymywać kopię ogłoszeń';
$txt['admin_news_select_group'] = 'Grupy użytkowników';
$txt['admin_news_select_group_desc'] = 'Wybierz grupę która będzie otrzymywać ogłoszenia.';
$txt['admin_news_select_members'] = 'Użytkownicy';
$txt['admin_news_select_members_desc'] = 'Dodatkowi użytkownicy otrzymujący ogłoszenia.';
$txt['admin_news_select_excluded_members'] = 'Użytkownicy wykluczeni';
$txt['admin_news_select_excluded_members_desc'] = 'Użytkownicy, którzy nie powinni otrzymywać ogłoszeń.';
$txt['admin_news_select_excluded_groups'] = 'Wykluczone grupy';
$txt['admin_news_select_excluded_groups_desc'] = 'Wybierz grupy które definitywnie nie powinny otrzymywać ogłoszeń.';
$txt['admin_news_select_email'] = 'Adresy email';
$txt['admin_news_select_email_desc'] = 'Adresy email powinny być oddzielone średnikiem aby wysłać użytkownikom ogłoszenia. (np. adres1; adres2)';
$txt['admin_news_select_override_notify'] = 'Opcje przymusowych powiadomień';
// Use entities in below.
$txt['admin_news_cannot_pm_emails_js'] = 'Nie możesz wysłać prywatnej wiadomości na adres email. Jeśli kontynuujesz wszystkie wprowadzone adresy email zostaną zignorowane.\\n\\nCzy jesteś pewien że chcesz to zrobić?';

$txt['mailqueue_browse'] = 'Przeglądaj kolejkę';
$txt['mailqueue_settings'] = 'Opcje maili';

$txt['admin_search'] = 'Szybkie wyszukiwanie';
$txt['admin_search_type_internal'] = 'Zadania/Opcje';
$txt['admin_search_type_member'] = 'Użytkownik';
$txt['admin_search_type_online'] = 'Podręcznik Online';
$txt['admin_search_go'] = 'Idź';
$txt['admin_search_results'] = 'Wyniki wyszukiwania';
$txt['admin_search_results_desc'] = 'Wyniki dla wyszukiwania: &quot;%1$s&quot;';
$txt['admin_search_results_again'] = 'Szukaj ponownie';
$txt['admin_search_results_none'] = 'Brak znalezionych wyników!';

$txt['admin_search_section_sections'] = 'Sekcja';
$txt['admin_search_section_settings'] = 'Opcja';

$txt['core_settings_title'] = 'Cechy podstawowe';
$txt['mods_cat_features'] = 'Opcje';
$txt['mods_cat_security_general'] = 'Główne';
$txt['antispam_title'] = 'Anty-Spam';
$txt['mods_cat_modifications_misc'] = 'Rozmaite';
$txt['mods_cat_layout'] = 'Układ';
$txt['karma'] = 'Reputacja';
$txt['moderation_settings_short'] = 'Moderacja';
$txt['signature_settings_short'] = 'Sygnatury';
$txt['custom_profile_shorttitle'] = 'Pola profilów';
$txt['pruning_title'] = 'Czyszczenie logów';

$txt['boardsEdit'] = 'Modyfikuj fora';
$txt['mboards_new_cat'] = 'Stwórz nową kategorię';
$txt['manage_holidays'] = 'Zarządzaj wydarzeniami';
$txt['calendar_settings'] = 'Opcje kalendarza';
$txt['search_weights'] = 'Ważność wyszukiwania';
$txt['search_method'] = 'Metoda wyszukiwania';

$txt['smiley_sets'] = 'Zestaw emotikon';
$txt['smileys_add'] = 'Dodaj emotikony';
$txt['smileys_edit'] = 'Edytuj emotikony';
$txt['smileys_set_order'] = 'Porządek zestawu emotikon';
$txt['icons_edit_message_icons'] = 'Edytuj ikony wiadomości';

$txt['membergroups_new_group'] = 'Dodaj grupę użytkowników';
$txt['membergroups_edit_groups'] = 'Edytuj grupę użytkowników';
$txt['permissions_groups'] = 'Zezwolenia dla grupy użytkowników';
$txt['permissions_boards'] = 'Zezwolenia dla forum';
$txt['permissions_profiles'] = 'Edytuj profile';
$txt['permissions_post_moderation'] = 'Moderacja wiadomości';

$txt['browse_packages'] = 'Przeglądaj pakiety';
$txt['download_packages'] = 'Pobierz pakiety';
$txt['installed_packages'] = 'Zainstalowane pakiety';
$txt['package_file_perms'] = 'Zezwolenia plików';
$txt['package_settings'] = 'Opcje';
$txt['themeadmin_admin_title'] = 'Zarządzaj i instaluj';
$txt['themeadmin_list_title'] = 'Opcje stylów';
$txt['themeadmin_reset_title'] = 'Opcje użytkowników';
$txt['themeadmin_edit_title'] = 'Modyfikuj style';
$txt['admin_browse_register_new'] = 'Zarejestruj nowego użytkownika';

$txt['search_engines'] = 'Silniki wyszukiwarek';
$txt['spiders'] = 'Roboty';
$txt['spider_logs'] = 'Logi';
$txt['spider_stats'] = 'Statystyki';

$txt['paid_subscriptions'] = 'Płatna subskrypcja';
$txt['paid_subs_view'] = 'Pokaż subskrypcje';

?>