<?php
// Version: 2.0; ManagePermissions

$txt['permissions_title'] = 'Zarządzaj zezwoleniami';
$txt['permissions_modify'] = 'Modyfikuj';
$txt['permissions_view'] = 'Pokaż';
$txt['permissions_allowed'] = 'Zezw.';
$txt['permissions_denied'] = 'Pozb.';
$txt['permission_cannot_edit'] = '<strong>Uwaga:</strong> Nie możesz modyfikować zezwoleń tego profilu jako że jest on predefiniowany i został domyślnie uwzględnionym w oprogramowaniu forum. Jeśli chcesz zmienić zezwolenia tego profilu, musisz najpierw utworzyć jego duplikat. Możesz zrealizować to zadanie poprzez kliknięcie <a href="%1$s">tutaj</a>.';

$txt['permissions_for_profile'] = 'Zezwolenia dla Profilu';
$txt['permissions_boards_desc'] = 'Poniższa lista pokazuje który zestaw zezwoleń został przydzielony do poszczególnych działów na forum. Możesz modyfikować przydzielone profile zezwoleń przez kliknięcie nazwy działu lub wybranie &quot;Modyfikuj Wszystkie&quot; u dołu strony. Zaś aby zmodyfikować sam profil wystarczy kliknąć na jego nazwę.';
$txt['permissions_board_all'] = 'Modyfikuj Wszystkie';
$txt['permission_profile'] = 'Profil Zezwoleń';
$txt['permission_profile_desc'] = 'Którego <a href="%1$s">zestawu zezwoleń</a> powinien używać dział.';
$txt['permission_profile_inherit'] = 'Dziedzicz z działu nadrzędnego';

$txt['permissions_profile'] = 'Profil';
$txt['permissions_profiles_desc'] = 'Profile zezwoleń są przypisane do indywidualnych działów aby umożliwić ci łatwiejsze zarządzanie ustawieniami bezpieczeństwa. W tym obszarze możesz tworzyć, modyfikować i usuwać zezwolenia profili.';
$txt['permissions_profiles_change_for_board'] = 'Edytuj Profil Zezwoleń dla: &quot;%1$s&quot;';
$txt['permissions_profile_default'] = 'Standardowy';
$txt['permissions_profile_no_polls'] = 'Brak Ankiet';
$txt['permissions_profile_reply_only'] = 'Tylko Odpowiedzi';
$txt['permissions_profile_read_only'] = 'Tylko Czytaj';

$txt['permissions_profile_rename'] = 'Zmień nazwę';
$txt['permissions_profile_edit'] = 'Edytuj Profile';
$txt['permissions_profile_new'] = 'Nowy Profil';
$txt['permissions_profile_new_create'] = 'Stwórz';
$txt['permissions_profile_name'] = 'Nazwa Profilu';
$txt['permissions_profile_used_by'] = 'Użyty przez';
$txt['permissions_profile_used_by_one'] = 'Jeden Dział';
$txt['permissions_profile_used_by_many'] = '%1$d Działów';
$txt['permissions_profile_used_by_none'] = 'Żaden Dział';
$txt['permissions_profile_do_edit'] = 'Edytuj';
$txt['permissions_profile_do_delete'] = 'Usuń';
$txt['permissions_profile_copy_from'] = 'Kopiuj zezwolenia z';

$txt['permissions_includes_inherited'] = 'Grupy Dziedziczące';

$txt['permissions_all'] = 'wszystkie';
$txt['permissions_none'] = 'żadne';
$txt['permissions_set_permissions'] = 'Ustaw zezwolenia';

$txt['permissions_advanced_options'] = 'Opcje Zaawansowane';
$txt['permissions_with_selection'] = 'Zaznaczone';
$txt['permissions_apply_pre_defined'] = 'Ustaw predefiniowany zestaw zezwoleń';
$txt['permissions_select_pre_defined'] = 'Wybierz zestaw';
$txt['permissions_copy_from_board'] = 'Kopiuj zezwolenia z tego działu';
$txt['permissions_select_board'] = 'Wybierz dział';
$txt['permissions_like_group'] = 'Ustaw zezwolenia jak w tej grupie';
$txt['permissions_select_membergroup'] = 'Wybierz grupę użytkowników';
$txt['permissions_add'] = 'Dodaj zezwolenie';
$txt['permissions_remove'] = 'Usuń zezwolenie';
$txt['permissions_deny'] = 'Pozbaw zezwolenia';
$txt['permissions_select_permission'] = 'Wybierz pozwolenie';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'Możesz wybrać tylko jedną akcję do modyfikacji zezwoleń';
$txt['permissions_no_action'] = 'Nie wybrano żadnej akcji';
$txt['permissions_deny_dangerous'] = 'Zamierzasz pozbawić grupę jednego lub kilku zezwoleń.\\nTo może być niebezpieczne i spowodować nieoczekiwane rezultaty jeśli nie upewniłeś się, że nikt nie jest \\"przypadkowo\\" w grupie albo grupach, których pozbawiasz zezwoleń.\\n\\nCzy na pewno chcesz kontynuować?';

