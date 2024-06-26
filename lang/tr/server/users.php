<?php

return [
    'permissions' => [
        'websocket_*' => 'Bu sunucunun web soketine erişime izin verir.',
        'control_console' => 'Kullanıcıya sunucu konsoluna veri gönderme izni verir.',
        'control_start' => 'Kullanıcıya sunucu örneğini başlatma izni verir.',
        'control_stop' => 'Kullanıcıya sunucu örneğini durdurma izni verir.',
        'control_restart' => 'Kullanıcıya sunucu örneğini yeniden başlatma izni verir.',
        'control_kill' => 'Kullanıcıya sunucu örneğini sonlandırma izni verir.',
        'user_create' => 'Kullanıcıya sunucu için yeni kullanıcı hesapları oluşturma izni verir.',
        'user_read' => 'Kullanıcıya, bu sunucuyla ilişkili kullanıcıları görüntüleme izni verir.',
        'user_update' => 'Kullanıcıya bu sunucuyla ilişkili diğer kullanıcıları değiştirme izni verir',
        'user_delete' => 'Kullanıcıya bu sunucuyla ilişkili diğer kullanıcıları silme izni verir.',
        'file_create' => 'Kullanıcıya yeni dosyalar ve dizinler oluşturma izni verir.',
        'file_read' => 'Kullanıcıya bu sunucu örneği ile ilişkilendirilmiş dosya ve klasörleri görmesine ve içeriklerini görüntülemesine izin verir.',
        'file_update' => 'Kullanıcıya sunucu ile ilişkilendirilmiş dosyaları ve klasörleri güncelleme izni verir.',
        'file_delete' => 'Kullanıcıya dosyaları ve dizinleri silme izni verir.',
        'file_archive' => 'Kullanıcının dosya arşivleri oluşturmasına ve arşivden çıkartmasına izin verir.',
        'file_sftp' => 'Kullanıcının SFTP kullanarak dosyalarda işlem yapmasına izin verir.',
        'allocation_read' => 'Sunucu tahsis yönetim sayfalarına erişim izni verir.',
        'allocation_update' => 'Kullanıcıya sunucunun tahsislerine değişiklik yapma izni verir.',
        'database_create' => 'Kullanıcının yeni veritabanı oluşturmasına izin verir.',
        'database_read' => 'Kullanıcının veritabanlarını görmesine izin verir.',
        'database_update' => 'Kullanıcının veritabanında düzenlemeler yapmasına izin verir. Eğer kullanıcının veritabanı şifresini görüntüleme izni yok ise şifreyi düzenleyemez.',
        'database_delete' => 'Kullanıcının veritabanı silmesine izin verir.',
        'database_view_password' => 'Kullanıcının veritabanı şifresini görmesine izin verir.',
        'schedule_create' => 'Kullanıcı yeni zamanlı görevler oluşturmasına izin verir.',
        'schedule_read' => 'Kullanıcının zamanlı görevleri görmesine izin verir.',
        'schedule_update' => 'Kullanıcının var olan zamanlı görevde düzenleme yapmasına izin verir.',
        'schedule_delete' => 'Kullanıcının sunucu için bir zamanlı görevi silmesine izin verir.',
    ],
];
