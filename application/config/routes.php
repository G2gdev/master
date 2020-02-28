<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'frontend/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE; 

/* *********** API ROUTES ************ */
$route ['api/auth/social/login.(:any)'] = 'v3/auth/Api/socialLogin/$1';
$route ['api/auth/loginwithotp.(:any)'] = 'v3/auth/Api/loginwithotp/$1';
$route ['api/auth/login.(:any)'] = 'v3/auth/Api/login/$1';
$route ['api/auth/signup.(:any)'] = 'v3/auth/Api/signup/$1';
$route ['api/auth/verifyotp.(:any)'] = 'v3/auth/Api/verifyotp/$1';
$route ['api/auth/resendotp.(:any)'] = 'v3/auth/Api/resendotp/$1';
$route ['api/auth/updateprofile.(:any)'] = 'v3/auth/Api/updateprofile/$1';
$route ['api/auth/accountsetting.(:any)'] = 'v3/auth/Api/accountsetting/$1';
$route ['api/order/history.(:any)'] = 'v3/orders/Api/orderhistory/$1';
$route ['api/order/notification.(:any)'] = 'v3/orders/Api/notification/$1';
$route ['api/order/removeNotification.(:any)'] = 'v3/orders/Api/removeNotification/$1';
$route ['api/order/ongoingorderinfo.(:any)'] = 'v3/orders/Api/ongoingorderinfo/$1';
$route ['api/order/ongoingorderlogs.(:any)'] = 'v3/orders/Api/ongoingorderlogs/$1';
$route ['api/order/ongoingorderbill.(:any)'] = 'v3/orders/Api/ongoingorderbill/$1';
$route ['api/order/setConfirmedItems.(:any)'] = 'v3/orders/Api/setConfirmedItems/$1';
$route ['api/order/getOrderDetailsByOrderId.(:any)'] = 'v3/orders/Api/getOrderDetailsByOrderId/$1';
$route ['api/order/cancelOrderFromApp.(:any)'] = 'v3/orders/Api/cancelOrderFromApp/$1';
$route ['api/order/rescheduleOrder.(:any)'] = 'v3/orders/Api/rescheduleOrder/$1';
$route ['api/auth/getUserProfile.(:any)'] = 'v3/auth/Api/getUserProfile/$1';
$route ['api/auth/getWalletBalance.(:any)'] = 'v3/auth/Api/getWalletBalance/$1';
$route ['api/auth/getReferCode.(:any)'] = 'v3/auth/Api/getReferCode/$1';
$route ['api/coupon/check.(:any)'] = 'v3/general/Api/checkcoupon/$1';
$route ['api/coupon/getActiveCoupons.(:any)'] = 'v3/general/Api/getActiveCoupons/$1'; 
$route ['api/auth/addaddress.(:any)'] = 'v3/auth/Api/addUseraddress/$1';
$route ['api/auth/updateaddress.(:any)'] = 'v3/auth/Api/updateUseraddress/$1';
$route ['api/auth/getaddress.(:any)'] = 'v3/auth/Api/getUseraddress/$1';
$route ['api/auth/getUserNotification.(:any)'] = 'v3/auth/Api/getUserNotification/$1';
$route ['api/auth/getOngoingOrder.(:any)'] = 'v3/auth/Api/getOngoingOrder/$1'; 

//service api
$route ['api/service/checkservice.(:any)'] = 'v3/service/Api/checkservice/$1';
$route ['api/service/getcategory.(:any)'] = 'v3/service/Api/getCategory/$1';
$route ['api/service/brandbycatid.(:any)'] = 'v3/service/Api/brandbycatid/$1';
$route ['api/service/modelbybrandid.(:any)'] = 'v3/service/Api/modelbybrandid/$1';
$route ['api/service/categorybymodelid.(:any)'] = 'v3/service/Api/categorybymodelid/$1';
$route ['api/service/subcategorybycatid.(:any)'] = 'v3/service/Api/subcategorybycatid/$1';
$route ['api/service/addOrder.(:any)'] = 'v3/service/Api/addOrder/$1';
$route ['api/service/getOrderHistory.(:any)'] = 'v3/service/Api/getOrderHistory/$1';
$route ['api/service/getslot.(:any)'] = 'v3/service/Api/getslot/$1';
$route ['api/service/uploadDocument.(:any)'] = 'v3/service/Api/uploadDocument/$1'; 
$route ['api/auth/testNotify.(:any)'] = 'v3/auth/Api/testNotification/$1';

