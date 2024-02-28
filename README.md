# Custom Contact Plugin

## Description
Custom Contact Plugin is a simple WordPress plugin that allows users to collect and display contact information.

## Features
- Collects name, address, and phone number input from users.
- Saves the collected information into the WordPress database.
- Provides a shortcode to display the collected contact information on any page or post.

## Directory Structure
The plugin directory structure is as follows:
```
custom-contact-plugin
├── custom-contact-plugin.php
└── includes
    ├── database.php
    └── shortcode.php

```



## Installation
1. Download the plugin zip file from the [releases](link-to-releases) section.
2. Upload the zip file to your WordPress site via the WordPress admin panel.
3. Activate the plugin.
4. Use the provided shortcode `[display_contacts]` to display the collected contact information on your WordPress site.

## Create Database Table (incase plugin installation did'nt create table manually):
```CREATE TABLE `wp_javabrowncontacts` (
`id` mediumint(9) NOT NULL,
`name` varchar(100) NOT NULL,
`address` varchar(255) NOT NULL,
`phone` varchar(20) NOT NULL
)```

## Contribution
Contributions are welcome! Feel free to submit issues or pull requests.

## License
This project is licensed under the [MIT License](LICENSE).

## Creating a Zip File
To create a zip file for distribution, you can use the provided shell script `create_zip.sh`. Follow the instructions below:
1. Make sure you have the necessary permissions to execute the script.
2. Run the script by executing the following command in your terminal:
   ```bash
   chmod +x create_zip.sh

   ./create_zip.sh


The script will create a zip file named custom-contact-plugin.zip containing all the plugin files and directories.


Author
Raja Khan

 
