# GROUP-ALPHA BACK-END

## To clone this repository
on command line run: git clone git@github.com:ross-ferreira/group_alpha_back_end.git
then follow the steps below
1.  run: composer install
2.  run: vendor/bin/homestead make
3.  run: mv .env.example .env
4.  in the .env file update the following: DB_DATABASE=homestead, DB_USERNAME=root, DB_PASSWORD=secret
5.  run: vagrant up
6.  run: vagrant ssh
7.  run: cd code
8.  run: artisan key:generate
9.  run: artisan migrate
10. run: exit
11. run: npm install
12. run: npm run watch

## API routes
All future requests should use the root uri https://alpha.developme.space/api/

### GET /startgame
Will return a list of all images

### POST /
Will add an image - required fields below
* title
* url
* top
* right
* bottom
* left

### PUT /<id>
Will update the existing image

### Data format
```javascript
{
    "data": [
        {
            "id": 1,
            "title": "Image 1",
            "url": "https://github.com/HenryTaylor2019/team-alpha-frontend/blob/f60dbd549c0258a4c803d97b870ec98872d5af03/src/Atomic/img/p1_facetouch.jpg?raw=true",
            "top": 30,
            "left": 40,
            "bottom": 35,
            "right": 37
        }
    ]
}
```