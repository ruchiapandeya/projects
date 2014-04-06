insert into exchange (id, exchange_name) values(1, 'NYMEX');
insert into exchange (id, exchange_name) values(2, 'ICE EU');
insert into exchange (id, exchange_name) values(3, 'ICE NY');
insert into exchange (id, exchange_name) values(4, 'LIFFE');
insert into exchange (id, exchange_name) values(5, 'EOP');
insert into exchange (id, exchange_name) values(6, 'CME');
insert into exchange (id, exchange_name) values(7, 'CBOT');
insert into exchange (id, exchange_name) values(8, 'KCBOT');
insert into exchange (id, exchange_name) values(9, 'SICOM');
insert into exchange (id, exchange_name) values(10, 'MDE');

insert into clearing_broker values(1,'Bache','');
insert into clearing_broker values(2,'Philip Futures','');
insert into clearing_broker values(3,'RJO','');

insert into execution_broker values(1,'ABN AMRO','');
insert into execution_broker values(2,'AVONDALE FUTURES','');
insert into execution_broker values(3,'BNP PARIBAS','');
insert into execution_broker values(4,'ED&F MAN','');
insert into execution_broker values(5,'FORTIS','');
insert into execution_broker values(6,'ROSENTHAL COLLINS','');
insert into execution_broker values(7,'RJ OBRIEN','');
insert into execution_broker values(8,'VARNER BROKERAGE','');
insert into execution_broker values(9,'BGC BROKERS','');
insert into execution_broker values(10,'BRIDGETONGROUP','');
insert into execution_broker values(11,'JB DRAX','');
insert into execution_broker values(12,'JP MORGAN','');
insert into execution_broker values(13,'MACQUARIE','');
insert into execution_broker values(14,'MAREX','');
insert into execution_broker values(15,'NEWEDGE','');
insert into execution_broker values(16,'TULLET PREBON','');
insert into execution_broker values(17,'SCS','');
insert into execution_broker values(18,'STARSUPPLY','');
insert into execution_broker values(19,'ECOS','');
insert into execution_broker values(20,'GFI','');
insert into execution_broker values(21,'JESSICA PEARSON','');
insert into execution_broker values(22,'NICKHOWARD','');
insert into execution_broker values(23,'NICOLASH','');
insert into execution_broker values(24,'VIP','');
insert into execution_broker values(25,'BACHE','');
insert into execution_broker values(26,'KYTE BROKING','');
insert into execution_broker values(27,'AUREL BGC','');
insert into execution_broker values(28,'VANILLA TECHNOLOGIES','');
insert into execution_broker values(29,'FC STONE','');
insert into execution_broker values(30,'ICAP','');
insert into execution_broker values(31,'INFINITY','');
insert into execution_broker values(32,'FUTURES INTERNATIONAL','');
insert into execution_broker values(33,'CITIGROUP','');
insert into execution_broker values(34,'MORGAN STANLEY','');
insert into execution_broker values(35,'CHAMBER COMMODITIES','');
insert into execution_broker values(36,'TRX FUTURES','');
insert into execution_broker values(37,'GEMINI MARKETS','');
insert into execution_broker values(38,'OTC EUROPE','');
insert into execution_broker values(39,'TFS DRIVATIVES','');
insert into execution_broker values(40,'EVOLUTION MARKETS','');
insert into execution_broker values(41,'GRIFFIN MARKETS','');
insert into execution_broker values(42,'SPECTRON','');
insert into execution_broker values(43,'PLANTUREUX','');
insert into execution_broker values(44,'AFRINCO','');
insert into execution_broker values(45,'HURTEBIZE','');
insert into execution_broker values(46,'INTER COURTAGE','');
insert into execution_broker values(47,'SIGMA TERME','');
insert into execution_broker values(48,'LINN GROUP','');
insert into execution_broker values(49,'RJ OBRIEN_ELEC','');
insert into execution_broker values(50,'TPG','');
insert into execution_broker values(51,'TDD','');
insert into execution_broker values(52,'XFA - ABN AMRO 821/281','');
insert into execution_broker values(53,'Ken Eberhardt','');
insert into execution_broker values(54,'Tim McEmulry','');
insert into execution_broker values(55,'DOWD WESCOTT','');
insert into execution_broker values(56,'Dan Huber','');
insert into execution_broker values(57,'JL Trade','');
insert into execution_broker values(58,'Bob Murray','');
insert into execution_broker values(59,'Tom Rossi','');
insert into execution_broker values(60,'PHILIP FUTURES','');
insert into execution_broker values(61,'ADMINVS-T','');
insert into execution_broker values(62,'ADMINVS-M','');

