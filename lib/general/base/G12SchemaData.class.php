<?php

//////////////////////////////////////////////////////////////////////////////////
//
//	Auto Generated Classes - Please do NOT Modify
//
//////////////////////////////////////////////////////////////////////////////////


class BaseAta_client
{
   const SCHEMA = '
   {
      "namespace": "tobe.avro",
      "type": "record",
      "name": "ata_client",
      "fields": [
         {"name": "client_id", "type": "int(11) [PRIMARY_KEY]", "optional": "NO"},
         {"name": "last_name", "type": "varchar(45)", "optional": "YES"},
         {"name": "first_name", "type": "varchar(45)", "optional": "YES"},
         {"name": "address", "type": "varchar(45)", "optional": "YES"},
         {"name": "city", "type": "varchar(45)", "optional": "YES"},
         {"name": "postal_code", "type": "varchar(6)", "optional": "YES"},
         {"name": "home_phone", "type": "varchar(11)", "optional": "YES"},
         {"name": "business_phone", "type": "varchar(11)", "optional": "YES"},
         {"name": "email", "type": "varchar(200)", "optional": "YES"},
         {"name": "password", "type": "varchar(70)", "optional": "YES"},
         {"name": "password_hint", "type": "varchar(45)", "optional": "YES"},
         {"name": "password_hint_answer", "type": "varchar(45)", "optional": "YES"},
         {"name": "uuid", "type": "varchar(45)", "optional": "YES"}
      ],
      "Primary_key": "client_id"
   }';

   const PRIMARY_KEY = "client_id";
   const TABLE_NAME = "ata_client";
   const CLASS_NAME = "AtaClient";
   const CLIENT_ID = "client_id";
   const LAST_NAME = "last_name";
   const FIRST_NAME = "first_name";
   const ADDRESS = "address";
   const CITY = "city";
   const POSTAL_CODE = "postal_code";
   const HOME_PHONE = "home_phone";
   const BUSINESS_PHONE = "business_phone";
   const EMAIL = "email";
   const PASSWORD = "password";
   const PASSWORD_HINT = "password_hint";
   const PASSWORD_HINT_ANSWER = "password_hint_answer";
   const UUID = "uuid";

   private static $params = array('client_id'=>NULL, 'last_name'=>NULL, 'first_name'=>NULL, 'address'=>NULL, 'city'=>NULL, 'postal_code'=>NULL, 'home_phone'=>NULL, 'business_phone'=>NULL, 'email'=>NULL, 'password'=>NULL, 'password_hint'=>NULL, 'password_hint_answer'=>NULL, 'uuid'=>NULL);

   public final static function getParams()
   {
      return self::$params;
   }
   
}

class BaseAta_event
{
   const SCHEMA = '
   {
      "namespace": "tobe.avro",
      "type": "record",
      "name": "ata_event",
      "fields": [
         {"name": "event_id", "type": "int(11) [PRIMARY_KEY]", "optional": "NO"},
         {"name": "event_name", "type": "varchar(45)", "optional": "NO"},
         {"name": "event_description", "type": "varchar(1024)", "optional": "NO"},
         {"name": "event_date_time", "type": "datetime", "optional": "NO"},
         {"name": "content", "type": "longtext", "optional": "YES"}
      ],
      "Primary_key": "event_id"
   }';

   const PRIMARY_KEY = "event_id";
   const TABLE_NAME = "ata_event";
   const CLASS_NAME = "AtaEvent";
   const EVENT_ID = "event_id";
   const EVENT_NAME = "event_name";
   const EVENT_DESCRIPTION = "event_description";
   const EVENT_DATE_TIME = "event_date_time";
   const CONTENT = "content";

   private static $params = array('event_id'=>NULL, 'event_name'=>NULL, 'event_description'=>NULL, 'event_date_time'=>NULL, 'content'=>NULL);

   public final static function getParams()
   {
      return self::$params;
   }
   
}

