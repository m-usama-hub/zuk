ALTER TABLE business_messages ADD deleted_at timestamp null AFTER updated_at;
ALTER TABLE business_housemates ADD deleted_at timestamp null AFTER updated_at;
ALTER TABLE business_items ADD deleted_at timestamp null AFTER updated_at;
ALTER TABLE business_reviews ADD deleted_at timestamp null AFTER updated_at;
ALTER TABLE business_properties ADD deleted_at timestamp null AFTER updated_at;
ALTER TABLE business_projects ADD deleted_at timestamp null AFTER updated_at;
ALTER TABLE business_categories ADD deleted_at timestamp null AFTER updated_at;
ALTER TABLE users ADD deleted_at timestamp null AFTER updated_at;
ALTER TABLE user_business_details ADD deleted_at timestamp null AFTER updated_at;
ALTER TABLE user_details ADD deleted_at timestamp null AFTER updated_at;


ALTER TABLE `business_housemates` ADD `address` TEXT NOT NULL AFTER `interested_in`, ADD `lat` TEXT NOT NULL AFTER `address`, ADD `lng` TEXT NOT NULL AFTER `lat`;






ALTER TABLE `business_messages` DROP `name`, DROP `email`, DROP `age`, DROP `contact_no`;
ALTER TABLE `business_housemates` DROP `name`, DROP `email`, DROP `age`, DROP `contact_no`;
ALTER TABLE `business_properties` DROP `source_name`, DROP `source_phone`, DROP `email`, DROP `contact_no`;
