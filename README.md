#WBST

*Version 1.0*

**WBST WordPress starter theme with Bootstrap and WooCommerce compatibility.** It also has my popular two scripts – Hovernav (Bootstrap navbar dropdown on hover) and Meganav (Bootstrap navbar megamenu).

-----

WBST Plus has a little brother – of BST, Bootstrap Starter Theme [https://github.com/SimonPadbury/bst](https://github.com/SimonPadbury/bst). It shares the same basic features as BST, and adds a few more features. 

If you want even more features, you may find them in the biggest member of this family – BST-Plus [https://github.com/BST-Plus/BST-Plus](https://github.com/BST-Plus/BST-Plus).

-----

###Basic Features of WBST

* *Simple, intuitive, clean code.*
* CSS, JS, functions and template parts are organized into different folders.
* **Bootstrap 3.3.2** - CSS and JS enqueued. You can simply swap the default Bootstrap 3 files (included) for a custom made Bootstrap 3, and this theme will still work.
* **jQuery 1.11.2** either using the hosted Google CDN or WordPress's onboard jQuery. You decide.
* `Modernizr.js` and `respond.js` included - enqueued.
* A starter CSS theme - `css/wbst.css`, enqueued. (**Don't** put your own styles in `style.css`.)
* Visual editor stylesheet - into which the same Bootstrap 3 and starter CSS theme are preloaded by `@import`, so that what you see in the visual editor is (mostly!) what you get at the front end (WYSI(M!)WYG). E.g. you will see the theme's typography in the WordPress Post/Page editor, but its width will not be the same as your article column width in the front end.
* Bootstrap pagination ( e.g. `1 | 2 | 3 | Older ->`) for Blog index and category pages.
* **WooCommerce plugin support.** (You will also need the [WooCommerce plugin] (http://wordpress.org/plugins/woocommerce/)).
* Choice of two navbar positions (above and below the site title).
* **Hovernav** - navbar dropdown on hover.
* **Meganav** - navbar mega-menu, which automatically works whenever there are grand-child links (for screen sizes >= 768px).
* In `functions/cleanup.php` there are some filters included (but commented-out, so are inactive) for removing WordPress IDs and classes from the navbar(s). If you would like to use these filters, then simply un-comment them.
* A few simple jQuery scripts – in `js/wbst.js`, enqueued.
* Custom comment list callback.
* [MIT licence](http://opensource.org/licenses/MIT) (open source).