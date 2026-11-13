

nano ~/.bashrc

----------------------
Git Commands
----------------------
alias gs='git status'
alias ga='git add .'
alias gc='git commit'
alias gps='git push'
alias gpu='git pull'
alias gr='git remote -v'
alias gb='git branch'
alias gf='git fetch --all'

----------------------
Symfony Commands
----------------------
alias pbc='php bin/console'
alias pbcc='php bin/console cache:clear'
alias fl='php bin/console doctrine:fixtures:load --group=app --no-interaction'
alias asset='php bin/console cache:clear --env=dev && php bin/console importmap:install && php bin/console asset-map:compile --env=dev'
alias lint='php bin/console lint:twig templates/ && php bin/console lint:yaml config/ && php bin/console lint:container'

