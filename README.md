# liFeed

installation requirements:
* vagrant
* virtualbox
* laravel homestead
  * make sure that the homestead.yaml file is properly mapping the correct files to the vagrant machine
* in the .env file, databse is "homestead", the db password "secret"

to start the machine/Laravel, go to the homestead directory:
* vagrant up
* vagrant ssh
then cd yourself to where the laravel files are

Inside the virtual machine of your project on the terminal:
* composer install
* npm install
* npm run dev

also, make sure that the website can be hosted 
	* sudo vim /etc/hosts
	* edit the file by pressing i
	* the port number (192.168.10.10) and then the title of your website (url)
	* to exit, write :wq

to close homestead (on terminal):
 * exit 
then close vagrant
 * vagrant halt
For any reason, if you need to restart the box,
* vagrant reload --provision


when making changes to code, if there are any changes on the front end: npm run dev
