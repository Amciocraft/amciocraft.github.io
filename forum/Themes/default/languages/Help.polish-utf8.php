<?php
// Version: 2.0; Help

global $helptxt;

$txt['close_window'] = 'Zamknij okno';

$helptxt['manage_boards'] = '	<strong>Edytuj działy</strong><br />
	W tym menu możesz stworzyć/usunąć/zmienić kolejność działów i kategorii.
	Przykładowo, miałeś stronę o szerokiej tematyce
	takiej jak &quot;Sport&quot;, &quot;Motoryzacja&quot; i &quot;Muzyka&quot;.
	To byłyby kategorie najwyższego poziomu. Pod każdą z nich chciałbyś
	prawdopodobnie stworzyć hierarchiczne &quot;podkategorie&quot; lub &quot;działy&quot; dla tematów.
	To będzie prosta hierarchia ze strukturą: <br />
	<ul class="normallist">
		<li>
			<strong>Sport</strong>
			&nbsp;-  &quot;Kategoria&quot;
		</li>
		<ul class="normallist">
			<li>
				<strong>Motoryzacja</strong>
				&nbsp;- Forum w kategorii &quot;Sport&quot;
			</li>
			<ul class="normallist">
				<li>
					<strong>Muzyka</strong>
					&nbsp;- Forum podrzędne dla forum &quot;Motoryzacja&quot;
				</li>
			</ul>
			<li><strong>Piłka nożna</strong>
			&nbsp;- Kolejne forum w kategorii &quot;Sport&quot;</li>
		</ul>
	</ul>
Kategorie pozwolą Ci na rozdzielenie forum z szerszych tematów (&quot;Motoryzacja, Sporty&quot;), a &quot;Fora&quot; pod nimi są aktualnymi tematami w których użytkownik może pisać. Użytkownik zainteresowany Pinto, napisałby wiadomość pod &quot;Motoryzacja->Pinto&quot;. Kategorie pozwolą ludziom szybko znaleźć konkretnie to, co ich interesuje: zamiast &quot;Sklep&quot; możesz mieć &quot;Sprzęt&quot; oraz &quot;Ubiór&quot;, sklepy do których możesz wejść. Zdecydowanie upraszcza wyszukiwanie &quot;płyta główna&quot;, ponieważ możesz przejść do &quot;kategorii&quot; sklepu - Sprzęt zamiast szukać w sklepie z ubiorem (gdzie raczej ciężko o płytę główną).<br />
Tak jak podano wyżej, Forum jest konkretnym tematem w szerszej kategorii. Jeśli chcesz rozmawiać o &quot;Pinto&quot;, przejdziesz do kategorii &quot;Auto&quot;, a następnie wybierzesz forum Pinto i napiszesz to co masz namyśli.<br />
Funkcje zarządzania dla tego menu pozwalają na tworzenie for dla każdej kategorii oraz zmiana ich kolejności (np. przesuń &quot;Pinto&quot; przed &quot;Chevy&quot;) lub całkowite usunięcie forum.';

$helptxt['edit_news'] = '<ul class="normallist">  <li>  <strong>Aktualności</strong><br /> Ta sekcja pozwala wprowadzić tekst informacji o nowościach, wyświetlany na stronie głównej forum. Dodaj co tylko chcesz (np. &quot;Nie zapomnijcie o konferencji w najbliższy wtorek&quot;). Informacje te są wyświetlane losowo, każda w osobnej ramce. </li> <li> <strong>Newsletters</strong><br /> Ta sekcja pozwoli Ci na wysłanie masowej korespondencji do użytkowników forum. Najpierw musisz zaznaczyć nazwy grup użytkowników, do których chcesz wysłać newsletter. Jeśli sobie życzysz możesz dodatkowo dodać użytkowników lub adresy email którzy otrzymają newsletter. Ostatecznie możesz zdecydować w jakiej formie korespondencja ma być wysłana do użytkownika, za pomocą wiadomości prywatnej lub też wiadomości email. </li> <li> <strong>Ustawienia</strong><br /> Ta sekcja zawiera kilka ustawień dotyczących aktualności oraz korespondencji takich jak: dodawanie grup które mogą edytować aktualności i wysyłać korespondencję. Istnieje także opcja konfiguracji aktualności za pomocą której możesz je włączyć lub wyłączyć, ustawić długość znaków w wyświetlanej wiadomości. </li> </ul>';

$helptxt['view_members'] = '	<ul class="normallist">
		<li>
			<strong>Przeglądanie użytkowników</strong><br />
			Przeglądaj wszystkich użytkowników forum. Zostanie wyświetlona lista użytkowników, z których
			każdy jest odnośnikiem do jego profilu. Jako administrator, możesz modyfikować profile
			użytkowników. Masz całkowitą kontrolę nad użytkownikami,
			włącznie z ich usunięciem z forum.<br /><br />
		</li>
		<li>
			<strong>Oczekujący na zatwierdzenie</strong><br />
			Ta sekcja pokazuje się tylko jeśli włączona jest opcja zatwierdzania wszystkich nowych użytkowników. Każdy rejestrujący się
			na forum staje się pełnym użytkownikiem dopiero po zatwierdzeniu przez admina. Ta sekcja wyświetla wszystkich tych użytkowników,
			którzy oczekują na zatwierdzenie. Pokazują się również ich emaile i adres IP. Możesz wybrać czy zatwierdzić, czy odrzucić
			(skasować) każdego użytkownika z listy, poprzez zaznaczenie użytkowników i wybranie odpowiedniej czynności z rozwijanej listy.
			Podczas odrzucania użytkownika możesz wybrać czy po usunięciu poinformować go emailem o swojej decyzji.<br /><br />
		</li>
		<li>
			<strong>Oczekujący na aktywację</strong><br />
			Ta sekcja pokazuje się tylko jeśli włączona jest opcja aktywacji kont użytkownika. Ta lista
			wyświetla wszystkich użytkowników, którzy jeszcze nie aktywowali swojego konta. Możesz wybrać czy aktywować te konta za nich,
			odrzucić, czy też przypomnieć o konieczności aktywacji konta. Tak jak powyżej, możesz poinformować lub nie użytkowników
			o swojej decyzji.<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<strong>Ban użytkowników</strong><br />
	SMF pozwala na &quot;ban&quot; użytkowników którzy zakłócają działanie forum
	poprzez spamowanie, floodowanie, itp. Jako admin widzisz podczas przeglądania 
	wiadomości adres IP każdego z użytkowników z którego wysłana została wiadomość. 
	Możesz dodać dane IP do listy banów co zablokuje możliwość pisania wiadomości z 
	tej lokacji. Możesz również banować użytkowników podając ich adres email.';

$helptxt['featuresettings'] = '<strong>Właściwości i Opcje</strong><br />
	Jest tu kilka ustawień, które możesz zmienić według swoich preferencji.';

$helptxt['securitysettings'] = '<strong>Bezpieczeństwo i Moderacja</strong><br />
	Ta sekcja zawiera ustawienia związane z bezpieczeństwem i moderacją na Twoim forum.';

$helptxt['modsettings'] = '<strong>Opcje forum</strong><br />
	Jest wiele opcji w tej sekcji, które możesz zmienić wedle uznania. Większość opcji modyfikacji, pojawi się również w tym miejscu.';

$helptxt['number_format'] = '<strong>Format liczb</strong><br />
	Możesz użyć tych ustawień do ustalenia formatu, w jakim liczby będą wyświetlane na forum. Format tego ustawienia jest następujący:<br />
	<div style="margin-left: 2ex;">1,234.00</div><br />
	gdzie \',\' to znak używany do oddzielania grup tysięcy, \'.\' to znak używany do oddzielania części dziesiętnej, a liczba zer po nim określa dokładność zaokrągleń.';

$helptxt['time_format'] = '<strong>Format Czasu</strong><br />
	Możesz dostosować sposób wyświetlania daty i czasu do swoich upodobań. Wygląda to na dość skomplikowany ciąg literek, ale nie jest specjalnie trudne.
	Konwencja pochodzi z funkcji PHP strftime i została opisana poniżej (więcej szczegółów można znaleźć na stronie <a href="http://www.php.net/manual/function.strftime.php" target="_blank" class="new_win">php.net</a>).<br />
	<br />
	Następujące znaki są rozpoznawane w łańcuchu formatującym: <br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - skrócony dzień tygodnia<br />
	&nbsp;&nbsp;%A - pełny dzień tygodnia<br />
	&nbsp;&nbsp;%b - skrócona nazwa miesiąca<br />
	&nbsp;&nbsp;%B - pełna nazwa miesiąca<br />
	&nbsp;&nbsp;%d - dzień miesiąca (01 do 31) <br />
	&nbsp;&nbsp;%D<b>*</b> - to samo, co %m/%d/%y <br />
	&nbsp;&nbsp;%e<b>*</b> - dzień miesiąca (1 do 31) <br />
	&nbsp;&nbsp;%H - godzina (format 24-godzinny)<br />
	&nbsp;&nbsp;%I - godzina (format 12-godzinny)<br />
	&nbsp;&nbsp;%m - miesiąc jako liczba (01 do 12) <br />
	&nbsp;&nbsp;%M - minuty jako liczba <br />
	&nbsp;&nbsp;%p - &quot;am&quot; albo &quot;pm&quot; zgodnie z aktualnym czasem<br />
	&nbsp;&nbsp;%R<b>*</b> - czas w notacji 24-godzinnej <br />
	&nbsp;&nbsp;%S - sekundy jako liczba dziesiętna <br />
	&nbsp;&nbsp;%T<b>*</b> - aktualny czas, odpowiednik %H:%M:%S <br />
	&nbsp;&nbsp;%y - rok jako liczba dwucyfrowa (00 do 99) <br />
	&nbsp;&nbsp;%Y - rok jako liczba 4-cyfrowa<br />
	&nbsp;&nbsp;%Z - strefa czasowa, nazwa lub skrót <br />
	&nbsp;&nbsp;%% - Znak \'%\' literowy <br />
	<br />
	<em>* Nie działa na serwerach opartych na systemie Windows.</em></span>';

