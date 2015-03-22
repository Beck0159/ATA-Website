<?php

//////////////////////////////////////////////////////////////////////////////////
//
//	Auto Generated Classes - Please do NOT Modify
//
//////////////////////////////////////////////////////////////////////////////////



include_once "general/GenericData.class.php"; 

/**
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

*/
class AtaClient extends Generic
{
   public function __construct()
   {
      //Use the ata_client table
      parent::__construct("AtaClient", BaseAta_client::TABLE_NAME, 
      BaseAta_client::PRIMARY_KEY, BaseAta_client::SCHEMA);
   }

   public function getSchema($postArray=NULL)
   {
      return $this->makeSchemaArray();
   }

   public function create($postArray)
   {
      //This array specifies the field names that are required to execute the method
      $params = BaseAta_client::getParams();
      return $this->insertRow($postArray, $params);
   }

   public function getList($postArray=NULL)
   {
      return $this->selectItems();
   }

   public function get($postArray)
   {
      return $this->getItemById($postArray);
   }
}

/**
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

*/
class AtaEvent extends Generic
{
   public function __construct()
   {
      //Use the ata_event table
      parent::__construct("AtaEvent", BaseAta_event::TABLE_NAME, 
      BaseAta_event::PRIMARY_KEY, BaseAta_event::SCHEMA);
   }

   public function getSchema($postArray=NULL)
   {
      return $this->makeSchemaArray();
   }

   public function create($postArray)
   {
      //This array specifies the field names that are required to execute the method
      $params = BaseAta_event::getParams();
      return $this->insertRow($postArray, $params);
   }

   public function getList($postArray=NULL)
   {
      return $this->selectItems();
   }

   public function get($postArray)
   {
      return $this->getItemById($postArray);
   }
}

/**
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

*/
class AtaEventHasAtaClient extends Generic
{
   public function __construct()
   {
      //Use the ata_event_has_ata_client table
      parent::__construct("AtaEventHasAtaClient", BaseAta_event_has_ata_client::TABLE_NAME, 
      BaseAta_event_has_ata_client::PRIMARY_KEY, BaseAta_event_has_ata_client::SCHEMA);
   }

   public function getSchema($postArray=NULL)
   {
      return $this->makeSchemaArray();
   }

   public function create($postArray)
   {
      //This array specifies the field names that are required to execute the method
      $params = BaseAta_event_has_ata_client::getParams();
      return $this->insertRow($postArray, $params);
   }

   public function getList($postArray=NULL)
   {
      return $this->selectItems();
   }

   public function get($postArray)
   {
      return $this->getItemById($postArray);
   }
}

/**
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

*/
class AtaLesson extends Generic
{
   public function __construct()
   {
      //Use the ata_lesson table
      parent::__construct("AtaLesson", BaseAta_lesson::TABLE_NAME, 
      BaseAta_lesson::PRIMARY_KEY, BaseAta_lesson::SCHEMA);
   }

   public function getSchema($postArray=NULL)
   {
      return $this->makeSchemaArray();
   }

   public function create($postArray)
   {
      //This array specifies the field names that are required to execute the method
      $params = BaseAta_lesson::getParams();
      return $this->insertRow($postArray, $params);
   }

   public function getList($postArray=NULL)
   {
      return $this->selectItems();
   }

   public function get($postArray)
   {
      return $this->getItemById($postArray);
   }
}

/**
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

*/
class AtaLessonHasAtaClient extends Generic
{
   public function __construct()
   {
      //Use the ata_lesson_has_ata_client table
      parent::__construct("AtaLessonHasAtaClient", BaseAta_lesson_has_ata_client::TABLE_NAME, 
      BaseAta_lesson_has_ata_client::PRIMARY_KEY, BaseAta_lesson_has_ata_client::SCHEMA);
   }

   public function getSchema($postArray=NULL)
   {
      return $this->makeSchemaArray();
   }

   public function create($postArray)
   {
      //This array specifies the field names that are required to execute the method
      $params = BaseAta_lesson_has_ata_client::getParams();
      return $this->insertRow($postArray, $params);
   }

   public function getList($postArray=NULL)
   {
      return $this->selectItems();
   }

   public function get($postArray)
   {
      return $this->getItemById($postArray);
   }
}

/**
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

*/
class AtaProgram extends Generic
{
   public function __construct()
   {
      //Use the ata_program table
      parent::__construct("AtaProgram", BaseAta_program::TABLE_NAME, 
      BaseAta_program::PRIMARY_KEY, BaseAta_program::SCHEMA);
   }

   public function getSchema($postArray=NULL)
   {
      return $this->makeSchemaArray();
   }

   public function create($postArray)
   {
      //This array specifies the field names that are required to execute the method
      $params = BaseAta_program::getParams();
      return $this->insertRow($postArray, $params);
   }

