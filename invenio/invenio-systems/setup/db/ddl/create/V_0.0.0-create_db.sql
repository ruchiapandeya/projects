create table vol_surface (
id integer(10) not null auto_increment,
type varchar(200) not null,
description varchar(45),
primary key (id)
) engine=innodb;

create table instrument (
id integer(10) not null auto_increment,
name varchar(200) not null,
code varchar(200),
portfolio  varchar(200), 
maturity varchar(200), 
start_value decimal(10,2),
end_value decimal(10,2),
multiple decimal(10,2),
primary key (id)
)engine=innodb;

ALTER TABLE `instrument` 
ADD UNIQUE INDEX `name_UNIQUE` (`name` ASC) ;

create table vol_dump(
id integer(10) not null auto_increment,
product varchar(200),
vol_surface_id integer(10),
instrument_id  integer(10), 
start decimal(10,2),
step decimal(10,2),
extrapolate varchar(1), 
multiple decimal(10,2),
code varchar(200),
future_ref varchar(200),
options_ref  varchar(200),
expiry_date date,
primary key (id),
foreign key (vol_surface_id) references vol_surface(id),
foreign key (instrument_id) references instrument(id)
) engine=innodb;

create table bloomberg_product(
id integer(10 ) not null auto_increment,
bloomberg_product_name varchar(200),
bloomberg_product_desc varchar(200),
primary key (id)
)engine=innodb;

ALTER TABLE `bloomberg_product` CHANGE COLUMN `bloomberg_product_name` `bloomberg_product_name` VARCHAR(200) NOT NULL  
, ADD UNIQUE INDEX `bloomberg_product_name_UNIQUE` (`bloomberg_product_name` ASC) ;

CREATE TABLE product (			
id INTEGER (10) AUTO_INCREMENT,		
exchange INTEGER (10),
invenio_product INTEGER (10),
bloomberg_product INTEGER (10),
reuters_product INTEGER (10),
xtraders_exchange INTEGER (10),
rjo_exchange INTEGER (10),
murex_exchange INTEGER (10),
options_unl_contr INTEGER (10),
futures_unl_contr INTEGER (10),
options_xtrader INTEGER (10),
futures_xtrader INTEGER (10),
options_rjo INTEGER (10),
futures_rjo INTEGER (10),
dollar_conversion DECIMAL(15,6),
price_unit_quote INTEGER (10),
currency_quote VARCHAR(200),
qty_unit_quote VARCHAR(200),
lots_to_mt DECIMAL(15,6),
exchange_exercise_type INTEGER (10),
atm_convention_for_expiry INTEGER (10),
cash_physical_settlement INTEGER (10),
contract_month_futf CHAR(1),
contract_month_futg CHAR(1),
contract_month_futh CHAR(1),
contract_month_futj CHAR(1),
contract_month_futk CHAR(1),
contract_month_futm CHAR(1),
contract_month_futn CHAR(1),
contract_month_futq CHAR(1),
contract_month_futu CHAR(1),
contract_month_futv CHAR(1),
contract_month_futx CHAR(1),
contract_month_futz CHAR(1),
contract_month_optf CHAR(1),
contract_month_optg CHAR(1),
contract_month_opth CHAR(1),
contract_month_optj CHAR(1),
contract_month_optk CHAR(1),
contract_month_optm CHAR(1),
contract_month_optn CHAR(1),
contract_month_optq CHAR(1),
contract_month_optu CHAR(1),
contract_month_optv CHAR(1),
contract_month_optx CHAR(1),
contract_month_optz CHAR(1),
PRIMARY KEY(id)
)ENGINE=INNODB;


create table reuters_product(
id integer(10 ) not null auto_increment,
reuters_product_name varchar(200),
reuters_product_desc varchar(200),
primary key (id)
)engine=innodb;

ALTER TABLE `reuters_product` CHANGE COLUMN `reuters_product_name` `reuters_product_name` VARCHAR(200) NOT NULL  
, ADD UNIQUE INDEX `reuters_product_name_UNIQUE` (`reuters_product_name` ASC) ;

create table invenio_product(
id integer(10 ) not null auto_increment,
invenio_product_name varchar(200),
invenio_product_desc varchar(200),
primary key (id)
)engine=innodb;

ALTER TABLE `invenio_product` CHANGE COLUMN `invenio_product_name` `invenio_product_name` VARCHAR(200) NOT NULL  
, ADD UNIQUE INDEX `invenio_product_name_UNIQUE` (`invenio_product_name` ASC) ;

create table exchange(
id integer(10 ) not null auto_increment,
exchange_name varchar(200),
exchange_desc varchar(200),
primary key (id)
)engine=innodb;

ALTER TABLE `exchange` CHANGE COLUMN `exchange_name` `exchange_name` VARCHAR(200) NOT NULL  
, ADD UNIQUE INDEX `exchange_name_UNIQUE` (`exchange_name` ASC) ;

create table murex_exchange(
id integer(10 ) not null auto_increment,
murex_exchange_name varchar(200),
murex_exchange_desc varchar(200),
primary key (id)
)engine=innodb;

ALTER TABLE `murex_exchange` CHANGE COLUMN `murex_exchange_name` `murex_exchange_name` VARCHAR(200) NOT NULL  
, ADD UNIQUE INDEX `murex_exchange_name_UNIQUE` (`murex_exchange_name` ASC) ;

create table rjo_exchange(
id integer(10 ) not null auto_increment,
rjo_exchange_name varchar(200),
rjo_exchange_desc varchar(200),
primary key (id)
)engine=innodb;

ALTER TABLE `rjo_exchange` CHANGE COLUMN `rjo_exchange_name` `rjo_exchange_name` VARCHAR(200) NOT NULL  
, ADD UNIQUE INDEX `rjo_exchange_name_UNIQUE` (`rjo_exchange_name` ASC) ;

create table xtraders_exchange(
id integer(10 ) not null auto_increment,
xtraders_exchange_name varchar(200),
xtraders_exchange_desc varchar(200),
primary key (id)
)engine=innodb;

ALTER TABLE `xtraders_exchange` CHANGE COLUMN `xtraders_exchange_name` `xtraders_exchange_name` VARCHAR(200) NOT NULL  
, ADD UNIQUE INDEX `xtraders_exchange_name_UNIQUE` (`xtraders_exchange_name` ASC) ;

create table futures_rjo(
id integer(10 ) not null auto_increment,
futures_name varchar(200),
futures_desc varchar(200),
primary key (id)
)engine=innodb;

ALTER TABLE `futures_rjo` CHANGE COLUMN `futures_name` `futures_name` VARCHAR(200) NOT NULL  
, ADD UNIQUE INDEX `futures_name_UNIQUE` (`futures_name` ASC) ;

create table options_rjo(
id integer(10 ) not null auto_increment,
options_name varchar(200),
options_desc varchar(200),
primary key (id)
)engine=innodb;

ALTER TABLE `options_rjo` CHANGE COLUMN `options_name` `options_name` VARCHAR(200) NOT NULL  
, ADD UNIQUE INDEX `options_name_UNIQUE` (`options_name` ASC) ;

