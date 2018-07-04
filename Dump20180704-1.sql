-- MySQL dump 10.13  Distrib 5.7.21, for Win64 (x86_64)
--
-- Host: localhost    Database: motawer
-- ------------------------------------------------------
-- Server version	5.7.21-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `banar_details`
--

DROP TABLE IF EXISTS `banar_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banar_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `banar_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `banar_details_banar_id_unique` (`banar_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banar_details`
--

LOCK TABLES `banar_details` WRITE;
/*!40000 ALTER TABLE `banar_details` DISABLE KEYS */;
INSERT INTO `banar_details` VALUES (1,2,'الطلاب','<h2 style=\"text-align: right;\">النتائج الدراسية</h2>\r\n<p style=\"text-align: right;\">والتى تشمل التطبيقات العملية واختبارات الشهر و اختبارات الميدتيـــرم و</p>\r\n<p style=\"text-align: right;\">اختبارات نصف العام و آخر العام .</p>\r\n<hr />\r\n<h2 style=\"text-align: right;\">البيانات المالية</h2>\r\n<p style=\"text-align: right;\">معرفة كافة البـيـانـات المالية ومعرفـة كافــة المدفوعـــات و الأقساط .</p>\r\n<hr />\r\n<h2 style=\"text-align: right;\">سجل الحضور و الغياب و الملاحظات</h2>\r\n<p style=\"text-align: right;\">معرفة كافة الأيـــام التى تغيــب فيها الطالــب و معرفة سبـب الغيـاب</p>\r\n<p style=\"text-align: right;\">و ملاحظات المدرسين و الإداريين و العاملين و المديريـن و تقييم مستــوى</p>\r\n<p style=\"text-align: right;\">الطالب .</p>\r\n<hr />\r\n<h2 style=\"text-align: right;\">جدول الحصص</h2>\r\n<p style=\"text-align: right;\">الإطــلاع علـى جــدول الحصــص و معرفـة كافـة المواد المقررة يوميـا .</p>\r\n<hr />\r\n<h2 style=\"text-align: right;\">أرقام الجلوس</h2>\r\n<p style=\"text-align: right;\">الإطــلاع علـى رقــــم الجلــــوس و معرفتـــه لأداء الإمتحـــــان.</p>','2018-06-26 17:04:00','2018-07-02 14:57:42',NULL),(2,3,'أولياء الأمور','<h2 style=\"text-align: right;\">أولياء الأمور</h2>\r\n<p style=\"text-align: right;\">يستطيع أولياء الأمور الدخول الى النظام عن طريق الموقع الإلكترونى و التطبيق بحيث يستطيع ولى الأمر معرفة ما يستطيع الطالب معرفته.</p>\r\n<hr />\r\n<h2 style=\"text-align: right;\">ما يميز ولى الأمر هو</h2>\r\n<ul>\r\n<li style=\"padding-left: 30px; text-align: right;\">نظام SMS ( نظام الرسائل النصية القصيرة )</li>\r\n<li style=\"padding-left: 30px; text-align: right;\">التى ستجعلك على علم بكل ما يحدث و إتصال دائم بالمدرسة</li>\r\n<li style=\"padding-left: 30px; text-align: right;\">عن طريق رسائل نصية ترسل إلى الموبايل</li>\r\n<li style=\"padding-left: 30px; text-align: right;\">كإخطار ولى الأمر بغياب الطالب</li>\r\n<li style=\"padding-left: 30px; text-align: right;\">و التنبيهات و الإنذارات و الفصل و إستدعاءات ولى الأمر</li>\r\n<li style=\"padding-left: 30px; text-align: right;\">و الأقساط المالية المسددة و تنبيه ولى الأمر بالأقساط المستحقة قبل موعد</li>\r\n<li style=\"padding-left: 30px; text-align: right;\">الإستحقاق و غيره الكثير .</li>\r\n</ul>\r\n<hr />\r\n<h2 style=\"text-align: right;\">نظام E-MAIL&nbsp; ( نظام رسائل البريد الإلكترونى )</h2>\r\n<p style=\"text-align: right;\">التى ستجعلك على علم بكل ما يحدث و إتصال دائم بالمدرسة عن طريق رسائل نصية ترسل إلى البريد الإلكترونى.</p>','2018-07-02 15:03:00','2018-07-02 15:04:22',NULL),(3,4,'المدرسين','<h2 style=\"text-align: right;\">كشف الراتب</h2>\r\n<p style=\"text-align: right;\">معرفة كافة الأمور المتعلقة بالرواتب من غيابـات و خصومـــات وحوافـز و بدلات و مكافآت و إضافى و سُلف.</p>\r\n<hr />\r\n<h2 style=\"text-align: right;\">سجل الحضور و الغياب و الملاحظات</h2>\r\n<p style=\"text-align: right;\">.معرفة كافة الأيام التى تغيب فيها المـدرس و معرفة سبب الغيـاب وسجل ملاحظاته من قبل المديرين</p>\r\n<hr />\r\n<h2 style=\"text-align: right;\">جدول الحصص</h2>\r\n<p style=\"text-align: right;\">الإطلاع على جدول الحصص و معرفـة كافـة الحصص المقررة يوميـا.</p>\r\n<hr />\r\n<h2 style=\"text-align: right;\">جدول الإشراف</h2>\r\n<p style=\"text-align: right;\">الإطلاع على جدول الإشراف و معرفة كافة الأوقات المقررة للإشراف.</p>\r\n<hr />','2018-07-02 15:07:00','2018-07-02 15:09:21',NULL),(4,5,'الإداريين','<h2 style=\"text-align: right;\">كشف الراتب</h2>\r\n<p style=\"text-align: right;\">معرفة كافة الأمور المتعلقة بالرواتب من غيابـات و خصومـــات و</p>\r\n<p style=\"text-align: right;\">حوافـز و بدلات و مكافآت و إضافى و سُلف.</p>\r\n<hr />\r\n<h2 style=\"text-align: right;\">سجل الحضور و الغياب و الملاحظات</h2>\r\n<p style=\"text-align: right;\">معرفة كافة الأيام التى تغيب فيها الإدارى و العامل و معرفة سبب</p>\r\n<p style=\"text-align: right;\">الغيـاب وسجل ملاحظاته من قبل المديرين .</p>','2018-07-02 15:11:43','2018-07-02 15:11:43',NULL),(5,6,'العاملين بالمدرسة','<h2 style=\"text-align: right;\">كشف الراتب</h2>\r\n<p style=\"text-align: right;\">معرفة كافة الأمور المتعلقة بالرواتب من غيابـات و خصومـــات و</p>\r\n<p style=\"text-align: right;\">حوافـز و بدلات و مكافآت و إضافى و سُلف.</p>\r\n<hr />\r\n<h2 style=\"text-align: right;\">سجل الحضور و الغياب و الملاحظات</h2>\r\n<p style=\"text-align: right;\">معرفة كافة الأيام التى تغيب فيها الإدارى و العامل و معرفة سبب</p>\r\n<p style=\"text-align: right;\">الغيـاب وسجل ملاحظاته من قبل المديرين .</p>','2018-07-02 15:12:28','2018-07-02 15:12:28',NULL),(6,11,'المديرين','<h2 style=\"text-align: right;\">الإطلاع على البيانات</h2>\r\n<p style=\"text-align: right;\">الإطـلاع على البيانـات الخاصـة بالطـلاب من حيـث النتائـج الدراسية والبيانـات الماليـة و سجل الحضـور والغيـاب وجدول الحصص والمدرسين من حيث جدول الحصص وجدول الإشراف وسجل الحضـو والغياب وكشف الرواتب والخصومات والإداريين من حيث سجــل الحضور والغياب وكشف الرواتب والخصومات واالعاملين بالمدرسـة من حيث سجل الحضور والغياب وسجل الملاحظــات والعقوبــات وكشف الرواتب والخصومات.</p>\r\n<hr />\r\n<h2 style=\"text-align: right;\">تحرير البيانات المالية ومراجعتها</h2>\r\n<p style=\"text-align: right;\">يستطيع المديرون تسجيل كافة المدفوعات والأقساط الخاصة بالطلاب وتسجيـل البيانـات المالية الخاصة بالمدرسين والإداريين والعاملين بالمدرسة وإحتساب الرواتب بعـد خصـم الخصومات والغيابـات وإضـافـة الحوافــز والبـدلات والمكافآت والإضافى ومراجعتهـا والتأكـد منها فى حالة تسجيل الإداريين لهذة البيانات.</p>\r\n<hr />\r\n<h2 style=\"text-align: right;\">تحرير النتائج الدراسية و مراجعتها</h2>\r\n<p style=\"text-align: right;\">تحرير النتائج الدراسية الخاصة بالطلاب و التى تشمل التطبيقات العملية وإختبـارات الشهـر واختبارات الميدتيرم واختبارات نصف العام وآخر العام وفى حالة تسجيل كل مدرس النتائج الدراسية الخاصة بصفـه الدراسى ومادته يقوم بعض الإداريين بالمراجعة أو التعديل على هذه النتائج و التأكد منها ويمكـن للمديـر التعديـل علـى هذة النتائـج أو مراجعتها.</p>\r\n<hr />\r\n<h2 style=\"text-align: right;\">تحرير سجلات الحضور و الغياب و مراجعتها</h2>\r\n<p style=\"text-align: right;\">تسجيل كافة الأيام التى تغيب فيهـا الطالـب والمـدرس و الإدارى والعامليـن بالمدرسـة وتسجيل سبب الغياب ومراجعتها والتــأكد منها فى حالة تسجيل الإداريين لهذه الأيام.</p>\r\n<hr />\r\n<h2 style=\"text-align: right;\">تسجيل الملاحظات</h2>\r\n<p style=\"text-align: right;\">تسجيل الملاحظات على الطلاب وإعطـاء تقرير عن الطـلاب ومراجعة الملاحظات والتقاريـر.</p>','2018-07-02 15:28:22','2018-07-02 15:28:22',NULL),(7,10,'الإداريين','<h2 style=\"text-align: right;\">الإطلاع على البيانات وتعديلها ومراجعتها</h2>\r\n<ul>\r\n<li style=\"text-align: right;\">الإطلاع على البيانـات الخاصة بالطلاب من حيث النتائـج الدراسيـة وسجـل الحضور والغيـاب والمدرسيـن من حيـث جـدول الحصـص وجدول الإشراف وسجل الحضور والغياب والإداريين من حيث سجـل الحضور والغياب والعاملين بالمدرسة من حيث سجل الحضور والغياب.</li>\r\n<li style=\"text-align: right;\">هناك إدارى خاص كالمحاسب و السكرتاريـة يستطيعون الإطـلاع على البيانـات الماليـة الخاصة بالطـلاب ومعرفـة كافـة المستحقــات الماليـة ومعرفة كافـة المدفوعات والأقساط والإطلاع على كشف الرواتب والخصومات الخاص بالمدرسيـن والإدارييـن والعامليــن بالمدرسة ومعرفة الحوافـز والبـدلات والمكافــآت والإضافــى والخصومات والسُلف.</li>\r\n</ul>\r\n<hr />\r\n<h2 style=\"text-align: right;\">تحرير البيانات المالية</h2>\r\n<p style=\"text-align: right;\">يستطيع الإدارى الخـاص كالمحاسب والسكرتاريـة بتسجيــل كافـة المدفوعات والأقساط الخاصة بالطلاب وتسجيـل البيانـات الماليـة لخاصة بالمدرسين والإداريين والعاملين بالمدرسة وإحتساب الرواتب بعد خصم الخصومـات والغيابات وإضافة الحوافز و البدلات والمكافـآت و الإضافى.</p>\r\n<hr />\r\n<h2 style=\"text-align: right;\">تحرير النتائج الدراسية ومراجعتها</h2>\r\n<p style=\"text-align: right;\">تحرير النتائج الدراسية الخاصة بالطـلاب والتى تشمـل التطبيقـــات العمليـة وإختبارات الشهر وإختبارات الميدتيرم وإختبـارات نصـف العام وآخر العام وفى حالة تسجيـل كـل مدرس النتائـج الدراسيــة الخاصة بصفه الدراسى ومادته يقوم بعضالإداريين بالمراجعــة علـى هذة النتائج والتأكد منها .</p>\r\n<h2 style=\"text-align: right;\">تحرير سجلات الحضور والغياب</h2>\r\n<p style=\"text-align: right;\">تسجيل كافة الأيام التى تغيب فيـها الطالـب والمـــدرس والإدارى والعاملين بالمدرسة وتسجيل سبب الغياب.</p>\r\n<hr />\r\n<h2 style=\"text-align: right;\">تحرير جدول الحصص وجدول الإشراف</h2>\r\n<p style=\"text-align: right;\">تحرير جـدول الحصـص ومعرفة كافـة الحصـص المقـررة يوميا على الفصول والمدرسيـن وتحرير جدول الإشراف ومعرفة كافة الأوقات المقررة للإشراف.</p>\r\n<hr />\r\n<h2 style=\"text-align: right;\">تسجيل الملاحظات</h2>\r\n<p style=\"text-align: right;\">تسجيل الملاحظات للطـلاب وإعطـاء تقريـر عن الطـلاب ومراجعـة الملاحظات والتقارير .</p>','2018-07-02 15:41:00','2018-07-02 16:11:32',NULL),(8,8,'المدرسين','<h2 style=\"text-align: right;\">الإطلاع على البيانات</h2>\r\n<p style=\"text-align: right;\">الإطلاع على البيانات الخاصه بالطـلاب من حيث النتائج الدراسية وسجل الملاحظات فى صفه الدراسى ومادته فقط</p>\r\n<hr />\r\n<h2 style=\"text-align: right;\">تحرير النتائج الدراسية</h2>\r\n<p style=\"text-align: right;\">تحرير النتائج الدراسية الخاصة بصفه الدراسى ومادته والتـى تشمـل التطبيقات العملية وإختبارات الشهر وإختبارات الميدتيرم وإختبارات نصف العام وآخر العام.</p>\r\n<hr />\r\n<h2 style=\"text-align: right;\">تسجيل الملاحظات</h2>\r\n<p style=\"text-align: right;\">تسجيل الملاحظات للطلاب وإعطاء تقارير عن الطلاب فى صفه الدراسى ومادتـه.</p>','2018-07-02 16:15:00','2018-07-02 16:16:13',NULL);
/*!40000 ALTER TABLE `banar_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banar_mains`
--

DROP TABLE IF EXISTS `banar_mains`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banar_mains` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `banar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banar_mains`
--

LOCK TABLES `banar_mains` WRITE;
/*!40000 ALTER TABLE `banar_mains` DISABLE KEYS */;
INSERT INTO `banar_mains` VALUES (1,'مجموعة مُطور','للبرمجيات المتطورة','تهدف مجموعة مُطور بأن تقدم أفضل الحلول البرمجية الذكية فى المجال التعليمى نظراً للتطورات المجتمعية والتى فرضت أستخدام تكنولوجيا الحاسوب فقدمت نظام مُتابع وهو بيئة حاسوبية متكاملة تعمل على مواكبة هذا التطور.','first',NULL,'2018-07-02 13:23:00','2018-07-02 17:34:57'),(2,'نظام مُتابع','النظام المدرسي الإدارى الرقابى المتكامل','يسمح للمدرسة بأن تقوم بكافة أعمالها بشكلاً إلكترونى مما يسهل سير عمل المدرسة وعملية التعليم والرقابة الشاملة ويخدم النظام كافة المدارس\r\n(National - International - Languages American - British - Montessori)\r\nويوفر النظام دعماً لأنظمة العلامات المحلية والدولية\r\n(IB, PYP, MYP, DB, SAT, IGCSE)\r\nقامت بتصميمه وتطويره شركة مطور للبرمجيات المتطورة ويشمل.','second','banar-mains\\July2018\\OODheSKtmdOnBR1sIT02.png','2018-07-02 13:27:00','2018-07-02 18:07:42'),(3,'أمن للمعلومات والبيانات','حرصاً منا عليك','يتميز بوجود جدار حماية ونسخ أحتياطى لجميع البيانات والحفاظ على الخصوصية وتحديد ما يمكن الاطلاع عليه لكل مستخدم كما أيضاً يتم تحديثه بشكل دائم لمعالجة العيوب إن وجدت.','thired',NULL,'2018-07-02 13:28:00','2018-07-02 17:52:58'),(4,'إضافات دورية',NULL,'العمل على إضافة خيارات جديدة وتحديثات لتشمل كل أعمال المدرسة وربطها ببعضها البعض وأيضاً العمل على تحسين الخيارات المتاحة لتسهيل سير عمل المدرسة ومتطلباتها.','four',NULL,'2018-07-02 13:29:00','2018-07-02 17:56:39'),(5,'الحقبة الجديدة من البيئات الحاسوبية الذكية المتجاوبة','يعمل نظام مُتابع على جميع الاجهزة والبيئات الحاسوبية','فانظام متابع يعمل على أجهزة الكمبيوتر والهواتف النقالة كأجهزة الاندرويد وأجهزة الايفون.','five','banar-mains\\July2018\\L6IxO2uP5XtGh2cECVuM.png','2018-07-02 13:30:00','2018-07-02 18:01:34');
/*!40000 ALTER TABLE `banar_mains` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banars`
--

DROP TABLE IF EXISTS `banars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banars` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name_arabic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `details_arabic` text COLLATE utf8_unicode_ci,
  `category` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banars`
--

LOCK TABLES `banars` WRITE;
/*!40000 ALTER TABLE `banars` DISABLE KEYS */;
INSERT INTO `banars` VALUES (2,'الطلاب','\"يستطيع الطلاب الدخول الى النظام بحيث يستطيع الطالب معرفة.\"',NULL,'2018-06-26 15:46:11','2018-06-26 15:46:11','الطلاب','\"يستطيع الطلاب الدخول الى النظام بحيث يستطيع الطالب معرفة.\"','Student'),(3,'أولياء الأمور','\"يستطيع أولياء الأمور الدخول إلى النظام بحيث يستطيع ولى الأمر معرفة \"',NULL,'2018-06-26 15:46:29','2018-06-26 15:46:29','أولياء الأمور','\"يستطيع أولياء الأمور الدخول إلى النظام بحيث يستطيع ولى الأمر معرفة \"','Parents'),(4,'المدرسين','\"يستطيع المدرسون الدخول إلى النظام بحيث يستطيعون معرفة.\"',NULL,'2018-06-26 15:46:00','2018-06-26 15:47:34','المدرسين','\"يستطيع المدرسون الدخول إلى النظام بحيث يستطيعون معرفة.\"','Teachers'),(5,'الإداريين','\"يستطيع الإدرايون الدخول إلى النظام بحيث يستطيعون معرفة.\"',NULL,'2018-06-26 15:47:00','2018-06-26 15:47:48','الإداريين','\"يستطيع الإدرايون الدخول إلى النظام بحيث يستطيعون معرفة.\"','Administrators'),(6,'العاملين بالمدرسة','\"يستطيع العاملون بالمدرسة الدخول إلى النظام بحيث يستطيعون معرفة.\"',NULL,'2018-06-26 15:47:22','2018-06-26 15:47:22','العاملين بالمدرسة','\"يستطيع العاملون بالمدرسة الدخول إلى النظام بحيث يستطيعون معرفة.\"','Staff'),(7,'المديرين','\"يستطيع المديرون الدخول إلى النظام بحيث يستطيعون معرفة.\"',NULL,'2018-06-26 15:48:10','2018-06-26 15:48:10','المديرين','\"يستطيع المديرون الدخول إلى النظام بحيث يستطيعون معرفة.\"','Managers'),(8,'المدرسين','\"يستطيع المدرسون الدخول إلى النظام بحيث يستطيعون القيام بـــ.\"',NULL,'2018-06-26 15:50:17','2018-06-26 15:50:17','المدرسين','\"يستطيع المدرسون الدخول إلى النظام بحيث يستطيعون القيام بـــ.\"','Teachers2'),(9,'المدرسين','\"يستطيع المدرسون الدخول إلى النظام بحيث يستطيعون القيام بـــ.\"',NULL,'2018-06-26 15:50:18','2018-06-26 15:50:18','المدرسين','\"يستطيع المدرسون الدخول إلى النظام بحيث يستطيعون القيام بـــ.\"','Teachers2'),(10,'الإداريين','\"يستطيع الإداريون الدخول إلى النظام بحيث يستطيعون القيام بـــ.\"',NULL,'2018-06-26 15:50:38','2018-06-26 15:50:38','الإداريين','\"يستطيع الإداريون الدخول إلى النظام بحيث يستطيعون القيام بـــ.\"','Administrators2'),(11,'المديرين','\"يستطيع المديرون الدخول إلى النظام بحيث يستطيعون القيام بـــ.\"',NULL,'2018-06-26 15:51:06','2018-06-26 15:51:06','المديرين','\"يستطيع المديرون الدخول إلى النظام بحيث يستطيعون القيام بـــ.\"','Managers2');
/*!40000 ALTER TABLE `banars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`),
  KEY `categories_parent_id_foreign` (`parent_id`),
  CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,NULL,1,'Category 1','category-1','2018-06-26 01:07:21','2018-06-26 01:07:21'),(2,NULL,1,'Category 2','category-2','2018-06-26 01:07:23','2018-06-26 01:07:23');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_rows`
--

DROP TABLE IF EXISTS `data_rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_rows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int(10) unsigned NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_rows`
--

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` VALUES (1,1,'id','number','ID',1,0,0,0,0,0,'',1),(2,1,'name','text','Name',1,1,1,1,1,1,'',2),(3,1,'email','text','Email',1,1,1,1,1,1,'',3),(4,1,'password','password','Password',1,0,0,1,1,0,'',4),(5,1,'remember_token','text','Remember Token',0,0,0,0,0,0,'',5),(6,1,'created_at','timestamp','Created At',0,1,1,0,0,0,'',6),(7,1,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'',7),(8,1,'avatar','image','Avatar',0,1,1,1,1,1,'',8),(9,1,'user_belongsto_role_relationship','relationship','Role',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\"}',10),(10,1,'user_belongstomany_role_relationship','relationship','Roles',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}',11),(11,1,'locale','text','Locale',0,1,1,1,1,0,'',12),(12,1,'settings','hidden','Settings',0,0,0,0,0,0,'',12),(13,2,'id','number','ID',1,0,0,0,0,0,'',1),(14,2,'name','text','Name',1,1,1,1,1,1,'',2),(15,2,'created_at','timestamp','Created At',0,0,0,0,0,0,'',3),(16,2,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'',4),(17,3,'id','number','ID',1,0,0,0,0,0,'',1),(18,3,'name','text','Name',1,1,1,1,1,1,'',2),(19,3,'created_at','timestamp','Created At',0,0,0,0,0,0,'',3),(20,3,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'',4),(21,3,'display_name','text','Display Name',1,1,1,1,1,1,'',5),(22,1,'role_id','text','Role',1,1,1,1,1,1,'',9),(23,4,'id','number','ID',1,0,0,0,0,0,'',1),(24,4,'parent_id','select_dropdown','Parent',0,0,1,1,1,1,'{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}',2),(25,4,'order','text','Order',1,1,1,1,1,1,'{\"default\":1}',3),(26,4,'name','text','Name',1,1,1,1,1,1,'',4),(27,4,'slug','text','Slug',1,1,1,1,1,1,'{\"slugify\":{\"origin\":\"name\"}}',5),(28,4,'created_at','timestamp','Created At',0,0,1,0,0,0,'',6),(29,4,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'',7),(30,5,'id','number','ID',1,0,0,0,0,0,'',1),(31,5,'author_id','text','Author',1,0,1,1,0,1,'',2),(32,5,'category_id','text','Category',1,0,1,1,1,0,'',3),(33,5,'title','text','Title',1,1,1,1,1,1,'',4),(34,5,'excerpt','text_area','Excerpt',1,0,1,1,1,1,'',5),(35,5,'body','rich_text_box','Body',1,0,1,1,1,1,'',6),(36,5,'image','image','Post Image',0,1,1,1,1,1,'{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}',7),(37,5,'slug','text','Slug',1,0,1,1,1,1,'{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}',8),(38,5,'meta_description','text_area','Meta Description',1,0,1,1,1,1,'',9),(39,5,'meta_keywords','text_area','Meta Keywords',1,0,1,1,1,1,'',10),(40,5,'status','select_dropdown','Status',1,1,1,1,1,1,'{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}',11),(41,5,'created_at','timestamp','Created At',0,1,1,0,0,0,'',12),(42,5,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'',13),(43,5,'seo_title','text','SEO Title',0,1,1,1,1,1,'',14),(44,5,'featured','checkbox','Featured',1,1,1,1,1,1,'',15),(45,6,'id','number','ID',1,0,0,0,0,0,'',1),(46,6,'author_id','text','Author',1,0,0,0,0,0,'',2),(47,6,'title','text','Title',1,1,1,1,1,1,'',3),(48,6,'excerpt','text_area','Excerpt',1,0,1,1,1,1,'',4),(49,6,'body','rich_text_box','Body',1,0,1,1,1,1,'',5),(50,6,'slug','text','Slug',1,0,1,1,1,1,'{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}',6),(51,6,'meta_description','text','Meta Description',1,0,1,1,1,1,'',7),(52,6,'meta_keywords','text','Meta Keywords',1,0,1,1,1,1,'',8),(53,6,'status','select_dropdown','Status',1,1,1,1,1,1,'{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}',9),(54,6,'created_at','timestamp','Created At',1,1,1,0,0,0,'',10),(55,6,'updated_at','timestamp','Updated At',1,0,0,0,0,0,'',11),(56,6,'image','image','Page Image',0,1,1,1,1,1,'',12),(57,7,'id','text','Id',1,0,0,0,0,0,NULL,1),(58,7,'name','text','Name',1,1,1,1,1,1,NULL,2),(60,7,'details','text_area','Details',0,0,1,1,1,1,NULL,5),(61,7,'image','image','Image',0,1,1,1,1,1,NULL,7),(62,7,'created_at','timestamp','Created At',0,1,1,1,0,1,NULL,8),(63,7,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,9),(64,7,'name_arabic','text','Name Arabic',0,1,1,1,1,1,NULL,3),(66,7,'details_arabic','text_area','Details Arabic',0,0,1,1,1,1,NULL,6),(67,7,'category','select_dropdown','Category',0,1,1,1,1,1,'{\"default\":\"Student\",\"options\":{\"Student\":\"Student\",\"Parents\":\"Parents\",\"Teachers\":\"Teachers\",\"Administrators\":\"Administrators\",\"Staff\":\"Staff\",\"Managers\":\"Managers\",\"Teachers2\":\"Teachers2\",\"Administrators2\":\"Administrators2\",\"Managers2\":\"Managers2\"}}',4),(68,8,'id','text','Id',1,0,0,0,0,0,NULL,1),(69,8,'banar_id','text','Banar Id',1,1,1,1,1,1,NULL,3),(70,8,'name','text','Name',1,1,1,1,1,1,NULL,4),(71,8,'body','rich_text_box','Body',1,1,1,1,1,1,NULL,6),(72,8,'created_at','timestamp','Created At',0,1,1,1,0,1,NULL,7),(73,8,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,8),(74,8,'banar_detail_belongsto_banar_relationship','relationship','Banars',0,1,1,1,1,1,'{\"model\":\"App\\\\Banar\",\"table\":\"banars\",\"type\":\"belongsTo\",\"column\":\"banar_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"banar_details\",\"pivot\":\"0\",\"taggable\":\"0\"}',2),(75,8,'image','image','Image',0,1,1,1,1,1,NULL,5),(76,9,'id','text','Id',1,0,0,0,0,0,NULL,1),(77,9,'name','text','Name',1,1,1,1,1,1,NULL,2),(78,9,'details','text_area','Details',0,0,1,1,1,1,NULL,3),(79,9,'description','text_area','Description',0,0,1,1,1,1,NULL,4),(80,9,'banar','select_dropdown','Banar',1,1,1,1,1,1,'{\"default\":\"first\",\"options\":{\"first\":\"First Banar\",\"second\":\"Second Banar\",\"thired\":\"Thired Banar\",\"four\":\"Four Banar\",\"five\":\"Five Banar\"}}',5),(81,9,'image','image','Image',0,1,1,1,1,1,NULL,6),(82,9,'created_at','timestamp','Created At',0,1,1,1,0,1,NULL,7),(83,9,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,8);
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_types`
--

DROP TABLE IF EXISTS `data_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_types`
--

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
INSERT INTO `data_types` VALUES (1,'users','users','User','Users','voyager-person','TCG\\Voyager\\Models\\User','TCG\\Voyager\\Policies\\UserPolicy','','',1,0,NULL,'2018-06-26 01:06:48','2018-06-26 01:06:48'),(2,'menus','menus','Menu','Menus','voyager-list','TCG\\Voyager\\Models\\Menu',NULL,'','',1,0,NULL,'2018-06-26 01:06:48','2018-06-26 01:06:48'),(3,'roles','roles','Role','Roles','voyager-lock','TCG\\Voyager\\Models\\Role',NULL,'','',1,0,NULL,'2018-06-26 01:06:48','2018-06-26 01:06:48'),(4,'categories','categories','Category','Categories','voyager-categories','TCG\\Voyager\\Models\\Category',NULL,'','',1,0,NULL,'2018-06-26 01:07:14','2018-06-26 01:07:14'),(5,'posts','posts','Post','Posts','voyager-news','TCG\\Voyager\\Models\\Post','TCG\\Voyager\\Policies\\PostPolicy','','',1,0,NULL,'2018-06-26 01:07:24','2018-06-26 01:07:24'),(6,'pages','pages','Page','Pages','voyager-file-text','TCG\\Voyager\\Models\\Page',NULL,'','',1,0,NULL,'2018-06-26 01:07:31','2018-06-26 01:07:31'),(7,'banars','banars','Banar','Banars','voyager-photo','App\\Banar',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null}','2018-06-26 10:32:12','2018-06-26 10:33:13'),(8,'banar_details','banar-details','Banar Detail','Banar Details','voyager-documentation','App\\BanarDetail',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null}','2018-06-26 16:54:23','2018-06-26 16:54:23'),(9,'banar_mains','banar-mains','Banar Main','Banar Mains','voyager-photos','App\\BanarMain',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null}','2018-07-02 13:18:37','2018-07-02 13:18:37');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,1,'Dashboard','','_self','voyager-boat',NULL,NULL,1,'2018-06-26 01:06:50','2018-06-26 01:06:50','voyager.dashboard',NULL),(2,1,'Media','','_self','voyager-images',NULL,NULL,5,'2018-06-26 01:06:50','2018-06-26 01:06:50','voyager.media.index',NULL),(3,1,'Users','','_self','voyager-person',NULL,NULL,4,'2018-06-26 01:06:50','2018-06-26 10:33:08','voyager.users.index',NULL),(4,1,'Roles','','_self','voyager-lock',NULL,NULL,3,'2018-06-26 01:06:50','2018-06-26 10:33:08','voyager.roles.index',NULL),(5,1,'Tools','','_self','voyager-tools',NULL,NULL,9,'2018-06-26 01:06:50','2018-06-26 01:06:50',NULL,NULL),(6,1,'Menu Builder','','_self','voyager-list',NULL,5,1,'2018-06-26 01:06:50','2018-06-26 10:33:08','voyager.menus.index',NULL),(7,1,'Database','','_self','voyager-data',NULL,5,2,'2018-06-26 01:06:50','2018-06-26 10:33:08','voyager.database.index',NULL),(8,1,'Compass','','_self','voyager-compass',NULL,5,3,'2018-06-26 01:06:50','2018-06-26 10:33:08','voyager.compass.index',NULL),(9,1,'BREAD','','_self','voyager-bread',NULL,5,4,'2018-06-26 01:06:50','2018-06-26 10:33:08','voyager.bread.index',NULL),(10,1,'Settings','','_self','voyager-settings',NULL,NULL,10,'2018-06-26 01:06:50','2018-06-26 10:33:08','voyager.settings.index',NULL),(11,1,'Categories','','_self','voyager-categories',NULL,NULL,8,'2018-06-26 01:07:20','2018-06-26 01:07:20','voyager.categories.index',NULL),(12,1,'Posts','','_self','voyager-news',NULL,NULL,6,'2018-06-26 01:07:29','2018-06-26 01:07:29','voyager.posts.index',NULL),(13,1,'Pages','','_self','voyager-file-text',NULL,NULL,7,'2018-06-26 01:07:33','2018-06-26 01:07:33','voyager.pages.index',NULL),(14,1,'Hooks','','_self','voyager-hook',NULL,5,5,'2018-06-26 01:07:38','2018-06-26 10:33:08','voyager.hooks',NULL),(15,1,'Banars','','_self','voyager-photo','#000000',NULL,2,'2018-06-26 10:32:12','2018-06-26 10:33:08','voyager.banars.index','null'),(16,1,'Banar Details','','_self','voyager-documentation',NULL,NULL,11,'2018-06-26 16:54:24','2018-06-26 16:54:24','voyager.banar-details.index',NULL),(17,1,'Banar Mains','','_self','voyager-photos',NULL,NULL,12,'2018-07-02 13:18:38','2018-07-02 13:18:38','voyager.banar-mains.index',NULL);
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'admin','2018-06-26 01:06:50','2018-06-26 01:06:50');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_01_01_000000_add_voyager_user_fields',1),(4,'2016_01_01_000000_create_data_types_table',1),(5,'2016_05_19_173453_create_menu_table',1),(6,'2016_10_21_190000_create_roles_table',1),(7,'2016_10_21_190000_create_settings_table',1),(8,'2016_11_30_135954_create_permission_table',1),(9,'2016_11_30_141208_create_permission_role_table',1),(10,'2016_12_26_201236_data_types__add__server_side',1),(11,'2017_01_13_000000_add_route_to_menu_items_table',1),(12,'2017_01_14_005015_create_translations_table',1),(13,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',1),(14,'2017_03_06_000000_add_controller_to_data_types_table',1),(15,'2017_04_21_000000_add_order_to_data_rows_table',1),(16,'2017_07_05_210000_add_policyname_to_data_types_table',1),(17,'2017_08_05_000000_add_group_to_settings_table',1),(18,'2017_11_26_013050_add_user_role_relationship',1),(19,'2017_11_26_015000_create_user_roles_table',1),(20,'2018_03_11_000000_add_user_settings',1),(21,'2018_03_14_000000_add_details_to_data_types_table',1),(22,'2018_03_16_000000_make_settings_value_nullable',1),(23,'2016_01_01_000000_create_pages_table',2),(24,'2016_01_01_000000_create_posts_table',2),(25,'2016_02_15_204651_create_categories_table',2),(26,'2017_04_11_000000_alter_post_nullable_fields_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,0,'Hello World','Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.','<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>','pages/page1.jpg','hello-world','Yar Meta Description','Keyword1, Keyword2','ACTIVE','2018-06-26 01:07:34','2018-06-26 01:07:34');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(38,1),(39,1),(40,1),(42,1),(43,1),(44,1),(45,1),(46,1),(47,1),(48,1),(49,1),(50,1),(51,1),(52,1),(53,1),(54,1),(55,1),(56,1);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse_admin',NULL,'2018-06-26 01:06:50','2018-06-26 01:06:50'),(2,'browse_bread',NULL,'2018-06-26 01:06:50','2018-06-26 01:06:50'),(3,'browse_database',NULL,'2018-06-26 01:06:51','2018-06-26 01:06:51'),(4,'browse_media',NULL,'2018-06-26 01:06:51','2018-06-26 01:06:51'),(5,'browse_compass',NULL,'2018-06-26 01:06:51','2018-06-26 01:06:51'),(6,'browse_menus','menus','2018-06-26 01:06:51','2018-06-26 01:06:51'),(7,'read_menus','menus','2018-06-26 01:06:51','2018-06-26 01:06:51'),(8,'edit_menus','menus','2018-06-26 01:06:51','2018-06-26 01:06:51'),(9,'add_menus','menus','2018-06-26 01:06:51','2018-06-26 01:06:51'),(10,'delete_menus','menus','2018-06-26 01:06:51','2018-06-26 01:06:51'),(11,'browse_roles','roles','2018-06-26 01:06:51','2018-06-26 01:06:51'),(12,'read_roles','roles','2018-06-26 01:06:51','2018-06-26 01:06:51'),(13,'edit_roles','roles','2018-06-26 01:06:52','2018-06-26 01:06:52'),(14,'add_roles','roles','2018-06-26 01:06:52','2018-06-26 01:06:52'),(15,'delete_roles','roles','2018-06-26 01:06:52','2018-06-26 01:06:52'),(16,'browse_users','users','2018-06-26 01:06:52','2018-06-26 01:06:52'),(17,'read_users','users','2018-06-26 01:06:52','2018-06-26 01:06:52'),(18,'edit_users','users','2018-06-26 01:06:52','2018-06-26 01:06:52'),(19,'add_users','users','2018-06-26 01:06:52','2018-06-26 01:06:52'),(20,'delete_users','users','2018-06-26 01:06:52','2018-06-26 01:06:52'),(21,'browse_settings','settings','2018-06-26 01:06:52','2018-06-26 01:06:52'),(22,'read_settings','settings','2018-06-26 01:06:52','2018-06-26 01:06:52'),(23,'edit_settings','settings','2018-06-26 01:06:52','2018-06-26 01:06:52'),(24,'add_settings','settings','2018-06-26 01:06:52','2018-06-26 01:06:52'),(25,'delete_settings','settings','2018-06-26 01:06:53','2018-06-26 01:06:53'),(26,'browse_categories','categories','2018-06-26 01:07:20','2018-06-26 01:07:20'),(27,'read_categories','categories','2018-06-26 01:07:20','2018-06-26 01:07:20'),(28,'edit_categories','categories','2018-06-26 01:07:21','2018-06-26 01:07:21'),(29,'add_categories','categories','2018-06-26 01:07:21','2018-06-26 01:07:21'),(30,'delete_categories','categories','2018-06-26 01:07:21','2018-06-26 01:07:21'),(31,'browse_posts','posts','2018-06-26 01:07:29','2018-06-26 01:07:29'),(32,'read_posts','posts','2018-06-26 01:07:30','2018-06-26 01:07:30'),(33,'edit_posts','posts','2018-06-26 01:07:30','2018-06-26 01:07:30'),(34,'add_posts','posts','2018-06-26 01:07:30','2018-06-26 01:07:30'),(35,'delete_posts','posts','2018-06-26 01:07:30','2018-06-26 01:07:30'),(36,'browse_pages','pages','2018-06-26 01:07:33','2018-06-26 01:07:33'),(37,'read_pages','pages','2018-06-26 01:07:33','2018-06-26 01:07:33'),(38,'edit_pages','pages','2018-06-26 01:07:33','2018-06-26 01:07:33'),(39,'add_pages','pages','2018-06-26 01:07:33','2018-06-26 01:07:33'),(40,'delete_pages','pages','2018-06-26 01:07:33','2018-06-26 01:07:33'),(41,'browse_hooks',NULL,'2018-06-26 01:07:38','2018-06-26 01:07:38'),(42,'browse_banars','banars','2018-06-26 10:32:12','2018-06-26 10:32:12'),(43,'read_banars','banars','2018-06-26 10:32:12','2018-06-26 10:32:12'),(44,'edit_banars','banars','2018-06-26 10:32:12','2018-06-26 10:32:12'),(45,'add_banars','banars','2018-06-26 10:32:12','2018-06-26 10:32:12'),(46,'delete_banars','banars','2018-06-26 10:32:12','2018-06-26 10:32:12'),(47,'browse_banar_details','banar_details','2018-06-26 16:54:24','2018-06-26 16:54:24'),(48,'read_banar_details','banar_details','2018-06-26 16:54:24','2018-06-26 16:54:24'),(49,'edit_banar_details','banar_details','2018-06-26 16:54:24','2018-06-26 16:54:24'),(50,'add_banar_details','banar_details','2018-06-26 16:54:24','2018-06-26 16:54:24'),(51,'delete_banar_details','banar_details','2018-06-26 16:54:24','2018-06-26 16:54:24'),(52,'browse_banar_mains','banar_mains','2018-07-02 13:18:38','2018-07-02 13:18:38'),(53,'read_banar_mains','banar_mains','2018-07-02 13:18:38','2018-07-02 13:18:38'),(54,'edit_banar_mains','banar_mains','2018-07-02 13:18:38','2018-07-02 13:18:38'),(55,'add_banar_mains','banar_mains','2018-07-02 13:18:38','2018-07-02 13:18:38'),(56,'delete_banar_mains','banar_mains','2018-07-02 13:18:38','2018-07-02 13:18:38');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,0,NULL,'Lorem Ipsum Post',NULL,'This is the excerpt for the Lorem Ipsum Post','<p>This is the body of the lorem ipsum post</p>','posts/post1.jpg','lorem-ipsum-post','This is the meta description','keyword1, keyword2, keyword3','PUBLISHED',0,'2018-06-26 01:07:30','2018-06-26 01:07:30'),(2,0,NULL,'My Sample Post',NULL,'This is the excerpt for the sample Post','<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>','posts/post2.jpg','my-sample-post','Meta Description for sample post','keyword1, keyword2, keyword3','PUBLISHED',0,'2018-06-26 01:07:30','2018-06-26 01:07:30'),(3,0,NULL,'Latest Post',NULL,'This is the excerpt for the latest post','<p>This is the body for the latest post</p>','posts/post3.jpg','latest-post','This is the meta description','keyword1, keyword2, keyword3','PUBLISHED',0,'2018-06-26 01:07:31','2018-06-26 01:07:31'),(4,0,NULL,'Yarr Post',NULL,'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.','<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>','posts/post4.jpg','yarr-post','this be a meta descript','keyword1, keyword2, keyword3','PUBLISHED',0,'2018-06-26 01:07:31','2018-06-26 01:07:31');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Administrator','2018-06-26 01:06:50','2018-06-26 01:06:50'),(2,'user','Normal User','2018-06-26 01:06:50','2018-06-26 01:06:50');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'site.title','Site Title','Site Title','','text',1,'Site'),(2,'site.description','Site Description','Site Description','','text',2,'Site'),(3,'site.logo','Site Logo','','','image',3,'Site'),(4,'site.google_analytics_tracking_id','Google Analytics Tracking ID',NULL,'','text',4,'Site'),(5,'admin.bg_image','Admin Background Image','','','image',5,'Admin'),(6,'admin.title','Admin Title','Motawer','','text',1,'Admin'),(7,'admin.description','Admin Description','Welcome to Motawer. It always seems impossible until it\'s done.','','text',2,'Admin'),(8,'admin.loader','Admin Loader','settings\\July2018\\hpIdRvwRU5QA0Rec6SFV.png','','image',3,'Admin'),(9,'admin.icon_image','Admin Icon Image','settings\\July2018\\efzzTp5JSW2ZC4pckEQs.png','','image',4,'Admin'),(10,'admin.google_analytics_client_id','Google Analytics Client ID (used for admin dashboard)',NULL,'','text',1,'Admin');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `translations`
--

DROP TABLE IF EXISTS `translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `translations`
--

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
INSERT INTO `translations` VALUES (1,'data_types','display_name_singular',5,'pt','Post','2018-06-26 01:07:34','2018-06-26 01:07:34'),(2,'data_types','display_name_singular',6,'pt','Página','2018-06-26 01:07:34','2018-06-26 01:07:34'),(3,'data_types','display_name_singular',1,'pt','Utilizador','2018-06-26 01:07:34','2018-06-26 01:07:34'),(4,'data_types','display_name_singular',4,'pt','Categoria','2018-06-26 01:07:35','2018-06-26 01:07:35'),(5,'data_types','display_name_singular',2,'pt','Menu','2018-06-26 01:07:35','2018-06-26 01:07:35'),(6,'data_types','display_name_singular',3,'pt','Função','2018-06-26 01:07:35','2018-06-26 01:07:35'),(7,'data_types','display_name_plural',5,'pt','Posts','2018-06-26 01:07:35','2018-06-26 01:07:35'),(8,'data_types','display_name_plural',6,'pt','Páginas','2018-06-26 01:07:35','2018-06-26 01:07:35'),(9,'data_types','display_name_plural',1,'pt','Utilizadores','2018-06-26 01:07:35','2018-06-26 01:07:35'),(10,'data_types','display_name_plural',4,'pt','Categorias','2018-06-26 01:07:35','2018-06-26 01:07:35'),(11,'data_types','display_name_plural',2,'pt','Menus','2018-06-26 01:07:35','2018-06-26 01:07:35'),(12,'data_types','display_name_plural',3,'pt','Funções','2018-06-26 01:07:35','2018-06-26 01:07:35'),(13,'categories','slug',1,'pt','categoria-1','2018-06-26 01:07:35','2018-06-26 01:07:35'),(14,'categories','name',1,'pt','Categoria 1','2018-06-26 01:07:36','2018-06-26 01:07:36'),(15,'categories','slug',2,'pt','categoria-2','2018-06-26 01:07:36','2018-06-26 01:07:36'),(16,'categories','name',2,'pt','Categoria 2','2018-06-26 01:07:36','2018-06-26 01:07:36'),(17,'pages','title',1,'pt','Olá Mundo','2018-06-26 01:07:36','2018-06-26 01:07:36'),(18,'pages','slug',1,'pt','ola-mundo','2018-06-26 01:07:36','2018-06-26 01:07:36'),(19,'pages','body',1,'pt','<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>','2018-06-26 01:07:36','2018-06-26 01:07:36'),(20,'menu_items','title',1,'pt','Painel de Controle','2018-06-26 01:07:36','2018-06-26 01:07:36'),(21,'menu_items','title',2,'pt','Media','2018-06-26 01:07:36','2018-06-26 01:07:36'),(22,'menu_items','title',12,'pt','Publicações','2018-06-26 01:07:36','2018-06-26 01:07:36'),(23,'menu_items','title',3,'pt','Utilizadores','2018-06-26 01:07:36','2018-06-26 01:07:36'),(24,'menu_items','title',11,'pt','Categorias','2018-06-26 01:07:36','2018-06-26 01:07:36'),(25,'menu_items','title',13,'pt','Páginas','2018-06-26 01:07:36','2018-06-26 01:07:36'),(26,'menu_items','title',4,'pt','Funções','2018-06-26 01:07:37','2018-06-26 01:07:37'),(27,'menu_items','title',5,'pt','Ferramentas','2018-06-26 01:07:37','2018-06-26 01:07:37'),(28,'menu_items','title',6,'pt','Menus','2018-06-26 01:07:37','2018-06-26 01:07:37'),(29,'menu_items','title',7,'pt','Base de dados','2018-06-26 01:07:37','2018-06-26 01:07:37'),(30,'menu_items','title',10,'pt','Configurações','2018-06-26 01:07:37','2018-06-26 01:07:37');
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_roles` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `user_roles_user_id_index` (`user_id`),
  KEY `user_roles_role_id_index` (`role_id`),
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Admin','admin@admin.com','users/default.png','$2y$10$BkfUIiMfa9ZOK51ju/ACnOwDGXycoGSSQ.61zH6rRbVOGP2IOJ11q','kbUIYJMLN3ophRZABRdbKbBgWkNXYhgnKVyVRPLSHSNsqbMdptOeAyIcC51s',NULL,'2018-06-26 01:07:24','2018-06-26 01:07:24');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-04 20:33:06
