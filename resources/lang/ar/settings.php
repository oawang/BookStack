<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'الإعدادات',
    'settings_save' => 'حفظ الإعدادات',
    'settings_save_success' => 'تم حفظ الإعدادات',

    // App Settings
    'app_customization' => 'تخصيص',
    'app_features_security' => 'الميزات و الأمان',
    'app_name' => 'اسم التطبيق',
    'app_name_desc' => 'سيتم عرض هذا الاسم في الترويسة وفي أي رسالة بريد إلكتروني.',
    'app_name_header' => 'عرض اسم التطبيق في الترويسة؟',
    'app_public_access' => 'الوصول العام',
    'app_public_access_desc' => 'تمكين هذا الخيار سيسمح للزوار، الذين لم يتم تسجيل دخولهم، بالوصول إلى المحتوى في مثيل مكدس الكتب الخاص بك.',
    'app_public_access_desc_guest' => 'يمكن التحكم في وصول الزوار العموميين من خلال المستخدم "الضيف".',
    'app_public_access_toggle' => 'السماح بالوصول العام',
    'app_public_viewing' => 'السماح بالعرض على العامة؟',
    'app_secure_images' => 'تفعيل حماية أكبر لرفع الصور؟',
    'app_secure_images_toggle' => 'لمزيد من الحماية',
    'app_secure_images_desc' => 'لتحسين أداء النظام, ستكون جميع الصور متاحة للعامة. هذا الخيار يضيف سلسلة من الحروف والأرقام العشوائية صعبة التخمين إلى رابط الصورة. الرجاء التأكد من تعطيل فهرسة المسارات لمنع الوصول السهل.',
    'app_editor' => 'محرر الصفحة',
    'app_editor_desc' => 'الرجاء اختيار محرر النص الذي سيستخدم من قبل جميع المستخدمين لتحرير الصفحات.',
    'app_custom_html' => 'Custom HTML head content',
    'app_custom_html_desc' => 'سيتم إدراج أي محتوى مضاف هنا في الجزء السفلي من قسم <head> من كل صفحة. هذا أمر مفيد لتجاوز الأنماط أو إضافة رمز التحليل.',
    'app_custom_html_disabled_notice' => 'تم تعطيل محتوى HTML الرئيسي المخصص في صفحة الإعدادات هذه لضمان عكس أي تغييرات متتالية.',
    'app_logo' => 'شعار التطبيق',
    'app_logo_desc' => 'يجب أن تكون الصورة بارتفاع 43 بكسل. <br>سيتم تصغير الصور الأكبر من ذلك.',
    'app_primary_color' => 'اللون الأساسي للتطبيق',
    'app_primary_color_desc' => 'يجب أن تكون القيمة من نوع hex. <br>اترك الخانة فارغة للرجوع للون الافتراضي.',
    'app_homepage' => 'الصفحة الرئيسية للتطبيق',
    'app_homepage_desc' => 'الرجاء اختيار صفحة لتصبح الصفحة الرئيسية بدل من الافتراضية. سيتم تجاهل جميع الأذونات الخاصة بالصفحة المختارة.',
    'app_homepage_select' => 'اختر صفحة',
    'app_disable_comments' => 'تعطيل التعليقات',
    'app_disable_comments_toggle' => 'تعطيل التعليقات',
    'app_disable_comments_desc' => 'تعطيل التعليقات على جميع الصفحات داخل التطبيق. التعليقات الموجودة من الأصل لن تكون ظاهرة.',

    // Color settings
    'content_colors' => 'ألوان المحتوى',
    'content_colors_desc' => 'تعيين الألوان لجميع العناصر في التسلسل الهرمي لتنظيم الصفحات. يوصى باختيار الألوان ذات السطوع المماثل للألوان الافتراضية للقراءة.',
    'bookshelf_color' => 'لون الرف',
    'book_color' => 'لون الكتاب',
    'chapter_color' => 'لون الفصل',
    'page_color' => 'لون الصفحة',
    'page_draft_color' => 'لون مسودة الصفحة',

    // Registration Settings
    'reg_settings' => 'إعدادات التسجيل',
    'reg_enable' => 'تمكين التسجيل',
    'reg_enable_toggle' => 'تمكين التسجيل',
    'reg_enable_desc' => 'عند تمكين التسجيل سيكون المستخدم قادرا على تسجيل نفسه كمستخدم تطبيق. عند التسجيل يعطى لهم دور مستخدم افتراضي وحيد.',
    'reg_default_role' => 'دور المستخدم الأساسي بعد التسجيل',
    'reg_enable_external_warning' => 'يتم تجاهل الخيار أعلاه بينما يتم تفعيل مصادقة LDAP الخارجية أو SAML. حسابات المستخدم للأعضاء غير الحاليين سيتم إنشاؤها تلقائياً إذا كانت المصادقة، مقابل النظام الخارجي المستخدم، ناجحة.',
    'reg_email_confirmation' => 'تأكيد البريد الإلكتروني',
    'reg_email_confirmation_toggle' => 'يتطلب تأكيد البريد الإلكتروني',
    'reg_confirm_email_desc' => 'إذا تم استخدام قيود للمجال سيصبح التأكيد عن طريق البريد الإلكتروني إلزامي وسيتم تجاهل القيمة أسفله.',
    'reg_confirm_restrict_domain' => 'تقييد التسجيل على مجال محدد',
    'reg_confirm_restrict_domain_desc' => 'أدخل قائمة مفصولة بفواصل لنطاقات البريد الإلكتروني التي ترغب في تقييد التسجيل إليها. سيتم إرسال بريد إلكتروني للمستخدمين لتأكيد عنوانهم قبل السماح لهم بالتفاعل مع التطبيق. <br> لاحظ أن المستخدمين سيكونون قادرين على تغيير عناوين البريد الإلكتروني الخاصة بهم بعد التسجيل بنجاح.',
    'reg_confirm_restrict_domain_placeholder' => 'لم يتم اختيار أي قيود',

    // Maintenance settings
    'maint' => 'الصيانة',
    'maint_image_cleanup' => 'تنظيف الصور',
    'maint_image_cleanup_desc' => "Scans page & revision content to check which images and drawings are currently in use and which images are redundant. Ensure you create a full database and image backup before running this.",
    'maint_image_cleanup_ignore_revisions' => 'تجاهل الصور في المراجعات',
    'maint_image_cleanup_run' => 'بدء التنظيف',
    'maint_image_cleanup_warning' => 'يوجد عدد :count من الصور المحتمل عدم استخدامها. تأكيد حذف الصور؟',
    'maint_image_cleanup_success' => 'تم إيجاد وحذف عدد :count من الصور المحتمل عدم استخدامها!',
    'maint_image_cleanup_nothing_found' => 'لم يتم حذف أي شيء لعدم وجود أي صور غير مسمتخدمة',
    'maint_send_test_email' => 'Send a Test Email',
    'maint_send_test_email_desc' => 'This sends a test email to your email address specified in your profile.',
    'maint_send_test_email_run' => 'Send test email',
    'maint_send_test_email_success' => 'Email sent to :address',
    'maint_send_test_email_mail_subject' => 'Test Email',
    'maint_send_test_email_mail_greeting' => 'Email delivery seems to work!',
    'maint_send_test_email_mail_text' => 'Congratulations! As you received this email notification, your email settings seem to be configured properly.',
    'maint_recycle_bin_desc' => 'Deleted shelves, books, chapters & pages are sent to the recycle bin so they can be restored or permanently deleted. Older items in the recycle bin may be automatically removed after a while depending on system configuration.',
    'maint_recycle_bin_open' => 'Open Recycle Bin',

    // Recycle Bin
    'recycle_bin' => 'Recycle Bin',
    'recycle_bin_desc' => 'Here you can restore items that have been deleted or choose to permanently remove them from the system. This list is unfiltered unlike similar activity lists in the system where permission filters are applied.',
    'recycle_bin_deleted_item' => 'Deleted Item',
    'recycle_bin_deleted_by' => 'Deleted By',
    'recycle_bin_deleted_at' => 'Deletion Time',
    'recycle_bin_permanently_delete' => 'Permanently Delete',
    'recycle_bin_restore' => 'Restore',
    'recycle_bin_contents_empty' => 'The recycle bin is currently empty',
    'recycle_bin_empty' => 'Empty Recycle Bin',
    'recycle_bin_empty_confirm' => 'This will permanently destroy all items in the recycle bin including content contained within each item. Are you sure you want to empty the recycle bin?',
    'recycle_bin_destroy_confirm' => 'This action will permanently delete this item, along with any child elements listed below, from the system and you will not be able to restore this content. Are you sure you want to permanently delete this item?',
    'recycle_bin_destroy_list' => 'Items to be Destroyed',
    'recycle_bin_restore_list' => 'Items to be Restored',
    'recycle_bin_restore_confirm' => 'This action will restore the deleted item, including any child elements, to their original location. If the original location has since been deleted, and is now in the recycle bin, the parent item will also need to be restored.',
    'recycle_bin_restore_deleted_parent' => 'The parent of this item has also been deleted. These will remain deleted until that parent is also restored.',
    'recycle_bin_destroy_notification' => 'Deleted :count total items from the recycle bin.',
    'recycle_bin_restore_notification' => 'Restored :count total items from the recycle bin.',

    // Audit Log
    'audit' => 'Audit Log',
    'audit_desc' => 'This audit log displays a list of activities tracked in the system. This list is unfiltered unlike similar activity lists in the system where permission filters are applied.',
    'audit_event_filter' => 'Event Filter',
    'audit_event_filter_no_filter' => 'No Filter',
    'audit_deleted_item' => 'Deleted Item',
    'audit_deleted_item_name' => 'Name: :name',
    'audit_table_user' => 'User',
    'audit_table_event' => 'Event',
    'audit_table_related' => 'Related Item or Detail',
    'audit_table_date' => 'Activity Date',
    'audit_date_from' => 'Date Range From',
    'audit_date_to' => 'Date Range To',

    // Role Settings
    'roles' => 'الأدوار',
    'role_user_roles' => 'أدوار المستخدمين',
    'role_create' => 'إنشاء دور جديد',
    'role_create_success' => 'تم إنشاء الدور بنجاح',
    'role_delete' => 'حذف الدور',
    'role_delete_confirm' => 'سيتم حذف الدور المسمى \':roleName\'.',
    'role_delete_users_assigned' => 'This role has :userCount users assigned to it. If you would like to migrate the users from this role select a new role below.',
    'role_delete_no_migration' => "لا تقم بترجيل المستخدمين",
    'role_delete_sure' => 'تأكيد حذف الدور؟',
    'role_delete_success' => 'تم حذف الدور بنجاح',
    'role_edit' => 'تعديل الدور',
    'role_details' => 'تفاصيل الدور',
    'role_name' => 'اسم الدور',
    'role_desc' => 'وصف مختصر للدور',
    'role_external_auth_id' => 'External Authentication IDs',
    'role_system' => 'أذونات النظام',
    'role_manage_users' => 'إدارة المستخدمين',
    'role_manage_roles' => 'إدارة الأدوار وأذوناتها',
    'role_manage_entity_permissions' => 'إدارة جميع أذونات الكتب والفصول والصفحات',
    'role_manage_own_entity_permissions' => 'إدارة الأذونات الخاصة بكتابك أو فصلك أو صفحاتك',
    'role_manage_page_templates' => 'Manage page templates',
    'role_access_api' => 'Access system API',
    'role_manage_settings' => 'إدارة إعدادات التطبيق',
    'role_asset' => 'Asset Permissions',
    'roles_system_warning' => 'Be aware that access to any of the above three permissions can allow a user to alter their own privileges or the privileges of others in the system. Only assign roles with these permissions to trusted users.',
    'role_asset_desc' => 'These permissions control default access to the assets within the system. Permissions on Books, Chapters and Pages will override these permissions.',
    'role_asset_admins' => 'Admins are automatically given access to all content but these options may show or hide UI options.',
    'role_all' => 'الكل',
    'role_own' => 'Own',
    'role_controlled_by_asset' => 'Controlled by the asset they are uploaded to',
    'role_save' => 'حفظ الدور',
    'role_update_success' => 'تم تحديث الدور بنجاح',
    'role_users' => 'مستخدمون داخل هذا الدور',
    'role_users_none' => 'لم يتم تعيين أي مستخدمين لهذا الدور',

    // Users
    'users' => 'المستخدمون',
    'user_profile' => 'ملف المستخدم',
    'users_add_new' => 'إضافة مستخدم جديد',
    'users_search' => 'بحث عن مستخدم',
    'users_latest_activity' => 'Latest Activity',
    'users_details' => 'User Details',
    'users_details_desc' => 'Set a display name and an email address for this user. The email address will be used for logging into the application.',
    'users_details_desc_no_email' => 'Set a display name for this user so others can recognise them.',
    'users_role' => 'أدوار المستخدمين',
    'users_role_desc' => 'Select which roles this user will be assigned to. If a user is assigned to multiple roles the permissions from those roles will stack and they will receive all abilities of the assigned roles.',
    'users_password' => 'User Password',
    'users_password_desc' => 'Set a password used to log-in to the application. This must be at least 6 characters long.',
    'users_send_invite_text' => 'You can choose to send this user an invitation email which allows them to set their own password otherwise you can set their password yourself.',
    'users_send_invite_option' => 'Send user invite email',
    'users_external_auth_id' => 'External Authentication ID',
    'users_external_auth_id_desc' => 'This is the ID used to match this user when communicating with your external authentication system.',
    'users_password_warning' => 'الرجاء ملئ الحقل أدناه فقط في حال أردتم تغيير كلمة المرور:',
    'users_system_public' => 'هذا المستخدم يمثل أي ضيف يقوم بزيارة شيء يخصك. لا يمكن استخدامه لتسجيل الدخول ولكن يتم تعيينه تلقائياً.',
    'users_delete' => 'حذف المستخدم',
    'users_delete_named' => 'حذف المستخدم :userName',
    'users_delete_warning' => 'سيتم حذف المستخدم \':userName\' بشكل تام من النظام.',
    'users_delete_confirm' => 'تأكيد حذف المستخدم؟',
    'users_delete_success' => 'تم حذف المستخدم بنجاح',
    'users_edit' => 'تعديل المستخدم',
    'users_edit_profile' => 'تعديل الملف',
    'users_edit_success' => 'تم تحديث المستخدم بنجاح',
    'users_avatar' => 'صورة المستخدم',
    'users_avatar_desc' => 'يجب أن تكون الصورة مربعة ومقاربة لحجم 256 بكسل',
    'users_preferred_language' => 'اللغة المفضلة',
    'users_preferred_language_desc' => 'This option will change the language used for the user-interface of the application. This will not affect any user-created content.',
    'users_social_accounts' => 'الحسابات الاجتماعية',
    'users_social_accounts_info' => 'Here you can connect your other accounts for quicker and easier login. Disconnecting an account here does not previously authorized access. Revoke access from your profile settings on the connected social account.',
    'users_social_connect' => 'ربط الحساب',
    'users_social_disconnect' => 'فصل الحساب',
    'users_social_connected' => 'تم ربط حساب :socialAccount بملفك بنجاح.',
    'users_social_disconnected' => 'تم فصل حساب :socialAccount من ملفك بنجاح.',
    'users_api_tokens' => 'API Tokens',
    'users_api_tokens_none' => 'No API tokens have been created for this user',
    'users_api_tokens_create' => 'Create Token',
    'users_api_tokens_expires' => 'Expires',
    'users_api_tokens_docs' => 'API Documentation',

    // API Tokens
    'user_api_token_create' => 'Create API Token',
    'user_api_token_name' => 'Name',
    'user_api_token_name_desc' => 'Give your token a readable name as a future reminder of its intended purpose.',
    'user_api_token_expiry' => 'Expiry Date',
    'user_api_token_expiry_desc' => 'Set a date at which this token expires. After this date, requests made using this token will no longer work. Leaving this field blank will set an expiry 100 years into the future.',
    'user_api_token_create_secret_message' => 'Immediately after creating this token a "Token ID" & "Token Secret" will be generated and displayed. The secret will only be shown a single time so be sure to copy the value to somewhere safe and secure before proceeding.',
    'user_api_token_create_success' => 'API token successfully created',
    'user_api_token_update_success' => 'API token successfully updated',
    'user_api_token' => 'API Token',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'This is a non-editable system generated identifier for this token which will need to be provided in API requests.',
    'user_api_token_secret' => 'Token Secret',
    'user_api_token_secret_desc' => 'This is a system generated secret for this token which will need to be provided in API requests. This will only be displayed this one time so copy this value to somewhere safe and secure.',
    'user_api_token_created' => 'Token created :timeAgo',
    'user_api_token_updated' => 'Token updated :timeAgo',
    'user_api_token_delete' => 'Delete Token',
    'user_api_token_delete_warning' => 'This will fully delete this API token with the name \':tokenName\' from the system.',
    'user_api_token_delete_confirm' => 'Are you sure you want to delete this API token?',
    'user_api_token_delete_success' => 'API token successfully deleted',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'fr' => 'Français',
        'he' => 'עברית',
        'hu' => 'Magyar',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'nl' => 'Nederlands',
        'pl' => 'Polski',
        'pt_BR' => 'Português do Brasil',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ]
    //!////////////////////////////////
];