$helptxt['live_news'] = '<strong>Aktualne ogłoszenia</strong><br />
	Ten boks pokazuje ostatnie ogłoszenia z <a href="http://www.simplemachines.org/" target="_blank" class="new_win">www.simplemachines.org</a>.
	Powinieneś sprawdzać je na bieżąco aby uzyskiwać informacje o aktualizacjach, nowych wydaniach i ważnych informacjach od Simple Machines.';

$helptxt['registrations'] = '<strong>Zarządzanie rejestracją</strong><br />
	Ta sekcja zawiera wszystkie funkcje związane z zarządzaniem nowymi rejestracjami na forum. Jest podzielona na maksymalnie cztery
	działy, które są widoczne zależnie od ustawień Twojego forum:<br /><br />
	<ul class="normallist">
		<li>
			<b>Zarejestruj nowego użytkownika</b><br />
			Tu możesz zarejestrować użytkownika na jego prośbę. Jest to przydatne na zamkniętych forach, 
			lub gdy admin chce stworzyć konto testowe. Jeśli jest włączona opcja aktywacji konta, to 
			do użytkownika zostanie wysłany emailem link aktywacyjny, który będzie musiał być kliknięty, 
			by zacząć korzystać z konta. Ewentualnie można wybrać opcję, by przesłać użytkownikowi hasło na email.<br /><br />
		</li>
		<li>
			<b>Edytuj umowę rejestracyjną</b><br />
			W tym miejscu możesz zmienić umowę rejestracyjną, wyświetlaną podczas tworzenia nowego konta na forum.
			Możesz dodać, usunąć i zmienić wszystko co zostało standardowo zaproponowane przez SMF.<br /><br />
		</li>
		<li>
			<b>Ustal zarezerwowane nazwy</b><br />
			Tu ustalisz jakie wyrazy nie będą mogły być użyte przez użytkowników do stworzenia ich nazwy konta.<br /><br />
		</li>
		<li>
			<b>Ustawienia</b><br />
			Ta sekcja będzie widoczna jedynie, jeśli masz zezwolenie na administrację forum. Tu możesz ustawić sposób rejestracji
      jaki będzie używany na forum, a także inne związane z rejestracją opcje.
		</li>
	</ul>';

$helptxt['modlog'] = '<strong>Raport moderacji</strong><br />
	Ta sekcja pozwala członkom grupy administratorów śledzić wszystkie czynności moderacyjne, które wykonali moderatorzy. Aby 
	moderatorzy nie mogli usunąć odwołań do akcji, które wykonali, wpisy nie mogą zostać usunięte przed upływem 24 godzin od ich wystąpienia. Kolumna \'obiekty\' pokazuje zmienne powiązane z akcją.';
$helptxt['adminlog'] = '<strong>Raport Administratora</strong><br /> Ta sekcja pozwala członkom grupy Administratorzy, śledzić niektóre czynności administracyjne, które zostały dokonane na forum. Aby się upewnić, że administratorzy nie usuną odnośników do czynności jakie wykonali, wejścia nie mogą zostać usunięte przez 24 godziny po dokonaniu czynności.';
$helptxt['warning_enable'] = '<strong>System Ostrzeżeń Użytkowników</strong><br />
	Ta opcja pozwala administratorom i moderatorom przyznawać użytkownikom ostrzeżenia - oraz używać Poziomu Ostrzeżenia, do określenia 
	ograniczeń w korzystaniu z forum. Po uaktywnieniu te opcji, w sekcji Zezwolenia, możesz określić, które grupy mogą przyznawać
	ostrzeżenia użytkownikom. Poziom ostrzeżenia może być ustawiony w profilu użytkownika. Dostępne są następujące ustawienia:
	<ul class="normallist">
		<li>
			<strong>Poziom Ostrzeżenia - Użytkownik jest obserwowany</strong><br />
			To ustawienie pozwala zdefiniować procentowy poziom ostrzeżenia, który musi osiągnąć użytkownik, aby zostać automatycznie wciągniętym na listę obserwowanych użytkowników.
			Każdy użytkownik, który jest &quot;obserwowany&quot; pojawi się w odpowiednim obszarze w centrum moderacji.
		</li>
		<li>
			<strong>Poziom Ostrzeżenia - Wszystkie wiadomości użytkownika są moderowane</strong><br />
			Każdy użytkownik, który przekroczy ustawioną wartość, będzie musiał otrzymać zgodę moderatora, na publikację każdej wiadomości na forum.
			To ustawienie będzie nadrzędne do wszystkich lokalnych zezwoleń związanych z moderacją wiadomości.
		</li>
		<li>
			<strong>Poziom Ostrzeżenia - Użytkownik nie może pisać wiadomości</strong><br />
			Przekroczenie ustawionego poziomu, spowoduje całkowity brak możliwości pisania wiadomości na forum. 
		</li>
		<li>
			<strong>Maksymalna ilość punktów ostrzeżenia na dzień</strong><br />
			To ustawienie określa całkowitą ilość punktów, które pojedynczemu użytkownikowi, może przyznać lub odebrać moderator w okresie 24 godzin.
			To ustawienie pozwala ograniczyć aktywność administratorów w krótkim okresie czasu. Pamiętaj, można wyłączyć tę opcję, ustawiając wartość na zero. 
			Żaden użytkownik z uprawnieniami administratora, nie jest objęty tą regułą.
		</li>
	</ul>';
$helptxt['error_log'] = '<strong>Raport błędów forum</strong><br />
	Każdy błąd, który wystąpił podczas korzystania z forum zostaje zapisany. Domyślnie są sortowane po dacie. 
	Za pomocą strzałek, można zmienić sortowanie, a dodatkowo można włączyć filtr, np. według użytkownika. 
	Podczas filtrowania, wyświetlą się jedynie te wpisy, które pasują do filtra.';
$helptxt['theme_settings'] = '<strong>Ustawienia stylu</strong><br />
	Ekran ten pozwala na zmianę specyficznych ustawień dla obecnego stylu, włączając w to opcje takie jak 
	katalog oraz adres URL stylu czy ustawienia layoutu forum. Większość stylów posiada rozmaite opcje 
	pozwalające na dostosowanie ustawień do indywidualnych potrzeb forum.';
$helptxt['smileys'] = '<strong>Centrum Uśmieszków</strong><br />
	Tutaj możesz dodawać i usuwać uśmieszki i zestawy uśmieszków. Zauważ, że jeśli uśmieszek znajduje się w jednym zestawie, to istnieje również w pozostałych zestawach - w przeciwnym wypadku 
	mogłoby być to zaskakujące dla użytkowników forum używających różnych zestawów.<br /><br />

	Możesz tutaj również edytować ikony wiadomości, o ile włączyłeś je na stronie ustawień.';
$helptxt['calendar'] = '<strong>Zarządzaj kalendarzem</strong><br />
	Tutaj możesz dodawać i usuwać wpisy oraz zmienić ustawienia kalendarza.';

$helptxt['serversettings'] = '<strong>Ustawienia serwera</strong><br />
	Tu możesz zmienić główne ustawienia forum. W tej sekcji znajdziesz ustawienia bazy danych, ścieżek URL, a także
	tych związanych z pocztą i pamięcią podręczną. Zastanów się przed zmianami w tym miejscu, gdyż błędy mogą spowodować
	brak dostępu do forum.';
$helptxt['manage_files'] = '<ul class="normallist">  <li>  <strong>Przeglądaj pliki</strong><br />  Przeglądanie wszystkich załączników, awatarów i miniaturek zgromadzonych przez SMF.<br /><br />  </li><li>  <strong>Ustawienia załączników</strong><br />  Skonfiguruj miejsce przechowywania załączników i ustaw ograniczenia na typy załączników.<br /><br />  </li><li>  <strong>Ustawienia awatarów</strong><br />  Skonfiguruj miejsce przechowywania awatarów i ustaw zmianę wielkości awatarów.<br /><br />  </li><li>  <strong>Zarządzanie plikami</strong><br />  Sprawdź i napraw jakiekolwiek błędy w katalogu załączników i usuń wybrane załączniki.<br /><br />  </li>  </ul>';

$helptxt['topicSummaryPosts'] = 'Ta opcja pozwala ustawić liczbę poprzednich wiadomości widocznych w podsumowaniu wątku podczas odpowiedzi.';
$helptxt['enableAllMessages'] = 'Definiuje <em>maksymalną</em> ilość wiadomości w wątku, dla którego zostanie wyświetlony link do wszystkich wiadomości. Ustawienie tej ilości na mniej niż &quot;Maksymalna ilość wiadomości do wyświetlenia na stronie wątku&quot; spowoduje, że link nigdy się nie pojawi, a zbyt duża wartość może spowolnić Twoje forum.';
$helptxt['enableStickyTopics'] = 'Przyklejone wątki są wątkami które pozostają stale na górze listy tematów. Zazwyczaj używane są do przekazania ważnych wiadomości. 
		Domyślnie tylko moderatorzy i administratorzy mogą zakładać przyklejone wątki ale możesz to zmienić w zezwoleniach użytkowników.';
$helptxt['allow_guestAccess'] = 'Odznaczenie tej opcji wyłączy gościom wykonywanie większości czynności poza tymi najprostszymi - logowanie, rejestracja, przypomnienie hasła, itp. - na Twoim forum. Nie jest to to samo co uniemożliwienie gościom dostępu do działów.';
$helptxt['userLanguage'] = 'Włączenie tej opcji pozwoli użytkownikom wybrać plik językowy z którego będą korzystać. Nie będzie to miało wpływu na 
		ustawienia domyślne.';
$helptxt['trackStats'] = 'Statystyki:<br />Ta opcja pozwoli na wyświetlanie użytkownikom listy najnowszych wiadomości oraz najbardziej popularnych wątków na Twoim forum. 
		Opcja ta pozwoli również na wyświetlanie różnych statystyk, jak np. najwyższa liczba użytkowników online, nowi użytkownicy czy nowe wątki.<hr />
		Trafienia:<br />Dodaje następną kolumnę na stronie statystyk z ilością trafień na Twoim forum.';
