<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Nazadnje objavljeno',
    'recently_created_pages' => 'Nazadnje objavljene strani',
    'recently_updated_pages' => 'Nazadnje posodobljene strani',
    'recently_created_chapters' => 'Nazadnje objavljena poglavja',
    'recently_created_books' => 'Nazadnje objavljene knjige',
    'recently_created_shelves' => 'Nazadnje ustvarjene police',
    'recently_update' => 'Nazadnje posodobljeno',
    'recently_viewed' => 'Nazadnje prikazano',
    'recent_activity' => 'Nedavna dejavnost',
    'create_now' => 'Ustvarite eno sedaj',
    'revisions' => 'Revizije',
    'meta_revision' => 'Številka revizije #:revisionCount',
    'meta_created' => 'Ustvarjeno :timeLength',
    'meta_created_name' => 'Ustvaril :timeLength uporabnik :user',
    'meta_updated' => 'Posodobljeno :timeLength',
    'meta_updated_name' => 'Posodobil :timeLength uporabnik :user',
    'entity_select' => 'Izbira entitete',
    'images' => 'Slike',
    'my_recent_drafts' => 'Moji nedavni osnutki',
    'my_recently_viewed' => 'Nedavno prikazano',
    'no_pages_viewed' => 'Niste si ogledali še nobene strani',
    'no_pages_recently_created' => 'Nedavno ni bila ustvarjena nobena stran',
    'no_pages_recently_updated' => 'Nedavno ni bila posodobljena nobena stran',
    'export' => 'Izvozi',
    'export_html' => 'Vsebuje spletno datoteko',
    'export_pdf' => 'PDF datoteka (.pdf)',
    'export_text' => 'Navadna besedilna datoteka',

    // Permissions and restrictions
    'permissions' => 'Dovoljenja',
    'permissions_intro' => 'V trenutku, ko bodo omogočena, bodo imela ta dovoljenja prednost pred dovoljenji za določanje vlog.',
    'permissions_enable' => 'Omogoči dovoljenja po meri',
    'permissions_save' => 'Shrani dovoljenja',

    // Search
    'search_results' => 'Rezultati iskanja',
    'search_total_results_found' => ':count najdenih rezultatov|:count skupaj najdenih rezultatov',
    'search_clear' => 'Počisti iskanje',
    'search_no_pages' => 'Nobena stran se ne ujema z vašim iskanjem',
    'search_for_term' => 'Išči :term',
    'search_more' => 'Prikaži več rezultatov',
    'search_advanced' => 'Napredno iskanje',
    'search_terms' => 'Iskalni izrazi',
    'search_content_type' => 'Vrsta vsebine',
    'search_exact_matches' => 'Natančno ujemanje',
    'search_tags' => 'Iskanje po oznakah',
    'search_options' => 'Možnosti',
    'search_viewed_by_me' => 'Ogledano',
    'search_not_viewed_by_me' => 'Neogledano',
    'search_permissions_set' => 'Nastavljena dovoljenja',
    'search_created_by_me' => 'Ustvaril sem jaz',
    'search_updated_by_me' => 'Posodobil sem jaz',
    'search_date_options' => 'Možnosti datuma',
    'search_updated_before' => 'Posodobljeno pred',
    'search_updated_after' => 'Posodobljeno po',
    'search_created_before' => 'Ustvarjeno pred',
    'search_created_after' => 'Ustvarjeno po',
    'search_set_date' => 'Nastavi datum',
    'search_update' => 'Posodobi iskanje',

    // Shelves
    'shelf' => 'Polica',
    'shelves' => 'Police',
    'x_shelves' => ':count Polica|:count Police',
    'shelves_long' => 'Knjižne police',
    'shelves_empty' => 'Ustvarjena ni bila nobena polica',
    'shelves_create' => 'Ustvari novo polico',
    'shelves_popular' => 'Priljubljene police',
    'shelves_new' => 'Nove police',
    'shelves_new_action' => 'Nova polica',
    'shelves_popular_empty' => 'Najbolj priljubljene police se bodo pojavile tukaj.',
    'shelves_new_empty' => 'Nazadnje ustvarjene police se bodo pojavile tukaj.',
    'shelves_save' => 'Shrani polico',
    'shelves_books' => 'Knjige na tej polici',
    'shelves_add_books' => 'Dodaj knjige na to polico',
    'shelves_drag_books' => 'Povlecite knjige sem, da jih dodate na to polico',
    'shelves_empty_contents' => 'Na tej polici ni nobene knjige',
    'shelves_edit_and_assign' => 'Uredi knjižno polico za dodajanje knjig',
    'shelves_edit_named' => 'Uredi knjižno polico :name',
    'shelves_edit' => 'Uredi knjižno polico',
    'shelves_delete' => 'Izbriši knjižno polico',
    'shelves_delete_named' => 'Izbriši knjižno polico :name',
    'shelves_delete_explain' => "S tem boste izbrisali knjižno polico z nazivom ':name'. Vsebovane knjige ne bodo izbrisane.",
    'shelves_delete_confirmation' => 'Ali ste prepričani, da želite izbrisati ta knjižno polico?',
    'shelves_permissions' => 'Dovoljenja knjižnih polic',
    'shelves_permissions_updated' => 'Posodobljena dovoljenja knjižnih polic',
    'shelves_permissions_active' => 'Aktivna dovoljenja knjižnih polic',
    'shelves_copy_permissions_to_books' => 'Kopiraj dovoljenja na knjige',
    'shelves_copy_permissions' => 'Dovoljenja kopiranja',
    'shelves_copy_permissions_explain' => 'To bo uveljavilo trenutne nastavitve dovoljenj na knjižni polici za vse knjige, ki jih vsebuje ta polica. Pred aktiviranjem zagotovite, da so shranjene vse spremembe dovoljenj te knjižne police.',
    'shelves_copy_permission_success' => 'Dovoljenja knjižne police kopirana na :count knjig',

    // Books
    'book' => 'Knjiga',
    'books' => 'Knjige',
    'x_books' => ':count Knjiga|:count Knjig',
    'books_empty' => 'Ustvarjena ni bila nobena knjiga',
    'books_popular' => 'Priljubjene knjige',
    'books_recent' => 'Zadnje knjige',
    'books_new' => 'Nove knjige',
    'books_new_action' => 'Nova knjiga',
    'books_popular_empty' => 'Tukaj bodo prikazane najbolj priljubljene knjige.',
    'books_new_empty' => 'Tukaj bodo prikazane nazadnje ustvarjene knjige.',
    'books_create' => 'Ustvari novo knjigo',
    'books_delete' => 'Izbriši knjigo',
    'books_delete_named' => 'Izbriši knjigo :bookName',
    'books_delete_explain' => 'S tem boste izbrisali knjigo z nazivom \':bookName\'. Vse strani in poglavja bodo odstranjena.',
    'books_delete_confirmation' => 'Ali ste prepričani, da želite izbrisati to knjigo?',
    'books_edit' => 'Uredi knjigo',
    'books_edit_named' => 'Uredi knjigo :bookName',
    'books_form_book_name' => 'Ime knjige',
    'books_save' => 'Shrani knjigo',
    'books_permissions' => 'Dovoljenja knjige',
    'books_permissions_updated' => 'Posodobljena dovoljenja knjige',
    'books_empty_contents' => 'V tej knjigi ni bila ustvarjena še nobena stran ali poglavje.',
    'books_empty_create_page' => 'Ustvari novo stran',
    'books_empty_sort_current_book' => 'Razvrsti trenutno knjigo',
    'books_empty_add_chapter' => 'Dodaj poglavje',
    'books_permissions_active' => 'Aktivna dovoljenja knjige',
    'books_search_this' => 'Išči v tej knjigi',
    'books_navigation' => 'Navigacija po knjigi',
    'books_sort' => 'Razvrsti vsebino knjige',
    'books_sort_named' => 'Razvrsti knjigo :bookName',
    'books_sort_name' => 'Razvrsti po imenu',
    'books_sort_created' => 'Razvrsti po datumu nastanka',
    'books_sort_updated' => 'Razvrsti po datumu posodobitve',
    'books_sort_chapters_first' => 'Najprej poglavja',
    'books_sort_chapters_last' => 'Nazadnje poglavja',
    'books_sort_show_other' => 'Prikaži druge knjige',
    'books_sort_save' => 'Shrani novo razvrstitev',

    // Chapters
    'chapter' => 'Poglavje',
    'chapters' => 'Poglavja',
    'x_chapters' => ':count Poglavje|:count Poglavja',
    'chapters_popular' => 'Priljubljena poglavja',
    'chapters_new' => 'Novo poglavje',
    'chapters_create' => 'Ustvari novo poglavje',
    'chapters_delete' => 'Izbriši poglavje',
    'chapters_delete_named' => 'Izbriši poglavje :chapterName',
    'chapters_delete_explain' => 'S tem boste izbrisali poglavje \':chapterName\'. Vse strani bodo odstranjene in dodane neposredno v knjigo, v kateri je prej obstajalo to poglavje.',
    'chapters_delete_confirm' => 'Ste prepričani, da želite izbrisati to poglavje?',
    'chapters_edit' => 'Uredi poglavje',
    'chapters_edit_named' => 'Uredi poglavje :chapterName',
    'chapters_save' => 'Shrani poglavje',
    'chapters_move' => 'Premakni poglavje',
    'chapters_move_named' => 'Premakni poglavje :chapterName',
    'chapter_move_success' => 'Poglavje premaknjeno v :bookName',
    'chapters_permissions' => 'Dovoljenja poglavij',
    'chapters_empty' => 'V tem poglavju trenutno ni strani.',
    'chapters_permissions_active' => 'Dovoljenja poglavij so aktivirana',
    'chapters_permissions_success' => 'Posodobljena dovoljenja poglavij',
    'chapters_search_this' => 'Išči v tem poglavju',

    // Pages
    'page' => 'Stran',
    'pages' => 'Strani',
    'x_pages' => ':count Stran|:count Strani',
    'pages_popular' => 'Priljubjene strani',
    'pages_new' => 'Nova stran',
    'pages_attachments' => 'Priponke',
    'pages_navigation' => 'Navigacija po strani',
    'pages_delete' => 'Izbriši stran',
    'pages_delete_named' => 'Izbriši stran :pageName',
    'pages_delete_draft_named' => 'Izbriši osnutek strani :pageName',
    'pages_delete_draft' => 'Izbriši osnutek strani',
    'pages_delete_success' => 'Stran izbirsana',
    'pages_delete_draft_success' => 'Osnutek strani izbrisan',
    'pages_delete_confirm' => 'Ste prepričani, da želite izbrisati to stran?',
    'pages_delete_draft_confirm' => 'Ali ste prepričani, da želite izbrisati ta osnutek?',
    'pages_editing_named' => 'Urejanje strani :pageName',
    'pages_edit_draft_options' => 'Možnosti osnutka',
    'pages_edit_save_draft' => 'Shrani osnutek',
    'pages_edit_draft' => 'Uredi osnutek strani',
    'pages_editing_draft' => 'Urejanje osnutka',
    'pages_editing_page' => 'Urejanje strani',
    'pages_edit_draft_save_at' => 'Osnutek shranjen ob ',
    'pages_edit_delete_draft' => 'Izbriši osnutek',
    'pages_edit_discard_draft' => 'Zavrzi osnutek',
    'pages_edit_set_changelog' => 'Nastavi zgodovino sprememb',
    'pages_edit_enter_changelog_desc' => 'Vnesite kratek opis sprememb, ki ste jih naredili',
    'pages_edit_enter_changelog' => 'Vnesite zgodovino sprememb',
    'pages_save' => 'Shrani stran',
    'pages_title' => 'Naslov strani',
    'pages_name' => 'Ime strani',
    'pages_md_editor' => 'Urejevalnik',
    'pages_md_preview' => 'Predogled',
    'pages_md_insert_image' => 'Vstavi sliko',
    'pages_md_insert_link' => 'Vnesi povezavo entitete',
    'pages_md_insert_drawing' => 'Vstavi risbo',
    'pages_not_in_chapter' => 'Stran ni v poglavju',
    'pages_move' => 'Premakni stran',
    'pages_move_success' => 'Stran premaknjena v ":parentName"',
    'pages_copy' => 'Kopiraj stran',
    'pages_copy_desination' => 'Destinacija kopije',
    'pages_copy_success' => 'Stran uspešno kopirana',
    'pages_permissions' => 'Dovoljenja strani',
    'pages_permissions_success' => 'Posodobljena dovoljenja strani',
    'pages_revision' => 'Revizija',
    'pages_revisions' => 'Pregled strani',
    'pages_revisions_named' => 'Pregledi strani za :pageName',
    'pages_revision_named' => 'Pregled strani za :pageName',
    'pages_revisions_created_by' => 'Ustvaril',
    'pages_revisions_date' => 'Datum revizije',
    'pages_revisions_number' => '#',
    'pages_revisions_numbered' => 'Revizija #:id',
    'pages_revisions_numbered_changes' => 'Revizija #:id Changes',
    'pages_revisions_changelog' => 'Dnevnik sprememb',
    'pages_revisions_changes' => 'Spremembe',
    'pages_revisions_current' => 'Trenutna različica',
    'pages_revisions_preview' => 'Predogled',
    'pages_revisions_restore' => 'Obnovi',
    'pages_revisions_none' => 'Ta stran nima revizije',
    'pages_copy_link' => 'Kopiraj povezavo',
    'pages_edit_content_link' => 'Uredi vsebino',
    'pages_permissions_active' => 'Aktivna dovoljenja strani',
    'pages_initial_revision' => 'Prvotno objavljeno',
    'pages_initial_name' => 'Nova stran',
    'pages_editing_draft_notification' => 'Trenutno urejate osnutek ku je bil nazadnje shranjen :timeDiff.',
    'pages_draft_edited_notification' => 'Ta stran je od takrat posodobljena. Priporočamo, da zavržete ta osnutek.',
    'pages_draft_edit_active' => [
        'start_a' => ':count uporabnikov je začelo urejati to stran',
        'start_b' => ':userName je začel urejati to stran',
        'time_a' => 'od kar je bila stran nazandnje posodobljena',
        'time_b' => 'v zadnjih :minCount minutah',
        'message' => ':start :time. Pazite, da ne boste prepisali posodobitev drug drugega!',
    ],
    'pages_draft_discarded' => 'Osnutek zavržen, urejevalnik je bil posodobljen s trenutno vsebino strani',
    'pages_specific' => 'Določena stran',
    'pages_is_template' => 'Predloga strani',

    // Editor Sidebar
    'page_tags' => 'Oznake strani',
    'chapter_tags' => 'Oznake poglavja',
    'book_tags' => 'Oznake knjige',
    'shelf_tags' => 'Oznake police',
    'tag' => 'Oznaka',
    'tags' =>  'Oznake',
    'tag_name' =>  'Ime oznake',
    'tag_value' => 'Vrednost oznake (opcijsko)',
    'tags_explain' => "Dodajte nekaj oznak za boljšo kategorizacijo vaše vsebine.\nDodelite lahko vrednost oznake za boljšo poglobljeno organizacijo.",
    'tags_add' => 'Dodaj drugo oznako',
    'tags_remove' => 'Odstrani to oznako',
    'attachments' => 'Priloge',
    'attachments_explain' => 'Naložite nekaj datotek ali pripnite nekaj povezav, da bo prikazano na vaši strani. Te so vidne v stranski vrstici strani.',
    'attachments_explain_instant_save' => 'Spremembe tukaj so takoj shranjene.',
    'attachments_items' => 'Priloženi element',
    'attachments_upload' => 'Naloži datoteko',
    'attachments_link' => 'Pripni povezavo',
    'attachments_set_link' => 'Nastavi povezavo',
    'attachments_delete' => 'Ali ste prepričani, da želite izbrisati to priponko?',
    'attachments_dropzone' => 'Spustite datoteke ali kliknite tukaj, če želite priložiti datoteko',
    'attachments_no_files' => 'Nobena datoteka ni bila naložena',
    'attachments_explain_link' => 'Lahko pripnete povezavo, če ne želite naložiti datoteke. Lahko je povezava na drugo stran ali povezava do dateteke v oblaku.',
    'attachments_link_name' => 'Ime povezave',
    'attachment_link' => 'Povezava priponke',
    'attachments_link_url' => 'Povezava do datoteke',
    'attachments_link_url_hint' => 'Url mesta ali datoteke',
    'attach' => 'Pripni',
    'attachments_insert_link' => 'Dodaj povezavo na priponko na stran',
    'attachments_edit_file' => 'Uredi datoteko',
    'attachments_edit_file_name' => 'Ime datoteke',
    'attachments_edit_drop_upload' => 'Spustite datoteke ali kliknite tukaj, če želite naložiti in prepisati',
    'attachments_order_updated' => 'Priloga posodobljena',
    'attachments_updated_success' => 'Podrobnosti priloge posodobljene',
    'attachments_deleted' => 'Priloga izbirsana',
    'attachments_file_uploaded' => 'Datoteka uspešno naložena',
    'attachments_file_updated' => 'Datoteka uspešno posodobljena',
    'attachments_link_attached' => 'Povezava uspešno dodana na stran',
    'templates' => 'Predloge',
    'templates_set_as_template' => 'Stran je predloga',
    'templates_explain_set_as_template' => 'To stran lahko nastavite kot predlogo tako bo njena vsebina uporabljena pri izdelavi drugih strani. Ostali uporabniki bodo lahko uporabljali to predlogo, če imajo dovoljenja za to stran.',
    'templates_replace_content' => 'Zamenjaj vsebino strani',
    'templates_append_content' => 'Dodajte vsebini strani',
    'templates_prepend_content' => 'Dodaj k vsebini strani',

    // Profile View
    'profile_user_for_x' => 'Uporabnik že :time',
    'profile_created_content' => 'Ustvarjena vsebina',
    'profile_not_created_pages' => ':userName ni izdelal nobene strani',
    'profile_not_created_chapters' => ':userName ni izdelal nobenega poglavja',
    'profile_not_created_books' => ':userName ni izdelal nobene knjige',
    'profile_not_created_shelves' => ':userName ni izdelal nobene knjižne police',

    // Comments
    'comment' => 'Komentar',
    'comments' => 'Komentarji',
    'comment_add' => 'Dodaj komentar',
    'comment_placeholder' => 'Dodaj komentar',
    'comment_count' => '{0} Ni komentarjev|{1} 1 Komentar|[2,*] :count Komentarji',
    'comment_save' => 'Shrani komentar',
    'comment_saving' => 'Shranjujem komentar...',
    'comment_deleting' => 'Brišem komentar...',
    'comment_new' => 'Nov kometar',
    'comment_created' => 'komentirano :createDiff',
    'comment_updated' => 'Posodobljeno :updateDiff od :username',
    'comment_deleted_success' => 'Komentar je izbrisan',
    'comment_created_success' => 'Komentar dodan',
    'comment_updated_success' => 'Komentar posodobljen',
    'comment_delete_confirm' => 'Ste prepričani, da želite izbrisati ta komentar?',
    'comment_in_reply_to' => 'Odgovor na :commentId',

    // Revision
    'revision_delete_confirm' => 'Ali ste prepričani, da želite izbrisati to revizijo?',
    'revision_restore_confirm' => 'Ali ste prepričani da želite obnoviti to revizijo? Vsebina trenutne strani bo zamenjana.',
    'revision_delete_success' => 'Revizija izbrisana',
    'revision_cannot_delete_latest' => 'Ne morem izbrisati zadnje revizije.'
];