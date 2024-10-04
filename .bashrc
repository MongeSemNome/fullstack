# ~/.bashrc: executed by bash(1) for non-login shells.
# see /usr/share/doc/bash/examples/startup-files (in the package bash-doc)
# for examples

# If not running interactively, don't do anything
case $- in
    *i*) ;;
      *) return;;
esac

# don't put duplicate lines or lines starting with space in the history.
# See bash(1) for more options
HISTCONTROL=ignoreboth

# append to the history file, don't overwrite it
shopt -s histappend

# for setting history length see HISTSIZE and HISTFILESIZE in bash(1)
HISTSIZE=1000
HISTFILESIZE=2000

# check the window size after each command and, if necessary,
# update the values of LINES and COLUMNS.
shopt -s checkwinsize

# If set, the pattern "**" used in a pathname expansion context will
# match all files and zero or more directories and subdirectories.
#shopt -s globstar

# make less more friendly for non-text input files, see lesspipe(1)
#[ -x /usr/bin/lesspipe ] && eval "$(SHELL=/bin/sh lesspipe)"

# set variable identifying the chroot you work in (used in the prompt below)
if [ -z "${debian_chroot:-}" ] && [ -r /etc/debian_chroot ]; then
    debian_chroot=$(cat /etc/debian_chroot)
fi

# set a fancy prompt (non-color, unless we know we "want" color)
case "$TERM" in
    xterm-color|*-256color) color_prompt=yes;;
esac

# uncomment for a colored prompt, if the terminal has the capability; turned
# off by default to not distract the user: the focus in a terminal window
# should be on the output of commands, not on the prompt
#force_color_prompt=yes

if [ -n "$force_color_prompt" ]; then
    if [ -x /usr/bin/tput ] && tput setaf 1 >&/dev/null; then
	# We have color support; assume it's compliant with Ecma-48
	# (ISO/IEC-6429). (Lack of such support is extremely rare, and such
	# a case would tend to support setf rather than setaf.)
	color_prompt=yes
    else
	color_prompt=
    fi
fi

if [ "$color_prompt" = yes ]; then
    PS1='${debian_chroot:+($debian_chroot)}\[\033[01;32m\]\u@\h\[\033[00m\]:\[\033[01;34m\]\w\[\033[00m\]\$ '
else
    PS1='${debian_chroot:+($debian_chroot)}\u@\h:\w\$ '
fi
unset color_prompt force_color_prompt

# If this is an xterm set the title to user@host:dir
case "$TERM" in
xterm*|rxvt*)
    PS1="\[\e]0;${debian_chroot:+($debian_chroot)}\u@\h: \w\a\]$PS1"
    ;;
*)
    ;;
esac

# enable color support of ls and also add handy aliases
if [ -x /usr/bin/dircolors ]; then
    test -r ~/.dircolors && eval "$(dircolors -b ~/.dircolors)" || eval "$(dircolors -b)"
    alias ls='ls --color=auto'
    #alias dir='dir --color=auto'
    #alias vdir='vdir --color=auto'

    #alias grep='grep --color=auto'
    #alias fgrep='fgrep --color=auto'
    #alias egrep='egrep --color=auto'
fi

# colored GCC warnings and errors
#export GCC_COLORS='error=01;31:warning=01;35:note=01;36:caret=01;32:locus=01:quote=01'

# some more ls aliases
#alias ll='ls -l'
#alias la='ls -A'
#alias l='ls -CF'

# Alias definitions.
# You may want to put all your additions into a separate file like
# ~/.bash_aliases, instead of adding them here directly.
# See /usr/share/doc/bash-doc/examples in the bash-doc package.

if [ -f ~/.bash_aliases ]; then
    . ~/.bash_aliases
fi

# enable programmable completion features (you don't need to enable
# this, if it's already enabled in /etc/bash.bashrc and /etc/profile
# sources /etc/bash.bashrc).
if ! shopt -oq posix; then
  if [ -f /usr/share/bash-completion/bash_completion ]; then
    . /usr/share/bash-completion/bash_completion
  elif [ -f /etc/bash_completion ]; then
    . /etc/bash_completion
  fi
fi

# linhas customizadas do Felipe 
alias ams='php artisan migrate:fresh --seed 'xavier
alias a='php artisan '
alias am='php artisan migrate '
alias amr='rm -rf database/database.sqlite; touch database/database.sqlite; php artisan migrate:refresh '
alias bs='source ~/.bashrc '
alias c='clear'
alias ci='composer install'
alias co='code'
alias cr='composer require'
alias cu='composer update'
alias d='sqlitebrowser database/database.sqlite'
alias di='docker image ls'
alias dcm='docker commit'
alias dps='docker ps -a'
alias ds='docker container start -ai '
alias dsa='docker system prune -a '
alias ep='source ~/python/env/bin/activate'
alias f='flatpak run io.freetubeapp.FreeTube '
alias ft='flatpak run io.freetubeapp.FreeTube https://www.youtube.com/watch?v=URImAnPU864'
alias g='wget '
alias gad='git add . '
alias gc='git clone '
alias gcm='git commit -am '
alias gp='git push '
alias gms='git switch main; git merge backend; git push ; git switch backend'
alias gmm='git switch main ; git pull; git switch frontend; git merge main'
alias gst='git status'
alias gt='gnome-terminal'
alias l='ls'
alias la='ls -A'
alias lvi='composer install; npm install; cp .env.example .env; touch database/database.sqlite; php artisan migrate; php artisan key:generate '
alias nb='npm run build'
alias nd='npm run dev'
alias ni='npm install'
alias nw='np run watch'
alias obs='code ~/.bashrc '
alias p='python3 '
alias pa='python3 a.py'
alias pat='php artisan tinker'
alias pma='php -S localhost:8090'
alias patt='while true; do php artisan tinker; done' # Ctrl+D reload tinker
alias pma-get='wget https://files.phpmyadmin.net/phpMyAdmin/5.1.1/phpMyAdmin-5.1.1-all-languages.zip'
alias pma-unzip='unzip phpMyAdmin-5.1.1-all-languages.zip'
alias pma-rn='mv phpMyAdmin-5.1.1-all-languages pma'
alias pma-cd='cd pma'
alias pma-all='pma-get && pma-unzip && pma-rn && pma-cd && php -S localhost:8090'
alias pse='php -S localhost:8091 '
alias pt='pytube '
alias portainer='docker run -p 9000:9000 --name=portainer --restart=unless-stopped -v /var/run/docker.sock:/var/run/docker.sock -v portainer_data:/data portainer/portainer-cedocker run -d -p 9000:9000 --name=portainer --restart=unless-stopped -v /var/run/docker.sock:/var/run/docker.sock -v portainer_data:/data portainer/portainer-ce'
alias s='php artisan serve '
alias sq='sqlitebrowser data.sqlite '
alias t='bash /home/d/applications/tor/firefox '
alias tmp='cd /tmp '
alias tm='tmux'
alias tl='tmux list-sessions'
alias ts='tg-archive --sync'
alias ud='sudo apt update'
alias ug='sudo apt upgrade -y'
alias uu='sudo apt update; sudo apt upgrade -y '
alias 64g='flatpak run io.github.tdesktop_x64.TDesktop'
alias lstart='lvi; ni; nb; php artisan migrate:fresh --seed; npm install --global gulp-cli; npm install --save-dev gulp-rename; npm install --save-dev gulp gulp-concat gulp-uglifys'