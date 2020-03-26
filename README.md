# GROUP-ALPHA BACK-END

### To clone this repository
on command line run: git clone git@github.com:ross-ferreira/group_alpha_back_end.git
then follow the steps below
1.  run: composer install
2.  run: vendor/bin/homestead make
3.  run: mv .env.example .env
4.  in the .env file update the following: DB_DATABASE=homestead, DB_USERNAME=root, DB_PASSWORD=secret
5.  vagrant up
6.  vagrant ssh
7.  cd code
8.  art key:generate
9.  art migrate
10. exit
11. npm install
12. npm run watch