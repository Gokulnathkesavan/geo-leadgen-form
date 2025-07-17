<?php
header('Content-Type: application/json');

// Get POST data
$parentName = $_POST['parentName'] ?? '';
$childName = $_POST['childName'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$ageGroup = $_POST['ageGroup'] ?? '';
$sport = $_POST['sport'] ?? '';
$lat = $_POST['lat'] ?? null;
$lng = $_POST['lng'] ?? null;
$distanceKm = $_POST['distance_km'] ?? null;

// Validate required fields
if (empty($parentName) || empty($childName) || empty($email) || empty($phone) || empty($ageGroup) || empty($sport)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'All fields are required']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid email address']);
    exit;
}

// Telegram Bot Configuration
$botToken = ''; // Replace with your bot token
$chatIds = ['']; // Add as many chat IDs as needed

// Compose the message
$message = "📢 *New Registration* \n\n";
$message .= "*Parent Name:* $parentName\n";
$message .= "*Child Name:* $childName\n";
$message .= "*Email:* $email\n";
$message .= "*Phone:* $phone\n";
$message .= "*Age Group:* $ageGroup\n";
$message .= "*Preferred Sport:* $sport\n";

if ($lat && $lng) {
    $locationUrl = "https://maps.googleapis.com/maps/api/geocode/json?latlng={$lat},{$lng}&key=YOUR_API_KEY-oyg";
    $geoResponse = file_get_contents($locationUrl);
    $geoData = json_decode($geoResponse, true);
    
    if ($geoData && $geoData['status'] === 'OK') {
        $locationName = $geoData['results'][0]['formatted_address'];
        $message .= "*Location:* [$locationName](https://www.google.com/maps?q={$lat},{$lng})\n";
    } else {
        $message .= "*Location:* [View on Map](https://www.google.com/maps?q={$lat},{$lng})\n";
    }
}
if ($distanceKm !== null) {
    $distanceNote = floatval($distanceKm) > 8 ? "❗ Beyond 8km (Interested)" : "✅ Within Range";
    $message .= "*Distance:* {$distanceKm} km ($distanceNote)\n";
}

date_default_timezone_set('Asia/Kolkata');
$message .= "\n🕒 _Received at: " . date('Y-m-d h:i:s A') . "_";

// Send message to each Telegram chat ID
$telegramUrl = "https://api.telegram.org/bot{$botToken}/sendMessage";
$errors = [];

foreach ($chatIds as $chatId) {
    $data = [
        'chat_id' => $chatId,
        'text' => $message,
        'parse_mode' => 'Markdown',
        'disable_notification' => false
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $telegramUrl);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Disable in production

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode != 200) {
        $errors[] = [
            'chat_id' => $chatId,
            'response' => json_decode($response, true)
        ];
    }
}

// Final JSON response
if (!empty($errors)) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Message failed for one or more recipients',
        'errors' => $errors
    ]);
} else {
    http_response_code(200);
    echo json_encode([
        'success' => true,
        'message' => 'Registration successful and notifications sent',
        'data' => [
            'parentName' => $parentName,
            'childName' => $childName,
            'email' => $email,
            'phone' => $phone,
            'ageGroup' => $ageGroup,
            'sport' => $sport,
            'distance_km' => $distanceKm
        ]
    ]);
}
