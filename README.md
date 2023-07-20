![alt text](https://amplifyn.com/assets/images/amplifyn-logo.svg "Logo Title Text 1")

# VETERA WEBSITE WORDPRESS THEME #

This is Vetera website read me file. This README would normally document whatever steps are necessary to get your application up and running.

### What is this repository for? ###

* This contains Vetera website Wordpress theme files

### How do I get set up? ###

* Create a new folder inside your ```htdocs```

* Install and configure fresh Wordpress inside newly created folder

* Open the terminal and navigate to the themes folder ```cd wp-content/themes/```

* Get a clone to your local themes folder ```git clone git@bitbucket.org:amplifyn/vetera-web.git vetera```

* Update your devSite url to your local folder base url in gulpfile configurations: 
```devSite: 'http://localhost:8888/{your-local-folder-name}/'```

* Navigate to created folder inside themes directory using following command
```cd vetera```

* Run: ```npm install```
* To open the site in your localhost: ```gulp```
* To generate build version run: ```gulp build```
 
### Contribution guidelines ###

* When you developing any feature of the theme you should push your changes to a relevant ```feature branch``` (Ex:- ```feature/feature-home```) and then create a pull request to ```master``` branch. When you a create PR please make sure to apply close this branch after merge option.
* Code review