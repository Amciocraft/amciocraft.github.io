<?php
// Version: 2.0; ManageSettings

global $scripturl;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['modSettings_desc'] = 'Na tej stronie możesz zmienić ustawienia funkcji i prostych opcji forum. Przejrzyj <a href="' . $scripturl . '?action=admin;area=theme;sa=settings;th=%1$s;%3$s=%2$s">ustawienia stylów</a> jeśli chcesz zmienić inne opcje.  Kliknij na ikony pomocy, jeśli chcesz uzyskać więcej informacji o jakimś ustawieniu.';
$txt['security_settings_desc'] = 'Ta strona umożliwia Ci ustawienie opcji szczególnie związanych z bezpieczeństwem i moderowaniem twojego forum, z uwzględnieniem opcji anty-spam.';
$txt['modification_settings_desc'] = 'Ta strona zawiera ustawienie dodane do twojego forum przez modyfikacje';

$txt['modification_no_misc_settings'] = 'Nie ma jeszcze zainstalowanych żadnych modyfikacji, aby móc dodać jakieś ustawienia.';

$txt['pollMode'] = 'Tryb ankiety';
$txt['disable_polls'] = 'Wyłącz ankiety';
$txt['enable_polls'] = 'Włącz ankiety';
$txt['polls_as_topics'] = 'Wyświetl istniejące ankiety jako wątki';
$txt['allow_guestAccess'] = 'Pozwól gościom przeglądać forum';
$txt['userLanguage'] = 'Pozwól użytkownikom wybrać język forum';
$txt['allow_editDisplayName'] = 'Pozwól użytkownikom na zmianę ich wyświetlanej nazwy';
$txt['allow_hideOnline'] = 'Pozwól nie-administratorom ukryć swój status online';
$txt['guest_hideContacts'] = 'Nie pokazuj gościom danych kontaktowych użytkowników';
$txt['titlesEnable'] = 'Włącz tytuły osobiste';
$txt['enable_buddylist'] = 'Włącz listę znajomych/ignorowanych';
$txt['default_personal_text'] = 'Domyślny tekst osobisty';
$txt['number_format'] = 'Domyślny format liczb';
$txt['time_format'] = 'Domyślny format czasu';
$txt['setting_time_offset'] = 'Generalne przesunięcie czasu<div class="smalltext">(modyfikacja tej wartości zmieni ustawienia u wszystkich.)</div>';
$txt['setting_default_timezone'] = 'Serwer czasu';
$txt['failed_login_threshold'] = 'Dopuszczalna ilość prób zalogowania';
$txt['lastActive'] = 'Ilość w minutach do pokazania, że użytkownik jest aktywny';
$txt['trackStats'] = 'Śledź statystykę dni';
$txt['hitStats'] = 'Śledź ilość wejść na dzień (statystyki muszą być włączone)';
$txt['enableCompressedOutput'] = 'Włącz kompresję';
$txt['disableTemplateEval'] = 'Wyłącz ocenę szablonów';
$txt['databaseSession_enable'] = 'Informacje o sesjach w bazie danych';
$txt['databaseSession_loose'] = 'Zezwól przeglądarkom wracać do stron zachowanych w cache';
$txt['databaseSession_lifetime'] = 'Sekund do wygaśnięcia nieaktywnej sesji';
$txt['enableErrorLogging'] = 'Włącz raportowanie błędów';
$txt['enableErrorQueryLogging'] = 'Uwzględnij zapytania bazy danych w dzienniku błędów';
$txt['pruningOptions'] = 'Włącz czyszczenie logów';
$txt['pruneErrorLog'] = 'Usuwają logi błędów starsze niż:<div class="smalltext">(0 wyłączone)</div>';
$txt['pruneModLog'] = 'Usuń logi moderacji starsze niż:<div class="smalltext">(0 wyłączone)</div>';
$txt['pruneBanLog'] = 'Usuń wpisy banów z logu starsze niż:<div class="smalltext">(0 wyłączone)</div>';
$txt['pruneReportLog'] = 'Usuń raporty moderacji starsze niż:<div class="smalltext">(0 wyłączone)</div>';
$txt['pruneScheduledTaskLog'] = 'Usuń logi zaplanowanych zadań starsze niż:<div class="smalltext">(0 wyłączone)</div>';
$txt['pruneSpiderHitLog'] = 'Usuń logi aktywności wyszukiwarek starsze niż:<div class="smalltext">(0 wyłączone)</div>';
$txt['cookieTime'] = 'Domyślny czas zalogowania (w minutach)';
$txt['localCookies'] = 'Włącz lokalne przechowywanie plików cookies<div class="smalltext">(SSI nie działa z tą opcją.)</div>';
$txt['globalCookies'] = 'Używaj plików cookies niezależnych od subdomeny<div class="smalltext">(najpierw wyłącz lokalne pliki cookies!)</div>';
$txt['secureCookies'] = 'Wymuś ciasteczka w celu bezpieczeństwa<div class="smalltext">(Możliwość włączenia jeśli używasz HTTPS - w przeciwnym wypadku nie korzystaj z tej opcji!)</div>';
$txt['securityDisable'] = 'Wyłącz dodatkowe sprawdzanie hasła w centrum administracji';
$txt['send_validation_onChange'] = 'Ponowna aktywacja konta po zmianie adresu email';
$txt['approveAccountDeletion'] = 'Wymagaj zgody administratora gdy użytkownik chce usunąć swoje konto';
$txt['autoOptMaxOnline'] = 'Maksymalna ilość użytkowników online podczas optymalizacji<div class="smalltext">(0 dla nieograniczonej)</div>';
$txt['autoFixDatabase'] = 'Automatycznie naprawiaj uszkodzone tabele';
$txt['allow_disableAnnounce'] = 'Zezwól użytkownikom na wyłączenie ogłoszeń';
$txt['disallow_sendBody'] = 'Wyłącz treść wiadomości w powiadomieniach';
$txt['queryless_urls'] = 'Wyświetlaj adresy przyjazne wyszukiwarkom<div class="smalltext"><strong>działa tylko w Apache/Lighttpd!</strong></div>';
$txt['max_image_width'] = 'Maksymalna szerokość obrazków w wiadomościach (0 = wyłącz)';
$txt['max_image_height'] = 'Maksymalna wysokość obrazków w wiadomościach (0 = wyłącz)';
$txt['enableReportPM'] = 'Włącz zgłaszanie prywatnych wiadomości administracji';
$txt['max_pm_recipients'] = 'Maksymalna dozwolona liczba odbiorców przy wysyłaniu prywatnych wiadomości.<div class="smalltext">(0 - bez limitu, nie dotyczy administratorów)</div>';
$txt['pm_posts_verification'] = 'Liczba wiadomości poniżej której użytkownik musi wpisać kod weryfikacyjny, aby wysłać prywatną wiadomość.<div class="smalltext">(0 - bez limitu, nie dotyczy administratorów)</div>';
$txt['pm_posts_per_hour'] = 'Liczba prywatnych wiadomości jaką użytkownik może wysłać w ciągu godziny.<div class="smalltext">(0 - bez limitu, nie dotyczy administratorów)</div>';
$txt['compactTopicPagesEnable'] = 'Ogranicz liczbę wyświetlanych odnośników do stron';
$txt['contiguous_page_display'] = 'Ilość kolejno wyświetlanych stron';
$txt['to_display'] = 'wyświetla';
$txt['todayMod'] = 'Włącz funkcję &quot;Dzisiaj&quot;';
$txt['today_disabled'] = 'Wyłączona';
$txt['today_only'] = 'Tylko Dzisiaj';
$txt['yesterday_today'] = 'Dzisiaj i Wczoraj';
$txt['topbottomEnable'] = 'Włącz przyciski Idź do góry/do dołu';
$txt['onlineEnable'] = 'Pokazuj status online/offline użytkownika w wiadomościach i PW';
$txt['enableVBStyleLogin'] = 'Pokaż pole szybkiego logowania na każdej stronie';
$txt['defaultMaxMembers'] = 'Ilość użytkowników na stronę w liście użytkowników';
$txt['timeLoadPageEnable'] = 'Wyświetlaj czas generacji strony';
$txt['disableHostnameLookup'] = 'Wyłącz sprawdzanie dostawcy internetowego';
$txt['who_enabled'] = 'Włącz listę użytkowników online';
$txt['make_email_viewable'] = 'Zezwól na wyświetlanie adresu email.';
$txt['meta_keywords'] = 'Znaczniki Meta powiązane z forum.<div class="smalltext">Dla wyszukiwarek, zostaw pole puste aby użyć domyślnych znaczników.</div>';

