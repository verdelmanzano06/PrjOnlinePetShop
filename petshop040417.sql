set echo on

connect system/amakal
--You may change the password  'amakal' according to your computer's oracle password.

drop user petshop cascade;
create user petshop identified by kankaloo;
grant connect, resource to petshop;
alter user petshop default tablespace users temporary tablespace temp account unlock;

connect petshop/kankaloo;


CREATE TABLE  "ADMIN" 
   (	"ADMIN_USERNAME" VARCHAR2(40), 
	"ADMIN_PASSWORD" VARCHAR2(50), 
	 PRIMARY KEY ("ADMIN_USERNAME") ENABLE
   )
/




CREATE TABLE  "ANIMALS" 
   (	"ANIMAL_ID" NUMBER(5,0), 
	"ANIMAL_NAME" VARCHAR2(200), 
	 CONSTRAINT "ANIMALS_PK" PRIMARY KEY ("ANIMAL_ID") ENABLE
   )
/

CREATE OR REPLACE TRIGGER  "BI_ANIMALS" 
  before insert on "ANIMALS"               
  for each row  
begin   
    select "ANIMALS_SEQ".nextval into :NEW.ANIMAL_ID from dual; 
end; 

/
ALTER TRIGGER  "BI_ANIMALS" ENABLE
/





CREATE TABLE  "CATEGORIES" 
   (	"CATEGORY_ID" NUMBER(5,0), 
	"CATEGORY_NAME" VARCHAR2(200), 
	 CONSTRAINT "CATEGORIES_PK" PRIMARY KEY ("CATEGORY_ID") ENABLE
   )
/

CREATE OR REPLACE TRIGGER  "BI_CATEGORIES" 
  before insert on "CATEGORIES"               
  for each row  
begin   
    select "CATEGORIES_SEQ".nextval into :NEW.CATEGORY_ID from dual; 
end; 

/
ALTER TRIGGER  "BI_CATEGORIES" ENABLE
/




CREATE TABLE  "CUSTOMER" 
   (	"CUST_ID" NUMBER, 
	"CUST_USER" VARCHAR2(40) NOT NULL ENABLE, 
	"CUST_PASS" VARCHAR2(20) NOT NULL ENABLE, 
	"CUST_EMAIL" VARCHAR2(50) NOT NULL ENABLE, 
	"CUST_LNAME" VARCHAR2(50) NOT NULL ENABLE, 
	"CUST_FNAME" VARCHAR2(50) NOT NULL ENABLE, 
	"CUST_MI" VARCHAR2(3), 
	"CUST_CONTACT" VARCHAR2(20), 
	"CUST_CONTACT2" VARCHAR2(20), 
	"CUST_BDATE" VARCHAR2(10), 
	"CUST_GENDER" VARCHAR2(6), 
	"CUST_REGION" VARCHAR2(30), 
	"CUST_CITY" VARCHAR2(30), 
	"CUST_ZIP" VARCHAR2(10), 
	"CUST_IMAGE" VARCHAR2(200), 
	 PRIMARY KEY ("CUST_ID") ENABLE
   )
/

CREATE OR REPLACE TRIGGER  "customer_on_insert" 
  BEFORE INSERT ON customer
  FOR EACH ROW
BEGIN
  SELECT customer_sequence.nextval
  INTO :new.cust_id
  FROM dual;
END;
/
ALTER TRIGGER  "customer_on_insert" ENABLE
/



CREATE TABLE  "FEEDBACKS" 
   (	"F_ID" NUMBER(7,0), 
	"F_FULLNAME" VARCHAR2(4000), 
	"F_EMAIL" VARCHAR2(4000), 
	"F_MESSAGE" VARCHAR2(4000), 
	"F_DATE" VARCHAR2(40), 
	 CONSTRAINT "FEEDBACKS_PK" PRIMARY KEY ("F_ID") ENABLE
   )
/

CREATE OR REPLACE TRIGGER  "BI_FEEDBACKS" 
  before insert on "FEEDBACKS"               
  for each row  
begin   
    select "FEEDBACKS_SEQ".nextval into :NEW.F_ID from dual; 
end; 

/
ALTER TRIGGER  "BI_FEEDBACKS" ENABLE
/



CREATE TABLE  "GALLERY" 
   (	"GALLERY_ID" NUMBER(5,0), 
	"GALLERY_IMG" VARCHAR2(300), 
	"GALLERY_DESC" VARCHAR2(300), 
	 CONSTRAINT "GALLERY_PK" PRIMARY KEY ("GALLERY_ID") ENABLE
   )
/

CREATE OR REPLACE TRIGGER  "BI_GALLERY" 
  before insert on "GALLERY"               
  for each row  
begin   
    select "GALLERY_SEQ".nextval into :NEW.GALLERY_ID from dual; 
end; 

/
ALTER TRIGGER  "BI_GALLERY" ENABLE
/



