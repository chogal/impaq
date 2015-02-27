<?php $host='http://www.rekrutacja.jerzy.zaluski.info.pl/IMPAQ'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Jerzy Zaluski - Front-End & Back-End - CV & Portfolio</title>
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.13/angular.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.13/angular-resource.js"></script>
<script src="angular/mainModule.js"></script>
    

</head>
<body ng-app="myAppControllers" >

  <div class="container" id="window-height-container" ng-controller="inputController">
  
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          <span class="glyphicon glyphicon-wrench" ></span> Config Panel <small>click to show / hide <small>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
      
      <form  class="form-inline">
    <div class="form-group">
<label  for="inrefreshRate">Delay</label>
  <input size="3" type="number" name="refreshRate" ng-model="n.refreshRate" ng-change="updateconfig('refreshRate')"
                 min="1" max="5" required class="form-control" placeholder="Recipient's username" id="inrefreshRate">
  
  <span id="helpBlock" class="help-block">delay in seconds</span>
    </div>


 <br><br>
 <div class="form-group">
 <label  for="in.urlAdress">JSON url</label>
  <input size="85" type="text" type="url" name="urlAdress" ng-model="n.urlAdress" ng-change="updateconfig('urlAdress')" id='in.urlAdress' required class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2">
    <span id="helpBlock" class="help-block">JSON file url</span>
    </div>
    </div>
</div>


 
    </form> 
      
      
      
    </div>
 
  

</div>
 
  <div class="row">
  <div class="col-sm-4" >
   <img src='<?php echo $host; ?>/img/skipper.jpg' class='img-responsive '>
    <br><p id='Skipper'>Skipper</p>
 </div> 
    <div class="col-sm-4" >
   <img src='<?php echo $host; ?>/img/kowalski.jpg' class='img-responsive '>
   <br><p id='Kowalski'>Kowalski</p>

 </div> 
 <div class="col-sm-4" >
   <img src='<?php echo $host; ?>/img/julian.jpg' class='img-responsive '>
     <br><p id='Julian'>Julian</p>
 </div> 
 
 </div>
 
  <div class="row">
<div class="col-sm-12" ><p>
 {{myData.text}}
 </p>
</div>
 </div>
    


</div>


<script>




function adjustLayout(){
    $(".window-height-container").each(function () {
    
  if(  $(this).height() < $(window).height()){
   $(this).css('height',$(window).height())
  }
 
});

}
 

</script>





</body>
</html>