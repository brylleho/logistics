function verify(){
  if(document.getElementById('discount_type').value == "Percent"){
    if(document.getElementById('discount').value > 100 || document.getElementById('discount').value < 0){
      alert("please input from 1 to 100 percent only!");
      document.getElementById('discount').value = null;
    }
  }

  if(document.getElementById('discount_type').value == "Amount"){
    if(document.getElementById('discount').value < 0){
      alert("please don't input negative amount!");
      document.getElementById('discount').value = null;
    }
  }

  if(document.getElementById('quantity1').value < 0){
    alert("plese don't input negative quantity!");
    document.getElementById('quantity1').value = null;
  }

  if(document.getElementById('quantity2').value < 0){
    alert("plese don't input negative quantity!");
    document.getElementById('quantity2').value = null;
  }

  if(document.getElementById('quantity3').value < 0){
    alert("plese don't input negative quantity!");
    document.getElementById('quantity3').value = null;
  }

  if(document.getElementById('quantity4').value < 0){
    alert("plese don't input negative quantity!");
    document.getElementById('quantity4').value = null;
  }

  if(document.getElementById('quantity5').value < 0){
    alert("plese don't input negative quantity!");
    document.getElementById('quantity5').value = null;
  }

  if(document.getElementById('quantity6').value < 0){
    alert("plese don't input negative quantity!");
    document.getElementById('quantity6').value = null;
  }

  if(document.getElementById('quantity7').value < 0){
    alert("plese don't input negative quantity!");
    document.getElementById('quantity7').value = null;
  }
}

function compute(){
  var quantity = document.getElementById('quantity1').value;
  var unitCost = document.getElementById('unit_cost1').value;
  var unitRetail = unitCost * quantity;
  document.getElementById('unit_retail1').value =  unitRetail;

  var quantity2 = document.getElementById('quantity2').value;
  var unitCost2 = document.getElementById('unit_cost2').value;
  var unitRetail2 = unitCost2 * quantity2;
  document.getElementById('unit_retail2').value =  unitRetail2;

  var quantity3 = document.getElementById('quantity3').value;
  var unitCost3 = document.getElementById('unit_cost3').value;
  var unitRetail3 = unitCost3 * quantity3;
  document.getElementById('unit_retail3').value =  unitRetail3;

  var quantity4 = document.getElementById('quantity4').value;
  var unitCost4 = document.getElementById('unit_cost4').value;
  var unitRetail4 = unitCost4 * quantity4;
  document.getElementById('unit_retail4').value =  unitRetail4;

  var quantity5 = document.getElementById('quantity5').value;
  var unitCost5 = document.getElementById('unit_cost5').value;
  var unitRetail5 = unitCost5 * quantity5;
  document.getElementById('unit_retail5').value =  unitRetail5;

  var quantity6 = document.getElementById('quantity6').value;
  var unitCost6 = document.getElementById('unit_cost6').value;
  var unitRetail6 = unitCost6 * quantity6;
  document.getElementById('unit_retail6').value =  unitRetail6;

  var quantity7 = document.getElementById('quantity7').value;
  var unitCost7 = document.getElementById('unit_cost7').value;
  var unitRetail7 = unitCost7 * quantity7;
  document.getElementById('unit_retail7').value =  unitRetail7;

  var subtotalCost = unitRetail + unitRetail2 + unitRetail3 + unitRetail4 + unitRetail5 + unitRetail6 + unitRetail7;

  document.getElementById('subtotal_cost').value = subtotalCost;
  document.getElementById('discount_total_type').value = document.getElementById('discount_type').value;

  if(document.getElementById('discount_type').value == "Amount"){
   var discountCost = document.getElementById('discount').value;

   var totalCost = subtotalCost - discountCost;
   document.getElementById('discount_cost').value = discountCost;
   document.getElementById('total_cost').value = totalCost;

 }
 if(document.getElementById('discount_type').value == "Percent"){
  var discountCost = document.getElementById('discount').value / 100;
  var discountSub = subtotalCost * discountCost;
  var totalCost = subtotalCost - discountSub;
  document.getElementById('discount_cost').value = discountSub;
  document.getElementById('total_cost').value = totalCost;
}

}

