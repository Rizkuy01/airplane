# Airplane project for VSGA-JWD
#### _by Muhammad Rizky Saputra_



Website data penerbangan untuk berbagai maskapai di Indonesia.

## Features

- Data penerbangan
- Daftar rute
- Penghitungan pajak maskapai
- Pencarian rute dan maskapai


## Tech

Project website ini menggunakan PHP Native, dengan beberapa teknologi pendukung seperti:

- [Bootstrap v.5] - Pengaplikasian UI untuk library CSS
- [Datatables] - pensortiran dan pencarian data didalam tabel
- [Git Bash] - Terminal untuk mempermudah development
- [Visual Studio Code] - Text editor
- [XAMPP v.3.3] - Web Server

## Installation
Instal Xampp 
Pindahkan folder projek kedalam
```
 c://xampp/htdocs/[folder projejct]
```

## File tree
📦jwd
 ┣ 📂.git
 ┃ ┣ 📂hooks
 ┃ ┃ ┣ 📜applypatch-msg.sample
 ┃ ┃ ┣ 📜commit-msg.sample
 ┃ ┃ ┣ 📜fsmonitor-watchman.sample
 ┃ ┃ ┣ 📜post-update.sample
 ┃ ┃ ┣ 📜pre-applypatch.sample
 ┃ ┃ ┣ 📜pre-commit.sample
 ┃ ┃ ┣ 📜pre-merge-commit.sample
 ┃ ┃ ┣ 📜pre-push.sample
 ┃ ┃ ┣ 📜pre-rebase.sample
 ┃ ┃ ┣ 📜pre-receive.sample
 ┃ ┃ ┣ 📜prepare-commit-msg.sample
 ┃ ┃ ┣ 📜push-to-checkout.sample
 ┃ ┃ ┣ 📜sendemail-validate.sample
 ┃ ┃ ┗ 📜update.sample
 ┃ ┣ 📂info
 ┃ ┃ ┗ 📜exclude
 ┃ ┣ 📂logs
 ┃ ┃ ┣ 📂refs
 ┃ ┃ ┃ ┣ 📂heads
 ┃ ┃ ┃ ┃ ┗ 📜main
 ┃ ┃ ┃ ┗ 📂remotes
 ┃ ┃ ┃ ┃ ┗ 📂origin
 ┃ ┃ ┃ ┃ ┃ ┗ 📜main
 ┃ ┃ ┗ 📜HEAD
 ┃ ┣ 📂objects
 ┃ ┃ ┣ 📂03
 ┃ ┃ ┃ ┗ 📜21e3745c1f4c5ffa45b53bbfb68fb680098e0e
 ┃ ┃ ┣ 📂07
 ┃ ┃ ┃ ┗ 📜a909a9164da3a1f97b0b5cfd3080a5c97100ce
 ┃ ┃ ┣ 📂12
 ┃ ┃ ┃ ┗ 📜636ebd42c27fed7b5324cd1a3a712ebc249df7
 ┃ ┃ ┣ 📂28
 ┃ ┃ ┃ ┗ 📜01f8bb036fbf42f2916624c98865b94894887d
 ┃ ┃ ┣ 📂2f
 ┃ ┃ ┃ ┗ 📜888868e8320bb59201e6fe724317200f1f73d1
 ┃ ┃ ┣ 📂5c
 ┃ ┃ ┃ ┗ 📜f505e73873dcc02acc29768231d0c9d8ede3a0
 ┃ ┃ ┣ 📂60
 ┃ ┃ ┃ ┗ 📜24b809134554e03d2d93eebfea7821c0c89518
 ┃ ┃ ┣ 📂61
 ┃ ┃ ┃ ┗ 📜26762dd672bb65d1f5ef36f1d565799a23eef9
 ┃ ┃ ┣ 📂74
 ┃ ┃ ┃ ┗ 📜d741d882e39b4c625579be4afb8f4008b26493
 ┃ ┃ ┣ 📂8b
 ┃ ┃ ┃ ┗ 📜63338c99c524fa1e1086ca12d2db8710d33331
 ┃ ┃ ┣ 📂b3
 ┃ ┃ ┃ ┗ 📜8fa234ee6a161bcaab47adff31b281d5a39f39
 ┃ ┃ ┣ 📂b9
 ┃ ┃ ┃ ┗ 📜749ab0e3f012a41fdbc8df046653759e0ef8e8
 ┃ ┃ ┣ 📂ce
 ┃ ┃ ┃ ┗ 📜bd37125517d7000586597ecbaa3582ee14e84c
 ┃ ┃ ┣ 📂dd
 ┃ ┃ ┃ ┗ 📜34ef65332634aaea94ccbd0fd8b780ce5ad17a
 ┃ ┃ ┣ 📂e8
 ┃ ┃ ┃ ┗ 📜151f99b396045f6c4eceb3f09fc0bf42570a1f
 ┃ ┃ ┣ 📂e9
 ┃ ┃ ┃ ┗ 📜215b94ad3e5d2bc93b1f9dc25be1e420bc4d74
 ┃ ┃ ┣ 📂eb
 ┃ ┃ ┃ ┗ 📜f731905cfbeea9f2fa4f935884471f8bcc0eea
 ┃ ┃ ┣ 📂f9
 ┃ ┃ ┃ ┗ 📜f766a1a71aa62ea5b1df9d3fc167ee9f855851
 ┃ ┃ ┣ 📂fb
 ┃ ┃ ┃ ┗ 📜98961022a8d41165d6e42f276b98f60269e6e3
 ┃ ┃ ┣ 📂info
 ┃ ┃ ┗ 📂pack
 ┃ ┣ 📂refs
 ┃ ┃ ┣ 📂heads
 ┃ ┃ ┃ ┗ 📜main
 ┃ ┃ ┣ 📂remotes
 ┃ ┃ ┃ ┗ 📂origin
 ┃ ┃ ┃ ┃ ┗ 📜main
 ┃ ┃ ┗ 📂tags
 ┃ ┣ 📜COMMIT_EDITMSG
 ┃ ┣ 📜config
 ┃ ┣ 📜description
 ┃ ┣ 📜HEAD
 ┃ ┗ 📜index
 ┣ 📂day2
 ┣ 📜and.png
 ┣ 📜calc.php
 ┣ 📜calc.png
 ┣ 📜file.php
 ┣ 📜form.php
 ┣ 📜index.php
 ┣ 📜or.png
 ┣ 📜proses.php
 ┣ 📜Tugas1_MuhammadRizkySaputra.zip.zip
 ┣ 📜tugas2_muhammadrizkysaputra.php
 ┣ 📜tugas2_muhammadrizkysaputra.png
 ┣ 📜tugas3_muhammadrizkysaputra.php
 ┣ 📜tugas3_muhammadrizkysaputra.png
 ┣ 📜tugas4_muhammadrizkysaputra.php
 ┣ 📜tugas4_muhammadrizkysaputra.png
 ┣ 📜tugas5_muhammadrizkysaputra.php
 ┗ 📜tugas5_muhammadrizkysaputra.png

## Credit
- [Github](https://github.com/Rizkuy01) Rizky