$txt['permissions_modify_group'] = 'Modyfikuj grupę';
$txt['permissions_general'] = 'Zezwolenia ogólne';
$txt['permissions_board'] = 'Ogólne zezwolenia działów';
$txt['permissions_board_desc'] = '<strong>Uwaga</strong>: zmiana tych zezwoleń będzie dotyczyć wszystkich działów aktualnie przydzielonych do &quot;Standardowego&quot; profilu zezwoleń. Zaś na działy nie używające &quot;Standardowego&quot; profilu zezwoleń zmiany na tej stronie nie wpłyną.';
$txt['permissions_commit'] = 'Zachowaj zmiany';
$txt['permissions_on'] = 'w dziale';
$txt['permissions_local_for'] = 'Zezwolenia lokalne dla grupy';
$txt['permissions_option_on'] = 'Z';
$txt['permissions_option_off'] = 'N';
$txt['permissions_option_deny'] = 'P';
$txt['permissions_option_desc'] = 'Dla każdego zezwolenia możesz wybrać \'Zezwalaj\' (Z), \'Nie zezwalaj\' (N) lub <span style="color: red;">\'Pozbaw\' (P)</span>.<br /><br />Pamiętaj, że jeśli pozbawisz grupę jakiegoś zezwolenia, każdy z członków - moderatorzy również nie będzie mógł wykonać danej czynności.<br />Dlatego też powinieneś używać zezwoleń bardzo ostrożnie, tylko kiedy jest to <strong>konieczne</strong>. Opcja \'Nie zezwalaj\' zabrania, chyba że użytkownik posiada dane zezwolenie w inny sposób (np. jest moderatorem).';
$txt['permissions_change_view'] = 'Zmień Widok';
$txt['permissions_view_simple'] = 'Prosty';
$txt['permissions_view_classic'] = 'Klasyczny';

$txt['permissiongroup_general'] = 'Ogólne';
$txt['permissionname_view_stats'] = 'Przeglądanie statystyk forum';
$txt['permissionhelp_view_stats'] = 'Ta strona zawiera podsumowanie wszystkich statystyk forum, np. liczba użytkowników, ilość wiadomości na dzień i kilka statystyk 10 najlepszych. Po zezwoleniu na jej przeglądanie, odnośnik (\'[Więcej statystyk]\') zostanie dodany na dole indeksu działów.';
$txt['permissionname_view_mlist'] = 'Przeglądanie listy grup i użytkowników ';
$txt['permissionhelp_view_mlist'] = 'Lista użytkowników pokazuje wszystkich członków twojego forum. Listę można sortować i przeszukiwać. Odnośnik do niej jest umieszczony w indeksie działów, można się też do niej dostać poprzez kliknięcie na liczbę zarejestrowanych użytkowników.';
$txt['permissionname_who_view'] = 'Przeglądanie listy użytkowników online';
$txt['permissionhelp_who_view'] = 'Lista ta pokazuje wszystkich użytkowników będących obecnie na forum i czynności przez nich wykonywane. To zezwolenie odniesie skutek tylko w przypadku włączenia listy w \'funkcjach i opcjach\'. Do \'listy użytkowników online\' możesz dostać się klikając na odnośnik w sekcji \'użytkownicy online\' w indeksie działów.';
$txt['permissionname_search_posts'] = 'Szukanie wątków i wiadomości';
$txt['permissionhelp_search_posts'] = 'Użytkownicy będą mogli przeszukiwać działy, do których mają dostęp. Po zezwoleniu na przeszukiwanie, do standardowych przycisków dodany zostanie przycisk \'Szukaj\'.';
$txt['permissionname_karma_edit'] = 'Modyfikacja reputacji innych użytkowników';
$txt['permissionhelp_karma_edit'] = 'Reputacja pokazuje popularność użytkownika. Aby jej używać musisz ją najpierw włączyć w \'Opcjach forum\'. Dzięki temu użytkownicy będą mogli na siebie głosować, zezwolenie to nie daje możliwości głosu gościom.';

$txt['permissiongroup_pm'] = 'Prywatne wiadomości';
$txt['permissionname_pm_read'] = 'Czytanie prywatnych wiadomości';
$txt['permissionhelp_pm_read'] = 'Użytkownicy będą mogli czytać swoje prywatne wiadomości. Użytkownik nie może wysyłać prywatnych wiadomości jeśli to zezwolenie jest wyłączone.';
$txt['permissionname_pm_send'] = 'Wysyłanie prywatnych wiadomości';
$txt['permissionhelp_pm_send'] = 'Użytkownicy będą mogli wysyłać prywatne wiadomości. Wymaga zezwolenia na czytanie prywatnych wiadomości.';

