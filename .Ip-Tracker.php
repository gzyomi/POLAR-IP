<?php>
include("modules/trm.php");
include("modules/help.php");
include("modules/trip.php");

function logo() {
  system("clear");
  echo <<<EOL
\033[01;33m

\033[1;32m██████╗ ██╗  ██╗███████╗\033[1;37m
 \033[1;32m██╔══██╗╚██╗██╔╝██╔════╝\033[1;37m
 \033[1;32m██████╔╝ ╚███╔╝ ███████╗\033[1;37m
 \033[1;32m██╔══██╗ ██╔██╗ ╚════██║\033[1;37m
 \033[1;32m██║  ██║██╔╝ ██╗███████║\033[1;37m
 \033[1;32m╚═╝  ╚═╝╚═╝  ╚═╝╚══════╝\033[1;37m \033[1;36m2.0\033[1;37m
\033[1;36m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\033[1;37m
\033[1;37m Owner   :          POLAR
\033[1;37m TikTok:            ######
\033[1;37m Github  :          ######
\033[1;37m WhatsApp  :        ######
                    \033[1;36mRintraccia ogni indirizzo IP
\033[1;36m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\033[1;37m

\033[00m
EOL;
}

function About() {
  logo();
  echo <<<EOL

         \033[01;33mNome Tool \033[01;37m:- \033[01;36mRXS
         \033[01;33mAutore \033[01;37m:- \033[01;36mPOLAR
         \033[01;33mGithub \033[01;37m:- \033[01;36m###
         \033[01;33mTelegram \033[01;37m:- \033[01;36m###

 \033[01;33mIp-Tracker\033[01;32m is use \033[01;36mip-api \033[01;36mto retrive any ip address information. Our system will automatically ban any IP addresses doing over 150 requests per minute.\033[00m


EOL;
  $getact = readline('  Ip-Tracker >> ');
  menu();
}

function upd() {
  logo();
  echo "\n\033[01;32mUpdating Ip-Tracker.........\033[01;37m\n\n";
  sleep(1);
  system("cd ~/ && git clone https://github.com/BINOD-XD/Ip-Tracker.git");
  system("cd ~/ && sudo git clone https://github.com/BINOD-XD/Ip-Tracker.git");
  system("cd ~/Ip-Tracker && sh install");
  logo();
  echo "\n\033[01;32m              Ip-Tracker updated !!!\033[01;37m\n";
  sleep(1);
  menu();
}

function menu() {
  logo();
  echo "   \033[01;32m[ \033[01;37m1 \033[01;32m] \033[01;33mRintraccia Indirizzo IP\n";
  echo "   \033[01;32m[ \033[01;37m2 \033[01;32m] \033[01;33mRintraccia Il Tuo Indirizzo IP.\n";
  echo "   \033[01;32m[ \033[01;37m3 \033[01;32m] \033[01;33mInformazioni.\n";
  echo "   \033[01;32m[ \033[01;37m4 \033[01;32m] \033[01;33mAiuto.\n";
  echo "   \033[01;32m[ \033[01;37m5 \033[01;32m] \033[01;33mUpdate RXS.\n";
  echo "   \033[01;32m[ \033[01;37mx \033[01;32m] \033[01;33mUscita \n\n\033[00m";
  $inp = readline('  Ip-Tracker >> ');
  if ($inp=="x" || $inp=="exit") {
    echo "\n\033[01;31m  Exiting .......\033[00m\n";
    sleep(1);
    echo "\033[01;32m  Bye ....... :)\n\n\033[00m";
    exit();
  } else if ($inp=="1") {
    trac();
  } else if ($inp=="2") {
    tracm();
  } else if ($inp=="3") {
    About();
  } else if ($inp=="4") {
    help();
  } else if ($inp=="5") {
    upd();
  } else {
    echo "\n  \033[01;31mErr : Invalid Command \033[01;32m'$inp'\033[00m";
    sleep(1);
    menu();
  }
}
menu();
?>
