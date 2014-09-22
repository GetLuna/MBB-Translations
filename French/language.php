<?php

$lang = array(

//
// Text orientation and encoding
//

'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'fr',

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

'Bad request'						=>	'Mauvaise requête. Lien lien que vous avez suivi est invalide, dépasse ou vous n\'avez simplement pas le droit d\'être ici.',
'No view'							=>	'Vous n\'avez pas la permission de voir cette page.',
'Bad referrer'						=>	'Mauvais HTTP_REFERER. Vous avez été redirigé sur cette page depuis une source inconnue. Si le problème persiste merci de vérifier que \'URL du forum\' est correctement indiquée dans in Admin/Général et que vous visitez le forum par cette adresse URL. Plus d\'informations sur les redirections peuvent être trouvées sur la documentation officielle de ModernBB',
'No permission'						=>	'Vous n\'avez pas la permission d\'accéder à cette page.',
'No cookie'							=>	'Il semble que vous vous êtes connectés correctement, cependant le cookie est erroné. Merci de vérifier vos paramètres et d\'activer les cookies pour ce site web.',
'Pun include extension'				=>  'Impossible d\'inclure %s du template %s. "%s" les fichiers ne sont pas autorisés',
'Pun include directory'				=>  'Impossible d\'inclure %s du template %s. Le dossier traversé est incorrect',
'Pun include error'					=>  'Impossible d\'inclure %s du template %s. Ce fichier n\'existe pas dans ce dossier',
'Settings saved'					=>  'Vos paramètres ont bien été sauvegardées.',
'User deleted'						=>  'L\'utilisateur a bien été supprimé.',
'User failed'                       =>  'Impossible de créer l\'utilisateur, aucun mot de passe n\'a été fourni',
'User created'                      =>  'Utilisateur crée',
'Cache cleared'						=>  'Le cache a bien été vidé !',

//
// Miscellaneous
//

'Announcement'						=>	'Annonce',
'Options'							=>	'Paramètres généraux',
'Features'							=>	'Fonctions',
'Submit'							=>	'Envoyer', // "Name" of submit buttons
'Search'							=>	'Rechercher',
'Ban message'						=>	'Vous avez été banni de ce forum.',
'Ban message 2'						=>	'Le ban expire le',
'Ban message 3'						=>	'Un administrateur/modérateur à laissé un message sur votre bannissement : ',
'Ban message 4'						=>	'Contactez l\'administrateur du forum : ',
'Never'								=>	'Jamais',
'Today'								=>	'Aujourd\'hui',
'Yesterday'							=>	'Hier',
'Info'								=>	'Information', // A common table header
'Maintenance'						=>	'Maintenance',
'Invalid email'						=>	'L\'adresse e-mail entrée est incorrecte!',
'Required'							=>	'(Requis)',
'required field'					=>	'est un champ requis dans le formulaire', // For javascript form validation
'Last post'							=>	'Dernier post',
'by'								=>	'par', // As in last post by some user
'New posts'							=>	'Nouveaux posts', // The link that leads to the first new post
'New posts info'					=>	'Go to the first new post in this topic.', // The popup text for new posts links
'Username'							=>	'Pseudonyme',
'Password'							=>	'Mot de passe',
'Send email'						=>	'Envoyer un e-mail',
'Moderated by'						=>	'Modéré par',
'Registered table'					=>	'Enregistré',
'Subject'							=>	'Sujet',
'Start typing'                      =>  'Commencez un message...',
'Message'							=>	'Message',
'Topic'								=>	'Sujet',
'Forum'								=>	'Forum',
'Posts table'						=>	'Posts',
'Replies forum'						=>	'Réponses',
'Page'								=>	'Page %s',
'BBCode'							=>	'BBCode',
'img tag'							=>	'[img] tag',
'Smilies'							=>	'Smileys',
'and'								=>	'et',
'Image link'						=>	'image', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'citation', // For [quote]'s
'Mailer'							=>	'%s Mailer', // As in "MyForums Mailer" in the signature of outgoing emails
'Spacer'							=>	'…', // Ellipsis for paginate

//
// Title
//

'Title'								=>	'Titre',
'Member'							=>	'Membre',
'Moderator'							=>	'Modérateur',
'Administrator'						=>	'Administrateur',
'Banned'							=>	'Banni',
'Guest'								=>	'Visiteur',

//
// Stuff for include/parser.php
//

'BBCode error no opening tag'		=>	'[/%1$s] a été trouvé sans [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] a été ouvert avec [%2$s], ceci est interdit',
'BBCode error invalid self-nesting'	=>	'[%s] a été ouvert en elle-même, ceci est interdit',
'BBCode error no closing tag'		=>	'[%1$s] a été trouvé sans [/%1$s]',
'BBCode error empty attribute'		=>	'La balise [%s] dispose d\'un attribut vide',
'BBCode list size error'			=>	'Votre liste est trop longue à parser, merci de la raccourcir',

// Stuff for the navigator (top of every page)

//
// User menu
//

'Support'							=>	'Support',
'Help'								=>	'Aide',
'Index'								=>	'Index',
'User list'							=>	'Liste des utilisateurs',
'Rules'								=>	'Règles',
'Register'							=>	'S\'inscrire',
'Registered'						=>	'Inscrit depuis',
'Login'								=>	'Connexion',
'Profile'							=>	'Profil',
'Logout'							=>	'Déconnexion',
'Backstage'							=>	'Administration',
'New posts header'					=>	'Nouveau',
'Active topics'						=>	'Actif',
'Unanswered topics'					=>	'Non-répondu',
'Posted topics'						=>	'Posté',
'Show new posts'					=>	'Chercher les sujets avec de nouveaux messages depuis votre dernière visite',
'Show active topics'				=>	'Chercher les sujets avec des messages récents.',
'Show unanswered topics'			=>	'Chercher les sujets sans réponses.',
'Show posted topics'				=>	'Chercher les sujets dans les quels vous avez posté.',
'Mark as read'						=>	'Marqué comme lu',
'Title separator'					=>	' / ',

//
// Stuff for the page footer
//

'Moderate topic'					=>	'Modérer le sujet',
'All'								=>	'Voir tous les posts',
'Move topic'						=>	'Déplacer le sujet',
'Open topic'						=>	'Ouvrir le sujet',
'Close topic'						=>	'Fermer le sujet',
'Unstick topic'						=>	'Détacher le sujet',
'Stick topic'						=>	'Attacher le sujet',
'Moderate forum'					=>	'Modérer le forum',
'Powered by'						=>	'Propulsé par %s',
'Thanks'							=>	'Merci d\'utiliser %s',

//
// Debug information
//

'Debug table'						=>	'Informations de débug',
'Querytime'							=>	'Généré en %1$s secondes, %2$s requêtes exécutées',
'Memory usage'						=>	'Mémoire utilisée: %1$s',
'Peak usage'						=>	'(Pic : %1$s)',
'Query times'						=>	'Temps (s)',
'Query'								=>	'Requête',
'Total query time'					=>	'Temps total des reqûetes : %s',

//
// First run
//

'First run message'					=>	'Wow, c\'est super de vous avoir ici, bienvenue et merci d\'être avec nous. Nous avons mis en place votre compte et vous êtes prêt à naviguer. Nous aimerions vous rappeler quelques actions que vous pouvez faire.',
'Hi there'							=>	'Bienvenue, %s',
'Welcome to'						=>	'Bienvenue sur %s',
'Change your avatar'				=>	'Changer votre avatar',
'Extend profile'					=>	'Modifier vos coordonnées',
'Get help'							=>	'Obtenir de l\'aide',
'Do not show again'					=>	'Ne pas ré-afficher',

//
// For extern.php RSS feed
//

'RSS description'					=>	'Les sujets les plus récents à %s.',
'RSS description topic'				=>	'Les messages les plus récents dans %s.',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS du flux des sujets actifs',
'Atom active topics feed'			=>	'Atom du flux des sujets actifs',
'RSS forum feed'					=>	'RSS du flux du forum',
'Atom forum feed'					=>	'Atom du flux du forum',
'RSS topic feed'					=>	'RSS du flux du sujet',
'Atom topic feed'					=>	'Atom du flux du sujet',

//
// Admin related stuff in the header
//

'New reports'						=>	'Il ya de nouveaux rapports !',
'Maintenance mode enabled'			=>	'Le mode maintenance est activé !',

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

'Choose install language'		=>	'Choisissez le langage d\'installation',
'Choose install language info'	=>	'Le langage utilisé pour l\'installation. Le langage général sera paramétrable en dessous',
'Install language'				=>	'Langage d\'installation',
'Change language'				=>	'Changer le langage',
'Already installed'				=>	'Il semble que le forum est déjà installé, cliquez <a href="index.php">ici</a> pour y accéder.',
'You are running error'			=>	'Vous êtes sur %1$s version %2$s. ModernBB %3$s requiert au moins %1$s %4$s pour être lancé correctement. Vous devez mettre à jour votre %1$s installation avant de continuer.',
'My ModernBB Forum'				=>	'Mon Forum ModernBB',
'Description'					=>	'Vous pouvez tout faire !',
'Username 1'					=>	'Le pseudo doit contenir au moins 2 caractères',
'Username 2'					=>	'Le pseudo ne peut contenir plus de 25 caractères',
'Username 3'					=>	'Ce pseudo est réservé !',
'Username 4'					=>	'Les noms d\'utilisateurs ne peuvent être des adresses IP',
'Username 5'					=>	'Le pseudo ne peut contenir les caractères \', " et [ ou ]',
'Username 6'					=>	'Le pseudo ne peut contenir des balises HTML ou BBCode',
'Short password'				=>	'Le mot de passe doit contenir au moins 6 caractères.',
'Passwords not match'			=>	'Les mots de passe ne correspondent pas',
'Wrong email'					=>	'L\'email de l\'administrateur entré est invalide',
'No board title'				=>	'Vous devez renseigner un titre de forum',
'Error default language'		=>	'Le langage par défaut choisi n\'existe pas',
'Error default style'			=>	'Le style par défaut choisi n\'existe pas',
'No DB extensions'				=>	'PHP a besoin de MySQL ou SQLite pour installer ModernBB. Sinon, ce sera impossible.',
'Administrator username'		=>	'Pseudonyme',
'Administrator password 1'		=>	'Mot de passe de l\'administrateur (1)',
'Administrator password 2'		=>	'Mot de passe de l\'administrateur (2)',
'Administrator email'			=>	'E-mail',
'Board title'					=>	'Titre du forum',
'Base URL'						=>	'Pas de slash',
'Required field'				=>	'est un champ requis du formulaire.',
'ModernBB Installation'			=>	'Installation de ModernBB',
'Install'						=>	'Installer ModernBB %s',
'Errors'						=>	'Les erreurs suivantes doivent être corrigées : ',
'Database setup'				=>	'Configuration de la Base de Données',
'Select database'				=>	'Sélectionnez le type de base de données',
'Info 1'						=>	'Quelle base de données souhaitez vous utiliser ?',
'Database type'					=>	'Type',
'Info 2'						=>	'Quel est le serveur ?',
'Info 3'						=>	'Le nom de la base de données',
'Database server hostname'		=>	'Hôte du Serveur',
'Database name'					=>	'Nom',
'Database enter informations'	=>	'Entrez le pseudo et mot de passe de la base de données',
'Database username'				=>	'Pseudonyme',
'Info 4'						=>	'Votre pseudo de base de données',
'Database password'				=>	'Mot de passe',
'Info 5'						=>	'Utile pour installer plusieurs fois ModernBB',
'Table prefix'					=>	'Préfixe de tables',
'Administration setup'			=>	'Configuration de l\'administration',
'Info 6'						=>	'De 2 à 25 caractères',
'Info 7'						=>	'Au moins 6 caractères de long',
'Confirm password'				=>	'Confirmation du mot de passe',
'Board setup'					=>	'Configuration du forum',
'Board description'				=>	'Description du forum',
'Appearance'					=>	'Apparence',
'Default language'				=>	'Langage par défaut',
'Default style'					=>	'Style par défaut',
'Start install'					=>	'Commencez l\'installation',
'DB type not valid'				=>	'\'%s\' est un type de base de données invalide',
'Table prefix error'			=>	'Le préfixe de tables \'%s\' contient des carractèrs illégaux ou trops longs. Le préfixe peut contenir les lettres de A à Z, des nombres et l\'underscore. Il ne doit pas commencer par un nombre/chiffre. La longueur maximum est de 40 caractères. Merci de choisir un préfixe différent',
'Prefix reserved'				=>	'Le préfixe de table \'sqlite_\' est réserver pour l\'utilisation du moteur SQLite. Merci de choisir un préfixe différent',
'Existing table error'			=>	'Une table nommée \'%susers\' est déjà présente dans la base de données \'%s\'. Cela signifie que ModernBB est déjà peut-être installé ou q\'un autre système est installé et occupe une ou plusieurs tables que ModernBB requiert. Si vous souhaitez installer une autre copie de ModernBB vous devez spécifier un préfixe différent',
'InnoDB off'					=>	'InnoDB semble ne pas être activé. Merci de choisir un autre type de serveur qu\'InnoDB, ou activez InnoDB sur votre serveur MYSQL',
'Administrators'				=>	'Administrateurs',
'Moderators'					=>	'Modérateurs',
'Guests'						=>	'Visiteurs',
'Members'						=>	'Membres',
'New member'					=>	'Nouveau Membre',
'Maintenance message'			=>	'Le forum est actuellement indisponible pour cause de maintenance. Merci de repasser dans quelques instants',
'Alert cache'					=>	'<strong>Le dossier de cache n\'est pas accessible en écriture actuellement !</strong> Pour que ModernBB fonctionne correctement, le dossier <em>%s</em> doit être accessible en écriture par PHP. Utilisez le chmod pour appliquer les permissions nécessaires. Si vous doutez, utilisez le chmod en 0777.',
'Alert avatar'					=>	'<strong>Le dossier d\'avatars n\'est pas accessible en écriture actuellement !</strong> Si vous voulez que les utilisateurs puissent uploader des avatars, le dossier <em>%s</em> doit être accessible en écriture par PHP. Vous pourrez changer plus tard le dossier de stockage des avatars (voir Admin/Options). Utilisez le chmod pour appliquer les permissions nécessaires. Si vous doutez, utilisez le chmod en 0777',
'Alert upload'					=>	'<strong>L\'upload de fichiers semble être désactivé sur le serveur !</strong> Si vous voulez que les utilisateurs puissent uploader des avatars vous devez activer l\'option file_uploads dans votre configuration PHP. Quand l\'option file_uploads sera activé, l\'upload des avatars sera activable dans Administration/Options/Fonctions.',
'ModernBB has been installed'	=>	'ModernBB a bien été installé. Pour finaliser l\'installation, suivez les indications ci-dessous',
'Info 8'						=>	'Pour finaliser l\'installation, vous devez cliquer sur le bouton ci-dessous pour télécharger un fichier appellé config.php. Vous devez uploader ce fichier dans le dossier racine de votre installation ModernBB.',
'Info 9'						=>	'Une fois que vous avez uploadé le fichier config.php, ModernBB sera complètement installé ! A ce point, vous pouvez <a href="index.php">aller sur l\'index de votre forum</a>.',
'Download config.php file'		=>	'Télécharger le fichier config.php',
'ModernBB fully installed'		=>	'ModernBB est complètement installé ! Vous pouvez <a href="index.php">aller sur l\'index de votre forum</a>.',

//
// Language for updating
//

'Update ModernBB'				=>	'Mettre à jour ModernBB',
'Down'							=>	'Le forum est actuellement indisponible pour cause de maintenance. Merci de repasser dans quelques instants',

'Version mismatch error'		=>	'Incompatibilité de version. La base de données \'%s\' ne semble pas être un schéma de base de données ModernBB supporté par le script de mise à jour',
'No update error'				=>	'Votre forum est déjà le plus à jour que le script puisse faire',

'Start update'					=>	'Commencez la mise à jour',
'Correct errors'				=>	'Les erreurs suivantes doivent être corrigées : ',
'Successfully updated'			=>	'La base de données de votre forum a bien été mise à jour. Vous pouvez maintenant %s.',
'go to index'					=>	'aller sur l\'index de votre forum',

'Preparsing item'				=>	'Pré-analyse %1$s %2$s …',
'Rebuilding index item'			=>	'Reconstruction de l\'index %1$s %2$s',

'post'							=>	'post',
'topic'							=>	'sujet',
'signature'						=>	'signature',

// Language for frontend

//
// Language for delete.php
//

'Delete post'			=>	'Supprimer le message',
'Topic warning'			=>	'Attention ! Ce message est le permier du sujet, en le supprimant le sujet sera définitivement supprimé.',
'Delete info'			=>	'Le poste que vous avez choisi de le supprimer est affiché ci-dessous avant de continuer.',
'Reply by'				=>	'Répondu par %s - %s',
'Topic by'				=>	'Crée par %s - %s',
'Delete'				=>	'Supprimer',

//
// Language for help.php
//

'produces'				=>	'produit',

'BBCode info'			=>	'Le BBCode est une collection de balises qui sont utilisées pour changer le style de texte dans le forum. Ci-dessous vous pouvez trouver toutes les balises disponibles et vous pouvez savoir comment les utiliser. Les administrateurs peuvent désactiver le BBCode. Vous pouvez savoir si le BBCode est désactivé à chaque fois que vous postez un message ou en éditant votre signature',

'Text style'			=>	'Style du texte',
'Text style info'		=>	'Les balises suivantes permettent de modifier le style du texte :',
'Bold text'				=>	'Texte en gras',
'Underlined text'		=>	'Texte souligné',
'Italic text'			=>	'Texte en italique',
'Strike-through text'	=>	'Texte barré',
'Red text'				=>	'Texte en rouge',
'Blue text'				=>	'Texte en bleu',
'Heading text'			=>	'Texte en entête',
'Inserted text'			=>	'Texte inséré',
'Sub text'				=>	'Texte en indice',
'Sup text'				=>	'Texte en exposant',

'Multimedia'			=>  'Multimédia',
'Links info'			=>	'Vous pouvez créer des liens vers des documents/pages externes ou vers des adresses e-mails en utilisant les balises suivantes :',
'My email address'		=>	'Mon adresse e-mail',
'Images info'			=>	'Si vous souhaitez afficher une image vous pouvez utiliser la balise img. Le texte qui apparaît après le "=" signifie que ce qui suit sera utilisé comme attribut "alt" et vous pouvez l\'inclure où vous voulez.',
'ModernBB bbcode test'  =>  'Test de BBCode sur ModernBB',
'Video info'			=>  'ModernBB supporte les vidéos incluses depuis DailyMotion, Vimeo et YouTube. Avec le BBCode ci-dessous, vous pouvez inclure des vidéos de ces différents services.',
'Video link'			=>  'Mettez le lien de votre vidéo ici',

'Quotes'				=>	'Citations',
'Quotes info'			=>	'Si vous souhaitez citer quelqu\'un vous devez utiliser la balise quote',
'Quotes info 2'			=>	'Si vous ne voulez pas citer quelqu\'un en particulier, vous pouvez utiliser la balise quote sans spécifier de nom. Si un nom d\'utilisateur contient des caractères [ou], vous pouvez l\'insérer avec des guillemets.',
'Quote text'			=>	'Ceci est le texte que je souhaite citer',
'produces quote box'	=>	'produit une citation comme ceci :',

'Code'					=>	'Code',
'Code info'				=>	'Quand vous affichez du code source, assurez vous d\'utilisaer la balise code. Le texte affiché par la balise code utilise une police monospaced et n\'est pas affecté par les autres balises.',
'Code text'				=>	'Ceci est un example de code.',
'produces code box'		=>	'produit du code comme ceci :',

'Lists'					=>	'Listes',
'List info'				=>	'Pour créer une liste vous pouvez utiliser la balise list. Vous pouvez créer 2 types de listes avec la même balise.',
'List text 1'			=>	'Exemple de liste à item n°1.',
'List text 2'			=>	'Exemple de liste à item n°2.',
'List text 3'			=>	'Exemple de liste à item n°3.',
'produces list'			=>	'produit une liste à puces.',
'produces decimal list'	=>	'produit une liste ordonnée.',

'Bold'					=>	'Gras',
'Underline'				=>	'Souligné',
'Italic'				=>	'Italique',
'Strike'				=>	'Barré',
'URL'					=>	'Lien',
'List'					=>	'Liste',
'List item'				=>	'Liste à items',
'Heading'				=>	'En tête',
'Inline code'			=>	'Code en ligne',
'Superscript'			=>	'Indice',
'Subscript'				=>	'Exposant',
'Video'					=>	'Vidéo',
'Image'					=>	'Image',

'Smilies info'			=>	'Si activé, le forum peut convertir une série de smileys en représentations graphiques. Les différents smileys que vous pouvez utiliser sont :',

'General use'					=>	'Utilisation générale',
'General use info'				=>	'Explications du fonctionnement basique du forum',
'Forums and topics'				=>	'Forums et sujets',
'Labels question'				=>	'Que signifient les labels devant les sujets ?',
'Labels info'					=>	'Vous verrez que certains sujets sont labellisés, les différents labels ont des significations différentes.',
'Label'							=>	'Label',
'Explanation'					=>	'Signification',
'Sticky explanation'			=>	'Les Post-it sont des sujets souvents importants que vous devez lire.',
'Closed explanation'			=>	'Quand vous vouez un label "Fermé" cela signifie que vous ne pouvez plus poster de messages à l\'intérieur sauf si vous disposez des permissions nécessaires. Cependant, la lecture reste disponible.',
'Moved explanation'				=>	'Ce sujet a été déplacé depuis un autre forum. Les administrateurs et modérateurs peuvent choisir ou non d\'afficher cette notification. Le forum originel du sujet ne comptera plus les statistiques de ce sujet.',
'Star'							=>	'Etoile',
'Star explanation'				=>	'Vous suivez ce sujet, ils apparaîtront dans votre liste de souscription.',
'Posted explanation'			=>	'Ce label signifie que vous avez posté un message dans ce sujet',
'Content question'				=>	'Les smileys, signatures, avatars et images ne sont plus visibles ?',
'Content answer'				=>	'Vous pouvez modifier le comportement de la lecture d\'un sujet dans les paramètres de votre profil. Là, vous pouvez activer les smileys, les signatures, les avatars et les images dans les messages, mais ils sont par défaut activés, sauf si votre administrateur de forum a désactivé ces fonctions. Vous pouvez voir si les images et les smileys sont désactivées sous l\'éditeur. Si les étiquettes ont un fond rouge, ces fonctionnalités ne sont pas disponibles pour vous.',
'Topics question'				=>	'Pourquoi ne puis-je pas voir tous les sujets pour tous les forums ?',
'Topics answer'					=>	'Vous pourriez ne pas avoir les autorisations nécessaires pour les voir, demandez à l\'administrateur du forum pour plus d\'aide.',
'Profile question'				=>	'Pourquoi ne puis-je pas voir les profils d\'utilisateurs ?',
'Profile answer'				=>	'Vous pourriez ne pas avoir les autorisations nécessaires pour les voir, demandez à l\'administrateur du forum pour plus d\'aide.',
'Information question'			=>	'Mon profil ne contient pas autant que les autres ?',
'Information answer'			=>	'Votre profil n\'affiche que les champs remplis sur votre page de personnalité. Vous pouvez voir si vous avez manqué certains domaines.',
'Advanced search question'		=>	'Existe t-il d\'autres options pour rechercher ?',
'Advanced search answer'		=>	'When you go to the search page, you\'ll find yourself on a page with 1 search box. Below that search box there is a link to Advanced search, here you can find more search options! This feature may not be available on your device, if disabled by the forum admin.',
'More search question'			=>	'Why can\'t search in more then 1 forum at once?',
'More search answer'			=>	'You might not have the correct permissions to do so, ask the forums administrator for more help.',
'Moderating'					=>	'Moderating',
'Moderating info'				=>	'Admins and moderators need help sometimes, too! The basics of moderating are explained here.',
'Moderate forum question'		=>	'How do I moderate a forum?',
'Moderate forum answer'			=>	'The moderation options are available at the bottom of the page. Those features aren\'t available for all moderators. When you click this button, you will be send to a page where you can manage the current forum. From there, you can move, delete, merge, close and open multiple topics at once.',
'Moderate topic question'		=>	'How do I moderate a topic?',
'Moderate topic answer 1'		=>	'The moderation options are available at the bottom of the page. Those features aren\'t available for all moderators. When you click this button, you will be send to a page where you can manage the current topic. From there, you can select multiple post to delete or split from the current topic at once.',
'Moderate topic answer 2'		=>	'Next to the "Moderate topic" button, you can find options to move, open or close the topic. You can also make it a sticky topic from there, or unstick it.',
'Moderate user question'		=>	'How do I moderate an user?',
'Moderate user answer 1'		=>	'Moderating options are available in the users profile. You can find the moderation options under "Administration" in the users profile menu. Those features aren\'t available for all moderators.',
'Moderate user answer 2'		=>	'The Administration page allow you to check if the user has an admin note, and you can also change that note if required. You can also change the post count of the user. At this page, the user can also be given moderator permissions on a per-forum base, through the user must have a moderator account to be able to actually use those permissions.',
'Moderate user answer 3'		=>	'Finally, you can ban or delete a user from his profile. If you want to ban and/or delete multiple users at once, you\'re probably better off with the advanced user management features in the Backstage.',

//
// Language for index.php
//

'Topics'		=>	'Sujet',
'Link to'		=>	'Lien vers :', // As in "Link to: http://modernbb.be/"
'Empty board'	=>	'Le forum est vide.',
'Newest user'	=>	'Dernier utilisateur : %s',
'Users online'	=>	'Utilisateurs en ligne : %s',
'Guests online'	=>	'Visiteurs en lignes : %s',
'No of users'	=>	'Utilisateurs totaux : %s',
'No of topics'	=>	'Sujets totaux : %s',
'No of post'	=>	'Messages totaux : %s',
'Online'		=>	'En ligne :', // As in "Online: User A, User B etc."
'Board stats'	=>	'Statistiques du forum',
//
// Language for login.php
//

'Wrong user/pass'			=>	'Mauvais pseudonyme ou/et mot de passe.',
'Forgotten pass'			=>	'Mot de passe oublié',
'No email match'			=>	'Aucun utilisateur existe avec cette adresse e-mail',
'Request pass'				=>	'Demande de mot de passe',
'Remember me'				=>	'Se souvenir de moi',
'New password errors'		=>	'Erreur lors de la requête de mot de passe',
'New passworderrors info'	=>	'L\'erreur suivante doit être corrigée avant qu\'un nouveau mot de passe soit envoyé :',

'Forget mail'				=>	'Un e-mail a été envoyé contenant les indications pour changer votre mot de passe. Si vous ne le recevez pas, contacter un administrateur à',
'Password request flood'	=>  'Ce compte à déjà reçu une requête de changement de mot de passe l\'heure passée. Merci d\'attendre %s minutes avant de redemander un mot de passe.',

//
// Send email
//

'Form email disabled'			=>	'L\'utilisateur pour lequel vous souhaitez envoyer un e-mail a désactivé cette fonctionnalité',
'No email subject'				=>	'Vous devez entrer un sujet.',
'No email message'				=>	'Vous devez entrer un message.',
'Too long email message'		=>	'Le message ne peut dépasser les 65535 caractères (64 KB).',
'Email flood'					=>  'Il y a %s secondes que vous avez envoyé un e-mail. Merci d\'attendre %s secondes et recommencez.',
'Send email to'					=>	'Envoyer un e-mail à',

//
// Report
//

'No reason'						=>	'Vous devez renseigner une raison.',
'Reason too long'				=>	'Votre message ne doit pas dépasser les 65535 bits (~64kb).',
'Report flood'					=>  'Il ya %s secondes que vous avez envoyé un rapport. Merci d\'attendre %s secondes et recommencez.',
'Report post'					=>	'Reporter le message',
'Reason'						=>	'Raison',
'Reason desc'					=>	'Merci de renseigner une courte raison pour ce message',

//
// Subscriptions
//

'Not subscribed topic'			=>	'Vous n\'êtes abonné à ce sujet',

//
// General forum and topic moderation
//

'Moderate'						=>	'Modérer',
'Select'						=>	'Sélectionner', // the header of a column of checkboxes
'Move'							=>	'Déplacer',
'Split'							=>	'Diviser',
'Merge'							=>	'Fusionner',

//
// Moderate forum
//

'Open'							=>	'Ouvrir',
'Close'							=>	'Fermer',
'Move topics'					=>	'Déplacer les sujets',
'Move to'						=>	'Déplacer vers',
'Nowhere to move'				=>	'Il n\'y a aucun forum ou vous pouvez déplacer ce sujet.',
'Leave redirect'				=>	'Laisser une redirection vers ce(s) sujet(s) ?',
'Delete topics'					=>	'Supprimer les sujets',
'Delete topics comply'			=>	'Êtes vous sûr de vouloir supprimer les sujets sélectionnés ?',
'No topics selected'			=>	'Vous devez sélectionner au moins 1 sujet avant de l\'ouvrir/fermer/supprimer/déplacer/fusionner.',
'Not enough topics selected'	=>	'Vous devez sélectionner au moins 2 sujets pour les fusionner.',
'Merge topics'					=>	'Fusionner les sujets',
'New subject'					=>	'Nouveau sujet',

//
// Split multiple posts in topic
//

'Split posts'					=>	'Diviser les messages',

//
// Delete multiple posts in topic
//

'Delete posts'					=>	'Supprimer les messages',
'Cannot select first'			=>	'Le premier message ne peut être sélectionné pour être divisé/supprimé.',
'Delete posts comply'			=>	'Êtes vous sûr de vouloir supprimer les messages sélectionnés ?',
'No posts selected'				=>	'Vous devez sélectionner au moins un post pour le diviser/supprimer.',

//
// Get host
//

'Host info 1'					=>	'L\'adresse IP est : %s',
'Host info 2'					=>	'Le nom d\'hôte est : %s',
'Show more users'				=>	'Voir plus d\'utilisateurs pour cette IP',

//
// Language for post.php and edit.php
// Post validation stuff (many are similiar to those in edit.php)
//

'No subject'		=>	'Le sujet doit contenir un titre.',
'No subject after censoring'	=>	'Le sujet doit contenir un titre. Après le filtrage de censure le titre sera vide.',
'Too long subject'	=>	'Les titres ne peuvent pas dépasser 70 caractères.',
'No message'		=>	'Vous devez entrer un message.',
'No message after censoring'	=>	'Vous devez entrer un message. Après le filtrage de censure, le message sera vide.',
'Too long message'	=>	'Les messages ne peuvent pas être aussi longs que %s bits.',
'All caps subject'	=>	'Les titres ne peuvent pas contenir que des majuscules.',
'All caps message'	=>	'Les messages ne peuvent pas contenir que des majuscules.',
'Empty after strip'	=>	'It seems your post consisted of empty BBCodes only. It is possible that this happened because e.g. the innermost quote was discarded because of the maximum quote depth level.',

//
// Posting
//

'Post errors'		=>	'Erreurs lors du post',
'Post preview'		=>	'Prévisualisation du message',
'Guest name'		=>	'Visiteur', // For guests (instead of Username)
'Post a reply'		=>	'Poster une réponse',
'Post new topic'	=>	'Créer un sujet',
'Hide smilies'		=>	'Ne jamais afficher les smiles pour ce sujet',
'Subscribe topic'	=>	'S\'abonner à ce topic',
'Stay subscribed'	=>	'Restez abonné à ce sujet',
'Topic review'		=>	'Revue du sujet (Récents en premier)',
'Flood start'		=>  'Il y a %s secondes que vous avez envoyé un message. Merci d\'attendre %s secondes et recommencez.',
'Preview'			=>	'Prévisualiser',

//
// Edit post
//

'Silent edit'		=>	'Edition secrète (ne pas afficher "Edité par ..." dans l\'affichage du topic)',
'Edit post'			=>	'Editer le message',

//
// Language for both profile.php and register.php
//

'Email legend'				=>	'Entrez une adresse e-mail valide',
'Time zone'					=>	'Zone Temporelle',
'DST'						=>	'Advance time by 1 hour for daylight saving.',
'Time format'				=>	'Format du temps',
'Date format'				=>	'Format de la date',
'Default'					=>	'Défault',
'Language'					=>	'Langage',
'Email setting info'		=>	'Paramètres e-mails',
'Email setting 1'			=>	'Afficher votre addresse e-mail.',
'Email setting 2'			=>	'Ne pas afficher votre adresse e-mail mais autoriser l\'envoi de mails.',
'Email setting 3'			=>	'Ne pas afficher votre adresse e-mail et interdire l\'envoi de mails.',

'Username too short'		=>	'Usernames must be at least 2 characters long. Please choose another (longer) username.',
'Username too long'			=>	'Usernames must not be more than 25 characters long. Please choose another (shorter) username.',
'Username guest'			=>	'The username guest is reserved. Please choose another username.',
'Username IP'				=>	'Usernames may not be in the form of an IP address. Please choose another username.',
'Username reserved chars'	=>	'Usernames may not contain all the characters \', " and [ or ] at once. Please choose another username.',
'Username BBCode'			=>	'Usernames may not contain any of the text formatting tags (BBCode) that the forum uses. Please choose another username.',
'Banned username'			=>	'The username you entered is banned in this forum. Please choose another username.',
'Pass too short'			=>	'Passwords must be at least 6 characters long. Please choose another (longer) password.',
'Pass not match'			=>	'Passwords do not match.',
'Banned email'				=>	'The email address you entered is banned in this forum. Please choose another email address.',
'Dupe email'				=>	'Someone else is already registered with that email address. Please choose another email address.',
'Sig too long'				=>	'Signatures cannot be longer than %1$s characters. Please reduce your signature by %2$s characters.',
'Sig too many lines'		=>	'Signatures cannot have more than %s lines.',
'Bad ICQ'					=>	'You entered an invalid ICQ UIN. Please go back and correct.',

//
// Language for profile.php
//

'Section personality'			=>	'Personalité',
'Section admin'					=>	'Administration',

//
// Miscellaneous
//

'Personal details legend'		=>	'Détails du contact',
'User tools'					=>	'Outils d\'utilisateur',
'Unknown'          				=>  'Inconnu',

//
// Password stuff
//

'Pass key bad'					=>	'La clé d\'activation du mot de passe a expirée ou est incorrecte. Merci de re-demander un nouveau mot de passe. Si vous n\'y arrivez pas contactez un administateur à',
'Pass updated'					=>	'Votre mot de passe a été mis à jour. Vous pouvez vous connecter avec votre nouveau mot de passe.',
'Wrong pass'					=>	'Mauvais ancien mot de passe.',
'Change pass'					=>	'Changer votre mot de passe',
'Old pass'						=>	'Ancien mot de passe',
'New pass'						=>	'Nouveau mot de passe',
'Confirm new pass'				=>	'Confirmer le nouveau mot de passe',
'Pass info'						=>	'Les mots de passe doivent contenir au moins 6 caractères et respecter la casse',

//
// Email stuff
//

'Email key bad'					=>	'La clé d\'activation de l\'adresse e-mail a expirée ou est incorrecte. Merci de re-demander un changement d\'adresse e-mail. Si vous n\'y arrivez pas, contactez un administrateur à',
'Email updated'					=>	'Votre adresse e-mail a été mise à jour.',
'Activate email sent'			=>	'Un mail a été envoyé à l\'adresse e-mail spécifiée avec les instructions d\'activation. Si vous ne recevez pas ce mail vous pouvez contacter un administrateurà',
'Email instructions'			=>	'Un mail a été envoyé à votre nouvelle adresse contenant les instructions d\'activation. Vous devriez cliquer sur le lien dans le mail afin de valider votre nouvelle adresse e-mail.',
'Change email'					=>	'Changer l\'adresse e-mail',
'New email'						=>	'Nouveau mail',

//
// Avatar upload stuff
//

'Avatars disabled'				=>	'L\'administrateur à désactivé le support des avatars.',
'Too large ini'					=>	'Le fichier envoyé est trop lourd. Le serveur ne peut pas l\'uploader.',
'Partial upload'				=>	'Le fichier sélectionné a été partiellementenvoyé. Merci de réessayer.',
'No tmp directory'				=>	'PHP est incapable de sauvegarder le fichier dans un dossier temporaire.',
'No file'						=>	'Vous n\'avez pas sélectionné de fichier à uploader.',
'Bad type'						=>	'Le fichier que vous avez essayé d\'uploader est dans une extension non autorisée. Les extensions autorisées sont .gif, .jpeg et .png.',
'Too wide or high'				=>	'Le fichier que vous avez essayé d\'uploader est trop haut/large que',
'Too large'						=>	'Le fichier que vous avez essayé d\'uploader est trop lourd par rapport au maximum autorisé',
'pixels'						=>	'pixels',
'bytes'							=>	'bits',
'Move failed'					=>	'Le serveur n\'a pas réussi à sauvegarder le fichier envoyé. Merci de contacter un administrateur à',
'Unknown failure'				=>	'Une erreur inconnue est survenue. Merci de recommencer.',
'Avatar desc'					=>	'Un avatar est une petite image qui est affichée en dessous de votre pseudonyme dans vos messages. Cette image ne doit pas être aussi grande que',
'Upload avatar'					=>	'Uploader l\'avatar',
'Delete avatar'					=>	'Supprimer l\'avatar', // only for admins
'File'							=>	'Fichier',
'Upload'						=>	'Uploader', // submit button

//
// Form validation stuff
//

'Forbidden title'				=>	'Le titre que vous avez entré contient des mots interdits. Vous devez choisir un titre différent.',

//
// Profile display stuff
//

'Email info'					=>	'Email : %s',
'Last visit info'				=>	'Dernière visite ',
'Show posts'					=>	'Voir ses messages ',
'Show topics'					=>	'Voir ses sujets ',
'Show subscriptions'			=>	'Voir ses abonnements ',
'Contact'						=>	'Contacts',
'Realname'						=>	'Nom réel ',
'Location'						=>	'Lieu ',
'Website'						=>	'Site Web',
'Invalid website URL'			=>	'The website URL you entered is invalid.',
'Microsoft'						=>	'Compte Microsoft ',
'Facebook'						=>	'Facebook ',
'Twitter'						=>	'Twitter ',
'Google+'						=>	'Google+ ',
'Avatar'						=>	'Avatar ',
'Sig max size'					=>	'Caractères max : %s caractères / Lignes max : %s',
'Avatar info'					=>	'Un avatar est une petite image qui est affichée en dessous de votre pseudonyme dans vos messages. Vous pouvez uploader un avatar en cliquant sur le lien ci-dessous.',
'Change avatar'					=>	'Changer l\'avatar',
'Signature info'				=>	'Une signature est un texte qui sera affiché à vos messages. Dedans, vous pouvez parler de tout ce que vous voulez.',
'Sig preview'					=>	'Prévisualisation de la signature actuelle :',
'No sig'						=>	'Aucune signature actuellement.',
'Signature quote/code/list/h'	=>	'Les balises, quote, code, list et heading sont interdites dans les signatures.',
'Posts per page'				=>	'Messages ',
'Leave blank'					=>	'Laissez vide pour défaut',
'Notify full'					=>	'Inclure une partie de chaque nouveau post dans les notifications mails.',
'Auto notify full'				=>	'S\'abonner automatiquement à chaque sujet dans lequel vous postez un message.',
'Show smilies'					=>	'Afficher les smileys comme images.',
'Show images'					=>	'Afficher les images dans les messages.',
'Show images sigs'				=>	'Afficher les images dans les signatures des utilisateurs.',
'Show avatars'					=>	'Afficher les avatars des utilisateurs dans les messages.',
'Show sigs'						=>	'Afficher les signatures des utilisateurs.',
'Style'							=>	'Thème',
'Backstage Accent'				=>	'Style de couleur pour la partie administration',
'Admin note'					=>	'Note administrative',
'Post display'					=>	'Affichage des messages',

//
// Administration stuff
//

'Group membership legend'		=>	'Choisir un groupe d\'utilisateur',
'Save'							=>	'Sauvegarder',
'Set mods legend'				=>	'Mettre un accès modérateur',
'Moderator in info'				=>	'Choisissez les forums pour lesquels cet utilisateur aura les droits de modération. Information : Cela s\'applique uniquement aux modérateurs. Les administrateurs ont toutes les permissions dans chaque forum.',
'Update forums'					=>	'Mettre à jour les forums',
'Delete ban legend'				=>	'Supprimer ou bannir un utilisateur',
'Delete user'					=>	'Supprimer l\'utilisateur',
'Ban user'						=>	'Bannir l\'utilisateur',
'Confirm delete user'			=>	'Confirmer la suppression de l\'utilisateur',
'Confirmation info'				=>	'Merci de confirmer que vous souhaitez supprimer l\'utilisateur', // the username will be appended to this string
'Delete warning'				=>	'Attention ! Les messages/sujets supprimés de l\'utilisateur ne pourront pas être restaurés. Si vous choisissez de ne pas supprimer les messages crées par cet utilisateur, ils ne pourront être supprimés que manuellement plus tard.',
'Delete all posts'				=>	'Supprimer tous les messages et sujets crées par cet utilisateur',
'No delete admin message'		=>	'Les administrateurs ne peuvent être supprimés. Pour pouvoir supprimer cet utilisateur vous devez tout d\'abord changer le groupe de celui-ci.',

//
// Language for register.php
//

'No new regs'				=>	'Le forum n\'accepte pas de nouvelles inscriptions.',
'Forum rules'				=>	'Règles du forum',
'Rules legend'				=>	'Vous devez accepter ce qui suit afin de vous inscrire',
'Registration flood'		=>	'A new user was registered with the same IP address as you within the last hour. To prevent registration flooding, at least an hour has to pass between registrations from the same IP. Sorry for the inconvenience.',
'Agree'						=>	'Accepter',
'Cancel'					=>	'Annuler',
'Register legend'			=>	'Entrez les données demandées',

//
// Form validation stuff (some of these are also used in post.php)
//

'Registration errors'		=>	'Erreur lors de l\'inscription',
'Username censor'			=>	'Le pseudonyme que vous avez entré contient un ou plusieurs mots interdits. Merci de choisir un pseudonyme différent.',
'Username dupe 1'			=>	'Ce pseudonyme est déjà utilisé par quelqu\'un',
'Username dupe 2'			=>	'Le pseudonyme que vous avez entré est trop similaire. Le pseudonyme doit être différent d\'au moins un caractère alphanumérique (a-z ou 0-9). Merci de choisir un pseudonyme différent.',
'Email not match'			=>	'Les adresses e-mail ne correspondent pas.',

//
// Registration email stuff
//

'Reg email'					=>	'Merci pour votre inscription. Votre mot de passe a été envoyé à l\'adresse e-mail spécifiée. Si vous ne recevez pas ce mail contactez un administrateur à',

//
// Register info
//

'Username legend'			=>	'Entrez un pseudonyme entre 2 et 25 caractères de long',
'Email help info'			=>	'Votre mot de passe sera envoyé à cette adresse e-mail, vérifiez sa validité',
'If human'					=>	'Si vous êtes humains, laissez ce champ vide !',
'Spam catch'				=>	'Malheureusement, il semble que votre demande soit un spam. Si vous pensez qu\'il s\'agisse d\'une erreur, contactez un administrateur à',

//
// Language for search.php
//

'User search'						=>	'Recherche d\'utilisateur',
'No search permission'				=>	'Vous ne disposez pas des permissions nécessaires pour utiliser la fonction de recherche.',
'Search flood'						=>  'At least %s seconds have to pass between searches. Please wait %s seconds and try searching again.',
'Search criteria legend'			=>	'Entrez vos critères de recherche',
'Search info'						=>	'To search by keyword, enter a term or terms to search for. Separate terms with spaces. Use AND, OR and NOT to refine your search. To search by author enter the username of the author whose posts you wish to search for. Use wildcard character * for partial matches.',
'Keyword search'					=>	'Recherche par mots clés',
'Author search'						=>	'Recherche par auteur',
'All forums'						=>	'Tous les forums',
'Search in'							=>	'Rechercher dans',
'Message and subject'				=>	'Titre de sujet & contenu de message',
'Message only'						=>	'Contenu de message seulement',
'Topic only'						=>	'Titre de sujet seulement',
'Sort by'							=>	'Trier par',
'Sort order'						=>	'Ordre de tri',
'Search results info'				=>	'Vous pouvez choisir comment vous souhaitez classer et afficher les résultats.',
'Sort by post time'					=>	'Heure du message',
'Sort by author'					=>	'Auteur',
'Ascending'							=>	'Croissant',
'Descending'						=>	'Décroissant',
'Show as'							=>	'Voir aussi',
'Show as posts'						=>	'Messages',
'Advanced search'					=>	'Recherche avancée',

//
// Results
//

'Search results'					=>	'Résultats de la recherche',
'Quick search show_new'				=>	'Nouveau',
'Quick search show_recent'			=>	'Actif',
'Quick search show_unanswered'		=>	'Non-répondu',
'Quick search show_user_topics'		=>	'Sujets crées par %s',
'Quick search show_user_posts'		=>	'Messages crées par %s',
'Quick search show_subscriptions'	=>	'Souscrit par %s',
'By keywords show as topics'		=>	'Sujets avec messages contenants \'%s\'',
'By keywords show as posts'			=>	'Messages contenants \'%s\'',
'By user show as topics'			=>	'Sujets avec messages crées par %s',
'By user show as posts'				=>	'Messages crées par %s',
'By both show as topics'			=>	'Sujets avec messages contenants \'%s\', crées par %s',
'By both show as posts'				=>	'Messages contenants \'%s\', crées par %s',
'No terms'							=>	'Vous devez entrer au moins un mot-clé (de plus de 2 caractères) et/ou un auteur pour la recherche.',
'No hits'							=>	'Votre recherche n\'a rien donné.',
'No user posts'						=>	'Il n\'y a pas de messages de cet utilisateur dans ce forum.',
'No user topics'					=>	'Il n\'y a pas de sujets de cet utilisateur dans ce forum.',
'No subscriptions'					=>	'Cet utilisateur n\'est actuellement pas abonné à tous les sujets.',
'No new posts'						=>	'Il n\'y a aucun sujet avec de nouveaux messages depuis votre dernière visite.',
'No recent posts'					=>	'Pas de nouveaux messages ont été faits dans les dernières 24 heures.',
'No unanswered'						=>	'Il n\'y a pas de messages sans réponse dans ce forum.',
'Go to post'						=>	'Aller au message',
'Go to topic'						=>	'Aller au sujet',

//
// Language for viewtopic.php
//

'Post reply'		=>	'Répondre',
'Topic closed'		=>	'Sujet fermé',
'From'				=>	'Lieu :', // User location
'IP address logged'	=>	'Log d\'IP :',
'Note'				=>	'Note administrative :', // Admin note
'Posts'				=>	'Messages :',
'Replies'			=>	'Réponses:',
'Last edit'			=>	'Dernière édition par',
'Report'			=>	'Rapporter',
'Edit'				=>	'Editer',
'Quote'				=>	'Citer',
'Is subscribed'		=>	'You are subscribed',
'Unsubscribe'		=>	'Se désabonner',
'Subscribe'			=>	'S\'abonner',
'Quick post'		=>	'Réponse rapide',
'New icon'			=>	'Nouveau message',
'Re'				=>	'Re:',

//
// Language for userlist.php
//

'User search info'	=>	'Entrez un nom d\'utilisateur pour rechercher et/ou un groupe d\'utilisateur pour le filtrage. Utilisez le joker * pour des recherches partielles.',
'User group'		=>	'Groupe d\'utilisateur',
'No of posts'		=>	'Nombre de messages',
'All users'			=>	'Tous les utilisateurs',

//
// Language for viewforum.php
//

'Views'			=>	'Vues',
'Moved'			=>	'Déplacé',
'Star'			=>	'Etoile',
'Sticky'		=>	'Post-it',
'Closed'		=>	'Fermé',
'Empty forum'	=>	'Le forum est vide.',

//
// Language for Backstage
// Language for backstage.php
//

'Update settings head'		=>	'Mettre à jour les paramètres',
'Index update check'		=>	'Vérifiez les mises à jour à chaque fois que vous visitez l\'administration, si cette option est désactivée, vous ne verrez les notifications de mises à jour.',

//
// Language for bans.php
//

'No user message'			=>	'Aucun utilisateur avec ce pseudonyme est inscrit. Si vous souhaitez ajouter un bannissement sans en spécifier le pseudonyme laisssez le champ vide.',
'No user ID message'		=>	'Aucun utilisateur existe avec cet ID.',
'User is admin message'		=>	'L\'utilisateur %s est un administrateur et ne peut être banni. Pour pouvoir bannir cet utilisateur vous devez tout d\'abord changer le groupe de celui-ci.',
'User is mod message'		=>	'L\'utilisateur %s est un modérateur et ne peut être banni. Pour pouvoir bannir cet utilisateur vous devez tout d\'abord changer le groupe de celui-ci.',
'Must enter message'		=>	'You must enter either a username, an IP address or an email address (at least).',
'Cannot ban guest message'	=>	'L\'utilisateur invité ne peut être banni.',
'Invalid IP message'		=>	'Vous avez entré une IP/intervalle-d\'ip invalide.',
'Invalid e-mail message'	=>	'L\'adresse e-mail (par exemple utilisateur@domaine.fr) ou l\'adresse e-mail partielle de domaine (par exemple domaine.fr) que vous avez entré n\'est pas valide.',
'Invalid date message'		=>	'Vous avez entré une date d\'expiration invalide.',
'Invalid date reasons'		=>	'Le format doit être AAAA-MM-JJ et la date doit être au moins J+1 de la date actuelle.',

'New ban head'				=>	'Ajouter un bannissement',
'Username help'				=>	'Le pseudonyme à bannir',
'Username advanced help'	=>	'Le pseudonyme que vous souhaitez bannir. Si vous souhaitez bannir une IP/intervalle-d\'ip ou une adresse e-mail, laissez vide.',

'Ban search head'			=>	'Recherche de bannissements',
'Ban search info'			=>	'Rechercher des bannissements dans la base de données. Vous pouvez entrer un ou plusieurs termes à rechercher. Les caractères génériques sous la forme d\'astérisques (*) sont acceptés. Pour afficher tous les bannissements laissez tous les champs vides..',
'Date help'					=>	'(yyyy-mm-dd)',
'Expire after label'		=>	'Expire après',
'Expire before label'		=>	'Expire avant',
'Order by label'			=>	'Trier par',
'Order by ip'				=>	'IP',
'Order by expire'			=>	'Date d\'expiration',
'Submit search'				=>	'Rechercher',

'E-mail help'				=>	'Le domaine de messagerie ou e-mail que vous souhaitez interdire',
'IP label'					=>	'Adresse IP ou intervalle d\'IP',
'IP format'                 =>  '(XX.XX.XX.XX)', //Ajout pour une meilleure compréhension (Added for a better understanding) => bans.php Line number 124 and 483, placeholder.
'IP help'					=>	'L\'adresse IP que vous souhaitez bannir, séparer chaque adresse par des espaces',
'IP help link'				=>	'Cliquez %s pour voir les statistiques IP de cet utilisateur.',
'Ban advanced head'			=>	'Bannissement avancé',
'Ban advanced subhead'		=>	'Bannissement avec addresse IP et e-mail',
'Ban message label'			=>	'Message de bannissement',
'Ban message help'			=>	'Message affiché à l\'utilisateur banni',
'Message expiry subhead'	=>	'Message de bannissement et expiration',
'Expire date label'			=>	'Date d\'expiration',
'Expire date help'			=>	'Quand le ban doit expirer, laissez vide pour une expiration manuelle',

'Results head'				=>	'Résultats de recherche',
'Results IP address head'	=>	'Adresses IP/intervalles-d\'ip',
'Results expire head'		=>	'Expiration',
'Results banned by head'	=>	'Banni par',
'No match'					=>	'Aucun résultat',

//
// Language for board.php
//

'Must enter name message'		=>	'Vous devez entrer un nom de forum',
'Confirm delete cat head'		=>	'Confirmer la suppression de cette catégorie ?',
'Confirm delete cat info'		=>	'Êtes vous sûr de vouloir supprimer la catégorie <strong>%s</strong> ?',
'Delete category warn'			=>	'La suppression de cette catégorie entraînera la suppression de tous les sujets/messages s\'il y en a',
'Must enter integer message'	=>	'La position doit être un nombre positif et entier.',
'Add categories head'			=>	'Ajouter des catégories',
'Delete categories head'		=>	'Supprimer des catégories',
'Edit categories head'			=>	'Editer des catégories',
'Category position label'		=>	'Positionnement',
'Category name label'			=>	'Nom de la catégorie', //Utilisé pour changer le placeholder sur board.php (User for change placeholder on board.php) => board.php Line number 520 placeholder.

//
// Language fox censoring.php
//

'Must enter word message'	=>	'Vous devez entrer un mot à censurer.',
'Add word subhead'			=>	'Ajouter un mot',
'Add word info'				=>	'Entrez un mot que vous souhaitez censurer et le texte de remplacement pour ce mot. Les caractères génériques sont acceptés. Les mots de censure affectent également les noms d\'utilisateur. Les nouveaux utilisateurs ne seront pas en mesure de s\'inscrire avec les noms d\'utilisateur contenant des mots censurés. La recherche est insensible à la casse.',
'Censoring enabled'			=>	'<strong>La censure est activé dans les %s.</strong>',
'Censoring disabled'		=>	'<strong>La censure est désactivée dans les %s.</strong>',
'Censored word label'		=>	'Mot censuré',
'Replacement label'			=>	'Mot(s) de remplacement',
'Edit remove words'			=>	'Editer ou supprimer un mot',
'No words in list'			=>	'Aucun mot de censure disponible.',

//
// Language fox database.php
//

'Backup options'		=>	'Options de sauvegarde',
'Backup type'			=>	'Type de sauvegarde',
'Full'					=>	'Complet',
'Structure only'		=>	'Structure seulement',
'Data only'				=>	'Données seulement',
'Gzip compression'		=>	'Compression GZip',
'Start backup'			=>	'Commencer la sauvegarde',

'Backup info 1'			=>	'Si votre serveur le permet vous pouvez utiliser la compression gzip ce qui réduit considérablement la taille du fichier de sauvegarde.',

'Restore complete'		=>	'Restauration terminée',
'Restore options'		=>	'Options de restauration',
'Start restore'			=>	'Commencer la restauration',

'Restore info 1'		=>	'Ceci effectuera une restauration complète de toutes les tables ModernBB à partir d\'un fichier sauvegardé. Si votre serveur prend en charge, vous pouvez télécharger un fichier texte gzip et il sera automatiquement décompressé. Celle-ci écrase toutes les données existantes. La restauration peut prendre un certain temps, donc merci de rester sur cette page jusqu\'a la fin de la restauration.',

'Warning'				=>	'Attention : éléments critiques',

'Additional functions'	=>	'Fonctions additionnelles',
'Repair all tables'		=>	'Réparer toutes les tables',
'Optimise all tables'	=>	'Optimiser toutes les tables',

'Additional info 1'		=>	'Les fonctions additionnelles servent à gerer la base de données. Vous pouvez soit l\'otpimiser ou la réparer',

//
// Language for appearance.php, settings.php, email.php and features.php
//

'Bad HTTP Referer message'			=>	'Mauvais HTTP_REFERER. Si vous avez déplacé ces forums d\'un endroit à un autre ou que vous avez changé de domaine, vous devez mettre à jour l\'URL de base manuellement dans la base de données (cherchez o_base_url dans le tableau de configuration), puis effacez le cache en supprimant tous les fichiers php dans le répertoire /cache.',
'Must enter title message'			=>	'Vous devez entrer un titre.',
'SMTP passwords did not match'		=>	'Vous devez saisir le mot de passe SMTP 2 fois.',
'Enter announcement here'			=>	'Entrez votre annonce ici.',
'Enter rules here'					=>	'Entrez vos règles ici.',
'Default maintenance message'		=>	'Le forum est actuellement indisponible pour cause de maintenance. Merci de repasser dans quelques instants.',
'Timeout error message'				=>	'La valeur de délai d\'attente doit être inférieure à la valeur de délai de visite.',

//
// Language for appearance.php
//

'Header appearance'					=>	'Apparence de l\'entête',
'Footer appearance'					=>	'Apparence du pied de page',
'Footer'							=>	'Pied de page',
'Display head'						=>	'Paramètres d\'affichage',
'Default style help'				=>	'Le style par défaut sera affiché pour chaque nouvel utilisateur ou visiteur. Les utilisateurs peuvent changer le style qu\'ils utilisent, le changement de style par défaut ici ne changera pas le style pour les utilisateurs existants. Vous pouvez également forcer le changement d\'un style, pour tous les utilisateurs sauf les visiteurs.',
'About style'						=>	'A propos du thème : %s',
'version'							=>	'version %s',
'Released on'						=>	'Publié le %s',
'Designed for'						=>	'Designé pour ModernBB %s à %s',
'Force style'						=>	'Forcer le changement de style',
'Set as default'					=>	'Mettre par défaut',
'About'								=>	'A propos',
'Version number help'				=>	'Afficher le numéro de version de ModernBB dans le pied de page.',
'Info in posts help'				=>	'Afficher les informations du posteur en dessous de son pseudo sur l\'affichage des sujets.',
'Post count help'					=>	'Afficher le nombre de messages qu\'un utilisateur a fait dans les sujets, le profil et dans la liste des utilisateurs.',
'Smilies help'						=>	'Convertir les smileys en petites images dans les messages.',
'Smilies sigs help'					=>	'Convertir les smileys en petites images dans les signatures.',
'Clickable links help'				=>	'Convertir automatiquement les URL en hyperliens cliquables.',
'Topic review label'				=>	'Revue du sujet',
'Topic review help'					=>	'Le nombre maximum de messages affichés lorsque vous créez un message',
'Topics per page help'				=>	'Nombre par défaut de sujets par pages',
'Posts per page label'				=>	'Messages par pages',
'Posts per page help'				=>	'Nombre par défaut de messages par pages',
'Indent label'						=>	'Taille du retrait',
'Index panels head'					=>	'Paramètres de l\'index',
'Moderated by help'                 =>  'Afficher "Modéré par" dans la liste des forums.',
'Index statistics help'				=>	'Afficher les statistiques sur l\'accueil.',
'Indent help'						=>	'Nombre d\'espaces que réprésente un alinéa',
'Quote depth label'					=>	'Profondeur maximum de la balise [quote]',
'Quote depth help'					=>	'Nombre maximum de balise [quote] que l\'on peut utiliser dans une balise [quote]',
'Video height'                      =>  'Hauteur de vidéo',
'Video height help'                 =>  'Hauteur d\'une vidéo incluse',
'Video width'                       =>  'Largeur de vidéo',
'Video width help'                  =>  'Largeur d\'une vidéo incluse',
'Menu items head'					=>	'Onglets de menus additionnels',
'Menu items help'					=>	'Cette option vous permet d\'ajouter plus d\'onglets de menus dans la barre de navigation sur chaque page. Le format pour ajouter des liens est <code>X = &lt;a href="URL"&gt;LIEN&lt;/a&gt;</code> ou X représente la position du lien. Séparez chaque nouveau lien par un retour à la ligne.',
'Default menu'						=>	'Éléments de menu par défaut',
'Menu show index'					=>	'Afficher le lien pour revenir à l\'accueil',
'Menu show user list'				=>	'Afficher le lien de la liste d\'utilisateurs.',
'Menu show search'					=>	'Afficher le lien de la recherche.',
'Menu show rules'					=>	'Afficher le lien des règles.',
'User profile head'					=>	'Profil utilisateur',
'Title settings head'				=>	'Paramètres de titre',
'Title in menu'						=>	'Afficher le titre du fourm dans le menu.',
'Title in header'					=>	'Afficher le titre du forum dans l\'entête.',
'Description in header'				=>	'Afficher la description du forum dans l\'entête.',
'Description settings head'			=>	'Paramètres de description',

//
// Language for email.php
//

'Contact head'						=>	'Paramètres de contact',
'Admin e-mail label'				=>	'E-mail Administrateur',
'Admin e-mail help'					=>	'L\'e-mail des administrateurs',
'Webmaster e-mail label'			=>	'E-mail du Webmaster',
'Webmaster e-mail help'				=>	'L\'adresse e-mail utilisée pour envoyer les mails',
'Subscriptions head'				=>	'Abonnements',
'Forum subscriptions help'			=>	'Autoriser les utilisateurs à s\'abonner aux forums.',
'Topic subscriptions help'			=>	'Autoriser les utilisateurs à s\'abonner aux sujets.',
'SMTP head'							=>	'Paramètres SMTP',
'SMTP address label'				=>	'Adresse du serveur SMTP',
'SMTP address help'					=>	'L\'adresse du serveur SMTP pour envoyer les mails.',
'SMTP username label'				=>	'Utilisateur SMTP',
'SMTP username help'				=>	'Utilisateur pour le serveur SMTP, seulement si requis',
'SMTP password label'				=>	'Mot de passe SMTP',
'SMTP change password help'			=>	'Cochez cette case si vous souhaitez changer ou supprimer le mot de passe actuellement stocké.',
'SMTP password help'				=>	'Mot de passe et confirmation pour le serveur SMTP, seulement si requis',
'SMTP SSL help'						=>	'Encrypter la connexion au serveur SMTP en utilisant SSL, seulement si requis et supporté.',

//
// Language for features.php
//

'Features head'						=>	'Paramètres des fonctions',
'General'							=>	'Général',
'Topics and posts'					=>	'Sujets et messages',
'User features'						=>	'Fonctions utilisateur',
'Search'							=>	'Rechercher',
'Advanced'							=>	'Avancé',
'Quick post help'					=>	'Afficher la réponse rapide sur les sujets.',
'Responsive post help'              =>  'Afficher le bouton "Poster" et "Prévisualiser" sur les petits écrans, si désactivé cela permet aux petits écrans de poster des réponses.',
'Users online help'					=>	'Afficher les informations sur les utilisateurs actuellement connectés sur la page d\'accueil.',
'Censor words help'					=>	'Censurer les mots dans les messages. Voir %s pour plus d\'informations.',
'Signatures help'					=>	'Autoriser les utilisateurs à afficher leurs signatures dans leurs messages.',
'User ranks help'					=>	'Utiliser les rangs d\'utilisateurs. Voir %s pour plus d\'informations.',
'Topic views help'					=>	'Afficher le nomre de vues de chaque sujet.',
'Has posted help'					=>	'Afficher un label devant les sujets quand un utilisateur a posté dedans.',
'GZip help'							=>	'Sortie Gzip envoyé au navigateur. Cela permettra de réduire la bande passante, mais utiliser un peu plus de CPU. Cette fonctionnalité nécessite que PHP soit configuré avec zlib. Si vous avez déjà l\'un des modules Apache (mod_gzip / mod_deflate) installé pour compresser les scripts PHP, désactivez cette fonction.',
'Enable advanced search'			=>	'Autoriser les utilisateurs à utiliser la recherche avancée.',
'Search all help'					=>	'Autoriser la recherche sur 1 seul forum à la fois.',

'First run'							=>	'Premier lancement',
'General settings'					=>	'Paramètres généraux',
'Show first run label'				=>	'Voir le premier panneau de l\'accueil lorsque l\'utilisateur se connecte pour la première fois.',
'Show guests label'					=>	'Voir le premier panneau de l\'accueil pour les utilisateurs avec le formulaire de connexion et bouton d\'inscription.',
'Welcome text'						=>	'Texte d\'accueil',
'First run help message'			=>	'L\'introduction du forum s\'affiche au milieu du premier panneau de l\'accueil',

//
// Language for forums.php
//

'Post must be integer message'	=>	'La position doit être un nombre positif et entier.',
'New forum'						=>	'Nouveau forum',

//
// Entry page
//

'Add forum'					=>	'Ajouter un forum',
'Update positions'			=>	'Mettre à jour le positionnement',
'Confirm delete head'		=>	'Confirmer la suppression du forum',
'Confirm delete forum info'	=>	'Êtes vous sûr de vouloir supprimer le forum <strong>%s</strong>?',
'Confirm delete forum'		=>	'Attention ! La suppression de ce forum entraînera la suppression de tous les messages s\'il y en a !',

//
// Detailed edit page
//

'Edit forum head'			=>	'Editer les forums',
'Edit details subhead'		=>	'Editer les détails d\'un forum',
'Forum name label'			=>	'Nom du forum', //Utilisé pour changer le placeholder sur board.php (User for change placeholder on board.php) => board.php Line number 497 placeholder.
'Forum description label'	=>	'Description',
'Category label'			=>	'Categorie',
'Sort by label'				=>	'Trier les sujets par',
'Topic start'				=>	'Date de début du sujet',
'User groups'				=>	'Groupes d\'utilisateurs',
'Redirect label'			=>	'URL de redirection',
'Group permissions subhead'	=>	'Editer les permissions des groups',
'Group permissions info'	=>	'Dans ce formulaire, vous pouvez définir des autorisations spécifiques pour les différents groupes d\'utilisateurs. Les administrateurs ont toujours toutes les autorisations. Les paramètres d\'autorisations qui diffèrent des autorisations par défaut pour le groupe d\'utilisateurs sont marqués en rouge. Certaines autorisations sont désactivées sous certaines conditions.',
'Read forum label'			=>	'Lire le forum',
'Post replies label'		=>	'Poster des réponses',
'Post topics label'			=>	'Poster des sujets',
'Revert to default'			=>	'Mettre par défaut',

//
// Language used in groups.php
//

'Title already exists message'	=>	'Il existe déjà un groupe avec le titre <strong>%s</strong>.',
'Cannot remove default message'	=>	'Le groupe par défaut ne peut être supprimé. Pour supprimer ce groupe vous devez tout d\'abord définir un autre groupe par défaut.',

'Add group subhead'				=>	'Ajouter un nouveau groupe',
'Create new group'				=>	'Choisir un groupe pour lequel le nouveau groupe héritera des permissions.',
'Default group subhead'			=>	'Définir comme groupe par défaut',
'Default group help'			=>	'Il s\'agit du groupe d\'utilisateur par défaut, par exemple les utilisateurs de ce groupe y sont placés automatiquement lors de leur inscription. Tous les groupes ne sont pas disponibles ici.',
'Existing groups head'			=>	'Groupes existants',
'Edit groups info'				=>	'Les groupes prédéfinis ne peuvent être supprimés. Cependant, ils peuvent être édités. Prenez note que pour certains groupes, certaines options sont indisponibles. Les administrateurs disposent de toutes les permissions.',
'Group delete head'				=>	'Suppression d\'un groupe',
'Confirm delete info'			=>	'Êtes vous sûr de vouloir supprimer le groupe <strong>%s</strong>?',
'Confirm delete warn'			=>	'<b>Attention :</b> Après la suppression d\'un groupe la restauration de celui-ci est impossible.',
'Delete group'					=>	'Supprimer le groupe',
'Move users info'				=>	'Le groupe <strong>%s</strong> compte actuellement <strong>%s</strong> membres. Merci de choisir un groupe vers lequel déplacer ces utilisateurs une fois la suppression terminée.',
'Move users label'				=>	'Déplacer les utilisateurs vers',

'Group settings head'			=>	'Paramètres du groupe',
'Group settings subhead'		=>	'Options de groupe et permissions',
'Group settings info'			=>	'Les options ci-dessous et les autorisations sont celles par défaut pour le groupe d\'utilisateurs. Ces options s\'appliquent si des autorisations spécifiques de forum ne sont pas définies.',
'Group title label'				=>	'Titre du groupe',
'User title label'				=>	'Titre de l\'utilisateur',
'User title help'				=>	'Le titre annulera le rang de l\'utilisateur',
'Mod privileges label'			=>	'Privilèges de modérateur',
'Mod privileges help'			=>	'Pour qu\'un utilisateur puisse avoir les capacités de modération, il doit être affecté à modérer un ou plusieurs forums. Cela se fait via la page d\'administration du profil de l\'utilisateur.',
'Edit profile label'			=>	'Editer les profils des utilisateurs',
'Edit profile help'				=>	'Si ce privilège de modération est activé, il autorise l\'édition des profils utilisateurs.',
'Rename users label'			=>	'Renommer les utilisateurs',
'Rename users help'				=>	'Si ce privilège de modération est activé, il autorise le renommage des utilisateurs.',
'Change passwords label'		=>	'Change passwords',
'Change passwords help'			=>	'Si ce privilège de modération est activé, il autorise le changement de mot de passe.',
'Ban users help'				=>	'Si ce privilège de modération est activé, il autorise le bannissement des utilisateurs.',
'Read board label'				=>	'Voir le forum',
'Read board help'				=>	'Si désactivé les utilisateurs ne pourront que se connecter et se déconnecter.',
'View user info label'			=>	'Voir les informations des utilisateurs',
'View user info help'			=>	'Autorise les utilisatuers de voir la liste des membres et leurs profils.',
'Post replies help'				=>	'Autorise les utilisateurs à poster des réponses dans les sujets.',
'Post topics help'				=>	'Autoriser les utilisateurs à créer de nouveaux sujets.',
'Edit posts label'				=>	'Editer les messages',
'Edit posts help'				=>	'Autorise les utilisateurs à éditer leurs propres messages.',
'Delete posts help'				=>	'Autorise les utilisateurs à supprimer leurs propres messages.',
'Delete topics help'			=>	'Autorise les utilisateurs à supprimer leurs propres sujets (incluant tous les messages du sujet).',
'Set own title label'			=>	'Mettre son propre titre d\'utilisateur',
'Set own title help'			=>	'Autorise les utilisateurs à changer leur titre d\'utilisateur.',
'User search label'				=>	'Utiliser la recherche',
'User search help'				=>	'Autorise les utilisateurs à utiliser la fonction de recherche.',
'User list search label'		=>	'Utiliser la recherche d\'utilisateurs',
'User list search help'			=>	'Autorise les utilisateurs de recherche d\'autres utilisateurs dans la liste des membres.',
'Send e-mails label'			=>	'Envoyer des mails',
'Send e-mails help'				=>	'Autorise les utilisateurs à envoyer des mails à d\'autres utilisateurs.',
'Post flood label'				=>	'Intervalle de flood entre les messages',
'Post flood help'				=>	'Temps d\'attente entre chaque message',
'Search flood label'			=>	'Intervalle de flood entre chaque recherche',
'Search flood help'				=>	'Temps d\'attente entre chaque recherche',
'E-mail flood label'			=>	'Intervalle de flood entre chaque mail',
'E-mail flood help'				=>	'Temps d\'attente entre chaque mail',
'Report flood label'			=>	'Intervalle de flood entre chaque rapport',
'Report flood help'				=>	'Temps d\'attente entre chaque rapport',
'Moderator info'				=>	'Pour qu\'un utilisateur puisse avoir les capacités de modération, il doit être affecté à modérer un ou plusieurs forums. Cela se fait via la page d\'administration du profil de l\'utilisateur.',
'seconds'						=>	'secondes',
'pixels'						=>	'pixels',

//
// Language used in index.php and update.php for Backstage
//

'ModernBB intro'					=>	'Bienvenue sur ModernBB',
'Backup head'						=>	'Sauvegarde',
'Backup info'						=>	'Créer une sauvegarde de la base de données.',
'Backup button'						=>	'Créer une nouvelle sauvegarde',
'New reports head'					=>	'Nouveaux rapports',
'Statistics head'					=>	'Statistiques',
'Updates'							=>	'Mises à jour',
'View all'							=>	'Tout voir',
'posts'								=>	'messages',
'replies'							=>	'réponses',
'reply'								=>	'répondre',
'topics'							=>	'sujets',
'views'								=>	'views',
'view'								=>	'vues',
'users'								=>	'utilisateurs',

'Not available'						=>	'Non disponible',
'NA'								=>	'N/A',
'About head'						=>	'A propos de ModernBB',
'ModernBB version label'			=>	'Version de ModernBB',
'ModernBB version data'				=>	'Version de ModernBB ',
'Server statistics label'			=>	'Statistiques du serveur',
'View server statistics'			=>	'Voir les statistiques du serveur',

'ModernBB software updates'			=>	'Mises à jour systèmes de ModernBB',
'ModernBB updates'					=>	'Mises à jour de ModernBB',
'Check for updates'					=>	'Vérifiez les mises à jour',
'New version'						=>	'Il est temps de mettre à jour, une nouvelle version est disponible',
'Latest version'					=>	'Merci d\'utiliser la dernière version de ModernBB',
'Development version'				=>	'Vous utlisez une version de développement',

'Reset head'						=>	'Fonctions de réinitialisation de ModernBB',
'Soft reset'						=>	'Réinitialisation du logiciel',
'Soft reset help'					=>	'The button below will remove the config.php file, this will cause the install to start so you can install ModernBB again. This will not drop the current database. This might be effective if your config.php file is corrupt. This can\'t be undone. Be sure you made a back-up before doing this.',
'Hard reset'						=>	'Réinitialisation complète',
'Reset config'						=>	'Réinitialiser le fichier config.php',
'Hard reset help'					=>	'The button below will remove the config.php file and database, this will cause the install to start so you can install ModernBB again. You will lose all your data. This can\'t be undone. Be sure you made a back-up before doing this.',
'Reset'								=>	'Réinitialisation',

//
// Reports
//

'Date and time'						=>	'Date et heure',
'No new reports'					=>	'Il n\'y a aucun nouveaux rapports.',

//
// Language for maintenance.php
//

'Rebuild index subhead'			=>	'Reconstruire l\'index de recherche',
'Rebuild index info'			=>	'Si vous changez quelque chose à propos des sujets et des messages dans la base de données, vous devez reconstruire l\'index de recherche. C\'est recommandé d\'activer %s lors de la reconstruction. Cela peut prendre un certain temps et peut augmenter la charge du serveur pendant le processus!',
'Posts per cycle label'			=>	'Messages par cycle',
'Posts per cycle help'			=>	'Nombre de messages par pages vues, ce qui empêche un délai d\'attente, 300 recommandé',
'Starting post label'			=>	'ID du premier message',
'Starting post help'			=>	'L\'ID par où commencer, par défaut le premier ID est trouvé dans la base de données',
'Empty index label'				=>	'Vider l\'index',
'Empty index help'				=>	'Sélectionnez cette option si vous voulez que l\'index de recherche soit vidé avant la reconstruction (voir ci-dessous).',
'Rebuild completed info'		=>	'Assurez vous d\'avoir JavaScript d\'activé pendant la reconstruction (pour recommecner un nouveau cycle automatiquement). Lorsque vous devez abandonner la reconstruction, rappelez-vous le dernier ID de message et entrez cet ID+1 dans "ID du premier message" si vous voulez continuer (Décochez la case "vider l\'index").',
'Rebuild index'					=>	'Reconstruire l\'index',
'Rebuilding search index'		=>	'Reconstruction de l\'index de recherche',
'Rebuilding index info'			=>	'Reconstruction de l\'index. Il serait peut-être bien de prendre un café :-)',
'Processing post'				=>	'Traitement du message <strong>%s</strong> …',
'Click here'					=>	'Cliquez ici',
'Javascript redirect failed'	=>	'Redirection JavaScript échouée. %s pour continuer …',
'Posts must be integer message'	=>	'Les messages par cycle doivent être un nombre entier positif.',
'Days must be integer message'	=>	'Le nombre de jours pour l\'auto-suppression doit être un nombre entier positif.',
'No old topics message'			=>	'Il n\'y a aucun sujets aussi vieux que %s jours. Merci de diminuer la valeur du champ "Jours d\'anciennetés" et recommencez.',
'Prune subhead'					=>	'Auto-suppression des messages',
'Days old label'				=>	'Jours d\'anciennetés',
'Days old help'					=>	'Le nombre de jours d\'anciennetés pour qu\'un sujet soit auto-supprimé',
'Prune sticky label'			=>	'Auto-suppression des annonces de messages',
'Prune from label'				=>	'Auto-suppression du forum',
'Prune from help'				=>	'Dans quel forum allons nous auto-supprimer ?',
'Prune info'					=>	'Il est recommendé d\'activer le %s durant l\'auto-suppression.',
'Confirm prune subhead'			=>	'Confirmer l\'auto-suppression des messages',
'Confirm prune info'			=>	'Êtes vous sur de vouloir auto-supprimer tous les sujets aussi vieux que %s jours du forum %s (%s sujets).',
'Confirm prune warn'			=>	'ATTENTION ! L\'auto-suppression supprimera les messages définitivement.',

'Prune users head'			=>	'Auto-suppression des utilisateurs',
'Prune by'					=>	'Auto-supprimer par',
'Registed date'				=>	'Date d\'enregistrement',
'Last login'				=>	'Dernière connexion',
'Prune by info'				=>	'Comment auto-supprimer ?',
'Minimum days'				=>	'Le minimum de jours entre l\'inscription et la dernière connexion',
'Minimum days info'			=>	'Le nombre minimum de jours entre l\'inscription et la dernière connexion',
'Maximum posts'				=>	'Nombre maximum de messages',
'Maximum posts info'		=>	'Combien de messages avez-vous besoin avant qu\'un utilisateur ne soit pas auto-supprimé',
'Delete admins'				=>	'Supprimer les administrateurs et modérateurs',
'User status'				=>	'Status de l\'utilisateur',
'Delete any'				=>	'Peu importe',
'Delete only verified'		=>	'Seulement les vérifiés',
'Delete only unverified'	=>	'Seulement les non-vérifiés',

//
// Language for settings.php
//

'Options head'						=>	'Paramètres généraux',

//
// Essentials section
//

'Essentials subhead'				=>	'Essentiels',
'Board desc help'					=>	'De quoi parle votre forum ?',
'Base URL label'					=>	'URL de votre forum',
'Base URL problem'					=>  'Votre installation ne supporte pas la conversion automatique des noms de domaine internationalisés. Comme votre base d\'URL contient des caractères spéciaux, vous <strong>devez</strong> utiliser un convertisseur en ligne.',
'Timezone label'					=>	'Fuseau horaire par défaut',
'DST help'							=>	'Avancer de 1 heure pour l\'heure d\'été.',
'Language help'						=>	'Le langage par défaut',

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
'UTC+01:00'							=>	'(UTC+01:00) Central European, West African, France',
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

'Timeouts subhead'					=>	'Temps et délais',
'PHP manual'						=>	'Manuel PHP',
'Time format help'					=>	'Maintenant : %s. Voir %s pour plus d\'informations',
'Date format help'					=>	'Maintenant : %s. Voir %s pour plus d\'informations',
'Visit timeout label'				=>	'Délai de visite',
'Visit timeout help'				=>	'Temps avant la fin d\'une visite',
'Online timeout label'				=>	'Délai de connexion',
'Online timeout help'				=>	'Temps avant que quelqu\'un ne soit plus en ligne',

//
// Feeds section
//

'Feed subhead'						=>	'Syndication',
'Default feed label'				=>	'Type de flux par défaut',
'Default feed help'					=>	'Sélectionner un flux',
'None'								=>	'Aucun',
'RSS'								=>	'RSS',
'Atom'								=>	'Atom',
'Feed TTL label'					=>	'Durée du cache du flux',
'Feed TTL help'						=>	'Réduire les sources en mettant en cache les flux',
'No cache'							=>	'Ne pas mettre en cache',
'Minutes'							=>	'%d minutes',

//
// Reports section
//

'Reporting method label'			=>	'Méthode de rapports',
'Internal'							=>	'Interne',
'Both'								=>	'Les deux',
'Reporting method help'				=>	'Comment devrions-nous traiter les rapports?',
'Mailing list label'				=>	'Liste des inscrits aux rapports par mail',
'Mailing list help'					=>	'Une virgule sépare la liste d\'abonnés qui reçoivent des mails lorsque de nouveaux rapports sont envoyés',

//
// Avatars section
//

'Avatars subhead'					=>	'Avatars',
'Use avatars label'					=>	'Utiliser les avatars',
'Use avatars help'					=>	'Autoriser les utilisateurs à uploader des avatars',
'Upload directory label'			=>	'Dossier d\'upload',
'Upload directory help'				=>	'Où les avatars seront stockés par rapport à la racine de ModernBB, le dossier doit être accessible en écriture',
'Max width label'					=>	'Largeur maximum',
'Max height label'					=>	'Hauteur maximum',
'Max size label'					=>	'Poids maximum',

//
// Registration Section
//

'Allow new label'					=>	'Autoriser les nouvelles inscriptions',
'Allow new help'					=>	'Autoriser les gens à s\'inscrire.',
'Verify label'						=>	'Vérifier les inscriptions',
'Verify help'						=>	'Envoyer un mot de passe aléatoire afin de valider l\'adresse e-mail.',
'Report new label'					=>	'Rapporter les nouvelles inscriptions',
'Report new help'					=>	'Notifier les membres de la liste d\'abonnés quand il y a une nouvelle inscription.',
'Use rules label'					=>	'Règles du forum de l\'utilisateur',
'Use rules help'					=>	'Oblige les utilisateurs à accepter les règles. Cela permettra aussi un lien "Règles" dans la barre de navigation.',
'Rules label'						=>	'Entrez vos règles de forum ici',
'Rules help'						=>	'Entrez les règles du forum ou des informations utiles, nécessaires lorsque l\'utilisation des règles sont activées',
'E-mail default label'				=>	'Réglage des mails par défaut',
'E-mail default help'				=>	'Réglage par défaut de la vie privée pour les nouveaux enregistrements',
'Display e-mail label'				=>	'Afficher l\'adresse e-mail aux autres utilisateurs',
'Hide allow form label'				=>	'Cacher l\'adresse e-mail mais autoriser l\'envoi de mails.',
'Hide both label'					=>	'Cacher l\'adresse e-mail et interdire l\'envoi de mails.',

//
// Announcement Section
//

'Announcements'						=>	'Annonces',
'Display announcement help'			=>	'Autoriser l\'affichage d\'annonces sur le forum.',

//
// Maintenance Section
//

'Maintenance mode help'				=>	'Activer le mode maintenance, le forum sera accessible seulement aux administrateurs. Ne pas vous déconnecter lorsque cette option est activée !',
'Maintenance message help'			=>	'Message affiché aux membres/visiteurs à propos de la maintenance',
'Cache'								=>	'Cache',
'Cache info'						=>	'Supprimez tous les fichiers de cache de sorte que la base de données renvoit les informations exactes',
'Clear cache'						=>	'Vider le cache',

//
// Language for permissions.php
//

'All caps'					=>	'Majuscules',
'Posting subhead'			=>	'Envoi de message',
'BBCode help'				=>	'Autoriser le BBCode dans les messages (recommandé).',
'Image tag help'			=>	'Autoriser la balise BBCode [img] dans les messages.',
'All caps message help'		=>	'Autoriser le fait qu\'un message puisse être écrit entièrement en majuscules.',
'All caps subject help'		=>	'Autoriser le fait qu\'un titre de sujet puisse être écrit entièrement en majuscules.',
'Require e-mail help'		=>	'Require guests to supply an email address when posting.',
'Signatures subhead'		=>	'Signatures',
'BBCode sigs help'			=>	'Autoriser le BBCode dans les signatures.',
'Image tag sigs help'		=>	'Autoriser la balise BBCode [img] dans les messages (non recommandé).',
'All caps sigs help'		=>	'Autoriser le fait qu\'une signature puisse être écrite entièrement en majuscules.',
'Max sig length label'		=>	'Longueur maximum des signatures',
'Max sig length help'		=>	'Nombre maximum de caractères que peut contenir une signature',
'Max sig lines label'		=>	'Lignes maximum des signatures',
'Max sig lines help'		=>	'Nombre maximum de lignes que peut contenir une signature',
'Banned e-mail help'		=>	'Autoriser les utilisateurs à utiliser une adresse e-mail interdite, la liste de diffusion sera avertie quand cela arrive.',
'Duplicate e-mail help'		=>	'Autoriser les utilisateurs à utiliser une adresse e-mail qui est déjà utilisé, la liste de diffusion sera avertie quand cela arrive.',

//
// Language for ranks.php
//

'Must be integer message'	=>	'Le nombre minimun de messages doit être un nombre entier positif.',
'Dupe min posts message'	=>	'Il y a déjà un rang avec le nombre minimal de messages à <strong>%s</strong>.',
'Add rank subhead'			=>	'Ajouter un rang',
'Ranks disabled'			=>	'<strong>Les rangs d\'utilisateurs sont désactivés dans %s.</strong>',
'Rank title label'			=>	'Titre du rang',
'Minimum posts label'		=>	'Messages au minimun',
'Edit remove subhead'		=>	'Editer/Supprimer un rang',
'No ranks in list'			=>	'Pas de rangs dans la liste',

//
// Language for reports.php
//

'Deleted user'				=>	'Utilisateur supprimé',
'Deleted'					=>	'Supprimé',
'Post ID'					=>	'Message #%s',
'Reported by'				=>	'Rapporté par',
'Actions'					=>	'Actions',
'Zap'						=>	'Marqué comme lu',
'Last 10 head'				=>	'Les 10 derniers rapports',
'Readed by'					=>	'Marqué comme lu par',
'No zapped reports'			=>	'Il n\'y a aucun rapports.',

//
// Language for statistics.php
//

'PHPinfo disabled message'			=>	'The PHP function phpinfo() has been disabled on this server.',
'Server statistics head'			=>	'Statistiques du serveur',
'Server load label'					=>	'Charge du serveur',
'Server load data'					=>	'%s - %s utilisateur(s) en ligne',
'Environment label'					=>	'Environnement',
'Environment data OS'				=>	'Système d\'exécution : %s',
'Show info'							=>	'Voir infos',
'Environment data version'			=>	'PHP: %s - %s',
'Environment data acc'				=>	'Accélerateur : %s',
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
'Database label'					=>	'Base de données',
'Database data rows'				=>	'Colonnes : %s',
'Database data size'				=>	'Taille : %s',

//
// Language for users.php
//

'Non numeric message'		=>	'Vous devez entrer une valeur numérique dans les champs à valeur numérique.',
'Invalid date time message'	=>	'Vous avez entré un temps, une date invalide.',
'Not verified'				=>	'Non vérifié',

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

'Add user head'				=>	'Ajouter l\'utilisateur',
'Random password info'		=>	'Générer un mot de passe aléatoire qui sera envoyé automatiquement à l\'adresse e-mail. Si vous cochez cette case, laissez le champ "Mot de passe" vide !',

//
// Common language used in /backstage/
// Main menu
//

'Content'				=>	'Contenu',
'Forums'				=>	'Forums',
'Forum settings'		=>	'Paramètres du Forum',
'Categories'			=>	'Catégories',
'Board'					=>	'Forum',
'Board structure'		=>	'Structure du forum',
'Censoring'				=>	'Censure',
'Reports'				=>	'Rapports',
'Users'					=>	'Utilisateurs',
'Ranks'					=>	'Rangs',
'Groups'				=>	'Groupes',
'Permissions'			=>	'Permissions',
'Bans'					=>	'Bans',
'Settings'				=>	'Paramètres',
'Global'				=>	'Général',
'Registration'			=>	'Inscription',
'Email'					=>	'E-mail',
'Database'				=>	'Gestion de la base de données',
'Backstage settings'	=>	'Gestion de l\'administration',
'Extensions'			=>	'Extensions',

//
// Others
//

'Prune'					=>	'Auto-suppression',
'Server statistics'		=>  'Statistiques du serveur',

//
// Update service
//

'Available'				=>	'Une mise à jour, ModernBB v%s, est disponible',
'Development'			=>	'Vous éxécutez actuellement la version %s, la version la plus stable est %s.',
'Download'				=>	'Télécharger v%s',
'Changelog'				=>	'Logs de changement de version',

//
// General actions and more
//

'Admin'					=>	'Administrateur',
'Go back'				=>	'Retour',
'Update'				=>	'Mettre à jour',
'Add'					=>	'Ajouter',
'Remove'				=>	'Supprimer',
'Yes'					=>	'Oui',
'No'					=>	'Non',
'here'					=>	'ici',
'Action'				=>	'Action',
'Maintenance mode'		=>	'mode maintenance', // Used for link text in more than one file

// Cookie bar
'Cookie bar'			=>	'Barre de cookies',
'Cookie info'			=>	'Nous utilisons les cookies pour fournir une melleure expérience sur le forum.',
'More info'				=>	'Plus d\'infos',
'Cookie set info'		=>	'Afficher une barre en bas de page contenant les informations sur les cookies.',

//
// Admin loader
//

'No plugin message'		=>	'Il n\'y a aucun plugin se nommant %s dans le dossier des plugins.',
'Plugin failed message'	=>	'Chargement du plugin - <strong>%s</strong> - échoué.',

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