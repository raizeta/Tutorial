<?php
1. sudo npm install -g @angular/cli
2. ng new NamaProject --style=scss
3. Masuk ke Folder NamaProject Yang Baru Anda Buat Di Langkah No.2
4. ng serve --open //Perintah Ini Digunakan Untuk Menjalankan Project Anda Di Browser
 
 ng generate service NamaService
ng generate module app-routing --flat --module=app

 Source:https://www.youtube.com/watch?v=oa9cnWTpqP8
 <input type="submit" value="{{buttontext}}"> //Hasilnya Sama
 <input type="submit" [value]="buttontext">  //Hasilnya Sama

 npm install @angular/animations@latest --save
 import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
 import { Router, ActivatedRoute, ParamMap } from '@angular/router';
