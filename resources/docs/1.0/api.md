# API

---

- [Create token](#section-1)

SaaSWeb comes with an API, which will allow you to provide an API to your users or build a mobile app from your API.

<a name="section-1"></a>

### Get Access Token from an API Key

To create an API key you can visit your API settings page at: `/account/tokens`, then to create a new API key, enter a name in the textbox and click on the Create New Key button.

<img src="{{ asset('img/screens/api.png') }}">

### Passing The Access Token

When calling routes that are protected by Passport, your application's API consumers should specify their access token as a Bearer token in the Authorization header of their request. For example

```php 
$response = $client->request('GET', '/api/user', [
    'headers' => [
        'Accept' => 'application/json',
        'Authorization' => 'Bearer '.$accessToken,
    ],
]);
```
