
# List Charge Transactions Response

Response object for listing charge transactions

## Structure

`ListChargeTransactionsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetTransactionResponse[])`](../../doc/models/get-transaction-response.md) | Optional | The charge transactions objects | getData(): ?array | setData(?array data): void |
| `paging` | [`?PagingResponse`](../../doc/models/paging-response.md) | Optional | Paging object | getPaging(): ?PagingResponse | setPaging(?PagingResponse paging): void |

## Example (as JSON)

```json
{
  "data": [
    {
      "gateway_id": "gateway_id5",
      "amount": 121,
      "status": "status7",
      "success": true,
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "attempt_count": 97,
      "max_attempts": 85,
      "splits": [
        {
          "type": "type7",
          "amount": 53,
          "recipient": {
            "id": "id9",
            "name": "name9",
            "email": "email7",
            "document": "document3",
            "description": "description9",
            "type": "type1",
            "status": "status1",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "default_bank_account": {
              "id": "id7",
              "holder_name": "holder_name3",
              "holder_type": "holder_type9",
              "bank": "bank5",
              "branch_number": "branch_number3",
              "branch_check_digit": "branch_check_digit3",
              "account_number": "account_number7",
              "account_check_digit": "account_check_digit3",
              "type": "type7",
              "status": "status9",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "recipient": {},
              "metadata": {
                "key0": "metadata2",
                "key1": "metadata1"
              },
              "pix_key": "pix_key1"
            },
            "gateway_recipients": [
              {
                "gateway": "gateway3",
                "status": "status5",
                "pgid": "pgid9",
                "created_at": "created_at1",
                "updated_at": "updated_at9"
              },
              {
                "gateway": "gateway4",
                "status": "status6",
                "pgid": "pgid0",
                "created_at": "created_at2",
                "updated_at": "updated_at0"
              }
            ],
            "metadata": {
              "key0": "metadata6",
              "key1": "metadata5",
              "key2": "metadata4"
            },
            "automatic_anticipation_settings": {
              "enabled": true,
              "type": "type7",
              "volume_percentage": 85,
              "delay": 205,
              "days": [
                181
              ]
            },
            "transfer_settings": {
              "transfer_enabled": true,
              "transfer_interval": "transfer_interval5",
              "transfer_day": 251
            },
            "code": "code7",
            "payment_mode": "payment_mode3"
          },
          "gateway_id": "gateway_id3",
          "options": {
            "liable": true,
            "charge_processing_fee": true,
            "charge_remainder_fee": "charge_remainder_fee3"
          },
          "id": "id7"
        },
        {
          "type": "type8",
          "amount": 54,
          "recipient": {
            "id": "id0",
            "name": "name0",
            "email": "email6",
            "document": "document4",
            "description": "description0",
            "type": "type0",
            "status": "status2",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "default_bank_account": {
              "id": "id8",
              "holder_name": "holder_name4",
              "holder_type": "holder_type0",
              "bank": "bank6",
              "branch_number": "branch_number4",
              "branch_check_digit": "branch_check_digit4",
              "account_number": "account_number8",
              "account_check_digit": "account_check_digit4",
              "type": "type8",
              "status": "status0",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "recipient": {},
              "metadata": {
                "key0": "metadata1",
                "key1": "metadata0",
                "key2": "metadata9"
              },
              "pix_key": "pix_key2"
            },
            "gateway_recipients": [
              {
                "gateway": "gateway4",
                "status": "status6",
                "pgid": "pgid0",
                "created_at": "created_at2",
                "updated_at": "updated_at0"
              },
              {
                "gateway": "gateway5",
                "status": "status7",
                "pgid": "pgid1",
                "created_at": "created_at3",
                "updated_at": "updated_at1"
              },
              {
                "gateway": "gateway6",
                "status": "status8",
                "pgid": "pgid2",
                "created_at": "created_at4",
                "updated_at": "updated_at2"
              }
            ],
            "metadata": {
              "key0": "metadata7",
              "key1": "metadata6"
            },
            "automatic_anticipation_settings": {
              "enabled": false,
              "type": "type6",
              "volume_percentage": 84,
              "delay": 206,
              "days": [
                182,
                183
              ]
            },
            "transfer_settings": {
              "transfer_enabled": false,
              "transfer_interval": "transfer_interval4",
              "transfer_day": 250
            },
            "code": "code8",
            "payment_mode": "payment_mode4"
          },
          "gateway_id": "gateway_id2",
          "options": {
            "liable": false,
            "charge_processing_fee": false,
            "charge_remainder_fee": "charge_remainder_fee4"
          },
          "id": "id8"
        },
        {
          "type": "type9",
          "amount": 55,
          "recipient": {
            "id": "id1",
            "name": "name1",
            "email": "email5",
            "document": "document5",
            "description": "description1",
            "type": "type9",
            "status": "status3",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "default_bank_account": {
              "id": "id9",
              "holder_name": "holder_name5",
              "holder_type": "holder_type1",
              "bank": "bank7",
              "branch_number": "branch_number5",
              "branch_check_digit": "branch_check_digit5",
              "account_number": "account_number9",
              "account_check_digit": "account_check_digit5",
              "type": "type9",
              "status": "status1",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "recipient": {},
              "metadata": {
                "key0": "metadata0"
              },
              "pix_key": "pix_key3"
            },
            "gateway_recipients": [
              {
                "gateway": "gateway5",
                "status": "status7",
                "pgid": "pgid1",
                "created_at": "created_at3",
                "updated_at": "updated_at1"
              }
            ],
            "metadata": {
              "key0": "metadata8"
            },
            "automatic_anticipation_settings": {
              "enabled": true,
              "type": "type5",
              "volume_percentage": 83,
              "delay": 207,
              "days": [
                183,
                184,
                185
              ]
            },
            "transfer_settings": {
              "transfer_enabled": true,
              "transfer_interval": "transfer_interval3",
              "transfer_day": 249
            },
            "code": "code9",
            "payment_mode": "payment_mode5"
          },
          "gateway_id": "gateway_id1",
          "options": {
            "liable": true,
            "charge_processing_fee": true,
            "charge_remainder_fee": "charge_remainder_fee5"
          },
          "id": "id9"
        }
      ],
      "next_attempt": "2016-03-13T12:52:32.123Z",
      "transaction_type": "transaction",
      "id": "id5",
      "gateway_response": {
        "code": "code5",
        "errors": [
          {
            "message": "message2"
          },
          {
            "message": "message3"
          },
          {
            "message": "message4"
          }
        ]
      },
      "antifraud_response": {
        "status": "status5",
        "return_code": "return_code3",
        "return_message": "return_message1",
        "provider_name": "provider_name1",
        "score": "score3"
      },
      "metadata": {
        "key0": "metadata4",
        "key1": "metadata3"
      },
      "split": [
        {
          "type": "type3",
          "amount": 67,
          "recipient": {
            "id": "id5",
            "name": "name5",
            "email": "email9",
            "document": "document9",
            "description": "description5",
            "type": "type5",
            "status": "status7",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "default_bank_account": {
              "id": "id3",
              "holder_name": "holder_name9",
              "holder_type": "holder_type5",
              "bank": "bank1",
              "branch_number": "branch_number9",
              "branch_check_digit": "branch_check_digit9",
              "account_number": "account_number3",
              "account_check_digit": "account_check_digit9",
              "type": "type3",
              "status": "status5",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "recipient": {},
              "metadata": {
                "key0": "metadata4",
                "key1": "metadata5"
              },
              "pix_key": "pix_key7"
            },
            "gateway_recipients": [
              {
                "gateway": "gateway9",
                "status": "status1",
                "pgid": "pgid5",
                "created_at": "created_at7",
                "updated_at": "updated_at5"
              },
              {
                "gateway": "gateway0",
                "status": "status2",
                "pgid": "pgid6",
                "created_at": "created_at8",
                "updated_at": "updated_at6"
              }
            ],
            "metadata": {
              "key0": "metadata4",
              "key1": "metadata3"
            },
            "automatic_anticipation_settings": {
              "enabled": true,
              "type": "type9",
              "volume_percentage": 185,
              "delay": 219,
              "days": [
                195
              ]
            },
            "transfer_settings": {
              "transfer_enabled": true,
              "transfer_interval": "transfer_interval1",
              "transfer_day": 55
            },
            "code": "code3",
            "payment_mode": "payment_mode9"
          },
          "gateway_id": "gateway_id3",
          "options": {
            "liable": true,
            "charge_processing_fee": true,
            "charge_remainder_fee": "charge_remainder_fee9"
          },
          "id": "id3"
        },
        {
          "type": "type4",
          "amount": 68,
          "recipient": {
            "id": "id6",
            "name": "name6",
            "email": "email0",
            "document": "document0",
            "description": "description6",
            "type": "type6",
            "status": "status8",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "default_bank_account": {
              "id": "id4",
              "holder_name": "holder_name0",
              "holder_type": "holder_type6",
              "bank": "bank2",
              "branch_number": "branch_number0",
              "branch_check_digit": "branch_check_digit0",
              "account_number": "account_number4",
              "account_check_digit": "account_check_digit0",
              "type": "type4",
              "status": "status6",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "recipient": {},
              "metadata": {
                "key0": "metadata5",
                "key1": "metadata6",
                "key2": "metadata7"
              },
              "pix_key": "pix_key8"
            },
            "gateway_recipients": [
              {
                "gateway": "gateway0",
                "status": "status2",
                "pgid": "pgid6",
                "created_at": "created_at8",
                "updated_at": "updated_at6"
              },
              {
                "gateway": "gateway1",
                "status": "status3",
                "pgid": "pgid7",
                "created_at": "created_at9",
                "updated_at": "updated_at7"
              },
              {
                "gateway": "gateway2",
                "status": "status4",
                "pgid": "pgid8",
                "created_at": "created_at0",
                "updated_at": "updated_at8"
              }
            ],
            "metadata": {
              "key0": "metadata3",
              "key1": "metadata2",
              "key2": "metadata1"
            },
            "automatic_anticipation_settings": {
              "enabled": false,
              "type": "type0",
              "volume_percentage": 186,
              "delay": 220,
              "days": [
                196,
                197
              ]
            },
            "transfer_settings": {
              "transfer_enabled": false,
              "transfer_interval": "transfer_interval2",
              "transfer_day": 56
            },
            "code": "code4",
            "payment_mode": "payment_mode0"
          },
          "gateway_id": "gateway_id4",
          "options": {
            "liable": false,
            "charge_processing_fee": false,
            "charge_remainder_fee": "charge_remainder_fee0"
          },
          "id": "id4"
        }
      ],
      "interest": {
        "days": 27,
        "type": "type5",
        "amount": 101
      },
      "fine": {
        "days": 45,
        "type": "type7",
        "amount": 119
      },
      "max_days_to_pay_past_due": 33
    },
    {
      "gateway_id": "gateway_id6",
      "amount": 122,
      "status": "status8",
      "success": false,
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "attempt_count": 98,
      "max_attempts": 86,
      "splits": [
        {
          "type": "type8",
          "amount": 54,
          "recipient": {
            "id": "id0",
            "name": "name0",
            "email": "email6",
            "document": "document4",
            "description": "description0",
            "type": "type0",
            "status": "status2",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "default_bank_account": {
              "id": "id8",
              "holder_name": "holder_name4",
              "holder_type": "holder_type0",
              "bank": "bank6",
              "branch_number": "branch_number4",
              "branch_check_digit": "branch_check_digit4",
              "account_number": "account_number8",
              "account_check_digit": "account_check_digit4",
              "type": "type8",
              "status": "status0",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "recipient": {},
              "metadata": {
                "key0": "metadata1",
                "key1": "metadata0",
                "key2": "metadata9"
              },
              "pix_key": "pix_key2"
            },
            "gateway_recipients": [
              {
                "gateway": "gateway4",
                "status": "status6",
                "pgid": "pgid0",
                "created_at": "created_at2",
                "updated_at": "updated_at0"
              },
              {
                "gateway": "gateway5",
                "status": "status7",
                "pgid": "pgid1",
                "created_at": "created_at3",
                "updated_at": "updated_at1"
              },
              {
                "gateway": "gateway6",
                "status": "status8",
                "pgid": "pgid2",
                "created_at": "created_at4",
                "updated_at": "updated_at2"
              }
            ],
            "metadata": {
              "key0": "metadata7",
              "key1": "metadata6"
            },
            "automatic_anticipation_settings": {
              "enabled": false,
              "type": "type6",
              "volume_percentage": 84,
              "delay": 206,
              "days": [
                182,
                183
              ]
            },
            "transfer_settings": {
              "transfer_enabled": false,
              "transfer_interval": "transfer_interval4",
              "transfer_day": 250
            },
            "code": "code8",
            "payment_mode": "payment_mode4"
          },
          "gateway_id": "gateway_id2",
          "options": {
            "liable": false,
            "charge_processing_fee": false,
            "charge_remainder_fee": "charge_remainder_fee4"
          },
          "id": "id8"
        }
      ],
      "next_attempt": "2016-03-13T12:52:32.123Z",
      "transaction_type": "transaction",
      "id": "id6",
      "gateway_response": {
        "code": "code6",
        "errors": [
          {
            "message": "message3"
          }
        ]
      },
      "antifraud_response": {
        "status": "status6",
        "return_code": "return_code4",
        "return_message": "return_message2",
        "provider_name": "provider_name2",
        "score": "score4"
      },
      "metadata": {
        "key0": "metadata3",
        "key1": "metadata2",
        "key2": "metadata1"
      },
      "split": [
        {
          "type": "type4",
          "amount": 68,
          "recipient": {
            "id": "id6",
            "name": "name6",
            "email": "email0",
            "document": "document0",
            "description": "description6",
            "type": "type6",
            "status": "status8",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "default_bank_account": {
              "id": "id4",
              "holder_name": "holder_name0",
              "holder_type": "holder_type6",
              "bank": "bank2",
              "branch_number": "branch_number0",
              "branch_check_digit": "branch_check_digit0",
              "account_number": "account_number4",
              "account_check_digit": "account_check_digit0",
              "type": "type4",
              "status": "status6",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "recipient": {},
              "metadata": {
                "key0": "metadata5",
                "key1": "metadata6",
                "key2": "metadata7"
              },
              "pix_key": "pix_key8"
            },
            "gateway_recipients": [
              {
                "gateway": "gateway0",
                "status": "status2",
                "pgid": "pgid6",
                "created_at": "created_at8",
                "updated_at": "updated_at6"
              },
              {
                "gateway": "gateway1",
                "status": "status3",
                "pgid": "pgid7",
                "created_at": "created_at9",
                "updated_at": "updated_at7"
              },
              {
                "gateway": "gateway2",
                "status": "status4",
                "pgid": "pgid8",
                "created_at": "created_at0",
                "updated_at": "updated_at8"
              }
            ],
            "metadata": {
              "key0": "metadata3",
              "key1": "metadata2",
              "key2": "metadata1"
            },
            "automatic_anticipation_settings": {
              "enabled": false,
              "type": "type0",
              "volume_percentage": 186,
              "delay": 220,
              "days": [
                196,
                197
              ]
            },
            "transfer_settings": {
              "transfer_enabled": false,
              "transfer_interval": "transfer_interval2",
              "transfer_day": 56
            },
            "code": "code4",
            "payment_mode": "payment_mode0"
          },
          "gateway_id": "gateway_id4",
          "options": {
            "liable": false,
            "charge_processing_fee": false,
            "charge_remainder_fee": "charge_remainder_fee0"
          },
          "id": "id4"
        },
        {
          "type": "type5",
          "amount": 69,
          "recipient": {
            "id": "id7",
            "name": "name7",
            "email": "email1",
            "document": "document1",
            "description": "description7",
            "type": "type7",
            "status": "status9",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "default_bank_account": {
              "id": "id5",
              "holder_name": "holder_name1",
              "holder_type": "holder_type7",
              "bank": "bank3",
              "branch_number": "branch_number1",
              "branch_check_digit": "branch_check_digit1",
              "account_number": "account_number5",
              "account_check_digit": "account_check_digit1",
              "type": "type5",
              "status": "status7",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "recipient": {},
              "metadata": {
                "key0": "metadata6"
              },
              "pix_key": "pix_key9"
            },
            "gateway_recipients": [
              {
                "gateway": "gateway1",
                "status": "status3",
                "pgid": "pgid7",
                "created_at": "created_at9",
                "updated_at": "updated_at7"
              }
            ],
            "metadata": {
              "key0": "metadata2"
            },
            "automatic_anticipation_settings": {
              "enabled": true,
              "type": "type1",
              "volume_percentage": 187,
              "delay": 221,
              "days": [
                197,
                198,
                199
              ]
            },
            "transfer_settings": {
              "transfer_enabled": true,
              "transfer_interval": "transfer_interval3",
              "transfer_day": 57
            },
            "code": "code5",
            "payment_mode": "payment_mode1"
          },
          "gateway_id": "gateway_id5",
          "options": {
            "liable": true,
            "charge_processing_fee": true,
            "charge_remainder_fee": "charge_remainder_fee1"
          },
          "id": "id5"
        },
        {
          "type": "type6",
          "amount": 70,
          "recipient": {
            "id": "id8",
            "name": "name8",
            "email": "email2",
            "document": "document2",
            "description": "description8",
            "type": "type8",
            "status": "status0",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "default_bank_account": {
              "id": "id6",
              "holder_name": "holder_name2",
              "holder_type": "holder_type8",
              "bank": "bank4",
              "branch_number": "branch_number2",
              "branch_check_digit": "branch_check_digit2",
              "account_number": "account_number6",
              "account_check_digit": "account_check_digit2",
              "type": "type6",
              "status": "status8",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "recipient": {},
              "metadata": {
                "key0": "metadata7",
                "key1": "metadata8"
              },
              "pix_key": "pix_key0"
            },
            "gateway_recipients": [
              {
                "gateway": "gateway2",
                "status": "status4",
                "pgid": "pgid8",
                "created_at": "created_at0",
                "updated_at": "updated_at8"
              },
              {
                "gateway": "gateway3",
                "status": "status5",
                "pgid": "pgid9",
                "created_at": "created_at1",
                "updated_at": "updated_at9"
              }
            ],
            "metadata": {
              "key0": "metadata1",
              "key1": "metadata0"
            },
            "automatic_anticipation_settings": {
              "enabled": false,
              "type": "type2",
              "volume_percentage": 188,
              "delay": 222,
              "days": [
                198
              ]
            },
            "transfer_settings": {
              "transfer_enabled": false,
              "transfer_interval": "transfer_interval4",
              "transfer_day": 58
            },
            "code": "code6",
            "payment_mode": "payment_mode2"
          },
          "gateway_id": "gateway_id6",
          "options": {
            "liable": false,
            "charge_processing_fee": false,
            "charge_remainder_fee": "charge_remainder_fee2"
          },
          "id": "id6"
        }
      ],
      "interest": {
        "days": 28,
        "type": "type4",
        "amount": 102
      },
      "fine": {
        "days": 46,
        "type": "type8",
        "amount": 120
      },
      "max_days_to_pay_past_due": 34
    }
  ],
  "paging": {
    "total": 6,
    "previous": "previous2",
    "next": "next8"
  }
}
```

