
# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu/xenial64"
  config.vm.network "private_network", ip: "192.168.33.50"
  config.vm.synced_folder "./data", "/var/www/html/"
  config.vm.provider "virtualbox" do |v|
    v.name = "Défaut-ip:192.168.33.50"
  end
end