//mechanic api
$route ['api/mechanic/vendorinvoices.(:any)'] = 'v3/mechanic/Api/vendor_invoice/$1';
$route ['api/mechanic/refresh_payment.(:any)'] = 'v3/mechanic/Api/refresh_payment/$1';
$route ['api/mechanic/send_otp.(:any)'] = 'v3/mechanic/Api/send_otp/$1';
$route ['api/mechanic/verifyotp.(:any)'] = 'v3/mechanic/Api/verifyotp/$1';
$route ['api/mechanic/setpassword.(:any)'] = 'v3/mechanic/Api/setpassword/$1';
$route ['api/mechanic/login.(:any)'] = 'v3/mechanic/Api/login/$1';
$route ['api/mechanic/scheduled_services.(:any)'] = 'v3/mechanic/Api/scheduled_services/$1';
$route ['api/mechanic/service_accept_or_reject.(:any)'] = 'v3/mechanic/Api/service_accept_or_reject/$1';
$route ['api/mechanic/reason_list.(:any)'] = 'v3/mechanic/Api/reason_list/$1';
$route ['api/mechanic/order_status.(:any)'] = 'v3/mechanic/Api/order_status/$1';
$route ['api/mechanic/service_or_spareparts_list.(:any)'] = 'v3/mechanic/Api/service_or_spareparts_list/$1';
$route ['api/mechanic/main_services_list.(:any)'] = 'v3/mechanic/Api/main_services_list/$1';
$route ['api/mechanic/suggest_services.(:any)'] = 'v3/mechanic/Api/suggest_services/$1';
$route ['api/mechanic/suggested_services_list.(:any)'] = 'v3/mechanic/Api/suggested_services_list/$1';
$route ['api/mechanic/payment.(:any)'] = 'v3/mechanic/Api/payment/$1';
$route ['api/mechanic/update_profile.(:any)'] = 'v3/mechanic/Api/update_profile/$1';
$route ['api/mechanic/ongoing_orders.(:any)'] = 'v3/mechanic/Api/ongoing_orders/$1';
$route ['api/mechanic/ongoing_orders_by_mechanic.(:any)'] = 'v3/mechanic/Api/ongoing_orders_by_mechanic/$1';

$route ['api/mechanic/ongoingorderinfo.(:any)'] = 'v3/mechanic/Api/ongoingorderinfo/$1';
$route ['api/mechanic/getOrderHistory.(:any)'] = 'v3/mechanic/Api/getOrderHistory/$1';
$route ['api/mechanic/testNotification.(:any)'] = 'v3/mechanic/Api/testNotification/$1';
$route ['api/mechanic/testGarageNotification.(:any)'] = 'v3/mechanic/Api/testGarageNotification/$1';
$route ['api/mechanic/getNotification.(:any)'] = 'v3/mechanic/Api/getMechanicNotificationById/$1';
$route ['api/mechanic/getOrderListByMechanic.(:any)'] = 'v3/mechanic/Api/getOrderListByMechanic/$1';
$route ['api/mechanic/getMechnicList.(:any)'] = 'v3/mechanic/Api/getMechnicList/$1';
$route ['api/mechanic/assignMechnic.(:any)'] = 'v3/mechanic/Api/assignMechnic/$1';

$route ['api/mechanic/addMechanic.(:any)'] = 'v3/mechanic/Api/addMechanic/$1';
$route ['api/mechanic/getRoleList.(:any)'] = 'v3/mechanic/Api/getRoleList/$1';
$route ['api/mechanic/uploadDocument.(:any)'] = 'v3/mechanic/Api/uploadDocument/$1';



//api vendor

$route ['api/vendor/vendorOrders.(:any)'] = 'v3/vendor/Api/getOrderList/$1'; 
$route ['api/vendor/assignOrderToMechanic.(:any)'] = 'v3/vendor/Api/assignOrderToMechanic/$1'; 





/* $route ['api/order/detail.(:any)'] = 'v3/orders/Api/orderdetail/$1';
$route ['api/order/cancel.(:any)'] = 'v3/orders/Api/cancelorder/$1';
$route ['api/auth/facebook/login.(:any)'] = 'v3/auth/Api/facebooklogin/$1';
$route ['api/auth/myaccount.(:any)'] = 'v3/auth/Api/myaccount/$1';
$route ['api/auth/contact/update.(:any)'] = 'v3/auth/Api/updatecontact/$1';
$route ['api/auth/forgotpassword.(:any)'] = 'v3/auth/Api/forgotpassword/$1';
$route ['api/coupon/check.(:any)'] = 'v3/general/Api/checkcoupon/$1';
$route ['api/coupon/list.(:any)'] = 'v3/general/Api/couponlist/$1';
$route ['api/product/list.(:any)'] = 'v3/general/Api/productlist/$1';
$route ['api/ticket/add.(:any)'] = 'v3/general/Api/addticket/$1';
//$route ['api/complaint/add.(:any)'] = 'v3/general/Api/addcomplaint/$1';
//$route ['api/order/add.(:any)'] = 'v3/orders/Api/addorder/$1';
//$route ['api/service/add.(:any)'] = 'v3/orders/Api/serviceadd/$1';
$route ['api/auth/facebook/signup.(:any)'] = 'v3/auth/Api/signupfacebook/$1';
$route ['api/payment/request.(:any)'] = 'v3/orders/Api/requestpayment/$1';
$route ['api/auth/updatepassword.(:any)'] = 'v3/auth/Api/updatepassword/$1';
$route ['api/auth/updatetoken.(:any)'] = 'v3/auth/Api/updatetoken/$1';
$route ['api/auth/getcontact.(:any)'] = 'v3/auth/Api/contact/$1';
$route ['api/auth/checkaddress.(:any)'] = 'v3/auth/Api/checkaddress/$1';
$route ['api/service/list.(:any)'] = 'v3/general/Api/servicelist/$1';
$route ['api/servicearea/check.(:any)'] = 'v3/general/Api/checkservice/$1';
$route ['api/service/price.(:any)'] = 'v3/general/Api/serviceprice/$1';
$route ['api/auth/addaddress.(:any)'] = 'v3/auth/Api/addUseraddress/$1';
$route ['api/auth/updateaddress.(:any)'] = 'v3/auth/Api/updateUseraddress/$1';
$route ['api/auth/getaddress.(:any)'] = 'v3/auth/Api/getUseraddress/$1';
$route ['api/order/schedulepickup.(:any)'] = 'v3/orders/Api/schedulePickup/$1';
$route ['api/order/scheduleorderdetail.(:any)'] = 'v3/orders/Api/scheduleorderdetail/$1';
$route ['api/order/updateschedulePickup.(:any)'] = 'v3/orders/Api/updateschedulePickup/$1';
$route ['api/order/confirmOrder.(:any)'] = 'v3/orders/Api/confirmOrder/$1';
$route ['api/order/updateDelivery.(:any)'] = 'v3/orders/Api/updatescheduleDelivery/$1';
$route ['api/order/latestorderdetail.(:any)'] = 'v3/orders/Api/latestorderdetail/$1';
$route ['api/pickup/slot.(:any)'] = 'v3/general/Api/pickupslot/$1';
$route ['api/delivery/slot.(:any)'] = 'v3/general/Api/deliveryslot/$1';
$route ['api/auth/deleteaddress.(:any)'] = 'v3/auth/Api/deleteaddress/$1';
$route ['api/auth/testNotify.(:any)'] = 'v3/auth/Api/testNotification/$1';
$route ['api/auth/getuseralert.(:any)'] = 'v3/auth/Api/getUserNotification/$1'; */


