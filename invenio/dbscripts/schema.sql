-- TODO Role tables, FK References 

CREATE TABLE vol_surface (
vol_surface_id INTEGER(10) NOT NULL AUTO_INCREMENT,
vol_surface_type VARCHAR(200) NOT NULL,
PRIMARY KEY (vol_surface_id)
)ENGINE=INNODB;

CREATE TABLE VOL_DUMP(
vol_dump_id INTEGER(10) NOT NULL AUTO_INCREMENT,
product VARCHAR(200),
vol_surface_id INTEGER(10),
start DECIMAL(10,2),
step DECIMAL(10,2),
extrapolate VARCHAR(1), 
multiple DECIMAL(10,2),
code VARCHAR(200),
future_ref VARCHAR(200),
options_ref  VARCHAR(200),
expiry_date DATE,
PRIMARY KEY (vol_dump_id)
) ENGINE=INNODB;

CREATE TABLE instrument (
instrument_id INTEGER(10) NOT NULL AUTO_INCREMENT,
instrument_name VARCHAR(200) NOT NULL,
instrument_code VARCHAR(200),
portfolio  VARCHAR(200), 
maturity VARCHAR(200), 
start_value DECIMAL(10,2),
end_value DECIMAL(10,2),
multiple DECIMAL(10,2),
PRIMARY KEY (instrument_id)
)ENGINE=INNODB;


CREATE TABLE M_US_DUMP(
m_us_dump_id INTEGER(10) NOT NULL AUTO_INCREMENT,
instrument_id  INTEGER(10), 
strike_code VARCHAR(200),
market_value DECIMAL(10,2),
book_value DECIMAL(10,2),
market_us DECIMAL(10,2),
strike_price    DECIMAL(10,2),  
strike_total DECIMAL(10,2),
market_val_call DECIMAL(10,2),
market_cal_put DECIMAL(10,2),
options_expiry_date    DATETIME,  
instrument_display  VARCHAR(200), 
PRIMARY KEY (m_us_dump_id )
) ENGINE=INNODB;

CREATE TABLE OPT_DUMP(
opt_dump_id INTEGER(10) NOT NULL AUTO_INCREMENT,
instrument_id  INTEGER(10), 
active_lots  INTEGER(10),
month INTEGER(10),  
strike DECIMAL(10,2),
c_p DECIMAL(10,2),
prem DECIMAL(10,2),
orig_lots DECIMAL(10,2),
portfolio VARCHAR(200), 
multiple DECIMAL(10,2),
lots_for_pivot DECIMAL(10,2),
counterparty VARCHAR(200),  
duplicated  VARCHAR(200),
internal VARCHAR(100),
trn VARCHAR(200),
trn_date   DATETIME, 
buy_sell VARCHAR(1), 
initial_qty INTEGER(10),
contract_maturity   VARCHAR(200),  
call_put VARCHAR(1),
stl_prm DECIMAL(10,2),
counterpart_label  VARCHAR(200),  
live_qty INTEGER(10),
PRIMARY KEY (opt_dump_id)
)ENGINE=INNODB;

CREATE TABLE FUT_DUMP(
fut_dump_id INTEGER(10) NOT NULL AUTO_INCREMENT,
instrument_id  INTEGER(10), -- FK --
book_value DECIMAL(10,2),
net_pos DECIMAL(10,2),
fut_price DECIMAL(10,2),
contract VARCHAR(200), -- FK --
fut_settlement DECIMAL(10,2),
adapted_delta DECIMAL(10,2),
gamma_smt DECIMAL(10,2),
theta DECIMAL(10,2),
vega DECIMAL(10,2),
PRIMARY KEY (fut_dump_id)
) ENGINE=INNODB;

create table invenio_user
(
  record_id integer(10) auto_increment not null,
  userid varchar(50) not null,
  email varchar(250) not null,
  first_name varchar(50),
  middle_name varchar(50),
  last_name varchar(50),
  active_ind varchar(1),
  created_time datetime,
  primary key (record_id)
);

alter table invenio_user 
add column phone varchar(250) not null,
add column date_of_birth date not null,
add column gender varchar(1) not null,
add column address_1 varchar(250) not null,
add column address_2 varchar(250) not null,
add column city_id INTEGER(10) not null,
add column zip_code VARCHAR(100) not null,
add column password varchar(200) not null,
add column secret_question_1 varchar(1000),
add column secret_answer_1 varchar(1000),
add column secret_question_2 varchar(1000),
add column secret_answer_2 varchar(1000);

create table country (
country_id integer(10) not null auto_increment,
country_name varchar(200) not null,
country_code varchar(50) not null,
primary key(country_id)
) engine=innodb;

