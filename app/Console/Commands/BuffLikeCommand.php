<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class BuffLikeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Bufflike:insta';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $listAccounts = [
          ["username"=> "loccaokhong","password"=>"lamhien"],
          ["username"=> "giaonguyenhau","password"=>"lamhien"],
          ["username"=> "tamienloi","password"=>"lamhien"],
          ["username"=> "danggiangkhue","password"=>"lamhien"],
          ["username"=> "luonghuongbich","password"=>"lamhien"],
          ["username"=> "vuchauhien","password"=>"lamhien"],
          ["username"=> "giaolambui","password"=>"lamhien"],
          ["username"=> "tieumihuyen","password"=>"lamhien"],
          ["username"=> "onglanhang","password"=>"lamhien"],
          ["username"=> "duphuongngo","password"=>"lamhien"],
          ["username"=> "caokhongdinh","password"=>"lamhien"],
          ["username"=> "nghihoatruong","password"=>"lamhien"],
          ["username"=> "nonglamdieu","password"=>"lamhien"],
          ["username"=> "kimtoloi","password"=>"lamhien"],
          ["username"=> "tangminhkhai","password"=>"lamhien"],
          ["username"=> "dogiapbach","password"=>"lamhien"],
          ["username"=> "tongnhungchinh","password"=>"lamhien"],
          ["username"=> "giapchuongbui","password"=>"lamhien"],
          ["username"=> "lyhieuchinh","password"=>"lamhien"],
          ["username"=> "dogiadinh","password"=>"lamhien"],
          ["username"=> "giangkhoid","password"=>"lamhien"],
          ["username"=> "honggiang","password"=>"lamhien"],
          ["username"=> "tieumybang","password"=>"lamhien"],
          ["username"=> "chuongmaihiep","password"=>"lamhien"],
          ["username"=> "buigiaohau","password"=>"lamhien"],
          ["username"=> "khedoantieu","password"=>"lamhien"],
          ["username"=> "phuongnga785","password"=>"lamhien"],
          ["username"=> "lamlyhua","password"=>"lamhien"],
          ["username"=> "tunhuhanh","password"=>"lamhien"],
          ["username"=> "loivophi","password"=>"lamhien"],
          ["username"=> "hoangdaukhai","password"=>"lamhien"],
          ["username"=> "lyhieuhien","password"=>"lamhien"],
          ["username"=> "tongnhancu","password"=>"lamhien"],
          ["username"=> "vdoandoan","password"=>"lamhien"],
          ["username"=> "huynhdinhl","password"=>"lamhien"],
          ["username"=> "huyendieu_l","password"=>"lamhien"],
          ["username"=> "linhhaongo","password"=>"lamhien"],
          ["username"=> "nonglanhue","password"=>"lamhien"],
          ["username"=> "trieukhoihau","password"=>"lamhien"],
          ["username"=> "lehuyendu","password"=>"lamhien"],
          ["username"=> "hoaihaola","password"=>"lamhien"],
          ["username"=> "huynhdinhmien","password"=>"lamhien"],
          ["username"=> "toloichuong","password"=>"lamhien"],
          ["username"=> "onglinhhuyen","password"=>"lamhien"],
          ["username"=> "margovardab","password"=>"lamhien"],
          ["username"=> "chauchinhvu","password"=>"lamhien"],
          ["username"=> "tongancat","password"=>"lamhien"],
          ["username"=> "maihaidiem","password"=>"lamhien"],
          ["username"=> "daolinhbui","password"=>"lamhien"],
          ["username"=>  "nguyenhopngan", "password"=> "lamhien"]
        ];
        $mediaId = "2551329546197920366";
        $urlLikePost = "https://sontest1.extremevn.vn/api/likePostbyID";

        $errors = [];
        $success = [];
        foreach ($listAccounts as $key => $account) {
            try {
                $res = Http::withHeaders([
                    'Accept' => 'application/json'
                ])->post($urlLikePost, [
                    'username' => $account['username'],
                    'password' => $account['password'],
                    'mediaId' => $mediaId
                ]);
                $success[] = json_decode($responseMedia->body())->data;
            } catch(\Exception $e) {
                $errors[] = $e;
                continue;
            }
            sleep(3);
        }
        return ['success' => $success, 'errors' => $errors];
    }
}
