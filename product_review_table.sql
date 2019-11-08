CREATE DATABASE product_review;

USE product_review;

CREATE TABLE `product_review`.`product_reviews` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `product_name` VARCHAR(100) NULL,
    `review` VARCHAR(255) NULL,
    `votes` INT NULL DEFAULT 0,
    PRIMARY KEY (`id`)
);


INSERT INTO `product_review`.`product_reviews` (`product_name`,`review`) VALUES ('iPhoneX','Pro cameras. Pro display. Pro performance.Just the right amount of everything.');
INSERT INTO `product_review`.`product_reviews` (`product_name`,`review`) VALUES ('Google Pixel 3a','The Pixel 3a 64GB Smartphone from Google sports premium mobile photography tools without the premium price point.');
INSERT INTO `product_review`.`product_reviews` (`product_name`,`review`) VALUES ('Samsung Galaxy S9','See the light with the Samsung Galaxy S9 SM-G960U 64GB');
INSERT INTO `product_review`.`product_reviews` (`product_name`,`review`) VALUES ('Sony Xperia 10','Put a mobile cinematic experience in the palm of your hand with the Xperia 10 I3123 64GB Smartphone from Sony.');
