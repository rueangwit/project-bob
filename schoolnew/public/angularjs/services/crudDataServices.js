//'use strict';
user_mg.service('dataService',function($http,alertify){
  this.insertService = function(dataInput,dataUrl){
    var formData  = dataInput;
    var promise = $http({
      method: 'POST',
      url: '/'+dataUrl,
      data:formData,

    }).then(function (success){
      console.log('success');
      return false;
   },function (error){
     console.log('error');
     return true;

   });
    //console.log(promise);
    return promise;
  }
  this.showService = function(dataUrl){

    var promise = $http({
      method: 'GET',
      url: '/'+dataUrl,
      //data:formData,

    }).then(function (success){
      console.log('success');
      return success;
   },function (error){
     console.log('error');
     return error;

   });
    //console.log(promise);
    return promise;
  }

  //deleteContact
  this.deleteService = function(del,dataUrl){
    console.log(del);
    var id  = del;
    var promise = $http({
      method: 'DELETE',
      url: '/'+dataUrl+'/'+id,
      data:id,
    }).then(function (success){
      alertify.success("ลบข้อมูลเรียบร้อยแล้ว");
      //return success;
   },function (error){
     console.log('error');
     //return error;
   });
    //console.log(promise);
    //return promise;
  }
  //edit
  this.editService = function(dataInput,dataUrl){
    var formData  = dataInput;
    var promise = $http({
      method: 'POST',
      url: '/'+dataUrl,
      data:formData,

    }).then(function (success){
      //alertify.success("บันทึกข้อมูลเรียบร้อยแล้ว");
      console.log(success.data);
      return success.data;
   },function (error){
     //alertify.error("ผิดพลาดบันทึกไม่สำเร็จ");
     return error.data;

   });
    //console.log(promise);
    return promise;
  }

});
