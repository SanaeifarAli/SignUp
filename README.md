# Signup Task for Magento 2

This extension is the first task to test your magento 2 skill.

 - [Task Description](#task-description)
 - [Setup](#setup)
 - [Usage](#usage)
 - [Support](#support)
 - [Authors](#authors)
 - [License](#license)

## Task Description

### Create a signup sheet 

**Frontend**
- Add a custom page with the URL "http://localhost/signup"
- Create a form with 2 inputs, name and date
- If the form is enabled, display the form. if it is disabled display an error message "Form not enabled"

**CRUD**
- The module should have collection, resource module, data module, and interfaces to those classes Add API classes for the CRUD services

**Admin**
- New menu item under the customer section New system config for enabled yes/no
- Admin grid to display all that have signed up (should be searchable by name and filterable by date)

## Setup
- Magento 2 Open Source or Commerce edition is required
- Download and copy "Task1" folder to 'app/code' folder of magento 2
- Open terminal and run command 'magento module:enable Task1_SignUp'
- Run command 'magento setup:upgrade'

## Usage

**Frontend**
- http://yourDomain/signup

**CRUD**
- http://yourDomain/rest/V1/signup
- http://yourDomain/rest/V1/signupCreate
- http://yourDomain/rest/V1/signupUpdate
- http://yourDomain/rest/V1/signupDelete

**Admin**
- http://yourDomain/admin/signup

## Settings
- The configuration for this module is located in 'Stores > Settings > Configuration > SignUp > SignUp'

## Support
- If there are any comments,question or recommendation please let me know at AliSanaeifar@yahoo.com

## Authors
 
 - **Ali Sanaeifar**  
 AliSanaeifar@yahoo.com

## License

This project is not licensed.

***That's all folks!***