/* *********** Frontend Routes ********* */

/* *********** service page Routes ********* */
$route['services'] = 'frontend/Home/services';
/* *********** service page Routes ********* */

$route['signup'] = 'frontend/Home/Register';
$route['login'] = 'frontend/Home/Login';
$route['register'] = 'frontend/Login/UserRegistration';
$route['userlogin'] = 'frontend/Login/login';
$route['logout'] = 'frontend/Login/logout';
//$route['verifyotp/([0-9]+)/([0-9]+)'] = 'frontend/Login/otpMatch/$1/$2';
$route['otpreg'] = 'frontend/Login/otpMatch';
$route['resendotp'] = 'frontend/Login/otpResend';
$route['sendotp'] = 'frontend/Login/sendOtp';
$route['resetpassword'] = 'frontend/Login/resetPassword';
$route['resetpassword1'] = 'frontend/Login/resetPassword1';
$route['booking'] = 'frontend/Home/Booking';
$route['brandbycatid1'] = 'frontend/Home/brandbycatid1';
$route['modelbybrandid1'] = 'frontend/Home/modelbybrandid1';
$route['subcategorybycatid1'] = 'frontend/Home/subcategorybycatid1';
$route['catsubcatbyid1'] = 'frontend/Home/catsubcatbyid1';
$route['servicebycatid2'] = 'frontend/Home/servicebysubcatid';
$route['booking/add'] = 'frontend/Home/addOrder';
$route['applycpoupon'] = 'frontend/Home/applyCoupon';
$route['add/otp'] = 'frontend/Login/addOtp';
$route['about'] = 'frontend/Home/About';
$route['offer'] = 'frontend/Home/Offer';
$route['policy'] = 'frontend/Home/Policy';
$route['thankyou'] = 'frontend/Home/Thankyou';
$route['vendor/search'] = 'frontend/Vendor/searchPage';
$route['vendor/searched'] = 'frontend/Vendor/search';
$route['order/trackorder'] = 'frontend/Order/TrackOrder';
$route['order/history'] = 'frontend/Order/History';
$route['order/notification'] = 'frontend/Order/Notification';
$route['admin/order/add_type_into_session'] = 'backend/order/add_type_into_session';
$route['order/setting'] = 'frontend/Order/Setting';
$route['order/offer'] = 'frontend/Order/Offer';
$route['order/wallet'] = 'frontend/Order/Wallet';
$route['order/userupdate'] = 'frontend/Order/Userupdate';
$route['delivery_dates'] = 'frontend/Home/getDeliveryDates';
$route['contact_us'] = 'frontend/Home/contact';
$route['addcontact'] = 'frontend/Home/addcontact';

$route['order/trackorderold'] = 'frontend/Order/TrackOrderOld';

$route['services-app'] = 'frontend/Home/servicesApp';
$route['paynow/([a-zA-Z0-9]+)'] = 'frontend/Home/payonlinenow/$1';

//$route['simpl/create_transaction'] = 'frontend/home/createsimpltransaction';
$route['instamojo/create_transaction'] = 'frontend/Home/createinstamojotransaction';
$route['easebuzz/create_transaction/([0-9]+)'] = 'frontend/Home/createEaseBuzzTransaction/$1';

$route['facebook/login'] = 'frontend/login/login';
$route['facebook/logout'] = 'frontend/login/logout';

$route['google/login'] = 'frontend/login/login';
$route['google/logout'] = 'frontend/login/logout';


/* *********** Backend Routes ********** */
$route['admin'] = 'backend/login';
$route['admin/dashboard'] = 'backend/login/dashboard';
$route['admin/logout'] = 'backend/login/logout';
$route['admin/login'] = 'backend/login/adminlogin';
$route['admin/users'] = 'backend/Login/userList';

$route['admin/vendor/list'] = 'backend/Vendor';