$txt['permissiongroup_calendar'] = 'Kalendarz';
$txt['permissionname_calendar_view'] = 'Przeglądanie kalendarza';
$txt['permissionhelp_calendar_view'] = 'Kalendarz pokazuje urodziny, wydarzenia i święta. Po włączeniu tego zezwolenia użytkownicy uzyskają dostęp do kalendarza. Do standardowych przycisków dodany zostanie przycisk \'Kalendarz\', a na dole strony głównej wyświetlana będzie lista nadchodzących urodzin, wydarzeń i świąt. Musisz najpierw włączyć funkcję kalendarza w sekcji administracyjnej \'Cechy podstawowe\'.';
$txt['permissionname_calendar_post'] = 'Dodawanie wydarzeń do kalendarza';
$txt['permissionhelp_calendar_post'] = 'Wydarzenie jest wątkiem skojarzonym z konkretną datą lub okresem. Dodawanie wydarzeń odbywa się poprzez kalendarz, użytkownik może to zrobić tylko, jeżeli ma zezwolenie na wysyłanie nowych wątków.';
$txt['permissionname_calendar_edit'] = 'Modyfikacja wydarzeń w kalendarzu';
$txt['permissionhelp_calendar_edit'] = 'Wydarzenie jest wątkiem skojarzonym z konkretną datą lub okresem. Wydarzenie może być zmodyfikowane poprzez kliknięcie na czerwoną gwiazdkę (*) obok wydarzenia w kalendarzu. Użytkownik musi mieć zezwolenie na modyfikację pierwszej wiadomości w wątku powiązanego z wydarzeniem, aby mógł je modyfikować.';
$txt['permissionname_calendar_edit_own'] = 'Własne wydarzenia';
$txt['permissionname_calendar_edit_any'] = 'Wszystkie wydarzenia';

$txt['permissiongroup_maintenance'] = 'Administracja forum';
$txt['permissionname_admin_forum'] = 'Administracja forum i bazą danych';
$txt['permissionhelp_admin_forum'] = 'Użytkownik będzie mógł zmieniać ustawienia forum i stylu, zarządzać pakietami i używać narzędzi administracji bazą danych. Uważaj przy dawaniu tego zezwolenia, ponieważ daje ono bardzo duże możliwości.';
$txt['permissionname_manage_boards'] = 'Zarządzanie działami i kategoriami';
$txt['permissionhelp_manage_boards'] = 'Ta opcja pozwala na dodawanie, modyfikację i usuwanie działów i kategorii.';
$txt['permissionname_manage_attachments'] = 'Zarządzanie załącznikami i awatarami';
$txt['permissionhelp_manage_attachments'] = 'Daje dostęp do centrum zarządzania załącznikami, gdzie znajduje się lista wszystkich załączników i awatarów.';
$txt['permissionname_manage_smileys'] = 'Zarządzanie uśmieszkami';
$txt['permissionhelp_manage_smileys'] = 'Ta opcja daje dostęp do centrum zarządzania uśmieszkami. Można tam dodawać, modyfikować i usuwać uśmieszki i zestawy uśmieszków.';
$txt['permissionname_edit_news'] = 'Modyfikowanie aktualności';
$txt['permissionhelp_edit_news'] = 'Funkcja aktualności pozwala na wyświetlanie losowo wybranej aktualności na każdej stronie forum. Funkcja ta musi być włączona w ustawieniach forum.';
$txt['permissionname_access_mod_center'] = 'Dostęp do centrum moderacji';
$txt['permissionhelp_access_mod_center'] = 'Z tym uprawnieniem każdy członek grupy ma dostęp do centrum moderacji gdzie będzie miał dostęp do funkcjonalnej i łatwej moderacji. Należy pamiętać, że to samo w sobie nie przyznaje żadnych przywilejów moderacji.';