   public function getList($postArray=NULL)
   {
      return $this->selectItems();
   }

   public function get($postArray)
   {
      return $this->getItemById($postArray);
   }
}

/**
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

*/
class AtaProgramCategory extends Generic
{
   public function __construct()
   {
      //Use the ata_program_category table
      parent::__construct("AtaProgramCategory", BaseAta_program_category::TABLE_NAME, 
      BaseAta_program_category::PRIMARY_KEY, BaseAta_program_category::SCHEMA);
   }

   public function getSchema($postArray=NULL)
   {
      return $this->makeSchemaArray();
   }

   public function create($postArray)
   {
      //This array specifies the field names that are required to execute the method
      $params = BaseAta_program_category::getParams();
      return $this->insertRow($postArray, $params);
   }

   public function getList($postArray=NULL)
   {
      return $this->selectItems();
   }

   public function get($postArray)
   {
      return $this->getItemById($postArray);
   }
}

/**
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

*/
class AtaProgramHasAtaClient extends Generic
{
   public function __construct()
   {
      //Use the ata_program_has_ata_client table
      parent::__construct("AtaProgramHasAtaClient", BaseAta_program_has_ata_client::TABLE_NAME, 
      BaseAta_program_has_ata_client::PRIMARY_KEY, BaseAta_program_has_ata_client::SCHEMA);
   }

   public function getSchema($postArray=NULL)
   {
      return $this->makeSchemaArray();
   }

   public function create($postArray)
   {
      //This array specifies the field names that are required to execute the method
      $params = BaseAta_program_has_ata_client::getParams();
      return $this->insertRow($postArray, $params);
   }

   public function getList($postArray=NULL)
   {
      return $this->selectItems();
   }

   public function get($postArray)
   {
      return $this->getItemById($postArray);
   }
}

/**
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

*/
class MtcCourt extends Generic
{
   public function __construct()
   {
      //Use the mtc_court table
      parent::__construct("MtcCourt", BaseMtc_court::TABLE_NAME, 
      BaseMtc_court::PRIMARY_KEY, BaseMtc_court::SCHEMA);
   }

   public function getSchema($postArray=NULL)
   {
      return $this->makeSchemaArray();
   }

   public function create($postArray)
   {
      //This array specifies the field names that are required to execute the method
      $params = BaseMtc_court::getParams();
      return $this->insertRow($postArray, $params);
   }

   public function getList($postArray=NULL)
   {
      return $this->selectItems();
   }

   public function get($postArray)
   {
      return $this->getItemById($postArray);
   }
}

/**
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

*/
class MtcCourtReservation extends Generic
{
   public function __construct()
   {
      //Use the mtc_court_reservation table
      parent::__construct("MtcCourtReservation", BaseMtc_court_reservation::TABLE_NAME, 
      BaseMtc_court_reservation::PRIMARY_KEY, BaseMtc_court_reservation::SCHEMA);
   }

   public function getSchema($postArray=NULL)
   {
      return $this->makeSchemaArray();
   }

   public function create($postArray)
   {
      //This array specifies the field names that are required to execute the method
      $params = BaseMtc_court_reservation::getParams();
      return $this->insertRow($postArray, $params);
   }

   public function getList($postArray=NULL)
   {
      return $this->selectItems();
   }

   public function get($postArray)
   {
      return $this->getItemById($postArray);
   }
}

/**
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

*/
class MtcEmailConfirm extends Generic
{
   public function __construct()
   {
      //Use the mtc_email_confirm table
      parent::__construct("MtcEmailConfirm", BaseMtc_email_confirm::TABLE_NAME, 
      BaseMtc_email_confirm::PRIMARY_KEY, BaseMtc_email_confirm::SCHEMA);
   }

   public function getSchema($postArray=NULL)
   {
      return $this->makeSchemaArray();
   }

   public function create($postArray)
   {
      //This array specifies the field names that are required to execute the method
      $params = BaseMtc_email_confirm::getParams();
      return $this->insertRow($postArray, $params);
   }

   public function getList($postArray=NULL)
   {
      return $this->selectItems();
   }

   public function get($postArray)
   {
      return $this->getItemById($postArray);
   }
}

/**
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

*/
class MtcEvent extends Generic
{
   public function __construct()
   {
      //Use the mtc_event table
      parent::__construct("MtcEvent", BaseMtc_event::TABLE_NAME, 
      BaseMtc_event::PRIMARY_KEY, BaseMtc_event::SCHEMA);
   }

   public function getSchema($postArray=NULL)
   {
      return $this->makeSchemaArray();
   }

   public function create($postArray)
   {
      //This array specifies the field names that are required to execute the method
      $params = BaseMtc_event::getParams();
      return $this->insertRow($postArray, $params);
   }

   public function getList($postArray=NULL)
   {
      return $this->selectItems();
   }