$route['admin/vendor/list_trial'] = 'backend/Vendor/Trial';
$route['admin/vendor/new'] = 'backend/Vendor/newRestaurant';
$route['admin/vendor/new1'] = 'backend/Vendor/newRestaurant1';
$route['admin/vendor/add'] = 'backend/Vendor/addRestaurant';
$route['admin/vendor/updateVen'] = 'backend/Vendor/updateVen';
$route['admin/vendor/edit/([0-9]+)'] = 'backend/Vendor/editRestaurant/$1';
$route['admin/vendor/VendorEdit_trial/([0-9]+)'] = 'backend/Vendor/editRestaurant_trial/$1';
$route['admin/vendor/updatebasic'] = 'backend/Vendor/updateRestaurantBasicInfo';
$route['admin/vendor/updatebilling'] = 'backend/Vendor/updateRestaurantBillingInfo';
$route['admin/vendor/verify/([0-9]+)'] = 'backend/Vendor/verifyRestaurant/$1';
$route['admin/vendor/madelive/([0-9]+)'] = 'backend/Vendor/makeRestaurantLive/$1';
$route['admin/vendor/getgeofance/([0-9]+)'] = 'backend/Vendor/getgeofance/$1';
$route['admin/vendor/promoteList'] = 'backend/Vendor/promoteRestaurantList';
$route['admin/vendor/promote'] = 'backend/Vendor/promote';
$route['admin/vendor/promoteUpdate'] = 'backend/Vendor/promoteUpdate';
$route['admin/vendor/turnonpromotedresto'] = 'backend/Vendor/turnonPromotedResto';
$route['admin/vendor/turnoffpromotedresto'] = 'backend/Vendor/turnoffPromotedResto';
$route['admin/vendor/searchpromotedrestaurant'] = 'backend/Vendor/searchPromotedRestro';
$route['admin/vendor/turnoffresto'] = 'backend/Vendor/turnOffResto';
$route['admin/vendor/turnonresto'] = 'backend/Vendor/turnOnResto';
$route['admin/vendor/updatedelivery'] = 'backend/Vendor/updateVendorDeliveryInfo';
$route['admin/vendor/updatevendorarea'] = 'backend/Vendor/updateVendorArea';

$route['admin/mainservice'] = 'backend/service/service';
//$route['admin/category/list'] = 'backend/service/listCategory';
$route['admin/category/new'] = 'backend/service/newCategory';
$route['admin/category/add'] = 'backend/service/addCategory';
$route['admin/category/list'] = 'backend/service/getCategoryList';
$route['admin/category/edit'] = 'backend/service/editCategory';
$route['admin/category/update'] = 'backend/service/updateCategory';
//$route['admin/subcategory/list'] = 'backend/service/listCategory';
$route['admin/subcategorybycatid'] = 'backend/service/subcategorybycatid';
$route['admin/servicebycatid'] = 'backend/service/servicebycatid';
$route['admin/servicebycatid1'] = 'backend/service/servicebycatid1';
$route['admin/servicebyid'] = 'backend/service/servicebyid';
$route['admin/brandbycatid'] = 'backend/service/brandbycatid';
$route['admin/modelbybrandid'] = 'backend/service/modelbybrandid';
$route['admin/modelbybrandid1'] = 'backend/service/modelbybrandid1';
$route['admin/catsubcatbyid'] = 'backend/service/catsubcatbyid';
$route['admin/catsubcatbyid1'] = 'backend/service/catsubcatbyid1';
$route['admin/subcategory/new'] = 'backend/service/newSubCategory';
$route['admin/subcategory/add'] = 'backend/service/addSubCategory';
$route['admin/subcategory/list'] = 'backend/service/getSubCategoryList';
$route['admin/subcategory/edit'] = 'backend/service/editSubCategory';
$route['admin/subcategory/update'] = 'backend/service/updateSubCategory';
$route['admin/service/new/([0-9]+)'] = 'backend/service/newService/$1';
$route['admin/service/add'] = 'backend/service/addService';
$route['admin/service/list'] = 'backend/service/getService';
$route['admin/service/edit'] = 'backend/service/editServices';
$route['admin/service/update'] = 'backend/service/updateService';
$route['admin/catsubcat/new'] = 'backend/service/newCatsubcat';
$route['admin/catsubcat/add'] = 'backend/service/addCatsubcat';
$route['admin/catsubcat/list'] = 'backend/service/getCatsubcat';
$route['admin/catsubcat/edit'] = 'backend/service/editCatsubcat';
$route['admin/catsubcat/update'] = 'backend/service/updateCatsubcat';
$route['admin/model/new'] = 'backend/service/newModel';
$route['admin/model/add'] = 'backend/service/addModel';
$route['admin/model/list'] = 'backend/service/getModelList';
$route['admin/model/edit'] = 'backend/service/editModel';
$route['admin/model/update'] = 'backend/service/updateModel';
$route['admin/brand/new'] = 'backend/service/newBrand';
$route['admin/brand/add'] = 'backend/service/addBrand';
$route['admin/brand/list'] = 'backend/service/getBrandList';
$route['admin/brand/edit'] = 'backend/service/editBrand';
$route['admin/brand/update'] = 'backend/service/updateBrand';
$route['admin/spare/new/([0-9]+)'] = 'backend/service/newSpare/$1';
$route['admin/spare/add'] = 'backend/service/addSpare';
$route['admin/spare/list'] = 'backend/service/getSpare';
$route['admin/spare/edit'] = 'backend/service/editSpare';
$route['admin/spare/update'] = 'backend/service/updateSpare';

