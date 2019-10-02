<?php
return [
    /*
       |--------------------------------------------------------------------------
       | Laravel Package For Bulk SMS Powered By TechnoHive
       |--------------------------------------------------------------------------
       |@authors[
       |josphatkips@gmail.com & kipngenokering@gmail.com
       |]
       | Generate your Keys by visiting sms.technohive.co.ke and after logging in to your
       | account, .
       |Head to the use icon and generate keys there.
       |account_no,api_key and sender_id are all strings without white spaces
       |
       |all the keys are required
       */
    'api_key'=>env("HIVE_API_KEY",null),
    'account_no'=>env("HIVE_ACCOUNT_NO",null),
    'sender_id'=>env("HIVE_SENDER_ID","TechnoHive"),
];