function enabling(){

 if(document.getElementById('item_code1').value != null){
  $('#quantity1').removeAttr('readonly');
  $('#unit_measure1').removeAttr('readonly');
}

if(document.getElementById('item_code1').value == null || document.getElementById('item_code1').value == 0){
  $('#quantity1').removeAttr('readonly');
  $('#unit_measure1').removeAttr('readonly');
}

if(document.getElementById('item_code2').value != null){
  $('#quantity2').removeAttr('readonly');
  $('#unit_measure2').removeAttr('readonly');

}
if(document.getElementById('item_code2').value == null || document.getElementById('item_code2').value == 0){
  $('#quantity2').removeAttr('readonly');
  $('#unit_measure2').removeAttr('readonly');

}

if(document.getElementById('item_code3').value != null){
  $('#quantity3').removeAttr('readonly');
  $('#unit_measure3').removeAttr('readonly');

}
if(document.getElementById('item_code3').value == null || document.getElementById('item_code3').value == 0){
  $('#quantity3').removeAttr('readonly');
  $('#unit_measure3').removeAttr('readonly');

}

if(document.getElementById('item_code4').value != null){
  $('#quantity4').removeAttr('readonly');
  $('#unit_measure4').removeAttr('readonly');

}
if(document.getElementById('item_code4').value == null || document.getElementById('item_code4').value == 0){
  $('#quantity4').removeAttr('readonly');
  $('#unit_measure4').removeAttr('readonly');

}

if(document.getElementById('item_code5').value != null){
  $('#quantity5').removeAttr('readonly');
  $('#unit_measure5').removeAttr('readonly');

}
if(document.getElementById('item_code5').value == null || document.getElementById('item_code5').value == 0){
  $('#quantity5').removeAttr('readonly');
  $('#unit_measure5').removeAttr('readonly');

}

if(document.getElementById('item_code6').value != null){
  $('#quantity6').removeAttr('readonly');
  $('#unit_measure6').removeAttr('readonly');

}
if(document.getElementById('item_code6').value == null || document.getElementById('item_code6').value == 0){
  $('#quantity6').removeAttr('readonly');
  $('#unit_measure6').removeAttr('readonly');

}

if(document.getElementById('item_code7').value != null){
  $('#quantity7').removeAttr('readonly');
  $('#unit_measure7').removeAttr('readonly');
}
if(document.getElementById('item_code7').value == null || document.getElementById('item_code7').value == 0){
  $('#quantity7').removeAttr('readonly');
  $('#unit_measure7').removeAttr('readonly');
}

}

$("#modal-default").on("hidden.bs.modal", function () {
  $('.image_holder').empty();
  document.getElementById("item_description1").value = null;
  document.getElementById("item_description2").value = null; 
  document.getElementById("item_description3").value = null; 
  document.getElementById("item_description4").value = null; 
  document.getElementById("item_description5").value = null; 
  document.getElementById("item_description6").value = null; 
  document.getElementById("item_description7").value = null; 
  document.getElementById("quantity1").value = null; 
  document.getElementById("quantity2").value = null; 
  document.getElementById("quantity3").value = null; 
  document.getElementById("quantity4").value = null; 
  document.getElementById("quantity5").value = null; 
  document.getElementById("quantity6").value = null; 
  document.getElementById("quantity7").value = null; 
  document.getElementById("unit_cost1").value = null; 
  document.getElementById("unit_cost2").value = null; 
  document.getElementById("unit_cost3").value = null; 
  document.getElementById("unit_cost4").value = null; 
  document.getElementById("unit_cost5").value = null; 
  document.getElementById("unit_cost6").value = null;   
  document.getElementById("unit_cost7").value = null; 
  document.getElementById("unit_measure1").value = null; 
  document.getElementById("unit_measure2").value = null; 
  document.getElementById("unit_measure3").value = null; 
  document.getElementById("unit_measure4").value = null; 
  document.getElementById("unit_measure5").value = null; 
  document.getElementById("unit_measure6").value = null; 
  document.getElementById("unit_measure7").value = null; 
  document.getElementById("unit_retail6").value = null; 
  document.getElementById("unit_retail1").value = null; 
  document.getElementById("unit_retail2").value = null; 
  document.getElementById("unit_retail3").value = null; 
  document.getElementById("unit_retail4").value = null; 
  document.getElementById("unit_retail5").value = null; 
  document.getElementById("unit_retail7").value = null;
  document.getElementById("subtotal_cost").value = null;
  document.getElementById("discount_cost").value = null;
  document.getElementById("total_cost").value = null;
});