$txt['permissiongroup_member_admin'] = 'Administracja użytkownikami';
$txt['permissionname_moderate_forum'] = 'Moderacja użytkownikami forum';
$txt['permissionhelp_moderate_forum'] = 'Zakres tego zezwolenia obejmuje wszystkie ważne funkcje moderacji użytkowników:<ul><li>dostęp do zarządzania rejestracją</li><li>dostęp do ekranu przeglądania/usuwania użytkowników</li><li>szczegółowe informacje z profili, włączając w to śledzenie IP/użytkownika i (ukryty) status online</li><li>aktywacja kont</li><li>dostawanie powiadomień o zatwierdzeniu i zatwierdzanie kont</li><li>możliwość wysyłania PW nawet do ignorujących je użytkowników</li><li>kilka innych pomniejszych rzeczy</li></ul>';
$txt['permissionname_manage_membergroups'] = 'Zarządzanie i przyznawanie grup użytkowników';
$txt['permissionhelp_manage_membergroups'] = 'Ta opcja pozwala na modyfikację i przyznawanie innym grup użytkowników.';
$txt['permissionname_manage_permissions'] = 'Zarządzanie zezwoleniami';
$txt['permissionhelp_manage_permissions'] = 'Ta opcja pozwala na modyfikację wszystkich zezwoleń grupy użytkowników, globalnie lub dla poszczególnych działów.';
$txt['permissionname_manage_bans'] = 'Zarządzanie listą banów';
$txt['permissionhelp_manage_bans'] = 'Ta opcja pozwala na dodawanie i usuwanie nazw użytkowników, adresów IP, nazw hostów i adresów email do listy banowanych użytkowników. Pozwala również na przeglądanie i usuwanie wpisów z rejestru banowanych użytkowników, którzy próbowali się zalogować.';
$txt['permissionname_send_mail'] = 'Wysyłanie do użytkowników wiadomości email i PW przez forum';
$txt['permissionhelp_send_mail'] = 'Ta opcja pozwala na jednoczesne wysyłanie wiadomości email i prywatnych wiadomości do wszystkich użytkowników lub poszczególnych grup użytkowników (wysyłanie PW wymaga udzielenia zezwolenia: \'Wysyłanie prywatnych wiadomości\').';
$txt['permissionname_issue_warning'] = 'Przyznawanie Ostrzeżeń Użytkownikom';
$txt['permissionhelp_issue_warning'] = 'Przyznawanie ostrzeżeń użytkownikom forum i zmiana ich Poziomu Ostrzeżeń. Wymaga aktywacji Systemu Ostrzeżeń Użytkowników.';

$txt['permissiongroup_profile'] = 'Profile użytkowników';
$txt['permissionname_profile_view'] = 'Przeglądanie podsumowania i statystyk profilu';
$txt['permissionhelp_profile_view'] = 'Umożliwia dostęp do podsumowania ustawień profilu, kilku statystyk i wszystkich wysłanych wiadomości, po kliknięciu na nazwę danego użytkownika.';
$txt['permissionname_profile_view_own'] = 'Własny profil';
$txt['permissionname_profile_view_any'] = 'Wszystkie profile';
$txt['permissionname_profile_identity'] = 'Modyfikacja ustawień konta';
$txt['permissionhelp_profile_identity'] = 'Ustawienia konta dotyczą danych takich jak hasło, adres email, grupa użytkowników i preferowany język.';
$txt['permissionname_profile_identity_own'] = 'Własny profil';
$txt['permissionname_profile_identity_any'] = 'Wszystkie profile';
$txt['permissionname_profile_extra'] = 'Modyfikacja dodatkowych ustawień profilu';
$txt['permissionhelp_profile_extra'] = 'Dodatkowe ustawienia dotyczą m.in. awatarów, preferencji stylu, ustawienia powiadomień i prywatnych wiadomości.';
$txt['permissionname_profile_extra_own'] = 'Własny profil';
$txt['permissionname_profile_extra_any'] = 'Wszystkie profile';
$txt['permissionname_profile_title'] = 'Modyfikacja własnych tytułów';
$txt['permissionhelp_profile_title'] = 'Własny tytuł wyświetlany jest w wątku pod nazwami użytkowników, którzy go posiadają.';
$txt['permissionname_profile_title_own'] = 'Własny profil';
$txt['permissionname_profile_title_any'] = 'Wszystkie profile';
$txt['permissionname_profile_remove'] = 'Usuwanie konta';
$txt['permissionhelp_profile_remove'] = 'Zezwala użytkownikowi na usunięcie swojego (lub każdego) konta.';
$txt['permissionname_profile_remove_own'] = 'Własne konto';
$txt['permissionname_profile_remove_any'] = 'Wszystkie konta';
$txt['permissionname_profile_server_avatar'] = 'Wybieranie awatarów z galerii';
$txt['permissionhelp_profile_server_avatar'] = 'Kiedy opcja jest włączona, umożliwia użytkownikowi wybranie awatara z kolekcji awatarów zainstalowanych na serwerze.';
$txt['permissionname_profile_upload_avatar'] = 'Wysyłanie awatara na serwer';
$txt['permissionhelp_profile_upload_avatar'] = 'To zezwolenie umożliwi użytkownikowi wysłanie własnego awatara na serwer.';
$txt['permissionname_profile_remote_avatar'] = 'Używanie zewnętrznego awatara';
$txt['permissionhelp_profile_remote_avatar'] = 'Awatary z zewnętrznych serwerów mogą wydłużyć czas generowania strony, możliwe jest więc pozbawienie możliwości ich użycia przez pewne grupy użytkowników. ';