$route['admin/staticsubcategory/new'] = 'backend/service/newstaticSubCategory';
$route['admin/staticsubcategory/add'] = 'backend/service/addstaticSubCategory';
$route['admin/staticsubcategory/list'] = 'backend/service/getstaticSubCategoryList';
$route['admin/staticsubcategory/edit/([0-9]+)'] = 'backend/service/editstaticSubCategory/$1';
$route['admin/staticsubcategory/update'] = 'backend/service/updatestaticSubCategory';

$route['admin/mainarea'] = 'backend/area/area';
//$route['admin/category/list'] = 'backend/service/listCategory';
$route['admin/city/new'] = 'backend/area/newCity';
$route['admin/city/add'] = 'backend/area/addCity';
$route['admin/city/list'] = 'backend/area/getCityList';
$route['admin/city/edit'] = 'backend/area/editCity';
$route['admin/city/update'] = 'backend/area/updateCity';
//$route['admin/subcategory/list'] = 'backend/service/listCategory';
$route['admin/zone/new'] = 'backend/area/newZone';
$route['admin/zone/add'] = 'backend/area/addZone';
$route['admin/zone/list'] = 'backend/area/getZoneList';
$route['admin/zone/edit'] = 'backend/area/editZone';
$route['admin/zone/update'] = 'backend/area/updateZone';
$route['admin/area/new/([0-9]+)'] = 'backend/area/newArea/$1';
$route['admin/area/add'] = 'backend/area/addArea';
$route['admin/area/list'] = 'backend/area/getArea';
$route['admin/area/edit'] = 'backend/area/editArea';
$route['admin/area/update'] = 'backend/area/updateArea';

$route['admin/maintimeslot'] = 'backend/timeslot/timeslot';
$route['admin/vslot/new'] = 'backend/timeslot/newVslot';
$route['admin/vslot/add'] = 'backend/timeslot/addVslot';
$route['admin/vslot/list'] = 'backend/timeslot/getVslotList';
$route['admin/vslot/edit'] = 'backend/timeslot/editVslot';
$route['admin/vslot/update'] = 'backend/timeslot/updateVslot';
$route['admin/dslot/new'] = 'backend/timeslot/newDslot';
$route['admin/dslot/add'] = 'backend/timeslot/addDslot';
$route['admin/dslot/list'] = 'backend/timeslot/getDslotList';
$route['admin/dslot/edit'] = 'backend/timeslot/editDslot';
$route['admin/dslot/update'] = 'backend/timeslot/updateDslot';

$route['admin/mainquality'] = 'backend/quality/quality';
$route['admin/parameter/new'] = 'backend/quality/newParameter';
$route['admin/parameter/add'] = 'backend/quality/addParameter';
$route['admin/parameter/list'] = 'backend/quality/getParameterList';
$route['admin/parameter/edit'] = 'backend/quality/editParameter';
$route['admin/parameter/update'] = 'backend/quality/updateParameter';
$route['admin/grade/new'] = 'backend/quality/newGrade';
$route['admin/grade/add'] = 'backend/quality/addGrade';
$route['admin/grade/list'] = 'backend/quality/getGrade';
$route['admin/grade/edit'] = 'backend/quality/editGrade';
$route['admin/grade/update'] = 'backend/quality/updateGrade';

$route['admin/mainemp'] = 'backend/employee/employee';
$route['admin/role/new'] = 'backend/employee/newRole';
$route['admin/role/add'] = 'backend/employee/addRole';
$route['admin/role/list'] = 'backend/employee/getRoleList';
$route['admin/role/edit'] = 'backend/employee/editRole';
$route['admin/role/update'] = 'backend/employee/updateRole';
$route['admin/emp/new'] = 'backend/employee/newEmp';
$route['admin/emp/add'] = 'backend/employee/addEmp';
$route['admin/emp/list'] = 'backend/employee/getEmp';
$route['admin/emp/edit'] = 'backend/employee/editEmp';
$route['admin/emp/update'] = 'backend/employee/updateEmp';

$route['admin/customer/list'] = 'backend/employee/customerList';

$route['admin/coupon/list'] = 'backend/coupan';
$route['admin/coupon/newCoupon'] ='backend/coupan/addCoupon';
$route['admin/coupon/addcoupon']='backend/coupan/add';
$route['admin/general/getRestro'] = 'backend/coupan/getRestro';
$route['admin/coupon/update/([0-9]+)']='backend/coupan/updateCoupon/$1';
$route['admin/coupon/update/updateCoupon']='backend/coupan/update';
$route['admin/general/restro'] = 'backend/Setting/getRestro';
$route['admin/general/getrestaurantbyarea'] = 'backend/Setting/getRestaurantByArea';
$route['admin/coupan/turnoffcoupon/([0-9]+)']='backend/coupan/turnoffcoupon/$1';
$route['admin/coupan/turnoncoupon/([0-9]+)']='backend/coupan/turnoncoupon/$1';
$route['admin/coupon/deletevendor/([0-9]+)']='backend/coupan/deleteVendor/$1';
$route['admin/coupan/statusoncoupon/([0-9]+)']='backend/coupan/statusoncoupon/$1';
$route['admin/coupan/statusoffcoupon/([0-9]+)']='backend/coupan/statusoffcoupon/$1';