$(document).on('click', '.edit_data', function() {
  var po_num = $(this).attr("id");

  $.ajax({
    url: "../ajax/approve_button.php",
    data: {po_num:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data){
      console.log(data);
      document.getElementById("approve_po").style.display = data;
    },
  });

  $.ajax({
    url: "../ajax/edit_button.php",
    data: {po_num:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data){
      console.log(data);
      document.getElementById("edit_po").style.display = data;
    },
  });

  $.ajax({
    url: "../ajax/delete_button.php",
    data: {po_num:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data){
      console.log(data);
      document.getElementById("delete_po").style.display = data;
    },
  });

  $.ajax({
    url: "../ajax/purchase_order_list.php",
    data:{po_num:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {

      $('#modal-default').modal('show');
      $('#po_number').val(data.po_number);
      $('#supplier').val(data.supplier);
      $('#po_code').val(data.code);
      $('#terms').val(data.terms);
      $('#branch').val(data.branch);
      $('#department').val(data.department);
      $('#subclass').val(data.subclass);
      $('#order_type').val(data.order_type);
      $('#deliver_to').val(data.deliver_to);
      $('#deliver_date').val(data.delivery_date);
      $('#cancel_date').val(data.cancel_date);
      $('#po_date').val(data.po_date);
      $('#note').val(data.po_notes);
      $('#special_instruction').val(data.special_instruction);
      $('#status').val(data.status);

      var x_value=$("#supplier").val();
      $.ajax({
        url:'../ajax/ajax.php',
        data:{value:x_value},
        type: 'post',
        success : function(resp){
          $("#item_code1").html(resp);
          $("#item_code2").html(resp);
          $("#item_code3").html(resp);
          $("#item_code4").html(resp);
          $("#item_code5").html(resp);
          $("#item_code6").html(resp);
          $("#item_code7").html(resp);
        },
        error : function(resp){}
      });

      $.ajax({
        url: "../ajax/purchase_details_list.php",
        data:{po_num1a:po_num},
        type: 'post',
        dataType: 'json',
        success: function(data) {
          $("#item_code1").val(data);

        },
      });

      $.ajax({
        url: "../ajax/purchase_details_list.php",
        data:{po_num1b:po_num},
        type: 'post',
        dataType: 'json',
        success: function(data) {
          console.log(data);
          $("#item_code2").val(data);

        },
      });

      $.ajax({
        url: "../ajax/purchase_details_list.php",
        data:{po_num1c:po_num},
        type: 'post',
        dataType: 'json',
        success: function(data) {
          console.log(data);
          $("#item_code3").val(data);

        },
      });

      $.ajax({
        url: "../ajax/purchase_details_list.php",
        data:{po_num1d:po_num},
        type: 'post',
        dataType: 'json',
        success: function(data) {
          console.log(data);
          $("#item_code4").val(data);

        },
      });

      $.ajax({
        url: "../ajax/purchase_details_list.php",
        data:{po_num1e:po_num},
        type: 'post',
        dataType: 'json',
        success: function(data) {
          console.log(data);
          $("#item_code5").val(data);

        },
      });

      $.ajax({
        url: "../ajax/purchase_details_list.php",
        data:{po_num1f:po_num},
        type: 'post',
        dataType: 'json',
        success: function(data) {
          console.log(data);
          $("#item_code6").val(data);

        },
      });

      $.ajax({
        url: "../ajax/purchase_details_list.php",
        data:{po_num1g:po_num},
        type: 'post',
        dataType: 'json',
        success: function(data) {
          console.log(data);
          $("#item_code7").val(data);

        },
      });

    },
  });
});

$(document).on('click', '.edit_data', function() {
  var po_num = $(this).attr("id");

  $.ajax({
    url: "../ajax/purchase_order_list.php",
    data:{po_num2:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $('#discount_type').val(data.discount_type);
      $('#discount').val(data.discount);
      $('#subtotal_cost').val(data.subtotal);
      $('#discount_total_type').val(data.discount_type);
      $('#discount_cost').val(data.discount);
      $('#total_cost').val(data.total_cost);

    },
  });
});

$(document).on('click', '.edit_data', function() {
  var po_num= $(this).attr("id");

  $.ajax({
    url: "../ajax/purchase_order_list.php",
    data:{po_num3:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $('#ordered_by').html(data.ordered_by);
      $('#verified_by').html(data.verified_by);
      $('#approved_by').html(data.approved_by);
      if(data.kind == 'CAPEX'){
        $('#kindofsupplies').find(':radio[name=kind][value="CAPEX"]').prop('checked', true);
      }
      else{
        $('#kindofsupplies').find(':radio[name=kind][value="OPEX"]').prop('checked', true);
      }

    },
  });

  $.ajax({
    url: "../ajax/upload_image.php",
    data:{po_num4:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data){
      console.log(data.image);
      if(data.image == ""){
        $('.image_holder').append("<div id = 'img_div'>No Photo uploaded</div>");
      }
      else{
        $('.image_holder').append("<div id='img_div'><img src='../images/" + data.image + "'" + "height='200' width='200'></div>");
      }
    },
  });

});

$(document).on('click', '.edit_data', function() {
  var po_num = $(this).attr("id");

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num2a:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#item_description1").val(data);


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num3a:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#quantity1").val(data);
      $('#quantity1').removeAttr('readonly');


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num4a:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_cost1").val(data);


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num5a:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_measure1").val(data);
      $('#unit_measure1').removeAttr('readonly');


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num6a:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_retail1").val(data);


    },
  });

});

