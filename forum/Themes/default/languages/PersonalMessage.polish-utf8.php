<?php
// Version: 2.0; PersonalMessage

global $context;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['pm_inbox'] = 'Prywatne Wiadomości';
$txt['send_message'] = 'Wyślij wiadomość';
$txt['pm_add'] = 'Dodaj';
$txt['make_bcc'] = 'Dodaj UDW';
$txt['pm_to'] = 'Do';
$txt['pm_bcc'] = 'UDW';
$txt['inbox'] = 'Odebrane';
$txt['conversation'] = 'Rozmowa';
$txt['messages'] = 'Wiadomości';
$txt['sent_items'] = 'Wysłane';
$txt['new_message'] = 'Nowa wiadomość';
$txt['delete_message'] = 'Usuń wiadomości';
// Don't translate "PMBOX" in this string.
$txt['delete_all'] = 'Usuń wszystkie wiadomości w swojej skrzynce.';
$txt['delete_all_confirm'] = 'Czy na pewno chcesz usunąć wszystkie wiadomości?';
$txt['recipient'] = 'Odbiorca';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt['new_pm_subject'] = 'Nowa Prywatna Wiadomość: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt['pm_email'] = 'SENDER z ' . $context['forum_name'] . ' wysłał do Ciebie wiadomość.' . "\n\n" . 'UWAGA: Pamiętaj, to jest tylko powiadomienie. Proszę nie odpowiadać na ten email.' . "\n\n" . 'Wysłana wiadomość brzmi:' . "\n\n" . 'MESSAGE';
$txt['pm_multiple'] = '(kilku odbiorców: \'użytkownik1, użytkownik2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Odpowiedz na tą prywatną wiadomość tutaj:';

$txt['delete_selected_confirm'] = 'Czy na pewno chcesz usunąć wszystkie zaznaczone prywatne wiadomości?';

$txt['sent_to'] = 'Wysłane do';
$txt['reply_to_all'] = 'Odpowiedz wszystkim';
$txt['delete_conversation'] = 'Usuń rozmowę';

$txt['pm_capacity'] = 'Pojemność';
$txt['pm_currently_using'] = '%1$s wiadomości, %2$s%% zajęte.';
$txt['pm_sent'] = 'Twoja wiadomość została pomyślnie wysłana.';

$txt['pm_error_user_not_found'] = 'Nie można znaleźć użytkownika \'%1$s\'.';
$txt['pm_error_ignored_by_user'] = 'Użytkownik \'%1$s\' zablokował twoją prywatną wiadomość.';
$txt['pm_error_data_limit_reached'] = 'PW nie może zostać wysłana do \'%1$s\' Ich skrzynki są pełne!';
$txt['pm_error_user_cannot_read'] = 'Użytkownik \'%1$s\' nie może odbierać prywatnych wiadomości.';
$txt['pm_successfully_sent'] = 'PW została wysłana do \'%1$s\'.';
$txt['pm_send_report'] = 'Zgłoś niestosowną wiadomość adminowi';
$txt['pm_save_outbox'] = 'Zachowaj kopię w wysłanych';
$txt['pm_undisclosed_recipients'] = 'Ukryci odbiorcy';
$txt['pm_too_many_recipients'] = 'Maksymalna ilość użytkowników do których możesz wysłać wiadomość prywatną za jednym razem to %1$d.';

$txt['pm_read'] = 'Przeczytane';
$txt['pm_replied'] = 'Wysłano odpowiedź';

// Message Pruning.
$txt['pm_prune'] = 'Usuń wiadomości';
$txt['pm_prune_desc1'] = 'Usuń wszystkie wiadomości starsze niż';
$txt['pm_prune_desc2'] = 'dni.';
$txt['pm_prune_warning'] = 'Na pewno usunąć stare prywatne wiadomości?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Inne możliwości';
$txt['pm_actions_delete_selected'] = 'Usuń zaznaczone';
$txt['pm_actions_filter_by_label'] = 'Przefiltruj według etykiety';
$txt['pm_actions_go'] = 'Idź do';

// Manage Labels Screen.
$txt['pm_apply'] = 'Zastosuj';
$txt['pm_manage_labels'] = 'Zarządzaj etykietami';
$txt['pm_labels_delete'] = 'Jesteś pewien, że chcesz usunąć zaznaczone etykiety?';
$txt['pm_labels_desc'] = 'Tu możesz dodawać, edytować i usuwać etykiety użyte w Twoim centrum wiadomości.';
$txt['pm_label_add_new'] = 'Dodaj nową etykietę';
$txt['pm_label_name'] = 'Nazwa etykiety';
$txt['pm_labels_no_exist'] = 'Nie masz obecnie ustawionych etykiet!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Etykieta';
$txt['pm_msg_label_title'] = 'Oznacz wiadomość etykietą';
$txt['pm_msg_label_apply'] = 'Dodaj etykietę';
$txt['pm_msg_label_remove'] = 'Usuń etykietę';
$txt['pm_msg_label_inbox'] = 'Odebrane';
$txt['pm_sel_label_title'] = 'Etykieta zaznaczona';