create table futures_unl_contr(
id integer(10 ) not null auto_increment,
futures_name varchar(200),
futures_desc varchar(200),
primary key (id)
)engine=innodb;

ALTER TABLE `futures_unl_contr` CHANGE COLUMN `futures_name` `futures_name` VARCHAR(200) NOT NULL  
, ADD UNIQUE INDEX `futures_name_UNIQUE` (`futures_name` ASC) ;

create table options_unl_contr(
id integer(10 ) not null auto_increment,
options_name varchar(200),
options_desc varchar(200),
primary key (id)
)engine=innodb;

ALTER TABLE `options_unl_contr` CHANGE COLUMN `options_name` `options_name` VARCHAR(200) NOT NULL  
, ADD UNIQUE INDEX `options_name_UNIQUE` (`options_name` ASC) ;

create table futures_xtrader(
id integer(10 ) not null auto_increment,
futures_name varchar(200),
futures_desc varchar(200),
primary key (id)
)engine=innodb;

ALTER TABLE `futures_xtrader` CHANGE COLUMN `futures_name` `futures_name` VARCHAR(200) NOT NULL  
, ADD UNIQUE INDEX `futures_name_UNIQUE` (`futures_name` ASC) ;

create table options_xtrader(
id integer(10 ) not null auto_increment,
options_name varchar(200),
options_desc varchar(200),
primary key (id)
)engine=innodb;

ALTER TABLE `options_xtrader` CHANGE COLUMN `options_name` `options_name` VARCHAR(200) NOT NULL  
, ADD UNIQUE INDEX `options_name_UNIQUE` (`options_name` ASC) ;

CREATE TABLE frequency (
id INTEGER(10) not null AUTO_INCREMENT,
frequency_type VARCHAR(200),
PRIMARY KEY(id)
) ENGINE=INNODB;

ALTER TABLE `frequency` CHANGE COLUMN `frequency_type` `frequency_type` VARCHAR(200) NOT NULL  
, ADD UNIQUE INDEX `frequency_type_UNIQUE` (`frequency_type` ASC) ;

CREATE TABLE accumulation_frequency (
id INTEGER(10) not null AUTO_INCREMENT,
frequency_type VARCHAR(200),
PRIMARY KEY(id)
) ENGINE=INNODB;

ALTER TABLE `accumulation_frequency` CHANGE COLUMN `frequency_type` `frequency_type` VARCHAR(200) NOT NULL  
, ADD UNIQUE INDEX `frequency_type_UNIQUE` (`frequency_type` ASC) ;

CREATE TABLE averaging_frequency (
id INTEGER(10) not null AUTO_INCREMENT,
frequency_type VARCHAR(200),
PRIMARY KEY(id)
) ENGINE=INNODB;

ALTER TABLE `averaging_frequency` CHANGE COLUMN `frequency_type` `frequency_type` VARCHAR(200) NOT NULL  
, ADD UNIQUE INDEX `frequency_type_UNIQUE` (`frequency_type` ASC) ;

CREATE TABLE quanto_type (
id INTEGER(10) not null AUTO_INCREMENT,
quanto_type VARCHAR(200),
PRIMARY KEY(id)
) ENGINE=INNODB;

ALTER TABLE `quanto_type` CHANGE COLUMN `quanto_type` `quanto_type` VARCHAR(200) NOT NULL  
, ADD UNIQUE INDEX `quanto_type_UNIQUE` (`quanto_type` ASC) ;

CREATE TABLE derivative_type (
id INTEGER(10) not null AUTO_INCREMENT,
derivative_type VARCHAR(200),
PRIMARY KEY(id)
) ENGINE=INNODB;

ALTER TABLE `derivative_type` CHANGE COLUMN `derivative_type` `derivative_type` VARCHAR(200) NOT NULL  
, ADD UNIQUE INDEX `derivative_type_UNIQUE` (`derivative_type` ASC) ;

CREATE TABLE action_type (
id INTEGER(10) not null AUTO_INCREMENT,
action_type VARCHAR(200),
PRIMARY KEY(id)
) ENGINE=INNODB;

ALTER TABLE `action_type` CHANGE COLUMN `action_type` `action_type` VARCHAR(200) NOT NULL  
, ADD UNIQUE INDEX `action_type_UNIQUE` (`action_type` ASC) ;

create table vol_surface_greeks(
id integer(10) not null auto_increment,
name varchar(200),
description varchar(200),
primary key (id)
)engine=innodb;

create table intrapolation_technique(
id integer(10) not null auto_increment,
name varchar(200),
description varchar(200),
primary key (id)
)engine=innodb;

ALTER TABLE `intrapolation_technique` CHANGE COLUMN `name` `name` VARCHAR(200) NOT NULL  
, ADD UNIQUE INDEX `name_UNIQUE` (`name` ASC) ;

create table extrapolation_technique(
id integer(10) not null auto_increment,
name varchar(200),
description varchar(200),
primary key (id)
)engine=innodb;

ALTER TABLE `extrapolation_technique` CHANGE COLUMN `name` `name` VARCHAR(200) NOT NULL  
, ADD UNIQUE INDEX `name_UNIQUE` (`name` ASC) ;

DROP TABLE IF EXISTS access;
create table access(
id integer(10) not null auto_increment,
name varchar(200),
description varchar(200),
primary key (id)
)engine=innodb;

ALTER TABLE `access` CHANGE COLUMN `name` `name` VARCHAR(200) NOT NULL  
, ADD UNIQUE INDEX `name_UNIQUE` (`name` ASC) ;

create table execution_type(
id integer(10) not null auto_increment,
name varchar(200),
description varchar(200),
primary key (id)
)engine=innodb;

ALTER TABLE `execution_type` CHANGE COLUMN `name` `name` VARCHAR(200) NOT NULL  
, ADD UNIQUE INDEX `name_UNIQUE` (`name` ASC) ;

create table brokerage_callsign(
id integer(10) not null auto_increment,
name varchar(200),
description varchar(200),
primary key (id)
)engine=innodb;

ALTER TABLE `brokerage_callsign` CHANGE COLUMN `name` `name` VARCHAR(200) NOT NULL  
, ADD UNIQUE INDEX `name_UNIQUE` (`name` ASC) ;

create table exchange_callsign(
id integer(10) not null auto_increment,
name varchar(200),
description varchar(200),
primary key (id)
)engine=innodb;

ALTER TABLE `exchange_callsign` CHANGE COLUMN `name` `name` VARCHAR(200) NOT NULL  
, ADD UNIQUE INDEX `name_UNIQUE` (`name` ASC) ;

create table execution_broker(
id integer(10) not null auto_increment,
name varchar(200),
description varchar(200),
primary key (id)
)engine=innodb;

ALTER TABLE `execution_broker` CHANGE COLUMN `name` `name` VARCHAR(200) NOT NULL  
, ADD UNIQUE INDEX `name_UNIQUE` (`name` ASC) ;

create table clearing_broker(
id integer(10) not null auto_increment,
name varchar(200),
description varchar(200),
primary key (id)
)engine=innodb;

ALTER TABLE `clearing_broker` CHANGE COLUMN `name` `name` VARCHAR(200) NOT NULL  
, ADD UNIQUE INDEX `name_UNIQUE` (`name` ASC) ;

