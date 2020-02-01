<?php
// save your email config here:
// return array(
// 	"driver" => "YOUR_MAIL_DRIVER",
// 	"host" => "YOUR_MAIL_HOST",
// 	"port" => 2525, // YOUR_MAIL_PORT
// 	"from" => array(
// 		"address" => "from@example.com", // FROM_EMAIL_ADDRESS
// 		"name" => "Example", // FROM_USERNAME
// 	),
// 	"username" => "YOUR_MAIL_USERNAME",
// 	"password" => "YOUR_MAIL_PASSWORD",
// 	"encryption" => "YOUR_MAIL_ENCRYPTION", // E.G.: SSL/TLS/...
// );

return array(
	"driver" => "smtp",
	"host" => "smtp.mailtrap.io",
	"port" => 2525,
	"from" => array(
		"address" => "from@example.com",
		"name" => "Example",
	),
	"username" => "f40069474e5772",
	"password" => "959ae90c109d50",
	"sendmail" => "/usr/sbin/sendmail -bs",
	"pretend" => false,
);