# Laravel 5.4 Reminder
> With SQLite

### การติดตั้ง

#### 1. ตั้งติด node package ก่อน โดยใช้คำสั่ง
```npm install```

#### 2. ติดตั้ง composer โดยใช้คำสั่ง
```composer install```

#### 3. ตั้งค่าไฟล์ .env ให้เรียบร้อย ซึ่งใช้ฐานข้อมูลเป็น SQLlit แล้ว generate key โดยใช้คำสั่ง 
```php artisan key:generate```

#### 4. สร้าง ไฟล์ database.sqlite ใน `database/database.sqlite`

#### 5. สร้าง Tables โดย migration ใช้คำสั่ง
```php artisan migrate```

#### 6. สั่งรัน server ใช้คำสั่ง
```php artisan serve```
