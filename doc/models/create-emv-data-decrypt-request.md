
# Create Emv Data Decrypt Request

## Structure

`CreateEmvDataDecryptRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cipher` | `string` | Required | Emv Decrypt cipher type | getCipher(): string | setCipher(string cipher): void |
| `dukpt` | [`?CreateEmvDataDukptDecryptRequest`](../../doc/models/create-emv-data-dukpt-decrypt-request.md) | Optional | Dukpt data request | getDukpt(): ?CreateEmvDataDukptDecryptRequest | setDukpt(?CreateEmvDataDukptDecryptRequest dukpt): void |
| `tags` | [`CreateEmvDataTlvDecryptRequest[]`](../../doc/models/create-emv-data-tlv-decrypt-request.md) | Required | Encrypted tags list | getTags(): array | setTags(array tags): void |

## Example (as JSON)

```json
{
  "cipher": "cipher2",
  "tags": [
    {
      "tag": "tag4",
      "lenght": "lenght2",
      "value": "value2"
    }
  ],
  "dukpt": {
    "ksn": "ksn0"
  }
}
```

