# How To

## Step 1 - Env Config

create your own env.config under wp-content folder or if you want to use the default one, use below:

<!-- ```
$env_config = [
	'site_url'		=>	'localhost/mikei/backend/',
	'home_url'		=>	'localhost/mikei',
	'db_name'		=> 	'mikei_db',
	'db_host'		=>	'localhost',
	'db_user'		=>	'root',
	'db_pass'		=>	'root'

];

``` -->

## Step 2 - Import DB

Import the projects database to your local dev

## Step 3 - NPM install

Navigate to your folder via the Terminal and on the root folder type ``npm install``

## Step 4 - Gulp

Once thats done, type in ``gulp``

# Troubleshooting

## Error Database 

Make sure you use the same DB name (mikei_db) on your local server and on the env.config

## Broken Image

Most likely this is due to different host url. This projects is using port 80 (e.g localhost:80). This is a default port thus it wont show up in the URL. If you're using MAMP, XAMPP, or any other server you might get different port so adjust accordingly.

## Page not show up after typing gulp

Open **gulpfile.js** and find the line where it says ``proxy: "http://localhost/mikei",`` modify this url to match your dev