$(document).on('click', '.edit_data', function() {
  var po_num = $(this).attr("id");

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num2b:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#item_description2").val(data);


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num3b:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#quantity2").val(data);
      $('#quantity2').removeAttr('readonly');


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num4b:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_cost2").val(data);


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num5b:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_measure2").val(data);
      $('#unit_measure2').removeAttr('readonly');


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num6b:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_retail2").val(data);


    },
  });

});

$(document).on('click', '.edit_data', function() {
  var po_num = $(this).attr("id");

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num2c:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#item_description3").val(data);


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num3c:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#quantity3").val(data);
      $('#quantity3').removeAttr('readonly');


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num4c:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_cost3").val(data);


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num5c:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_measure3").val(data);
      $('#unit_measure3').removeAttr('readonly');


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num6c:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_retail3").val(data);


    },
  });

});

$(document).on('click', '.edit_data', function() {
  var po_num = $(this).attr("id");

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num2d:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#item_description4").val(data);


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num3d:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#quantity4").val(data);
      $('#quantity4').removeAttr('readonly');


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num4d:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_cost4").val(data);


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num5d:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_measure4").val(data);
      $('#unit_measure4').removeAttr('readonly');


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num6d:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_retail4").val(data);


    },
  });

});

$(document).on('click', '.edit_data', function() {
  var po_num = $(this).attr("id");

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num2e:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#item_description5").val(data);


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num3e:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#quantity5").val(data);
      $('#quantity5').removeAttr('readonly');


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num4e:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_cost5").val(data);


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num5e:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_measure5").val(data);
      $('#unit_measure5').removeAttr('readonly');


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num6e:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_retail5").val(data);


    },
  });

});

$(document).on('click', '.edit_data', function() {
  var po_num = $(this).attr("id");

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num2f:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#item_description6").val(data);


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num3f:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#quantity6").val(data);
      $('#quantity6').removeAttr('readonly');


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num4f:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_cost6").val(data);


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num5f:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_measure6").val(data);
      $('#unit_measure6').removeAttr('readonly');


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num6f:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_retail6").val(data);


    },
  });

});

$(document).on('click', '.edit_data', function() {
  var po_num = $(this).attr("id");

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num2g:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#item_description7").val(data);


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num3g:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#quantity7").val(data);
      $('#quantity7').removeAttr('readonly');


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num4g:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_cost7").val(data);


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num5g:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_measure7").val(data);
      $('#unit_measure7').removeAttr('readonly');


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num6g:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_retail7").val(data);


    },
  });

});


$("#supplier").change(function(){
 var x_value=$("#supplier").val();
 $.ajax({
  url:'../ajax/ajax.php',
  data:{value:x_value},
  type: 'post',
  success : function(resp){
    $("#item_code1").html(resp);
    $("#item_code2").html(resp);
    $("#item_code3").html(resp);
    $("#item_code4").html(resp);
    $("#item_code5").html(resp);
    $("#item_code6").html(resp);
    $("#item_code7").html(resp);      
  },
  error : function(resp){}
});

});

