<?php
	$dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $con = mysqli_connect($dbhost, $dbuser, $dbpass, 'tli_mlm');

    if(! $con ){
        die('Could not connect: ' . mysqli_error());
        mysqli_close( $con);
    }

    /*$sets=mysqli_query($con, "SELECT * FROM `site_setting`");
    $setup=mysqli_fetch_array($sets);

    $sets_mail=mysqli_query($con, "SELECT * FROM `mail_setting`");
    $setup_mail=mysqli_fetch_array($sets_mail);

    $sets_sms=mysqli_query($con, "SELECT * FROM `sms_setting` ");
    $setup_sms=mysqli_fetch_array($sets_sms);*/
    
    date_default_timezone_set("Africa/Lagos");
    session_start();
    ob_start();
    $date = date('Y-m-d H:i:s');

    function new_cookie($cookie_title, $val, $duration){
        setcookie($cookie_title, $val, strtotime('NOW+'.$duration.'DAYS')/*, '/', 'ojade.ng', false, true*/);
    }
    function clear_cookie($cookie_title, $val, $duration){
        setcookie($cookie_title, $val, strtotime('NOW+'.$duration.'DAYS')/*, '/', 'ojade.ng', false, true*/);
    }

    function change_character($string, $character, $replace_to) {
       return str_replace($character, $replace_to, $string); 
    }


    function email_temp(){
        
    }

    function encode_txt( $q ) {
        $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
        $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
        return( $qEncoded );
    }

    function decode_txt( $q ) {
        $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
        $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
        return( $qDecoded );
    }

    function getToken($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

            //getting the location
        function getBank(){
            global $con;
            $sql = "SELECT * FROM nigeria_bank";
            $result = $con->query($sql);
            while($row=$result->fetch_assoc()){
                $bank_name= $row["bank_name"];
                echo "<option value='$bank_name'>$bank_name</option>";
            }   
        }

    function avatars($upload_to, $name, $lenth=8){
        $randoms=getToken(20);
        $content = file_get_contents('https://ui-avatars.com/api/?name='.$name.'&background=00d97e&color=fff&size=200&font-size=0.13&length='.$lenth.'&rounded=false&bold=false&uppercase=true');
        $uimg=$randoms.".jpg";
        file_put_contents($upload_to.$uimg, $content);
        return $uimg;
    }

    function OTP($length) {
        $character = '0123456789';
        $charactersLength = strlen($character);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $character[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function NetworkDetect($phone){
      $number_prefix = substr($phone, 0, 4);
      $networks = array('Glo' => array('0805', '0705', '0905', '0807', '0815', '0811'), 'MTN' => array('0806', '0803', '0816', '0813', '0810', '0814', '0903', '0906', '0703', '0706'), 'Airtel' => array('0802', '0902', '0701', '0808', '0708', '0812', '0907'), '9mobile' => array('0809', '0909', '0817', '0818', '0908'), 'Ntel' => array('0804'), 'Smile' => array('0702'));
      if(in_array($number_prefix, $networks['Glo'])){
        return 'Glo';
      }elseif(in_array($number_prefix, $networks['Smile'])){
        return 'Smile';
      }elseif(in_array($number_prefix, $networks['MTN'])){
        return 'MTN';
      }elseif(in_array($number_prefix, $networks['Airtel'])){
        return 'Airtel';
      }elseif(in_array($number_prefix, $networks['9mobile'])){
        return '9mobile';
      }elseif(in_array($number_prefix, $networks['Ntel'])){
        return 'Ntel';
      }else{
        return 'Others';
      }
    }

    function check_number($number) {
      $phone = array('0701', '0702', '0703', '0704', '0705', '0706', '0707', '0708', '0709', '0802', '0803', '0804', '0805', '0806', '0807', '0808', '0809', '0810', '0811', '0812', '0813', '0814', '0815', '0816', '0817', '0818', '0819', '0909', '0902', '0903', '0905', '0906');
      $number_prefix = substr($number, 0, 4);
      if (in_array($number_prefix, $phone)) {
          return true;
      }else{
        return false;
      }
    }

    function email_template($con, $email_temp){
        $ck=mysqli_query($con, "SELECT * FROM `email_template` WHERE template='$email_temp' ");
        $row=mysqli_fetch_array($ck);
        return array('txt' => $row['txt']);
    }


    function image_upload($file_variable, $path, $filename){
        if(empty($file_variable['name'])){
            return array("status" => false);
        }else{
            $original_filename=$file_variable['name'];
            $ext = pathinfo($original_filename, PATHINFO_EXTENSION); 
            $path_parts=pathinfo($original_filename, PATHINFO_FILENAME);
            $filename_without_ext = basename($original_filename, '.'.$ext);
            $newfilename = str_replace(' ','-', $filename).'-'.getToken(5). '.' . $ext; 
            move_uploaded_file($file_variable["tmp_name"], $path.$newfilename);
            return array("status" => true, "filename" => $newfilename);
        }
    }

    function sendMails($from_mail, $from_name, $receiver, $subject, $txt, $api_key){
        $postdata =array ( 'personalizations'=> array ( 0=> array ( 'to'=> array ( 0=> array ( 'email'=> $receiver ) ) ) ), 'from'=> array ( 'name'=> $from_name, 'email'=> $from_mail ), 'subject'=> $subject, 'content'=> array ( 0=> array ( 'type'=> 'text/html', 'value'=> $txt ) ));
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.sendgrid.com/v3/mail/send');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postdata));

        $headers = array();
        $headers[] = 'Authorization: Bearer '.$api_key;
        $headers[] = 'Content-Type: application/json';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close($ch);
        
    }

    function timeago($time_ago){
         $time_ago = strtotime($time_ago);
         $cur_time   = time();
         $time_elapsed   = $cur_time - $time_ago;
         $seconds    = $time_elapsed ;
         $minutes    = round($time_elapsed / 60 );
         $hours      = round($time_elapsed / 3600);
         $days       = round($time_elapsed / 86400 );
         $weeks      = round($time_elapsed / 604800);
         $months     = round($time_elapsed / 2600640 );
         $years      = round($time_elapsed / 31207680 );
         // Seconds
         if($seconds <= 60){
             return "just now";
         }
         //Minutes
         else if($minutes <=60){
             if($minutes==1){
                 return "1 minute ago";
             }
             else{
                 return "$minutes mins ago";
             }
         }
         //Hours
         else if($hours <=24){
             if($hours==1){
                 return "1 hour ago";
             }else{
                 return "$hours hours ago";
             }
         }
         //Days
         else if($days <= 7){
             if($days==1){
                 return "yesterday";
             }else{
                 return "$days days ago";
             }
         }
         //Weeks
         else if($weeks <= 4.3){
             if($weeks==1){
                 return "1 week ago";
             }else{
                 return "$weeks weeks ago";
             }
         }
         //Months
         else if($months <=12){
             if($months==1){
                 return "1 mo ago";
             }else{
                 return "$months months ago";
             }
         }
         //Years
         else{
             if($years==1){
                 return "1 yr ago";
             }else{
                 return "$years yrs ago";
             }
         }
    }

    function image_crop($source_image, $destination, $tn_w = 100, $tn_h = 100, $quality = 90){
        $info = getimagesize($source_image);
        $imgtype = image_type_to_mime_type($info[2]);
        switch ($imgtype) {
            case 'image/jpeg':
                $source = imagecreatefromjpeg($source_image);
                break;
            case 'image/jpg':
                $source = imagecreatefromjpeg($source_image);
                break;
            case 'image/JPG':
                $source = imagecreatefromjpeg($source_image);
                break;
            case 'image/gif':
                $source = imagecreatefromgif($source_image);
                break;
            case 'image/png':
                $source = imagecreatefrompng($source_image);
                break;
            case 'image/PNG':
                $source = imagecreatefrompng($source_image);
                break;
            default:
                die('Invalid image type.');
        }
        $src_w = imagesx($source);
        $src_h = imagesy($source);
        $src_ratio = $src_w / $src_h;
        if ($tn_w / $tn_h > $src_ratio) {
            $new_h = $tn_w / $src_ratio;
            $new_w = $tn_w;
        } else {
            $new_w = $tn_h * $src_ratio;
            $new_h = $tn_h;
        }
        $x_mid = $new_w / 2;
        $y_mid = $new_h / 2;
        $newpic = imagecreatetruecolor(round($new_w), round($new_h));
        imagecopyresampled($newpic, $source, 0, 0, 0, 0, $new_w, $new_h, $src_w, $src_h);
        $final = imagecreatetruecolor($tn_w, $tn_h);
        imagecopyresampled($final, $newpic, 0, 0, $x_mid - $tn_w / 2, $y_mid - $tn_h / 2, $tn_w, $tn_h, $tn_w, $tn_h);
        if (Imagejpeg($final, $destination, $quality)) {
            return true;
        }
        return false;
    }

    function check_mail($email){
        $disposable_list = array("0-mail.com","0815.ru","0clickemail.com","0wnd.net","0wnd.org","10minutemail.com","20minutemail.com","2prong.com","30minutemail.com","3d-painting.com","4warding.com","4warding.net","4warding.org","60minutemail.com","675hosting.com","675hosting.net","675hosting.org","6url.com","75hosting.com","75hosting.net","75hosting.org","7tags.com","9ox.net","a-bc.net","afrobacon.com","ajaxapp.net","amilegit.com","amiri.net","amiriindustries.com","anonbox.net","anonymbox.com","antichef.com","antichef.net","antispam.de","baxomale.ht.cx","beefmilk.com","binkmail.com","bio-muesli.net","bobmail.info","bodhi.lawlita.com","bofthew.com","brefmail.com","broadbandninja.com","bsnow.net","bugmenot.com","bumpymail.com","casualdx.com","centermail.com","centermail.net","chogmail.com","choicemail1.com","cool.fr.nf","correo.blogos.net","cosmorph.com","courriel.fr.nf","courrieltemporaire.com","cubiclink.com","curryworld.de","cust.in","dacoolest.com","dandikmail.com","dayrep.com","deadaddress.com","deadspam.com","despam.it","despammed.com","devnullmail.com","dfgh.net","digitalsanctuary.com","discardmail.com","discardmail.de","Disposableemailaddresses:emailmiser.com","disposableaddress.com","disposeamail.com","disposemail.com","dispostable.com","dm.w3internet.co.ukexample.com","dodgeit.com","dodgit.com","dodgit.org","donemail.ru","dontreg.com","dontsendmespam.de","dump-email.info","dumpandjunk.com","dumpmail.de","dumpyemail.com","e4ward.com","email60.com","emaildienst.de","emailias.com","emailigo.de","emailinfive.com","emailmiser.com","emailsensei.com","emailtemporario.com.br","emailto.de","emailwarden.com","emailx.at.hm","emailxfer.com","emz.net","enterto.com","ephemail.net","etranquil.com","etranquil.net","etranquil.org","explodemail.com","fakeinbox.com","fakeinformation.com","fastacura.com","fastchevy.com","fastchrysler.com","fastkawasaki.com","fastmazda.com","fastmitsubishi.com","fastnissan.com","fastsubaru.com","fastsuzuki.com","fasttoyota.com","fastyamaha.com","filzmail.com","fizmail.com","fr33mail.info","frapmail.com","front14.org","fux0ringduh.com","garliclife.com","get1mail.com","get2mail.fr","getonemail.com","getonemail.net","ghosttexter.de","girlsundertheinfluence.com","gishpuppy.com","gowikibooks.com","gowikicampus.com","gowikicars.com","gowikifilms.com","gowikigames.com","gowikimusic.com","gowikinetwork.com","gowikitravel.com","gowikitv.com","great-host.in","greensloth.com","gsrv.co.uk","guerillamail.biz","guerillamail.com","guerillamail.net","guerillamail.org","guerrillamail.biz","guerrillamail.com","guerrillamail.de","guerrillamail.net","guerrillamail.org","guerrillamailblock.com","h.mintemail.com","h8s.org","haltospam.com","hatespam.org","hidemail.de","hochsitze.com","hotpop.com","hulapla.de","ieatspam.eu","ieatspam.info","ihateyoualot.info","iheartspam.org","imails.info","inboxclean.com","inboxclean.org","incognitomail.com","incognitomail.net","incognitomail.org","insorg-mail.info","ipoo.org","irish2me.com","iwi.net","jetable.com","jetable.fr.nf","jetable.net","jetable.org","jnxjn.com","junk1e.com","kasmail.com","kaspop.com","keepmymail.com","killmail.com","killmail.net","kir.ch.tc","klassmaster.com","klassmaster.net","klzlk.com","kulturbetrieb.info","kurzepost.de","letthemeatspam.com","lhsdv.com","lifebyfood.com","link2mail.net","litedrop.com","lol.ovpn.to","lookugly.com","lopl.co.cc","lortemail.dk","lr78.com","m4ilweb.info","maboard.com","mail-temporaire.fr","mail.by","mail.mezimages.net","mail2rss.org","mail333.com","mail4trash.com","mailbidon.com","mailblocks.com","mailcatch.com","maileater.com","mailexpire.com","mailfreeonline.com","mailin8r.com","mailinater.com","mailinator.com","mailinator.net","mailinator2.com","mailincubator.com","mailme.ir","mailme.lv","mailmetrash.com","mailmoat.com","mailnator.com","mailnesia.com","mailnull.com","mailshell.com","mailsiphon.com","mailslite.com","mailzilla.com","mailzilla.org","mbx.cc","mega.zik.dj","meinspamschutz.de","meltmail.com","messagebeamer.de","mierdamail.com","mintemail.com","moburl.com","moncourrier.fr.nf","monemail.fr.nf","monmail.fr.nf","msa.minsmail.com","mt2009.com","mx0.wwwnew.eu","mycleaninbox.net","mypartyclip.de","myphantomemail.com","myspaceinc.com","myspaceinc.net","myspaceinc.org","myspacepimpedup.com","myspamless.com","mytrashmail.com","neomailbox.com","nepwk.com","nervmich.net","nervtmich.net","netmails.com","netmails.net","netzidiot.de","neverbox.com","no-spam.ws","nobulk.com","noclickemail.com","nogmailspam.info","nomail.xl.cx","nomail2me.com","nomorespamemails.com","nospam.ze.tc","nospam4.us","nospamfor.us","nospamthanks.info","notmailinator.com","nowmymail.com","nurfuerspam.de","nus.edu.sg","nwldx.com","objectmail.com","obobbo.com","oneoffemail.com","onewaymail.com","online.ms","oopi.org","ordinaryamerican.net","otherinbox.com","ourklips.com","outlawspam.com","ovpn.to","owlpic.com","pancakemail.com","pimpedupmyspace.com","pjjkp.com","politikerclub.de","poofy.org","pookmail.com","privacy.net","proxymail.eu","prtnx.com","punkass.com","PutThisInYourSpamDatabase.com","qq.com","quickinbox.com","rcpt.at","recode.me","recursor.net","regbypass.com","regbypass.comsafe-mail.net","rejectmail.com","rklips.com","rmqkr.net","rppkn.com","rtrtr.com","s0ny.net","safe-mail.net","safersignup.de","safetymail.info","safetypost.de","sandelf.de","saynotospams.com","selfdestructingmail.com","SendSpamHere.com","sharklasers.com","shiftmail.com","shitmail.me","shortmail.net","sibmail.com","skeefmail.com","slaskpost.se","slopsbox.com","smellfear.com","snakemail.com","sneakemail.com","sofimail.com","sofort-mail.de","sogetthis.com","soodonims.com","spam.la","spam.su","spamavert.com","spambob.com","spambob.net","spambob.org","spambog.com","spambog.de","spambog.ru","spambox.info","spambox.irishspringrealty.com","spambox.us","spamcannon.com","spamcannon.net","spamcero.com","spamcon.org","spamcorptastic.com","spamcowboy.com","spamcowboy.net","spamcowboy.org","spamday.com","spamex.com","spamfree24.com","spamfree24.de","spamfree24.eu","spamfree24.info","spamfree24.net","spamfree24.org","SpamHereLots.com","SpamHerePlease.com","spamhole.com","spamify.com","spaminator.de","spamkill.info","spaml.com","spaml.de","spammotel.com","spamobox.com","spamoff.de","spamslicer.com","spamspot.com","spamthis.co.uk","spamthisplease.com","spamtrail.com","speed.1s.fr","supergreatmail.com","supermailer.jp","suremail.info","teewars.org","teleworm.com","tempalias.com","tempe-mail.com","tempemail.biz","tempemail.com","TempEMail.net","tempinbox.co.uk","tempinbox.com","tempmail.it","tempmail2.com","tempomail.fr","temporarily.de","temporarioemail.com.br","temporaryemail.net","temporaryforwarding.com","temporaryinbox.com","thanksnospam.info","thankyou2010.com","thisisnotmyrealemail.com","throwawayemailaddress.com","tilien.com","tmailinator.com","tradermail.info","trash-amil.com","trash-mail.at","trash-mail.com","trash-mail.de","trash2009.com","trashemail.de","trashmail.at","trashmail.com","trashmail.de","trashmail.me","trashmail.net","trashmail.org","trashmail.ws","trashmailer.com","trashymail.com","trashymail.net","trillianpro.com","turual.com","twinmail.de","tyldd.com","uggsrock.com","upliftnow.com","uplipht.com","venompen.com","veryrealemail.com","viditag.com","viewcastmedia.com","viewcastmedia.net","viewcastmedia.org","webm4il.info","wegwerfadresse.de","wegwerfemail.de","wegwerfmail.de","wegwerfmail.net","wegwerfmail.org","wetrainbayarea.com","wetrainbayarea.org","wh4f.org","whyspam.me","willselfdestruct.com","winemaven.info","wronghead.com","wuzup.net","wuzupmail.net","www.e4ward.com","www.gishpuppy.com","www.mailinator.com","wwwnew.eu","xagloo.com","xemaps.com","xents.com","xmaily.com","xoxy.net","yep.it","yogamaven.com","yopmail.com","yopmail.fr","yopmail.net","ypmail.webarnak.fr.eu.org","yuurok.com","zehnminutenmail.de","zippymail.info","zoaxe.com","zoemail.org","33mail.com","maildrop.cc","inboxalias.com","spam4.me","koszmail.pl","tagyourself.com","whatpaas.com","drdrb.com","emeil.in","azmeil.tk","mailfa.tk","inbax.tk","emeil.ir","cloud-mail.top","montokop.pw","myinbox.icu");
            $domain = substr(strrchr($email, "@"), 1);
            if(in_array($domain, $disposable_list)){ 
                return false;
            }else{
                return true;
            }
    }

?>