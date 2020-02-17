# liFeed

installation requirements:
* vagrant
* virtualbox
* laravel homestead
  * make sure that the homestead.yaml file is properly mapping the correct files to the vagrant machine

to start the machine/Laravel, go to the homestead directory:
* vagrant up
* vagrant ssh
then cd yourself to where the laravel files are

Inside the virtual machine of your project on the terminal:
* composer install
* npm install
* npm run dev

to close homestead (on terminal):
 * exit 
then close vagrant
 * vagrant halt
For any reason, if you need to restart the box,
* vagrant reload --provision