// Sidebar Headings.
$txt['pm_labels'] = 'Etykiety';
$txt['pm_messages'] = 'Wiadomości';
$txt['pm_actions'] = 'Operacje';
$txt['pm_preferences'] = 'Ustawienia';

$txt['pm_is_replied_to'] = 'Na tę wiadomość już odpowiedziałeś lub przesłałeś ją dalej.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Zgłoś Adminowi';
$txt['pm_report_title'] = 'Zgłoszenie Prywatnej Wiadomości';
$txt['pm_report_desc'] = 'Z tej strony możesz zgłosić odebraną prywatną wiadomość do administracji forum. Proszę dołączyć informację dlaczego zgłaszasz tą wiadomość, to zgłoszenie zostanie przesłane razem z wiadomością oryginalną.';
$txt['pm_report_admins'] = 'Administrator do którego wysłać zgłoszenie';
$txt['pm_report_all_admins'] = 'Wyślij do wszystkich administratorów forum';
$txt['pm_report_reason'] = 'Powód dla którego zgłaszasz tą wiadomość';
$txt['pm_report_message'] = 'Zgłoś wiadomość';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[ZGŁOSZENIE] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} zgłosił następującą PW, wysłaną przez {SENDER}, z następujących powodów:';
$txt['pm_report_pm_other_recipients'] = 'Inni odbiorcy tej wiadomości:';
$txt['pm_report_pm_hidden'] = '%1$d ukrytych odbiorców';
$txt['pm_report_pm_unedited_below'] = 'Poniżej znajduje się oryginalna zawartość zgłaszanej wiadomości:';
$txt['pm_report_pm_sent'] = 'Wyślij:';

$txt['pm_report_done'] = 'Dziękujemy za zgłoszenie, w najbliższym czasie spodziewaj się odpowiedzi od administracji.';
$txt['pm_report_return'] = 'Wróć do skrzynki odbiorczej';

$txt['pm_search_title'] = 'Szukaj w Prywatnych Wiadomościach';
$txt['pm_search_bar_title'] = 'Znajdź Wiadomość';
$txt['pm_search_text'] = 'Szukaj';
$txt['pm_search_go'] = 'Szukaj';
$txt['pm_search_advanced'] = 'Wyszukiwanie zaawansowane';
$txt['pm_search_user'] = 'wysłane przez';
$txt['pm_search_match_all'] = 'Dopasuj wszystkie słowa';
$txt['pm_search_match_any'] = 'Dopasuj jakiekolwiek ze słów';
$txt['pm_search_options'] = 'Opcje';
$txt['pm_search_post_age'] = 'Wiek wiadomości';
$txt['pm_search_show_complete'] = 'Pokaż całą wiadomość w rezultatach wyszukiwania.';
$txt['pm_search_subject_only'] = 'Szukaj tylko według tematu i autora.';
$txt['pm_search_between'] = 'pomiędzy';
$txt['pm_search_between_and'] = 'i';
$txt['pm_search_between_days'] = 'dni';
$txt['pm_search_order'] = 'Sortowanie wyszukiwania';
$txt['pm_search_choose_label'] = 'Wybierz etykietę do przeszukania, lub przeszukaj wszystkie';

$txt['pm_search_results'] = 'Rezultaty wyszukiwania';
$txt['pm_search_none_found'] = 'Nie znaleziono wiadomości';

$txt['pm_search_orderby_relevant_first'] = 'Najpierw najbardziej dopasowane';
$txt['pm_search_orderby_recent_first'] = 'Najpierw najnowsze';
$txt['pm_search_orderby_old_first'] = 'Najpierw najstarsze';

$txt['pm_visual_verification_label'] = 'Weryfikacja';
$txt['pm_visual_verification_desc'] = 'Wpisz litery widoczne na obrazku.';

$txt['pm_settings'] = 'Zmień ustawienia';
$txt['pm_change_view'] = 'Zmień widok';

