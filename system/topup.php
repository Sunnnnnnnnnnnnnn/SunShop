<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'a_func.php';

function dd_return($status, $message) {
    if ($status) {
        $json = ['status'=> 'success','message' => $message];
        http_response_code(200);
        die(json_encode($json));
    }else{
        $json = ['status'=> 'fail','message' => $message];
        http_response_code(400);
        die(json_encode($json));
    }
}

//////////////////////////////////////////////////////////////////////////

header('Content-Type: application/json; charset=utf-8;');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_SESSION['id'])) {
    $link = $_POST['link'];
        if ($link != "" ) {
        //================================================================
            $f = dd_q("SELECT * FROM setting");
            $dt = $f->fetch(PDO::FETCH_ASSOC);
            $voucher_hash = str_replace("https://gift.truemoney.com/campaign/?v=", "",$link);
            $phone = $dt['wallet'];
            $curl = curl_init();
                curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://gift.truemoney.com/campaign/vouchers/'.$voucher_hash.'/redeem',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => json_encode(array('mobile' => $phone,'voucher_hash' => $voucher_hash)),
                CURLOPT_HTTPHEADER => array(
                    'accept: application/json',
                    'content-type: application/json',
                    
                ),
                CURLOPT_USERAGENT => "xdnz_hello"
            ));
            
            $response = curl_exec($curl);
            curl_close($curl);
            $result = json_decode($response);
            if (isset($result->status->code)) {
                $codestatus = $result->status->code;
                $member = $result->data->voucher->member;
                if($member < 2){
                    if ($codestatus == "VOUCHER_OUT_OF_STOCK") {
                        $message['status'] = "error";
                        $message['info'] = "อั๋งเปานี้ถูกใช้งานไปแล้ว";
                    }elseif ($codestatus == "VOUCHER_NOT_FOUND") {
                        $message['status'] = "error";
                        $message['info'] = "ไม่พบอั๋งเปานี้!!";
                    }elseif ($codestatus == "VOUCHER_EXPIRED"){
                        $message['status'] = "error";
                        $message['info'] = "อั๋งเปาหมดอายุ!!";
                    }elseif ($codestatus == "SUCCESS"){
                        $balance = $result->data->voucher;
                        $ownerprofile = $result->data->owner_profile;
                            //code add point here
                        $pf = dd_q("SELECT * FROM users WHERE id = ? ", [$_SESSION['id']]);
                        $profile = $pf->fetch(PDO::FETCH_ASSOC);
                        $amount = $balance->redeemed_amount_baht;
                        $amount = str_replace(",","",$amount);;
                        $val = (int) $amount;
                        if($dt['fee'] == "on"){
                            $fee = 0.023 * $val;
                            if($fee > 10){
                                $fee = 10;
                            }
                            $val = $val - $fee;
                        }

                        $ha = dd_q("INSERT INTO `topup_his` (`id`, `link`, `amount`, `date`, `uid`, `uname`) VALUES (NULL, ? ,  ? , NOW() , ? , ? )",
                        [
                            $link,
                            $amount,
                            $_SESSION['id'],
                            $profile['username']
                        ]
                        );
                        $add = dd_q("UPDATE users SET point = point +  ? , total = total + ? WHERE id = ? ",
                            [
                            $val,
                            $val,
                            $_SESSION['id']
                        
                            ]
                        );
                        $json_data = json_encode([
                            "username" => "Overdrive Topup",
                            "tts" => false,
                            "embeds" => [
                                [
                                    "title" => "มีการเติมเงินมาใหม่",
                                    "type" => "rich",
                                    "timestamp" => date("c", strtotime("now")),
                                    "color" => hexdec( "3366ff" ),
                                    "thumbnail" => [
                                        "url" => $config['logo']
                                    ],
                                    "fields" => [
                                        [
                                            "name" => "ชื่อผู้ใช้",
                                            "value" => $profile['username'],
                                            "inline" => false
                                        ],
                                        [
                                            "name" => "จำนวนเงิน",
                                            "value" => $amount,
                                            "inline" => false
                                        ]
                                    ]
                                ]
                            ]
                        
                        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
                        
                        
                        $ch = curl_init( $config['webhook_dc'] );
                        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
                        curl_setopt( $ch, CURLOPT_POST, 1);
                        curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
                        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
                        curl_setopt( $ch, CURLOPT_HEADER, 0);
                        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
                        
                        $response = curl_exec( $ch );
                        curl_close( $ch );
                        dd_return(true, "คุณได้รับเงินจำนวน ".$val." พ้อยท์");
                    }else{
                        $message['status'] = "error";
                        $message['info'] = "ไม่ทราบสาเหตุ!!";
                    }
                }else{
                    $message['status'] = "error";
                    $message['info'] = "ตั้งซองอั่งเปาเป็นหนึ่งคนเท่านั้น";
                }
            }else{
                $message['status'] = "error";
                $message['info'] = "ลิ้งอั๋งเปาไม่ถูกต้อง";
            }
            if(isset($message)){
                dd_return(false, $message['info']);
            }
        }
    //================================================================
    }else{
        dd_return(false, "เข้าสู่ระบบก่อนดำเนินการครับ ");
    }
    }else{
        dd_return(false, "Method '{$_SERVER['REQUEST_METHOD']}' not allowed!");

    }