CREATE TABLE deal_ticket (
id INTEGER(10) not null AUTO_INCREMENT,
trade_id	integer(10) not null,
parent_trade_id	integer(10) not null,
portfolio	 VARCHAR(200),
sub_portfolio	VARCHAR(200),
strategy_name	VARCHAR(200),
product_id INTEGER(10),
sub_product1 VARCHAR(200),
sub_product2 VARCHAR(200),
derivative_type_id	INTEGER(10),
strike	DECIMAL(15,6),
action_type_id	INTEGER(10),
original_lots	DECIMAL(15,2),
original_premium	DECIMAL(15,6),
vol_override	CHAR(1),
vol_override_value	DECIMAL(15,6),
correl_override	CHAR(1),
correl_override_value	DECIMAL(15,6),
counterparty_parent	VARCHAR(200),
counterparty_bu	VARCHAR(200),
counterparty_entity	VARCHAR(200),
execution_broker	VARCHAR(200),
clearing_broker	VARCHAR(200),
channel VARCHAR(200),
brokerage_rate	VARCHAR(200),
brokerage_comment	VARCHAR(200),
ref_futures_price	DECIMAL(15,6),
barrier1	DECIMAL(15,6),
barrier2	DECIMAL(15,6),
barrier1obs_start DATE,
barrier2obs_start DATE,
barrier1obs_end_date	DATE,
barrier2obs_end_date	DATE,
rebate	DECIMAL(15,6),
quanto_type_id	INTEGER(10), 
averaging_frequency_id	INTEGER(10), 
averaging_start_date	DATE,
averaging_end_date	DATE,
average_till_now	DECIMAL(15,6),
accumulation_frequency_id	INTEGER(10), 
accumulation_start_date	DATE,
accumulation_end_date	DATE,
accumulation_till_now	DECIMAL(10,2),
active_lots	DECIMAL(10,2),
exercised_lots	DECIMAL(10,2),
abandoned_lots	DECIMAL(10,2),
got_assigned_lots	DECIMAL(10,2),
date_time DATETIME,
system_date DATETIME,
created_by VARCHAR(200),
modified_time DATETIME,	
reconed_with_clearer	CHAR(1),
reconed_completed_by	VARCHAR(200),
recon_date	DATE,
recon_time_stamp	DATETIME,
brokerage_accrued	DECIMAL(10,2),
brokerage_paid	CHAR(1),
expiry_processed	CHAR(1),
version_ref	VARCHAR(50) not null, 
version_number	INTEGER(10) not null, 
version_timestamp timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP not null,
version_by VARCHAR(200) not null,
PRIMARY KEY(id)
)ENGINE=INNODB;

ALTER TABLE deal_ticket ADD FOREIGN KEY (accumulation_frequency_id) REFERENCES accumulation_frequency(id);
ALTER TABLE deal_ticket ADD FOREIGN KEY (averaging_frequency_id) REFERENCES averaging_frequency(id);
ALTER TABLE deal_ticket ADD FOREIGN KEY (quanto_type_id) REFERENCES quanto_type(id);
ALTER TABLE deal_ticket ADD FOREIGN KEY (derivative_type_id) REFERENCES derivative_type(id);
ALTER TABLE deal_ticket ADD FOREIGN KEY (action_type_id) REFERENCES action_type(id);
ALTER TABLE deal_ticket ADD FOREIGN KEY (product_id) REFERENCES product(id);


