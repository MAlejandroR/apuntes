sudo rm ./public -r
hugo -d public
rsync -avz -e "ssh" ./public/ admin@web.infenlaces.com:httpdocs/manuel/