   public function get($postArray)
   {
      return $this->getItemById($postArray);
   }
}

/**
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

*/
class MtcEventHasMtcMember extends Generic
{
   public function __construct()
   {
      //Use the mtc_event_has_mtc_member table
      parent::__construct("MtcEventHasMtcMember", BaseMtc_event_has_mtc_member::TABLE_NAME, 
      BaseMtc_event_has_mtc_member::PRIMARY_KEY, BaseMtc_event_has_mtc_member::SCHEMA);
   }

   public function getSchema($postArray=NULL)
   {
      return $this->makeSchemaArray();
   }

   public function create($postArray)
   {
      //This array specifies the field names that are required to execute the method
      $params = BaseMtc_event_has_mtc_member::getParams();
      return $this->insertRow($postArray, $params);
   }

   public function getList($postArray=NULL)
   {
      return $this->selectItems();
   }

   public function get($postArray)
   {
      return $this->getItemById($postArray);
   }
}

/**
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

*/
class MtcGroup extends Generic
{
   public function __construct()
   {
      //Use the mtc_group table
      parent::__construct("MtcGroup", BaseMtc_group::TABLE_NAME, 
      BaseMtc_group::PRIMARY_KEY, BaseMtc_group::SCHEMA);
   }

   public function getSchema($postArray=NULL)
   {
      return $this->makeSchemaArray();
   }

   public function create($postArray)
   {
      //This array specifies the field names that are required to execute the method
      $params = BaseMtc_group::getParams();
      return $this->insertRow($postArray, $params);
   }

   public function getList($postArray=NULL)
   {
      return $this->selectItems();
   }

   public function get($postArray)
   {
      return $this->getItemById($postArray);
   }
}

/**
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

*/
class MtcMember extends Generic
{
   public function __construct()
   {
      //Use the mtc_member table
      parent::__construct("MtcMember", BaseMtc_member::TABLE_NAME, 
      BaseMtc_member::PRIMARY_KEY, BaseMtc_member::SCHEMA);
   }

   public function getSchema($postArray=NULL)
   {
      return $this->makeSchemaArray();
   }

   public function create($postArray)
   {
      //This array specifies the field names that are required to execute the method
      $params = BaseMtc_member::getParams();
      return $this->insertRow($postArray, $params);
   }

   public function getList($postArray=NULL)
   {
      return $this->selectItems();
   }

   public function get($postArray)
   {
      return $this->getItemById($postArray);
   }
}

/**
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

*/
class MtcMemberHasMtcGroup extends Generic
{
   public function __construct()
   {
      //Use the mtc_member_has_mtc_group table
      parent::__construct("MtcMemberHasMtcGroup", BaseMtc_member_has_mtc_group::TABLE_NAME, 
      BaseMtc_member_has_mtc_group::PRIMARY_KEY, BaseMtc_member_has_mtc_group::SCHEMA);
   }

   public function getSchema($postArray=NULL)
   {
      return $this->makeSchemaArray();
   }

   public function create($postArray)
   {
      //This array specifies the field names that are required to execute the method
      $params = BaseMtc_member_has_mtc_group::getParams();
      return $this->insertRow($postArray, $params);
   }

   public function getList($postArray=NULL)
   {
      return $this->selectItems();
   }

   public function get($postArray)
   {
      return $this->getItemById($postArray);
   }
}

/**
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

*/
class MtcNotice extends Generic
{
   public function __construct()
   {
      //Use the mtc_notice table
      parent::__construct("MtcNotice", BaseMtc_notice::TABLE_NAME, 
      BaseMtc_notice::PRIMARY_KEY, BaseMtc_notice::SCHEMA);
   }

   public function getSchema($postArray=NULL)
   {
      return $this->makeSchemaArray();
   }

   public function create($postArray)
   {
      //This array specifies the field names that are required to execute the method
      $params = BaseMtc_notice::getParams();
      return $this->insertRow($postArray, $params);
   }

   public function getList($postArray=NULL)
   {
      return $this->selectItems();
   }

   public function get($postArray)
   {
      return $this->getItemById($postArray);
   }
}

/**
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

*/
class MtcUserSession extends Generic
{
   public function __construct()
   {
      //Use the mtc_user_session table
      parent::__construct("MtcUserSession", BaseMtc_user_session::TABLE_NAME, 
      BaseMtc_user_session::PRIMARY_KEY, BaseMtc_user_session::SCHEMA);
   }

   public function getSchema($postArray=NULL)
   {
      return $this->makeSchemaArray();
   }

   public function create($postArray)
   {
      //This array specifies the field names that are required to execute the method
      $params = BaseMtc_user_session::getParams();
      return $this->insertRow($postArray, $params);
   }

   public function getList($postArray=NULL)
   {
      return $this->selectItems();
   }

   public function get($postArray)
   {
      return $this->getItemById($postArray);
   }
}
