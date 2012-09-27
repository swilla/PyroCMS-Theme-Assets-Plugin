# PyroCMS Theme Assets Plugin

This is a simple plugin that allows you to use the assets library to include assets in your theme. It automatically minifies these assets and combines them into one file when PyroCMS environment is set to production. When the environment is set to develop they are displayed as separate files without minimization for each troubleshooting. 

## Installation

Copy theme_assets.php to your addons/SITE_REF/plugins or addons/shared_addons/plugins folder.

## Usage

Comma separate all the files inside the tag as a parameter called "files". 

Files are located inside of THEMEDIRECTORY/js

```javascript
{{ theme_assets:js_files files="file1.js,file2.js" }}
```

Files are located inside of THEMEDIRECTORY/css

```javascript
{{ theme_assets:css_files files="file1.css,file2.css" }}
```