$txt['karmaMode'] = 'Tryb reputacji';
$txt['karma_options'] = 'Wyłącz reputację|Włącz całkowitą reputację|Włącz pozytywną/negatywną reputację';
$txt['karmaMinPosts'] = 'Minimalna ilość wiadomości potrzebna do zmiany reputacji';
$txt['karmaWaitTime'] = 'Czas oczekiwania w godzinach';
$txt['karmaTimeRestrictAdmins'] = 'Podporządkuj administratorów czasowi oczekiwania';
$txt['karmaLabel'] = 'Nazwa reputacji';
$txt['karmaApplaudLabel'] = 'Etykieta poparcia';
$txt['karmaSmiteLabel'] = 'Etykieta potępienia';

$txt['caching_information'] = '<div align="aligncenter underline"><strong><u>Ważne!</u> Przeczytaj to zanim włączysz poniższe opcje.</strong></div><br />
	SMF obsługuje cache używając akceleratorów. Aktualnie obsługiwane akceleratory to:<br />
	<ul class="normallist">
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (Not Zend Optimizer)</li>
                <li>XCache</li>
	</ul>
	Cache będzie działać na Twoim serwerze tylko jeśli PHP będzie skompilowane z jednym z wyżej wymienionych akceleratorów lub z
	włączonym memcache. Jeśli nie posiadasz zainstalowanego żadnego akceleratora, SMF będzie polegać na opcji cache w pliku.<br /><br />
	SMF pozwala na aktywację cache na różnych poziomach. Im wyższy poziom cache, tym więcej czasu procesora będzie zużywane na odczytanie
	informacji cache. Jeśli na Twojej maszynie jest uaktywnione cache, zaleca się rozpocząć od ustawienia poziomu 1.
	<br /><br />
	Pamiętaj, że jeśli używasz memcache, musisz podać parametry serwera w ustawieniach poniżej. Powinny być one podane w formie oddzielonej przecinkami listy,
	tak jak na poniższym przykładzie:<br />
	&quot;serwer1,serwer2,serwer3:port,serwer4&quot;<br /><br />
	Jeśli port nie zostanie podany, SMF użyje portu 11211. SMF będzie próbować wymuszonego lub losowego rozłożenia obciążenia pomiędzy serwerami.
	<br /><br />
	%1$s';