class BaseAta_event_has_ata_client
{
   const SCHEMA = '
   {
      "namespace": "tobe.avro",
      "type": "record",
      "name": "ata_event_has_ata_client",
      "fields": [
         {"name": "event_id", "type": "int(11) [PRIMARY_KEY]", "optional": "NO"},
         {"name": "client_id", "type": "int(11) [PRIMARY_KEY]", "optional": "NO"}
      ],
      "Primary_key": "client_id"
   }';

   const PRIMARY_KEY = "client_id";
   const TABLE_NAME = "ata_event_has_ata_client";
   const CLASS_NAME = "AtaEventHasAtaClient";
   const EVENT_ID = "event_id";
   const CLIENT_ID = "client_id";

   private static $params = array('event_id'=>NULL, 'client_id'=>NULL);

   public final static function getParams()
   {
      return self::$params;
   }
   
}

class BaseAta_lesson
{
   const SCHEMA = '
   {
      "namespace": "tobe.avro",
      "type": "record",
      "name": "ata_lesson",
      "fields": [
         {"name": "lesson_id", "type": "int(11) [PRIMARY_KEY]", "optional": "NO"},
         {"name": "category", "type": "varchar(45)", "optional": "NO"},
         {"name": "name", "type": "varchar(45)", "optional": "NO"},
         {"name": "lesson_pro", "type": "varchar(45)", "optional": "NO"},
         {"name": "lesson_cost", "type": "varchar(45)", "optional": "YES"},
         {"name": "content", "type": "longtext", "optional": "YES"}
      ],
      "Primary_key": "lesson_id"
   }';

   const PRIMARY_KEY = "lesson_id";
   const TABLE_NAME = "ata_lesson";
   const CLASS_NAME = "AtaLesson";
   const LESSON_ID = "lesson_id";
   const CATEGORY = "category";
   const NAME = "name";
   const LESSON_PRO = "lesson_pro";
   const LESSON_COST = "lesson_cost";
   const CONTENT = "content";

   private static $params = array('lesson_id'=>NULL, 'category'=>NULL, 'name'=>NULL, 'lesson_pro'=>NULL, 'lesson_cost'=>NULL, 'content'=>NULL);

   public final static function getParams()
   {
      return self::$params;
   }
   
}

class BaseAta_lesson_has_ata_client
{
   const SCHEMA = '
   {
      "namespace": "tobe.avro",
      "type": "record",
      "name": "ata_lesson_has_ata_client",
      "fields": [
         {"name": "lesson_id", "type": "int(11) [PRIMARY_KEY]", "optional": "NO"},
         {"name": "client_id", "type": "int(11) [PRIMARY_KEY]", "optional": "NO"}
      ],
      "Primary_key": "client_id"
   }';

   const PRIMARY_KEY = "client_id";
   const TABLE_NAME = "ata_lesson_has_ata_client";
   const CLASS_NAME = "AtaLessonHasAtaClient";
   const LESSON_ID = "lesson_id";
   const CLIENT_ID = "client_id";

   private static $params = array('lesson_id'=>NULL, 'client_id'=>NULL);

   public final static function getParams()
   {
      return self::$params;
   }
   
}

class BaseAta_program
{
   const SCHEMA = '
   {
      "namespace": "tobe.avro",
      "type": "record",
      "name": "ata_program",
      "fields": [
         {"name": "program_id", "type": "int(11) [PRIMARY_KEY]", "optional": "NO"},
         {"name": "program_name", "type": "varchar(45)", "optional": "NO"},
         {"name": "program_description", "type": "varchar(1024)", "optional": "NO"},
         {"name": "start_date", "type": "date", "optional": "YES"},
         {"name": "end_date", "type": "date", "optional": "YES"},
         {"name": "start_time", "type": "time", "optional": "YES"},
         {"name": "end_time", "type": "time", "optional": "YES"},
         {"name": "days", "type": "varchar(64)", "optional": "YES"},
         {"name": "cost", "type": "varchar(64)", "optional": "YES"},
         {"name": "content", "type": "longtext", "optional": "YES"},
         {"name": "ata_program_category_id", "type": "int(10) unsigned", "optional": "NO"}
      ],
      "Primary_key": "program_id"
   }';