$helptxt['titlesEnable'] = 'Włączenie Tytułów osobistych pozwoli użytkownikom ze stosownymi uprawnieniami na stworzenie własnych tytułów widocznych pod nazwą.<br/>
		<em>Na przykład:</em><br/>Janek<br/>Spoko koleś';
$helptxt['topbottomEnable'] = 'Dodaje przyciski w górę i w dół, przez co użytkownicy mogą przenieść się na koniec i początek strony 
		bez przewijania.';
$helptxt['onlineEnable'] = 'Pokazuje obrazek wskazujący czy użytkownik jest online lub offline';
$helptxt['todayMod'] = 'Będzie pokazywać "Dzisiaj" lub "Wczoraj", jeśli to możliwe, zamiast daty.<br /><br />  <strong>Przykłady:</strong><br /><br />  <dt>  <dt>Wyłączone</dt>  <dd>Październik 3, 2009 at 12:59:18 am</dd>  <dt>Tylko dziś</dt>  <dd>Dziś at 12:59:18 am</dd>  <dt>Dziś i Wczoraj</dt>  <dd>Wczoraj at 09:36:55 pm</dd>  </dt>  ';
$helptxt['disableCustomPerPage'] = 'Zaznacz tę opcję, aby uniemożliwić użytkownikom zmianę ilości wiadomości i wątków pokazywanych odpowiednio na stronach "Indeks Wiadomości"" i "Pokaż wątek".';
$helptxt['enablePreviousNext'] = 'Ta opcja spowoduje wyświetlanie odnośnika do następnego i poprzedniego wątku.';
$helptxt['pollMode'] = 'Ta opcja włącza lub wyłącza ankiety. Jeśli opcja jest wyłączona, to wszystkie istniejące ankiety zostaną ukryte
		na liście wątków. Możesz wybrać, czy pokazywać wątki, w których były ankiety bez ankiet, przez wybranie
		&quot;Pokaż ankiety jako wątki&quot;.<br /><br />By zdecydować kto może tworzyć ankiety, lub w nich głosować,
		zajrzyj do zarządzania zezwoleniami. Pamiętaj o tym, jeśli komuś nie działają ankiety.';
$helptxt['enableVBStyleLogin'] = 'Włączenie tej opcji spowoduje wyświetlanie małego pola logowania na każdej stronie forum.';
$helptxt['enableCompressedOutput'] = 'Włączenie tej opcji spowoduje kompresowanie wynikowej strony w celu zmniejszenia zużycia przepustowości łącza, ale wymaga 
		zainstalowanej biblioteki zlib.';
$helptxt['disableTemplateEval'] = 'Domyślnie, szablony są oszacowywane zamiast zwyczajnego osadzenia. To pomaga przy wyszukiwaniu i usuwaniu usterek przez pokazywanie informacji w razie, gdyby szablon zawierał błąd.<br /><br />
		Jednak na dużych forach, ten zmodyfikowany system osadzania kodu może znacząco spowolnić wczytywanie. Dlatego zaawansowani użytkownicy mogliby chcieć to wyłączyć.';
$helptxt['databaseSession_enable'] = 'Ta opcja wykorzystuje bazę danych do przechowywania informacji o sesjach - jest to najlepsze rozwiązanie dla serwerów wykorzystujących load-balancing, ale pomaga również przy wszelkich problemach z timeoutem i może przyspieszyć działanie forum.';
$helptxt['databaseSession_loose'] = 'Włączenie tej opcji spowoduje zmniejszenie transferu, jaki generuje Twoje forum, oraz sprawi, że powrót do poprzedniej strony nie będzie skutkować jej przeładowaniem. Minusem jest między innymi to, że ikony nowych wiadomości nie odświeżą się (dopóki nie przejdziesz do niej kliknięciem zamiast przyciskiem powrotu).';
$helptxt['databaseSession_lifetime'] = 'To jest czas bezczynności w sekundach, po którym sesja wygaśnie. Jeśli czas bezczynności użytkownika przekroczy tą wartość kolejna akcja spowoduje wyświetlenie komunikatu &quot;sesja wygasła&quot;. Wartości powyżej 2400 sekund nie są zalecane.';
$helptxt['enableErrorLogging'] = 'Ta opcja powoduje logowanie wszystkich błędów, jak np. błędne logowania, tak aby można było zobaczyć, co poszło źle.';
$helptxt['enableErrorQueryLogging'] = 'Uwzględnia pełne zapytanie wysłane do bazy danych z jakimkolwiek błędem bazy. Wymaga włączenia rejestracji błędów.<br /><br /><strong>Uwaga:  Wpłynie to na możliwość filtrowania logu błędów po komunikacie błędu.</strong>';
$helptxt['allow_disableAnnounce'] = 'Ta opcja umożliwi użytkownikom wyłączenie powiadamiania o wątkach, które administrator zaznaczył jako wątki do powiadamiania.';
$helptxt['disallow_sendBody'] = 'Ta opcja usuwa opcję otrzymywania treści odpowiedzi i wiadomości w powiadomieniach wysyłanych na email.<br /><br />Często użytkownicy odpowiadają na takie powiadomienia, a to w większości przypadków oznacza, że odpowiedź otrzymuje webmaster.';
$helptxt['compactTopicPagesEnable'] = 'Ta opcja pokazuje jak będzie wyświetlana ilość stron w jednym temacie.<br /><em>Przykład:</em>
		&quot;3&quot; wyświetlaj jako: 1 ... 4 [5] 6 ... 9 <br />
		&quot;5&quot; wyświetlaj jako: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'Ta opcja będzie pokazywać na dole strony forum czas w sekundach jakie SMF zajęło wygenerowanie strony.';
$helptxt['removeNestedQuotes'] = 'Ta opcja wyłączy wklejanie zagnieżdżonych cytatów, podczas cytowania wiadomości.';
$helptxt['simpleSearch'] = 'Ta opcja wyświetli prosty formularz wyszukiwania i link do bardziej zaawansowanego formularza.';
$helptxt['max_image_width'] = 'Ta opcja pozwala na ustawienie maksymalnego rozmiaru wysyłanych obrazków. Nie będzie to miało wpływu na obrazki mniejsze niż maksimum.';
$helptxt['mail_type'] = 'To ustawienie pozwala Ci wybrać pomiędzy domyślnymi ustawieniami PHP a zastąpieniem tych ustawień przez SMTP. PHP nie obsługuje autoryzacji SMTP (której wiele serwerów aktualnie wymaga), tak więc jeśli jest ona dla Ciebie konieczna, powinieneś wybrać SMTP. Miej na uwadze, że SMTP może działać wolniej, a niektóre serwery mogą nie przyjmować nazwy użytkownika i hasła.<br /><br />Nie musisz wypełniać ustawień SMTP jeśli zdecydowałeś się na domyślne ustawienia PHP.';
$helptxt['attachment_manager_settings'] = 'Załącznik to plik, który może zostać wysłany na serwer przez użytkownika i może zostać dodany do wiadomości.<br /><br />
		<strong>Sprawdź rozszerzenie załącznika</strong>:<br /> Czy chcesz sprawdzić rozszerzenie pliku?<br />
		<strong>Dozwolone rozszerzenia załączników</strong>:<br /> Możesz tutaj ustawić jakie rozszerzenia są akceptowane.<br />
		<strong>Katalog załączników</strong>:<br /> Ścieżka do twojego folderu z załącznikiem.<br />(przykład: /home/sites/yoursite/www/forum/attachments)<br />
		<strong>Maksymalny rozmiar folderu z załącznikami</strong> (w KB):<br /> Określ jak duży może być folder z załącznikami, włączając w to pliki już się w nim znajdujące.<br />
		<strong>Maksymalny rozmiar załączników na jedną wiadomość</strong> (w KB):<br /> Określ maksymalny rozmiar wszystkich załączników w wiadomości. Jeśli będzie on niższy niż rozmiar przypadający na załącznik, ta wielkość będzie ograniczeniem.<br />
		<strong>Maksymalny rozmiar jednego załącznika</strong> (w KB):<br /> Określ maksymalny rozmiar każdego pojedynczego załącznika.<br />
		<strong>Maksymalna liczba załączników na wiadomość</strong>:<br /> Określ ilość załączników jaką można dodać do jednej wiadomości.<br />
		<strong>Wyświetlaj załączniki graficzne jako obrazki pod wiadomością</strong>:<br /> Jeśli wysyłany plik jest obrazkiem, zostanie pokazany na dole wiadomości.<br />
		<strong>Zmień rozmiar obrazka, gdy ten jest wyświetlany pod wiadomością</strong>:<br /> Jeśli powyższa opcja będzie wybrana, to zapisze oddzielny (mniejszy) załącznik jako miniaturkę aby zmniejszyć transfer.<br />
		<strong>Maksymalna szerokość i wysokość miniaturki</strong>:<br /> Stosować tylko z opcją &quot;Zmień wielkość obrazów widocznych pod wiadomościami&quot;, zmniejsza szerokość i wysokość załączników. Zmiana wielkości będzie proporcjonalna.';