$route['admin/order/new'] = 'backend/order/newOrder';
$route['admin/order/add'] = 'backend/order/addOrder';
$route['admin/user/bymobile'] = 'backend/order/getUserByMobile';
$route['admin/user/byemail'] = 'backend/order/getUserByEmail';
$route['admin/user/byname'] = 'backend/order/getUserByName';
$route['admin/user/detail/([0-9]+)'] = 'backend/order/userDetail/$1';
$route['admin/order/pendingorders'] = 'backend/order/pendingOrders';
$route['admin/order/rejectedorders'] = 'backend/order/rejectedOrders';
$route['admin/order/completedorders'] = 'backend/order/completedOrders';
$route['admin/order/deliverycompletedorders'] = 'backend/order/deliveryCompletedOrders';
$route['admin/order/cancelledorders'] = 'backend/order/cancelledOrders';
$route['admin/order/pickuporders'] = 'backend/order/pickupOrders';
$route['admin/order/scheduledorders'] = 'backend/order/scheduledOrders';
$route['admin/order/deliveryorders'] = 'backend/order/deliveryOrders';
$route['admin/order/todaysorders'] = 'backend/order/todaysOrders';
$route['admin/order/todaysordersbooked'] = 'backend/order/todaysOrdersBooked';
$route['admin/order/todaysdeliveries'] = 'backend/order/todaysDeliveries';
$route['admin/order/searchorders'] = 'backend/order/searchOrders';
$route['admin/order/newinvoices'] = 'backend/order/deliveryInvoices';
$route['admin/order/view_details/([0-9]+)'] = 'backend/order/orderDetail/$1';
$route['admin/order/view_details1/([0-9]+)'] = 'backend/order/orderHistory/$1';
$route['admin/order/assignpickup/([0-9]+)'] = 'backend/order/placeOrder/$1';
$route['admin/order/assigndelivery/([0-9]+)'] = 'backend/order/assignDelivery/$1';
$route['admin/order/updateassigndelivery/([0-9]+)'] = 'backend/order/updateassigndelivery/$1';
$route['admin/order/reassignpickup/([0-9]+)'] = 'backend/order/reassignPickUp/$1';
$route['admin/order/reassigndelivery/([0-9]+)'] = 'backend/order/reassignDelivery/$1';
$route['admin/order/deliverycompleted/([0-9]+)'] = 'backend/order/deliveryCompleted/$1';
$route['admin/order/cancel/([0-9]+)'] = 'backend/order/cancelOrder/$1';
$route['admin/order/delete/([0-9]+)'] = 'backend/order/deleteOrder/$1';
$route['admin/order/updatepickupdate/([0-9]+)'] = 'backend/order/updatePickUpDate/$1';
$route['admin/order/updatepickupslot/([0-9]+)'] = 'backend/order/updatePickUpSlot/$1';

$route['admin/order/updateCategory/([0-9]+)'] = 'backend/order/updateCategory/$1';
$route['admin/order/updateBrand/([0-9]+)'] = 'backend/order/updateBrand/$1';
$route['admin/order/updateVehicleModel/([0-9]+)'] = 'backend/order/updateVehicleModel/$1';
$route['admin/order/updateVehicleService/([0-9]+)'] = 'backend/order/updateVehicleService/$1';


$route['admin/order/reschedulepickup/([0-9]+)'] = 'backend/order/reschedulePickUp/$1';
$route['admin/order/updatedeliverydate/([0-9]+)'] = 'backend/order/updateDeliveryDate/$1';
$route['admin/order/updatedeliveryslot/([0-9]+)'] = 'backend/order/updateDeliverySlot/$1';
$route['admin/order/rescheduledelivery/([0-9]+)'] = 'backend/order/rescheduleDelivery/$1';
$route['admin/order/updatecustomername/([0-9]+)'] = 'backend/order/updateCustomerName/$1';
$route['admin/order/updateratecard/([0-9]+)'] = 'backend/order/updateRatecard/$1';
$route['admin/order/updatecustomermobile/([0-9]+)'] = 'backend/order/updateCustomerMobile/$1';
$route['admin/order/updatecustomeremail/([0-9]+)'] = 'backend/order/updateCustomerEmail/$1';
$route['admin/order/updatecustomeraddress/([0-9]+)'] = 'backend/order/updateCustomerAddress/$1';
$route['admin/order/updatecustomerlandmark/([0-9]+)'] = 'backend/order/updateCustomerLandmark/$1';
$route['admin/order/additems'] = 'backend/order/addItems';
$route['admin/order/updateitems'] = 'backend/order/updateItems';
$route['admin/order/completed/([0-9]+)'] = 'backend/order/completeOrder/$1';
$route['admin/order/deliveryattemptedsms/([0-9]+)'] = 'backend/order/deliveryAttemptedSMS/$1';
$route['admin/order/deliverycallanssms/([0-9]+)'] = 'backend/order/deliveryCallAnsweredSMS/$1';
$route['admin/order/pickupattemptedsms/([0-9]+)'] = 'backend/order/pickupAttemptedSMS/$1';
$route['admin/order/invoice/generate/([0-9]+)'] = 'backend/order/generateInvoice/$1';
$route['admin/order/updateorderadjustment/([0-9]+)'] = 'backend/order/updateOrderAdjustment/$1';
$route['admin/order/add_type_into_session'] = 'backend/order/add_type_into_session';
$route['admin/order/confirmApproval/([0-9]+)'] = 'backend/order/confirmApproval/$1';
$route['admin/order/markworkCompleted/([0-9]+)'] = 'backend/order/markworkCompleted/$1';
$route['admin/order/assignedorders'] = 'backend/order/assignedOrders';
$route['admin/order/ongoingorders'] = 'backend/order/ongoingOrders';
$route['admin/order/approvalorders'] = 'backend/order/approvalOrders';
$route['admin/order/addAdminComment/([0-9]+)'] = 'backend/order/addAdminComment/$1';