$txt['permissiongroup_general_board'] = 'Ogólne';
$txt['permissionname_moderate_board'] = 'Moderacja działu';
$txt['permissionhelp_moderate_board'] = 'Dzięki zezwoleniu na moderację działu, moderator staje się prawdziwym moderatorem, czyli może m.in. odpowiadać na zamknięte wątki, zmieniać czas zakończenia ankiety i obejrzeć jej wyniki.';

$txt['permissiongroup_topic'] = 'Wątki';
$txt['permissionname_post_new'] = 'Wysyłanie nowych wątków';
$txt['permissionhelp_post_new'] = 'Użytkownik może wysyłać nowe wątki. Ta opcja nie zawiera zezwolenia na odpowiadanie na wątki.';
$txt['permissionname_merge_any'] = 'Scalanie wszystkich wątków';
$txt['permissionhelp_merge_any'] = 'Scalanie dwóch lub więcej wątków w jeden. Wiadomości zostaną posegregowane według daty wysłania. Użytkownik może scalać tylko wątki z działów,  w których dane mu było zezwolenie scalania. Aby móc scalać wiele wątków jednocześnie, użytkownik musi włączyć szybką moderację w ustawieniach swojego profilu.';
$txt['permissionname_split_any'] = 'Dzielenie wszystkich wątków';
$txt['permissionhelp_split_any'] = 'Rozdzielenie jednego wątku na dwa osobne.';
$txt['permissionname_send_topic'] = 'Wysyłanie wątków znajomym';
$txt['permissionhelp_send_topic'] = 'Użytkownik może wysłać znajomym wątek przez email, poprzez wpisanie ich adresu. Zezwolenie to umożliwia również dodawanie wiadomości.';
$txt['permissionname_make_sticky'] = 'Przyklejanie wątków';
$txt['permissionhelp_make_sticky'] = 'Przyklejone wątki będą zawsze na górze listy wątków. Są one przydatne jako ogłoszenia i inne ważne wiadomości.';
$txt['permissionname_move'] = 'Przenoszenie wątków';
$txt['permissionhelp_move'] = 'Przenoszenie wątku z jednego do drugiego działu. Użytkownik może wybrać tylko działy docelowe, do których ma dostęp.';
$txt['permissionname_move_own'] = 'Własne wątki';
$txt['permissionname_move_any'] = 'Wszystkie wątki';
$txt['permissionname_lock'] = 'Zamykanie wątków';
$txt['permissionhelp_lock'] = 'Użytkownik może zamykać wątek, aby nikt nie mógł na niego odpowiedzieć. Tylko użytkownicy z zezwoleniem \'Moderacja działu\' mogą odpowiadać na zamknięte wątki.';
$txt['permissionname_lock_own'] = 'Własne wątki';
$txt['permissionname_lock_any'] = 'Wszystkie wątki';
$txt['permissionname_remove'] = 'Usuwanie wątków';
$txt['permissionhelp_remove'] = 'Usuwanie całych wątków. Zauważ, że to zezwolenie nie pozwala na usuwanie pojedynczych wiadomości w wątku.';
$txt['permissionname_remove_own'] = 'Własne wiadomości';
$txt['permissionname_remove_any'] = 'Wszystkie wiadomości';
$txt['permissionname_post_reply'] = 'Odpowiadanie na wątki';
$txt['permissionhelp_post_reply'] = 'Ta opcja pozwala na wysyłanie odpowiedzi na wątki.';
$txt['permissionname_post_reply_own'] = 'Własne wątki';
$txt['permissionname_post_reply_any'] = 'Wszystkie wątki';
$txt['permissionname_modify_replies'] = 'Modyfikowanie odpowiedzi na własne wątki';
$txt['permissionhelp_modify_replies'] = 'Użytkownik może modyfikować wszystkie odpowiedzi w wątku, który sam zaczął.';
$txt['permissionname_delete_replies'] = 'Usuwanie odpowiedzi do własnych wątków';
$txt['permissionhelp_delete_replies'] = 'To zezwolenie umożliwia użytkownikowi który rozpoczął temat usuwać wszelkie odpowiedzi w tym temacie';
$txt['permissionname_announce_topic'] = 'Ogłaszanie wątku';
$txt['permissionhelp_announce_topic'] = 'Ta opcja pozwala na wysłanie do wszystkich użytkowników lub poszczególnych grup użytkowników wiadomości email ogłaszającej wysłanie danego wątku.';

