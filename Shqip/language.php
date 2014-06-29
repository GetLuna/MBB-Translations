<?php

$lang = array(

//
// Text orientation and encoding
//

'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'sq',

//
// Number and date formatting
//

'lang_decimal_point'				=>	'.',
'lang_thousands_sep'				=>	',',
'lang_time'							=>	'H:i',
'lang_date'							=>	'j M Y',

//
// Notices
//

'Bad request'						=>	'Kërkesë e gabuar. lidhjen qe ju ndiçni është e gabuar, ose është jashtë mundesive tua për tu endur këtu ose nuk egziston më.',
'No view'							=>	'Ju nuk keni leje për të parë këtu në këtë faqe.',
'Bad referrer'						=>	'Gabim HTTP_REFERER. Ju jeni drejtuar këtu nga një burim i paautorizuar. Nese ky problem nuk qendron ju lutem \'Base URL\' shiqoni nese është vënë drejt tek Admin/Opcion dhe ju jeni duke ndjekur apo naviguar këtë duke ndjekur këtë URL. Për tu informuar më shumë rreth kësaj shiqoni tek ModernBB documentation.',
'No permission'						=>	'Ju nuk keni leje për çasje nê këtë faqe.',
'No cookie'							=>	'Duket se jeni kuçur me sukses, Sidoçftë cookie nuk është aktive. Ju lutem shiqoni tek opcionet nese është e mundur për perdorim, lejo cookies për këtë faqe.',
'Pun include extension'				=>  'E pamundur për tu procesuar perfshirja e përdoruesit %s nga pamja %s. "%s" skedaret nuk lejohen',
'Pun include directory'				=>  'E pamundur për tu procesuar perfshirja e përdoruesit %s. Direktori traversal nuk është lejuar',
'Pun include error'					=>  'E pamundur për tu procesuar perfshirja e përdoruesit %s nga pamja %s. Nuk ka ndonje skedar apo file në asnjë direktor të template ose ne direktorin user që përfshihet',
'Settings saved'					=>  'Cilsimet tua u ruajten.',
'User deleted'						=>  'Antari u shlye.',
'User failed'                       =>  'Deshtoj krijimi i përdoruesit, nuk keni vendosur fjalkalim.',
'User created'                      =>  'Përdoruesi u krijua',
'Cache cleared'						=>  'Skedaret e cache-s u shlyen.',

//
// Miscellaneous
//

'Announcement'						=>	'Njoftim',
'Options'							=>	'Cilsimet e përgjithshme',
'Features'							=>	'Veçorit',
'Submit'							=>	'Paraqit', // "Name" of submit buttons
'Search'							=>	'Kërko',
'Ban message'						=>	'Ju jeni i përjashtuar nga ky forum.',
'Ban message 2'						=>	'Perjashtimi skadon me',
'Ban message 3'						=>	'Adminstruesi apo moderatori ka lënë këtë mesazh:',
'Ban message 4'						=>	'Ju lutem parashtroni ndonje pytje tek',
'Never'								=>	'Kurrë',
'Today'								=>	'Sot',
'Yesterday'							=>	'Dje',
'Info'								=>	'Info', // A common table header
'Maintenance'						=>	'Mirëmbajtje',
'Invalid email'						=>	'Posta elektronike që keni shtypur është jovalide.',
'Required'							=>	'(E nevojshme)',
'required field'					=>	'ēshtë fush e kërkuar në forum.', // For javascript form validation
'Last post'							=>	'Postimi fundit',
'by'								=>	'nga', // As in last post by some user
'New posts'							=>	'Postimet e reja', // The link that leads to the first new post
'New posts info'					=>	'Shko tek postimi i parë në temë.', // The popup text for new posts links
'Username'							=>	'Përdoruesi',
'Password'							=>	'Fjalëkalimi',
'Send email'						=>	'Dërgo email',
'Moderated by'						=>	'I moderuar nga',
'Registered table'					=>	'Të regjistruarit',
'Subject'							=>	'Subjekti',
'Message'							=>	'Mesazhi',
'Topic'								=>	'Tema',
'Forum'								=>	'Forum',
'Posts table'						=>	'Postimet',
'Replies forum'						=>	'Pērgjegjiet',
'Page'								=>	'Faqet %s',
'BBCode'							=>	'BBCode',
'img tag'							=>	'[img] etiketa',
'Smilies'							=>	'Animacionet',
'and'								=>	'dhe',
'Image link'						=>	'imazhe', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'shenim', // For [quote]'s
'Mailer'							=>	'%s Mailer', // As in "MyForums Mailer" in the signature of outgoing emails
'Spacer'							=>	'…', // Ellipsis for paginate

//
// Title
//

'Title'								=>	'Titulli',
'Member'							=>	'Antari',
'Moderator'							=>	'Moderator',
'Administrator'						=>	'Administrator',
'Banned'							=>	'I përjashtuar',
'Guest'								=>	'Mysafir',

//
// Stuff for include/parser.php
//

'BBCode error no opening tag'		=>	'[/%1$s] nuk u gjind ndonje përputhje [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] u hap në mes [%2$s], dhe nuk është e lejushme',
'BBCode error invalid self-nesting'	=>	'[%s] was opened within itself, this is not allowed',
'BBCode error no closing tag'		=>	'[%1$s] nuk u gjind ndonje përputhje [/%1$s]',
'BBCode error empty attribute'		=>	'[%s] nuk ka ndonje atribut në etiketime',
'BBCode list size error'			=>	'Lista juaj ka fraza shumë të gjata, ju lutem zvoglojeni më shumë!',

// Stuff for the navigator (top of every page)

//
// User menu
//

'Support'							=>	'Mbeshtetja',
'Help'								=>	'Ndihmë',
'Index'								=>	'Ballina',
'User list'							=>	'Lista e përdoruesve',
'Rules'								=>	'Rregullat',
'Register'							=>	'Regjistrohu',
'Registered'						=>	'Antarsuar qê nga',
'Login'								=>	'Kyçu',
'Profile'							=>	'Profili',
'Logout'							=>	'Çkyqu',
'Backstage'							=>	'Prapaskena',
'New posts header'					=>	'E re',
'Active topics'						=>	'Aktivë',
'Unanswered topics'					=>	'Pa përgjegjie',
'Posted topics'						=>	'Postuar',
'Show new posts'					=>	'Gjej temat me postimet më të reja që nga vizita juaj e fundit.',
'Show active topics'				=>	'Gjej temat me postimet e fundit.',
'Show unanswered topics'			=>	'Gjej temat pa përgjegjie.',
'Show posted topics'				=>	'Gjej temat që ju keni postuar.',
'Mark as read'						=>	'Shënoj si të lexuara',
'Title separator'					=>	' / ',

//
// Stuff for the page footer
//

'Moderate topic'					=>	'Modero temēn',
'All'								=>	'Shfaq të gjitha postimet',
'Move topic'						=>	'Lëviz temen',
'Open topic'						=>	'Hap temën',
'Close topic'						=>	'Mbyll temën',
'Unstick topic'						=>	'Çngjit temën',
'Stick topic'						=>	'Ngjit temēn',
'Moderate forum'					=>	'Modero forumin',
'Powered by'						=>	'Fuqizuar nga %s',
'Thanks'							=>	'Falemenderit që përdoreni %s',

//
// Debug information
//

'Debug table'						=>	'Debug iformacionet',
'Querytime'							=>	'Gjeneruar në %1$s sekonda, %2$s shprehje dyshimi u ekzekutuan',
'Memory usage'						=>	'Perdorimi i memories: %1$s',
'Peak usage'						=>	'(Kulmi: %1$s)',
'Query times'						=>	'Koha (s)',
'Query'								=>	'Pytjet',
'Total query time'					=>	'Totali i shprehjes së dyshimeve time: %s',

//
// First run
//

'First run message'					=>	'Wow, është e mrekullueshme t\'ju kemi juve këtu, Mirë se erdhet dhe falëmenderit për bashkangjitjen. Ne ju kemi bërë gati llogarin përdoreni. ;) Falëmenderit.',
'Hi there'							=>	'Përshendetje, %s',
'Welcome to'						=>	'Mirë se erdhet tek %s',
'Change your avatar'				=>	'Ndrysho avatarin',
'Extend profile'					=>	'Shpreh detajet tua',
'Get help'							=>	'Më ndihmo',
'Do not show again'					=>	'Mos e shfaq më',

//
// For extern.php RSS feed
//

'RSS description'					=>	'Shumica postimeve në temat %s.',
'RSS description topic'				=>	'Shumica e postimeve në %s.',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS active topics feed',
'Atom active topics feed'			=>	'Atom active topics feed',
'RSS forum feed'					=>	'RSS forum feed',
'Atom forum feed'					=>	'Atom forum feed',
'RSS topic feed'					=>	'RSS topic feed',
'Atom topic feed'					=>	'Atom topic feed',

//
// Admin related stuff in the header
//

'New reports'						=>	'Ka raportime te reja',
'Maintenance mode enabled'			=>	'Sistemi i mirëmbatjes është aktiv!',

//
// Units for file sizes
//

'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s KiB',
'Size unit MiB'						=>	'%s MiB',
'Size unit GiB'						=>	'%s GiB',
'Size unit TiB'						=>	'%s TiB',
'Size unit PiB'						=>	'%s PiB',
'Size unit EiB'						=>	'%s EiB',

//
// Language for installation
//

'Choose install language'		=>	'Zgjidh gjuhën për instalimin e skriptes',
'Choose install language info'	=>	'Gjuha për instalimin e skriptes. Dhe gjuha për komunitetin në vete mund të vendoset.',
'Install language'				=>	'Instalo gjuhën',
'Change language'				=>	'Ndrysho gjuhën',
'Already installed'				=>	'Duket se ModernBB tani më është instaluar. Ju duhet të shkoni këtu <a href="index.php">here</a> përndryshe.',
'You are running error'			=>	'Ju po përdorni %1$s verzioni %2$s. ModernBB %3$s kërkon së paku %1$s %4$s për të punuar si duhet. Ju duhet ta përditësoni %1$s instaluesin para se të vazhdoni.',
'My ModernBB Forum'				=>	'ModernBB i imi',
'Description'					=>	'Ti mund të bësh çdo gjë',
'Username 1'					=>	'Emri/Nofka duhet të jetë së paku 2 karaktere i gjatë.',
'Username 2'					=>	'Emri/Nofka nuk duhet të jetë më i gjatë se 25 karaktere.',
'Username 3'					=>	'Emri/nofka guest është e rezervuar.',
'Username 4'					=>	'Emri/Nofka nuk duhet të jetë në formë të IP-së.',
'Username 5'					=>	'Emri/Nofka nuk duhet të përfshijë të gjitha karakteret si p.sh \', " dhe [ ose ] përnjëhere.',
'Username 6'					=>	'Emri/Nofka nuk duhet të përfshijë etiketime nga (BBCode) që forumi përdor.',
'Short password'				=>	'Fjalëkalimi duhet të jetë së paku 6 karaktere i gjatë.',
'Passwords not match'			=>	'Fjalëkalimet nuk përputhen.',
'Wrong email'					=>	'Email adresa për administrim që keni shtypur nuk është valide.',
'No board title'				=>	'Ju duhet të vendosni titullin për forumin.',
'Error default language'		=>	'Gjuha që keni parazgjedhur duket se nuk ekziston.',
'Error default style'			=>	'Stili parazgjedhur nuk ekziston.',
'No DB extensions'				=>	'PHP duhet të përkrahet edhe për MySQL ose SQLite për ta shti n\'punë ModernBB që ta instalosh. Dhe asnjë s\'është në dispozicion, pandehë.',
'Administrator username'		=>	'Emri/Nofka',
'Administrator password 1'		=>	'Fjalëkalimi administrues 1',
'Administrator password 2'		=>	'Fjalëkalimi administrues 2',
'Administrator email'			=>	'Email',
'Board title'					=>	'Titulli i komunitetit',
'Base URL'						=>	'Jo / Fraksione',
'Required field'				=>	'është fush e kërkuar në këtë formë.',
'ModernBB Installation'			=>	'Instalimi i ModernBB',
'Install'						=>	'Instalo ModernBB %s',
'Errors'						=>	'Gabimet që duhet ti korigjoni:',
'Database setup'				=>	'Ngritja e bazës e të dhënave',
'Select database'				=>	'Zgjidh tipin e database',
'Info 1'						=>	'Çfarë databazës doni ta përdoreni?',
'Database type'					=>	'Tipi',
'Info 2'						=>	'Ku është serveri?',
'Info 3'						=>	'Emri i databazës',
'Database server hostname'		=>	'Server hostname',
'Database name'					=>	'Emri',
'Database enter informations'	=>	'Shtyp përdoruesin e databazës dhe fjalëkalimin',
'Database username'				=>	'Përdoruesi',
'Info 4'						=>	'Përdoruesi i databazës suaj',
'Database password'				=>	'Fjalëkalimi',
'Info 5'						=>	'Vendos për më shumë të dhëna për  ModernBB',
'Table prefix'					=>	'Prefiksi i tabelës',
'Administration setup'			=>	'Ngrijta e Administrimit',
'Info 6'						=>	'2 nga 25 karaktere të gjatë',
'Info 7'						=>	'Së paku 6 karaktere të gjatë',
'Confirm password'				=>	'Konfirmo fjalëkalimin',
'Board setup'					=>	'Ngritja e komunitetit',
'Board description'				=>	'Përshkrimi për komunitetin',
'Appearance'					=>	'Dukja',
'Default language'				=>	'Gjuha zyrtare',
'Default style'					=>	'Stili Zyrtarë',
'Start install'					=>	'Fillo instalimin',
'DB type not valid'				=>	'\'%s\' is not a valid database type',
'Table prefix error'			=>	'The table prefix \'%s\' contains illegal characters or is too long. The prefix may contain the letters a to z, any numbers and the underscore character. They must however not start with a number. The maximum length is 40 characters. Please choose a different prefix',
'Prefix reserved'				=>	'The table prefix \'sqlite_\' is reserved for use by the SQLite engine. Please choose a different prefix',
'Existing table error'			=>	'A table called \'%susers\' is already present in the database \'%s\'. This could mean that ModernBB is already installed or that another piece of software is installed and is occupying one or more of the table names ModernBB requires. If you want to install multiple copies of ModernBB in the same database, you must choose a different table prefix',
'InnoDB off'					=>	'InnoDB does not seem to be enabled. Please choose a database layer that does not have InnoDB support, or enable InnoDB on your MySQL server',
'Administrators'				=>	'Administratorët',
'Moderators'					=>	'Moderatorët',
'Guests'						=>	'Mysafirët',
'Members'						=>	'Antaret',
'New member'					=>	'Antari më i ri',
'Maintenance message'			=>	'Forumi nuk është në dispozicion për arsye mirëmbajtje. Ju lutem na vizitoni herë pas here.',
'Test post'						=>	'Tema për test',
'Alert cache'					=>	'<strong>The cache directory is currently not writable!</strong> In order for ModernBB to function properly, the directory <em>%s</em> must be writable by PHP. Use chmod to set the appropriate directory permissions. If in doubt, chmod to 0777.',
'Alert avatar'					=>	'<strong>The avatar directory is currently not writable!</strong> If you want users to be able to upload their own avatar images you must see to it that the directory <em>%s</em> is writable by PHP. You can later choose to save avatar images in a different directory (see Admin/Options). Use chmod to set the appropriate directory permissions. If in doubt, chmod to 0777.',
'Alert upload'					=>	'<strong>File uploads appear to be disallowed on this server!</strong> If you want users to be able to upload their own avatar images you must enable the file_uploads configuration setting in PHP. Once file uploads have been enabled, avatar uploads can be enabled in Administration/Options/Features.',
'ModernBB has been installed'	=>	'ModernBB has been installed. To finalize the installation please follow the instructions below.',
'Info 8'						=>	'To finalize the installation, you need to click on the button below to download a file called config.php. You then need to upload this file to the root directory of your ModernBB installation.',
'Info 9'						=>	'Kur të ngarkohet së pari config.php, ModernBB është instaluar plotesishtë! në këtë pikë, ti vizito <a href="index.php">drejtohu te ballina</a>.',
'Download config.php file'		=>	'Shkarko config.php skedën',
'ModernBB fully installed'		=>	'ModernBB u instalua plotësisht! tani drejtohu tek <a href="index.php">ballina</a>.',

//
// Language for updating
//

'Update ModernBB'				=>	'Përditëso ModernBB',
'Down'							=>	'Forumi nuk është në dispozicion për arsye mirëmbajtje. Ju lutem na vizitoni herë pas here.',

'Version mismatch error'		=>	'Version mismatch. The database \'%s\' doesn\'t seem to be running a ModernBB database schema supported by this update script.',
'No update error'				=>	'Your forum is already as up-to-date as this script can make it',

'Start update'					=>	'Fillo përditësimin',
'Correct errors'				=>	'Këto gabime duhen përmirësuar:',
'Successfully updated'			=>	'Me sukses të plotë databaza juaj u përditësua . Shko shko %s.',
'go to index'					=>	'te ballina e forumit',

'Preparsing item'				=>	'Preparsing %1$s %2$s …',
'Rebuilding index item'			=>	'Rinderto indeksin për %1$s %2$s',

'post'							=>	'postim',
'topic'							=>	'temë',
'signature'						=>	'firma',

// Language for frontend

//
// Language for delete.php
//

'Delete post'			=>	'Shlyje postimin',
'Topic warning'			=>	'Paralajmërim! Ky është postimi i parë në temë, dhe e tërë tema do të shlyhet përgjithmonë .',
'Delete info'			=>	'Postimi qe ju keni zgjedhur për ta shlyer për arsye',
'Reply by'				=>	'Përgjigjet %s - %s',
'Topic by'				=>	'Tema u nis nga %s - %s',
'Delete'				=>	'Shlyje',

//
// Language for help.php
//

'produces'				=>	'produces',

'BBCode info'			=>	'BBCode is a collection of tags that are used to change the look of text in this forum. Below you can find all the available BBCodes and how to use them. Administrators have the ability to disable BBCode. You can tell if BBCode is disabled whenever you post a message or edit your signature.',

'Text style'			=>	'Stili i tekstit',
'Text style info'		=>	'Etiketa në vazhdim ndryshon pamjen e tekstit:',
'Bold text'				=>	'Tekst i theksuar',
'Underlined text'		=>	'Tekst i nënvizuar',
'Italic text'			=>	'Tekst pjerrtazi',
'Strike-through text'	=>	'Tekst i vijezuar përtej',
'Red text'				=>	'Kuq tekstin',
'Blue text'				=>	'Kalterso tekstin',
'Heading text'			=>	'Krye teskt',
'Inserted text'			=>	'Tekst i vendosr',
'Sub text'				=>	'Subscript tekst',
'Sup text'				=>	'Superscript tekst',

'Multimedia'			=>  'Multimedia',
'Links info'			=>	'Ju mund të krijoni lidhje/links te dokumenta tjera duke perdorur etiketime tjera apo email tjeter:',
'My email address'		=>	'Emial jeme',
'Images info'			=>	'Nese deshironi të shfaqni imazhe përdor etiketen img. Teksti i shfaqur përpara "=" është shenjë apo atribut për imazhin duhet vendosur saherë të jetë e mundur.',
'ModernBB bbcode test'  =>  'ModernBB BBCode Test',
'Video info'			=>  'ModernBB mbeshtet DailyMotion, Vimeo dhe YouTube. Me BBCode këtu, Ti mund të shfaqesh video nga këto prej tyre.',
'Video link'			=>  'Vendos linkun/lidhjen për video',

'Quotes'				=>	'Cito',
'Quotes info'			=>	'Nese do të citosh dikë apo diçka, ti duhet të përdoresh cito etiketen.',
'Quotes info 2'			=>	'Nese nuk deshironi të citoni dike nga forumi, ti mund të etiketosh dikë. nese përdorues fillon me [ ose ] mund të mos markohet në citim.',
'Quote text'			=>	'Ky është teksti që dua ta citoj.',
'produces quote box'	=>	'prodho kutin cituese si:',

'Code'					=>	'Kodi',
'Code info'				=>	'Çfarëdo burimi që të shfaqeni mund të përdoreni etiketen Kodi. Text displayed with the code tag will use a monospaced font and will not be affected by other tags.',
'Code text'				=>	'Ketu ka ca përmbledhje',
'produces code box'		=>	'prodho kuti kodi si kjo:',

'Lists'					=>	'Listim',
'List info'				=>	'Për të krijuar listë perdor kdoin Listim. mund të krijoni 2 tipe të listes nga etiketimi Listim.',
'List text 1'			=>	'Shembulli i listimit 1.',
'List text 2'			=>	'Shembulli i listimit 2.',
'List text 3'			=>	'Shembulli i listmit 3.',
'produces list'			=>	'prodho listim me pika.',
'produces decimal list'	=>	'prodho listim numerik.',

'Smilies info'			=>	'Nese ju i lejoni, Këtu mund të përdoren Smiles. Dhew keto mund ti përdorni:',

'General use'					=>	'Përdorim gjeneral',
'General use info'				=>	'Shpiegimi se si përdoren disa prej tyre në forum.',
'Forums and topics'				=>	'Forumet dhe temat',
'Labels question'				=>	'Çfarë d.m.th klasifikimi?',
'Labels info'					=>	'Disa nga këto klasifikohen si, klasifikimi i ndryshem kuptim i ndryshem.',
'Label'							=>	'Klasifiko',
'Explanation'					=>	'Shpjegim',
'Sticky explanation'			=>	'Temat ngjitse janë zakonisht tema qe duhet lexuar dhe të rëndësishme. Ja vlen ta shikosh.',
'Closed explanation'			=>	'Kur ju shihni një etiketë të mbyllur, kjo do të thotë që ju nuk mund të postoni në këtë temë më, nëse nuk keni një leje që mbishkruan këtë. Tema është ende në dispozicion për të lexuar, nëpërmjet.',
'Moved explanation'				=>	'TTema e tij është zhvendosur në një tjetër forum. Administratorët dhe moderatorët mund të zgjidhni për të treguar këtë njoftim, ose thjesht nuk e tregojnë atë. Forumi origjinal ku kjo temë është e vendosur në, nuk do të tregojë ndonjë stats temë më.',
'Star'							=>	'Fillo',
'Star explanation'				=>	'Ti po ndjkë këtë forum, dhe do të shfaqet në listen e abonimeve tua.',
'Posted explanation'			=>	'Ky emërtim do të thotë që ju keni bërë një post në këtë temë.',
'WYSIWYG question'				=>	'pse s\'mund të shof WYSIWYG editorin?',
'WYSIWYG answer'				=>	'Ju duhet të leshoni JavaScripts në menyrë që të punoj WYSIWYG. Këtë e gjeni në cilsimet e shfletuesit tuaj dhe mund të ndodh që shfletuesi juaj nuk e përkrah WYSIWYG editorin.',
'Content question'				=>	'Smilies, firmat, avatarët dhe imazhet nuk janë të dukshme?',
'Content answer'				=>	'Në cilsimet e profilit mund të vendosni se nese dëshironi ti shfaqeni firmen, imazhet apo smiles.',
'Topics question'				=>	'Pse s\'mund të shof asnjë forum/postim?',
'Topics answer'					=>	'S\'keni aytorizimin e duhur për ta bër, pyete administratorin për ndihmë.',
'Profile question'				=>	'Pse s\'mund të shof asnjë profil?',
'Profile answer'				=>	'S\'keni aytorizimin e duhur për ta bër, pyete administratorin për ndihmë.',
'Information question'			=>	'Profili im nuk ngjan me të tjerët?',
'Information answer'			=>	'Profili juaj do t\'ju shfaq vetëm ato fusha të cilat keni plotesuar në cilsimet për profilin tuaj. Ju duhet të shihni se mos keni kaluar ndonjërn nga fushat qe deshironi ta shifni në profilin tuaj.',
'Advanced search question'		=>	'A ka më shumë mundësi kërkimi?',
'Advanced search answer'		=>	'Kur të jeni tek faqja e kërkimit, ju do te shifni se ç\'mund të kërkoni dhe sa opcione keni në dispozicion vetëm nese administratori i ka ç\'aktivizuar ndonji prej tyre.',
'More search question'			=>	'Pse s\'mund të kërkoj më shumë se një forum njëherësh?',
'More search answer'			=>	'S\'keni aytorizimin e duhur për ta bër, pyete administratorin për ndihmë.',
'Moderating'					=>	'Moderohet',
'Moderating info'				=>	'Adminstratorët dhe moderatoreve iu duhet pak ndihmë ndonjëhere, poo! Baza për moderim është këtu.',
'Moderate forum question'		=>	'Si të moderoj një forum?',
'Moderate forum answer'			=>	'Opcioni për moderim është në fund të forumit dhe aty mund të ndani, shlyeni apo moderoni temat edhe shumë tema njëkohësisht.',
'Moderate topic question'		=>	'Si të moderoj një temë?',
'Moderate topic answer 1'		=>	'Opcioni për moderim është në fund të temës dhe aty mund të bashkoni, ndani apo shlyeni temat njëkohësisht.',
'Moderate topic answer 2'		=>	'Përball butonit "Ndrysho", gjindet opcioni për lëvizje, hapje apo mbyllje te Temave. Poashtu mund ta bëni temën ngjitse, ose ç\'ngjit temën.',
'Moderate user question'		=>	'Si të moderoj nje anëtarë?',
'Moderate user answer 1'		=>	'Opcioni modero gjindet në profilin e anëtarëve. Mund ta gjesh moderimin nën "Administro" në menun tek profili i anëtarit. Këto mund të mos jenë për të gjithë moderatorët.',
'Moderate user answer 2'		=>	'Faqja e administrimit duhet ta meritosh atë dhe ta mësosh vetë.',
'Moderate user answer 3'		=>	'Mund të shlyesh ose përjashtosh ndonjë anëtarë nga tipari "Prapaskena.',

//
// Language for index.php
//

'Topics'		=>	'Temat',
'Link to'		=>	'Lidhur tek:', // As in "Link to: http://modernbb.be/"
'Empty board'	=>	'Është bosh.',
'Newest user'	=>	'Anëtaret e rinjë: %s',
'Users online'	=>	'Anëtarët në linjë: %s',
'Guests online'	=>	'Mysafir në linjë: %s',
'No of users'	=>	'Totali i anëtarëve: %s',
'No of topics'	=>	'Totali i temave: %s',
'No of post'	=>	'Totali i postimeve: %s',
'Online'		=>	'Në linjë:', // As in "Online: User A, User B etc."
'Board stats'	=>	'Statistikat e forumit',

//
// Language for login.php
//

'Wrong user/pass'			=>	'Gabim tek emri/nofka/fjalëkalimi.',
'Forgotten pass'			=>	'Keni harruar fjalëkalimin',
'No email match'			=>	'Nuk ka ndonjë anëtarë të regjistruar me këtë email',
'Request pass'				=>	'Kërko fjalëkalimin',
'Remember me'				=>	'Mbajmë mend',
'New password errors'		=>	'Kërkesa për fjalëkalim nuk u bë, ka pasur ndonjë gabim në artikulim ne ndonjëren prej fushave',
'New passworderrors info'	=>	'Këto gabime duhen korigjuar:',

'Forget mail'				=>	'Është dërguar një email me instrukcione se si ta ndryshoni fjalëkalimin. nese email nuk ka arritur kontaktoni administraotrin',
'Password request flood'	=>  'Kjo llogari ka kërkuar për rikthim fjalëkalimi orë më parë. Ju lutem prisni edhe %s minuta për të bërë kërkesen përsëri.',

//
// Send email
//

'Form email disabled'			=>	'Përdoruesit që dëshironi ti dërgoni email e ka çaktivizuar funsionin email.',
'No email subject'				=>	'Vendos nji subjekt.',
'No email message'				=>	'Ti duhet te vendosesh nji mesazh .',
'Too long email message'		=>	'Mesazhi s\'mund të jetë më i gjatë se 65535 karaktere (64 KB).',
'Email flood'					=>  'Së paku %s sekonda duhet të kalojnë deri sa të dergohet një email tjetër. Ju lutem pritni %s sekonda.',
'Send email to'					=>	'Dërgo email tek',

//
// Report
//

'No reason'						=>	'Duhet të kesh një arsye.',
'Reason too long'				=>	'Mesazhi juaj duhet të jetë nën 65535 bytes (~64kb).',
'Report flood'					=>  'Së paku %s sekonda duhet të kalojn deri në raportimin tjetër. Ju lutem printi %s sekonda dhe provo perseri.',
'Report post'					=>	'Raporto postimin',
'Reason'						=>	'Arsyea',
'Reason desc'					=>	'Ju lutem vendos një arsye të shkurtër pse e raportoni',

//
// Subscriptions
//

'Not subscribed topic'			=>	'S\'je i abonuar në këtë temë.',

//
// General forum and topic moderation
//

'Moderate'						=>	'Modero',
'Select'						=>	'Përzgjidh', // the header of a column of checkboxes
'Move'							=>	'Lëviz',
'Split'							=>	'Ndaje',
'Merge'							=>	'Bashko',

//
// Moderate forum
//

'Open'							=>	'Hape',
'Close'							=>	'Mbylle',
'Move topics'					=>	'Lëviz temat',
'Move to'						=>	'Lëvize tek',
'Nowhere to move'				=>	'S\'ka forume ku mund ti zhvendosni temat/postimet.',
'Leave redirect'				=>	'Bejë redirektim temë\'s',
'Delete topics'					=>	'Shlyje temën',
'Delete topics comply'			=>	'A jeni i sigurt që dëshironi ta shlyni temën?',
'No topics selected'			=>	'Ju duhet të përzgjidhni temën lëviz/shlyej/hap/mbyll.',
'Not enough topics selected'	=>	'Duhet të përzgjidhni të paktën dy tema për bashkim.',
'Merge topics'					=>	'Bashko temat',
'New subject'					=>	'Subjekti i ri',

//
// Split multiple posts in topic
//

'Split posts'					=>	'Ndajë postimet',

//
// Delete multiple posts in topic
//

'Delete posts'					=>	'Shlyej postimet',
'Cannot select first'			=>	'Së pari temat nuk mund të përzgjidhen për ndarje/shlyrje.',
'Delete posts comply'			=>	'A jeni i sigurt që dëshironi ta shlyeni këtë postim?',
'No posts selected'				=>	'Ju duhët të përzgjidhni së paku 2 postime që deshironi ti ndani/shlyeni.',

//
// Get host
//

'Host info 1'					=>	'IP-ja është: %s',
'Host info 2'					=>	'Dhe host name është: %s',
'Show more users'				=>	'Shfaq më shumë IP-ja të anëtarëve',

//
// Language for post.php and edit.php
// Post validation stuff (many are similiar to those in edit.php)
//

'No subject'		=>	'Tema duhet të ketë subjekt.',
'No subject after censoring'	=>	'Tema duhet të ketë subjekt. Pas aplikimit të filtrimit/cenzuror, subjekti u bë bosh.',
'Too long subject'	=>	'Subjekti s\'mund të jetë i gjatë më shumë se 70 karaktere.',
'No message'		=>	'Ju duhet të shtypesh nji mesazh.',
'No message after censoring'	=>	'Ju duhet të shtypni nji mesazh. Pas aplikimit të filtrimit/cezuror, mesazhi juaj është bosh.',
'Too long message'	=>	'Postimet s\'mund të jenë më të medhenjë se %s bytes.',
'All caps subject'	=>	'Subjekti s\'mund të përmbajë vetëm shkronja të mëdha.',
'All caps message'	=>	'Postimet s\'mund të përmbajn vetëm shrkonja të mëdha.',
'Empty after strip'	=>	'Duket se postimi juaj është vetëm me BBCodes. ka mundesi të ketë ndodhur p.sh Citimi juaj është shpërberë sepse keni kaluar nivelin e citimit.',

//
// Posting
//

'Post errors'		=>	'Gabimet në postim',
'Post preview'		=>	'Shikim paraprak',
'Guest name'		=>	'Emri', // For guests (instead of Username)
'Post a reply'		=>	'Posto Përgjigju',
'Post new topic'	=>	'Posto Temë të re',
'Hide smilies'		=>	'Asnjëherë mos shfaq smiles si ikona në këtë postim',
'Subscribe topic'	=>	'Abonohu në këtë temë',
'Stay subscribed'	=>	'Qendro i abonuar në këtë temë',
'Topic review'		=>	'Pamjet e temave (të rejat të parat)',
'Flood start'		=>  'Së paku %s sekonda duhet të kalojnë ndermjetë postimit. Ju lutem prisni %s sekonda dhe provo postoni përseri.',
'Preview'			=>	'Shikim paraprak',

//
// Edit post
//

'Silent edit'		=>	'Ndryshim i heshtur (mos shfaq "Ndryshuar nga ..." në pamje të temës)',
'Edit post'			=>	'Ndrysho',

//
// Language for both profile.php and register.php
//

'Email legend'				=>	'Shtyp email adresë valide',
'Time zone'					=>	'Zona e Kohës',
'DST'						=>	'Avanco kohën për 1 orë për të kursyer ditën.',
'Time format'				=>	'Formati orës',
'Date format'				=>	'Formati datës',
'Default'					=>	'Parazgjedhur',
'Language'					=>	'Gjuha',
'Email setting info'		=>	'Cilsimet e email',
'Email setting 1'			=>	'Shfaq email adresën.',
'Email setting 2'			=>	'Fshih email adresën por lejo dërgim letrash.',
'Email setting 3'			=>	'Fshih email adresën dhe mos lejo dërgimin e letrave.',

'Username too short'		=>	'Emri/Nofka duhet të jetë së paku 2 karaktere i gjatē. Ju lutem zgjidhni nji tjetër (më të gjatë) emër.',
'Username too long'			=>	'Emri/Nofka s\'duhet të jetë më i gjatë se 25 karaktere. Ju lutem zgjidhni nji tjetër (më të gjatë) emër.',
'Username guest'			=>	'Ky Emër/Nofkë guest është i rezervuar. ju lutem zgjidhni nji emër tjetër.',
'Username IP'				=>	'Emri/Nofka nuk duhet të jetë në formë IP-je. Ju lutem zgjidhni një emër tjetër.',
'Username reserved chars'	=>	'Emri/Nofka s\'mund ti përgjigjet të gjitha karaktereve si p.sh \', " dhe [ ose ] të gjitha këto së bashku. Ju lutem zgjidhni një emër tjetër.',
'Username BBCode'			=>	'Emri/Nofka s\'duhet të përfshij etiketa nga (BBCode) që forumi i përdorë. Ju lutem zgjidhni një emër tjetër.',
'Banned username'			=>	'Emri/Nofka që ju zgjodhët është i palejushem në forum. Ju lutem zgjidhni një emër tjetër.',
'Pass too short'			=>	'Fjalëkalimi duhet të jetë të paktën 6 karaktere i gjatë. Ju lutem zgjidhni nji tjetër (më të gjatë).',
'Pass not match'			=>	'Fjalëkalimet nuk përputhen.',
'Banned email'				=>	'Email-in qe e keni shtypur nuk lejohet në forum. Ju lutem zgjidhni një email tjetër.',
'Dupe email'				=>	'Dikush tjetër tani më është i regjistruar me këtë email. Zgjidhni nji email tjetër.',
'Sig too long'				=>	'Firma s\'mund të jetë më e gjatë se %1$ karaktere. Ju lutem redukoni firmen tuaj me %2$ karaktere.',
'Sig too many lines'		=>	'Firma s\'mund të këtë me shumë se %s rreshta.',
'Bad ICQ'					=>	'Ti ke shtypur një ICQ UIN jovalidë. Ju lutem kthehuni mrapa dhe korigjoni.',

//
// Language for profile.php
//

'Section personality'			=>	'Personaliteti',
'Section admin'					=>	'Administrimi',

//
// Miscellaneous
//

'Personal details legend'		=>	'Ndrysho detajet e kontaktit personale',
'Settings legend'				=>	'Shtyp cilsimet e tua',
'User tools'					=>	'Veglat e përdoruesit',
'Unknown'          				=>  'Të panjohura',

//
// Password stuff
//

'Pass key bad'					=>	'Fjalëkalimi i dhënë s\'është i sakt ose ka skaduar. Ju lutem ri-kërkoni për një fjalëkalim të ri. Nese edhe kjo deshton, kontakto Administruesin e forumit',
'Pass updated'					=>	'Fjalëkalimi juaj u përditësua. Ju tani mund të llogariteni me fjalëkalimin e ri.',
'Wrong pass'					=>	'Gabim fjalëkalimi vjetër.',
'Change pass'					=>	'Ndrysho fjalëkalimin',
'Old pass'						=>	'Fjalëkalimi i vjetër',
'New pass'						=>	'Fjalëkalimi i ri',
'Confirm new pass'				=>	'Konfirmo fjalëkalimin e ri',
'Pass info'						=>	'Fjalëkalimi duhet të jetë i gjatë ose të përmbaj 6 karaktere',

//
// Email stuff
//

'Email key bad'					=>	'The specified email activation key was incorrect or has expired. Please re-request change of email address. If that fails, contact the forum administrator at',
'Email updated'					=>	'Your email address has been updated.',
'Activate email sent'			=>	'An email has been sent to the specified address with instructions on how to activate the new email address. If it doesn\'t arrive you can contact the forum administrator at',
'Email instructions'			=>	'An email will be sent to your new address with an activation link. You must click the link in the email you receive to activate the new address.',
'Change email'					=>	'Change email address',
'New email'						=>	'New email',

//
// Avatar upload stuff
//

'Avatars disabled'				=>	'The administrator has disabled avatar support.',
'Too large ini'					=>	'The selected file was too large to upload. The server didn\'t allow the upload.',
'Partial upload'				=>	'The selected file was only partially uploaded. Please try again.',
'No tmp directory'				=>	'PHP was unable to save the uploaded file to a temporary location.',
'No file'						=>	'You did not select a file for upload.',
'Bad type'						=>	'The file you tried to upload is not of an allowed type. Allowed types are gif, jpeg and png.',
'Too wide or high'				=>	'The file you tried to upload is wider and/or higher than the maximum allowed',
'Too large'						=>	'The file you tried to upload is larger than the maximum allowed',
'pixels'						=>	'pixels',
'bytes'							=>	'bytes',
'Move failed'					=>	'The server was unable to save the uploaded file. Please contact the forum administrator at',
'Unknown failure'				=>	'An unknown error occurred. Please try again.',
'Avatar desc'					=>	'An avatar is a small image that will be displayed under your username in your posts. It must not be any bigger than',
'Upload avatar'					=>	'Upload avatar',
'Delete avatar'					=>	'Delete avatar', // only for admins
'File'							=>	'File',
'Upload'						=>	'Upload', // submit button

//
// Form validation stuff
//

'Forbidden title'				=>	'The title you entered contains a forbidden word. You must choose a different title.',

//
// Profile display stuff
//

'Email info'					=>	'Email: %s',
'Last visit info'				=>	'Last visit',
'Show posts'					=>	'Show posts',
'Show topics'					=>	'Show topics',
'Show subscriptions'			=>	'Show subscriptions',
'Contact'						=>	'Contact',
'Realname'						=>	'Real name',
'Location'						=>	'Location',
'Website'						=>	'Website',
'Invalid website URL'			=>	'The website URL you entered is invalid.',
'Jabber'						=>	'Jabber',
'ICQ'							=>	'ICQ',
'MSN'							=>	'Microsoft Account',
'AOL'							=>	'AOL IM',
'Yahoo'							=>	'Yahoo! Messenger',
'Avatar'						=>	'Avatar',
'Sig max size'					=>	'Max length: %s characters / Max lines: %s',
'Avatar legend'					=>	'Set your avatar display options',
'Avatar info'					=>	'An avatar is a small image that will be displayed with all your posts. You can upload an avatar by clicking the link below.',
'Change avatar'					=>	'Change avatar',
'Signature legend'				=>	'Compose your signature',
'Signature info'				=>	'A signature is a small piece of text that is attached to your posts. In it, you can enter just about anything you like.',
'Sig preview'					=>	'Current signature preview:',
'No sig'						=>	'No signature currently stored in profile.',
'Signature quote/code/list/h'	=>	'The quote, code, list, and heading BBCodes are not allowed in signatures.',
'Posts per page'				=>	'Posts',
'Leave blank'					=>	'Leave blank to use default',
'Notify full'					=>	'Include a plain text version of new posts in subscription notification emails.',
'Auto notify full'				=>	'Automatically subscribe to every topic you post in.',
'Show smilies'					=>	'Show smilies as graphic icons.',
'Show images'					=>	'Show images in posts.',
'Show images sigs'				=>	'Show images in user signatures.',
'Show avatars'					=>	'Show user avatars in posts.',
'Show sigs'						=>	'Show user signatures.',
'Style'							=>	'Style',
'Backstage Accent'				=>	'Backstage Accent',
'Admin note'					=>	'Admin note',
'Post display'					=>	'Post display',

//
// Administration stuff
//

'Group membership legend'		=>	'Choose user group',
'Save'							=>	'Save',
'Set mods legend'				=>	'Set moderator access',
'Moderator in info'				=>	'Choose which forums this user should be allowed to moderate. Note: This only applies to moderators. Administrators always have full permissions in all forums.',
'Update forums'					=>	'Update forums',
'Delete ban legend'				=>	'Delete or ban user',
'Delete user'					=>	'Delete user',
'Ban user'						=>	'Ban user',
'Confirm delete user'			=>	'Confirm delete user',
'Confirmation info'				=>	'Please confirm that you want to delete the user', // the username will be appended to this string
'Delete warning'				=>	'Warning! Deleted users and/or posts cannot be restored. If you choose not to delete the posts made by this user, the posts can only be deleted manually at a later time.',
'Delete all posts'				=>	'Delete any posts and topics this user has made',
'No delete admin message'		=>	'Administrators cannot be deleted. In order to delete this user, you must first move him/her to a different user group.',

//
// Language for register.php
//

'No new regs'				=>	'This forum is not accepting new registrations.',
'Forum rules'				=>	'Forum rules',
'Rules legend'				=>	'You must agree to the following in order to register',
'Registration flood'		=>	'A new user was registered with the same IP address as you within the last hour. To prevent registration flooding, at least an hour has to pass between registrations from the same IP. Sorry for the inconvenience.',
'Agree'						=>	'Agree',
'Cancel'					=>	'Cancel',
'Register legend'			=>	'Enter the requested data',

//
// Form validation stuff (some of these are also used in post.php)
//

'Registration errors'		=>	'Registration errors',
'Username censor'			=>	'The username you entered contains one or more censored words. Please choose a different username.',
'Username dupe 1'			=>	'Someone is already registered with the username',
'Username dupe 2'			=>	'The username you entered is too similar. The username must differ from that by at least one alphanumerical character (a-z or 0-9). Please choose a different username.',
'Email not match'			=>	'Email addresses do not match.',

//
// Registration email stuff
//

'Reg email'					=>	'Thank you for registering. Your password has been sent to the specified address. If it doesn\'t arrive you can contact the forum administrator at',

//
// Register info
//

'Username legend'			=>	'Enter a username between 2 and 25 characters long',
'Email help info'			=>	'Your password will be sent to this address, make sure it\'s valid',
'If human'					=>	'If you are human please leave this field blank!',
'Spam catch'				=>	'Unfortunately it looks like your request is spam. If you feel this is a mistake, please direct any inquiries to the forum administrator at',

//
// Language for search.php
//

'User search'						=>	'User search',
'No search permission'				=>	'You do not have permission to use the search feature.',
'Search flood'						=>  'At least %s seconds have to pass between searches. Please wait %s seconds and try searching again.',
'Search criteria legend'			=>	'Enter your search criteria',
'Search info'						=>	'To search by keyword, enter a term or terms to search for. Separate terms with spaces. Use AND, OR and NOT to refine your search. To search by author enter the username of the author whose posts you wish to search for. Use wildcard character * for partial matches.',
'Keyword search'					=>	'Keyword search',
'Author search'						=>	'Author search',
'All forums'						=>	'All forums',
'Search in'							=>	'Search in',
'Message and subject'				=>	'Message text and topic subject',
'Message only'						=>	'Message text only',
'Topic only'						=>	'Topic subject only',
'Sort by'							=>	'Sort by',
'Sort order'						=>	'Sort order',
'Search results info'				=>	'You can choose how you wish to sort and show your results.',
'Sort by post time'					=>	'Post time',
'Sort by author'					=>	'Author',
'Ascending'							=>	'Ascending',
'Descending'						=>	'Descending',
'Show as'							=>	'Show as',
'Show as posts'						=>	'Posts',
'Advanced search'					=>	'Advanced search',

//
// Results
//

'Search results'					=>	'Search results',
'Quick search show_new'				=>	'New',
'Quick search show_recent'			=>	'Active',
'Quick search show_unanswered'		=>	'Unanswered',
'Quick search show_replies'			=>	'Posted',
'Quick search show_user_topics'		=>	'Topics by %s',
'Quick search show_user_posts'		=>	'Posts by %s',
'Quick search show_subscriptions'	=>	'Subscribed by %s',
'By keywords show as topics'		=>	'Topics with posts containing \'%s\'',
'By keywords show as posts'			=>	'Posts containing \'%s\'',
'By user show as topics'			=>	'Topics with posts by %s',
'By user show as posts'				=>	'Posts by %s',
'By both show as topics'			=>	'Topics with posts containing \'%s\', by %s',
'By both show as posts'				=>	'Posts containing \'%s\', by %s',
'No terms'							=>	'You have to enter at least one keyword and/or an author to search for.',
'No hits'							=>	'Your search returned no hits.',
'No user posts'						=>	'There are no posts by this user in this forum.',
'No user topics'					=>	'There are no topics by this user in this forum.',
'No subscriptions'					=>	'This user is currently not subscribed to any topics.',
'No new posts'						=>	'There are no topics with new posts since your last visit.',
'No recent posts'					=>	'No new posts have been made within the last 24 hours.',
'No unanswered'						=>	'There are no unanswered posts in this forum.',
'Go to post'						=>	'Go to post',
'Go to topic'						=>	'Go to topic',

//
// Language for viewtopic.php
//

'Post reply'		=>	'Posto përgjegjie',
'Topic closed'		=>	'Tema është mbyllur',
'From'				=>	'nga:', // User location
'IP address logged'	=>	'IP log',
'Note'				=>	'Shenim:', // Admin note
'Posts'				=>	'Postimet:',
'Replies'			=>	'Përgjigjiet:',
'Last edit'			=>	'S\'fundmi u editua nga',
'Report'			=>	'Raporto',
'Edit'				=>	'Ndrysho',
'Quote'				=>	'Cito',
'Is subscribed'		=>	'Jeni i abonuar',
'Unsubscribe'		=>	'Ç\'abonohu',
'Subscribe'			=>	'Abonohu',
'Quick post'		=>	'Postim i shpejt',
'New icon'			=>	'Postim i ri',
'Re'				=>	'Pe:',

//
// Language for userlist.php
//

'User search info'	=>	'Enter a username to search for and/or a user group to filter by. Use the wildcard character * for partial matches.',
'User group'		=>	'User group',
'No of posts'		=>	'Number of posts',
'All users'			=>	'All users',

//
// Language for viewforum.php
//

'Views'			=>	'Views',
'Moved'			=>	'Moved',
'Star'			=>	'Star',
'Sticky'		=>	'Sticky',
'Closed'		=>	'Closed',
'Empty forum'	=>	'Forum is empty.',

//
// Language for Backstage
// Language for backstage.php
//

'Update settings head'		=>	'Update settings',
'Index update check'		=>	'Check for updates every time the Backstage index is visited, if disabled, you won\'t see update notifications.',

//
// Language for bans.php
//

'No user message'			=>	'No user by that username registered. If you want to add a ban not tied to a specific username just leave the username blank.',
'No user ID message'		=>	'No user by that ID registered.',
'User is admin message'		=>	'The user %s is an administrator and can\'t be banned. If you want to ban an administrator, you must first demote him/her.',
'User is mod message'		=>	'The user %s is a moderator and can\'t be banned. If you want to ban a moderator, you must first demote him/her.',
'Must enter message'		=>	'You must enter either a username, an IP address or an email address (at least).',
'Cannot ban guest message'	=>	'The guest user cannot be banned.',
'Invalid IP message'		=>	'You entered an invalid IP/IP-range.',
'Invalid e-mail message'	=>	'The email address (e.g. user@domain.com) or partial email address domain (e.g. domain.com) you entered is invalid.',
'Invalid date message'		=>	'You entered an invalid expire date.',
'Invalid date reasons'		=>	'The format should be YYYY-MM-DD and the date must be at least one day in the future.',

'New ban head'				=>	'Add ban',
'Username help'				=>	'The username to ban',
'Username advanced help'	=>	'The username you want to ban. If you want to ban a specific IP/IP-range or email, leave it blank.',

'Ban search head'			=>	'Ban search',
'Ban search info'			=>	'Search for bans in the database. You can enter one or more terms to search for. Wildcards in the form of asterisks (*) are accepted. To show all bans leave all fields empty.',
'Date help'					=>	'(yyyy-mm-dd)',
'Expire after label'		=>	'Expire after',
'Expire before label'		=>	'Expire before',
'Order by label'			=>	'Order by',
'Order by ip'				=>	'IP',
'Order by expire'			=>	'Expire date',
'Submit search'				=>	'Submit search',

'E-mail help'				=>	'The email or email domain you wish to ban',
'IP label'					=>	'IP address/IP-ranges',
'IP help'					=>	'The IP you wish to ban, separate addresses with spaces',
'IP help link'				=>	'Click %s to see IP statistics for this user.',
'Ban advanced head'			=>	'Advanced ban settings',
'Ban advanced subhead'		=>	'Supplement ban with IP and email',
'Ban message label'			=>	'Ban message',
'Ban message help'			=>	'A message for banned users',
'Message expiry subhead'	=>	'Ban message and expiry',
'Expire date label'			=>	'Expire date',
'Expire date help'			=>	'When does the ban expire, blank for manually',

'Results head'				=>	'Search Results',
'Results IP address head'	=>	'IP/IP-ranges',
'Results expire head'		=>	'Expires',
'Results banned by head'	=>	'Banned by',
'No match'					=>	'No match',

//
// Language for board.php
//

'Must enter name message'		=>	'You must enter a name',
'Confirm delete cat head'		=>	'Confirm delete category',
'Confirm delete cat info'		=>	'Are you sure that you want to delete the category <strong>%s</strong>?',
'Delete category warn'			=>	'Deleting a category will delete all forums and posts (if any) in this category!',
'Must enter integer message'	=>	'Position must be a positive integer value.',
'Add categories head'			=>	'Add categories',
'Delete categories head'		=>	'Delete categories',
'Edit categories head'			=>	'Edit categories',
'Category position label'		=>	'Position',
'Category name label'			=>	'Name',

//
// Language fox censoring.php
//

'Must enter word message'	=>	'You must enter a word to censor.',
'Add word subhead'			=>	'Add word',
'Add word info'				=>	'Enter a word that you want to censor and the replacement text for this word. Wildcards are accepted (i.e. *some* would match somewhere and lonesome). Censor words also affect usernames. New users will not be able to register with usernames containing any censored words. The search is case insensitive.',
'Censoring enabled'			=>	'<strong>Censoring is enabled in %s.</strong>',
'Censoring disabled'		=>	'<strong>Censoring is disabled in %s.</strong>',
'Censored word label'		=>	'Censored word',
'Replacement label'			=>	'Replacement word(s)',
'Edit remove words'			=>	'Edit or remove words',
'No words in list'			=>	'No censor words in list.',

//
// Language fox database.php
//

'Backup options'		=>	'Backup options',
'Backup type'			=>	'Backup type',
'Full'					=>	'Full',
'Structure only'		=>	'Structure only',
'Data only'				=>	'Data only',
'Gzip compression'		=>	'Gzip compression',
'Start backup'			=>	'Start backup',

'Backup info 1'			=>	'If your server supports it, you may also gzip-compress the file to reduce its size.',

'Restore complete'		=>	'Restore complete',
'Restore options'		=>	'Restore options',
'Start restore'			=>	'Start restore',

'Restore info 1'		=>	'This will perform a full restore of all ModernBB tables from a saved file. If your server supports it, you may upload a gzip-compressed text file and it will automatically be decompressed. This will overwrite any existing data. The restore may take a long time to process, so please do not move from this page until it is complete.',

'Warning'				=>	'Warning: critical features',

'Additional functions'	=>	'Additional functions',
'Repair all tables'		=>	'Repair all tables',
'Optimise all tables'	=>	'Optimise all tables',

'Additional info 1'		=>	'Additional features to help run a database, optimise and repair both do what they say.',

//
// Language for appearance.php, settings.php, email.php and features.php
//

'Bad HTTP Referer message'			=>	'Bad HTTP_REFERER. If you have moved these forums from one location to another or switched domains, you need to update the Base URL manually in the database (look for o_base_url in the config table) and then clear the cache by deleting all .php files in the /cache directory.',
'Must enter title message'			=>	'You must enter a title.',
'SMTP passwords did not match'		=>	'You need to enter the SMTP password twice exactly the same to change it.',
'Enter announcement here'			=>	'Enter your announcement here.',
'Enter rules here'					=>	'Enter your rules here.',
'Default maintenance message'		=>	'The forums are temporarily down for maintenance. Please try again in a few minutes.',
'Timeout error message'				=>	'The value of "Timeout online" must be smaller than the value of "Timeout visit".',

//
// Language for appearance.php
//

'Header appearance'					=>	'Header appearance',
'Footer appearance'					=>	'Footer appearance',
'Footer'							=>	'Footer',
'Display head'						=>	'Display settings',
'Default style help'				=>	'The default style will be used by new users and guests. Users can change the style they use, so changing the default style here won\'t change the design for already existing users. You can also force a style, this will reset the style setting for every user except the guest user.',
'About style'						=>	'About %s',
'version'							=>	'version %s',
'Released on'						=>	'Released on %s',
'Designed for'						=>	'Designed for ModernBB %s to %s',
'Force style'						=>	'Force style',
'Set as default'					=>	'Set as default',
'About'								=>	'About',
'Version number help'				=>	'Show ModernBB version number in footer.',
'Info in posts help'				=>	'Show information about the poster under the username in topic view.',
'Post count help'					=>	'Show the number of posts a user has made in topic view, profile and user list.',
'Smilies help'						=>	'Convert smilies to small graphic icons in forum posts.',
'Smilies sigs help'					=>	'Convert smilies to small graphic icons in user signatures.',
'Clickable links help'				=>	'Convert URLs automatically to clickable hyperlinks.',
'Topic review label'				=>	'Topic review',
'Topic review help'					=>	'Maximum amount of posts showed when posting',
'Topics per page help'				=>	'Default amount of topics per page',
'Posts per page label'				=>	'Posts per page',
'Posts per page help'				=>	'Default amount of posts per page',
'Indent label'						=>	'Indent size',
'Index panels head'					=>	'Index settings',
'Moderated by help'                 =>  'Show the "Moderated by" list when moderators are set on a per-forum base.',
'Index statistics help'				=>	'Show the statistics panel on the index.',
'Indent help'						=>	'Amount of spaces that represent a tab',
'Quote depth label'					=>	'Maximum [quote] depth',
'Quote depth help'					=>	'Maximum [quote] can be used in [quote]',
'Video height'                      =>  'Video height',
'Video height help'                 =>  'Height of an embedded video',
'Video width'                       =>  'Video width',
'Video width help'                  =>  'Width of an embedded video',
'Menu items head'					=>	'Additional menu items',
'Menu items help'					=>	'This feature allows you to add more menu items to the navigation bar on every page. The format for adding new links is <code>X = &lt;a href="URL"&gt;LINK&lt;/a&gt;</code> where X is the position at which the link should be inserted. Separate entries with a line break.',
'Default menu'						=>	'Default menu items',
'Menu show index'					=>	'Show the index menu item.',
'Menu show user list'				=>	'Show the user list menu item.',
'Menu show search'					=>	'Show the search menu item.',
'Menu show rules'					=>	'Show the rules menu item.',
'User profile head'					=>	'User profile',
'Title settings head'				=>	'Title settings',
'Title in menu'						=>	'Show board title in menu.',
'Title in header'					=>	'Show board title in header.',
'Description in header'				=>	'Show board description in header.',
'Description settings head'			=>	'Description settings',

//
// Language for email.php
//

'Contact head'						=>	'Contact settings',
'Admin e-mail label'				=>	'Admin email',
'Admin e-mail help'					=>	'The admins email',
'Webmaster e-mail label'			=>	'Webmaster email',
'Webmaster e-mail help'				=>	'The email where the boards mails will be addressed from',
'Subscriptions head'				=>	'Subscriptions',
'Forum subscriptions help'			=>	'Enable users to subscribe to forums.',
'Topic subscriptions help'			=>	'Enable users to subscribe to topics.',
'SMTP head'							=>	'SMTP settings',
'SMTP address label'				=>	'SMTP server address',
'SMTP address help'					=>	'The address of an external SMTP server to send emails with',
'SMTP username label'				=>	'SMTP username',
'SMTP username help'				=>	'Username for SMTP server, only if required',
'SMTP password label'				=>	'SMTP password',
'SMTP change password help'			=>	'Check this if you want to change or delete the currently stored password.',
'SMTP password help'				=>	'Password and confirmation for SMTP server, only when required',
'SMTP SSL help'						=>	'Encrypts the connection to the SMTP server using SSL, only when required and supported.',

//
// Language for features.php
//

'Features head'						=>	'Features settings',
'General'							=>	'General',
'Topics and posts'					=>	'Topics and posts',
'User features'						=>	'User features',
'Search'							=>	'Search',
'Advanced'							=>	'Advanced',
'Quick post help'					=>	'Show a quick post form so users can post a reaction from the topic view.  ',
'Users online help'					=>	'Display info on the index page about users currently browsing the board.',
'Censor words help'					=>	'Censor words in posts. See %s for more info.',
'Signatures help'					=>	'Allow users to attach a signature to their posts.',
'User ranks help'					=>	'Use user ranks. See %s for more info.',
'Topic views help'					=>	'Show the number of views for each topic.',
'Has posted help'					=>	'Show a label in front of the topics where users have posted.',
'GZip help'							=>	'Gzip output sent to the browser. This will reduce bandwidth usage, but use some more CPU. This feature requires that PHP is configured with zlib. If you already have one of the Apache modules (mod_gzip/mod_deflate) set up to compress PHP scripts, disable this feature.',
'Enable advanced search'			=>	'Allow users to use the advanced search options.',
'Search all help'					=>	'Allow search only in 1 forum at a time.',

'First run'							=>	'First run',
'General settings'					=>	'General settings',
'Show first run label'				=>	'Show the first run panel when an user logs in for the first time.',
'Show guests label'					=>	'Show the first run panel to guests with login field and registration button.',
'Welcome text'						=>	'Welcome text',
'First run help message'			=>	'The introduction to the forum displayed in the middle of the first run panel',

//
// Language for forums.php
//

'Post must be integer message'	=>	'Position must be a positive integer value.',
'New forum'						=>	'New forum',

//
// Entry page
//

'Add forum'					=>	'Add forum',
'Update positions'			=>	'Update positions',
'Confirm delete head'		=>	'Confirm delete forum',
'Confirm delete forum info'	=>	'Are you sure that you want to delete the forum <strong>%s</strong>?',
'Confirm delete forum'		=>	'Warning! Deleting a forum will delete all posts (if any) in that forum!',

//
// Detailed edit page
//

'Edit forum head'			=>	'Edit forum',
'Edit details subhead'		=>	'Edit forum details',
'Forum name label'			=>	'Forum name',
'Forum description label'	=>	'Description',
'Category label'			=>	'Category',
'Sort by label'				=>	'Sort topics by',
'Topic start'				=>	'Topic start',
'User groups'				=>	'User groups',
'Redirect label'			=>	'Redirect URL',
'Group permissions subhead'	=>	'Edit group permissions',
'Group permissions info'	=>	'In this form, you can set the forum specific permissions for the different user groups. Administrators always have full permissions. Permission settings that differ from the default permissions for the user group are marked red. Some permissions are disabled under some conditions.',
'Read forum label'			=>	'Read forum',
'Post replies label'		=>	'Post replies',
'Post topics label'			=>	'Post topics',
'Revert to default'			=>	'Revert to default',

//
// Language used in groups.php
//

'Title already exists message'	=>	'There is already a group with the title <strong>%s</strong>.',
'Cannot remove default message'	=>	'The default group cannot be removed. In order to delete this group, you must first setup a different group as the default.',

'Add group subhead'				=>	'Add new group',
'Create new group'				=>	'Select a user group from which the new group will inherit its permission settings.',
'Default group subhead'			=>	'Set default group',
'Default group help'			=>	'This is the default user group, e.g. the group users are placed in when they register. Not all groups are available here.',
'Existing groups head'			=>	'Existing groups',
'Edit groups info'				=>	'The pre-defined groups can\'t be removed. However, they can be edited. Please note that in some groups, some options are unavailable. Administrators always have full permissions.',
'Group delete head'				=>	'Group delete',
'Confirm delete info'			=>	'Are you sure that you want to delete the group <strong>%s</strong>?',
'Confirm delete warn'			=>	'<b>Warning:</b> After you deleted a group you cannot restore it.',
'Delete group'					=>	'Delete group',
'Move users info'				=>	'The group <strong>%s</strong> currently has <strong>%s</strong> members. Please select a group to which these members will be assigned upon deletion.',
'Move users label'				=>	'Move users to',

'Group settings head'			=>	'Group settings',
'Group settings subhead'		=>	'Setup group options and permissions',
'Group settings info'			=>	'Below options and permissions are the default permissions for the user group. These options apply if no forum specific permissions are in effect.',
'Group title label'				=>	'Group title',
'User title label'				=>	'User title',
'User title help'				=>	'The title will override the user rank',
'Mod privileges label'			=>	'Moderator privileges',
'Mod privileges help'			=>	'In order for a user to have moderator abilities, they must be assigned to moderate one or more forums. This is done via the user administration page of the user\'s profile.',
'Edit profile label'			=>	'Edit user profiles',
'Edit profile help'				=>	'If moderator privileges are enabled, allow users to edit user profiles.',
'Rename users label'			=>	'Rename users',
'Rename users help'				=>	'If moderator privileges are enabled, allow users to rename users.',
'Change passwords label'		=>	'Change passwords',
'Change passwords help'			=>	'If moderator privileges are enabled, allow users to change user passwords.',
'Ban users help'				=>	'If moderator privileges are enabled, allow users to ban users.',
'Read board label'				=>	'Read board',
'Read board help'				=>	'If this is disabled, users will only be able to login and logout.',
'View user info label'			=>	'View user information',
'View user info help'			=>	'Allow users to view the user list and user profiles.',
'Post replies help'				=>	'Allow users to post replies in topics.',
'Post topics help'				=>	'Allow users to post new topics.',
'Edit posts label'				=>	'Edit posts',
'Edit posts help'				=>	'Allow users to edit their own posts.',
'Delete posts help'				=>	'Allow users to delete their own posts.',
'Delete topics help'			=>	'Allow users to delete their own topics (including any replies).',
'Set own title label'			=>	'Set own user title',
'Set own title help'			=>	'Allow users to set their own user title.',
'User search label'				=>	'Use search',
'User search help'				=>	'Allow users to use the search feature.',
'User list search label'		=>	'Search user list',
'User list search help'			=>	'Allow users to search for other users in the user list.',
'Send e-mails label'			=>	'Send e-mails',
'Send e-mails help'				=>	'Allow users to send e-mails to other users.',
'Post flood label'				=>	'Post flood interval',
'Post flood help'				=>	'Time users have to wait between posts',
'Search flood label'			=>	'Search flood interval',
'Search flood help'				=>	'Time users have to wait between searches',
'E-mail flood label'			=>	'Email flood interval',
'E-mail flood help'				=>	'Time users have to wait between emails',
'Report flood label'			=>	'Report flood interval',
'Report flood help'				=>	'Time users have to wait between reports',
'Moderator info'				=>	'Please note that in order for a user to have moderator abilities, they must be assigned to moderate one or more forums. This is done via the user administration page of the user\'s profile.',
'seconds'						=>	'seconds',
'pixels'						=>	'pixels',

//
// Language used in index.php and update.php for Backstage
//

'ModernBB intro'					=>	'Welcome to ModernBB',
'Backup head'						=>	'Back-up',
'Backup info'						=>	'Create new database backup.',
'Backup button'						=>	'Create new backup',
'New reports head'					=>	'New reports',
'Statistics head'					=>	'Statistics',
'Updates'							=>	'Updates',
'View all'							=>	'View all',
'posts'								=>	'posts',
'replies'							=>	'replies',
'reply'								=>	'reply',
'topics'							=>	'topics',
'views'								=>	'views',
'view'								=>	'view',
'users'								=>	'users',

'Not available'						=>	'Not available',
'NA'								=>	'N/A',
'About head'						=>	'About ModernBB',
'ModernBB version label'			=>	'ModernBB version',
'ModernBB version data'				=>	'ModernBB version ',
'Server statistics label'			=>	'Server statistics',
'View server statistics'			=>	'View server statistics',

'ModernBB software updates'			=>	'ModernBB software updates',
'ModernBB updates'					=>	'ModernBB updates',
'Check for updates'					=>	'Check for updates',
'New version'						=>	'It\'s time to update, a new version is available',
'Latest version'					=>	'Thanks for using the latest version of ModernBB',
'Development version'				=>	'You\'re using a development release',

'Reset head'						=>	'ModernBB reset features',
'Soft reset'						=>	'Soft reset',
'Soft reset help'					=>	'The button below will remove the config.php file, this will cause the install to start so you can install ModernBB again. This will not drop the current database. This might be effective if your config.php file is corrupt. This can\'t be undone. Be sure you made a back-up before doing this.',
'Hard reset'						=>	'Hard reset',
'Reset config'						=>	'Reset config.php',
'Hard reset help'					=>	'The button below will remove the config.php file and database, this will cause the install to start so you can install ModernBB again. You will lose all your data. This can\'t be undone. Be sure you made a back-up before doing this.',
'Reset'								=>	'Reset',

//
// Reports
//

'Date and time'						=>	'Date and time',
'No new reports'					=>	'There are no new reports.',

//
// Language for maintenance.php
//

'Rebuild index subhead'			=>	'Rebuild search index',
'Rebuild index info'			=>	'If you changes something about topics and posts in the database you should rebuild the search index. It\'s recommended to activate %s during rebuilding. This can take a while and can increase the server load during the process!',
'Posts per cycle label'			=>	'Posts per cycle',
'Posts per cycle help'			=>	'Number of posts per pageview, this prevents a timeout, 300 recommended',
'Starting post label'			=>	'Starting post ID',
'Starting post help'			=>	'The ID where to start, default is first ID found in database',
'Empty index label'				=>	'Empty index',
'Empty index help'				=>	'Select this if you want the search index to be emptied before rebuilding (see below).',
'Rebuild completed info'		=>	'Be sure to enable JavaScript during the rebuild (to start a new cycle automatically). When you have to abort the rebuilding, remember the last post ID and enter that ID+1 in "Starting post ID" if you want to continue (Uncheck "Empty index").',
'Rebuild index'					=>	'Rebuild index',
'Rebuilding search index'		=>	'Rebuilding search index',
'Rebuilding index info'			=>	'Rebuilding index. This might be a good time to put on some coffee :-)',
'Processing post'				=>	'Processing post <strong>%s</strong> …',
'Click here'					=>	'Click here',
'Javascript redirect failed'	=>	'JavaScript redirect unsuccessful. %s to continue …',
'Posts must be integer message'	=>	'Posts per cycle must be a positive integer value.',
'Days must be integer message'	=>	'Days to prune must be a positive integer value.',
'No old topics message'			=>	'There are no topics that are %s days old. Please decrease the value of "Days old" and try again.',
'Prune subhead'					=>	'Prune old posts',
'Days old label'				=>	'Days old',
'Days old help'					=>	'The number of days old a topic must be to be pruned',
'Prune sticky label'			=>	'Prune sticky topics',
'Prune from label'				=>	'Prune from forum',
'Prune from help'				=>	'What shall we prune?',
'Prune info'					=>	'It\'s recommended to activate %s during pruning.',
'Confirm prune subhead'			=>	'Confirm prune posts',
'Confirm prune info'			=>	'Are you sure that you want to prune all topics older than %s days from %s (%s topics).',
'Confirm prune warn'			=>	'WARNING! Pruning posts deletes them permanently.',

'Prune users head'			=>	'Prune users',
'Prune by'					=>	'Prune by',
'Registed date'				=>	'Registered date',
'Last login'				=>	'Last login',
'Prune by info'				=>	'What should we count to prune?',
'Minimum days'				=>	'Minimum days since registration/last login',
'Minimum days info'			=>	'The minimum amount of days since event specified above',
'Maximum posts'				=>	'Maximum number of posts',
'Maximum posts info'		=>	'How many posts do you require before an users isn\'t pruned',
'Delete admins'				=>	'Delete admins and mods',
'User status'				=>	'User status',
'Delete any'				=>	'Delete any',
'Delete only verified'		=>	'Delete only verified',
'Delete only unverified'	=>	'Delete only unverified',

//
// Language for settings.php
//

'Options head'						=>	'Global settings',

//
// Essentials section
//

'Essentials subhead'				=>	'Essentials',
'Board desc help'					=>	'What\'s this board about?',
'Base URL label'					=>	'Board URL',
'Base URL problem'					=>  'Your installation does not support automatic conversion of internationalized domain names. As your base URL contains special characters, you <strong>must</strong> use an online converter.',
'Timezone label'					=>	'Default time zone',
'DST help'							=>	'Advance time by 1 hour for daylight saving.',
'Language help'						=>	'The default language',

//
// Essentials section timezone options
//

'UTC-12:00'							=>	'(UTC-12:00) International Date Line West',
'UTC-11:00'							=>	'(UTC-11:00) Niue, Samoa',
'UTC-10:00'							=>	'(UTC-10:00) Hawaii-Aleutian, Cook Island',
'UTC-09:30'							=>	'(UTC-09:30) Marquesas Islands',
'UTC-09:00'							=>	'(UTC-09:00) Alaska, Gambier Island',
'UTC-08:30'							=>	'(UTC-08:30) Pitcairn Islands',
'UTC-08:00'							=>	'(UTC-08:00) Pacific',
'UTC-07:00'							=>	'(UTC-07:00) Mountain',
'UTC-06:00'							=>	'(UTC-06:00) Central',
'UTC-05:00'							=>	'(UTC-05:00) Eastern',
'UTC-04:00'							=>	'(UTC-04:00) Atlantic',
'UTC-03:30'							=>	'(UTC-03:30) Newfoundland',
'UTC-03:00'							=>	'(UTC-03:00) Amazon, Central Greenland',
'UTC-02:00'							=>	'(UTC-02:00) Mid-Atlantic',
'UTC-01:00'							=>	'(UTC-01:00) Azores, Cape Verde, Eastern Greenland',
'UTC'								=>	'(UTC) Western European, Greenwich',
'UTC+01:00'							=>	'(UTC+01:00) Central European, West African',
'UTC+02:00'							=>	'(UTC+02:00) Eastern European, Central African',
'UTC+03:00'							=>	'(UTC+03:00) Eastern African',
'UTC+03:30'							=>	'(UTC+03:30) Iran',
'UTC+04:00'							=>	'(UTC+04:00) Moscow, Gulf, Samara',
'UTC+04:30'							=>	'(UTC+04:30) Afghanistan',
'UTC+05:00'							=>	'(UTC+05:00) Pakistan',
'UTC+05:30'							=>	'(UTC+05:30) India, Sri Lanka',
'UTC+05:45'							=>	'(UTC+05:45) Nepal',
'UTC+06:00'							=>	'(UTC+06:00) Bangladesh, Bhutan, Yekaterinburg',
'UTC+06:30'							=>	'(UTC+06:30) Cocos Islands, Myanmar',
'UTC+07:00'							=>	'(UTC+07:00) Indochina, Novosibirsk',
'UTC+08:00'							=>	'(UTC+08:00) Greater China, Australian Western, Krasnoyarsk',
'UTC+08:45'							=>	'(UTC+08:45) Southeastern Western Australia',
'UTC+09:00'							=>	'(UTC+09:00) Japan, Korea, Chita, Irkutsk',
'UTC+09:30'							=>	'(UTC+09:30) Australian Central',
'UTC+10:00'							=>	'(UTC+10:00) Australian Eastern',
'UTC+10:30'							=>	'(UTC+10:30) Lord Howe',
'UTC+11:00'							=>	'(UTC+11:00) Solomon Island, Vladivostok',
'UTC+11:30'							=>	'(UTC+11:30) Norfolk Island',
'UTC+12:00'							=>	'(UTC+12:00) New Zealand, Fiji, Magadan',
'UTC+12:45'							=>	'(UTC+12:45) Chatham Islands',
'UTC+13:00'							=>	'(UTC+13:00) Tonga, Phoenix Islands, Kamchatka',
'UTC+14:00'							=>	'(UTC+14:00) Line Islands',

//
// Timeout Section
//

'Timeouts subhead'					=>	'Time and timeouts',
'PHP manual'						=>	'PHP manual',
'Time format help'					=>	'Now: %s. See %s for more info',
'Date format help'					=>	'Now: %s. See %s for more info',
'Visit timeout label'				=>	'Visit timeout',
'Visit timeout help'				=>	'Time before a visit ends',
'Online timeout label'				=>	'Online timeout',
'Online timeout help'				=>	'Time before someone isn\'t online anymore',

//
// Feeds section
//

'Feed subhead'						=>	'Syndication',
'Default feed label'				=>	'Default feed type',
'Default feed help'					=>	'Select a feed',
'None'								=>	'None',
'RSS'								=>	'RSS',
'Atom'								=>	'Atom',
'Feed TTL label'					=>	'Duration to cache feeds',
'Feed TTL help'						=>	'Reduce sources by caching feeds',
'No cache'							=>	'Don\'t cache',
'Minutes'							=>	'%d minutes',

//
// Reports section
//

'Reporting method label'			=>	'Reporting method',
'Internal'							=>	'Internal',
'Both'								=>	'Both',
'Reporting method help'				=>	'How should we handle reports?',
'Mailing list label'				=>	'Mailing list',
'Mailing list help'					=>	'A comma separated list of subscribers who get e-mails when new reports are made',

//
// Avatars section
//

'Avatars subhead'					=>	'Avatars',
'Use avatars label'					=>	'Use avatars',
'Use avatars help'					=>	'Enable so users can upload avatars.',
'Upload directory label'			=>	'Upload directory',
'Upload directory help'				=>	'Where avatars will be stored relative to ModernBBs root, write permission required',
'Max width label'					=>	'Max width',
'Max height label'					=>	'Max height',
'Max size label'					=>	'Max size',

//
// Registration Section
//

'Allow new label'					=>	'Allow new registrations',
'Allow new help'					=>	'Allow new users to be made by people.',
'Verify label'						=>	'Verify registrations',
'Verify help'						=>	'Send a random password to users to verify their email address.  ',
'Report new label'					=>	'Report new registrations',
'Report new help'					=>	'Notify people on the mailing list when new user registers.  ',
'Use rules label'					=>	'User forum rules',
'Use rules help'					=>	'Require users to agree with the rules. This will also enable a "Rules" link in the navigation bar.',
'Rules label'						=>	'Enter your rules here',
'Rules help'						=>	'Enter rules or useful information, required when rules are enabled',
'E-mail default label'				=>	'Default email setting',
'E-mail default help'				=>	'Default privacy setting for new registrations',
'Display e-mail label'				=>	'Display email address to other users.',
'Hide allow form label'				=>	'Hide email address but allow form e-mail.',
'Hide both label'					=>	'Hide email address and disallow form email.',
'Antispam API label'				=>	'Antispam API',
'Antispam API help'					=>	'You can request an API key at %s to protect your forum against spam',

//
// Announcement Section
//

'Announcement subhead'				=>	'Announcements',
'Display announcement help'			=>	'Enable this to display the below message in the board.',

//
// Maintenance Section
//

'Maintenance mode help'				=>	'Enable to activate maintenance mode, the board will only be available for admins. Do not log out when this feature is active!',
'Maintenance message help'			=>	'The message to tell users about the maintenance',
'Cache'								=>	'Cache',
'Cache info'						=>	'Remove all cache files so the database has to return up-to-date values',
'Clear cache'						=>	'Clear cache',

//
// Language for permissions.php
//

'All caps'					=>	'All caps',
'Posting subhead'			=>	'Posting',
'BBCode help'				=>	'Allow BBCode in posts (recommended).',
'Image tag help'			=>	'Allow the BBCode [img] tag in posts.',
'All caps message help'		=>	'Allow a message to contain only capital letters.',
'All caps subject help'		=>	'Allow a subject to contain only capital letters.',
'Require e-mail help'		=>	'Require guests to supply an email address when posting.',
'Signatures subhead'		=>	'Signatures',
'BBCode sigs help'			=>	'Allow BBCode in user signatures.',
'Image tag sigs help'		=>	'Allow the BBCode [img] tag in user signatures (not recommended).',
'All caps sigs help'		=>	'Allow a signature to contain only capital letters.',
'Max sig length label'		=>	'Maximum signature length',
'Max sig length help'		=>	'Maximum amount of characters a signature can have',
'Max sig lines label'		=>	'Maximum signature lines',
'Max sig lines help'		=>	'Maximum amount of lines a signature can have',
'Banned e-mail help'		=>	'Allow users to use a banned email address, mailing list will be warned when this happens.',
'Duplicate e-mail help'		=>	'Allow users to use an email address that is already used, mailing list will be warned when this happens.',

//
// Language for ranks.php
//

'Must be integer message'	=>	'Minimum posts must be a positive integer value.',
'Dupe min posts message'	=>	'There is already a rank with a minimun posts value of %s.',
'Add rank subhead'			=>	'Add rank',
'Ranks disabled'			=>	'<strong>User ranks is disabled in %s.</strong>',
'Rank title label'			=>	'Rank title',
'Minimum posts label'		=>	'Minimum posts',
'Edit remove subhead'		=>	'Edit/remove ranks',
'No ranks in list'			=>	'No ranks in list',

//
// Language for reports.php
//

'Deleted user'				=>	'Deleted user',
'Deleted'					=>	'Deleted',
'Post ID'					=>	'Post #%s',
'Reported by'				=>	'Reported by',
'Actions'					=>	'Actions',
'Zap'						=>	'Mark as read',
'Last 10 head'				=>	'10 last read reports',
'Readed by'					=>	'Marked as read by',
'No zapped reports'			=>	'There are no read reports.',

//
// Language for statistics.php
//

'PHPinfo disabled message'			=>	'The PHP function phpinfo() has been disabled on this server.',
'Server statistics head'			=>	'Server statistics',
'Server load label'					=>	'Server load',
'Server load data'					=>	'%s - %s user(s) online',
'Environment label'					=>	'Environment',
'Environment data OS'				=>	'Operating system: %s',
'Show info'							=>	'Show info',
'Environment data version'			=>	'PHP: %s - %s',
'Environment data acc'				=>	'Accelerator: %s',
'Turck MMCache'						=>	'Turck MMCache',
'Turck MMCache link'				=>	'turck-mmcache.sourceforge.net/',
'ionCube PHP Accelerator'			=>	'ionCube PHP Accelerator',
'ionCube PHP Accelerator link'		=>	'www.php-accelerator.co.uk/',
'Alternative PHP Cache (APC)'		=>	'Alternative PHP Cache (APC)',
'Alternative PHP Cache (APC) link'	=>	'www.php.net/apc/',
'Zend Optimizer'					=>	'Zend Optimizer',
'Zend Optimizer link'				=>	'www.zend.com/products/guard/zend-optimizer/',
'eAccelerator'						=>	'eAccelerator',
'eAccelerator link'					=>	'www.eaccelerator.net/',
'XCache'							=>	'XCache',
'XCache link'						=>	'xcache.lighttpd.net/',
'Database label'					=>	'Database',
'Database data rows'				=>	'Rows: %s',
'Database data size'				=>	'Size: %s',

//
// Language for users.php
//

'Non numeric message'		=>	'You entered a non-numeric value into a numeric only column.',
'Invalid date time message'	=>	'You entered an invalid date/time.',
'Not verified'				=>	'Not verified',

//
// Actions: mass delete/ban etc.
//

'No users selected'			=>	'No users selected.',
'No move admins message'	=>	'For security reasons, you are not allowed to move multiple administrators to another group. If you want to move these administrators, you can do so on their respective user profiles.',
'No delete admins message'	=>	'Administrators cannot be deleted. In order to delete administrators, you must first move them to a different user group.',
'No ban admins message'		=>	'Administrators cannot be banned. In order to ban administrators, you must first move them to a different user group.',
'No ban mods message'		=>	'Moderators cannot be banned. In order to ban moderators, you must first move them to a different user group.',
'Move users'				=>	'Change user group',
'New group label'			=>	'New group',
'New group help'			=>	'Select a new user group',
'Invalid group message'		=>	'Invalid group ID.',
'Delete users'				=>	'Delete users',
'Ban users'					=>	'Ban users',
'Ban IP label'				=>	'Ban IP addresses',
'Ban IP help'				=>	'Also ban the IP addresses of the banned users to make registering a new account more difficult for them.',

'E-mail address label'		=>	'Email address',
'Real name label'			=>	'Real name',
'Signature'					=>	'Signature',
'Posts more than label'		=>	'Number of posts greater than',
'Posts less than label'		=>	'Number of posts less than',
'Last post after label'		=>	'Last post is after',
'Last post before label'	=>	'Last post is before',
'Last visit after label'	=>	'Last visit is after',
'Last visit before label'	=>	'Last visit is before',
'Registered after label'	=>	'Registered after',
'Registered before label'	=>	'Registered before',
'Order by posts'			=>	'Number of posts',
'Order by last visit'		=>	'Last visit',
'Order by registered'		=>	'Registered',
'All groups'				=>	'All groups',
'Unverified users'			=>	'Unverified users',
'IP search head'			=>	'IP search',
'IP address label'			=>	'IP address',
'IP address help'			=>	'The IP address to search for in the post database.',
'Find IP address'			=>	'Find IP address',

'Results title head'		=>	'Title/Status',
'Results posts head'		=>	'Posts',
'Results last used head'	=>	'Last used',
'Results times found head'	=>	'Times found',
'Results find more link'	=>	'Find more users for this ip',
'Results no posts found'	=>	'There are currently no posts by that user in the forum.',
'Ban'						=>	'Ban',
'Change group'				=>	'Change group',
'Bad IP message'			=>	'The supplied IP address is not correctly formatted.',
'Results view IP link'		=>	'IP stats',
'Results no IP found'		=>	'The supplied IP address could not be found in the database.',

//
// Create new user
//

'Add user head'				=>	'Add user',
'Random password info'		=>	'Generate a random password, this will be emailed to the above address. When checked, leave "Password" empty.',

//
// Common language used in /backstage/
// Main menu
//

'Content'				=>	'Content',
'Forums'				=>	'Forumet',
'Forum settings'		=>	'Forum settings',
'Categories'			=>	'Categories',
'Board'					=>	'Board',
'Board structure'		=>	'Struktura e bordit',
'Censoring'				=>	'Censoring',
'Reports'				=>	'Reports',
'Users'					=>	'Përdoruesit',
'Ranks'					=>	'Ranks',
'Groups'				=>	'Groupet',
'Permissions'			=>	'Permissions',
'Bans'					=>	'Përjashtimet',
'Settings'				=>	'Cilsimet',
'Global'				=>	'Globale',
'Registration'			=>	'Regjistrimi',
'Email'					=>	'Email',
'Database'				=>	'Menagjimi i databazës',
'Backstage settings'	=>	'Cilsimet e prapaskenes',
'Extensions'			=>	'Extensions',

//
// Others
//

'Prune'					=>	'Prune',
'Server statistics'		=>  'Server statistics',

//
// Update service
//

'Available'				=>	'An update, ModernBB v%s, is available',
'Development'			=>	'You are running version %s, the latest stable release is version %s.',
'Download'				=>	'Download v%s',
'Changelog'				=>	'Changelog',

//
// General actions and more
//

'Admin'					=>	'Admin',
'Go back'				=>	'Kthehu prapa',
'Update'				=>	'Përditso',
'Add'					=>	'Shto',
'Remove'				=>	'Shlyej',
'Yes'					=>	'Po',
'No'					=>	'Jo',
'here'					=>	'këtu',
'Action'				=>	'Akcion',
'Maintenance mode'		=>	'tipi mirëmbajtje', // Used for link text in more than one file

// Cookie bar
'Cookie bar'			=>	'Cookie bar',
'Cookie info'			=>	'We use cookies to give you the best experience on this board.',
'More info'				=>	'More info',
'Cookie set info'		=>	'Show a bar with information about cookies at the bottom of the page.',

//
// Admin loader
//

'No plugin message'		=>	'There is no plugin called %s in the plugin directory.',
'Plugin failed message'	=>	'Loading of the plugin - <strong>%s</strong> - failed.',

//
// Email templtes
//

// Email - activate_email.tpl
'activate_email.tpl'          =>
'Subject: Change email address requested

Hello <username>,

You have requested to have a new email address assigned to your account in the discussion forum at <base_url>. If you did not request this or if you do not want to change your email address you should just ignore this message. Only if you visit the activation page below will your email address be changed. In order for the activation page to work, you must be logged in to the forum.

To change your email address, please visit the following page:
<activation_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

//
// Email - activate_password.tpl
//
'activate_password.tpl'          =>
'Subject: New password requested

Hello <username>,

You have requested to have a new password assigned to your account in the discussion forum at <base_url>. If you did not request this or if you do not want to change your password you should just ignore this message. Only if you visit the activation page below will your password be changed.

Your new password is: <new_password>

To change your password, please visit the following page:
<activation_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - banned_email_change.tpl
'banned_email_change.tpl'          =>
'Subject: Alert - Banned email detected

User "<username>" changed to banned email address: <email>

User profile: <profile_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - banned_email_post.tpl
'banned_email_post.tpl'          =>
'Subject: Alert - Banned email detected

User "<username>" posted with banned email address: <email>

Post URL: <post_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - banned_email_register.tpl
'banned_email_register.tpl'          =>
'Subject: Alert - Banned email detected

User "<username>" registered with banned email address: <email>

User profile: <profile_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - dupe_email_change.tpl
'dupe_email_change.tpl'          =>
'Subject: Alert - Duplicate email detected

User "<username>" changed to an email address that also belongs to: <dupe_list>

User profile: <profile_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - dupe_email_register.tpl
'dupe_email_register.tpl'          =>
'Subject: Alert - Duplicate email detected

User "<username>" registered with an email address that also belongs to: <dupe_list>

User profile: <profile_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - form_email.tpl
'form_email.tpl'          =>
'Subject: <mail_subject>

<sender> from <board_title> has sent you a message. You can reply to <sender> by replying to this email.

The message reads as follows:
-----------------------------------------------------------------------

<mail_message>

-----------------------------------------------------------------------

--
<board_mailer> Mailer',

// Email - new_reply.tpl
'new_reply.tpl'          =>
'Subject: Reply to topic: "<topic_subject>"

<replier> has replied to the topic "<topic_subject>" to which you are subscribed. There may be more new replies, but this is the only notification you will receive until you visit the board again.

The post is located at <post_url>

You can unsubscribe by going to <unsubscribe_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - new_reply_full.tpl
'new_reply_full.tpl'          =>
'Subject: Reply to topic: "<topic_subject>"

<replier> has replied to the topic "<topic_subject>" to which you are subscribed. There may be more new replies, but this is the only notification you will receive until you visit the board again.

The post is located at <post_url>

The message reads as follows:
-----------------------------------------------------------------------

<message>

-----------------------------------------------------------------------

You can unsubscribe by going to <unsubscribe_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - new_report.tpl
'new_report.tpl'          =>
'Subject: Report(<forum_id>) - "<topic_subject>"

User "<username>" has reported the following message: <post_url>

Reason: <reason>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - new_topic.tpl
'new_topic.tpl'          =>
'Subject: New topic in forum: "<forum_name>"

<poster> has posted a new topic "<topic_subject>" in the forum "<forum_name>", to which you are subscribed.

The topic is located at <topic_url>

You can unsubscribe by going to <unsubscribe_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - new_topic_full.tpl
'new_topic_full.tpl'          =>
'Subject: New topic in forum: "<forum_name>"

<poster> has posted a new topic "<topic_subject>" in the forum "<forum_name>", to which you are subscribed.

The topic is located at <topic_url>

The message reads as follows:
-----------------------------------------------------------------------

<message>

-----------------------------------------------------------------------

You can unsubscribe by going to <unsubscribe_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - new_user.tpl
'new_user.tpl'          =>
'Subject: Alert - New registration

User "<username>" registered in the forums at <base_url>

User profile: <profile_url>

To administer this account, please visit the following page:
<admin_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - rename.tpl
'rename.tpl'          =>
'Subject: User account renamed

During an upgrade to the forums at <base_url> it was determined your username is too similar to an existing user. Your username has been changed accordingly.

Old username: <old_username>
New username: <new_username>

We apologise for any inconvenience caused.

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - welcome.tpl
'welcome.tpl'          =>
'Subject: Welcome to <board_title>!

Thank you for registering in the forums at <base_url>. Your account details are:

Username: <username>
Password: <password>

Login at <login_url> to activate the account.

--
<board_mailer> Mailer
(Do not reply to this message)',

);