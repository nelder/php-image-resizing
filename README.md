##Image Resizing Functions for PHP
These functions allow the user to handle typical user image input on a web application. Images can be compressed to reduce file size, images can also be used to derrive a thumbnail copy. This can be useful to save storage and increase load times when a smaller version of a file is required by the application. 

###Sample Use
Compress an image on the server, note the image will be replaced by its new compressed iteration.
```php
//Compression
compressImage("profile_images/".$unique_name);
```
Generate a thumbnail of an existing image on the server.
```php
//Seperate the file name segments
$ext = end((explode(".", $unique_name)));
$raw_name = str_replace(".".$ext, "", $unique_name);

//Run the generation operation to create a 500x500 bounded thumbnail image
thumbnailImage("profile_images/".$unique_name , "profile_images/".$raw_name."_small.".$ext, 500);ho $value['age']."<br />";
```

###Installation
1. Download imageResize.php and place it in your project directory.
2. Require the file in your project.
```php
require_once("imageResize.php");
```
3. Use as directed above.

###Author
Nicholas Elder 

###Contact
baffu (at) stormcraft (dot) ca

###Licence
The MIT License (MIT)

Copyright (c) 2015 Nicholas Elder

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.