   const PRIMARY_KEY = "program_id";
   const TABLE_NAME = "ata_program";
   const CLASS_NAME = "AtaProgram";
   const PROGRAM_ID = "program_id";
   const PROGRAM_NAME = "program_name";
   const PROGRAM_DESCRIPTION = "program_description";
   const START_DATE = "start_date";
   const END_DATE = "end_date";
   const START_TIME = "start_time";
   const END_TIME = "end_time";
   const DAYS = "days";
   const COST = "cost";
   const CONTENT = "content";
   const ATA_PROGRAM_CATEGORY_ID = "ata_program_category_id";

   private static $params = array('program_id'=>NULL, 'program_name'=>NULL, 'program_description'=>NULL, 'start_date'=>NULL, 'end_date'=>NULL, 'start_time'=>NULL, 'end_time'=>NULL, 'days'=>NULL, 'cost'=>NULL, 'content'=>NULL, 'ata_program_category_id'=>NULL);

   public final static function getParams()
   {
      return self::$params;
   }
   
}

class BaseAta_program_category
{
   const SCHEMA = '
   {
      "namespace": "tobe.avro",
      "type": "record",
      "name": "ata_program_category",
      "fields": [
         {"name": "ata_program_category_id", "type": "int(10) unsigned [PRIMARY_KEY]", "optional": "NO"},
         {"name": "name", "type": "varchar(45)", "optional": "NO"},
         {"name": "content", "type": "longtext", "optional": "NO"}
      ],
      "Primary_key": "ata_program_category_id"
   }';

   const PRIMARY_KEY = "ata_program_category_id";
   const TABLE_NAME = "ata_program_category";
   const CLASS_NAME = "AtaProgramCategory";
   const ATA_PROGRAM_CATEGORY_ID = "ata_program_category_id";
   const NAME = "name";
   const CONTENT = "content";

   private static $params = array('ata_program_category_id'=>NULL, 'name'=>NULL, 'content'=>NULL);

   public final static function getParams()
   {
      return self::$params;
   }
   
}

class BaseAta_program_has_ata_client
{
   const SCHEMA = '
   {
      "namespace": "tobe.avro",
      "type": "record",
      "name": "ata_program_has_ata_client",
      "fields": [
         {"name": "ata_program_program_id", "type": "int(11) [PRIMARY_KEY]", "optional": "NO"},
         {"name": "ata_client_client_id", "type": "int(11) [PRIMARY_KEY]", "optional": "NO"}
      ],
      "Primary_key": "ata_client_client_id"
   }';

   const PRIMARY_KEY = "ata_client_client_id";
   const TABLE_NAME = "ata_program_has_ata_client";
   const CLASS_NAME = "AtaProgramHasAtaClient";
   const ATA_PROGRAM_PROGRAM_ID = "ata_program_program_id";
   const ATA_CLIENT_CLIENT_ID = "ata_client_client_id";

   private static $params = array('ata_program_program_id'=>NULL, 'ata_client_client_id'=>NULL);

   public final static function getParams()
   {
      return self::$params;
   }
   
}

class BaseMtc_court
{
   const SCHEMA = '
   {
      "namespace": "tobe.avro",
      "type": "record",
      "name": "mtc_court",
      "fields": [
         {"name": "court_id", "type": "int(11) [PRIMARY_KEY]", "optional": "NO"},
         {"name": "court_name", "type": "varchar(45)", "optional": "NO"},
         {"name": "court_type", "type": "varchar(45)", "optional": "NO"}
      ],
      "Primary_key": "court_id"
   }';

   const PRIMARY_KEY = "court_id";
   const TABLE_NAME = "mtc_court";
   const CLASS_NAME = "MtcCourt";
   const COURT_ID = "court_id";
   const COURT_NAME = "court_name";
   const COURT_TYPE = "court_type";

   private static $params = array('court_id'=>NULL, 'court_name'=>NULL, 'court_type'=>NULL);

   public final static function getParams()
   {
      return self::$params;
   }
   
}