$txt['detected_no_caching'] = '<strong class="alert">SMF nie jest w stanie wykryć na Twoim serwerze kompatybilnego akceleratora.</strong>';
$txt['detected_APC'] = '<strong style="color: green">SMF wykrył, że na Twoim serwerze jest zainstalowany APC.</strong>';
$txt['detected_eAccelerator'] = '<strong style="color: green">SMF wykrył, że na Twoim serwerze jest zainstalowany eAccelerator.</strong>';
$txt['detected_MMCache'] = '<strong style="color: green">SMF wykrył, że na Twoim serwerze jest zainstalowany MMCache.</strong>';
$txt['detected_Zend'] = '<strong style="color: green">SMF wykrył, że na Twoim serwerze jest zainstalowany Zend.</strong> ';
$txt['detected_Memcached'] = '<strong style="color: green">SMF wykrył, że na Twoim serwerze jest zainstalowany Memcached.</strong> ';
$txt['detected_XCache'] = '<strong style="color: green">SMF wykrył, że na Twoim serwerze jest zainstalowany XCache.</strong>';

$txt['cache_enable'] = 'Poziom cache';
$txt['cache_off'] = 'Wyłącz cache';
$txt['cache_level1'] = 'Poziom 1';
$txt['cache_level2'] = 'Poziom 2 (nie polecany)';
$txt['cache_level3'] = 'Poziom 3 (nie polecany)';
$txt['cache_memcached'] = 'Ustawienia Memcache';

$txt['loadavg_warning'] = '<span class="error">Uwaga: poniższe ustawienia muszą być edytowane z ostrożnością. Ustawienie ich na niskim poziomie może spowodować, że forum będzie źle renderowane i będzie <strong>bezużyteczne</strong>! Obecnie średnie ładowanie jest <strong>%01.2f</strong></span>';
$txt['loadavg_enable'] = 'Włącz równoważenie obciążenia przez średnie obciążenie';
$txt['loadavg_auto_opt'] = 'Próg automatycznego wyłączenia optymalizacji bazy danych';
$txt['loadavg_search'] = 'Próg wyłączenia wyszukiwania';
$txt['loadavg_allunread'] = 'Próg wyłączenia wszystkich nieprzeczytanych wątków';
$txt['loadavg_unreadreplies'] = 'Próg wyłączenia nieprzeczytanych odpowiedzi';
$txt['loadavg_show_posts'] = 'Próg do wyłączania pokazywanych wiadomości użytkownika';
$txt['loadavg_forum'] = 'Próg <strong>całkowitego</strong> wyłączenia forum';
$txt['loadavg_disabled_windows'] = '<span class="error">Wsparcie dla zbalansowanego ładowania nie jest dostępne w Windows.</span>';
$txt['loadavg_disabled_conf'] = '<span class="error">Wsparcie dla zbalansowanego ładowania jest wyłączone w konfiguracji Twojego hosta.</span>';

