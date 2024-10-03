# Scripts
 This is a repository of go-to automated scripts

## Change html files to blade files
> Usage
- on line 2 of [change_html_to_blade]('./php/change_html_to_blade.php') change the views `$directory = __DIR__ . '/views';` and put the path to your directory where your html files are.
- directory structure for effective usage
```
-app
-public
-resources
  -views
     html-file-1.html
     html-file-2.html
   change_html_to_blade.php
 ```
 - put the php script `change_html_to_blade.php` outside the directory where your html files are and change the directory name to fit yours just as in the first step.