class BaseMtc_court_reservation
{
   const SCHEMA = '
   {
      "namespace": "tobe.avro",
      "type": "record",
      "name": "mtc_court_reservation",
      "fields": [
         {"name": "court_reservation_id", "type": "int(11) [PRIMARY_KEY]", "optional": "NO"},
         {"name": "court_id", "type": "int(11)", "optional": "NO"},
         {"name": "date", "type": "date", "optional": "NO"},
         {"name": "start_time", "type": "time", "optional": "NO"},
         {"name": "end_time", "type": "time", "optional": "NO"},
         {"name": "member1_id", "type": "int(11) [PRIMARY_KEY]", "optional": "NO"},
         {"name": "member2_id", "type": "int(11)", "optional": "YES"},
         {"name": "member3_id", "type": "int(11)", "optional": "YES"},
         {"name": "member4_id", "type": "int(11)", "optional": "YES"},
         {"name": "notes", "type": "varchar(255)", "optional": "YES"}
      ],
      "Primary_key": "member1_id"
   }';

   const PRIMARY_KEY = "member1_id";
   const TABLE_NAME = "mtc_court_reservation";
   const CLASS_NAME = "MtcCourtReservation";
   const COURT_RESERVATION_ID = "court_reservation_id";
   const COURT_ID = "court_id";
   const DATE = "date";
   const START_TIME = "start_time";
   const END_TIME = "end_time";
   const MEMBER1_ID = "member1_id";
   const MEMBER2_ID = "member2_id";
   const MEMBER3_ID = "member3_id";
   const MEMBER4_ID = "member4_id";
   const NOTES = "notes";

   private static $params = array('court_reservation_id'=>NULL, 'court_id'=>NULL, 'date'=>NULL, 'start_time'=>NULL, 'end_time'=>NULL, 'member1_id'=>NULL, 'member2_id'=>NULL, 'member3_id'=>NULL, 'member4_id'=>NULL, 'notes'=>NULL);

   public final static function getParams()
   {
      return self::$params;
   }
   
}

class BaseMtc_email_confirm
{
   const SCHEMA = '
   {
      "namespace": "tobe.avro",
      "type": "record",
      "name": "mtc_email_confirm",
      "fields": [
         {"name": "emai_confirm_id", "type": "int(10) unsigned [PRIMARY_KEY]", "optional": "NO"},
         {"name": "confirmation_code", "type": "varchar(32)", "optional": "NO"},
         {"name": "member_id", "type": "int(11)", "optional": "NO"}
      ],
      "Primary_key": "emai_confirm_id"
   }';

   const PRIMARY_KEY = "emai_confirm_id";
   const TABLE_NAME = "mtc_email_confirm";
   const CLASS_NAME = "MtcEmailConfirm";
   const EMAI_CONFIRM_ID = "emai_confirm_id";
   const CONFIRMATION_CODE = "confirmation_code";
   const MEMBER_ID = "member_id";

   private static $params = array('emai_confirm_id'=>NULL, 'confirmation_code'=>NULL, 'member_id'=>NULL);

   public final static function getParams()
   {
      return self::$params;
   }
   
}

class BaseMtc_event
{
   const SCHEMA = '
   {
      "namespace": "tobe.avro",
      "type": "record",
      "name": "mtc_event",
      "fields": [
         {"name": "event_id", "type": "int(11) [PRIMARY_KEY]", "optional": "NO"},
         {"name": "event_name", "type": "varchar(45)", "optional": "NO"},
         {"name": "event_description", "type": "varchar(1024)", "optional": "NO"},
         {"name": "event_date_time", "type": "datetime", "optional": "NO"},
         {"name": "content", "type": "longtext", "optional": "YES"}
      ],
      "Primary_key": "event_id"
   }';

   const PRIMARY_KEY = "event_id";
   const TABLE_NAME = "mtc_event";
   const CLASS_NAME = "MtcEvent";
   const EVENT_ID = "event_id";
   const EVENT_NAME = "event_name";
   const EVENT_DESCRIPTION = "event_description";
   const EVENT_DATE_TIME = "event_date_time";
   const CONTENT = "content";