$txt['permissiongroup_post'] = 'Wiadomości';
$txt['permissionname_delete'] = 'Usuwanie wiadomości';
$txt['permissionhelp_delete'] = 'Usuwanie wiadomości. Ta opcja nie zezwala na usuwanie pierwszej wiadomości w wątku.';
$txt['permissionname_delete_own'] = 'Własne wątki';
$txt['permissionname_delete_any'] = 'Wszystkie wątki';
$txt['permissionname_modify'] = 'Modyfikowanie wiadomości';
$txt['permissionhelp_modify'] = 'Zmienianie zawartości wiadomości.';
$txt['permissionname_modify_own'] = 'Własne wiadomości';
$txt['permissionname_modify_any'] = 'Wszystkie wiadomości';
$txt['permissionname_report_any'] = 'Zgłaszanie wiadomości moderatorom';
$txt['permissionhelp_report_any'] = 'Dodaje do każdej wiadomości odnośnik, pozwalający użytkownikowi zgłosić ją do moderacji. Po zgłoszeniu wszyscy moderatorzy otrzymają wiadomość email z odnośnikiem do danej wiadomości i opisem problemu (przez zgłaszającego użytkownika).';

$txt['permissiongroup_poll'] = 'Ankiety';
$txt['permissionname_poll_view'] = 'Oglądanie ankiet';
$txt['permissionhelp_poll_view'] = 'Użytkownik może zobaczyć ankietę. Bez tego zezwolenia, zobaczy tylko wątek.';
$txt['permissionname_poll_vote'] = 'Głosowanie';
$txt['permissionhelp_poll_vote'] = 'Zarejestrowany użytkownik może głosować. To zezwolenie nie odnosi się do gości.';
$txt['permissionname_poll_post'] = 'Wysyłanie ankiet';
$txt['permissionhelp_poll_post'] = 'Użytkownik może wysyłać nowe ankiety. Ponieważ ankiety są specjalnym typem wątków, nie można skorzystać z tego zezwolenia bez posiadania zezwolenia na wysyłanie nowych wątków.';
$txt['permissionname_poll_add'] = 'Dodawanie ankiet do wątków';
$txt['permissionhelp_poll_add'] = 'Użytkownik może dodać ankietę do wcześniej wysłanego wątku. Wymaga posiadania zezwolenia na modyfikację pierwszej wiadomości w wątku.';
$txt['permissionname_poll_add_own'] = 'Własne wątki';
$txt['permissionname_poll_add_any'] = 'Wszystkie wątki';
$txt['permissionname_poll_edit'] = 'Modyfikowanie ankiet';
$txt['permissionhelp_poll_edit'] = 'Użytkownik może modyfikować opcje ankiety i ją resetować. Aby móc zmienić maksymalną liczbę głosów i czas zakończenia ankiety, użytkownik musi posiadać zezwolenie na moderowanie działu.';
$txt['permissionname_poll_edit_own'] = 'Własne ankiety';
$txt['permissionname_poll_edit_any'] = 'Wszystkie ankiety';
$txt['permissionname_poll_lock'] = 'Zamykanie ankiet';
$txt['permissionhelp_poll_lock'] = 'Po zamknięciu, nie można więcej głosować w danej ankiecie.';
$txt['permissionname_poll_lock_own'] = 'Własne ankiety';
$txt['permissionname_poll_lock_any'] = 'Wszystkie ankiety';
$txt['permissionname_poll_remove'] = 'Usuwanie ankiet';
$txt['permissionhelp_poll_remove'] = 'Ta opcja pozwala na usuwanie ankiet.';
$txt['permissionname_poll_remove_own'] = 'Własne ankiety';
$txt['permissionname_poll_remove_any'] = 'Wszystkie ankiety';

$txt['permissiongroup_approval'] = 'Moderacja wiadomości';
$txt['permissionname_approve_posts'] = 'Zatwierdź pozycje oczekujące na moderację';
$txt['permissionhelp_approve_posts'] = 'To nadaje użytkownikowi uprawnienia do zatwierdzania wszystkich niezatwierdzonych pozycji w dziale.';
$txt['permissionname_post_unapproved_replies'] = 'Wysyłaj odpowiedzi na wątki, ale ukryj dopóki nie zostaną zatwierdzone';
$txt['permissionhelp_post_unapproved_replies'] = 'To uprawnienie umożliwia użytkownikowi napisanie w wątku odpowiedzi, która nie będzie widoczna dopóki nie zostanie zatwierdzona przez moderatora.';
$txt['permissionname_post_unapproved_replies_own'] = 'Własny wątek';
$txt['permissionname_post_unapproved_replies_any'] = 'Każdy wątek';
$txt['permissionname_post_unapproved_topics'] = 'Wysyłaj nowe wątki, ale ukryj dopóki nie zostaną zatwierdzone';
$txt['permissionhelp_post_unapproved_topics'] = 'To uprawnienie umożliwia użytkownikowi napisanie wątku, który będzie wymagał zatwierdzenia zanim zostanie widoczny.';
$txt['permissionname_post_unapproved_attachments'] = 'Wysyłaj załączniki, ale ukryj dopóki nie zostaną zatwierdzone';
$txt['permissionhelp_post_unapproved_attachments'] = 'To uprawnienie umożliwia użytkownikowi załączanie plików w swoich wiadomościach, które będą wtedy wymagały zatwierdzenia zanim zostaną widoczne dla innych użytkowników.';