CREATE TABLE  "PRODUCTS" 
   (	"PROD_ID" NUMBER(5,0), 
	"PROD_CAT" NUMBER(5,0), 
	"PROD_ANIMAL" NUMBER(5,0), 
	"PROD_TITLE" VARCHAR2(200), 
	"PROD_PRICE" NUMBER(10,2), 
	"PROD_DESC" VARCHAR2(1000), 
	"PROD_KEYWORDS" VARCHAR2(500), 
	"PROD_IMAGE" BLOB, 
	 CONSTRAINT "PRODUCTS_PK" PRIMARY KEY ("PROD_ID") ENABLE
   )
/

CREATE OR REPLACE TRIGGER  "BI_PRODUCTS" 
  before insert on "PRODUCTS"               
  for each row  
begin   
    select "PRODUCTS_SEQ".nextval into :NEW.PROD_ID from dual; 
end;

/
ALTER TRIGGER  "BI_PRODUCTS" ENABLE
/



CREATE UNIQUE INDEX  "ANIMALS_PK" ON  "ANIMALS" ("ANIMAL_ID")
/

CREATE UNIQUE INDEX  "CATEGORIES_PK" ON  "CATEGORIES" ("CATEGORY_ID")
/

CREATE UNIQUE INDEX  "FEEDBACKS_PK" ON  "FEEDBACKS" ("F_ID")
/

CREATE UNIQUE INDEX  "GALLERY_PK" ON  "GALLERY" ("GALLERY_ID")
/

CREATE UNIQUE INDEX  "PRODUCTS_PK" ON  "PRODUCTS" ("PROD_ID")
/

CREATE UNIQUE INDEX  "SYS_C004499" ON  "ADMIN" ("ADMIN_USERNAME")

CREATE UNIQUE INDEX  "SYS_C004505" ON  "CUSTOMER" ("CUST_ID")
/

CREATE SEQUENCE   "ANIMALS_SEQ"  MINVALUE 1 MAXVALUE 999999999999999999999999999 INCREMENT BY 1 START WITH 41 CACHE 20 NOORDER  NOCYCLE
/

CREATE SEQUENCE   "CATEGORIES_SEQ"  MINVALUE 1 MAXVALUE 999999999999999999999999999 INCREMENT BY 1 START WITH 41 CACHE 20 NOORDER  NOCYCLE
/

CREATE SEQUENCE   "CUSTOMER_SEQUENCE"  MINVALUE 1 MAXVALUE 999999999999999999999999999 INCREMENT BY 1 START WITH 41 CACHE 20 NOORDER  NOCYCLE
/

CREATE SEQUENCE   "FEEDBACKS_SEQ"  MINVALUE 1 MAXVALUE 999999999999999999999999999 INCREMENT BY 1 START WITH 41 CACHE 20 NOORDER  NOCYCLE
/

 CREATE SEQUENCE   "GALLERY_SEQ"  MINVALUE 1 MAXVALUE 999999999999999999999999999 INCREMENT BY 1 START WITH 21 CACHE 20 NOORDER  NOCYCLE
/

 CREATE SEQUENCE   "PRODUCTS_SEQ"  MINVALUE 1 MAXVALUE 999999999999999999999999999 INCREMENT BY 1 START WITH 41 CACHE 20 NOORDER  NOCYCLE
/
/*
--Customer Table
create table customer (
	cust_id number, primary key,,
	cust_user varchar2(40) not null,
	cust_pass varchar2(20) not null,
	cust_email varchar2(50) not null,
	cust_lname varchar2(50) not null,
	cust_fname varchar2(50) not null,
	cust_mi varchar2(3),
	cust_contact varchar2(20),
	cust_contact2 varchar2(20),
	cust_bdate varchar(10),
	cust_gender varchar(6),
	cust_region varchar(30),
	cust_city varchar(30),
	cust_zip varchar(10),
	cust_image varchar(200)
);

CREATE SEQUENCE customer_sequence;

CREATE OR REPLACE TRIGGER "customer_on_insert"
  BEFORE INSERT ON customer
  FOR EACH ROW
BEGIN
  SELECT customer_sequence.nextval
  INTO :new.cust_id
  FROM dual;
END;
/
ALTER TRIGGER  "customer_on_insert" ENABLE
/

--End of Customer Table

create table pets (
	pet_id number primary key,
	pet_title varchar2(150) not null,
	pet_desc varchar2(400),
	pet_image varchar(200),
	pet_stockqty number(5,0),
	pet_price number(10,2)
);

create table cart_item (
	citem_id number primary key,
	citem_totalcost number(10,2),
	citem_qty number(5,0)
);

create table cart (
	cart_id number primary key,
	cart_totalcost number(10,2)
);

create table payment (
	payment_id number primary key,
	payment_totalamount number(10,2),
	payment_shipfee number(10,2)
);

CREATE TRIGGER "BI_customer"
  BEFORE INSERT ON "CUSTOMER"
  FOR EACH ROW
BEGIN
  SELECT "CUSTOMERS_SEQ".nextval
    INTO :new.new_cust_id
    FROM dual;
END;

*/