   private static $params = array('event_id'=>NULL, 'event_name'=>NULL, 'event_description'=>NULL, 'event_date_time'=>NULL, 'content'=>NULL);

   public final static function getParams()
   {
      return self::$params;
   }
   
}

class BaseMtc_event_has_mtc_member
{
   const SCHEMA = '
   {
      "namespace": "tobe.avro",
      "type": "record",
      "name": "mtc_event_has_mtc_member",
      "fields": [
         {"name": "event_id", "type": "int(11) [PRIMARY_KEY]", "optional": "NO"},
         {"name": "member_id", "type": "int(11) [PRIMARY_KEY]", "optional": "NO"}
      ],
      "Primary_key": "member_id"
   }';

   const PRIMARY_KEY = "member_id";
   const TABLE_NAME = "mtc_event_has_mtc_member";
   const CLASS_NAME = "MtcEventHasMtcMember";
   const EVENT_ID = "event_id";
   const MEMBER_ID = "member_id";

   private static $params = array('event_id'=>NULL, 'member_id'=>NULL);

   public final static function getParams()
   {
      return self::$params;
   }
   
}

class BaseMtc_group
{
   const SCHEMA = '
   {
      "namespace": "tobe.avro",
      "type": "record",
      "name": "mtc_group",
      "fields": [
         {"name": "group_id", "type": "int(11) [PRIMARY_KEY]", "optional": "NO"},
         {"name": "group_name", "type": "varchar(45)", "optional": "NO"},
         {"name": "group_type", "type": "int(11)", "optional": "NO"},
         {"name": "primary_member_id", "type": "int(11)", "optional": "NO"}
      ],
      "Primary_key": "group_id"
   }';

   const PRIMARY_KEY = "group_id";
   const TABLE_NAME = "mtc_group";
   const CLASS_NAME = "MtcGroup";
   const GROUP_ID = "group_id";
   const GROUP_NAME = "group_name";
   const GROUP_TYPE = "group_type";
   const PRIMARY_MEMBER_ID = "primary_member_id";

   private static $params = array('group_id'=>NULL, 'group_name'=>NULL, 'group_type'=>NULL, 'primary_member_id'=>NULL);

   public final static function getParams()
   {
      return self::$params;
   }
   
}

class BaseMtc_member
{
   const SCHEMA = '
   {
      "namespace": "tobe.avro",
      "type": "record",
      "name": "mtc_member",
      "fields": [
         {"name": "member_id", "type": "int(11) [PRIMARY_KEY]", "optional": "NO"},
         {"name": "last_name", "type": "varchar(45)", "optional": "YES"},
         {"name": "first_name", "type": "varchar(45)", "optional": "YES"},
         {"name": "address", "type": "varchar(45)", "optional": "YES"},
         {"name": "city", "type": "varchar(45)", "optional": "YES"},
         {"name": "postal_code", "type": "varchar(6)", "optional": "YES"},
         {"name": "home_phone", "type": "varchar(11)", "optional": "YES"},
         {"name": "business_phone", "type": "varchar(11)", "optional": "YES"},
         {"name": "email", "type": "varchar(200)", "optional": "YES"},
         {"name": "password", "type": "varchar(70)", "optional": "YES"},
         {"name": "password_hint", "type": "varchar(45)", "optional": "YES"},
         {"name": "password_hint_answer", "type": "varchar(45)", "optional": "YES"},
         {"name": "uuid", "type": "varchar(45)", "optional": "YES"}
      ],
      "Primary_key": "member_id"
   }';

   const PRIMARY_KEY = "member_id";
   const TABLE_NAME = "mtc_member";
   const CLASS_NAME = "MtcMember";
   const MEMBER_ID = "member_id";
   const LAST_NAME = "last_name";
   const FIRST_NAME = "first_name";
   const ADDRESS = "address";
   const CITY = "city";
   const POSTAL_CODE = "postal_code";
   const HOME_PHONE = "home_phone";
   const BUSINESS_PHONE = "business_phone";
   const EMAIL = "email";
   const PASSWORD = "password";
   const PASSWORD_HINT = "password_hint";
   const PASSWORD_HINT_ANSWER = "password_hint_answer";
   const UUID = "uuid";

