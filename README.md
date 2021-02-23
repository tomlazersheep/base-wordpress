**Urbi Labs Default Theme**

---

## Get Started


1. From the root, run `npm install`.
2. Run `gulp` to build and watch for changes.
3. `wp-config.php` is ignored, but you can copy the `wp-config-local.php` or `wp-config-remote.php` to create a `wp-config.php` depending on if you want to work locally or connect to the remote DB.
4. Don't forget to update your `WP_HOME` and `WP_SITEURL` in the `wp-config.php`.

### Not working?
- Is your IP address white listed?
- Double check your wp-config.
- Did you run `npm install` and `gulp`?

---

## Working Remotely

We recommend connecting to the remote DB to work, but if you are doing a lot of work on the DB and want to work locally that's okay! Please just keep the remote DB updated prior to other developers working on the project.

While working locally, you can load images from the remote `uploads` folder by inserting the following code in your `functions.php` file:

```
function user_use_remote_image_directory($upload_dir){
    $upload_dir['url'] = str_replace('http://LOCAL_URL_HERE/', 'https://REMOTE_URL_HERE/', $upload_dir['url']);
    $upload_dir['baseurl'] = str_replace('http://LOCAL_URL_HERE/', 'https://REMOTE_URL_HERE/', $upload_dir['baseurl']);
    return $upload_dir;
}

add_filter('upload_dir', 'user_use_remote_image_directory');
```

This allows you to login to the remote WordPress dashboard to make DB updates and upload images while working on the theme files locally.