$txt['permissiongroup_notification'] = 'Powiadomienia';
$txt['permissionname_mark_any_notify'] = 'Zamawianie powiadomień o odpowiedziach';
$txt['permissionhelp_mark_any_notify'] = 'Użytkownik może być powiadamiany o nowych odpowiedziach na wybrane przez siebie wątki.';
$txt['permissionname_mark_notify'] = 'Zamawianie powiadomień o nowych wątkach';
$txt['permissionhelp_mark_notify'] = 'Użytkownik może być powiadamiany o nowych wątkach wysłanych w wybranych przez siebie działach.';

$txt['permissiongroup_attachment'] = 'Załączniki';
$txt['permissionname_view_attachments'] = 'Oglądanie załączników';
$txt['permissionhelp_view_attachments'] = 'Załączniki to pliki dołączane do wiadomości. Ta opcja może być włączona i skonfigurowana w \'funkcjach i opcjach\'. Ponieważ dostęp do załączników nie jest bezpośredni, możesz pozbawić dostępu do nich użytkownikom bez tego zezwolenia.';
$txt['permissionname_post_attachment'] = 'Wysyłanie załączników';
$txt['permissionhelp_post_attachment'] = 'Załączniki to pliki dołączane do wiadomości. Jedna wiadomość może zawierać kilka załączników.';

$txt['permissiongroup_simple_view_basic_info'] = 'Podstawowe funkcje forum';
$txt['permissiongroup_simple_use_pm_system'] = 'Kontakt z użytkownikami za pomocą systemu prywatnych wiadomości';
$txt['permissiongroup_simple_post_calendar'] = 'Dodawanie wydarzeń do kalendarza';
$txt['permissiongroup_simple_edit_profile'] = 'Personalizacja profilów';
$txt['permissiongroup_simple_delete_account'] = 'Usuwanie kont';
$txt['permissiongroup_simple_use_avatar'] = 'Wybieranie lub przesyłanie awatarów';
$txt['permissiongroup_simple_moderate_general'] = 'Moderacja całego forum';
$txt['permissiongroup_simple_administrate'] = 'Wykonywanie obowiązków administracyjnych';

$txt['permissionname_simple_calendar_edit_own'] = 'Modyfikowanie własnych wydarzeń w kalendarzu';
$txt['permissionname_simple_calendar_edit_any'] = 'Modyfikowanie cudzych wydarzeń w kalendarzu';
$txt['permissionname_simple_profile_view_own'] = 'Przeglądanie własnego profilu';
$txt['permissionname_simple_profile_view_any'] = 'Przeglądanie innych profili';
$txt['permissionname_simple_profile_identity_own'] = 'Modyfikowanie własnych ustawień konta';
$txt['permissionname_simple_profile_identity_any'] = 'Modyfikowanie ustawień cudzych kont';
$txt['permissionname_simple_profile_extra_own'] = 'Modyfikowanie dodatkowych opcji własnego profilu';
$txt['permissionname_simple_profile_extra_any'] = 'Modyfikowanie dodatkowych opcji cudzych profili';
$txt['permissionname_simple_profile_title_own'] = 'Wybieranie tytułu osobistego';
$txt['permissionname_simple_profile_title_any'] = 'Modyfikowanie tytułów osobistych innych użytkowników';
$txt['permissionname_simple_profile_remove_own'] = 'Usuwanie własnego konta';
$txt['permissionname_simple_profile_remove_any'] = 'Usuwanie cudzego konta';

$txt['permissiongroup_simple_make_unapproved_posts'] = 'Wysyłać wątki i odpowiedzi do działów <span style="text-decoration: underline">tylko</span> po ich zatwierdzeniu';
$txt['permissiongroup_simple_make_posts'] = 'Wysyłanie wątków i odpowiedzi do działów';
$txt['permissiongroup_simple_post_polls'] = 'Zakładanie nowych ankiety';
$txt['permissiongroup_simple_participate'] = 'Przeglądanie dodatkowej zawartości działów';
$txt['permissiongroup_simple_modify'] = 'Modyfikowanie własnych wiadomości';
$txt['permissiongroup_simple_notification'] = 'Zamawianie powiadomień';
$txt['permissiongroup_simple_attach'] = 'Wysyłanie załączników';
$txt['permissiongroup_simple_moderate'] = 'Moderacja działów';

