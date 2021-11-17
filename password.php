<?php
$hash = '$2y$10$.vGA1O9wmRjrwAVXD98HNOgsNpDczlqm3Jq7KnEd1rVAGv3Fykk1a';
if (password_verify('rasmuslerdorf', $hash)) {
    echo 'KATA SANDI BENAR!';
} else {
    echo 'KATA SANDI SALAH!';
}
?>