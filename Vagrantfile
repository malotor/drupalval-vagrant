# Example 5
#
# Single box with LAMP stack and sample static/dynamic sites via Puppet.
#
box      = 'precise64'
url      = 'http://files.vagrantup.com/precise64.box'
hostname = 'myprecisebox'
domain   = 'virtual1.dev'
ip       = '192.168.56.101'
ram      = '256'


Vagrant.configure("2") do |config|
  config.vm.box = box
  config.vm.box_url = url

  config.vm.network :private_network, ip: ip
  config.vm.network :forwarded_port, guest: 80, host: 8080
  config.ssh.forward_agent = true

  config.vm.provider :virtualbox do |v|
    v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
    v.customize ["modifyvm", :id, "--memory", ram]
    v.customize ["modifyvm", :id, "--name", hostname]
  end

  
  config.vm.synced_folder "~/Sites", "/var/www/", id: "vagrant-root" ,:owner => "vagrant", :group => "www-data"
  

  config.vm.provision :puppet do |puppet|
    puppet.manifests_path = 'puppet/manifests'
    puppet.manifest_file = 'site.pp'
    puppet.module_path = 'puppet/modules'
    puppet.options = ['--verbose']
  end
end