$helptxt['attachment_image_paranoid'] = 'Zaznaczenie tej opcji umożliwi bardzo rygorystyczne sprawdzanie załączonych obrazków. Ostrzeżenie! Ta szczegółowa kontrola może nie przepuścić nawet prawidłowych obrazków. Zdecydowanie zalecamy używanie tej opcji wraz z przekodowywaniem obrazków w celu próbkowania przez SMF tych, które nie zdadzą testu bezpieczeństwa - jeśli to się powiedzie, zostaną wyczyszczone oraz załadowane. W przeciwnym wypadku, jeśli przekodowywanie jest wyłączone, każdy obrazek, który nie przejdzie testu bezpieczeństwa, zostanie odrzucony.';
$helptxt['attachment_image_reencode'] = 'Zaznaczenie tej opcji umożliwi przekodowywanie załączonych obrazków. Przekodowywanie oferuje większe bezpieczeństwo. Uwaga, przekodowywanie powoduje wyświetlanie wszystkich animowanych obrazków jako statyczne. <br /> Ta funkcja jest dostępna tylko wtedy, gdy moduł GD jest zainstalowany na serwerze.';
$helptxt['avatar_paranoid'] = 'Zaznaczenie tej opcji umożliwi bardzo rygorystyczne sprawdzanie awatarów. Ostrzeżenie! Ta szczegółowa kontrola może nie przepuścić nawet prawidłowych awatarów. Zdecydowanie zalecamy używanie tej opcji wraz z przekodowywaniem obrazków w celu próbkowania przez SMF tych, które nie zdadzą testu bezpieczeństwa - jeśli to się powiedzie, zostaną wyczyszczone oraz załadowane. W przeciwnym wypadku, jeśli przekodowywanie jest wyłączone, każdy awatar, który nie przejdzie testu bezpieczeństwa, zostanie odrzucony.';
$helptxt['avatar_reencode'] = 'Zaznaczenie tej opcji umożliwi przekodowywanie załadowanych awatarów. Przekodowywanie oferuje większe bezpieczeństwo. Uwaga, przekodowywanie powoduje wyświetlanie wszystkich animowanych awatarów jako statyczne. <br /> Ta funkcja jest dostępna tylko wtedy, gdy moduł GD jest zainstalowany na serwerze.';
$helptxt['karmaMode'] = 'Reputacja (w angielskiej wersji: \'karma\') to możliwość pokazania popularności użytkownika na forum. Użytkownicy, jeśli mają udzielone zezwolenie, mogą zagłosować na innych użytkowników klikając 
		\'popieram\' lub \'potępiam\' (lub inne ustawione w opcjach). Administrator może zmienić minimalną ilość wiadomości napisanych przez użytkownika, powyżej której użytkownik ma prawo zdobywania reputacji, czas pomiędzy 
		głosowaniem na tego samego użytkownika, oraz czy admini również muszą czekać.<br /><br />Zezwolenie na głosowanie jest ustawiane dla grupy, lub użytkownika poprzez zezwolenia. 
		Jeśli ktoś na forum ma problemy, sprawdź jeszcze raz zezwolenia.';
$helptxt['cal_enabled'] = 'Kalendarz może być używany do wyświetlania dat urodzin albo ważnych wydarzeń w życiu społeczności.<br /><br />
		<strong>Pokazuj dni jako odnośniki do \'Dodaj wydarzenie\'</strong>:<br />To pozwoli użytkownikowi na dodawanie wydarzenia do tego dnia, którego data została wybrana.<br />
		<strong>Pokazuj numery tygodni</strong>:<br />Pokaż, który jest tydzień.<br />
		<strong>Maksymalna liczba dni na przód w indeksie działów</strong>:<br />Jeśli ustawione jest na 7, zostaną pokazane wydarzenia z następnego tygodnia.<br />
		<strong>Pokazuj święta w indeksie działów</strong>:<br />Pokazuj dzisiejsze święta w tablicy kalendarza w indeksie działów.<br />
		<strong>Pokazuj urodziny w indeksie działów</strong>:<br />Pokazuj dzisiejsze urodziny w tabeli kalendarza w indeksie działów.<br />
		<strong>Pokazuj wydarzenia w indeksie działów</strong>:<br />Pokazuj dzisiejsze wydarzenia w tabeli kalendarza w indeksie działów.<br />
		<strong>Domyślny dział do dodawania wydarzeń</strong>:<br />Jaki jest domyślny dział do dodawania wydarzeń?<br />
		<strong>Zezwól na wydarzenia niepowiązane z wiadomościami</strong>:<br />Zezwól użytkownikom wysyłać wydarzenia bez wymagania, aby były powiązane z wiadomością w dziale.<br />
		<strong>Rok pierwszy</strong>:<br />Zaznacz &quot;pierwszy&quot; rok na liście kalendarza.<br />
		<strong>Rok ostatni</strong>:<br />Zaznacz &quot;ostatni&quot; rok na liście kalendarza.<br />
		<strong>Kolor urodzin</strong>:<br />Wybierz kolor tekstu dla urodzin.<br />
		<strong>Kolor wydarzeń</strong>:<br />Wybierz kolor tekstu dla wydarzeń.<br />
		<strong>Kolor świąt</strong>:<br />Wybierz kolor tekstu dla świąt.<br />
		<strong>Zezwól na kilkudniowe wydarzenia</strong>:<br />Zezwól na kilkudniowe wydarzenia.<br />
		<strong>Maksymalna długość trwania wydarzenia (w dniach)</strong>:<br />Wybierz maksymalną ilość dni jaką może trwać dane wydarzenie.<br /><br />
		Pamiętaj, że używanie kalendarza (dodawanie wydarzeń, pokazywanie wydarzeń, itp.) może być kontrolowane za pomocą zezwoleń w panelu zezwoleń.';
$helptxt['localCookies'] = 'SMF używa ciasteczek (cookies) do przechowywania informacji na komputerze użytkownika. Ciasteczka mogą być przechowywane globalnie (mojserwer.com) lub lokalnie (mojserwer.com/sciezka/do/forum).<br />
	Sprawdź tą opcję jeśli występują problemy polegające na automatycznym wylogowywaniu użytkowników.<hr />
	Ciasteczka przechowywane globalnie są mniej bezpieczne jeśli są używane na współdzielonym serwerze (np. Tripod).<hr />
	Ciasteczka lokalne nie działają poza katalogiem forum, tak więc jeśli Twoje forum jest zainstalowane w www.mojserwer.com/forum, strony w stylu www.mojserwer.com/index.php nie będą w stanie uzyskać dostępu do informacji o koncie użytkownika.
	Globalne ciasteczka są szczególnie polecane gdy używasz SSI.php.';
$helptxt['enableBBC'] = 'Zaznaczenie tej opcji pozwoli użytkownikom na korzystanie w wiadomościach z kodów BBC, dzięki czemu będą mogli umieszczać obrazki, formatować tekst, itp.';
$helptxt['time_offset'] = 'Nie wszyscy administratorzy chcą aby forum używało tej samej strefy czasowej co serwer. Użyj tej opcji aby ustawić różnicę (w godzinach) między czasem na serwerze a godziną na forum. Dozwolone są wartości ujemne oraz ułamkowe.';
$helptxt['default_timezone'] = 'Strefa czasowa serwera informuje PHP o tym, gdzie znajduje się twój serwer. Powinieneś upewnić się czy to ustawienie jest poprawne, najlepiej według kraju/miasta w którym znajduje się serwer. Więcej informacji znajdziesz na <a href="http://www.php.net/manual/en/timezones.php" target="_blank">stronie PHP</a>.';
$helptxt['spamWaitTime'] = 'Tutaj możesz ustawić czas po upływie którego można napisać kolejną wiadomość. Ta opcja chroni przed "spamowaniem" ustalając jak często użytkownicy mogą wysyłać wiadomość.';

$helptxt['enablePostHTML'] = 'Włączenie tej opcji umożliwi korzystanie w wiadomościach z podstawowych znaczników HTML:
	<ul class="normallist" style="margin-bottom: 0;">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=&quot;&quot;&gt;</li>
		<li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li>
		<li>&lt;br /&gt;, &lt;hr /&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

$helptxt['themes'] = 'W tej sekcji możesz zadecydować czy użytkownik może wybrać styl domyślny, jaki styl widzą goście
	i inne opcje związane ze stylami. Kliknij na stylu po prawej stronie, by zmienić jego ustawienia.';
$helptxt['theme_install'] = 'Tutaj możesz zainstalować nowe style podając katalog, wgrywając archiwum lub kopiując domyślny styl.<br /><br />Pamiętaj że katalog lub archiwum musi zawierać plik <tt>theme_info.xml</tt>.';
$helptxt['enableEmbeddedFlash'] = 'Ta opcja zezwoli twoim użytkownikom na używanie Flasha bezpośrednio w swoich wiadomościach, tak jak obrazków. 
	Może to być ryzykowne pod względem bezpieczeństwa, chociaż tylko kilku się to udało wykorzystać. 
	UŻYWAJ NA WŁASNĄ ODPOWIEDZIALNOŚĆ!';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Zezwól na łączenie się z <a href="%1$s?action=.xml;sa=news" target="_blank" class="new_win">Ostatnimi aktualnościami</a> itp.
	Polecamy ograniczyć rozmiar liczby ostatnich wiadomości/aktualności ze względu na to, że
	niektóre czytniki RSS, jak np. Trillian, je obetną..';
$helptxt['hotTopicPosts'] = 'Zmienia liczbę wiadomości, która jest wymagana do oznaczenia wątku jako &quot;gorący&quot; lub 
	&quot;bardzo gorący&quot;.';
$helptxt['globalCookies'] = 'Ta opcja włącza ciasteczka działające we wszystkich poddomenach. Na przykład jeśli:<br />
	twoja strona to http://www.simplemachines.org/,<br />
	a Twoje forum to http://forum.simplemachines.org/,<br />
	Włączenie tej opcji umożliwi Ci dostęp do ciasteczek forum ze swojej strony. Nie włączaj tej opcji, jeśli na Twoim serwerze są inne poddomeny (np. hacker.simplemachines.org), których nie kontrolujesz.';
