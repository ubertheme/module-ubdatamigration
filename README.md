# module-ubdatamigration - Magento 2 Data Migration
>This is a Magento 2 module, allows migrate some important data from Magento 1.x to Magento 2.x

> #### Dec 13, 2017: 
[UB Data Migration Pro 3.1.2](https://goo.gl/nTvSxF) released, fully compatible with the latest Magento 2.2.2

> #### Sept 15, 2017: 
UB Data Migration Pro 3.1.0 arrived, with All-New Intuitive Dashboard 

> ####Oct 18, 2016 Update: 
[UB Data Migration Pro V3](http://bit.ly/ub-data-migration-v3) Released - a complete overhaul compared to its older sibling. Below are some of the most striking new features in the V3:
+ Supports Delta Migration (incremental changes)
+ Allows to migrate data into your Magento 2 site with existing database (Our old V2 version required a fresh installation instead) 
+ Allows to proceed migration using the command lines in Command-line interface (CLI) mode, after completing all pre-migration setting steps. 
+ Supports PHP Memcached (optional) to improve performance
+ Ready for large-scale Magento data migration
+ And much more

## Tutorial Video
>Check out the 14-minute video guide below to learn more about the V3: 
<p style="text-align: center;">
<a href="http://www.youtube.com/watch?feature=player_embedded&v=R4UBLe2kf-I
" target="_blank"><img src="http://static.ubertheme.com/newsletter/2016/UB_Migration_video.png" 
alt="UB Data Migration Pro V3" width="560" height="315" border="10" /></a>
</p>

## Magento Data Migration FAQs
- [Magento 2 Data Migration FAQs (Part I)](https://goo.gl/HUo7x6)
- [Magento 2 Data Migration FAQs (Part II)](https://goo.gl/pYMUv4)

## Successful Magento 2 Migration Case Studies

Check out all Magento 2 migration case studies [here](https://goo.gl/J4XHfg), a few to name: 

- Case Study: Winetasting.com – Migrate 382,047 customer entities to Magento 2
- How Freelaunch.nl used UB Data Migration Pro to migrate 230,000 products to Magento 2
- Case study: Successful Magento 2 Data Migration for Kwaaijongens.nl

## Archive: 
> May 17, 2016 Update: We decided to upgrade our free migration tool to a premium version — [UB Data Migration Pro](http://bit.ly/UB-data-migration-pro-release) to provide a better, stable and more feature-rich solution for Magento 2 migration. Check out this [9-minute video](https://youtu.be/Jvr8d3OeB8M) to learn more about how this new migration tool can help with Magento 2 migration.

[![Latest Stable Version](https://poser.pugx.org/ubertheme/module-ubdatamigration/v/stable)](https://packagist.org/packages/ubertheme/module-ubdatamigration) [![Total Downloads](https://poser.pugx.org/ubertheme/module-ubdatamigration/downloads)](https://packagist.org/packages/ubertheme/module-ubdatamigration) [![Latest Unstable Version](https://poser.pugx.org/ubertheme/module-ubdatamigration/v/unstable)](https://packagist.org/packages/ubertheme/module-ubdatamigration) [![License](https://poser.pugx.org/ubertheme/module-ubdatamigration/license)](https://packagist.org/packages/ubertheme/module-ubdatamigration)

### Allow Features:
+ [x] Migrate Web sites, Stores, Store views
+ [x] Migrate Attribute Sets, Attribute Groups, Attributes
+ [x] Migrate Categories
+ [x] Migrate Products
+ [x] Migrate Customers
+ [x] Migrate Sales Data: Sales Orders, Sales Invoices, Sales Shipments... 
+ [x] Migrate Product Reviews, Ratings data
+ [-] ...

### Compatible:
    + Magento CE 1.x: 1.6.x, 1.7.x, 1.8.x, 1.9.x
    + Magento 2 CE 2.0.0 and later
### Author: [UberTheme](http://www.ubertheme.com)

### Prepare (precondition):
+ Install a Magento 2 fresh website (without data sample)
Download Magento Community Edition 2.0 from below link: https://www.magentocommerce.com/download
Follow [Installation guide](http://devdocs.magento.com/guides/v2.0/install-gde/install-quick-ref.html) to Install a Magento 2 fresh website
+ Enable the **[php sqlite](http://php.net/manual/en/sqlite.installation.php)** in your server (required)
+ Make write permission for `pub` folder at path `PATH_YOUR_MAGENTO_2/pub`

### How To Install:
- Install via Composer: In your terminal window, go to your magento2 webroot folder and run bellow command:
+ `composer require ubertheme/module-ubdatamigration`
- Example: 
![load module](http://i.prntscr.com/adb0c005b4e141088bd96c1c61d9f7c7.png)
- Enable the module: In your terminal window run bellow commands:
+ `php -f PATH_YOUR_MAGENTO_2/bin/magento module:enable --clear-static-content Ubertheme_Ubdatamigration`
+ `php -f PATH_YOUR_MAGENTO_2/bin/magento setup:upgrade`
- Examples:
![enable module](http://i.imgur.com/ksW98w8.png)

### How To Use:

#### 1 - Follow step by step by UI of this module as bellow screenshots:
![Step 1](http://i.imgur.com/aRkl3jJ.png)

![Step 2](http://i.imgur.com/LzVdz8o.png)

![Step 3](http://i.imgur.com/hkalWf2.png)

![Step 4](http://i.imgur.com/ZwWqSyE.png)

![Step 5](http://i.imgur.com/wA5vmk0.png)

![Step 6](http://i.imgur.com/wiz64NQ.png)

![Step 7](http://i.imgur.com/dKItNy9.png)

![Step 8](http://i.imgur.com/UBLb63y.png)

![Step 9](http://i.imgur.com/LwG3FwA.png)

#### 2 - Finish (_required_)
**To finish the data migration from Magento 1 to Magento 2, you have to do some tasks bellow:**
+ Copy media files
    - Copy the folder at PATH_YOUR_MAGENTO_1\media\catalog and paste replace to PATH_YOUR_MAGENTO_2\pub\media\
    - Copy the folder at PATH_YOUR_MAGENTO_1\media\downloadable and paste replace to PATH_YOUR_MAGENTO_2\pub\media\
    - Make recursive write permission to "catalog" and "downloadable" folders which you have just copied.

+ Re-save all the Attribute Sets migrated:
    In backend of your Magento 2 go to Stores/Attributes/Attribute menu navigation. 
    Open the Attribute Set, edit information of it if needed and click the save button

+ Re-Index the data: In your terminal window run bellow command:
    `php -f PATH_YOUR_MAGENTO_2/bin/magento indexer:reindex`
![reindex data](http://i.imgur.com/0rds1GB.png)

+ Clean Magento 2: In your terminal window run bellow command:
    `php -f PATH_YOUR_MAGENTO_2/bin/magento cache:flush`
![flush cache](http://i.imgur.com/pKSs0Eh.png)

+ Upgrade Password Hash (__This is optional task for more security__): In your terminal window run bellow command
    `php -f PATH_YOUR_MAGENTO_2/bin/magento customer:hash:upgrade`
![upgrade customer password_hash](http://i.imgur.com/wSkhljs.png)

### 3 - Let’s discover Magento 2 with your data migrated by URL:
    http://your_magento2_url/
