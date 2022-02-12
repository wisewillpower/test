<?php
// GitHub Webhook Secret.
// GitHub项目 Settings/Webhooks 中的 Secret
$secret = "wisewillpower";

// Path to your respostory on your server.
// e.g. "/var/www/respostory"
// 项目地址
$path = "D:\WebRoot\cs";

// Headers deliveried from GitHub
$signature = $_SERVER['HTTP_X_HUB_SIGNATURE'];

if ($signature) {
  $hash = "sha1=".hash_hmac('sha1', file_get_contents("php://input"), $secret);
  if (strcmp($signature, $hash) == 0) {
    echo shell_exec("d: && cd {$path} && git reset --hard origin/master && git clean -f && git pull 2>&1");
    exit();
  }
}

http_response_code(404);
?>