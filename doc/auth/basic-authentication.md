
# Basic Authentication



Documentation for accessing and setting credentials for httpBasic.

## Auth Credentials

| Name | Type | Description | Setter | Getter |
|  --- | --- | --- | --- | --- |
| BasicAuthUserName | `string` | The username to use with basic authentication | `username` | `getBasicAuthUserName()` |
| BasicAuthPassword | `string` | The password to use with basic authentication | `password` | `getBasicAuthPassword()` |



**Note:** Auth credentials can be set using `BasicAuthCredentialsBuilder::init()` in `basicAuthCredentials` method in the client builder and accessed through `getBasicAuthCredentials` method in the client instance.

## Usage Example

### Client Initialization

You must provide credentials in the client as shown in the following code snippet.

```php
$client = PagarmeApiSDKClientBuilder::init()
    ->basicAuthCredentials(
        BasicAuthCredentialsBuilder::init(
            'BasicAuthUserName',
            'BasicAuthPassword'
        )
    )
    ->build();
```


