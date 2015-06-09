Wordpress Plugin Boilerplate
=========

A boilerplate for WordPress plugins that uses composer.

Always run the following command before committing to the repository.
```bash
$ vendor/fabpot/php-cs-fixer/php-cs-fixer fix
```

## How to deploy to svn

Run this from an empty directory:

```bash
mkdir plugin-name
svn co https://plugins.svn.wordpress.org/plugin-name plugin-name --username svnusername --password svnpassword --non-interactive
cd plugin-name
rm -r trunk
git clone https://github.com/company/plugin-name.git trunk
```
Replace svnusername and svnpassword with your wordpress username and password. Replace plugin-name with your plugin name.

When you want to push an update, use the following command:

```bash
svn update
cd trunk
git pull 2>&1
git reset --hard 2>&1
git clean -fd 2>&1
composer update --optimize-autoloader --no-dev --prefer-dist
cd ..
svn st | grep ^! | awk '{print " --force "$2}' | xargs svn rm # Delete all locally missing files 2>&1
svn add --force trunk/* --non-interactive --auto-props --parents --depth infinity
svn ci -m 'Update' --username svnusername --password svnpassword --non-interactive
```


#### links
- https://wordpress.org/plugins/add/
- https://wordpress.org/plugins/about/svn/

