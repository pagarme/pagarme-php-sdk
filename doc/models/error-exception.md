
# Error Exception

Api Error Exception

## Structure

`ErrorException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `message` | `?string` | Required | - | getMessage(): ?string | setMessage(?string message): void |
| `errors` | `?array` | Required | - | getErrors(): ?array | setErrors(?array errors): void |
| `request` | `?array` | Required | - | getRequest(): ?array | setRequest(?array request): void |

## Example

```php
try {
    // make the API call
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught ApiException:', $exp;
}
```

