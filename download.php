// Verify the token and user's ownership before serving the file
$token = $_GET['token'];
$itemId = $_GET['itemId'];

if (verifyTokenAndOwnership($token, $itemId)) {
    // Fetch the item details from your database
    $item = getItemDetailsFromDatabase($itemId);

    // Set appropriate headers for the download
    header("Content-Type: audio/mpeg");
    header("Content-Disposition: attachment; filename=" . $item['filename']);
    header("Content-Length: " . filesize($item['filepath']));

    // Read and output the file content
    readfile($item['filepath']);
} else {
    echo "Unauthorized access.";
}