$("#supplier").change(function(){
 var x_value=$("#supplier").val();
 $.ajax({
  url:'../ajax/ajax.php',
  data:{value:x_value},
  type: 'post',
  success : function(resp){
    $("#item_code1").html(resp);
    $("#item_code2").html(resp);
    $("#item_code3").html(resp);
    $("#item_code4").html(resp);
    $("#item_code5").html(resp);
    $("#item_code6").html(resp);
    $("#item_code7").html(resp);
    document.getElementById("item_description1").value = null;
    document.getElementById("item_description2").value = null; 
    document.getElementById("item_description3").value = null; 
    document.getElementById("item_description4").value = null; 
    document.getElementById("item_description5").value = null; 
    document.getElementById("item_description6").value = null; 
    document.getElementById("item_description7").value = null; 
    document.getElementById("quantity1").value = null; 
    document.getElementById("quantity2").value = null; 
    document.getElementById("quantity3").value = null; 
    document.getElementById("quantity4").value = null; 
    document.getElementById("quantity5").value = null; 
    document.getElementById("quantity6").value = null; 
    document.getElementById("quantity7").value = null; 
    document.getElementById("unit_cost1").value = null; 
    document.getElementById("unit_cost2").value = null; 
    document.getElementById("unit_cost3").value = null; 
    document.getElementById("unit_cost4").value = null; 
    document.getElementById("unit_cost5").value = null; 
    document.getElementById("unit_cost6").value = null;   
    document.getElementById("unit_cost7").value = null; 
    document.getElementById("unit_measure1").value = null; 
    document.getElementById("unit_measure2").value = null; 
    document.getElementById("unit_measure3").value = null; 
    document.getElementById("unit_measure4").value = null; 
    document.getElementById("unit_measure5").value = null; 
    document.getElementById("unit_measure6").value = null; 
    document.getElementById("unit_measure7").value = null; 
    document.getElementById("unit_retail6").value = null; 
    document.getElementById("unit_retail1").value = null; 
    document.getElementById("unit_retail2").value = null; 
    document.getElementById("unit_retail3").value = null; 
    document.getElementById("unit_retail4").value = null; 
    document.getElementById("unit_retail5").value = null; 
    document.getElementById("unit_retail7").value = null;
    document.getElementById("subtotal_cost").value = null;
    document.getElementById("discount_cost").value = null;
    document.getElementById("total_cost").value = null;
  },
  error : function(resp){}
});

});


$("#item_code1").change(function(){
 var x_value=$("#item_code1").val();
 document.getElementById("quantity1").value = 0;
 document.getElementById("unit_retail1").value = 0;
 document.getElementById("unit_measure1").value = "Pcs";

 $.ajax({
  url:'../ajax/stock_description.php',
  data:{value:x_value},
  type: 'post',
  success : function(resp){
    $("#item_description1").val(resp);

  },
  error : function(resp){}
});

 $.ajax({
  url:'../ajax/unit_price.php',
  data:{value2:x_value},
  type: 'post',
  success : function(resp){

    var trimVal = resp.replace(/ /g,'');
    var intVal = parseInt(trimVal);
    $("#unit_cost1").val(intVal);

  },
  error : function(resp){}

});

});

$("#item_code2").change(function(){
 var x_value=$("#item_code2").val();
 document.getElementById("quantity2").value = 0;
 document.getElementById("unit_retail2").value = 0;
 document.getElementById("unit_measure2").value = "Pcs";

 $.ajax({
  url:'../ajax/stock_description.php',
  data:{value:x_value},
  type: 'post',
  success : function(resp){
    $("#item_description2").val(resp);

  },
  error : function(resp){}
});

 $.ajax({
  url:'../ajax/unit_price.php',
  data:{value2:x_value},
  type: 'post',
  success : function(resp){

    var trimVal = resp.replace(/ /g,'');
    var intVal = parseInt(trimVal);
    $("#unit_cost2").val(intVal);

  },
  error : function(resp){}

});

});

$("#item_code3").change(function(){
 var x_value=$("#item_code3").val();
 document.getElementById("quantity3").value = 0;
 document.getElementById("unit_retail3").value = 0;
 document.getElementById("unit_measure3").value = "Pcs";

 $.ajax({
  url:'../ajax/stock_description.php',
  data:{value:x_value},
  type: 'post',
  success : function(resp){
    $("#item_description3").val(resp);

  },
  error : function(resp){}
});

 $.ajax({
  url:'../ajax/unit_price.php',
  data:{value2:x_value},
  type: 'post',
  success : function(resp){

    var trimVal = resp.replace(/ /g,'');
    var intVal = parseInt(trimVal);
    $("#unit_cost3").val(intVal);

  },
  error : function(resp){}

});

});

