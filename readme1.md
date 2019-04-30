## Laravel PDF generator :

NB Snappy tuto link : https://laravelcode.com/post/html-to-pdf-in-laravel-using-barryvdh-laravel-snappy

Link : https://github.com/barryvdh/laravel-snappy

Installation : $composer require barryvdh/laravel-snappy

After updating composer, add the ServiceProvider to the providers array in config/app.php

Barryvdh\Snappy\ServiceProvider::class,
Optionally you can use the Facade for shorter code. Add this to your facades:

'PDF' => Barryvdh\Snappy\Facades\SnappyPdf::class,
'SnappyImage' => Barryvdh\Snappy\Facades\SnappyImage::class,
Finally you can publish the config file:

php artisan vendor:publish --provider="Barryvdh\Snappy\ServiceProvider"



NB: change in config/snappy.php this line 

 'binary'  => '/usr/local/bin/wkhtmltopdf',    to  	 'binary'  => '/vendor/h4cc/wkhtmltopdf-amd64/bin',