$helptxt['secureCookies'] = 'Włączenie tej opcji spowoduje wymuszenie oznaczenia cookies stworzonych dla użytkowników Twojego forum jako bezpieczne. Włącz tę opcję tylko wtedy, gdy używasz bezpiecznego protokołu HTTPS, w przeciwnym wypadku uszkodzi to obsługę cookies!';
$helptxt['securityDisable'] = 'Opcja <em>wyłącza</em> dodatkowe sprawdzanie hasła przy wchodzeniu do sekcji administracyjnej. Nie jest to zalecane!';
$helptxt['securityDisable_why'] = 'Jest to Twoje bieżące hasło. (to samo którego używasz do logowania.)<br /><br />Wymuszając ponowne wpisanie hasła, system sprawdza czy na pewno <strong>Ty</strong> chcesz wykonać jakiekolwiek czynności administracyjne.';
$helptxt['emailmembers'] = 'W tej wiadomości możesz użyć kilku &quot;zmiennych&quot;. Są to:<br />
	{$board_url} - Adres URL Twojego forum.<br />
	{$current_time} - Aktualny czas.<br />
	{$member.email} - Adres e-mail aktualnego użytkownika.<br />
	{$member.link} - Link do profilu aktualnego użytkownika.<br />
	{$member.id} - Id aktualnego użytkownika.<br />
	{$member.name} - Nazwa aktualnego użytkownika. (do personalizacji)<br />
	{$latest_member.link} - Link do profilu ostatnio zarejestrowanego użytkownika.<br />
	{$latest_member.id} - Id ostatnio zarejestrowanego użytkownika.<br />
	{$latest_member.name} - Nazwa ostatnio zarejestrowanego użytkownika.';
$helptxt['attachmentEncryptFilenames'] = 'Kodowanie nazwy załącznika umożliwia posiadanie więcej niż jednego załącznika o tej samej nazwie, 
	dla bezpieczeństwa użyj plików .php dla załącznika i wzmocnij ochronę. Jednakże może to utrudnić odbudowę bazy danych w pewnych 
	drastycznych przypadkach.';

$helptxt['failed_login_threshold'] = 'Ustawia liczbę nieudanych prób logowania zanim użytkownik zostanie przekierowany do strony z przypomnieniem hasła.';
$helptxt['oldTopicDays'] = 'Jeśli ta opcja jest włączona, użytkownik zobaczy ostrzeżenie podczas próby napisania wiadomości w wątku, w którym nikt nic nie napisał w podanym w tym ustawieniu okresie czasu (w dniach). Ustawienie ilości dni na 0 spowoduje wyłączenie pokazywania ostrzeżeń.';
$helptxt['edit_wait_time'] = 'Liczba sekund, w których można jeszcze edytować wiadomość zanim zastanie zapisana informacja o dacie ostatniej modyfikacji.';
$helptxt['edit_disable_time'] = 'Liczba minut po upływie których użytkownik nie będzie mógł edytować napisanej przez siebie wiadomości. Ustaw 0 by wyłączyć.<br /><br /><em>Pamiętaj: Opcja ta nie wpłynie na użytkowników mających pozwolenie na edycję wiadomości pozostałych użytkowników.</em>';
$helptxt['posts_require_captcha'] = 'To ustawienie zmusza użytkowników do przejścia weryfikacji anty-spam bot, za każdym razem, kiedy chcą napisać wiadomość na forum. Tylko użytkownicy o ilości napisanych wiadomości, mniejszej niż ustawiona liczba, będą zmuszeni przejść tę procedurę. To powinno pomóc zwalczać spamowanie przez automatyczne skrypty.';
$helptxt['enableSpellChecking'] = 'Włącza sprawdzanie pisowni. Musisz mieć zainstalowaną bibliotekę pspell na serwerze, a Twoja konfiguracja PHP musi być ustawiona do użycia tej biblioteki. Wydaje się że twój serwer ' . (function_exists('pspell_new') ? 'MA skonfigurowany pspell' : 'NIE MA skonfigurowanego pspell\'a') . '.';
$helptxt['disable_wysiwyg'] = 'To ustawienie wyłącza wszystkim użytkownikom możliwość korzystania z edytora WYSIWYG (&quot;What You See Is What You Get&quot;) na stronie edycji wiadomości.';
$helptxt['lastActive'] = 'Ustawia liczbę minut przez które ludzie będą widoczni na głównej stronie forum jako aktywni. Domyślnie 15 minut.';

$helptxt['customoptions'] = 'Ta sekcja definiuje opcje dostępne dla użytkownika z listy rozwijalnej. Jest klika kluczowych punktów do zauważenia w tej sekcji:
	<ul class="normallist">
		<li><b>Opcje Domyślne:</b> Zależnie, które opcje mają &quot;przycisk radio&quot; zaznaczony, będą one domyślnym wyborem użytkownika gdy otworzy swój profil.</li>
		<li><b>Usuwanie Opcji:</b> Aby usunąć opcję po prostu odznacz ją - wszyscy użytkownicy z zaznaczoną daną opcją, będą mieli ją odznaczoną.</li>
		<li><b>Zmiana kolejności Opcji:</b> Możesz zmienić kolejność opcji poprzez przeniesienie tekstu pomiędzy boksami. Jednakże - ważna uwaga - musisz upewnić się, że <b>nie</b> przenosisz tekstu, podczas zmiany kolejności opcji, w innym wypadku dane użytkownika zostaną utracone.</li>
	</ul>';

$helptxt['autoOptDatabase'] = 'Ta opcja zoptymalizuje bazę danych co zadaną ilość dni. Ustaw 1, aby optymalizować bazę danych codziennie. Możesz również określić maksymalną ilość użytkowników będących online na forum. Dzięki temu nie przeciążysz serwera i nie sprawisz, że użytkownicy będą niezadowoleni z powolnego działania forum.';
$helptxt['autoFixDatabase'] = 'Automatycznie naprawia uszkodzone tabele i przywraca działanie forum tak, jakby nic się nie stało. Może być to użyteczne, ponieważ jedynym sposobem na naprawę jest naprawa tabeli, a dzięki temu forum nie będzie wyłączone dopóki nie dowiesz się o awarii. Zostaniesz powiadomiony emailem jeśli coś takiego się stanie.';

$helptxt['enableParticipation'] = 'Ta opcja pokazuje małą ikonę przy wątkach, w których użytkownik napisał.';

$helptxt['db_persist'] = 'Ustal stałe połączenie z bazą danych aby zwiększyć wydajność. Jeśli nie korzystasz z serwera dedykowanego, może to powodować problemy z Twoim hostem.';
$helptxt['ssi_db_user'] = 'Opcjonalne ustawienie, które zezwoli na użycie innej nazwy użytkownika oraz hasła do bazy danych, jeśli używasz SSI.php.';

$helptxt['queryless_urls'] = 'Zmienia troszkę format adresów URL tak, aby były one lepiej indeksowane przez wyszukiwarki. Będą one wyglądać mniej więcej tak index.php/topic,1.html.<br /><br />Ta funkcja' . (isset($_SERVER['SERVER_SOFTWARE']) && (strpos($_SERVER['SERVER_SOFTWARE'], 'Apache') !== false || strpos($_SERVER['SERVER_SOFTWARE'], 'lighttpd') !== false) ? '' : 'nie ') . ' będzie działać na Twoim serwerze.';
$helptxt['countChildPosts'] = 'Po włączeniu tej opcji, przy działach zawierających poddziały pojawi się liczba wiadomości będąca sumą poddziałów. <br /><br />Może to znacząco spowolnić forum, ale dzięki temu działy z poddziałami niezawierające wiadomości nie będą pokazywać 0 wiadomości.';
$helptxt['fixLongWords'] = 'Ta opcja spowoduje dzielenie wyrazów dłuższych niż określona ilość znaków na części tak, aby nie psuły one wyglądu forum. (tak bardzo...) Ta opcja nie powinna być ustawiona na wartość poniżej 40. Opcja nie będzie działać na forum gdzie jest używany UTF-8 oraz PHP w wersji niższej niż 4.4.0. To ' . (empty($GLOBALS['context']['utf8']) || version_compare(PHP_VERSION, '4.4.0') != -1 ? 'BĘDZIE' : 'NIE BĘDZIE') . ' działać na twoim serwerze';
$helptxt['allow_ignore_boards'] = 'Zaznaczenie tej opcji umożliwi użytkownikom wybranie działów, które chcieliby ignorować.';

$helptxt['who_enabled'] = 'Ta opcja pozwala Tobie włączyć lub wyłączyć możliwość sprawdzania użytkownikom kto przegląda forum i co kto robi.';

$helptxt['recycle_enable'] = '&quot;Przywraca&quot; usunięte wątki i wiadomości w określonym dziale.';

$helptxt['enableReportPM'] = 'Ta opcja pozwala twoim użytkownikom na zgłaszanie prywatnych wiadomości, które otrzymali, do ekipy administracyjnej. Może być to pomocne przy tropieniu nadużyć systemu prywatnych wiadomości.';
$helptxt['max_pm_recipients'] = 'Ta opcja pozwala na ustawienie maksymalnej ilości odbiorców wiadomości prywatnych, wysyłanych przez użytkownika forum. Może być to użyteczne do powstrzymania spamu wysyłanego przy użyciu systemu PW. Pamiętaj, że użytkownicy z uprawnieniami do wysyłania newsletterów nie są objęci tym ograniczeniem. Wpisanie wartości zerowej spowoduje wyłączenie limitu.';
$helptxt['pm_posts_verification'] = 'Ta opcja wymusi na użytkownikach wprowadzenie kodu z obrazka przy każdym wysyłaniu prywatnej wiadomości. Tylko użytkownicy o liczbie wiadomości poniżej ustawionej liczby będą musieli wpisywać kod. Ta funkcja pomaga w walce z automatycznym spamem.';
$helptxt['pm_posts_per_hour'] = 'Ogranicza liczbę prywatnych wiadomości jaką użytkownik może wysłać w ciągu godziny. Nie wpływa na moderatorów i administrację forum.';

$helptxt['default_personal_text'] = 'Ustawia domyślny tekst który użytkownicy będą mieli ustawiony w polu &quot;prywatny tekst/podpis.&quot;';

$helptxt['modlog_enabled'] = 'Loguj wszystkie czynności moderacyjne.';

$helptxt['guest_hideContacts'] = 'Jeśli wybierzesz tę opcję, to adresy email i numery kontaktów komunikatorów wszystkich użytkowników 
	będą ukrywane przed gośćmi.';

