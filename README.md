# lbmediacenter

### Step 1: Install MediaCenter

composer require vietanh/mediacenter

### Step 2: Add service provider to config/app.php

```php

VietAnh\MediaCenter\MediaCenterServiceProvider::class,

```

### Step 3: Publish vendor

```php

php artisan vendor:publish --tag=mediacenter --force
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

http://your-host-name/mediacenter/image-id