insert into access values(1,'Read','');
insert into access values(2,'Create','');
insert into access values(3,'Amend - Specific Fields','');
insert into access values(4,'Amend All','');
insert into access values(5,'Date Based Amendment','');
insert into access values(6,'Login/Session Based','');
insert into access values(7,'Rule Based Amendment','');

insert into vol_surface_greeks values(1,'Book Vol','');
insert into vol_surface_greeks values(2,'Accounting Vol','');
insert into vol_surface_greeks values(3,'BBG - OVDV','');
insert into vol_surface_greeks values(4,'Exchange Settlement','');
insert into vol_surface_greeks values(5,'BBG - Strikewise','');

insert into intrapolation_technique values(1,'Linear','');
insert into intrapolation_technique values(2,'Quadratic','');
insert into intrapolation_technique values(3,'Cubic','');
insert into intrapolation_technique values(4,'Cubic Spline','');
insert into intrapolation_technique values(5,'TanH','');

insert into extrapolation_technique values(1,'Linear','');
insert into extrapolation_technique values(2,'Quadratic','');
insert into extrapolation_technique values(3,'Cubic','');
insert into extrapolation_technique values(4,'Cubic Spline','');
insert into extrapolation_technique values(5,'TanH','');

INSERT INTO action_type (action_type) VALUES ('Buy'),('Sell'),('Exercised'),('Abandoned'),('Got Assigned');

INSERT INTO derivative_type (derivative_type) VALUES ('vanilla_put'),('vanilla_call'),('spread_put'),('spread_call'),
('future'),('future_spread'),('euro_up_out_put'),('euro_up_out_call'),
('euro_up_in_put'),('euro_up_in_call'),('euro_down_out_put'),('euro_down_out_call'),
('euro_down_in_put'),('euro_down_in_call'),('amer_up_out_put'),('amer_up_out_call'),
('amer_up_in_put'),('amer_up_in_call'),('amer_down_out_put'),('amer_down_out_call'),('amer_down_in_put'),
('amer_down_in_call'),('euro_digital_up_in'),('euro_digital_up_out'),('euro_digital_down_in'),
('euro_digital_down_out'),('amer_digital_up_one_touch'),('amer_digital_up_no_touch'),('amer_digital_down_one_touch'),
('amer_digital_down_no_touch'),('quanto_call'),('quanto_put');

INSERT INTO frequency (id,frequency_type) VALUES (1,'Daily'),(2,'Weekly'),(3,'Monthly'),(4,'End Of Month');

INSERT INTO accumulation_frequency (id,frequency_type) VALUES (1,'Daily'),(2,'Weekly'),(3,'Monthly'),(4,'End Of Month');

INSERT INTO averaging_frequency (id,frequency_type) VALUES (1,'Daily'),(2,'Weekly'),(3,'Monthly'),(4,'End Of Month');

INSERT INTO quanto_type (id, quanto_type) VALUES (1,'division'),(2,'multiplication');

insert into atm_convention_for_expiry values (1,'ITM'), (2,'OTM');

insert into cash_physical_settlement values (1,'Cash Settled'), (2,'Physical Settlement');

insert into exchange_exercise_type values (1,'American'), (2,'European');

insert into execution_type values(1,'Block','');
insert into execution_type values(2,'Cashsettle','');
insert into execution_type values(3,'Cross','');
insert into execution_type values(4,'EFS','');
insert into execution_type values(5,'Elec','');
insert into execution_type values(6,'ExPit_In','');
insert into execution_type values(7,'ExPit_Out','');
insert into execution_type values(8,'Floor','');
insert into execution_type values(9,'fromAss','');
insert into execution_type values(10,'fromExer','');
insert into execution_type values(11,'OptAbandon','');
insert into execution_type values(12,'OptAssign','');
insert into execution_type values(13,'OptExercise','');