$route['admin/items/([0-9]+)'] = 'backend/Item/index/$1';
$route['admin/item/new'] = 'backend/Item/newItem';
$route['admin/item/edit/([0-9]+)'] = 'backend/Item/editItem/$1';
$route['admin/item/add'] = 'backend/Item/addItem';
$route['admin/item/update'] = 'backend/Item/updateItem';
$route['admin/item/turnon/([0-9]+)'] = 'backend/Item/turnOnItem/$1';
$route['admin/item/turnoff/([0-9]+)'] = 'backend/Item/turnOffItem/$1';
$route['admin/item/search/([0-9]+)/([0-9]+)/([0-9]+)/([0-9]+)/([0-9]+)'] = 'backend/Item/searchItem/$1/$2/$3/$4/$5';
$route['admin/item/detail/([0-9]+)/([0-9]+)/([0-9]+)/([0-9]+)/([0-9]+)/([0-9]+)'] = 'backend/Item/getItem/$1/$2/$3/$4/$5/$6';
$route['admin/item/category'] = 'backend/Item/getCategoryList';
$route['admin/item/category/new'] = 'backend/Item/newCategory';
$route['admin/item/category/edit/([0-9]+)'] = 'backend/Item/editCategory/$1';
$route['admin/item/category/add'] = 'backend/Item/addCategory';
$route['admin/item/category/update'] = 'backend/Item/updateCategory';
$route['admin/item/newRate'] = 'backend/Item/newRate';
$route['admin/item/newRate1/([0-9]+)'] = 'backend/Item/newRate1/$1';
$route['admin/item/newVendor'] = 'backend/Item/newVendor';
$route['admin/item/newVendor1/([0-9]+)'] = 'backend/Item/newVendor1/$1';
$route['admin/item/addRate'] = 'backend/Item/addRate';
$route['admin/item/addVendor'] = 'backend/Item/addVendor';
$route['admin/item/rateedit/([0-9]+)'] = 'backend/Item/editRate/$1';
$route['admin/item/vendoredit/([0-9]+)'] = 'backend/Item/editVendor/$1';
$route['admin/item/rateUpdate'] = 'backend/Item/rateUpdate';
$route['admin/item/vendorUpdate'] = 'backend/Item/vendorUpdate';
$route['admin/item/ratecard'] = 'backend/Item/getRatecardList';
$route['admin/item/ratecard/new'] = 'backend/Item/newRatecard';
$route['admin/item/ratecard/add'] = 'backend/Item/addRatecard';
$route['admin/item/ratecard/edit/([0-9]+)'] = 'backend/Item/editRatecard/$1';
$route['admin/item/ratecard/update'] = 'backend/Item/updateRatecard';
$route['admin/item/rate/([0-9]+)'] = 'backend/Item/rateCards/$1';
$route['admin/item/rate1/([0-9]+)'] = 'backend/Item/rateCards1/$1';

$route['admin/general/tickets'] = 'backend/setting/tickets';
$route['admin/general/ticket/new'] = 'backend/setting/newTicket';
$route['admin/general/ticket/edit/([0-9]+)'] = 'backend/setting/editTicket/$1';
$route['admin/general/ticket/add'] = 'backend/setting/addTicket';
$route['admin/general/ticket/update'] = 'backend/setting/updateTicket';
$route['admin/general/ticket'] = 'backend/setting/mainTicket';
$route['admin/general/new'] = 'backend/setting/newCategory';
$route['admin/general/add'] = 'backend/setting/addCategory';
$route['admin/general/list'] = 'backend/setting/getCategoryList';
$route['admin/general/edit'] = 'backend/setting/editCategory';
$route['admin/general/update'] = 'backend/setting/updateCategory';
$route['admin/general/newsub'] = 'backend/setting/newSubCategory';
$route['admin/general/addsub'] = 'backend/setting/addSubCategory';
$route['admin/general/listsub'] = 'backend/setting/getSubCategoryList';
$route['admin/general/editsub'] = 'backend/setting/editSubCategory';
$route['admin/general/updatesub'] = 'backend/setting/updateSubCategory';
$route['admin/general/newstatus'] = 'backend/setting/newStatus';
$route['admin/general/addstatus'] = 'backend/setting/addStatus';
$route['admin/general/listatus'] = 'backend/setting/getStatus';
$route['admin/general/editstatus'] = 'backend/setting/editStatus';
$route['admin/general/updatestatus'] = 'backend/setting/updateStatus';
$route['admin/general/subcbycatid'] = 'backend/setting/subcbycatid';
$route['admin/general/view/([0-9]+)']   = 'backend/setting/viewLead/$1';
$route['admin/general/comment']   =  'backend/setting/comment';
$route['admin/general/change/priority']   =  'backend/setting/changePriority';
$route['admin/general/history/([0-9]+)']   =  'backend/setting/leadHistory/$1';
$route['admin/general/status/history/([0-9]+)']   =  'backend/setting/statusHistory/$1';
$route['admin/general/priority/history/([0-9]+)']   =  'backend/setting/priorityHistory/$1';
$route['admin/general/assign/executive']   =  'backend/setting/assignLead';
$route['admin/general/change/status']   =  'backend/setting/changeStatusLead';
$route['admin/general/change/priority']   =  'backend/setting/changePriority';