   private static $params = array('member_id'=>NULL, 'last_name'=>NULL, 'first_name'=>NULL, 'address'=>NULL, 'city'=>NULL, 'postal_code'=>NULL, 'home_phone'=>NULL, 'business_phone'=>NULL, 'email'=>NULL, 'password'=>NULL, 'password_hint'=>NULL, 'password_hint_answer'=>NULL, 'uuid'=>NULL);

   public final static function getParams()
   {
      return self::$params;
   }
   
}

class BaseMtc_member_has_mtc_group
{
   const SCHEMA = '
   {
      "namespace": "tobe.avro",
      "type": "record",
      "name": "mtc_member_has_mtc_group",
      "fields": [
         {"name": "member_id", "type": "int(11) [PRIMARY_KEY]", "optional": "NO"},
         {"name": "group_id", "type": "int(11) [PRIMARY_KEY]", "optional": "NO"}
      ],
      "Primary_key": "group_id"
   }';

   const PRIMARY_KEY = "group_id";
   const TABLE_NAME = "mtc_member_has_mtc_group";
   const CLASS_NAME = "MtcMemberHasMtcGroup";
   const MEMBER_ID = "member_id";
   const GROUP_ID = "group_id";

   private static $params = array('member_id'=>NULL, 'group_id'=>NULL);

   public final static function getParams()
   {
      return self::$params;
   }
   
}

class BaseMtc_notice
{
   const SCHEMA = '
   {
      "namespace": "tobe.avro",
      "type": "record",
      "name": "mtc_notice",
      "fields": [
         {"name": "notice_id", "type": "int(11) [PRIMARY_KEY]", "optional": "NO"},
         {"name": "title", "type": "varchar(45)", "optional": "NO"},
         {"name": "category", "type": "varchar(45)", "optional": "YES"},
         {"name": "content", "type": "longtext", "optional": "YES"}
      ],
      "Primary_key": "notice_id"
   }';

   const PRIMARY_KEY = "notice_id";
   const TABLE_NAME = "mtc_notice";
   const CLASS_NAME = "MtcNotice";
   const NOTICE_ID = "notice_id";
   const TITLE = "title";
   const CATEGORY = "category";
   const CONTENT = "content";

   private static $params = array('notice_id'=>NULL, 'title'=>NULL, 'category'=>NULL, 'content'=>NULL);

   public final static function getParams()
   {
      return self::$params;
   }
   
}

class BaseMtc_user_session
{
   const SCHEMA = '
   {
      "namespace": "tobe.avro",
      "type": "record",
      "name": "mtc_user_session",
      "fields": [
         {"name": "user_session_id", "type": "int(10) unsigned [PRIMARY_KEY]", "optional": "NO"},
         {"name": "member_id", "type": "int(11)", "optional": "NO"},
         {"name": "ukey", "type": "varchar(32)", "optional": "YES"},
         {"name": "ip_address", "type": "varchar(30)", "optional": "YES"},
         {"name": "device", "type": "varchar(200)", "optional": "YES"},
         {"name": "modified", "type": "datetime", "optional": "YES"}
      ],
      "Primary_key": "user_session_id"
   }';

   const PRIMARY_KEY = "user_session_id";
   const TABLE_NAME = "mtc_user_session";
   const CLASS_NAME = "MtcUserSession";
   const USER_SESSION_ID = "user_session_id";
   const MEMBER_ID = "member_id";
   const UKEY = "ukey";
   const IP_ADDRESS = "ip_address";
   const DEVICE = "device";
   const MODIFIED = "modified";

   private static $params = array('user_session_id'=>NULL, 'member_id'=>NULL, 'ukey'=>NULL, 'ip_address'=>NULL, 'device'=>NULL, 'modified'=>NULL);

   public final static function getParams()
   {
      return self::$params;
   }
   
}