INSERT INTO `invenio`.`options_xtrader` (`id`, `options_name`) VALUES ('1', 'HE');
INSERT INTO `invenio`.`options_xtrader` (`id`, `options_name`) VALUES ('2', 'W');
INSERT INTO `invenio`.`options_xtrader` (`id`, `options_name`) VALUES ('3', 'C');
INSERT INTO `invenio`.`options_xtrader` (`id`, `options_name`) VALUES ('4', 'Suagr No 11');
INSERT INTO `invenio`.`options_xtrader` (`id`, `options_name`) VALUES ('5', 'Cocoa');
INSERT INTO `invenio`.`options_xtrader` (`id`, `options_name`) VALUES ('6', 'Cotton No 2');
INSERT INTO `invenio`.`options_xtrader` (`id`, `options_name`) VALUES ('7', 'Coffee C');
INSERT INTO `invenio`.`options_xtrader` (`id`, `options_name`) VALUES ('8', 'OZW');
INSERT INTO `invenio`.`options_xtrader` (`id`, `options_name`) VALUES ('9', 'OZS');
INSERT INTO `invenio`.`options_xtrader` (`id`, `options_name`) VALUES ('10', 'OZC');
INSERT INTO `invenio`.`options_xtrader` (`id`, `options_name`) VALUES ('11', 'OZL');
INSERT INTO `invenio`.`options_xtrader` (`id`, `options_name`) VALUES ('12', 'LE');
INSERT INTO `invenio`.`options_xtrader` (`id`, `options_name`) VALUES ('13', 'RC');
INSERT INTO `invenio`.`options_xtrader` (`id`, `options_name`) VALUES ('14', 'OKE');
INSERT INTO `invenio`.`options_xtrader` (`id`, `options_name`) VALUES ('15', 'OZM');
INSERT INTO `invenio`.`options_xtrader` (`id`, `options_name`) VALUES ('16', 'yOCO');
INSERT INTO `invenio`.`options_xtrader` (`id`, `options_name`) VALUES ('17', 'yOBM');
INSERT INTO `invenio`.`options_xtrader` (`id`, `options_name`) VALUES ('18', 'OZC2');
INSERT INTO `invenio`.`options_xtrader` (`id`, `options_name`) VALUES ('19', 'ECX CER');
INSERT INTO `invenio`.`options_xtrader` (`id`, `options_name`) VALUES ('20', 'CPO');
INSERT INTO `invenio`.`options_xtrader` (`id`, `options_name`) VALUES ('21', 'US Wheat');
INSERT INTO `invenio`.`options_xtrader` (`id`, `options_name`) VALUES ('22', 'Soybean');
INSERT INTO `invenio`.`options_xtrader` (`id`, `options_name`) VALUES ('23', 'Corn');
INSERT INTO `invenio`.`options_xtrader` (`id`, `options_name`) VALUES ('24', 'Soybean Oil');

INSERT INTO `invenio`.`murex_exchange` (`id`, `murex_exchange_name`) VALUES ('1', 'CME');
INSERT INTO `invenio`.`murex_exchange` (`id`, `murex_exchange_name`) VALUES ('2', 'NYSE_Liffe-D');
INSERT INTO `invenio`.`murex_exchange` (`id`, `murex_exchange_name`) VALUES ('3', 'ICE_IPE-C');
INSERT INTO `invenio`.`murex_exchange` (`id`, `murex_exchange_name`) VALUES ('4', 'CBOT');
INSERT INTO `invenio`.`murex_exchange` (`id`, `murex_exchange_name`) VALUES ('5', 'CME-D');
INSERT INTO `invenio`.`murex_exchange` (`id`, `murex_exchange_name`) VALUES ('6', 'NYSE_Liffe-C');
INSERT INTO `invenio`.`murex_exchange` (`id`, `murex_exchange_name`) VALUES ('7', 'BMD');
INSERT INTO `invenio`.`murex_exchange` (`id`, `murex_exchange_name`) VALUES ('8', 'OTC');
INSERT INTO `invenio`.`murex_exchange` (`id`, `murex_exchange_name`) VALUES ('9', 'SICOM');
INSERT INTO `invenio`.`murex_exchange` (`id`, `murex_exchange_name`) VALUES ('10', 'TOCOM');
INSERT INTO `invenio`.`murex_exchange` (`id`, `murex_exchange_name`) VALUES ('11', 'NYMEX');