$route['admin/user/bymobile'] = 'backend/setting/getUserByMobile';
$route['admin/user/byemail'] = 'backend/setting/getUserByEmail';
$route['admin/user/byname'] = 'backend/setting/getUserByName';
$route['admin/user/detail/([0-9]+)'] = 'backend/setting/userDetail/$1';
$route['admin/details'] = 'backend/setting/detail';

$route['admin/report/users'] = 'backend/Report/getUsers';
$route['admin/report/orders'] = 'backend/Report/getOrders';
$route['admin/report/business'] = 'backend/Report/getBusinessReport';
$route['admin/report/downloadbusireport'] = 'backend/Report/downloadReport';
$route['admin/report/cashcollection'] = 'backend/Report/collectionReport';
$route['admin/report/vendor'] = 'backend/Report/getVendorReport';
$route['admin/report/vendors'] = 'backend/Report/getVendors';
$route['admin/report/vendorDetails/([0-9]+)'] = 'backend/Report/getvendorDetailReport/$1';
$route['admin/report/downloadVendorDetailsReport'] = 'backend/Report/downloadVendorDetailsReport';

$route['admin/menu/upload'] = 'backend/Menu/uploadMenu';
$route['admin/menu/import'] = 'backend/Menu/import';
$route['admin/menu/import1'] = 'backend/Menu/import1';
$route['admin/menu/import2'] = 'backend/Menu/import2';
$route['admin/menu/update/([0-9]+)'] = 'backend/Menu/updateMenu/$1';
$route['admin/menu/importupdate'] = 'backend/Menu/importUpdate';
$route['admin/menu/publish'] = 'backend/Menu/publish_menu';
$route['admin/menu/downloadcatofsubcat'] = 'backend/Menu/downloadCatofSubcat';
$route['admin/menu/downloaduptoservice'] = 'backend/Menu/downloadUptoService';
$route['admin/menu/downloaduptospare'] = 'backend/Menu/downloadUptoSpare';
$route['admin/menu/downloadreminders'] = 'backend/Menu/downloadUptoReminder';
$route['admin/Cron'] = 'backend/Cron/Assign';

$route['admin/mainstatus/new'] = 'backend/Service/newMainStatus';
$route['admin/mainstatus/add'] = 'backend/Service/addMainStatus';
$route['admin/mainstatus/list'] = 'backend/Service/getMainStatusList';
$route['admin/mainstatus/edit/([0-9]+)'] = 'backend/Service/editMainStatus/$1';
$route['admin/mainstatus/update'] = 'backend/Service/updateMainStatus';

$route['admin/payment_response'] = 'backend/order/paymentResponse';

$route['admin/general/reasonlist'] = 'backend/Setting/getReasonList';
$route['admin/general/newreason'] = 'backend/Setting/newReason';
$route['admin/general/addreason'] = 'backend/Setting/addReason';
$route['admin/general/editreason/([0-9]+)'] = 'backend/Setting/editReason/$1';
$route['admin/general/updatereason'] = 'backend/Setting/updateReason';
$route['admin/general/deletereason/([0-9]+)'] = 'backend/Setting/deleteReason/$1';

$route['admin/order/service/add'] = 'backend/service/addServiceFromOrder';
$route['admin/order/spare/add'] = 'backend/service/addSpareFromOrder';
$route['admin/order/approvalUpdate'] = 'backend/order/updateServices';

$route['admin/order/getallorders'] = 'backend/order/getallorders';
$route['admin/order/getreminderusers'] = 'backend/Order/getReminderuserdata';
$route['admin/cron/getOrdersafterSixty'] = 'backend/Cron/getOrdersafterSixty';

$route['admin/order/addreminder'] = 'backend/order/addReminder';
$route['admin/order/addremindercron'] = 'backend/order/addremindercron';
$route['admin/pdfdemo'] = 'backend/Order/pdfdemo';
$route['admin/reminderlist'] = 'backend/order/showReminderList';

$route['admin/profit'] = 'backend/Profit/index';
$route['admin/profit/addinvoice'] = 'backend/Profit/addinvoice';
$route['admin/profit/pending'] = 'backend/Profit/pending';
$route['admin/profit/addpaid'] = 'backend/Profit/addpaid';
$route['admin/profit/paid'] = 'backend/Profit/paid';

$route['admin/order_list'] = 'backend/Order/order_list';
$route['admin/details'] = 'backend/setting/detail';
$route['admin/orderdetail'] = 'backend/setting/order_detail';
$route['admin/general/change/changePriorityTicket']   =  'backend/setting/changePriorityTicket';
$route['admin/general/change/executiveTicket']   =  'backend/setting/executiveTicket';
$route['admin/general/change/statusTicket']   =  'backend/setting/statusTicket';
$route['send_mail']   =  'backend/Order/send_mail';
$route['admin/userOrders'] = 'backend/Order/userOrders';