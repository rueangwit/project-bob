user_mg.controller('HelloController', [ '$scope',
    function($scope){
    //  $scope.name = 'rueangitbob';
      console.log('rueangwit');
}
]);

user_mg.controller('userLoginPage', [ '$scope', 'newsService','$http',
    function($scope, newsService, alertify, $http){
      $scope.input={};
      /*
    $scope.insertdata = function(){
      newsService.insertNewsService($scope.input)//ส่งค่า input ไปให้ service
      .then(function(a){
        if(a==false){
          console.log('บันทึกข้อมูลเรียบร้อยแล้ว');
          console.log('test['+a+']');

          $scope.input={};
          $scope.show();

        }else {
          console.log('ไม่สามารถบันทึกข้อมูลได้');
          console.log('test['+a+']');
        }
        console.log($scope.input);
      })
    }
    //ลบ
    $scope.deletetdata = function(del,tbname){
        // confirm dialog
        alertify
        .okBtn('<i class="fa fa-trash"> ลบ</i>')
        .cancelBtn("ยกเลิก")
        .confirm("คุณต้องการลบข้อมูล'"+tbname+"'หรือไม่", function () {
            // user clicked "ok"
            newsService.deleteNewsService(del)//ส่งค่า input ไปให้ service
            $scope.show();
        }, function() {
            // user clicked "cancel"
            alertify.error("การลบข้อมูลถูกยกเลิก");
        });

    }

    //btn add
    $scope.btnAdd = function(){
        $scope.id = '';
        $scope.input={};
    }
    //btn edit
    $scope.btnEdit = function(tbname,tbndetail,id){
        $scope.input.tbnid = id;
        $scope.id = id;
        $scope.input.tbname = tbname;
        $scope.input.tbndetail= tbname;
    } */
    //แสดงขอ้มูล
    $scope.show = function(){
      newsService.showNewsService()
      .then(function(response){
        $scope.response = response.data;
        console.log(response.data);
      })
    }
    //
    //edit
    /*
    $scope.editdata = function(){
      //console.log($scope.input);return;
      newsService.editNewsService($scope.input)//ส่งค่า input ไปให้ service
      .then(function(a){
        if(a==false){
          console.log('บันทึกข้อมูลเรียบร้อยแล้ว');
          console.log('test['+a+']');
          //$scope.input={};
          $scope.show();

        }else {
          console.log('ไม่สามารถบันทึกข้อมูลได้');
          console.log('test['+a+']');
          $scope.show();
        }
        console.log($scope.input);
      })
    }//
    */
}
]);
