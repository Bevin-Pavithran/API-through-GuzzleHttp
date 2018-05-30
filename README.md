Description
===========
The application that I created consumes the http://fixer.io/ Rest-API to get the exchange rate.
The request of this API is done through GuzzleHttp V6 installed with Composer to maintain good dependency.

How to run:
============
Run your server (exm built-in PHP server : php bin/console server:start )
To run the application you simply need to open the route "/currency" (http://127.0.0.1:8000/currency) (please check the port, could be 8080 depending on your configuration)
Put the desired amount and submit, the exchange will be shown in the next page. If something goes wrong (no 200 response), you will get error message.

Validation controls
===================
The form contains one text field to input the amount which is controlled for validation with jQuery (not null, must be valid money value)
I noticed that the API returns empty object when the target and the base are the same currency, so I made another validation control for that too.
The API returns also empty array when the amount is Zero 0, so another validation for this is made.
You will find the validations in /web/bundle/js/extra.js
The validation of the Money value could be also controlled by the controller if we used MoneyType instead of TextType
The validation of EMPTY value could be also controlled by the REQUIRED attribute, but the error messages would be different ; a popup if the value is EMPTY, a native error message if the value is not money, so I decided to make the error messages look nice and unified, that's why I made all the controlls together in extra.js

look&Feel
=========
For the interface, I used Bootstrap library (/web/bundle/framework/css/bootstrap.min.css) and I included some extra style in .../extra.css


Best Regards
Ismail