$txt['setting_password_strength'] = 'Wymagana siła haseł użytkowników';
$txt['setting_password_strength_low'] = 'Niska - minimum 4 znaki';
$txt['setting_password_strength_medium'] = 'Średnia - nie może zawierać nazwy użytkownika';
$txt['setting_password_strength_high'] = 'Wysoka - mieszanka różnych znaków';

$txt['antispam_Settings'] = 'Weryfikacja Anty-Spam';
$txt['antispam_Settings_desc'] = 'Ta sekcja pozwala na ustawienie kontroli weryfikacji aby zapewnić cię że użytkownik to człowiek (a nie bot), i w jaki sposób i gdzie się stosuje.';
$txt['setting_reg_verification'] = 'Wymagaj weryfikacji na stronie rejestracji';
$txt['posts_require_captcha'] = 'Liczba wiadomości, poniżej której użytkownicy muszą przejść weryfikację aby utworzyć wiadomość';
$txt['posts_require_captcha_desc'] = '(0 - bez limitu, nie dotyczy moderatorów)';
$txt['search_enable_captcha'] = 'Wymagaj weryfikacji przy przeszukiwaniu przez wszystkich gości';
$txt['setting_guests_require_captcha'] = 'Goście muszą przejść weryfikację kiedy tworzą wiadomość';
$txt['setting_guests_require_captcha_desc'] = '(Automatycznie ustawione, jeśli określiłeś minimalną liczbę wiadomości poniżej)';
$txt['guests_report_require_captcha'] = 'Gość musi przejść przez weryfikacje gdy raportuje wiadomość';

$txt['configure_verification_means'] = 'Konfiguracja metod weryfikacji';
$txt['setting_qa_verification_number'] = 'Liczba pytań weryfikacyjnych na które użytkownik musi odpowiedzieć';
$txt['setting_qa_verification_number_desc'] = '(0 aby wyłączyć; pytania są ustawiane poniżej)';
$txt['configure_verification_means_desc'] = '<span class="smalltext">Poniżej możesz ustawić funkcje dotyczące anty-spamu, które wymuszają na użytkownikach potwierdzenie, że są ludźmi. Każdy użytkownik będzie musiał przejść przez <em>wszystkie</em> zabezpieczenia, więc jeśli ustawisz weryfikację obrazka oraz pytanie/odpowiedź - trzeba będzie poprawnie odpowiedzieć na oba testy.</span>';
$txt['setting_visual_verification_type'] = 'Złożoność obrazka do weryfikacji (CAPTCHA)';
$txt['setting_visual_verification_type_desc'] = 'Im bardziej obraz jest złożony, tym trudniejsze jest obejście go przez boty';
$txt['setting_image_verification_off'] = 'Wyłącz';
$txt['setting_image_verification_vsimple'] = 'Bardzo prosty - Sam tekst';
$txt['setting_image_verification_simple'] = 'Prosty - Nachodzące na siebie kolorowe litery, bez szumu';
$txt['setting_image_verification_medium'] = 'Średni - Nachodzące na siebie kolorowe litery, z szumem';
$txt['setting_image_verification_high'] = 'Trudny - Pochylone litery, znaczny szum';
$txt['setting_image_verification_extreme'] = 'Ekstremalny - Pochylone litery, szum, linie i kształty.';
$txt['setting_image_verification_sample'] = 'Przykład';
$txt['setting_image_verification_nogd'] = '<strong>Uwaga:</strong> ustawienie złożoności nie ma znaczenia, ponieważ serwer nie ma zainstalowanej biblioteki GD.';
$txt['setup_verification_questions'] = 'Pytania kontrolne';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">Jeśli chcesz by użytkownicy odpowiadali na pytania weryfikacyjne, aby zatrzymać boty, powinieneś ustawić kilka pytań w tabelce poniżej. Wybierz w miarę łatwe pytania; wielkość znaków nie ma znaczenia. Możesz używać tagów BBC, aby sformatować pytania, w celu usunięcia pytania zwyczajnie wyczyść zawartość tego pola.</span>';
$txt['setup_verification_question'] = 'Pytanie';
$txt['setup_verification_answer'] = 'Odpowiedź';
$txt['setup_verification_add_more'] = 'Dodaj kolejne pytanie';

