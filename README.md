iPay Gateway API - Demo
=================================================

A web based integration demo that interacts with iPay Africa's payment gateway.

Documentation: https://dev.ipayafrica.com/

Prerequisites
=============
1.XAMPP, LAMP or WAMP server installed.

Instructions
============
* Unzip downloaded folder to the root folder of your Apache environment.
* With -AMP server running, navigate to the ```SERVER_ADDR/index.php```
* Click submit 

* To verify the payment, navigate to ```SERVER_ADDR/verify.php```
* The page should load a list of parameters and a message indicating the status of the demo transaction.

* The Callback response is logged in ```response.log``` and contains variables returned from the iPay gateway payment.