$helptxt['registration_method'] = 'Ta opcja umożliwia wybór metody rejestracji, przez osoby chcące dołączyć do użytkowników forum. Masz wybór pomiędzy:<br /><br />
	<ul class="normallist">
		<li>
			<strong>Rejestracja wyłączona:</strong><br />
				Wyłącza rejestrację, co oznacza, że jedyny sposób na dołączenie do grona użytkowników, to stworzenie konta przez administratora.<br />
		</li><li>
			<strong>Rejestracja natychmiastowa</strong><br />
				Nowi użytkownicy mogą zalogować się i pisać wiadomości bezpośrednio po rejestracji.<br />
		</li><li>
			<strong>Aktywacja użytkownika</strong><br />
				Nowi użytkownicy po rejestracji otrzymają email z odnośnikiem do aktywacji konta. Dopiero po kliknięciu staną się pełnoprawnymi użytkownikami forum. Ta opcja zapobiega podawaniu niepoprawnych adresów email.<br />
		</li><li>
			<strong>Zatwierdzenie użytkownika</strong><br />
				Nowi użytkownicy po rejestracji muszą zaczekać, aż ich rejestrację zatwierdzi administrator.
		</li>
	</ul>';
$helptxt['register_openid'] = '<b>Identyfikacja z OpenID</b><br />
	OpenID oznacza używanie jednej nazwy użytkownika pomiędzy różnymi stronami, w celu ulepszenia doznań z bycia  online. Aby użyć OpenID musisz najpierw stworzyć konto OpenID - listę dostawców znajdziesz na <a href="http://openid.net/" target="_blank">Oficjalnej stronie OpenID</a><br /><br />
	Kiedy już będziesz miał konto OpenID po prostu wpisz swój unikatowy adres identyfikacyjny do pola wprowadzania i wyślij. Zostaniesz przeniesiony na witrynę dostawcy w celu sprawdzenia tożsamości, przed przyznaniem dostępu do strony.<br /><br />
	Podczas pierwszej wizyty na stronie zostaniesz poproszony o potwierdzenia paru detali zanim zostaniesz rozpoznany, po czym będziesz mógł się zalogować na stronę i zmienić swoją konfigurację profilu używając swojego OpenID.<br /><br />
	Po więcej informacji odwiedź <a href="http://openid.net/" target="_blank">Oficjalną stronę OpenID</a>';

$helptxt['send_validation_onChange'] = 'Gdy ta opcja jest zaznaczona wszyscy użytkownicy którzy zmienią swój adres email w profilu będą musieli reaktywować swoje konto poprzez email wysłany na nowy adres.';
$helptxt['send_welcomeEmail'] = 'Gdy ta opcja jest włączona nowi użytkownicy otrzymają emaila witającego ich na Twoim forum.';
$helptxt['password_strength'] = 'To ustawienie określa wymaganą siłę haseł użytkowników Twojego forum. Im silniejsze jest hasło, tym trudniej je odgadnąć lub złamać. 
	Dostępne są następujące ustawienia dla siły haseł.
	<ul class="normallist">
		<li><strong>Niska:</strong> Hasło musi mieć długość co najmniej czterech znaków.</li>
		<li><strong>Średnia:</strong> Hasło musi mieć długość co najmniej ośmiu znaków i nie może być częścią nazwy użytkownika lub jego adresu email.</li>
		<li><strong>Wysoka:</strong> To samo, co w Średnim, poza tym, że hasło musi składać się z dużych i małych liter oraz co najmniej jednej cyfry.</li>
	</ul>';

$helptxt['coppaAge'] = 'Wartość podana w tym polu określa minimalny wiek użytkownika pozwalający na natychmiastową rejestrację na forum.
	Podczas rejestracji użytkownik będzie musiał potwierdzić, czy przekroczył określony wiek. Jeżeli odpowiedź będzie negatywna rejestracja zostanie odrzucona lub zawieszona do momentu potwierdzenia przez dorosłego opiekuna - w zależności od wybranego trybu.
	Jeżeli zostanie wpisane 0 wszelkie restrykcje związane z wiekiem będą ignorowane.';
$helptxt['coppaType'] = 'Jeśli ograniczenia wieku są włączone, to w tym miejscu można wybrać w jaki sposób traktować osoby poniżej wymaganego wieku. Do wyboru są dwa tryby postępowania:
	<ul class="normallist">
		<li>
			<strong>Odrzucenie próby rejestracji:</strong><br />
				Każdy próba rejestracji nowego użytkownika poniżej wymaganego wieku zostanie odrzucona.<br />
		</li><li>
			<strong>Wymóg zatwierdzenia przez rodzica bądź opiekuna</strong><br />
				Każdy nowy użytkownik poniżej wymaganego wieku, musi przesłać zgodę rodziców bądź opiekunów, zanim jego konto zostanie aktywowane. 
				Zostanie też przesłany im standardowy formularz do wypełnienia przez rodziców lub opiekunów, oraz dane kontaktowe, na jaki ma on być wysłany.
		</li>
	</ul>';
$helptxt['coppaPost'] = 'Miejsce na wpisanie danych kontaktowych jest wymagane, tak by rodzice lub opiekunowie małoletnich mogli przesłać formularz ze zgodą. Musi być wypełnione przynajmniej pole adresowe lub numer faksu.';

$helptxt['allow_hideOnline'] = 'Zaznaczając tę opcje pozwolisz użytkownikom na ukrycie swojego statusu online przed innymi użytkownikami (oprócz administratorów). Jeżeli opcja pozostanie wyłączona jedynie osoby moderujące forum będą mogły ukryć swoją obecność. Wyłączenie tej opcji nie zmieni istniejącego statusu użytkownika - powstrzyma ich przed ukrywaniem statusu w przyszłości.';
$helptxt['make_email_viewable'] = 'Jeśli ta opcja jest włączona, adresy email użytkowników zamiast być ukryte dla członków grup i gości będą publicznie widoczne  na forum. Włączenie tego narazi użytkowników na wielkie ryzyko zostania ofiarą spamu jako rezultat mailowych żniwiarzy przeglądających twoje forum. Zauważ, że ta opcja nie nadpisuje ustawień użytkowników o ukrywaniu swoich adresów email przed użytkownikami. Włączenie tej opcji <b>nie</b> jest rekomendowane.';
$helptxt['meta_keywords'] = 'Te słowa-klucze pojawią się w kodzie każdej strony, aby naprowadzić wyszukiwarki internetowe (itp.) na główną zawartość Twojej strony. Powinna to być lista słów, każde słowo powinno być oddzielone przecinkiem oraz bez użycia HTML. Jeśli pozostawisz to pole puste, wtedy ustawiona będzie domyślna lista. Oto jak ona wygląda: <br /><div class="smalltext">&quot;PHP, MySQL, bulletin, board, free, open, source, smf, simple, machines, forum&quot;</div>';

$helptxt['latest_support'] = 'Ten panel pokazuje niektóre z najczęstszych problemów i pytań dotyczących konfiguracji Twojego serwera. Nie martw się, te informacje nie są nigdzie zapisywane.<br /><br />Jeśli cały czas pojawia komunikat &quot;Retrieving support information...&quot;, Twój komputer prawdopodobnie nie może połączyć się z <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_packages'] = 'Tutaj możesz zobaczyć kilka z najpopularniejszych i kilka losowych pakietów lub modyfikacji, których instalacja jest szybka i łatwa. <br /><br />Jeśli ta sekcja się nie pojawia, Twój komputer nie może prawdopodobnie połączyć się z <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_themes'] = 'Ten dział pokazuje kilka ostatnich i najpopularniejszych szablonów z <a href="http://www.simplemachines.org/">www.simplemachines.org</a>. Może się jednak nie wyświetlić poprawnie, jeśli twój komputer nie jest w stanie znaleźć <a href="http://www.simplemachines.org/">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = 'Ze względów bezpieczeństwa odpowiedź na Twoje pytanie (tak jak i na Twoje hasło) jest zakodowana w taki sposób, że tylko SMF może go potwierdzić. Nigdy nie powie Ci (ani nikomu innemu) jaka jest Twoja odpowiedz i hasło.';
$helptxt['moderator_why_missing'] = 'Moderatorzy ustalani są poprzez <a href="javascript:window.open(\'%1$s?action=admin;area=manageboards\'); self.close();">zarządzanie działami</a>, dla każdego działu osobno.';

$helptxt['permissions'] = 'Zezwolenia pozwalają administratorom decydować o dostępie grup użytkowników do różnych czynności na forum.<br /><br />Można zarządzać zezwoleniami poprzez działy lub grupy użytkowników klikając w \'Modyfikuj.\'';
$helptxt['permissions_board'] = 'Jeśli dział ma ustawienie \'globalne\', oznacza to, że nie posiada żadnych dodatkowych pozwoleń. Ustawienie \'lokalne\' oznacza, że dział posiada swoje odrębne zezwolenia. Pozwala to na ograniczenie lub zwiększenie dostępu do któregoś z działów, bez konieczności zmian w całym forum.';
$helptxt['permissions_quickgroups'] = 'Ta opcja pozwala na szybkie przyznanie domyślnych zezwoleń dla grup. Standardowe to zwyczajne prawa użytkownika. Restrykcyjne to takie jakie ma gość. Moderatorskie to prawa jakie posiadają moderatorzy. Przynależność do obsługi forum daje prawa bardzo bliskie administratorskim.';
$helptxt['permissions_deny'] = 'Zabronienie jakiejś czynności jest przydatne, jeśli chcesz zmienić pozwolenia konkretnemu użytkownikowi. Możesz też stworzyć grupę użytkowników z odebranymi prawami i dodać tam tych użytkowników.<br /><br />Zalecamy ostrożne stosowanie. Po zabronieniu użytkownikowi wybranych czynności na forum, nie będzie on miał do nich dostępu, niezależnie od grupy, do której przynależy.';
$helptxt['permissions_postgroups'] = 'Zezwolenia dla grup opartych na ilości wiadomości pozwalają na dodanie dodatkowych praw użytkownikom, którzy napisali określoną liczbę wiadomości. Tak by np. nagrodzić wiernych użytkowników forum. Te zezwolenia <em>dodają się</em> do zezwoleń z innych grup, do których należą użytkownicy.';
$helptxt['membergroup_guests'] = 'Grupa Goście to wszyscy użytkownicy, którzy nie są zalogowani.';
$helptxt['membergroup_regular_members'] = 'Użytkownikami bez grupy są wszyscy użytkownicy którzy są zarejestrowani, ale nie mają przydzielonej żadnej grupy.';
$helptxt['membergroup_administrator'] = 'Administrator może z definicji robić wszystko i widzieć wszystkie fora. Nie istnieją ustawienia uprawnień dla administratora.';
$helptxt['membergroup_moderator'] = 'Moderatorzy to specjalna grupa. Pozwolenia i ustawienia dotyczące tej grupy dotyczą się moderatorów, ale <em>tylko w działach, w których moderują</em>. Poza tymi działami, ich prawa nie różnią się od praw zwykłych użytkowników.';
$helptxt['membergroups'] = 'W SMF są dwa rodzaje grup użytkowników:
	<ul class="normallist">
		<li><strong>Zwykłe grupy:</strong> To takie grupy, do których użytkownicy nie są przydzielani automatycznie. By przypisać użytkownika do grupy, administrator musi wejść do jego profilu i kliknąć na &quot;ustawienia konta&quot;. Z tego miejsca można przydzielić go do dowolnej liczby istniejących grup.</li>
		<li><strong>Grupy oparte na ilości wiadomości:</strong> W odróżnieniu od zwykłych grup, do grup opartych na ilości wiadomości napisanych przez użytkownika, nie można przydzielić użytkowników. Użytkownicy są przydzielani do nich automatycznie po osiągnięciu określonej liczby wiadomości.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Możesz edytować te zdarzenia poprzez kliknięcie na czerwonej gwiazdce (*) zaraz obok ich nazw.';