$txt['moderation_settings'] = 'Ustawienia moderacji';
$txt['setting_warning_enable'] = 'Włącz system ostrzeżeń użytkownika';
$txt['setting_warning_watch'] = 'Poziom Ostrzeżenia - Użytkownik jest obserwowany<div class="smalltext">Wartość poziomu ostrzeżenia, powyżej którego, użytkownik zostanie dodany do listy obserwowanych użytkowników - 0 aby wyłączyć.</div>';
$txt['setting_warning_moderate'] = 'Poziom Ostrzeżenia - wiadomości użytkownika są moderowane<div class="smalltext">Wartość poziomu ostrzeżenia, powyżej którego, wszystkie wiadomości użytkownika są moderowane - 0 aby wyłączyć.</div>';
$txt['setting_warning_mute'] = 'Poziom Ostrzeżenia - Użytkownik nie może pisać wiadomości<div class="smalltext">Wartość poziomu ostrzeżenia, powyżej którego, użytkownik nie może pisać wiadomości - 0 aby wyłączyć.</div>';
$txt['setting_user_limit'] = 'Maksymalna ilość punktów ostrzeżenia na dzień<div class="smalltext">Ta wartość, to maksymalna ilość punktów ostrzeżenia, jakie jeden moderator może przyznać użytkownikowi w okresie 24 godzin - 0 bez limitu.</div>';
$txt['setting_warning_decrement'] = 'Ilość punktów ostrzeżeń redukowana co 24 godziny<div class="smalltext">Dotyczy tylko użytkowników, którzy nie otrzymali żadnego ostrzeżenia przez ostatnie 24 godziny - ustaw na 0 aby wyłączyć.</div>';
$txt['setting_warning_show'] = 'Pokaż stan ostrzeżeń dla wszystkich użytkowników<div class="smalltext">Jeśli jest wyłączony, tylko moderatorzy widzą stan ostrzeżeń użytkownika.</div>';
$txt['setting_warning_show_mods'] = 'Tylko moderatorzy';
$txt['setting_warning_show_user'] = 'Moderatorzy i użytkownicy z ostrzeżeniem';
$txt['setting_warning_show_all'] = 'Wszyscy użytkownicy';

$txt['signature_settings'] = 'Ustawienia podpisu';
$txt['signature_settings_desc'] = 'Na tej stronie decydujesz o wyglądzie podpisów użytkowników SMF.';
$txt['signature_settings_warning'] = 'Te ustawienia nie dotyczą istniejących juz podpisów. Kliknij <a href="' . $scripturl . '?action=admin;area=featuresettings;sa=sig;apply;%2$s=%1$s">tutaj</a> aby zastosować reguły do wszystkich istniejących podpisów.';
$txt['signature_enable'] = 'Włącz podpisy';
$txt['signature_max_length'] = 'Maksymalna dozwolona ilość znaków<div class="smalltext">(0=brak limitu)</div>';
$txt['signature_max_lines'] = 'Maksymalna ilość linii<div class="smalltext">(0=brak limitu)</div>';
$txt['signature_max_images'] = 'Maksymalna liczba obrazków<div class="smalltext">(0=brak limitu - pomija buźki)</div>';
$txt['signature_allow_smileys'] = 'Zezwól na używanie emotikon w sygnaturach';
$txt['signature_max_smileys'] = 'Maksymalna liczba emotikon<div class="smalltext">(0=brak limitu)</div>';
$txt['signature_max_image_width'] = 'Maksymalna szerokość obrazka w podpisie (w pikselach)<div class="smalltext">(0=brak limitu)</div>';
$txt['signature_max_image_height'] = 'Maksymalna wysokość obrazka w podpisie (w pikselach)<div class="smalltext">(0=brak limitu)</div>';
$txt['signature_max_font_size'] = 'Maksymalny rozmiar czcionki dozwolonej w podpisach<div class="smalltext">(0=brak limitu, w pikselach)</div>';
$txt['signature_bbc'] = 'Tagi BBC włączone';

$txt['custom_profile_title'] = 'Własne pola profilu';
$txt['custom_profile_desc'] = 'Na tej stronie możesz tworzyć własne pola profilów dopasowane do Twoich wymagań';
$txt['custom_profile_active'] = 'Aktywne';
$txt['custom_profile_fieldname'] = 'Nazwa pola';
$txt['custom_profile_fieldtype'] = 'Typ pola';
$txt['custom_profile_make_new'] = 'Nowe pole';
$txt['custom_profile_none'] = 'Nie utworzyłeś jeszcze żadnych własnych pól profilu!';
$txt['custom_profile_icon'] = 'Ikona';

$txt['custom_profile_type_text'] = 'Tekst';
$txt['custom_profile_type_textarea'] = 'Długi tekst';
$txt['custom_profile_type_select'] = 'Lista wyboru';
$txt['custom_profile_type_radio'] = 'Grupa opcji';
$txt['custom_profile_type_check'] = 'Pole wyboru';

