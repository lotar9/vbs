# -*- mode: ruby -*-
# vi: set ft=ruby :

# All Vagrant configuration is done below. The "2" in Vagrant.configure
# configures the configuration version (we support older styles for
# backwards compatibility). Please don't change it unless you know what
# you're doing.
Vagrant.configure(2) do |config|
  # The most common configuration options are documented and commented below.
  # For a complete reference, please see the online documentation at
  # https://docs.vagrantup.com.

  # Every Vagrant development environment requires a box. You can search for
  # boxes at https://atlas.hashicorp.com/search.
  config.vm.box = "ubuntu/trusty64"

  # Disable automatic box update checking. If you disable this, then
  # boxes will only be checked for updates when the user runs
  # `vagrant box outdated`. This is not recommended.
  # config.vm.box_check_update = false

  # Create a forwarded port mapping which allows access to a specific port
  # within the machine from a port on the host machine. In the example below,
  # accessing "localhost:8080" will access port 80 on the guest machine.
  config.vm.network "forwarded_port", guest: 80, host: 8080

  # Create a private network, which allows host-only access to the machine
  # using a specific IP.
  # config.vm.network "private_network", ip: "192.168.33.10"

  # Create a public network, which generally matched to bridged network.
  # Bridged networks make the machine appear as another physical device on
  # your network.
  # config.vm.network "public_network"

  # Share an additional folder to the guest VM. The first argument is
  # the path on the host to the actual folder. The second argument is
  # the path on the guest to mount the folder. And the optional third
  # argument is a set of non-required options.
  # config.vm.synced_folder "../data", "/vagrant_data"
  config.vm.synced_folder ".", "/vagrant", disabled: true
  config.vm.synced_folder ".", "/vagrant-home", owner: "vagrant", group: "www-data", mount_options: ["dmode=775,fmode=774"]

  # Provider-specific configuration so you can fine-tune various
  # backing providers for Vagrant. These expose provider-specific options.
  # Example for VirtualBox:
  #
  # config.vm.provider "virtualbox" do |vb|
  #   # Display the VirtualBox GUI when booting the machine
  #   vb.gui = true
  #
  #   # Customize the amount of memory on the VM:
  #   vb.memory = "1024"
  # end
  #
  # View the documentation for the provider you are using for more
  # information on available options.

  # Define a Vagrant Push strategy for pushing to Atlas. Other push strategies
  # such as FTP and Heroku are also available. See the documentation at
  # https://docs.vagrantup.com/v2/push/atlas.html for more information.
  # config.push.define "atlas" do |push|
  #   push.app = "YOUR_ATLAS_USERNAME/YOUR_APPLICATION_NAME"
  # end

  # Enable provisioning with a shell script. Additional provisioners such as
  # Puppet, Chef, Ansible, Salt, and Docker are also available. Please see the
  # documentation for more information about their specific syntax and use.
   config.vm.provision "shell", inline: <<-SHELL
    curl -s https://packagecloud.io/install/repositories/phalcon/stable/script.deb.sh | sudo bash
    sudo add-apt-repository ppa:ondrej/php
    sudo apt-get update
    sudo apt-get install -y apache2 php7.0-phalcon php7.0-mysql php7.0-sqlite3 php7.0-cli git
    sudo apt-get install -y libapache2-mod-php7.0
    sudo cat <<EOT >> /etc/apache2/conf-available/rewrite-html.conf
<Directory /var/www/html>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride All
        Order allow,deny
        allow from all
</Directory>
EOT
    sudo ln -sf /etc/apache2/conf-available/rewrite-html.conf /etc/apache2/conf-enabled/rewrite-html.conf
    sudo a2enmod rewrite
    sudo mv /var/www/html /var/www/html.orig
    sudo ln -sf /vagrant-home/html /var/www/html
    ln -sf /var/www/html /home/vagrant/html
    sudo service apache2 restart
    sudo rm -rf /vagrant-home/phalcon-devtools/
    git clone https://github.com/phalcon/phalcon-devtools.git /vagrant-home/phalcon-devtools
    sudo /vagrant-home/phalcon-devtools/phalcon.sh
    sudo ln -sf /vagrant-home/phalcon-devtools/phalcon.php /usr/bin/phalcon
    sudo chmod ugo+x /usr/bin/phalcon
   SHELL
end