create table state (
state_id integer(10) not null auto_increment,
state_name varchar(200) not null,
state_code varchar(50) not null,
country_id integer(10) not null,
primary key(state_id),
foreign key (country_id) references country(country_id)
) engine=innodb; 

create table city (
city_id integer(10) not null auto_increment,
city_name varchar(200) not null,
city_code varchar(50) not null,
state_id integer(10) not null,
primary key(city_id),
foreign key (state_id) references state(state_id)
) engine=innodb; 

alter table invenio_user add foreign key (city_id) references city(city_id);
alter table invenio_user modify column email varchar(250),
modify column phone varchar(250),
modify column date_of_birth date,
modify column gender varchar(1),
modify column address_1 varchar(250),
modify column address_2 varchar(250),
modify column city_id INTEGER(10),
modify column zip_code VARCHAR(100),
modify column password varchar(200);

alter table invenio_user modify column date_of_birth date;

alter table invenio_user add column reset_profile char,
add column reset_profile_timestamp date,
add column reset_key varchar(200);

drop table  if exists invenio_user_session;
create table invenio_user_session
(
  invenio_user_session_id integer(10) not null auto_increment,
  record_id integer(10) not null,
  session_id VARCHAR(200) not null,
  random_key VARCHAR(100) not null,
  primary key (invenio_user_session_id),
  foreign key (record_id) references invenio_user(record_id)
);

CREATE TABLE product (
product_id INTEGER(10) NOT NULL AUTO_INCREMENT,
product_name VARCHAR(200) NOT NULL,
product_desc VARCHAR(1000),
PRIMARY KEY (product_id)
)ENGINE=INNODB;

CREATE TABLE exchange (
exchange_id INTEGER(10) NOT NULL AUTO_INCREMENT,
exchange_name VARCHAR(200) NOT NULL,
exchange_desc VARCHAR(1000),
PRIMARY KEY (exchange_id)
)ENGINE=INNODB;

CREATE TABLE invenio_product (
invenio_product_id INTEGER(10) NOT NULL AUTO_INCREMENT,
invenio_product_name VARCHAR(10) NOT NULL,
invenio_product_desc VARCHAR(1000),
PRIMARY KEY (invenio_product_id)
)ENGINE=INNODB;

CREATE TABLE bloomberg_product (
bloomberg_product_id INTEGER(10) NOT NULL AUTO_INCREMENT,
bloomberg_product_name VARCHAR(10) NOT NULL,
bloomberg_product_desc VARCHAR(1000),
PRIMARY KEY (bloomberg_product_id)
)ENGINE=INNODB;

CREATE TABLE reuters_product (
reuters_product_id INTEGER(10) NOT NULL AUTO_INCREMENT,
reuters_product_name VARCHAR(10) NOT NULL,
reuters_product_desc VARCHAR(1000),
PRIMARY KEY (reuters_product_id)
)ENGINE=INNODB;

CREATE TABLE xtraders_exchange (
xtraders_exchange_id INTEGER(10) NOT NULL AUTO_INCREMENT,
xtraders_exchange_name VARCHAR(200) NOT NULL,
xtraders_exchange_desc VARCHAR(1000),
PRIMARY KEY (xtraders_exchange_id)
)ENGINE=INNODB;

CREATE TABLE options_unl_contr (
options_id INTEGER(10) NOT NULL AUTO_INCREMENT,
options_name VARCHAR(200) NOT NULL,
options_desc VARCHAR(1000),
PRIMARY KEY (options_id)
)ENGINE=INNODB;

CREATE TABLE futures_unl_contr (
futures_id INTEGER(10) NOT NULL AUTO_INCREMENT,
futures_name VARCHAR(200) NOT NULL,
futures_desc VARCHAR(1000),
PRIMARY KEY (futures_id)
)ENGINE=INNODB;

CREATE TABLE rjo_exchange (
rjo_exchange_id INTEGER(10) NOT NULL AUTO_INCREMENT,
rjo_exchange_name VARCHAR(200) NOT NULL,
rjo_exchange_desc VARCHAR(1000),
PRIMARY KEY (rjo_exchange_id)
)ENGINE=INNODB;

CREATE TABLE murex_exchange (
murex_exchange_id INTEGER(10) NOT NULL AUTO_INCREMENT,
murex_exchange_name VARCHAR(200) NOT NULL,
murex_exchange_desc VARCHAR(1000),
PRIMARY KEY (murex_exchange_id)
)ENGINE=INNODB;

CREATE TABLE options_xtrader (
options_id INTEGER(10) NOT NULL AUTO_INCREMENT,
options_name VARCHAR(200) NOT NULL,
options_desc VARCHAR(1000),
PRIMARY KEY (options_id)
)ENGINE=INNODB;