$txt['pm_manage_rules'] = 'Zarządzaj regułami';
$txt['pm_manage_rules_desc'] = 'Reguły wiadomości pozwolą Ci automatycznie sortować przychodzące wiadomości wg kryteriów jakie zdefiniujesz. Poniżej są wszystkie aktualnie ustawione reguły. Aby edytować regułę, po prostu kliknij jej nazwę.';
$txt['pm_rules_none'] = 'Nie masz jeszcze ustawionych żadnych reguł wiadomości.';
$txt['pm_rule_title'] = 'Reguła';
$txt['pm_add_rule'] = 'Dodaj nową regułę';
$txt['pm_apply_rules'] = 'Zastosuj reguły teraz';
// Use entities in the below string.
$txt['pm_js_apply_rules_confirm'] = 'Czy na pewno chcesz zastosować aktualne reguły do wszystkich prywatnych wiadomości?';
$txt['pm_edit_rule'] = 'Edytuj regułę';
$txt['pm_rule_save'] = 'Zachowaj regułę';
$txt['pm_delete_selected_rule'] = 'Usuń Zaznaczone Reguły';
// Use entities in the below string.
$txt['pm_js_delete_rule_confirm'] = 'Czy na pewno chcesz usunąć zaznaczone reguły?';
$txt['pm_rule_name'] = 'Nazwa';
$txt['pm_rule_name_desc'] = 'Łatwa do zapamiętania nazwa dla reguły';
$txt['pm_rule_name_default'] = '[NAZWA]';
$txt['pm_rule_description'] = 'Opis';
$txt['pm_rule_not_defined'] = 'Dodaj kryteria aby rozpocząć tworzenie opisu tej reguły.';
$txt['pm_rule_js_disabled'] = '<span class="alert"><strong>Uwaga:</strong> Wydaje się, że masz wyłączoną obsługę javascript. Aby skorzystać z tej opcji, konieczne jest włączenie obsługi javascript.</span>';
$txt['pm_rule_criteria'] = 'Kryteria';
$txt['pm_rule_criteria_add'] = 'Dodaj kryterium';
$txt['pm_rule_criteria_pick'] = 'Wybierz kryterium';
$txt['pm_rule_mid'] = 'Nazwa nadawcy';
$txt['pm_rule_gid'] = 'Grupa nadawcy';
$txt['pm_rule_sub'] = 'Temat wiadomości zawiera';
$txt['pm_rule_msg'] = 'Treść wiadomości zawiera';
$txt['pm_rule_bud'] = 'Nadawca należy do znajomych';
$txt['pm_rule_sel_group'] = 'Wybierz grupę';
$txt['pm_rule_logic'] = 'Podczas przetwarzania reguły';
$txt['pm_rule_logic_and'] = 'Wszystkie kryteria muszą zostać spełnione';
$txt['pm_rule_logic_or'] = 'Jakiekolwiek kryterium musi zostać spełnione';
$txt['pm_rule_actions'] = 'Akcje';
$txt['pm_rule_sel_action'] = 'Wybierz akcję';
$txt['pm_rule_add_action'] = 'Dodaj akcję';
$txt['pm_rule_label'] = 'Oznacz wiadomość';
$txt['pm_rule_sel_label'] = 'Wybierz etykietę';
$txt['pm_rule_delete'] = 'Usuń wiadomość';
$txt['pm_rule_no_name'] = 'Zapomniałeś wpisać nazwę reguły';
$txt['pm_rule_no_criteria'] = 'Reguła musi mieć ustawione przynajmniej jedno kryterium i jedną akcję.';
$txt['pm_rule_too_complex'] = 'Reguła, którą tworzysz jest zbyt długa by ją zapisać. Spónuj podzielić ją na mniejsze reguły.';

$txt['pm_readable_and'] = '<em>i</em>';
$txt['pm_readable_or'] = '<em>lub</em>';
$txt['pm_readable_start'] = 'Jeśli ';
$txt['pm_readable_end'] = '.';
$txt['pm_readable_member'] = 'wiadomość od &quot;{MEMBER}&quot;';
$txt['pm_readable_group'] = 'wysyłający należy do grupy &quot;{GROUP}&quot;';
$txt['pm_readable_subject'] = 'temat wiadomości zawiera &quot;{SUBJECT}&quot;';
$txt['pm_readable_body'] = 'treść wiadomości zawiera &quot;{BODY}&quot;';
$txt['pm_readable_buddy'] = 'wysyłający należy do znajomych';
$txt['pm_readable_label'] = 'akceptuj etykietę &quot;{LABEL}&quot;';
$txt['pm_readable_delete'] = 'usuń wiadomość';
$txt['pm_readable_then'] = '<strong>wtedy</strong>';

?>