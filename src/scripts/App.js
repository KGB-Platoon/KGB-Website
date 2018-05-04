//Imports
import {loadData} from './modules/AjaxData';

//Script
$(document).ready(() => {

    let kgbID = $('html').attr('kgb-id');
    
    switch(kgbID){
        case 'login':
            //Login
        break;
        case 'main':
            //Main
            loadData('here','./static/partials/home.php');
        break;
    }
    
});