$txt['custom_add_title'] = 'Dodaj pole profilu';
$txt['custom_edit_title'] = 'Edytuj pole profilu';
$txt['custom_edit_general'] = 'Pokaż ustawienia';
$txt['custom_edit_input'] = 'Dane wejściowe';
$txt['custom_edit_advanced'] = 'Zaawansowane ustawienia';
$txt['custom_edit_name'] = 'Nazwa';
$txt['custom_edit_desc'] = 'Opis';
$txt['custom_edit_profile'] = 'Sekcja profilu';
$txt['custom_edit_profile_desc'] = 'Sekcja profilu, gdzie jest edytowany.';
$txt['custom_edit_profile_none'] = 'Brak';
$txt['custom_edit_registration'] = 'Pokaż przy rejestracji';
$txt['custom_edit_registration_disable'] = 'Nie';
$txt['custom_edit_registration_allow'] = 'Tak';
$txt['custom_edit_registration_require'] = 'Tak, i wymagaj wpisania';
$txt['custom_edit_display'] = 'Pokaż w widoku wątku';
$txt['custom_edit_picktype'] = 'Typ pola';

$txt['custom_edit_max_length'] = 'Maksymalna długość';
$txt['custom_edit_max_length_desc'] = '(0=bez limitu)';
$txt['custom_edit_dimension'] = 'Wymiary';
$txt['custom_edit_dimension_row'] = 'Wierszy';
$txt['custom_edit_dimension_col'] = 'Kolumn';
$txt['custom_edit_bbc'] = 'Włącz BBC';
$txt['custom_edit_options'] = 'Opcje';
$txt['custom_edit_options_desc'] = 'Zostaw puste pola aby usunąć. Przełącznik wybiera domyślną opcję.';
$txt['custom_edit_options_more'] = 'Więcej';
$txt['custom_edit_default'] = 'Stan domyślny';
$txt['custom_edit_active'] = 'Aktywne';
$txt['custom_edit_active_desc'] = 'Jeżeli nie jest zaznaczone to pole nie będzie pokazywane.';
$txt['custom_edit_privacy'] = 'Prywatność';
$txt['custom_edit_privacy_desc'] = 'Kto może widzieć i edytować to pole.';
$txt['custom_edit_privacy_all'] = 'Użytkownicy widzą to pole; właściciel może edytować';
$txt['custom_edit_privacy_see'] = 'Użytkownicy widzą to pole; tylko administratorzy mogą edytować';
$txt['custom_edit_privacy_owner'] = 'Użytkownicy nie widzą tego pola; właściciele oraz administratorzy mogą je edytować';
$txt['custom_edit_privacy_none'] = 'To pole widoczne jest tylko dla administratorów';
$txt['custom_edit_can_search'] = 'Można wyszukać?';
$txt['custom_edit_can_search_desc'] = 'Można szukać według tego pola na liście użytkowników.';
$txt['custom_edit_mask'] = 'Maska wprowadzania';
$txt['custom_edit_mask_desc'] = 'Maska wprowadzania może zostać wybrana dla pól tekstowych, aby narzucić konkretny rodzaj danych.';
$txt['custom_edit_mask_email'] = 'Prawidłowy Email';
$txt['custom_edit_mask_number'] = 'Numeryczny';
$txt['custom_edit_mask_nohtml'] = 'Brak HTML';
$txt['custom_edit_mask_regex'] = 'Wyrażenie regularne - regex (Zaawansowane)';
$txt['custom_edit_enclose'] = 'Pokaż załączony w tekście (opcjonalne)';
$txt['custom_edit_enclose_desc'] = '<strong>Sugerujemy</strong>, aby użyć maski wprowadzania do sprawdzenia danych wprowadzonych przez użytkownika.';

$txt['custom_edit_placement'] = 'Wybierz położenie';
$txt['custom_edit_placement_standard'] = 'Standardowe (z tytułem)';
$txt['custom_edit_placement_withicons'] = 'Z ikonami';
$txt['custom_edit_placement_abovesignature'] = 'Nad sygnaturą';
$txt['custom_profile_placement'] = 'Położenie';
$txt['custom_profile_placement_standard'] = 'Standardowe';
$txt['custom_profile_placement_withicons'] = 'Z ikonami';
$txt['custom_profile_placement_abovesignature'] = 'Nad sygnaturą';

// Use numeric entities in the string below!
$txt['custom_edit_delete_sure'] = 'Czy jesteś pewien że chcesz skasować to pole - wszystkie dane związane z tym polem dane zostaną stracone!';

$txt['standard_profile_title'] = 'Standardowe pola profilu';
$txt['standard_profile_field'] = 'Pola';

