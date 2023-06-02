     <?php

return [




    //profil
    'Santeyah'=>'b83866c2e1140f',
    'Optimisons'=>'7d49f0711f6beb',
    'Atex'=>'b4e79c81b8be1e',


    'app_name'=>'Daara Solution',

        // Version 1.0.0
    'userSession'=>'activeUserSession',

        // SENSITIVE PARAMS
    'PBKDF2_HASH_ALGORITHM'=> "sha256",
    'PBKDF2_ITERATIONS'=> 1000,
    'PBKDF2_SALT_BYTE_SIZE'=> 24,
    'PBKDF2_HASH_BYTE_SIZE'=> 24,

    'HASH_SECTIONS'=> 4,
    'HASH_ALGORITHM_INDEX'=> 0,
    'HASH_ITERATION_INDEX'=> 1,
    'HASH_SALT_INDEX'=> 2,
    'HASH_PBKDF2_INDEX'=> 3,
    'battuta_api_key'=>'7e3fe3109bb7f857350a12ce72d85476',
    'ipstack_api_key'=>'1b90d79fa69496e1dd11eb15e39dcfd3',

        // OTHER PARAMS
    'staff_id_prefix'=>'GN',
    'gen_key1_length'=>3,
    'gen_key2_length'=>2,
    'maxFileSize'=>'3000', // 3000 KB IS THE MAIMUM FILE SIZE
    'adminEmail' => 'admin@aidaf.com',
    'fileInfoSerialized'=>'fileInfoSerialized',
    'secret_word'=>['s3eK0u1'],
    'key_connector'=>'s3eK0u1',
    'word_separator'=>'@!#act@123@!#',

        //Sms configuration
    'smsapiusr'=>'wizbox10',
    'smsapipswrd'=>'Wiz@infobip.com123',
    'smsapilink'=>'http://api.infobip.com/',

        'linkToUploadIndividusProfil'=>'/web/mainAssets/media/uploads/photo/',


        // MENU STUFF
    'mainmenuSeperator'=>'&',
    'menuSeperator'=>'@',
    'subMenuSeperator'=>',',
    'translator_separator'=>'__',
    'filesuninameseparator'=>'____',
    'simple_seperator'=>'_',
    
    'opened_action'=>['login','unicitelibelle','verifmail','initierfangnie','espacefournisseurs','addfournisseurs','finaliserespace','autauriseespace'],
    'residantSupportAction'=>['residantsupportform'],


        //Alert message
    'attention'=>'412', // FFD205
    'erreur'=>'400', // 
    'succes'=>'200', //
    'information'=>'100', //

        //Ajax action
    'ajaxActions'=>['allajax'],
    
    'adminmemu'=>'site_index@atexadmin_index@atexconfig_index',
    'adminAction'=>'site_index@atexadmin,atexadmin_imprimercarte,atexadmin_autauriseespace,atexadmin_modele@atexconfig,atexconfig_entreprise,atexconfig_modele',



    'reportcontroller'=>'reportcontroller',
    'mainMenu'=>'site_index@personel_listepersonnel@parametre,config_entreprise,modele_carte',
   'etsAdminMenuAction'=>'site_index@personel_listepersonnel,personel_listepersonnel@config,config_entreprise,config_fonction,config_post,config_departement@modele_carte',

//    allajax@atadmin_index@atexadmin,atexadmin_autauriseespace,atexadmin_imprimercarte@etsconfig,etsconfig_utilisateur,etsconfig_ets

];
