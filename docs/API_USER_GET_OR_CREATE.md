# User Get or Create API

## Endpoint

```
POST /api/users/get-or-create
```

## Description

Mendapatkan informasi user berdasarkan username dan phone, atau membuat user baru jika belum ada.

## Request Parameters

| Parameter | Type   | Required | Description          |
|-----------|--------|----------|----------------------|
| username  | string | Yes      | Username (max 50)    |
| phone     | string | Yes      | Nomor telepon        |

## Request Example

```json
{
  "username": "johndoe",
  "phone": "08123456789"
}
```

## Response Success (200)

Jika user ditemukan:

```json
{
  "success": true,
  "message": "User ditemukan",
  "data": {
    "id": 1,
    "name": "john doe",
    "username": "johndoe",
    "email": null,
    "phone": "08123456789",
    "email_verified_at": null,
    "created_at": "2026-02-08T12:00:00.000000Z",
    "updated_at": "2026-02-08T12:00:00.000000Z"
  }
}
```

## Response Created (201)

Jika user baru dibuat:

```json
{
  "success": true,
  "message": "User berhasil dibuat",
  "data": {
    "id": 2,
    "name": "newuser",
    "username": "newuser",
    "email": null,
    "phone": "08987654321",
    "email_verified_at": null,
    "created_at": "2026-02-08T12:00:00.000000Z",
    "updated_at": "2026-02-08T12:00:00.000000Z"
  }
}
```

## Response Error (422)

Jika validasi gagal:

```json
{
  "message": "The given data was invalid.",
  "errors": {
    "phone": [
      "Nomor telepon harus diisi"
    ]
  }
}
```

## Notes

- Ketika user baru dibuat, password otomatis di-generate secara random
- User akan dicari berdasarkan username ATAU phone (tidak perlu keduanya cocok)
- Jika salah satu username atau phone sudah ada, user yang ada akan dikembalikan
