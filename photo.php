$connection = new FHpxOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
$params = array(
    'name' => "Sample name",
    'description' => "Sample description bla bla bla",
    'category' => 18,
    'privacy' => 0,
    'file' => file_get_contents('url for the image')
);
$content  = $connection->post('photos/upload', $params);
