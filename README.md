# Signup Task for Magento 2

This extension is the first task to test your magento 2 skill.

 - [Task Description](#task-description)
 - [Setup](#setup)
   - [Get the package](#get-the-package)
   - [Install the module](#install-the-module)
 - [Usage](#usage)
 - [Settings](#settings)
 - [Developers](#developers)
 - [Support](#support)
 - [Authors](#authors)
 - [License](#license)

## Task Description

## Setup

Magento 2 Open Source or Commerce edition is required.

- The version `3.x` is compliant with Magento `2.3.x`.  
- The version `2.x` is compliant with Magento `2.2.x`.

This module does not support Magento `2.0.x` and `2.1.x`, as these versions ar not anymore maintained.  

### Get the package

**Zip Package:**

Unzip the package in app/code/Opengento/Gdpr.

**Composer Package:**

```
composer require opengento/module-gdpr
```

### Install the module

Then, run the following magento command:

```
bin/magento setup:upgrade
```

**If you are in production mode, do not forget to recompile and redeploy the static resources.**

## Usage

* **[Art. 17 GDPR](https://gdpr-info.eu/art-17-gdpr/)**
  * Account deletion and anonymization can be done in 'My Account > Privacy Settings'.
  * Customers can use their 'right to be forgotten'. The password is required to ensure the customer legibility.
    The account will be erased within 1 hour, or as specified in configuration. The customer can undo the action in this time span.
* **[Art. 20 GDPR](https://gdpr-info.eu/art-20-gdpr/)**
  * Personal data export can be done in 'My Account > Privacy Settings'.
  * Customers can export their data in `.zip` archive containing file, `.html` (many others are available), with personal data.
* Cookie Policy in a disclosure popup are shown at the first time customer visit.

## Settings

The configuration for this module is located in 'Stores > Configuration > Customers > Customer Configuration > Privacy (GDPR)'.  
The whole documentation and guide is available at [our website](https://opengento.fr/magento2-gdpr/).

## Developers

The developer documentation is available at [our website](https://opengento.fr/magento2-gdpr/).  
It explains how to add your own processors to the GDPR workflow.

## Support

Raise a new [request](https://github.com/opengento/magento2-gdpr/issues) to the issue tracker.  
Please provide your Magento 2 version and the module version. Explain how to reproduce your issue and what's expected.

## Authors

- **Initial Inspiration** - *`Cookie PopUp` sources* - [flurrybox](https://github.com/flurrybox)
- **Opengento Community** - *Lead* - [![Twitter Follow](https://img.shields.io/twitter/follow/opengento.svg?style=social)](https://twitter.com/opengento)
- **Thomas Klein** - *Maintainer* - [![GitHub followers](https://img.shields.io/github/followers/thomas-kl1.svg?style=social)](https://github.com/thomas-kl1)
- **Contributors** - *Contributor* - [![GitHub contributors](https://img.shields.io/github/contributors/opengento/magento2-gdpr.svg?style=flat-square)](https://github.com/opengento/magento2-gdpr/graphs/contributors)

## License

This project is licensed under the MIT License - see the [LICENSE](./LICENSE) details.

***That's all folks!***


#SignUp Task

This module is the first task in magento 2 skills

##Task Description
###Create a signup sheet 

###Frontend
Add a custom page with the URL "http://localhost/signup"
Create a form with 2 inputs, name and date
If the form is enabled, display the form. if it is disabled display an error message "Form not enabled"

###CRUD
The module should have collection, resource module, data module, and interfaces to those classes. 
Add API classes for the CRUD services

###Admin
New menu item under the customer section New system config for enabled yes/no
Admin grid to display all that have signed up (should be searchable by name and filterable by date)

