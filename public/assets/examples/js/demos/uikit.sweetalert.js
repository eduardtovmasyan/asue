$(function(){$("#swal-example-1 > button").on("click",function(){swal("Here's a message!")}),$("#swal-example-2 > button").on("click",function(){swal("Here's a message!","It's pretty, isn't it?")}),$("#swal-example-3 > button").on("click",function(){swal("Good job!","You clicked the button!","success")}),$("#swal-example-4 > button").on("click",function(){swal({title:"Are you sure?",text:"You will not be able to recover this imaginary file!",type:"warning",showCancelButton:!0,confirmButtonColor:"#DD6B55",confirmButtonText:"Yes, delete it!",closeOnConfirm:!1},function(){swal("Deleted!","Your imaginary file has been deleted!","success")})}),$("#swal-example-5 > button").on("click",function(){swal({title:"Are you sure?",text:"You will not be able to recover this imaginary file!",type:"warning",showCancelButton:!0,confirmButtonColor:"#DD6B55",confirmButtonText:"Yes, delete it!",cancelButtonText:"No, cancel plx!",closeOnConfirm:!1,closeOnCancel:!1},function(e){e?swal("Deleted!","Your imaginary file has been deleted!","success"):swal("Cancelled","Your imaginary file is safe :)","error")})}),$("#swal-example-6 > button").on("click",function(){swal({title:"Ajax request example",text:"Submit to run ajax request",type:"info",showCancelButton:!0,closeOnConfirm:!1,showLoaderOnConfirm:!0},function(){setTimeout(function(){swal("Ajax request finished!")},2e3)})})});