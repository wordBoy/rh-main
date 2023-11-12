<?php

    /*
    * ==============
    * Set Constants
    * ==============
    */

        /*
        * Email Addresses
        */
            define( "EMAIL_ADDR_RAYME_SANDRA", "sandy@raymeshope.org");
            //define( "EMAIL_PW_RAYME_SANDRA", "none" ); //not necessary

            define( "EMAIL_ADDR_RAYME_SYSTEM", "system@raymeshope.org");
            define( "EMAIL_PW_RAYME_SYSTEM", "f6v556D&LwKy" );

            define( "EMAIL_ADDR_RAYME_GLENN", "glenn@raymeshope.org");
            define( "EMAIL_PW_RAYME_GLENN", "$5@tl69NGZaL");

        /*
        * System Constants
        */

            define( "RH_ENV_PROD", "rh_env_prod" );
            define( "RH_ENV_LOCAL", "rh_env_local" );
            define( "RH_HOME_PG", "index-comp-1.php" );

    /*
    * ======================
    * Determine Environment
    * ======================
    */
        $rhglobal_serverName = urlencode("https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
        $rhglobal_downForMaintenance = false;
        $rhglobal_enviroType = "";
        
        if ( strpos( $rhglobal_serverName, "raymeshope.org") !== false ) {
            
            $rhglobal_enviroType = RH_ENV_PROD;
            
        } elseif (strpos($rhglobal_serverName, "localhost")) {
            
            $rhglobal_enviroType = RH_ENV_LOCAL;
        } 

?>