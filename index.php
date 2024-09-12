<?php
$repositories = [
    "https://github.com/user/repo1",
    "https://github.com/user/repo2",
    "https://github.com/user/repo3"
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

foreach ($repositories as $repo_url) {
    clone_repository($repo_url);
}
?>