CREATE TABLE `atm_convention_for_expiry` (
  `id` int(11) NOT NULL auto_increment,
  `atm_convention_for_expiry_name` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB ;

ALTER TABLE `atm_convention_for_expiry` CHANGE COLUMN `atm_convention_for_expiry_name` `atm_convention_for_expiry_name` VARCHAR(255) NOT NULL  
, ADD UNIQUE INDEX `atm_convention_for_expiry_name_UNIQUE` (`atm_convention_for_expiry_name` ASC) ;

CREATE TABLE `cash_physical_settlement` (
  `id` int(11) NOT NULL auto_increment,
  `cash_physical_settlement_name` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB;

ALTER TABLE `cash_physical_settlement` CHANGE COLUMN `cash_physical_settlement_name` `cash_physical_settlement_name` VARCHAR(255) NOT NULL, ADD UNIQUE INDEX `cash_physical_settlement_name_UNIQUE` (`cash_physical_settlement_name` ASC) ;

CREATE TABLE `exchange_exercise_type` (
  `id` int(11) NOT NULL auto_increment,
  `exchange_exercise_type_name` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB;

ALTER TABLE `exchange_exercise_type` CHANGE COLUMN `exchange_exercise_type_name` `exchange_exercise_type_name` VARCHAR(255) NOT NULL, ADD UNIQUE INDEX `exchange_exercise_type_name_UNIQUE` (`exchange_exercise_type_name` ASC) ;

CREATE TABLE `future_contract` (
  `id` int(11) NOT NULL auto_increment,
  `first_delivery_day` datetime default NULL,
  `first_notice_day` datetime default NULL,
  `first_trading_day` datetime default NULL,
  `fut_id` varchar(255) default NULL,
  `future_settlement_reference_price` decimal(19,2) default NULL,
  `last_delivery_day` datetime default NULL,
  `last_trading_day` datetime default NULL,
  `invenio_product` int(11) default NULL,
  PRIMARY KEY  (`id`),
  KEY `FK_fut_cont_inv_prod` (`invenio_product`),
  CONSTRAINT `FK_fut_cont_inv_prod` FOREIGN KEY (`invenio_product`) REFERENCES `invenio_product` (`id`)
) ENGINE=InnoDB;

ALTER TABLE `future_contract` CHANGE COLUMN `fut_id` `fut_id` VARCHAR(255) NOT NULL  , CHANGE COLUMN `last_trading_day` `last_trading_day` DATETIME NOT NULL  , CHANGE COLUMN `invenio_product` `invenio_product` INT(11) NOT NULL  
, ADD UNIQUE INDEX `fut_id_UNIQUE` (`fut_id` ASC) ;
 

CREATE  TABLE `option_static_data` (
  `id` INT NOT NULL ,
  `option_id` VARCHAR(20) NOT NULL ,
  `first_trading_day` DATETIME NOT NULL ,
  `last_trading_day` DATETIME NOT NULL ,
  `fut_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `option_id_UNIQUE` (`option_id` ASC) );

ALTER TABLE `option_static_data` CHANGE COLUMN `fut_id` `fut_id` INT(11) NULL  , 
  ADD CONSTRAINT `fut_id3`
  FOREIGN KEY (`fut_id` )
  REFERENCES `future_contract` (`id` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION
, ADD INDEX `fut_id_idx` (`fut_id` ASC) ;

ALTER TABLE `option_static_data` ADD COLUMN `fut_ref_at_expiry` VARCHAR(45) NULL  AFTER `last_trading_day` ;

CREATE TABLE `future_prices` (
  `id` int(11) NOT NULL auto_increment,
  `fut_id` varchar(255) default NULL,
  `future_date` datetime default NULL,
  `price` decimal(19,2) default NULL,
  invenio_product INTEGER (10),
  PRIMARY KEY  (`id`),
  KEY `FK_fut_price_inv_prod` (`invenio_product`),
  CONSTRAINT `FK_fut_price_inv_prod` FOREIGN KEY (`invenio_product`) REFERENCES `invenio_product` (`id`)
) ENGINE=InnoDB; 
ALTER TABLE `future_prices` ADD UNIQUE INDEX (fut_id, future_date);
ALTER TABLE `future_prices` CHANGE COLUMN `fut_id` `fut_id` INT NOT NULL  , CHANGE COLUMN `future_date` `future_date` DATETIME NOT NULL  , CHANGE COLUMN `price` `price` DECIMAL(19,2) NOT NULL  , 
  ADD CONSTRAINT `fut_id`
  FOREIGN KEY (`fut_id` )
  REFERENCES `future_contract` (`id` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION
, ADD INDEX `fut_id_idx` (`fut_id` ASC) ;

CREATE TABLE `inv_vol_param` (
  `id` int(11) NOT NULL auto_increment,
  `atm1p1` varchar(200) default NULL,
  `atm1p2` varchar(200) default NULL,
  `atm1p3` varchar(200) default NULL,
  `atm1p4` varchar(200) default NULL,
  `atm1p5` varchar(200) default NULL,
  `atm2p1` varchar(200) default NULL,
  `atm2p2` varchar(200) default NULL,
  `atm2p3` varchar(200) default NULL,
  `atm2p4` varchar(200) default NULL,
  `atm2p5` varchar(200) default NULL,
  `atm2p6` varchar(200) default NULL,
  `atm2p7` varchar(200) default NULL,
  `ending_strike_exch` decimal(19,2) default NULL,
  `ending_strike_inv` decimal(19,2) default NULL,
  `expiration_date` decimal(19,2) default NULL,
  `extrapolation_technique` decimal(19,2) default NULL,
  `intrapolation_technique` decimal(19,2) default NULL,
  `ladder_metadate_source` varchar(200) default NULL,
  `misc1p1` varchar(200) default NULL,
  `misc1p10` varchar(200) default NULL,
  `misc1p11` varchar(200) default NULL,
  `misc1p12` varchar(200) default NULL,
  `misc1p2` varchar(200) default NULL,
  `misc1p3` varchar(200) default NULL,
  `misc1p4` varchar(200) default NULL,
  `misc1p5` varchar(200) default NULL,
  `misc1p6` varchar(200) default NULL,
  `misc1p7` varchar(200) default NULL,
  `misc1p8` varchar(200) default NULL,
  `misc1p9` varchar(200) default NULL,
  `misc2p1` varchar(200) default NULL,
  `misc2p10` varchar(200) default NULL,
  `misc2p11` varchar(200) default NULL,
  `misc2p12` varchar(200) default NULL,
  `misc2p2` varchar(200) default NULL,
  `misc2p3` varchar(200) default NULL,
  `misc2p4` varchar(200) default NULL,
  `misc2p5` varchar(200) default NULL,
  `misc2p6` varchar(200) default NULL,
  `misc2p7` varchar(200) default NULL,
  `misc2p8` varchar(200) default NULL,
  `misc2p9` varchar(200) default NULL,
  `misc3p1` varchar(200) default NULL,
  `misc3p10` varchar(200) default NULL,
  `misc3p11` varchar(200) default NULL,
  `misc3p12` varchar(200) default NULL,
  `misc3p2` varchar(200) default NULL,
  `misc3p3` varchar(200) default NULL,
  `misc3p4` varchar(200) default NULL,
  `misc3p5` varchar(200) default NULL,
  `misc3p6` varchar(200) default NULL,
  `misc3p7` varchar(200) default NULL,
  `misc3p8` varchar(200) default NULL,
  `misc3p9` varchar(200) default NULL,
  `misc4p1` varchar(200) default NULL,
  `misc4p10` varchar(200) default NULL,
  `misc4p11` varchar(200) default NULL,
  `misc4p12` varchar(200) default NULL,
  `misc4p2` varchar(200) default NULL,
  `misc4p3` varchar(200) default NULL,
  `misc4p4` varchar(200) default NULL,
  `misc4p5` varchar(200) default NULL,
  `misc4p6` varchar(200) default NULL,
  `misc4p7` varchar(200) default NULL,
  `misc4p8` varchar(200) default NULL,
  `misc4p9` varchar(200) default NULL,
  `misc5p1` varchar(200) default NULL,
  `misc5p10` varchar(200) default NULL,
  `misc5p11` varchar(200) default NULL,
  `misc5p12` varchar(200) default NULL,
  `misc5p2` varchar(200) default NULL,
  `misc5p3` varchar(200) default NULL,
  `misc5p4` varchar(200) default NULL,
  `misc5p5` varchar(200) default NULL,
  `misc5p6` varchar(200) default NULL,
  `misc5p7` varchar(200) default NULL,
  `misc5p8` varchar(200) default NULL,
  `misc5p9` varchar(200) default NULL,
  `opt` varchar(200) default NULL,
  `starting_strike_exch` decimal(19,2) default NULL,
  `strike_jump_exch` decimal(19,2) default NULL,
  `strike_jump_inv` decimal(19,2) default NULL,
  `vol_pathp1` varchar(200) default NULL,
  `vol_pathp10` varchar(200) default NULL,
  `vol_pathp11` varchar(200) default NULL,
  `vol_pathp12` varchar(200) default NULL,
  `vol_pathp2` varchar(200) default NULL,
  `vol_pathp3` varchar(200) default NULL,
  `vol_pathp4` varchar(200) default NULL,
  `vol_pathp5` varchar(200) default NULL,
  `vol_pathp6` varchar(200) default NULL,
  `vol_pathp7` varchar(200) default NULL,
  `vol_pathp8` varchar(200) default NULL,
  `vol_pathp9` varchar(200) default NULL,
  `invenio_product` int(11) default NULL,
  `surface_type` int(11) default NULL,
  PRIMARY KEY  (`id`),
  KEY `FK_inv_vol_param_inv_prod` (`invenio_product`),
  KEY `FK_inv_vol_param_surtype` (`surface_type`),
  CONSTRAINT `FK_inv_vol_param_surtype` FOREIGN KEY (`surface_type`) REFERENCES `vol_surface` (`id`),
  CONSTRAINT `FK_inv_vol_param_inv_prod` FOREIGN KEY (`invenio_product`) REFERENCES `invenio_product` (`id`)
) ENGINE=InnoDB;  


CREATE TABLE `option_contract` (
  `id` int(11) NOT NULL auto_increment,
  `expiration_date` datetime default NULL,
  `first_trading_day` datetime default NULL,
  `last_trading_day` datetime default NULL,
  `opt_id` varchar(255) default NULL,
  `option_settlement_reference_price` decimal(19,2) default NULL,
  `invenio_product` int(11) default NULL,
  PRIMARY KEY  (`id`),
  KEY `FK_option_contract_inv_prod` (`invenio_product`),
  CONSTRAINT `FK_option_contract_inv_prod` FOREIGN KEY (`invenio_product`) REFERENCES `invenio_product` (`id`)
) ENGINE=InnoDB;

ALTER TABLE `option_contract` DROP FOREIGN KEY `FK_option_contract_inv_prod` ;
ALTER TABLE `option_contract` DROP COLUMN `invenio_product` , DROP COLUMN `option_settlement_reference_price` , DROP COLUMN `opt_id` , DROP COLUMN `last_trading_day` , DROP COLUMN `first_trading_day` , DROP COLUMN `expiration_date` , ADD COLUMN `option_name` VARCHAR(200) NOT NULL  AFTER `id` , ADD COLUMN `option_id1` VARCHAR(200) NULL  AFTER `option_name` , ADD COLUMN `option_id2` VARCHAR(200) NULL  AFTER `option_id1` , ADD COLUMN `sub_product1` VARCHAR(200) NULL  AFTER `option_id2` , ADD COLUMN `sub_product2` VARCHAR(200) NULL  AFTER `sub_product1` , ADD COLUMN `strike` DECIMAL(10,2) NULL  AFTER `sub_product2` , ADD COLUMN `derivative_type` INT NULL  AFTER `strike` , ADD COLUMN `vol_override` CHAR(1) NULL  AFTER `derivative_type` , ADD COLUMN `vol_override_val` VARCHAR(20) NULL  AFTER `vol_override` , ADD COLUMN `correl_override` CHAR(1) NULL  AFTER `vol_override_val` , ADD COLUMN `correl_override_val` VARCHAR(20) NULL  AFTER `correl_override` , ADD COLUMN `barrier1` VARCHAR(20) NULL  AFTER `correl_override_val` , ADD COLUMN `barrier2` VARCHAR(20) NULL  AFTER `barrier1` , ADD COLUMN `barrier1obs_start_date` DATETIME NULL  AFTER `barrier2` , ADD COLUMN `barrier1obs_end_date` DATETIME NULL  AFTER `barrier1obs_start_date` , ADD COLUMN `barrier2obs_start_date` DATETIME NULL  AFTER `barrier1obs_end_date` , ADD COLUMN `barrier2obs_end_date` DATETIME NULL  AFTER `barrier2obs_start_date` , ADD COLUMN `rebate` VARCHAR(20) NULL  AFTER `barrier2obs_end_date` , ADD COLUMN `quanto_type` INT NULL  AFTER `rebate` , ADD COLUMN `averaging_frequency` INT NULL  AFTER `quanto_type` , ADD COLUMN `averaging_start_date` DATETIME NULL  AFTER `averaging_frequency` , ADD COLUMN `averaging_end_date` DATETIME NULL  AFTER `averaging_start_date` , ADD COLUMN `average_till_now` VARCHAR(20) NULL  AFTER `averaging_end_date` , ADD COLUMN `accumulation_start_date` DATETIME NULL  AFTER `average_till_now` , ADD COLUMN `accumulation_end_date` DATETIME NULL  AFTER `accumulation_start_date` , ADD COLUMN `accumulation_frequency` INT NULL  AFTER `accumulation_end_date` , ADD COLUMN `accumulation_till_now` VARCHAR(20) NULL  AFTER `accumulation_frequency`
, ADD UNIQUE INDEX `option_name_UNIQUE` (`option_name` ASC)
, DROP INDEX `FK_option_contract_inv_prod` ;

ALTER TABLE `option_contract`
  ADD CONSTRAINT `derivative_type`
  FOREIGN KEY (`derivative_type` )
  REFERENCES `derivative_type` (`id` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
  ADD CONSTRAINT `averaging_frequency`
  FOREIGN KEY (`averaging_frequency` )
  REFERENCES `averaging_frequency` (`id` )
  ON DELETE NO ACTION  ON UPDATE NO ACTION,
  ADD CONSTRAINT `accumulation_frequency`
  FOREIGN KEY (`accumulation_frequency` )  REFERENCES `accumulation_frequency` (`id` )  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
  ADD CONSTRAINT `quanto_type`
  FOREIGN KEY (`quanto_type` )
  REFERENCES `quanto_type` (`id` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION
, ADD INDEX `derivative_type_idx` (`derivative_type` ASC)
, ADD INDEX `averaging_frequency_idx` (`averaging_frequency` ASC)
, ADD INDEX `accumulation_frequency_idx` (`accumulation_frequency` ASC)
, ADD INDEX `quanto_type_idx` (`quanto_type` ASC) ;

ALTER TABLE `option_contract` ADD COLUMN `maturity_date` DATETIME NULL  AFTER `accumulation_till_now` ;
 
ALTER TABLE `option_contract` CHANGE COLUMN `option_id1` `option_id1` INT NULL DEFAULT NULL  , CHANGE COLUMN `option_id2` `option_id2` INT NULL DEFAULT NULL  , CHANGE COLUMN `sub_product1` `sub_product1` INT NULL DEFAULT NULL  , CHANGE COLUMN `sub_product2` `sub_product2` INT NULL DEFAULT NULL  , 
  ADD CONSTRAINT `option_id1`
  FOREIGN KEY (`option_id1` )
  REFERENCES `option_static_data` (`id` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION, 
  ADD CONSTRAINT `option_id2`
  FOREIGN KEY (`option_id2` )
  REFERENCES `option_static_data` (`id` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION, 
  ADD CONSTRAINT `sub_product1`
  FOREIGN KEY (`sub_product1` )
  REFERENCES `invenio_product` (`id` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION, 
  ADD CONSTRAINT `sub_product2`
  FOREIGN KEY (`sub_product2` )
  REFERENCES `invenio_product` (`id` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION
, ADD INDEX `option_id1_idx` (`option_id1` ASC) 
, ADD INDEX `option_id2_idx` (`option_id2` ASC) 
, ADD INDEX `sub_product1_idx` (`sub_product1` ASC) 
, ADD INDEX `sub_product2_idx` (`sub_product2` ASC) ;

create table sub_portfolio(
id integer(10) not null auto_increment,
name varchar(200),
description varchar(200),
primary key (id)
)engine=innodb;

ALTER TABLE `sub_portfolio` CHANGE COLUMN `name` `name` VARCHAR(200) NOT NULL
, ADD UNIQUE INDEX `name_UNIQUE` (`name` ASC) ;

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL auto_increment,
  `portfolio_name` varchar(255) default NULL,
  `invenio_product` int(11) default NULL,
  PRIMARY KEY  (`id`),
  KEY `FK_portfolio_inv_prod` (`invenio_product`),
  CONSTRAINT `FK_portfolio_inv_prod` FOREIGN KEY (`invenio_product`) REFERENCES `invenio_product` (`id`)
) ENGINE=InnoDB; 

ALTER TABLE `portfolio` CHANGE COLUMN `portfolio_name` `portfolio_name` VARCHAR(255) NOT NULL  
, ADD UNIQUE INDEX `portfolio_name_UNIQUE` (`portfolio_name` ASC) ;

ALTER TABLE `portfolio` ADD COLUMN `sub_portfolio` INT NULL  AFTER `invenio_product` , 
  ADD CONSTRAINT `sub_portfolio`
  FOREIGN KEY (`sub_portfolio` )
  REFERENCES `sub_portfolio` (`id` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION
, ADD INDEX `sub_portfolio_idx` (`sub_portfolio` ASC) 
, DROP INDEX `portfolio_name_UNIQUE` ;

ALTER TABLE `portfolio` DROP FOREIGN KEY `sub_portfolio` ;
ALTER TABLE `portfolio` CHANGE COLUMN `sub_portfolio` `sub_portfolio` INT(11) NOT NULL  , 
  ADD CONSTRAINT `sub_portfolio`
  FOREIGN KEY (`sub_portfolio` )
  REFERENCES `sub_portfolio` (`id` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE portfolio
ADD UNIQUE INDEX (`portfolio_name` ,`sub_portfolio` ) ;

ALTER TABLE `portfolio` DROP FOREIGN KEY `FK_portfolio_inv_prod` ;
ALTER TABLE `portfolio` CHANGE COLUMN `invenio_product` `invenio_product` INT(11) NOT NULL  , 
  ADD CONSTRAINT `FK_portfolio_inv_prod`
  FOREIGN KEY (`invenio_product` )
  REFERENCES `invenio_product` (`id` );

ALTER TABLE portfolio
ADD UNIQUE INDEX (`invenio_product` ,`sub_portfolio` ) ;

ALTER TABLE product ADD FOREIGN KEY (exchange) REFERENCES exchange(id);
ALTER TABLE product ADD FOREIGN KEY (invenio_product) REFERENCES invenio_product(id);
ALTER TABLE product ADD FOREIGN KEY (cash_physical_settlement) REFERENCES cash_physical_settlement(id);
ALTER TABLE product ADD FOREIGN KEY (atm_convention_for_expiry) REFERENCES atm_convention_for_expiry (id);
ALTER TABLE product ADD FOREIGN KEY (exchange_exercise_type) REFERENCES exchange_exercise_type(id);
ALTER TABLE product ADD FOREIGN KEY (bloomberg_product) REFERENCES bloomberg_product(id);
ALTER TABLE product ADD FOREIGN KEY (reuters_product) REFERENCES reuters_product(id);
ALTER TABLE product ADD FOREIGN KEY (xtraders_exchange) REFERENCES xtraders_exchange(id);
ALTER TABLE product ADD FOREIGN KEY (rjo_exchange) REFERENCES rjo_exchange (id);
ALTER TABLE product ADD FOREIGN KEY (murex_exchange) REFERENCES murex_exchange (id);
ALTER TABLE product ADD FOREIGN KEY (options_unl_contr) REFERENCES options_unl_contr(id);
ALTER TABLE product ADD FOREIGN KEY (futures_unl_contr) REFERENCES futures_unl_contr(id);
ALTER TABLE product ADD FOREIGN KEY (options_xtrader) REFERENCES options_xtrader(id);
ALTER TABLE product ADD FOREIGN KEY (futures_xtrader) REFERENCES futures_xtrader(id);
ALTER TABLE product ADD FOREIGN KEY (options_rjo) REFERENCES options_rjo(id);
ALTER TABLE product ADD FOREIGN KEY (futures_rjo) REFERENCES futures_rjo(id);


CREATE TABLE brokerage_master (			
id INTEGER (10) AUTO_INCREMENT,		
exchange INTEGER (10),
portfolio INTEGER (10),
product INTEGER (10),
executing_broker INTEGER (10),
clearing_broker INTEGER (10),
currency VARCHAR (200),
futures INTEGER (10),
options INTEGER (10),
special_trade VARCHAR (200),
rate DECIMAL (10,2),
payment_mode VARCHAR(200),
gua CHAR(1),
brokerage_callsign INTEGER (10),
exchange_brokerage_fees DECIMAL(15,6),
invoice_brokerage_fees DECIMAL (15,6),
start_date DATE,
end_date DATE,
comment VARCHAR(200),
PRIMARY KEY(id)
)ENGINE=INNODB;

ALTER TABLE brokerage_master ADD FOREIGN KEY (exchange) REFERENCES exchange(id);
ALTER TABLE brokerage_master ADD FOREIGN KEY (product) REFERENCES product(id);
ALTER TABLE brokerage_master ADD FOREIGN KEY (portfolio) REFERENCES portfolio(id);
ALTER TABLE brokerage_master ADD FOREIGN KEY (executing_broker) REFERENCES execution_broker(id);
ALTER TABLE brokerage_master ADD FOREIGN KEY (clearing_broker) REFERENCES clearing_broker(id);
ALTER TABLE brokerage_master ADD FOREIGN KEY (futures) REFERENCES future_contract(id);
ALTER TABLE brokerage_master ADD FOREIGN KEY (options) REFERENCES option_contract(id);
ALTER TABLE brokerage_master ADD FOREIGN KEY (brokerage_callsign) REFERENCES brokerage_callsign(id);

CREATE TABLE exchange_master (			
id INTEGER (10) AUTO_INCREMENT,		
exchange INTEGER (10),
product INTEGER (10),
futures INTEGER (10),
options INTEGER (10),
execution_type INTEGER (10),
exchange_callsign INTEGER (10),
actual_exchange_fees DECIMAL(15,6),
actual_exchange_clearing_fees DECIMAL(15,6),
actual_nfa_fees DECIMAL(15,6),
actual_exchange_currency VARCHAR(200),
published_exchange_fees DECIMAL(15,6),
published_exchange_clearing_fees DECIMAL(15,6),
published_nfa_fees DECIMAL(15,6),
published_exchange_currency VARCHAR(200),
bache DECIMAL (15,6),
bache_currency VARCHAR(200),
bache_spcl DECIMAL (15,6),
bache_spcl_currency VARCHAR(200),
rj_obrien DECIMAL (15,6),
rj_obrien_currency VARCHAR(200),
phillip_futures DECIMAL (15,6),
phillip_futures_currency VARCHAR(200),
start_date DATE,
end_date DATE,
comment VARCHAR(200),
PRIMARY KEY(id)
)ENGINE=INNODB;

ALTER TABLE exchange_master ADD FOREIGN KEY (exchange) REFERENCES exchange(id);
ALTER TABLE exchange_master ADD FOREIGN KEY (product) REFERENCES product(id);
ALTER TABLE exchange_master ADD FOREIGN KEY (futures) REFERENCES future_contract(id);
ALTER TABLE exchange_master ADD FOREIGN KEY (options) REFERENCES option_contract(id);
ALTER TABLE exchange_master ADD FOREIGN KEY (exchange_callsign) REFERENCES exchange_callsign(id);
ALTER TABLE exchange_master ADD FOREIGN KEY (execution_type) REFERENCES execution_type(id);

CREATE  TABLE `option_price` (
  `id` INT NOT NULL ,
  `name` VARCHAR(45) NOT NULL ,
  `date` DATETIME NOT NULL ,
  `bbg_settlement_price` DOUBLE NULL ,
  `exchange_settlement_price` DOUBLE NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `UNIQUE_INDX` (`name` ASC, `date` ASC) );

ALTER TABLE `option_price` CHANGE COLUMN `id` `id` INT(11) NOT NULL AUTO_INCREMENT  ;

CREATE  TABLE `bbg_ovdv_moneynesswise` (
  `id` INT NOT NULL ,
  `option_id` VARCHAR(45) NOT NULL ,
  `date` DATETIME NOT NULL ,
  `80` DOUBLE NULL ,
  `90` DOUBLE NULL ,
  `95` DOUBLE NULL ,
  `97.5` DOUBLE NULL ,
  `100` DOUBLE NULL ,
  `102.5` DOUBLE NULL ,
  `105` DOUBLE NULL ,
  `110` DOUBLE NULL ,
  `120` DOUBLE NULL ,
  `150` DOUBLE NULL ,
  `200` DOUBLE NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `UNIQUE_KEY_ID` (`option_id` ASC, `date` ASC) );

ALTER TABLE `bbg_ovdv_moneynesswise` CHANGE COLUMN `80` `80` DOUBLE NOT NULL  , CHANGE COLUMN `90` `90` DOUBLE NOT NULL  , CHANGE COLUMN `95` `95` DOUBLE NOT NULL  , CHANGE COLUMN `97.5` `97.5` DOUBLE NOT NULL  , CHANGE COLUMN `100` `100` DOUBLE NOT NULL  , CHANGE COLUMN `102.5` `102.5` DOUBLE NOT NULL  , CHANGE COLUMN `105` `105` DOUBLE NOT NULL  , CHANGE COLUMN `110` `110` DOUBLE NOT NULL  , CHANGE COLUMN `120` `120` DOUBLE NOT NULL  , CHANGE COLUMN `150` `150` DOUBLE NOT NULL  , CHANGE COLUMN `200` `200` DOUBLE NOT NULL  ;

ALTER TABLE `bbg_ovdv_moneynesswise` CHANGE COLUMN `option_id` `option_id` INT NOT NULL  , 
  ADD CONSTRAINT `option_id`
  FOREIGN KEY (`option_id` )
  REFERENCES `option_static_data` (`id` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION
, ADD INDEX `option_id_idx` (`option_id` ASC) ;

ALTER TABLE `invenio`.`bbg_ovdv_moneynesswise` CHANGE COLUMN `80` `a80` DOUBLE NOT NULL  , CHANGE COLUMN `90` `a90` DOUBLE NOT NULL  , CHANGE COLUMN `95` `a95` DOUBLE NOT NULL  , CHANGE COLUMN `97.5` `a975` DOUBLE NOT NULL  , CHANGE COLUMN `100` `a100` DOUBLE NOT NULL  , CHANGE COLUMN `102.5` `a1025` DOUBLE NOT NULL  , CHANGE COLUMN `105` `a105` DOUBLE NOT NULL  , CHANGE COLUMN `110` `a110` DOUBLE NOT NULL  , CHANGE COLUMN `120` `a120` DOUBLE NOT NULL  , CHANGE COLUMN `150` `a150` DOUBLE NOT NULL  , CHANGE COLUMN `200` `a200` DOUBLE NOT NULL  ;

ALTER TABLE `invenio`.`bbg_ovdv_moneynesswise` CHANGE COLUMN `id` `id` INT(11) NOT NULL AUTO_INCREMENT  ;


CREATE  TABLE `bbg_ovdv_deltawise` (
  `id` INT NOT NULL ,
  `option_id` VARCHAR(45) NOT NULL ,
  `date` DATETIME NOT NULL ,
  `5DP` DOUBLE NOT NULL ,
  `10DP` DOUBLE NOT NULL ,
  `15DP` DOUBLE NOT NULL ,
  `25DP` DOUBLE NOT NULL ,
  `35DP` DOUBLE NOT NULL ,
  `50D` DOUBLE NOT NULL ,
  `35DC` DOUBLE NOT NULL ,
  `25DC` DOUBLE NOT NULL ,
  `15DC` DOUBLE NOT NULL ,
  `10DC` DOUBLE NOT NULL ,
  `5DC` DOUBLE NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `UNIQUE_KEY_IDX` (`option_id` ASC, `date` ASC) );

ALTER TABLE `bbg_ovdv_deltawise` CHANGE COLUMN `option_id` `option_id` INT NOT NULL  , 
  ADD CONSTRAINT `option_id_fk_sd`
  FOREIGN KEY (`option_id` )
  REFERENCES `option_static_data` (`id` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION
, ADD INDEX `option_id_fk_sd_idx` (`option_id` ASC) ;

ALTER TABLE `invenio`.`bbg_ovdv_deltawise` CHANGE COLUMN `5DP` `a5DP` DOUBLE NOT NULL  , CHANGE COLUMN `10DP` `a10DP` DOUBLE NOT NULL  , CHANGE COLUMN `15DP` `a15DP` DOUBLE NOT NULL  , CHANGE COLUMN `25DP` `a25DP` DOUBLE NOT NULL  , CHANGE COLUMN `35DP` `a35DP` DOUBLE NOT NULL  , CHANGE COLUMN `50D` `a50D` DOUBLE NOT NULL  , CHANGE COLUMN `35DC` `a35DC` DOUBLE NOT NULL  , CHANGE COLUMN `25DC` `a25DC` DOUBLE NOT NULL  , CHANGE COLUMN `15DC` `a15DC` DOUBLE NOT NULL  , CHANGE COLUMN `10DC` `a10DC` DOUBLE NOT NULL  , CHANGE COLUMN `5DC` `a5DC` DOUBLE NOT NULL  ;

ALTER TABLE `invenio`.`bbg_ovdv_deltawise` CHANGE COLUMN `id` `id` INT(11) NOT NULL AUTO_INCREMENT  ;

CREATE  TABLE `inv_book_vol_type_sel` (
  `id` INT NOT NULL ,
  `sub_portfolio` INT NOT NULL ,
  `option_id` INT NOT NULL ,
  `date` DATETIME NOT NULL ,
  `vol_surface_type` INT NOT NULL ,
  `intrapolation_technique` INT NOT NULL ,
  `extrapolation_technique` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `UNIQ_IDX` (`sub_portfolio` ASC, `option_id` ASC, `date` ASC) ,
  INDEX `SUB_PORT_FK_idx` (`sub_portfolio` ASC) ,
  INDEX `OP_SD_FK_idx` (`option_id` ASC) ,
  INDEX `EXTR_FK_idx` (`extrapolation_technique` ASC) ,
  INDEX `INTR_FK_idx` (`intrapolation_technique` ASC) ,
  INDEX `VOL_SURF_FK_idx` (`vol_surface_type` ASC) ,
  CONSTRAINT `SUB_PORT_FK`
    FOREIGN KEY (`sub_portfolio` )
    REFERENCES `sub_portfolio` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `OP_SD_FK`
    FOREIGN KEY (`option_id` )
    REFERENCES `option_static_data` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `EXTR_FK`
    FOREIGN KEY (`extrapolation_technique` )
    REFERENCES `extrapolation_technique` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `INTR_FK`
    FOREIGN KEY (`intrapolation_technique` )
    REFERENCES `intrapolation_technique` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `VOL_SURF_FK`
    FOREIGN KEY (`vol_surface_type` )
    REFERENCES `vol_surface` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

ALTER TABLE `invenio`.`inv_book_vol_type_sel` CHANGE COLUMN `id` `id` INT(11) NOT NULL AUTO_INCREMENT  ;

CREATE  TABLE `inv_book_vol_type_fixed` (
  `id` INT NOT NULL ,
  `sub_portfolio` INT NOT NULL ,
  `option_id` INT NOT NULL ,
  `date` DATETIME NOT NULL ,
  `strike` INT NOT NULL ,
  `volatility` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `UNIQUE_SP_OP_DATE` (`sub_portfolio` ASC, `option_id` ASC, `date` ASC) ,
  INDEX `sub_port_fk_idx` (`sub_portfolio` ASC) ,
  INDEX `opt_id_fk2_idx` (`option_id` ASC) ,
  CONSTRAINT `sub_port_fk2`
    FOREIGN KEY (`sub_portfolio` )
    REFERENCES `sub_portfolio` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `opt_id_fk2`
    FOREIGN KEY (`option_id` )
    REFERENCES `option_static_data` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

ALTER TABLE `invenio`.`inv_book_vol_type_fixed` CHANGE COLUMN `id` `id` INT(11) NOT NULL AUTO_INCREMENT  ;

CREATE  TABLE `inv_book_vol_type_floating` (
  `id` INT NOT NULL ,
  `sub_portfolio` INT NOT NULL ,
  `option_id` INT NOT NULL ,
  `date` DATETIME NOT NULL ,
  `atmf3p_putskew` DOUBLE NULL ,
  `atmf3p_atm` DOUBLE NULL ,
  `atmf3p_callskew` DOUBLE NULL ,
  `atmf5p_p1` DOUBLE NULL ,
  `atmf5p_p2` DOUBLE NULL ,
  `atmf5p_p3` DOUBLE NULL ,
  `atmf5p_p4` DOUBLE NULL ,
  `atmf5p_p5` DOUBLE NULL ,
  `atmf7p_p1` DOUBLE NULL ,
  `atmf7p_p2` DOUBLE NULL ,
  `atmf7p_p3` DOUBLE NULL ,
  `atmf7p_p4` DOUBLE NULL ,
  `atmf7p_p5` DOUBLE NULL ,
  `atmf7p_p6` DOUBLE NULL ,
  `atmf7p_p7` DOUBLE NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `FK_IDX` (`sub_portfolio` ASC, `option_id` ASC, `date` ASC) ,
  INDEX `SPOR_FK_idx` (`sub_portfolio` ASC) ,
  INDEX `OPTID_FK43_idx` (`option_id` ASC) ,
  CONSTRAINT `SPOR_FK`
    FOREIGN KEY (`sub_portfolio` )
    REFERENCES `sub_portfolio` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `OPTID_FK43`
    FOREIGN KEY (`option_id` )
    REFERENCES `option_static_data` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

ALTER TABLE `invenio`.`inv_book_vol_type_floating` CHANGE COLUMN `id` `id` INT(11) NOT NULL AUTO_INCREMENT  ;

ALTER TABLE `invenio`.`inv_book_vol_type_floating` CHANGE COLUMN `atmf5p_p1` `atmf5pp1` DOUBLE NULL DEFAULT NULL  , CHANGE COLUMN `atmf5p_p2` `atmf5pp2` DOUBLE NULL DEFAULT NULL  , CHANGE COLUMN `atmf5p_p3` `atmf5pp3` DOUBLE NULL DEFAULT NULL  , CHANGE COLUMN `atmf5p_p4` `atmf5pp4` DOUBLE NULL DEFAULT NULL  , CHANGE COLUMN `atmf5p_p5` `atmf5pp5` DOUBLE NULL DEFAULT NULL  , CHANGE COLUMN `atmf7p_p1` `atmf7pp1` DOUBLE NULL DEFAULT NULL  , CHANGE COLUMN `atmf7p_p2` `atmf7pp2` DOUBLE NULL DEFAULT NULL  , CHANGE COLUMN `atmf7p_p3` `atmf7pp3` DOUBLE NULL DEFAULT NULL  , CHANGE COLUMN `atmf7p_p4` `atmf7pp4` DOUBLE NULL DEFAULT NULL  , CHANGE COLUMN `atmf7p_p5` `atmf7pp5` DOUBLE NULL DEFAULT NULL  , CHANGE COLUMN `atmf7p_p6` `atmf7pp6` DOUBLE NULL DEFAULT NULL  , CHANGE COLUMN `atmf7p_p7` `atmf7pp7` DOUBLE NULL DEFAULT NULL  ;


create table settlement_volatility_surface (
	id int(11) NOT NULL auto_increment,
	option_id  int(11) NOT NULL,
	dates date NOT NULL,
	strike  decimal(19,2) NOT NULL,
	volatility  decimal(19,2) NOT NULL,
	primary key (id)
) ENGINE=INNODB;
ALTER TABLE settlement_volatility_surface ADD CONSTRAINT `fk_option_id` FOREIGN KEY (`option_id`) REFERENCES `option_static_data` (`id` );
ALTER TABLE settlement_volatility_surface ADD UNIQUE INDEX (option_id, dates, strike);



create table settlement_correlation_surface (
	id int(11) NOT NULL auto_increment,
	option_id1  int(11) NOT NULL,
	option_id2  int(11) NOT NULL,
	dates date NOT NULL,
	strike  decimal(19,2) NOT NULL,
	correlation  decimal(19,2) NOT NULL,
	primary key (id)
) ENGINE=INNODB;
ALTER TABLE settlement_correlation_surface ADD CONSTRAINT `fk_option_id1` FOREIGN KEY (`option_id1` ) REFERENCES `option_static_data` (`id` );
ALTER TABLE settlement_correlation_surface ADD CONSTRAINT `fk_option_id2` FOREIGN KEY (`option_id2` ) REFERENCES `option_static_data` (`id` );
ALTER TABLE settlement_correlation_surface ADD UNIQUE INDEX (option_id1,option_id2,  dates,strike);



create table invenio_book_correlation_surface (
	id int(11) NOT NULL auto_increment,
	sub_portfolio_id int(11) NOT NULL,
	option_id1  int(11) NOT NULL,
	option_id2  int(11) NOT NULL,
	dates date NOT NULL,
	strike  decimal(19,2) NOT NULL,
	correlation  decimal(19,2) NOT NULL,
	primary key (id)
) ENGINE=INNODB;


ALTER TABLE invenio_book_correlation_surface ADD CONSTRAINT `fk_ibcs_sub_portfolio` FOREIGN KEY (`sub_portfolio_id` ) REFERENCES `sub_portfolio` (`id` );
ALTER TABLE invenio_book_correlation_surface ADD CONSTRAINT `fk_ibcs_option_id1` FOREIGN KEY (`option_id1` ) REFERENCES `option_static_data` (`id` );
ALTER TABLE invenio_book_correlation_surface ADD CONSTRAINT `fk_ibcs_option_id2` FOREIGN KEY (`option_id2` ) REFERENCES `option_static_data` (`id` );
ALTER TABLE invenio_book_correlation_surface ADD UNIQUE INDEX (sub_portfolio_id,option_id1,option_id2,  dates,strike);
