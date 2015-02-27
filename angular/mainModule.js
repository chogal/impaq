var myAppControllers = angular.module("myAppControllers", ['ngResource']);

     myAppControllers.controller("inputController", function($scope,$http,$timeout,$resource,sharedConfig) {
        $scope.n={}
        $scope.myData = {};   
      $scope.n.refreshRate=3
  $scope.n.urlAdress="http://www.kinksterzy.pl"
  $scope.n.saidby=null
  $scope.n.err=false
  
   $scope.updateconfig = function(confvalue) {
     if ( $scope.n.err === true ){
      $scope.n.err=false
     resourceGet()
     }  
    
    };                          
       var __construct = function() {         
       //getHttp()  
       resourceGet()
   }() 
  

       function resourceGet(){
      $resource($scope.n.urlAdress)
          .get()
          .$promise
          .then(function(result) {
            
            $scope.myData.text=result.cite+' '+result.who 
            if( $scope.n.saidby != null ){
             angular.element('#'+$scope.n.saidby).css('color', 'black').css('font-weight', 'normal');
             }
            $scope.n.saidby=result.who
            angular.element('#'+result.who).css('color', 'green').css('font-weight', 'bold');
            $timeout(resourceGet, $scope.n.refreshRate * 1000);  
             
          },function(result) { 
            angular.element('#'+$scope.n.saidby).css('color', 'black').css('font-weight', 'normal');
             $scope.n.saidby=null
            $scope.n.err=true
          
            $scope.myData.text='ERR! Huston we have a problem.'
          })     
         
          }      
             
  function getHttp(){ 
    var restGet=$http.get( $scope.n.urlAdress )
  restGet.success(function(data, status, headers, config) {
     
      $scope.myData = {};
    $scope.myData.text=data.cite
    
    var timeoutid=$timeout(getHttp, $scope.n.refreshRate * 1000); 
  });
  restGet.error(function(data, status, headers, config) {
  
                  $scope.myData.text=headers;
                });             
    }       
     });
    
  
    myAppControllers.service('sharedConfig', function () {
    var config={}
      
  var setConfig = function(name,value) {
       return  config[name]=value
  }

  var getConfig = function(name){
      return config[name];
  }
  
  return {
    setConfig:  setConfig,
    getConfig: getConfig,
  
  };
        }
    );
    
   $(window).resize(adjustLayout);

$(document).ready(function(){
    adjustLayout();
  
})