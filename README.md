iPay Gateway API - Demo
=================================================

A web based integration demo that interacts with iPay Africa's payment gateway.

Documentation: https://dev.ipayafrica.com/

Prerequisites
=============
1.XAMPP, LAMP or WAMP server installed.

Instructions
============
* Unzip downloaded folder to the ```DOCUMENT_ROOT``` folder of your Apache environment.
* All the information can be found by creating a simple ```info.php``` file with the following content:
    ```
    <?php
      phpinfo();
    ?>
    ```
* With *-AMP server running, navigate to the ```SERVER_ADDR/index.php```
* Click submit 
* The callback response is returned in the URL and logged in ```response.log```.
* It contains variables returned from the transcaction, which can be used to verify payment.
* To verify the payment, navigate to ```SERVER_ADDR/verify.php```
* The page should load a list of parameters and a message indicating the status of the demo transaction.

