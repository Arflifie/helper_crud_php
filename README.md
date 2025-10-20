Berikut contoh **README.md** yang profesional dan rapi untuk proyek **helper_crud PHP** di GitHub 👇

---

```markdown
# 🧰 Helper CRUD PHP

Helper CRUD adalah kumpulan fungsi sederhana yang mempermudah proses **Create, Read, Update, Delete (CRUD)** dalam aplikasi berbasis **PHP dan MySQL**.  
Tujuannya adalah mempercepat pengembangan aplikasi tanpa harus menulis ulang query SQL berulang-ulang.

---

## 🚀 Fitur Utama

- ✅ **Create** – Insert data ke database dengan mudah  
- 🔍 **Read** – Ambil data dengan filter dinamis  
- ✏️ **Update** – Update data berdasarkan kondisi tertentu  
- ❌ **Delete** – Hapus data dari tabel  
- 🧩 **Flexible Query** – Dapat digunakan di berbagai struktur tabel  
- 🔐 **Secure Input** – Sudah menggunakan prepared statement (jika menggunakan PDO/MySQLi)  

---

## 📦 Struktur Folder

```

helper_crud/
│
├── config/
│   └── database.php        # File koneksi database
│
├── helpers/
│   └── crud_helper.php     # File utama helper CRUD
│
├── examples/
│   ├── create.php          # Contoh penggunaan fungsi create()
│   ├── read.php            # Contoh penggunaan fungsi read()
│   ├── update.php          # Contoh penggunaan fungsi update()
│   └── delete.php          # Contoh penggunaan fungsi delete()
│
└── index.php               # Entry point (opsional)

````

---

## ⚙️ Cara Penggunaan

### 1️⃣ Include Helper
```php
require_once 'config/database.php';
require_once 'helpers/crud_helper.php';
````

### 2️⃣ Create (Insert Data)

```php
$data = [
    'nama' => 'anonim',
    'email' => 'anonim@example.com',
];
create('users', $data);
```

### 3️⃣ Read (Ambil Data)

```php
$users = read('users', ['status' => 'aktif']);
foreach ($users as $user) {
    echo $user['nama'];
}
```

### 4️⃣ Update (Ubah Data)

```php
$data = ['email' => 'baru@example.com'];
$where = ['id' => 1];
update('users', $data, $where);
```

### 5️⃣ Delete (Hapus Data)

```php
$where = ['id' => 1];
delete('users', $where);
```

---

## 🧪 Contoh Database

Tabel contoh: `users`

| id | nama  | email                                         | status   |
| -- | ----- | --------------------------------------------- | -------- |
| 1  | first_name | [anonim@example.com](mailto:anonim@example.com) | aktif    |
| 2  | last_name | [anonim@example.com](mailto:anonim@example.com) | nonaktif |

---

## ⚡ Kebutuhan Sistem

* PHP 7.4+ atau 8.x
* MySQL / MariaDB
* Ekstensi `mysqli` atau `pdo_mysql`

---

## 🤝 Kontribusi

1. Fork repository ini
2. Buat branch fitur baru (`git checkout -b fitur/fitur-baru`)
3. Commit perubahan Anda (`git commit -m 'Tambah fitur baru'`)
4. Push ke branch (`git push origin fitur/fitur-baru`)
5. Buat Pull Request 🎉

---

## 🪪 Lisensi

Proyek ini dilisensikan di bawah **MIT License** — silakan gunakan, ubah, dan sebarkan secara bebas dengan mencantumkan atribusi.

---

## 💬 Kontak

📧 Email: [arfun@example.com](mailto:arfun@example.com)
🐙 GitHub: [@arfunyafie](https://github.com/arfunyafie)

---

> “Helper sederhana, kerjaan jadi cepat, hasil tetap rapi.”

```

---

Apakah kamu ingin saya bantu **buatkan versi otomatis README.md ini** (dalam format file yang bisa kamu unggah ke GitHub, misalnya `README.md`) atau kamu mau saya **sesuaikan dulu dengan struktur dan nama fungsi asli helper_crud kamu**?
```