$helptxt['maintenance_backup'] = 'Tutaj możesz zapisać kopię wszystkich wiadomości, ustawień, użytkowników i innych informacji dotyczących Twojego forum w bardzo dużym pliku.<br /><br />Zaleca się, aby dla bezpieczeństwa robić to dość często (np. raz w tygodniu).';
$helptxt['maintenance_rot'] = 'Pozwala <strong>całkowicie</strong> i <strong>nieodwracalnie</strong> usunąć stare wątki. Zaleca się zrobić najpierw kopię na wypadek, gdyby zostało usunięte coś, czego nie chciałeś skasować.<br /><br />Używaj tej opcji z należytą ostrożnością.';
$helptxt['maintenance_members'] = 'Pozwala <strong>całkowicie</strong> i <strong>nieodwracalnie</strong> usunąć konta użytkowników z Twojego forum. Zaleca się zrobić najpierw kopię na wypadek, gdyby zostało usunięte coś, czego nie chciałeś skasować.<br /><br />Używaj tej opcji z należytą ostrożnością.';

$helptxt['avatar_server_stored'] = 'Ta opcja umożliwia użytkownikom forum na użycie awatarów znajdujących się już na twoim serwerze. Znajdują się one przeważnie w tym samym katalogu co SMF w folderze awatarów.<br />Jako podpowiedź dodamy, że jeśli stworzysz oddzielne katalogi w folderze awatarów, powstaną  &quot;kategorie&quot; awatarów.';
$helptxt['avatar_external'] = 'Kiedy ta funkcja jest włączona, użytkownicy mogą podać własny URL do awatara. Minusem tego jest to, że w niektórych przypadkach, mogą oni użyć awatara zbyt dużego, albo z podobizną, której sobie nie życzysz na swoim forum.';
$helptxt['avatar_download_external'] = 'Jeżeli włączysz tę opcję, będzie możliwe pobranie awatarów z zewnętrznego adresu URL podanego przez użytkownika. Awatar będzie traktowany jak wgrany na serwer.';
$helptxt['avatar_upload'] = 'Ta opcja jest podobna do &quot;Zezwól użytkownikom na posiadanie awatarów z innego serwera&quot;, ale masz lepszą kontrolę nad awatarami, możesz zmieniać ich rozmiar a twoi użytkownicy nie muszą posiadać własnego serwera, na którym trzymaliby swoje awatary.<br /><br />Jednakże  są pewne minusy tej opcji. Musisz posiadać sporo miejsca na serwerze na awatary swoich forumowiczów.';
$helptxt['avatar_download_png'] = 'Pliki PNG są większe, ale oferują lepszą jakość. Jeśli ta opcja jest odznaczona, zostaną użyte pliki JPEG - które są zwykle mniejsze, ale zwykle o mniejszej jakości.';

$helptxt['disableHostnameLookup'] = 'Ta opcja wyłącza sprawdzanie nazwy DNS hosta, które na niektórych serwerach jest bardzo wolne. Zauważ że spowoduje to obniżenie efektywności banowania.';

$helptxt['search_weight_frequency'] = 'Współczynniki wag są używane do zadecydowania, które wiadomości pasujące do wyszukiwania, są najważniejsze. Możesz zmienić wagi, tak by dopasować wyszukiwanie do tego co uważasz za najważniejsze na swoim forum. Na przykład, jeśli używasz forum głównie do pisania aktualności, to ważniejsza może być data wysłania wiadomości i tam powinna być najwyższa waga. Wszystkie liczby wag powinny być dodatnimi liczbami całkowitymi. Wszystkie wagi są powiązane.<br /><br />Ten współczynnik bazuje na częstości występowania. Zlicza liczbę pasujących do wyszukiwania wiadomości i dzieli je przez liczbę wiadomości w wątku.';
$helptxt['search_weight_age'] = 'Współczynniki wag są używane do zadecydowania, które wiadomości pasujące do wyszukiwania, są najważniejsze. Możesz zmienić wagi, tak by dopasować wyszukiwanie do tego co uważasz za najważniejsze na swoim forum. Na przykład, jeśli używasz forum głównie do pisania aktualności, to ważniejsza może być data wysłania wiadomości i tam powinna być najwyższa waga. Wszystkie liczby wag powinny być dodatnimi liczbami całkowitymi. Wszystkie wagi są powiązane.<br /><br />Ten współczynnik przydziela tym większą ważność im nowsza wiadomość.';
$helptxt['search_weight_length'] = 'Współczynniki wag są używane do zadecydowania, które wiadomości pasujące do wyszukiwania, są najważniejsze. Możesz zmienić wagi, tak by dopasować wyszukiwanie do tego co uważasz za najważniejsze na swoim forum. Na przykład, jeśli używasz forum głównie do pisania aktualności, to ważniejsza może być data wysłania wiadomości i tam powinna być najwyższa waga. Wszystkie liczby wag powinny być dodatnimi liczbami całkowitymi. Wszystkie wagi są powiązane.<br /><br />Ten współczynnik bazuje na rozmiarze wątku. Im więcej w nim wiadomości, tym bardziej jest ważny.';
$helptxt['search_weight_subject'] = 'Współczynniki wag są używane do zadecydowania, które wiadomości pasujące do wyszukiwania, są najważniejsze. Możesz zmienić wagi, tak by dopasować wyszukiwanie do tego co uważasz za najważniejsze na swoim forum. Na przykład, jeśli używasz forum głównie do pisania aktualności, to ważniejsza może być data wysłania wiadomości i tam powinna być najwyższa waga. Wszystkie liczby wag powinny być dodatnimi liczbami całkowitymi. Wszystkie wagi są powiązane.<br /><br />Ten współczynnik daje większą wagę wiadomościom, w których wyszukiwana fraza znajduje się w temacie wątku.';
$helptxt['search_weight_first_message'] = 'Współczynniki wag są używane do zadecydowania, które wiadomości pasujące do wyszukiwania, są najważniejsze. Możesz zmienić wagi, tak by dopasować wyszukiwanie do tego co uważasz za najważniejsze na swoim forum. Na przykład, jeśli używasz forum głównie do pisania aktualności, to ważniejsza może być data wysłania wiadomości i tam powinna być najwyższa waga. Wszystkie liczby wag powinny być dodatnimi liczbami całkowitymi. Wszystkie wagi są powiązane.<br /><br />Ten współczynnik sprawdza czy wyszukiwana fraza znajduje się w pierwszej wiadomości wątku.';
$helptxt['search_weight_sticky'] = 'Współczynniki wag są używane do zadecydowania, które wiadomości pasujące do wyszukiwania, są najważniejsze. Możesz zmienić wagi, tak by dopasować wyszukiwanie do tego co uważasz za najważniejsze na swoim forum. Na przykład, jeśli używasz forum głównie do pisania aktualności, to ważniejsza może być data wysłania wiadomości i tam powinna być najwyższa waga. Wszystkie liczby wag powinny być dodatnimi liczbami całkowitymi. Wszystkie wagi są powiązane.<br /><br />Ten współczynnik przydziela większą ważność wątkom przyklejonym.';
$helptxt['search'] = 'Tutaj możesz dostosować wszystkie ustawienia dla funkcji wyszukiwania. Nie możesz tutaj ustawić kto ma do niej dostęp. Aby to zrobić przejdź do ekranu \'zarządzaj zezwoleniami\' w panelu administracyjnym.';
$helptxt['search_why_use_index'] = 'Indeks wyszukiwania może w znaczny sposób przyspieszyć wyszukiwanie na forum. Szczególnie gdy liczba wiadomości na forum jest bardzo duża, wyszukiwanie bez indeksu może zająć dużo czasu i znacznie obciążać bazę danych. Jeśli ilość wiadomości na Twoim forum wzrośnie powyżej 50 tysięcy, weź pod uwagę stworzenie indeksu, by zwiększyć wydajność Twojego forum.<br /><br />Weź jednak pod uwagę, że indeks wyszukiwania może zająć sporo miejsca. Indeks pełnotekstowy jest wbudowany w indeks MySQL. Jest stosunkowo niewielki (podobnych rozmiarów co tabela wiadomości), lecz nie wszystkie słowa są indeksowane, a niektóre wyszukiwania i tak okazują się wolne. Indeks wybiórczy jest często większy (zależnie od konfiguracji do 3 razy większy niż tabela wiadomości), lecz jego wydajność jest większa od indeksu pełnotekstowego i nie jest zależna od rodzaju wyszukiwań.';

