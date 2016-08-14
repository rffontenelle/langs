<?php

// Language definitions used in admin_bans.php
$lang_admin_bans = array(

'No user message'			=>	'Ingen bruger med det brugernavn er registreret. Hvis du ønsker at tilføje en banlysning som ikke er bundet til et specifikt brugernavn, efterlad da feltet tomt.',
'No user ID message'		=>	'Ingen bruger med det ID er registreret.',
'User is admin message'		=>	'Brugeren %s er administrator og kan ikke blive banlyst. Hvis du ønsker at banlyse en administrator, skal du først degradere ham/hende.',
'User is mod message'		=>	'Brugeren %s er en moderator og kan ikke blive banlyst. Hvis du ønsker at banlyse en moderator, skal du først degradere ham/hende.',
'Must enter message'		=>	'Du skal indtaste enten et brugernavn, en IP adresse eller en e-mail adresse (som det mindste).',
'Cannot ban guest message'	=>	'Gæsten kan ikke blive banlyst.',
'Invalid IP message'		=>	'Du indtastede en ugyldig IP eller IP-interval.',
'Invalid e-mail message'	=>	'E-mail adressen (f.eks. bruger@domæne.com) eller delvise email adresse (f.eks. domæne.com) du indtastede er ugyldig.',
'Invalid date message'		=>	'Du indtastede en ugyldig udløbsdato.',
'Invalid date reasons'		=>	'Formattet skal være YYYY-MM-DD og datoen skal mindst være en dag ud i fremtiden.',
'Ban added redirect'		=>	'Banlysning tilføjet. Omdirigerer …' ,
'Ban edited redirect'		=>	'Banlysning redigeret. Omdirigerer …',
'Ban removed redirect'		=>	'Banlysning fjernet. Omdirigerer …',

'New ban head'				=>	'Ny banlysning',
'Add ban subhead'			=>	'Tilføj banlysning',
'Username label'			=>	'Brugernavn',
'Username help'				=>	'Brugernavn som skal banlyses (ingen forskel på store og små bogstaver).',
'Username advanced help'	=>	'Brugernavn som skal banlyses (ingen forskel på store og små bogstaver). Den næste side vil lade dig indtaste brugerdefinerede IP adresser og email adresser. Hvis du bare ønsker at banlyse en specifik IP eller et IP-interval eller email, efterlad blot feltet blankt.',

'Ban search head'			=>	'Søg i banlysninger',
'Ban search subhead'		=>	'Indtast søgekriterier',
'Ban search info'			=>	'Søg efter banlysninger i databasen. Du kan indtaste et eller flere søgekriterier du ønsker at søge efter. Wildcards i form af stjerner (*) er accepteret. For at vise alle banlysninger efterlad alle felter tomme.',
'Date help'					=>	'(åååå-mm-dd)',
'Message label'				=>	'Besked',
'Expire after label'		=>	'Udløber efter',
'Expire before label'		=>	'Udløber før',
'Order by label'			=>	'Sorter efter',
'Order by username'			=>	'Brugernavn',
'Order by ip'				=>	'IP',
'Order by e-mail'			=>	'E-mail',
'Order by expire'			=>	'Udløbsdato',
'Ascending'					=>	'Stigende',
'Descending'				=>	'Faldende',
'Submit search'				=>	'Indsend søgning',

'E-mail label'				=>	'E-mail',
'E-mail help'				=>	'E-mail adressen eller domænet du ønsker at banlyse (f.eks. mail@domæne.dk eller domæne.dk). For mere info se "Tillad banlyst e-mail adresser" under "Rettigheder".',
'IP label'					=>	'IP adresse/IP-intervaller',
'IP help'					=>	'IP adressen eller IP-intervallet du ønsker at banlyse (f.eks. 150.11.110.1 eller 150.11.110). Separate adresser adskilles med et mellemrum. Hvis en IP adresse allerede er banlyst vil den sidst kendte IP i databasen blive brugt for denne bruger.',
'IP help link'				=>	'Klik %s for at se IP statistik for denne bruger.',
'Ban advanced head'			=>	'Avanceret indstillinger for banlysning.',
'Ban advanced subhead'		=>	'Udvidet banlysning med IP og email',
'Ban message label'			=>	'Banlysningsbesked',
'Ban message help'			=>	'Besked som banlyste brugere vil se på forummet.',
'Message expiry subhead'	=>	'Banlysningsbesked og udløbsdato',
'Ban IP range info'			=>	'Du skal være meget forsigtig hvis du banlyser et IP-interval da der er mulighed for at du banlyser flere brugere med en delvis matchende IP adresse.',
'Expire date label'			=>	'Udløbsdato',
'Expire date help'			=>	'Datoen for når denne banlysning udløber automatisk (format: åååå-mm-dd). Undlad at udfylde for permanent banlysning.',

'Results head'				=>	'Søgeresultater',
'Results username head'		=>	'Brugernavn',
'Results e-mail head'		=>	'E-mail',
'Results IP address head'	=>	'IP adresse/IP-intervaller',
'Results expire head'		=>	'Udløber',
'Results message head'		=>	'Besked',
'Results banned by head'	=>	'Banlyst af',
'Results actions head'		=>	'Handlinger',
'No match'					=>	'Intet match',
'Unknown'					=>	'Ukendt',

);
