# module-ubdatamigration - Magento 2 Data Migration
>This is a Magento 2 module, allows migrate some important data from Magento 1.x to Magento 2.x

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
Install a Magento 2 fresh website (without data sample)
Download Magento Community Edition 2.0 from below link: https://www.magentocommerce.com/download
Follow [Installation guide](http://devdocs.magento.com/guides/v2.0/install-gde/install-quick-ref.html) to Install a Magento 2 fresh website

### How To Install:
- Install via Composer by command:
    `composer require ubertheme/module-ubdatamigration`
- Example: 
![load module](http://i.prntscr.com/adb0c005b4e141088bd96c1c61d9f7c7.png)
- Enable the module in terminal window by commands:
    + `php -f PATH_YOUR_MAGENTO_2/bin/magento module:enable --clear-static-content Ubertheme_Ubdatamigration`
    + `php -f PATH_YOUR_MAGENTO_2/bin/magento setup:upgrade`
- Examples:
![enable module](http://i.imgur.com/ksW98w8.png)
- Make write permission for `pub` folder at path `PATH_YOUR_MAGENTO_2/pub`

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

+ Re-Index the data in Terminal window by command:
    `php -f PATH_YOUR_MAGENTO_2/bin/magento indexer:reindex`
![reindex data](http://i.imgur.com/Fvm2GpQ.png)
+ Clean Magento 2 cache by command
    `php -f PATH_YOUR_MAGENTO_2/bin/magento cache:flush`
![flush cache](http://i.imgur.com/VVweYQ8.png)

### 3 - Let’s discover Magento 2 with your data migrated by URL:
    http://your_magento2_url/
