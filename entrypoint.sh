WORKDIR="/home/sites/hostel"
source /root/.bashrc
composer install
nvm install v20.16.0
npm install

touch /home/sites/hostel/database/database.sqlite
cd /home/sites/hostel
cp .env.example .env

npm install -g gulp gulp-concat gulp-uglify gulp-rename gulp-watch gulp-clean-css --save-dev
gulp
npm run build

php artisan key:generate
php artisan migrate:refresh --seed
chmod 777 -R .
service apache2 start
service mariadb start
mysql -u root -e "ALTER USER 'root'@'localhost' IDENTIFIED BY '';"
mysql -u root -e "FLUSH PRIVILEGES;" ;
