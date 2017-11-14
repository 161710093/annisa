<?php

//route basic (dasar)
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
return '<h1>Hallo</h1>'
	.'Selamat datang di webapp saya<br>'
	.'Laravel, emang keren.';
});

 Route::get('/kontak', function(){
 	return view('kontak');
});

/*
 Route::get('/about/1', function(){
 return '<h1>Assalamualaikum</h1>'
 	.'Selamat Datang Di Web Annisa<br>';
 });

 Route::get('/about/2', function(){
 return '<h1>Assalamualaikum</h1>'
 	.'Selamat Datang Di Website Nisa<br>';
 });

 Route::get('/about/3', function(){
 return '<h1>Assalamualaikum</h1>'
 	.'Selamat Datang Di Web Hafitria<br>';
 });

 Route::get('/about/4', function(){
 return '<h1>Assalamualaikum</h1>'
 	.'Selamat Datang Di Website Fitria<br>';
 });

 Route::get('/about/5', function(){
 return '<h1>Assalamualaikum</h1>'
 	.'Selamat Datang Di Web Anha Nifi<br>';
 });
*/

 //route parameter
 Route::get('/about/{id}', function($a){
 return 'Hallo Assalamualaikum ini adalah halaman about <b>'.$a.'</b>';
 });	

Route::get('/kantin/{nisa}/{fitria}/{nifi}', function($a,$b,$c){
return 'Saya Pesan Makan <b>'.$a.'</b><br>'
	   .'Minumnya <b>'.$b.'</b><br>'
	   .'Tambah Cemilan <b>'.$c.'</b>';
});	

//route optional parameter
Route::get('user/{name?}', function($name = 'John'){
 return 'Nama Saya <b>'.$name.'</b>';
 });