$txt['permissionname_simple_post_unapproved_replies_own'] = 'Wysyłanie odpowiedzi na wątek - ale wymagaj zatwierdzenia';
$txt['permissionname_simple_post_unapproved_replies_any'] = 'Wysyłanie odpowiedzi na każdy wątek - ale wymagaj zatwierdzenia';
$txt['permissionname_simple_post_reply_own'] = 'Wysyłanie odpowiedzi na wątki które zaczęli';
$txt['permissionname_simple_post_reply_any'] = 'Wysyłanie odpowiedzi na każdy wątek';
$txt['permissionname_simple_move_own'] = 'Przesuwanie własnych wątków';
$txt['permissionname_simple_move_any'] = 'Przesuwanie cudzych wątków';
$txt['permissionname_simple_lock_own'] = 'Zamykanie własnych wątków';
$txt['permissionname_simple_lock_any'] = 'Zamykanie cudzych wątków';
$txt['permissionname_simple_remove_own'] = 'Usuwanie własnych wątków';
$txt['permissionname_simple_remove_any'] = 'Usuwanie cudzych wątków';
$txt['permissionname_simple_delete_own'] = 'Usuwanie własnych wiadomości';
$txt['permissionname_simple_delete_any'] = 'Usuwanie cudzych wiadomości';
$txt['permissionname_simple_modify_own'] = 'Modyfikowanie własnych wiadomości';
$txt['permissionname_simple_modify_any'] = 'Modyfikowanie cudzych wiadomości';
$txt['permissionname_simple_poll_add_own'] = 'Dodawanie ankiet do własnego wątku';
$txt['permissionname_simple_poll_add_any'] = 'Dodawanie ankiet do każdego wątku';
$txt['permissionname_simple_poll_edit_own'] = 'Edytowanie własnych ankiet';
$txt['permissionname_simple_poll_edit_any'] = 'Edytowanie cudzych ankiet';
$txt['permissionname_simple_poll_lock_own'] = 'Zamykanie własnych ankiet';
$txt['permissionname_simple_poll_lock_any'] = 'Zamykanie cudzych ankiet';
$txt['permissionname_simple_poll_remove_own'] = 'Usuwanie własnych ankiet';
$txt['permissionname_simple_poll_remove_any'] = 'Usuwanie cudzych ankiet';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'Ustawienia uprawnień';
$txt['groups_manage_permissions'] = 'Grupy użytkowników którym wolno zarządzać uprawnieniami';
$txt['permission_settings_submit'] = 'Zapisz';
$txt['permission_settings_enable_deny'] = 'Włącz możliwość odmowy uprawnień';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'Włączenie tej opcji zmieni wszystkie uprawnienia zabraniające na nie zezwalające';
$txt['permission_by_board_desc'] = 'Możesz tutaj ustawić czy dział używa uprawnień globalnych czy wymaga ich dostosowania. Używanie uprawnień lokalnych oznacza, że dla tego działu możesz ustawić każdej grupie użytkowników różne prawa.';
$txt['permission_settings_desc'] = 'Tutaj możesz zobaczyć uprawnienia poszczególnych użytkowników i je zmienić, a także ustawić stopień zaawansowania systemu uprawnień.';
$txt['permission_settings_enable_postgroups'] = 'Włącz opcję różnych uprawnień dla grup opartych o ilość wypowiedzi';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'Wyłączenie tego ustawienia będzie oznaczać usunięcie uprawnień aktualnie przydzielonych grupom automatycznie przydzielanym według ilości wypowiedzi.';

$txt['permissions_post_moderation_desc'] = 'Na tej stronie z łatwością możesz zmienić, które grupy mają moderowane wiadomości dla poszczególnych profili zezwoleń.';
$txt['permissions_post_moderation_deny_note'] = 'Zauważ, że od kiedy masz aktywne uprawnienia zaawansowane, nie możesz zastosować &quot;odmowy&quot; uprawnień z tej strony. Edytuj uprawnienia bezpośrednio, jeśli chcesz zastosować odmowę uprawnień.';
$txt['permissions_post_moderation_select'] = 'Wybierz Profil';
$txt['permissions_post_moderation_new_topics'] = 'Nowe Wątki';
$txt['permissions_post_moderation_replies_own'] = 'Własne Odpowiedzi';
$txt['permissions_post_moderation_replies_any'] = 'Wszystkie Odpowiedzi';
$txt['permissions_post_moderation_attachments'] = 'Załączniki';
$txt['permissions_post_moderation_legend'] = 'Legenda';
$txt['permissions_post_moderation_allow'] = 'Może tworzyć';
$txt['permissions_post_moderation_moderate'] = 'Może tworzyć, ale wymaga zatwierdzenia';
$txt['permissions_post_moderation_disallow'] = 'Nie może tworzyć';
$txt['permissions_post_moderation_group'] = 'Grupa';

$txt['auto_approve_topics'] = 'Wysyłać nowe wątki, bez zatwierdzania';
$txt['auto_approve_replies'] = 'Wysyłać odpowiedzi w wątkach, bez zatwierdzania';
$txt['auto_approve_attachments'] = 'Wysyłać załączniki, bez zatwierdzania';

?>