$txt['core_settings_welcome_msg'] = 'Witaj w Twoim nowym Forum';
$txt['core_settings_welcome_msg_desc'] = 'By w pełni zacząć korzystać z forum sugerujemy wybranie, które z cech podstawowych SMF chcesz włączyć. Polecamy włączenie tylko tych funkcji które potrzebujesz!';
$txt['core_settings_item_cd'] = 'Kalendarz';
$txt['core_settings_item_cd_desc'] = 'Włączenie tej funkcji otworzy nowe opcje wyboru użytkownikom wyświetlającym kalendarz, dodawanie i przeglądanie wydarzeń, pokazywanie urodzin w kalendarzu oraz wiele więcej.';
$txt['core_settings_item_cp'] = 'Zaawansowane Pola Profilu';
$txt['core_settings_item_cp_desc'] = 'Opcja pozwala na ukrycie standardowych pól profilu, dodawanie pól profilu do rejestracji oraz tworzenie nowych pól w profilach twojego forum.';
$txt['core_settings_item_k'] = 'Reputacja';
$txt['core_settings_item_k_desc'] = 'Reputacja jest funkcją pokazującą popularność użytkownika. Użytkownicy, gdy mają do tego prawo, mogą podziękować lub nie drugiemu użytkownikowi, w taki sposób zliczana jest popularność.';
$txt['core_settings_item_ml'] = 'Logi Moderacji';
$txt['core_settings_item_ml_desc'] = 'Włączenie logowania moderacji pomoże Ci w śledzeniu wszystkich akcji podejmowanych przez moderatorów na forum.';
$txt['core_settings_item_pm'] = 'Moderowanie Wiadomości';
$txt['core_settings_item_pm_desc'] = 'Moderowanie wiadomości zezwala na wybranie grup oraz działów gdzie wiadomości muszą być zatwierdzone przed ich wyświetleniem. Po włączeniu tej opcji odwiedź sekcję zezwoleń i ustaw odpowiednie zezwolenia danym grupom/użytkownikom.';
$txt['core_settings_item_ps'] = 'Płatna Subskrypcja';
$txt['core_settings_item_ps_desc'] = 'Płatna subskrypcja pozwoli użytkownikom opłacić ich subskrypcję w celu zmiany obecnej grupy do której należy, a także praw dostępu z nią związanych.';
$txt['core_settings_item_rg'] = 'Generowanie Raportów';
$txt['core_settings_item_rg_desc'] = 'Ta opcja administracyjna pozwala na generowanie różnego rodzaju raportów (które mogą być wydrukowane) w celu przywrócenia w łatwy sposób Twoich obecnych ustawień forum - szczególnie przydatne na dużych forach.';
$txt['core_settings_item_sp'] = 'Śledzenie Silników Wyszukiwarek';
$txt['core_settings_item_sp_desc'] = 'Włączenie tej funkcji pozwoli administratorowi na śledzenie silników wyszukiwarek gdy indeksują forum.';
$txt['core_settings_item_w'] = 'System Ostrzeżeń';
$txt['core_settings_item_w_desc'] = 'Funkcja pozwala Administratorom i Moderatorom na wysyłanie ostrzeżeń użytkownikom; zawiera także zaawansowane funkcje dla automatycznego usuwania praw użytkownika gdy poziom ostrzeżenia wzrasta. Uwaga: do pełnego działania wymagana jest funkcja &quot;Moderowanie Wiadomości&quot; i musi być włączona.';
$txt['core_settings_switch_on'] = 'Kliknij aby włączyć';
$txt['core_settings_switch_off'] = 'Kliknij aby wyłączyć';
$txt['core_settings_enabled'] = 'Włączony';
$txt['core_settings_disabled'] = 'Wyłączony';

$txt['languages_lang_name'] = 'Nazwa wyświetlana';
$txt['languages_locale'] = 'Lokalizacja';
$txt['languages_default'] = 'Domyślny';
$txt['languages_character_set'] = 'Strona kodowa';
$txt['languages_users'] = 'Użytkownicy';
$txt['language_settings_writable'] = 'Uwaga: Nie można zapisywać w Settings.php, domyślne ustawienia nie mogą być zapamiętane.';
$txt['edit_languages'] = 'Edycja języków';
$txt['lang_file_not_writable'] = '<strong>Uwaga:</strong> Podstawowy plik języka (%1$s) jest nie zapisywalny. Musisz umożliwić zapis przed dokonaniem zmian.';
$txt['lang_entries_not_writable'] = '<strong>Uwaga:</strong> Plik języka, który chcesz edytować (%1$s) jest nie zapisywalny. Musisz umożliwić zapis przed dokonaniem zmian.';
$txt['languages_ltr'] = 'Od prawej do lewej';

