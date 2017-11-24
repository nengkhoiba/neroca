var LOGIN_DETAILS;
var MENU_DETAILS;
var TABLE_LIST_DATA;
var CURRENT_ORDERED_ITEMS = {};
var TOTAL_CURRENT_ORDER =0;
var SELECTED_TABLE = 9999;

var globaldatacontroller = {
    
	setLoginDetails: function (loginDetails){
		LOGIN_DETAILS = loginDetails;
	},
	
	getLoginDetails: function (){
		return LOGIN_DETAILS;
	},
	
	setMenuDetails: function (menuDetails){
		MENU_DETAILS = menuDetails;
	},
	
	getMenuDetails: function (){
		return MENU_DETAILS;
	},
	
	setTableData: function (tableData){
		TABLE_LIST_DATA = tableData;
	},
	
	getTableData: function (){
		return TABLE_LIST_DATA;
	},
	
	setCurrentOrderItems: function (currentOrder){
		CURRENT_ORDERED_ITEMS = currentOrder;
	},
	
	getCurretnOrderItems: function(){
		return CURRENT_ORDERED_ITEMS;
	},
	
	setTotalCurrentOrder: function(total){
		TOTAL_CURRENT_ORDER= total;
	},
	
	getTotalCurrentOrder: function (){
		return TOTAL_CURRENT_ORDER;
	},
	
	setSelectedTable: function (table) {
		SELECTED_TABLE = table;
	},
	
	getSelectedTable: function () {
		return SELECTED_TABLE;
	}
};