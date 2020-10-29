<?php

require 'function.php';
echo " _______   __  ___  ________   _______ _____  _     _ 
|  ___\ \ / / / _ \ | ___ \ \ / /_   _|  ___|(_)   | |
| |__  \ V / / /_\ \| |_/ /\ V /  | | | |__   _  __| |
|  __| /   \ |  _  || ___ \ \ /   | | |  __| | |/ _` |
| |___/ /^\ \| | | || |_/ / | |   | | | |____| | (_| |
\____/\/   \/\_| |_/\____/  \_/   \_/ \____(_)_|\__,_|  Creator By Apri Amsyah\n\n";
echo "Total Akun Yang Mau Dibuat : ";
$total = trim(fgets(STDIN));
echo "Passsword (Example Password : Alfarz123!) : ";
$passwd = trim(fgets(STDIN));
echo "\n";

$no = 1;
for ($x = 1; $x <= $total; $x++) {	
    $nama = explode(" ", nama());
    $nama1 = $nama[0];
    $nama2 = $nama[1];
    $hasil_1= acak(5);
    $email = ''.$nama1.''.$hasil_1.'%40cerbidurch.cf';
    $datacurl = ''.$nama1.''.$hasil_1.'';

    $headers = [
        'Host: billing.exabytes.co.id',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:81.0) Gecko/20100101 Firefox/81.0',
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
        'Accept-Language: en-US,en;q=0.5',
        'Connection: close',
        'Referer: https://billing.exabytes.co.id/clientarea.php',
        'Upgrade-Insecure-Requests: 1',
    ];

    $cookie = curl('https://billing.exabytes.co.id/register.php', null, $headers);
    $token = get_between($cookie[1], "var csrfToken = '", "'");
    $cfduid = $cookie[2]['__cfduid'];
    $whmcs = $cookie[2]['WHMCSczBjLY8SKzpn'];
    
    $headers = [
        'Host: billing.exabytes.co.id',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:81.0) Gecko/20100101 Firefox/81.0',
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
        'Accept-Language: en-US,en;q=0.5',
        'Content-Type: application/x-www-form-urlencoded',
        'Origin: https://billing.exabytes.co.id',
        'Connection: close',
        'Referer: https://billing.exabytes.co.id/register.php',
        'Cookie: __cfduid='.$cfduid.'; _gcl_au=1.1.40924196.1603904960; gaconnector_pages_visited_list=/|/clientarea.php|/register.php|/logout.php; gaconnector_page_visits=8; gaconnector_all_traffic_sources=undefined/undefined; gaconnector_time_passed=1428587; _ga=GA1.3.853195530.1603904969; _gid=GA1.3.132239193.1603904969; gaconnector_GA_Client_ID=853195530.1603904969; _fbp=fb.2.1603904969388.1195092520; _hjTLDTest=1; _hjid=0ae5bd2d-95e0-401b-86c8-0f6dbfd07f4a; _hjAbsoluteSessionInProgress=0; WHMCSczBjLY8SKzpn='.$whmcs.'; first_session=%7B%22visits%22%3A7%2C%22start%22%3A1603904978117%2C%22last_visit%22%3A1603905572193%2C%22url%22%3A%22https%3A%2F%2Fbilling.exabytes.co.id%2Fclientarea.php%22%2C%22path%22%3A%22%2Fclientarea.php%22%2C%22referrer%22%3A%22https%3A%2F%2Fwww.exabytes.co.id%2F%22%2C%22referrer_info%22%3A%7B%22host%22%3A%22www.exabytes.co.id%22%2C%22path%22%3A%22%2F%22%2C%22protocol%22%3A%22https%3A%22%2C%22port%22%3A80%2C%22search%22%3A%22%22%2C%22query%22%3A%7B%7D%7D%2C%22search%22%3A%7B%22engine%22%3Anull%2C%22query%22%3Anull%7D%2C%22prev_visit%22%3A1603905567429%2C%22time_since_last_visit%22%3A4764%2C%22version%22%3A0.4%7D; _fw_crm_v=9f4ae153-0a16-4492-9622-5713fb977344; _ga=GA1.4.853195530.1603904969; _gid=GA1.4.132239193.1603904969; _hjIncludedInPageviewSample=1; G_ENABLED_IDPS=google; _omappvp=yvfuFrIBHFMTc4X0lKIDJcL7eYIHi7LhtbIiDpW0xUhZNoeGagGfTDzZ24ZVtxNiMinQcY3dIUnIaHFVm2XiPfOGUSAPOgCN; _omappvs=1603905575434; cus=apriamsyah%40haikak.my.id; NPS_1166e4d3_last_seen=1603905054321; NPS_1166e4d3_throttle=1603948256835',
        'Upgrade-Insecure-Requests: 1',
    ];

    $data = 'token='.$token.'&register=true&firstname='.$nama1.'&lastname='.$nama2.'&email='.$nama1.''.$nama2.''.$hasil_1.'%40aprilmovo.com&phonenumber=0812806'.$hasil_1.'&companyname=jakarta&address1=Jalan+Taruna+Jaya&address2=&city=Jakarta&state=jakarta&postcode='.$hasil_1.'&country=ID&customfield%5B467%5D=0812806'.$hasil_1.'&customfield%5B717%5D=&customfield%5B811%5D=&customfield%5B856%5D=&currency=1&password='.$passwd.'&password2='.$passwd.'&securityqid=1&securityqans=merah&marketingoptin=1&accepttos=on';
    $regis = curl('https://billing.exabytes.co.id/register.php', $data, $headers);
    $email = $regis[2]['cus'];
    if ($email) {
        echo "[1] Berhasil Register Dengan Email $email | $passwd\n";
    } else {
        echo "[1] Gagal Register\n";
    }

    $headers = array();
    $headers[] = 'Host: generator.email';
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:77.0) Gecko/20100101 Firefox/77.0';
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8';
    $headers[] = 'Accept-Language: id,en-US;q=0.7,en;q=0.3';
    $headers[] = 'Connection: close';
    $headers[] = 'Cookie: surl=aprilmovo.com%2F'.$nama1.''.$nama2.''.$hasil_1.'; _ga=GA1.2.1171942595.1592936484; _gid=GA1.2.1882707753.1592936484; __gads=ID=123d57699689eca8:T=1592936486:S=ALNI_MZ5U15we3U99-D5aAEncHBqVAhQUw; _gat=1';
    $headers[] = 'Upgrade-Insecure-Requests: 1';

    $verifmail = curl('https://generator.email/inbox3/', null, $headers);
    $verificationlink = get_between($verifmail[1], 'VerificationLink" rel="nofollow" target="_blank">', '</a');
    $verifcode = get_between($verifmail[1], 'https://billing.exabytes.co.id/clientarea.php?verificationId=', '"');

    $headers = [
        'Host: billing.exabytes.co.id',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:81.0) Gecko/20100101 Firefox/81.0',
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
        'Accept-Language: en-US,en;q=0.5',
        'Connection: close',
        'Cookie: __cfduid='.$cfduid.'; _gcl_au=1.1.40924196.1603904960; gaconnector_pages_visited_list=/|/clientarea.php|/register.php|/logout.php; gaconnector_page_visits=10; gaconnector_all_traffic_sources=undefined/undefined; gaconnector_time_passed=2877346; _ga=GA1.3.853195530.1603904969; _gid=GA1.3.132239193.1603904969; gaconnector_GA_Client_ID=853195530.1603904969; _fbp=fb.2.1603904969388.1195092520; _hjTLDTest=1; _hjid=0ae5bd2d-95e0-401b-86c8-0f6dbfd07f4a; WHMCSczBjLY8SKzpn='.$whmcs.'; first_session=%7B%22visits%22%3A9%2C%22start%22%3A1603904978117%2C%22last_visit%22%3A1603906990321%2C%22url%22%3A%22https%3A%2F%2Fbilling.exabytes.co.id%2Fclientarea.php%22%2C%22path%22%3A%22%2Fclientarea.php%22%2C%22referrer%22%3A%22https%3A%2F%2Fwww.exabytes.co.id%2F%22%2C%22referrer_info%22%3A%7B%22host%22%3A%22www.exabytes.co.id%22%2C%22path%22%3A%22%2F%22%2C%22protocol%22%3A%22https%3A%22%2C%22port%22%3A80%2C%22search%22%3A%22%22%2C%22query%22%3A%7B%7D%7D%2C%22search%22%3A%7B%22engine%22%3Anull%2C%22query%22%3Anull%7D%2C%22prev_visit%22%3A1603905756184%2C%22time_since_last_visit%22%3A1234137%2C%22version%22%3A0.4%7D; _fw_crm_v=9f4ae153-0a16-4492-9622-5713fb977344; _ga=GA1.4.853195530.1603904969; _gid=GA1.4.132239193.1603904969; _hjIncludedInPageviewSample=1; G_ENABLED_IDPS=google; _omappvp=yvfuFrIBHFMTc4X0lKIDJcL7eYIHi7LhtbIiDpW0xUhZNoeGagGfTDzZ24ZVtxNiMinQcY3dIUnIaHFVm2XiPfOGUSAPOgCN; cus=dowermotovlog%40gmail.com; NPS_1166e4d3_last_seen=1603905054321; NPS_1166e4d3_throttle=1603948256835',
        'Upgrade-Insecure-Requests: 1',
    ];


    $login = curl(''.$verificationlink.'', null, $headers);
    $token = get_between($login[1], "   var csrfToken = '", "'");

    $headers = [
        'Host: billing.exabytes.co.id',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:81.0) Gecko/20100101 Firefox/81.0',
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
        'Accept-Language: en-US,en;q=0.5',
        'Content-Type: application/x-www-form-urlencoded',
        'Origin: https://billing.exabytes.co.id',
        'Connection: close',
        'Referer: '.$verificationlink.'',
        'Cookie: __cfduid='.$cfduid.'; _gcl_au=1.1.40924196.1603904960; gaconnector_pages_visited_list=/|/clientarea.php|/register.php|/logout.php; gaconnector_page_visits=14; gaconnector_all_traffic_sources=undefined/undefined, undefined/undefined, undefined/undefined; gaconnector_time_passed=4089408; _ga=GA1.3.853195530.1603904969; _gid=GA1.3.132239193.1603904969; gaconnector_GA_Client_ID=853195530.1603904969; _fbp=fb.2.1603904969388.1195092520; _hjTLDTest=1; _hjid=0ae5bd2d-95e0-401b-86c8-0f6dbfd07f4a; WHMCSczBjLY8SKzpn='.$whmcs.'; first_session=%7B%22visits%22%3A13%2C%22start%22%3A1603904978117%2C%22last_visit%22%3A1603908387360%2C%22url%22%3A%22https%3A%2F%2Fbilling.exabytes.co.id%2Fclientarea.php%22%2C%22path%22%3A%22%2Fclientarea.php%22%2C%22referrer%22%3A%22https%3A%2F%2Fwww.exabytes.co.id%2F%22%2C%22referrer_info%22%3A%7B%22host%22%3A%22www.exabytes.co.id%22%2C%22path%22%3A%22%2F%22%2C%22protocol%22%3A%22https%3A%22%2C%22port%22%3A80%2C%22search%22%3A%22%22%2C%22query%22%3A%7B%7D%7D%2C%22search%22%3A%7B%22engine%22%3Anull%2C%22query%22%3Anull%7D%2C%22prev_visit%22%3A1603908298308%2C%22time_since_last_visit%22%3A89052%2C%22version%22%3A0.4%7D; _fw_crm_v=9f4ae153-0a16-4492-9622-5713fb977344; _ga=GA1.4.853195530.1603904969; _gid=GA1.4.132239193.1603904969; _hjIncludedInPageviewSample=1; G_ENABLED_IDPS=google; _omappvp=yvfuFrIBHFMTc4X0lKIDJcL7eYIHi7LhtbIiDpW0xUhZNoeGagGfTDzZ24ZVtxNiMinQcY3dIUnIaHFVm2XiPfOGUSAPOgCN; cus=dowermotovlog%40gmail.com; NPS_1166e4d3_last_seen=1603905054321; NPS_1166e4d3_throttle=1603948256835; _gat_UA-15660283-16=1',
        'Upgrade-Insecure-Requests: 1',
    ];

    $data = 'token='.$token.'&username='.$nama1.''.$nama2.''.$hasil_1.'%40aprilmovo.com&password='.$passwd.'';
    $login = curl('https://billing.exabytes.co.id/dologin.php', $data, $headers);
    $whmcs = $login[2]['WHMCSczBjLY8SKzpn'];
    if ($whmcs) {
        echo "[2] Berhasil Login $email | $passwd\n";
    } else {
        echo "[2] Gagal Register\n";
    }

    $headers = [
        'Host: billing.exabytes.co.id',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:81.0) Gecko/20100101 Firefox/81.0',
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
        'Accept-Language: en-US,en;q=0.5',
        'Referer: '.$verificationlink.'',
        'Connection: close',
        'Cookie: __cfduid='.$cfduid.'; _gcl_au=1.1.40924196.1603904960; gaconnector_pages_visited_list=/|/clientarea.php|/register.php|/logout.php; gaconnector_page_visits=14; gaconnector_all_traffic_sources=undefined/undefined, undefined/undefined, undefined/undefined; gaconnector_time_passed=4095458; _ga=GA1.3.853195530.1603904969; _gid=GA1.3.132239193.1603904969; gaconnector_GA_Client_ID=853195530.1603904969; _fbp=fb.2.1603904969388.1195092520; _hjTLDTest=1; _hjid=0ae5bd2d-95e0-401b-86c8-0f6dbfd07f4a; WHMCSczBjLY8SKzpn='.$whmcs.'; first_session=%7B%22visits%22%3A13%2C%22start%22%3A1603904978117%2C%22last_visit%22%3A1603908387360%2C%22url%22%3A%22https%3A%2F%2Fbilling.exabytes.co.id%2Fclientarea.php%22%2C%22path%22%3A%22%2Fclientarea.php%22%2C%22referrer%22%3A%22https%3A%2F%2Fwww.exabytes.co.id%2F%22%2C%22referrer_info%22%3A%7B%22host%22%3A%22www.exabytes.co.id%22%2C%22path%22%3A%22%2F%22%2C%22protocol%22%3A%22https%3A%22%2C%22port%22%3A80%2C%22search%22%3A%22%22%2C%22query%22%3A%7B%7D%7D%2C%22search%22%3A%7B%22engine%22%3Anull%2C%22query%22%3Anull%7D%2C%22prev_visit%22%3A1603908298308%2C%22time_since_last_visit%22%3A89052%2C%22version%22%3A0.4%7D; _fw_crm_v=9f4ae153-0a16-4492-9622-5713fb977344; _ga=GA1.4.853195530.1603904969; _gid=GA1.4.132239193.1603904969; _hjIncludedInPageviewSample=1; G_ENABLED_IDPS=google; _omappvp=yvfuFrIBHFMTc4X0lKIDJcL7eYIHi7LhtbIiDpW0xUhZNoeGagGfTDzZ24ZVtxNiMinQcY3dIUnIaHFVm2XiPfOGUSAPOgCN; cus=dowermotovlog%40gmail.com; NPS_1166e4d3_last_seen=1603905054321; NPS_1166e4d3_throttle=1603948256835; _gat_UA-15660283-16=1',
        'Upgrade-Insecure-Requests: 1',
    ];
    
    $verifakun = curl('https://billing.exabytes.co.id/clientarea.php?verificationId='.$verifcode.'', null, $headers);
    if (strpos($verifakun[1], 'Thank you for confirming your email address.')) {
        echo "[3] Verification Email Success\n\n";
        fwrite(fopen("exabytevalid.txt", "a"), "$email|$passwd\n");
    } else {
        echo "[3] Verification Email Failed\n\n";
        fwrite(fopen("exabytenovalid.txt", "a"), "$email|$passwd\n");
    }
}