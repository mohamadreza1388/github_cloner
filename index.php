<?php
$repositories = [
    "https://github.com/mohamadreza1388/update_commit",
    "https://github.com/mohamadreza1388/google_page",
];

function clone_repository($repo_url) {
    $command = "git clone " . escapeshellarg($repo_url);
    exec($command, $output, $return_var);
    
    if ($return_var === 0) {
        echo "مخزن " . $repo_url . " با موفقیت کلون شد.\n";
    } else {
        echo "خطا در کلون کردن مخزن " . $repo_url . ".\n";
    }
}

mkdir("result");
    chdir("result");

foreach ($repositories as $repo_url) {
    
    clone_repository($repo_url);
}
?>
