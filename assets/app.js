const $ = require('jquery');
// this "modifies" the jquery module: adding behavior to it
// the bootstrap module doesn't export/return anything
var dt = require( 'datatables.net' ) ;


require ('bootstrap');
 
// require ('bootstrap/dist/css/bootstrap.css');
require ('./styles/app.css');
// or you can include specific pieces
// require('bootstrap/js/dist/tooltip');
// require('bootstrap/js/dist/popover');


$(document).ready(function() {
     $('#table').dataTable();
});
