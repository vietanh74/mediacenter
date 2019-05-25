# lbmediacenter

### Step 1: Install LBMediaCenter

composer require libressltd/lbmediacenter

### Step 2: Add service provider to config/app.php

```php

LIBRESSLtd\LBMediaCenter\LBMediaCenterServiceProvider::class,

```

### Step 3: Publish vendor

```php

php artisan vendor:publish --tag=lbmediacenter --force
php artisan migrate
php artisan storage:link

```

### Step 4: Using
	
	
```php
// Save an uploaded file
if ($request->hasFile("file"))
{
	$media = Media::saveFile($request->file);
}

// Download file from internet

$media = Media::download_file($url);

// get image link
// $style = "scale_to_fill" or "scale_to_fit"

$media->link($width, $height, $style);

// get file path
$media->path();

```

### Step 5: see upload file 

http://your-host-name/lbmediacenter/image-id