$txt['add_language'] = 'Dodaj język';
$txt['add_language_smf'] = 'Pobierz z Simple Machines';
$txt['add_language_smf_browse'] = 'Wpisz nazwę poszukiwanego języka lub pozostaw puste aby wyszukać wszystkie.';
$txt['add_language_smf_install'] = 'Zainstaluj';
$txt['add_language_smf_found'] = 'Następujące języki zostały znalezione. Kliknij w łącze Zainstaluj obok wybranego języka, zostaniesz przeniesiony do menedżera aktualizacji pakietu aby zainstalować.';
$txt['add_language_error_no_response'] = 'Strona Simple Machines nie odpowiada. Proszę spróbuj ponownie później.';
$txt['add_language_error_no_files'] = 'Żadne pliki nie zostały znalezione.';
$txt['add_language_smf_desc'] = 'Opis';
$txt['add_language_smf_utf8'] = 'UTF-8';
$txt['add_language_smf_version'] = 'Wersja';

$txt['edit_language_entries_primary'] = 'Poniżej najważniejsze ustawienia dla tej paczki językowej.';
$txt['edit_language_entries'] = 'Edytuj plik językowy';
$txt['edit_language_entries_file'] = 'Wybierz plik do edycji';
$txt['languages_dictionary'] = 'Słownik';
$txt['languages_spelling'] = 'Pisownia';
$txt['languages_for_pspell'] = 'To jest dla <a href="http://www.php.net/function.pspell-new" target="_blank" class="new_win">pSpell</a> - jeśli zainstalowany';
$txt['languages_rtl'] = 'Włącz tryb &quot;Od prawej do lewej&quot;';

$txt['lang_file_desc_index'] = 'Ogólne zestawy znaków';
$txt['lang_file_desc_EmailTemplates'] = 'Szablony email';

$txt['languages_download'] = 'Pobierz pakiet językowy';
$txt['languages_download_note'] = 'Ta strona wyświetla listę wszystkich plików, które są zawarte w tym pakiecie językowym oraz parę użytecznych informacji o każdym z nich. Wszystkie zaznaczone pliki zostaną przekopiowane.';
$txt['languages_download_info'] = '<strong>Informacja:</strong>
	<ul class="normallist">
		<li>Pliki, które mają status &quot;Niezapisywalny&quot; nie mogą zostać przekopiowane przez SMF w takim stanie i musisz ręcznie nadać właściwości za pomocą klienta FTP lub wypełnić pola na dole tej strony.</li>
		<li>Informacja o wersji pliku wyświetla ostatnią wersję SMF dla której był on zaktualizowany. Podświetlenie na zielono oznacza, że jest on nowszy niż Twój obecny. Pomarańczowy natomiast oznacza tę samą wersję, a czerwony starszą niż Twoja obecna.</li>
		<li>Jeśli plik już istnieje na Twoim forum, kolumna &quot;Już istnieje&quot; będzie posiadała jedną z dwóch wartości. &quot;Identyczny&quot; oznacza, że plik już istnieje i jest taki sam, więc nie ma potrzeby go podmieniać. &quot;Inny&quot; oznacza, że jego zawartość różni się w jakimś stopniu i zamiana jest prawdopodobnie dobrym rozwiązaniem.</li>
	</ul>';

$txt['languages_download_main_files'] = 'Pliki podstawowe';
$txt['languages_download_theme_files'] = 'Pliki związane ze stylem';
$txt['languages_download_filename'] = 'Nazwa pliku';
$txt['languages_download_dest'] = 'Położenie';
$txt['languages_download_writable'] = 'Zapisywalny';
$txt['languages_download_version'] = 'Wersja';
$txt['languages_download_older'] = 'Masz zainstalowaną najnowszą wersję tego pliku, nadpisanie nie jest zalecane.';
$txt['languages_download_exists'] = 'Już istnieje';
$txt['languages_download_exists_same'] = 'Identyczny';
$txt['languages_download_exists_different'] = 'Inny';
$txt['languages_download_copy'] = 'Kopiuj';
$txt['languages_download_not_chmod'] = 'Nie możesz kontynuować instalacji dopóki nie będzie możliwy zapis wszystkich wybranych plików.';
$txt['languages_download_illegal_paths'] = 'Pakiet zawiera nieprawidłowe ścieżki dostępu - skontaktuj się z Simple Machines';
$txt['languages_download_complete'] = 'Instalacja ukończona';
$txt['languages_download_complete_desc'] = 'Pakiet językowy zainstalowany pomyślnie. Kliknij <a href="%1$s">tutaj</a> aby wrócić do strony języków';
$txt['languages_delete_confirm'] = 'Czy jesteś pewien, że chcesz usunąć ten język?';

?>