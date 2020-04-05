//Add Form To Show Modal
  function addForm(){
    $('#Modal-Show').modal('show');
  }


$(document).ready(function(){

//ajax Setup
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

//Form validation Check
  function validation(input,id){
    var item = $(input).val();
    if (item == ''){
      $(id).html("Field is Required");
    }
    else {
      return item;
    }
  }

  //Add data
  $("#submit").click(function (e){
    e.preventDefault();

    var name = validation("#name","#name-err");
    var age = validation("#age","#age-err");
    var position = validation("#position","#position-err");
    var salery = validation("#salery","#salery-err");
    var url_submit = "store";

    $.ajax({
      url: url_submit,
      method: "POST",
      dataType: 'json',
      data: {
        name: name,
        age: age,
        position: position,
        salery: salery
      },
      success: function(response){
        if (response.message) {
          // console.log(response.message);
          $('#Modal-Show').modal('hide');
          swal("Insert!", response.message, "success");
          $("#mydiv").load(window.location.href + "#refresh")
        }
      }
    });

  });


//edit Form Show
  $('body').on('click', '#editForm', function (event) {

        event.preventDefault();
        var id = $(this).data('id');
        var edit_url = "edit/"+id;
        $.ajax({
            url: edit_url,
            method: "GET",
            success: function(data){
              // console.log(data.data.name);
              $('#edit-Modal-Show').modal('show');
              $('#editid').val(data.data.id);
              $('#editname').val(data.data.name);
              $('#editage').val(data.data.age);
              $("#editposition > select > option[value=" + data.data.position + "]").prop("selected",true);
              $('#editsalery').val(data.data.salery);
            }
        });
    });

//edit From Submit
$("#edit-submit").click(function (e){
  e.preventDefault();

  var id = $('#editid').val();
  var name = $('#editname').val();
  var age = validation("#editage","#age-err");
  var position = validation("#edit-position","#position-err");
  var salery = validation("#editsalery","#salery-err");
  var url_edit_submit = "edit/update/"+id;

  $.ajax({
    url: url_edit_submit,
    method: "POST",
    dataType: "json",
    data: {
      id: id,
      name: name,
      age: age,
      position: position,
      salery: salery
    },
    success: function(data){
      // console.log(data.data);
      $('#edit-Modal-Show').modal('hide');
      swal("Updated", data.data, "success");
      $("#mydiv").load(window.location.href + "#refresh")
    }
  });

});


//Delete Data
  $('body').on('click','#deleteData',function (e){
    e.preventDefault();
    var id = $(this).data('id');
    var url_delete = "delete/"+id;

    swal({
      title: "Are you Want to Delete?",
      text: "Once Delete, This will be permanently Delete!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete)=> {
      if(willDelete) {
        $.ajax({
          url: url_delete,
          method: "GET",
          dataType: "json",
          data: {
            id: id
          },
          success: function(data){
            // console.log(data.data);
            swal("Deleted!", data.data, "success");
            $("#mydiv").load(window.location.href + "#refresh")
          }
        });
      }
      else{
        swal("Cancelled", "Your Data Is Safe :)", "error");
      }
    });



  });




});
