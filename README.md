# PHP String Helper Kütüphanesi

Bu kütüphane, metin işleme işlemleri için yardımcı fonksiyonlar içerir.

## Kurulum

```bash
composer require your-vendor/php-library
```

## Kullanım

```php
use Library\StringHelper;

// Büyük harfe çevirme
$upperCase = StringHelper::toUpperCase('merhaba dünya'); // MERHABA DÜNYA

// Küçük harfe çevirme
$lowerCase = StringHelper::toLowerCase('MERHABA DÜNYA'); // merhaba dünya

// İlk harfi büyük yapma
$capitalized = StringHelper::capitalize('merhaba dünya'); // Merhaba dünya
```

## Testleri Çalıştırma

```bash
./vendor/bin/phpunit tests
```

## Lisans

Bu proje MIT lisansı altında lisanslanmıştır.