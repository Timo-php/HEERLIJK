<?php

Route::get('partnermodule', function(){
    echo 'Hello from the PartnerModule package!';
});
Route::get('partnerselect', 'HEERLIJK\PartnerModule\PartnerSelectController@partnerselect');
Route::get('otherfunctions', 'HEERLIJK\PartnerModule\PartnerSelectController@otherFunctions');