CREATE TABLE futures_xtrader (
futures_id INTEGER(10) NOT NULL AUTO_INCREMENT,
futures_name VARCHAR(200) NOT NULL,
futures_desc VARCHAR(1000),
PRIMARY KEY (futures_id)
)ENGINE=INNODB;

CREATE TABLE options_rjo (
options_id INTEGER(10) NOT NULL AUTO_INCREMENT,
options_name VARCHAR(200) NOT NULL,
options_desc VARCHAR(1000),
PRIMARY KEY (options_id)
)ENGINE=INNODB;

CREATE TABLE futures_rjo (
futures_id INTEGER(10) NOT NULL AUTO_INCREMENT,
futures_name VARCHAR(200) NOT NULL,
futures_desc VARCHAR(1000),
PRIMARY KEY (futures_id)
)ENGINE=INNODB;

--DEAL TICKET MASTER
DROP TABLE IF EXISTS deal_ticket;
DROP TABLE IF EXISTS frequency;
CREATE TABLE frequency (
frequency_id INTEGER(10) not null AUTO_INCREMENT,
frequency_type VARCHAR(200),
PRIMARY KEY(frequency_id)
) ENGINE=INNODB;


DROP TABLE IF EXISTS quanto_type;
CREATE TABLE quanto_type (
quanto_type_id INTEGER(10) not null AUTO_INCREMENT,
quanto_type VARCHAR(200),
PRIMARY KEY(quanto_type_id)
) ENGINE=INNODB;

DROP TABLE IF EXISTS derivative_type;
CREATE TABLE derivative_type (
derivative_type_id INTEGER(10) not null AUTO_INCREMENT,
derivative_type VARCHAR(200),
PRIMARY KEY(derivative_type_id)
) ENGINE=INNODB;

INSERT INTO frequency (frequency_id,frequency_type) VALUES (1,'daily'),(2,'weekly'),(3,'monthly'),(4,'end of month');
INSERT INTO quanto_type (quanto_type_id, quanto_type) VALUES (1,'division'),(2,'multiplication');
INSERT INTO derivative_type (derivative_type) VALUES ('vanilla_put'),('vanilla_call'),('spread_put'),('spread_call'),
('future'),('future_spread'),('euro_up_out_put'),('euro_up_out_call'),
('euro_up_in_put'),('euro_up_in_call'),('euro_down_out_put'),('euro_down_out_call'),
('euro_down_in_put'),('euro_down_in_call'),('amer_up_out_put'),('amer_up_out_call'),
('amer_up_in_put'),('amer_up_in_call'),('amer_down_out_put'),('amer_down_out_call'),('amer_down_in_put'),
('amer_down_in_call'),('euro_digital_up_in'),('euro_digital_up_out'),('euro_digital_down_in'),
('euro_digital_down_out'),('amer_digital_up_one_touch'),('amer_digital_up_no_touch'),('amer_digital_down_one_touch'),
('amer_digital_down_no_touch'),('quanto_call'),('quanto_put');

DROP TABLE IF EXISTS action_type;
CREATE TABLE action_type (
action_type_id INTEGER(10) not null AUTO_INCREMENT,
action_type VARCHAR(200),
PRIMARY KEY(action_type_id)
) ENGINE=INNODB;

INSERT INTO action_type (action_type) VALUES ('buy_sell'),('exercised'),('abandoned'),('got_assigned');

DROP TABLE IF EXISTS deal_ticket;
CREATE TABLE deal_ticket (
deal_ticket_id INTEGER(10) not null AUTO_INCREMENT,
trade_id	integer(10) not null,
parent_trade_id	integer(10) not null,
portfolio	 VARCHAR(200),
sub_portfolio	VARCHAR(200),
strategy_name	VARCHAR(200),
product_id INTEGER(10),
sub_product_1	VARCHAR(200),
sub_product_2	VARCHAR(200),
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
barrier_1	DECIMAL(15,6),
barrier_2	DECIMAL(15,6),
barrier_1_obs_start DATE,
barrier_2_obs_start DATE,
barrier_1_obs_end_date	DATE,
barrier_2_obs_end_date	DATE,
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
PRIMARY KEY(deal_ticket_id)
)ENGINE=INNODB;

ALTER TABLE deal_ticket ADD FOREIGN KEY (accumulation_frequency_id) REFERENCES frequency(frequency_id);
ALTER TABLE deal_ticket ADD FOREIGN KEY (averaging_frequency_id) REFERENCES frequency(frequency_id);
ALTER TABLE deal_ticket ADD FOREIGN KEY (quanto_type_id) REFERENCES quanto_type(quanto_type_id);
ALTER TABLE deal_ticket ADD FOREIGN KEY (derivative_type_id) REFERENCES derivative_type(derivative_type_id);
ALTER TABLE deal_ticket ADD FOREIGN KEY (action_type_id) REFERENCES action_type(action_type_id);