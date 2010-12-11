<?php

// Language definitions used in install.php, localized by adaur

$lang_install = array(

'Install message'				=>	'الملف \'config.php\' غير موجود أو مخرب. هذا يعزى إلى أن FluxBB لم يتم تركيبه بعد. للتركيب، اتبع الإجراءات التالية.',
'Choose install language'		=>	'اختر لغة التركيب',
'Choose install language info'	=>	'اللغة المستخدمة في عملية التركيب.',
'Install language'				=>	'لغة التركيب',
'Next'							=>	'التالي',
'Already installed'				=>	'على ما يبدو ان FluxBB مركب مسبقا. عوضا عن ذلك قم بالذهاب إلى <a href="index.php">هنا</a>.',
'You are running error'			=>	'أنت تقوم بتشغيل %1$s الإصدار %2$s. يتطلب FluxBB %3$s على الأقل %1$s %4$s ليعمل بشكل جيد. يجب أن تقوم بترقية  %1$s قبل المتابعة',
'My FluxBB Forum'				=>	'منتدى FluxBB',
'Description'					=>	'بصراحة لايمكن لأحد أن يقول لكم ماهو FluxBB - قم بتجربته بنفسك.',
'Username 1'					=>	'اسماء المستخدمين يجب ان يكون طولها على الأقل 2 حرف.',
'Username 2'					=>	'اسماء المستخدمين يجب ان يكون طولها يزيد عن 25 حرف.',
'Username 3'					=>	'اسم المستخدم guest محجوز.',
'Username 4'					=>	'اسماء المستخدمين لا يجب ان تكون بشكل عنوان IP.',
'Username 5'					=>	'اسماء المستخدمين يجب أن لا تحوي هذه الأحرف معا \', " و [ أو ].',
'Username 6'					=>	'اسماء المستخدمين يجب أن لا تحوي اي من رموز التنسيق (BBCode) التي تستخدم في المنتديات.',
'Short password'				=>	'كلمات المرور يجب أن يكون طولها على الأقل 4 أحرف.',
'Passwords not match'			=>	'كلمات المرور غير متطابقة.',
'Wrong email'					=>	'عنوان البريد الكتروني للمدير غير ملائم.',
'No board title'				=>	'يجب أن تدخل عنوان المنتديات.',
'Error default language'		=>	'اللغة الافتراضية المختارة غير موجودة.',
'Error default style'			=>	'المظهر الافتراضي المختار غير موجود.',
'No DB extensions'				=>	'بيئة PHP لا تدعم أي من قواعد البيانات التي يدعمها FluxBB. يجب على PHP ان يدعم على الأقل  MySQL أو PostgreSQL أو SQLite ليتم التركيب.',
'Administrator username'		=>	'اسم المستخدم للمدير',
'Administrator password 1'		=>	'كلمة المرور للمدير 1',
'Administrator password 2'		=>	'كلمة المرور للمدير 2',
'Administrator email'			=>	'البريد الالكتروني للمدير ',
'Board title'					=>	'عنوان المنتديات',
'Base URL'						=>	'URL الأساسي',
'Required field'				=>	'هي حقول مطلوب ادخالها في النموذج.',
'FluxBB Installation'			=>	'تركيب FluxBB',
'Welcome'						=>	'مرحبا بك في تركيب FluxBB. انت الآن ستقوم بتركيب FluxBB. لعمل التركيب، يجب عليك أن تكمل النموذج ادناه. إذا واجهت أي صعوبة في عملية التركيب رجاءاً توجه لقراءة التوثيق',
'Install'						=>	'تركيب FluxBB 1.4',
'Errors'						=>	'يجب ان يتم تصحيح الأخطاء التالية:',
'Database setup'				=>	'إعداد قاعدة البيانات',
'Info 1'						=>	'رجاءاً قم بتعبئة المعلومات المطلوبة لإعداد قاعدة البيانات لـ FluxBB. يجب ان تستوعب كل المعلومات التي ستسأل عنها قبل اتمام عملية التركيب.',
'Select database'				=>	'اختر نوع قاعدة البيانات',
'Info 2'						=>	'إن FluxBB يدعم  MySQL و PostgreSQL و SQLite. إذا كان نوع قاعدة البيانات مفقود من القائمة لديك، هذا يعني أن بيئة PHP لديك لا تدعم هذا النوع من قاعدة البيانات. من أجل معلومات أكثر عن دعم قواعد البيانات انظر في الأسئلة و الأجوبة FAQ.',
'Dual MySQL'					=>	'أن بيئة PHP لديك تدعم نوعين مختلفين من قواعد البيانات MySQL. كلا النوعين يدعيان القياسي و المطور. إذا كنت غير متأكد أي النوعين تريد أن تستخدم، جرب استخدام المطور فإذا فشل قم باستخدام القياسي.',
'InnoDB'						=>	'تم اكتشاف أن مخدم قاعدة البيانات MySQL يدعم <a href="http://dev.mysql.com/doc/refman/5.0/en/innodb.html">InnoDB</a>. سيكون خيارا جيدا إذا كنت تخطط لمنتديات ضخمة. إذا كنت غير متأكد، لا ننصح باستخدام InnoDB.',
'Database type'					=>	'نوع قاعدة البيانات',
'Required'						=>	'(مطلوب)',
'Database hostname'				=>	'أدخل اسم مخدم قاعدة البيانات',
'Info 3'						=>	'مخدم قاعدة البيانات (مثل: localhost, db.myhost.com or 192.168.0.15). يمكنك تحديد رقم البوابة مخصص للمخدم إذا كانت ليست الافتراضية (مثال: localhost:3580). من أجل SQLite أدخل أي شيء أو اتركه \'localhost\'.',
'Database server hostname'		=>'اسم مخدم قاعدة البيانات',
'Database enter name'			=>	'أدخل اسم قاعدة البيانات',
'Info 4'						=>	'اسم قاعدة البيانات التي سيقوم FluxBB بالتركيب عليها بياناته. قاعدة البيانات يجب أن تكون موجودة، و ممكن أن تكون عبارة عن مسار مرجعي لملف. إذا كان ملف قاعدة البيانات لـ SQLite غير موجود فسيتم إنشاءه تلقائياً.',
'Database name'					=>	'اسم قاعدة البيانات',
'Database enter informations'	=>	'ادخل مستخدم و كلمة مرور قاعدة البيانات',
'Database username'				=>	'اسم مستخدم قاعدة البيانات',
'Info 5'						=>	'ادخل اسم مستخدم و كلمة المرور التي ستستخدم للاتصال بمخدم قاعدة البيانات. تجاهلها إذا كانت قاعدة البيانات SQLite.',
'Database password'				=>	'كلمة مرور قاعدة البيانات',
'Database enter prefix'			=>	'أدخل سابقة اسماء الجداول',
'Info 6'						=>	'إذا رغبت، يمكنك تحديد زيادة مسبوقة لتسمية الجدوال في قاعدة البيانات. هذا يمكنك من استخدام تركيب قاعدة بيانات FluxBB عدة مرات على نفس مخدم البيانات و لكي لا تتعارض مع تركيبات لبرامج أخرى، (مثال foo_)',
'Table prefix'					=>	'سابقة الجداول',
'Administration setup'			=>	'إعداد الإدارة',
'Info 7'						=>	'أدخل رجاءاً المعلومات المطلوبة لاستكمال إعداد المدير لتركيب FluxBB.',
'Admin enter username'			=>	'أدخل اسم المستخدم للمدير',
'Info 8'						=>	'اسم المستخدم مدير المنتديات. يمكنك فيما بعد أن تضيف مدراء و مشرفين جدد. أطول اسماء المستخدمين بين 2 و 25 حرف.',
'Admin enter password'			=>	'أدخل و أكد كلمة المرور للمدير',
'Info 9'						=>	'كلمات المرور طولها على الأقل 4 أحرف. و هي حساسة لحالة الحرف.',
'Password'						=>	'كلمة المرور',
'Confirm password'				=>	'تأكيد الكلمة',
'Admin enter email'				=>	'البريد الالكتروني للمدير',
'Info 10'						=>	'عنوان البريد الألكتروني لمدير المنتديات.',
'Board setup'					=>	'اعداد المنتديات',
'Info 11'						=>	'رجاءاً أدخل المعلومات المطلوبة لاستكمال تركيب FluxBB.',
'Enter board title'				=>	'أدخل عنوان المنتديات',
'Info 12'						=>	'عنوان المنتديات هو الذي يظهر بشكل دائم في أعلى كل صفحة.',
'Enter board description'		=>	'أدخل وصف المنتديات',
'Info 13'						=>	'وصف مختصر لهذه المنتديات (تظهر أعل كل صفحة). و يمكن أن تحوي HTML.',
'Board description'				=>	'وصف المنتديات',
'Enter base URL'				=>	'أدخل الـ URL الأساسي (الوصلة لمنتداك أو الموقع) حيث تم تركيب FluxBB.',
'Info 14'						=>	'هذه الوصلة URL (بدون الـ / الأخيرة) لمنتدى FluxBB (مثال: http://forum.myhost.com or http://myhost.com/~myuser). هذه الوصلة <strong>يجب</strong> أن تكون صحيحة تماما، و إلا المدراء و المشرفين لن يستطيعوا أن يستخدموا الفعاليات الإدارية. لاحظ وجود قيمة معدة مسبقا مقترحة من قبل FluxBB.',
'Choose the default language'	=>	'اختر اللغة الافتراضية',
'Info 15'						=>	'اللغة الافتراضية ستستخدم للزوار و المستخدمين الذين لم يحددوا اللغة ضمن الهيئة خاصة بهم.',
'Default language'				=>	'اللغة الافتراضية',
'Choose the default style'		=>	'اختر المظهر الافتراضي',
'Info 16'						=>	'المظهر الافتراضي سيستخدم للزوار و المستخدمين الذين لم يحددوا المظهر ضمن الهيئة خاصة بهم.',
'Default style'					=>	'المظهر الافتراضي',
'Start install'					=>	'إبدأ التركيب',
'DB type not valid'				=>	'\'%s\' نوع قاعدة بيانات غير ملائم',
'Table prefix error'			=>	'الزائدة السابقة لأسماء الجداول تحوي محارف غير مقبولة أو هي طويلة جدا. الزائدة يجب أن تحوي أحرف من a إلى z أو أي رقم أو _ مسافة مسطرة. و غالبا يجب أن لا يبدأ برقم. أقصى طول مقبول هو 40 حرف. رجاءاً اختر زائدة سابقة أخرى.',
'Prefix reserved'				=>	'الزائدة السابقة \'sqlite_\' للجداول محجوزة لمحرك قاعدة البيانات SQLite. رجاءاً اختر زائدة أخرى.',
'Existing table error'			=>	'الجدول المسمى \'%susers\' موجود مسبقاً في قاعدة البيانات \'%s\'. هذا يعني إما أن FluxBB تم تركيبه مسبقاً أو إن هذا الجدول من إحدى جداول برنامج آخر مركب على قاعدة البيانات لديك يشغل اسماء جداول FluxBB المطلوبة للتركيب. إذا كنت تريد تركيب أكثر من نسخة لـ FluxBB قم باختيار زائدة سابقة أخرى لأسماء الجدوال.',
'InnoDB off'					=>	'على ما يبدو إن InnoDB غير مفعل. رجاءاً اختر نوع آخر لقاعدة البيانات لا يدعم InnoDB. أو قم بتفعيل InnoDB في مخدم MySQL.',
'Administrators'				=>	'المدراء',
'Administrator'					=>	'مدير',
'Moderators'					=>	'المشرفين',
'Moderator'						=>	'مشرف',
'Guest'							=>	'ضيف',
'New member'					=>	'عضو جديد',
'Member'						=>	'عضو',
'Announcement'					=>	'أدخل التبيلغ هنا.',
'Rules'							=>	'أدخل القواعد هنا',
'Maintenance message'			=>	'المنتديات حاليا في وضع الصيانة مؤقتاً. رجاءاً حاول مرة أخرى بعد عدة دقائق.<br />\\n<br />\\n/المدير',
'Test post'						=>	'مداخلة للاختبار',
'Message'						=>	'إذا كنت ترى هذا (على ما أعتقد)، معناه أن تركيب FluxBB قد تم بنجاح! الآن قم بالولوج إلى لوحة التحكم لإدارة و معايرة منتداك.',
'Test category'					=>	'قسم تجريبي',
'Test forum'					=>	'منتدى تجريبي',
'This is just a test forum'		=>	'هذا مجرد منتدى تجريبي',
'Alert cache'					=>	'<strong>فهرس (مجلد) التخزين المؤقت cache غير قابل للكتابة</strong> لكي يعمل FluxBB بشكل جيد، أنت بحاجة لجعل <em>cache</em> قابل للكتابة من قبل الـ PHP. استخدم chmod لتعديل الصلاحيات على هذا الفهرس، يمكن أن يكون 0777 هي قيمة هذه الصلاحيات.',
'Alert avatar'					=>	'<strong>فهرس (مجلد) الصور avatars غير قابل للكتابة</strong>، إذا اردت أن تسمح لمستخدميك بتحميل صورة خاصة بهم أنت بحاجة لجعل الفهرس <em>avatars</em> قابل للكتابة من قبل الـ PHP. يمكنك تحديد مسار آخر للفهرس ضمن خيارات الإدارة. استخدم chmod لتعديل الصلاحيات على هذا الفهرس، يمكن أن يكون 0777 هي قيمة هذه الصلاحيات.',
'Alert upload'					=>	'<strong>علىما يبدو تحميل الملفات غير مسموح على هذه المخدم!</strong>، إذا اردت أن تسمح لمستخدميك بتحميل صور خاصة بهم أنت بحاجة لتفعيل file_uploads في ملفات المعايرة الخاص بـ PHP. بمجرد تفعيل هذه الخاصية،يمكن تفعيل خيار تحميل الصور الشخصية للمستخدمين في خيارات الإدارة.',
'FluxBB has been installed'		=>	'تم تركيب FluxBB. لإنهاء عملية التركيب اتبع الارشادات التالية.',
'Final instructions'			=>	'إرشادات الإنهاء',
'Info 17'						=>	'لإنهاء التركيب، أنت بحاجة للضغط على زر تنزيل ملف مسمى config.php. أنت بحاجة لرفع هذا الملف إلى الجذر الأساسي لمكان تركيب FluxBB.',
'Info 18'						=>	'بمجرد رفع الملف config.php, سيكون FluxBB قد تم تركيبه بالكامل! عند هذه النقطة, ربما عليك الذهاب إلى <a href="index.php">المنتديات</a>.',
'Download config.php file'		=>	'تنزيل ملف config.php',
'FluxBB fully installed'		=>	'تم الإنتهاء من تركيب FluxBB بالكامل! ربما عليك <a href="index.php">الذهاب إلى المنتديات</a>.',

);