$helptxt['see_admin_ip'] = 'Adresy IP są pokazywane administratorom i moderatorom w celu ułatwienia moderacji i umożliwienia śledzenia osób, które robią złe rzeczy na forum. Pamiętaj, że adresy IP nie zawsze mogą być identyfikowane, a wiele osób zmienia swój adres IP co jakiś czas.<br /><br />Użytkownicy widzą swoje własne adresy IP.';
$helptxt['see_member_ip'] = 'Twój adres IP jest pokazywany jedynie Tobie i moderatorom. Pamiętaj że ta informacja nie identyfikuje jednoznacznie ludzi, ponieważ adresy IP zwykle się zmieniają okresowo<br /><br />Nie możesz sprawdzić adresów IP innych członków, a oni twojego.';
$helptxt['whytwoip'] = 'SMF używa różnorodnych metod detekcji adrsu IP użytkownika. Zwykle metody te, dają ten sam rezultat, czyli jeden adres IP, ale w niektórych sytuacjach, może zostać wykryty więcej niż jeden adres IP. W tym przypadku SMF pokaże oba adresy i użyje ich do sprawdzenia listy zbanowanych adresów. Możesz kliknąć w którykolwiek adres aby go śledzić lub zbanować, jeśli to konieczne.';

$helptxt['ban_cannot_post'] = 'Ban \'Nie może wysyłać wiadomości\' włącza forum w tryb tylko-do-odczytu dla banowanego użytkownika. Użytkownik nie może tworzyć nowych wątków, odpowiadać na istniejące, wysyłać prywatnych wiadomości oraz oddawać głosów w ankietach. Zbanowany użytkownik może nadal odczytywać prywatne wiadomości oraz wątki.<br /><br />Wiadomość ostrzegawcza jest wyświetlana użytkownikowi jeśli został zbanowany w ten sposób.';

$helptxt['posts_and_topics'] = '	<ul class="normallist">
		<li>
			<strong>Ustawienia wiadomości</strong><br />
			Tu możesz zmienić ustawienia związane z pisaniem wiadomości i sposobem ich wyświetlania, a także włączyć sprawdzanie ortografii (jeśli serwer to umożliwia).
		</li><li>
			<strong>Bulletin Board Code</strong><br />
			Tu włączysz możliwość formatowania wiadomości, oraz możesz wybrać które z kodów mają być dostępne dla użytkowników.
		</li><li>
			<strong>Słowa cenzurowane</strong>
			By utrzymać słownictwo forum pod kontrolą, możesz ustawić które słowa zostaną wymienione na ich \'poprawne\' odpowiedniki.
		</li><li>
			<strong>Ustawienia wątków</strong>
			Tu możesz zmieniać ustawienia dotyczące wątków: ilość na stronę, ilość potrzebna by oznaczyć wątek jako gorący, opcje przyklejonych wątków itp.
		</li>
	</ul>';
$helptxt['spider_group'] = 'Ustawiając uprawnienia według grupy, spowodujesz, że kiedy gość zostanie rozpoznany jako robot, jego uprawnienia zmienią się ze standardowych gościa, na uprawnienia grupy, którą tu ustawisz. Możesz użyć tej opcji do ograniczenia dostępu silnikom wyszukiwarek. Przykładowo: Stwórz grupę o nazwie &quot;Roboty&quot; i ustaw ją tutaj. Możesz teraz zabrać tej grupie możliwość oglądania profili użytkowników, co jednocześnie uniemożliwi robotom indeksowanie profili użytkowników Twojego forum. <br />Uwaga: Detekcja robotów nie jest idealna i może być symulowana przez użytkowników, dlatego nie ma gwarancji, że ograniczenia będą zastosowane tylko do silników wyszukiwarek, które dodałeś.';
$helptxt['show_spider_online'] = 'Te ustawienia pozwolą Ci wybrać, czy roboty powinny być wymienione na liście użytkowników online w indeksie działu i stronie &quot;Kto jest online&quot;. Dostępne opcje to:
	<ul class="normallist">
		<li>
			<strong>Wcale</strong><br />
			Roboty będą po prostu wyświetlane jako goście dla wszystkich użytkowników.
		</li><li>
			<strong>Pokaż ilość robotów</strong><br />
			Indeks działu wyświetli liczbę robotów aktualnie odwiedzających forum.
		</li><li>
			<strong>Pokaż Nazwy Robotów</strong><br />
			Każda nazwa robota będzie wyświetlana, więc użytkownicy mogą zobaczyć ile robotów aktualnie odwiedza forum - efekt odnosi się do Indeksu działu jak i strony Kto jest online.
		</li><li>
			<strong>Pokaż Nazwy Robotów - Tylko dla Administratora</strong><br />
			Jak wyżej z wyjątkiem tego, że tylko Administratorzy mogą zobaczyć status robotów - dla pozostałych użytkowników roboty ukazują się jako goście.
		</li>
	</ul>';

$helptxt['birthday_email'] = 'Wybierz schemat mailowych życzeń urodzinowych. Podgląd będzie widoczny w polach Tytuł Maila i w Treść Maila.<br /><strong>Zauważ:</strong> Ustawienie tej opcji nie aktywuje automatycznie mailów urodzinowych. Aby aktywować maile urodzinowe użyj <a href="%1$s?action=admin;area=scheduledtasks;%3$s=%2$s" target="_blank" class="new_win">Menadżera Zadań</a> i aktywuj zadanie rozsyłania maili urodzinowych.';
$helptxt['pm_bcc'] = 'Kiedy wysyłasz Prywatną Wiadomość, możesz wybrać odbiorców jako UDW czyli &quot;Ukryte Do Wiadomości&quot;. Odbiorcy oznaczeni UDW, nie będą widoczni dla pozostałych adresatów wiadomości.';

$helptxt['move_topics_maintenance'] = 'Ta opcja pozwoli Ci na przesunięcie wszystkich wiadomości z wybranego forum na inne forum.';
$helptxt['maintain_reattribute_posts'] = 'Możesz użyć tej funkcji, jeśli chcesz przypisać wiadomości napisane przez gości do zarejestrowanego użytkownika. Jest to przydatne np. w sytuacji, gdy użytkownik usunął swoje konto, później zmienił zdanie i chce, aby jego stare wiadomości, były skojarzone z nowym kontem użytkownika.';
$helptxt['chmod_flags'] = 'Możesz ręcznie ustawić zezwolenia plikom, które zaznaczyłeś. Aby to zrobić, wpisz CHMOD jako wartość numeryczną. Pamiętaj - te zmiany nie odniosą skutku w systemach operacyjnych Microsoft Windows.';

$helptxt['postmod'] = 'Ta sekcja pozwala członkom zespołu moderatorskiego (z odpowiednimi zezwoleniami) akceptować odpowiedzi i wątki zanim zostaną pokazane.';

$helptxt['field_show_enclosed'] = 'Osadza w HTML lub tekst wprowadzone przez użytkownika dane. Pozwoli Ci na dodanie większej ilości protokołów (komunikatorów), obrazków itp. Dla przykładu:<br /><br />
		&lt;a href="http://strona.pl/{INPUT}"&gt;&lt;img src="{DEFAULT_IMAGES_URL}/icon.gif" alt="{INPUT}" /&gt;&lt;/a&gt;<br /><br />
		Zauważ, że możesz użyć kilka zmiennych:<br />
		<ul class="normallist">
			<li>{INPUT} - Wstawia zawartość wprowadzoną przez użytkownika.</li>
			<li>{SCRIPTURL} - Adres forum.</li>
			<li>{IMAGES_URL} - Adres folderu z obrazkami obecnego stylu.</li>
			<li>{DEFAULT_IMAGES_URL} - Adres folderu z obrazkami domyślnego stylu.</li>
		</ul>';

$helptxt['custom_mask'] = 'Maska wprowadzania jest ważna dla bezpieczeństwa Twojego forum. Sprawdzenie maską wpisanych przez użytkownika danych ubezpieczy forum przed użyciem pól w niepowołany sposób. Oto lista prosty wyrażeń regularnych:<br /><br />
	<span class="smalltext">
		&nbsp;&nbsp;"[A-Za-z]+" - Sprawdza wszystkie wielkie i małe litery alfabetu.<br />
		&nbsp;&nbsp;"[0-9]+" - Sprawdza wszystkie cyfry.<br />
		&nbsp;&nbsp;"[A-Za-z0-9]{7}" - Sprawdza wszystkie wielkie i małe litery alfabetu oraz cyfry, lecz zezwala na tylko siedem znaków.<br />
		&nbsp;&nbsp;"[^0-9]?" - Zabrania jakiejkolwiek cyfry.<br />
		&nbsp;&nbsp;"^([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})$" - Pozwala tylko na 3 lub 6 kodów szesnastkowych.<br />
	</span><br /><br />
	Dodatkowo mogą zostać zdefiniowane specjalne metaznaki ?+*^$ oraz {xx}.
	<span class="smalltext">
		&nbsp;&nbsp;? - Jeden lub żaden znak.<br />
		&nbsp;&nbsp;+ - Jeden lub więcej znaków.<br />
		&nbsp;&nbsp;* - Żaden lub więcej znaków<br />
		&nbsp;&nbsp;{xx} - Konkretna liczba znaków.<br />
		&nbsp;&nbsp;{xx,} - Konkretna liczba lub więcej znaków.<br />
		&nbsp;&nbsp;{,xx} - Konkretna liczba lub mniej znaków.<br />
		&nbsp;&nbsp;{xx,yy} - Liczba znaków pomiędzy jedną a drugą liczbą.<br />
		&nbsp;&nbsp;$ - Początek ciągu.<br />
		&nbsp;&nbsp;^ - Koniec ciągu.<br />
		&nbsp;&nbsp;\\ - Anulowanie znaczenia symboli.<br />
	</span><br /><br />
	Więcej informacji oraz zaawansowane techniki znajdziesz w internecie.';

?>