$("#item_code4").change(function(){
 var x_value=$("#item_code4").val();
 document.getElementById("quantity4").value = 0;
 document.getElementById("unit_retail4").value = 0;
 document.getElementById("unit_measure4").value = "Pcs";

 $.ajax({
  url:'../ajax/stock_description.php',
  data:{value:x_value},
  type: 'post',
  success : function(resp){
    $("#item_description4").val(resp);

  },
  error : function(resp){}
});

 $.ajax({
  url:'../ajax/unit_price.php',
  data:{value2:x_value},
  type: 'post',
  success : function(resp){

    var trimVal = resp.replace(/ /g,'');
    var intVal = parseInt(trimVal);
    $("#unit_cost4").val(intVal);

  },
  error : function(resp){}

});

});

$("#item_code5").change(function(){
 var x_value=$("#item_code5").val();
 document.getElementById("quantity5").value = 0;
 document.getElementById("unit_retail5").value = 0;
 document.getElementById("unit_measure5").value = "Pcs";

 $.ajax({
  url:'../ajax/stock_description.php',
  data:{value:x_value},
  type: 'post',
  success : function(resp){
    $("#item_description5").val(resp);

  },
  error : function(resp){}
});

 $.ajax({
  url:'../ajax/unit_price.php',
  data:{value2:x_value},
  type: 'post',
  success : function(resp){

    var trimVal = resp.replace(/ /g,'');
    var intVal = parseInt(trimVal);
    $("#unit_cost5").val(intVal);

  },
  error : function(resp){}

});

});

$("#item_code6").change(function(){
 var x_value=$("#item_code6").val();
 document.getElementById("quantity6").value = 0;
 document.getElementById("unit_retail6").value = 0;
 document.getElementById("unit_measure6").value = "Pcs";

 $("unit_retail6")

 $.ajax({
  url:'../ajax/stock_description.php',
  data:{value:x_value},
  type: 'post',
  success : function(resp){
    $("#item_description6").val(resp);

  },
  error : function(resp){}
});

 $.ajax({
  url:'../ajax/unit_price.php',
  data:{value2:x_value},
  type: 'post',
  success : function(resp){

    var trimVal = resp.replace(/ /g,'');
    var intVal = parseInt(trimVal);
    $("#unit_cost6").val(intVal);

  },
  error : function(resp){}

});

});

$("#item_code7").change(function(){
 var x_value=$("#item_code7").val();
 document.getElementById("quantity7").value = 0;
 document.getElementById("unit_retail7").value = 0;
 document.getElementById("unit_measure7").value = "Pcs";

 $.ajax({
  url:'../ajax/stock_description.php',
  data:{value:x_value},
  type: 'post',
  success : function(resp){
    $("#item_description7").val(resp);

  },
  error : function(resp){}
});

 $.ajax({
  url:'../ajax/unit_price.php',
  data:{value2:x_value},
  type: 'post',
  success : function(resp){

    var trimVal = resp.replace(/ /g,'');
    var intVal = parseInt(trimVal);
    $("#unit_cost7").val(intVal);

  },
  error : function(resp){}

});
});

