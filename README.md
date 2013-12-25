# A Vagrant Configuration for ResourceSpace

This project contains a Vagrant file and a provisioning script, that bootstraps a 
virtual machine with the latest ResourceSpace from SVN trunk.

# Usage

Checkout the repository

    git clone https://github.com/kodemaniak/vagrant-resourcespace.git

From the checked out directory, run vagrant

    vagrant up

You can now connect to ResourceSpace on

    http://localhost:10080/resourcespace

This is a fresh ResourceSpace, so you have to login with the default admin user (admin/admin), set
a new password, etc. When you stop the machin, all state will be kept, however, if you do a

    vagrant destroy

everythin will be erased and regenenrated on the next startup. Please refer to the Vagrant docs for more details 
(http://docs.vagrantup.com/v2/).

This virtual machine is for development only. If you modify the Vagrantfile, specifically the port mapping, you can
have more than one of the machines. For instance, one machine for development, and another machine used to test
plugins in fresh installs, etc.

