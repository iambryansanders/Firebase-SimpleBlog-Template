# Firebase SimpleBlog Template

Extremely simple Firebase blog template. 
Sorts automatically by most recent.

## Steps to Create
1. Clone this repo
2. In `script.js` and `upload/uploader.php`, you can see `var dataRef`. Where it says `new Firebase('FIREBASE DOMAIN')` insert your firebase domain. 
3. You're done. 

## Security
Security is extremely loose. It merely includes another page if password is right. 
Login: `yourdomain.com/upload/index.php`
Username: admin, Password: password. (Can be changed on `upload/index.php` line 15 & 16. 


## Docs for Modification
Posts are all put in a DIV with `.posts`.
From there, `.posts h1` will modify Title, `.posts .h3` will modify the date section, and `.posts p` will modify the story. 
HTML elements are usable for the posts. 