$(document).on('click', '.search_po', function() {
  var po_num = $("#searchPoNumber").val();
  $("#item_code1").text("");
  $("#item_code2").text("");
  $("#item_code3").text("");
  $("#item_code4").text("");
  $("#item_code5").text("");
  $("#item_code6").text("");
  $("#item_code7").text("");
  $("#item_description1").text("");
  $("#item_description2").text("");
  $("#item_description3").text("");
  $("#item_description4").text("");
  $("#item_description5").text("");
  $("#item_description6").text("");
  $("#item_description7").text("");
  $("#quantity1").text("");
  $("#quantity2").text("");
  $("#quantity3").text("");
  $("#quantity4").text("");
  $("#quantity5").text("");
  $("#quantity6").text("");
  $("#quantity7").text("");
  $("#unit_cost1").text("");
  $("#unit_cost2").text("");
  $("#unit_cost3").text("");
  $("#unit_cost4").text("");
  $("#unit_cost5").text("");
  $("#unit_cost6").text("");
  $("#unit_cost7").text("");
  $("#unit_measure1").text("");
  $("#unit_measure2").text("");
  $("#unit_measure3").text("");
  $("#unit_measure4").text("");
  $("#unit_measure5").text("");
  $("#unit_measure6").text("");
  $("#unit_measure7").text("");
  $("#unit_retail1").text("");
  $("#unit_retail2").text("");
  $("#unit_retail3").text("");
  $("#unit_retail4").text("");
  $("#unit_retail5").text("");
  $("#unit_retail6").text("");
  $("#unit_retail7").text("");

  $.ajax({
    url: '../ajax/purchase_order_list.php',
    data: {po_num:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data){

      $('#modal-porr').modal('hide');
      $('#po_number').val(data.po_number);
      $('#supplier').val(data.supplier);
      $('#po_code').val(data.code);
      $('#terms').val(data.terms);
      $('#branch').val(data.branch);
      $('#department').val(data.department);
      $('#subclass').val(data.subclass);
      $('#order_type').val(data.order_type);
      $('#deliver_to').val(data.deliver_to);
      $('#deliver_date').val(data.delivery_date);
      $('#cancel_date').val(data.cancel_date);
      $('#po_date').val(data.po_date);
      $('#note').val(data.po_notes);
      $('#special_instruction').val(data.special_instruction);
    },
  });

  $.ajax({
    url: "../ajax/purchase_order_list.php",
    data:{po_num2:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $('#discount_type').val(data.discount_type);
      $('#discount').val(data.discount);
      $('#subtotal_cost').val(data.subtotal);
      $('#discount_total_type').val(data.discount_type);
      $('#discount_cost').val(data.discount);
      $('#total_cost').val(data.total_cost);

    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num1a:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      console.log(data);
      $("#item_code1").text(data);

    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num1b:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      console.log(data);
      $("#item_code2").text(data);

    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num1c:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      console.log(data);
      $("#item_code3").text(data);

    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num1d:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      console.log(data);
      $("#item_code4").text(data);

    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num1e:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      console.log(data);
      $("#item_code5").text(data);

    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num1f:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      console.log(data);
      $("#item_code6").text(data);

    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num1g:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      console.log(data);
      $("#item_code7").text(data);

    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num2a:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#item_description1").text(data);


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num3a:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#quantity1").text(data);


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num4a:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_cost1").text(data);


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num5a:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_measure1").text(data);


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num6a:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_retail1").text(data);


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num2b:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#item_description2").text(data);
    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num3b:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#quantity2").text(data);
    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num4b:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_cost2").text(data);
    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num5b:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_measure2").text(data);
    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num6b:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_retail2").text(data);
    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num2c:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#item_description3").text(data);
    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num3c:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#quantity3").text(data);
    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num4c:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_cost3").text(data);
    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num5c:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_measure3").text(data);
    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num6c:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_retail3").text(data);
    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num2d:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#item_description4").text(data);
    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num3d:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#quantity4").text(data);
    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num4d:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_cost4").text(data);
    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num5d:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_measure4").text(data);
    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num6d:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_retail4").text(data);
    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num2e:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#item_description5").text(data);
    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num3e:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#quantity5").text(data);
    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num4e:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_cost5").text(data);
    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num5e:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_measure5").text(data);
    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num6e:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_retail5").text(data);
    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num2f:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#item_description6").text(data);


    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num3f:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#quantity6").text(data);
    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num4f:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_cost6").text(data);
    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num5f:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_measure6").text(data);
    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num6f:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_retail6").text(data);
    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num2g:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#item_description7").text(data);
    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num3g:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#quantity7").text(data);
    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num4g:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_cost7").text(data);
    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num5g:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_measure7").text(data);
    },
  });

  $.ajax({
    url: "../ajax/purchase_details_list.php",
    data:{po_num6g:po_num},
    type: 'post',
    dataType: 'json',
    success: function(data) {
      $("#unit_retail7").text(data);
    },
  });

});

$(function () {
  $('#example1').DataTable()
  $('#example2').DataTable({
    'paging'      : true,
    'lengthChange': false,
    'searching'   : false,
    'ordering'    : true,
    'info'        : true,
    'autoWidth'   : false
  })
})
