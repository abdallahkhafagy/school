//////////variables/////////////
 var num_links = 4
  var before_links =2;
  page = parseInt(page)
  name="";
page+=2;
var name = "";
  var counter = 1;






///////////////////////////////
//this function fetches the students grades and previews them in a table to edit them
function edit_stdnt_btn(e){
    var sid = $(this).attr('sid');
  $("#student_id").val(sid);
  $('.bd-example-modal-lg').modal('show');
  $(".grade_input").val("0");
  $.ajax(
      {
          type:"post",
          url: "get_grades",

          data:{ sid:sid},
            dataType : 'json',
          success:function(response)
          {
              //console.log(response);
              response.forEach(update_grades_fields);




          },
          error: function()
          {
              alert("Invalide!");
          }
      }
  );

  }

/////////////////////////////////////////////
///////////////////refresh pagination //////////////////////
//refreshes pagination when click normal page number //////////
  function refresh_pagination(page,element) {
var start_page = page-before_links;
var bool=0;
$('.link_page').each(function(i, obj) {
    if($(element).attr("page")!=$(obj).attr("page")){
     // console.log($(element).attr("page")+"  "+$(obj).attr("page"))
//console.log(start_page)
      $(this).remove()

    start_page++;
    }
    else{bool=1;
      start_page++;
    }
});
start_page = page-before_links;
bool=0;
for(var i=0 ; i<=num_links;i++){

if(start_page+i!=$(element).attr('page')){
  if(!bool){
    if((start_page+i)>0)
  $(  '     <li class="page-item"><a class="page-link link_page" page="'+(start_page+i)+'"href="/students/get_student/'+(start_page+i)+'">'+(start_page+i)+'</a></li>').insertBefore(element.parent());
  }  else {
    if((start_page+i)<=total_pages)

      $(  '     <li class="page-item"><a class="page-link link_page" page="'+(start_page+i)+'"href="/students/get_student/'+(start_page+i)+'">'+(start_page+i)+'</a></li>').insertAfter($('.link_page').last().parent());

  }

}
else{
  bool=1;
}

}
$(".link_page").click(link_page_click);


  }
//////////////////////////////////////////////////////
//////////////////updates grades with the current student's grades//////////////////////
  function update_grades_fields(record) {

//console.log(record);
    $("#work_"+record["course_id"]).val(record["work"])
    $("#oral_"+record["course_id"]).val(record["oral"])
    $("#exam_"+record["course_id"]).val(record["exam"])
  }

////////////////////////////////////////

  function update_grades_table(record) {

$('#students_table').append("<tr> <th scope='row'>"+counter+"</th><td>"+record["name"]+"</td>  <td> <button type='button' type='button' class='btn btn-info edit_student'sid='"+record["id"]+"' >Edit</button></td>");


counter++;
  }
  //////////////////////////////////////

////////////////////////////////////



function refresh_pagination_index(){
page=1
  var start_page = page-before_links;
  var bool=0;
  $('.link_page').remove();
  for(var i=0 ; i<=num_links;i++){
  if(!bool){

    if(start_page+i!=page){

      if((start_page+i)>0&&(start_page+i)<=total_pages)
  {
    $(  '     <li class="page-item"><a class="page-link link_page" page="'+(start_page+i)+'"href="/students/get_student/'+(start_page+i)+'">'+(start_page+i)+'</a></li>').insertBefore($(".next_link").parent());

  }


  }
  else{

    $(  '     <li class="page-item active"><a class="page-link link_page" page="'+(start_page+i)+'"href="/students/get_student/'+(start_page+i)+'">'+(start_page+i)+'</a></li>').insertBefore($(".next_link").parent());

  }

  }
  }


  $(".link_page").click(link_page_click);

}








//////////////////////////////////////










function link_page_click(e){
e.preventDefault();
 page = ($(this).attr("page"))
 if(page>1){
   $(".previous_link").parent().removeClass('disabled')
 }
 else{
   $(".previous_link").parent().addClass('disabled')

 }

 if(page<total_pages){
   $(".next_link").parent().removeClass('disabled')
 }
 else{
   $(".next_link").parent().addClass('disabled')

 }

counter=1;
$(".link_page").parent().removeClass('active');
$(this).parent().addClass('active');

myajax();


refresh_pagination(page,$(this));
}





/////////////////////////////////


function previous_link_click(e){

  e.preventDefault();
   page = page-1
   if(page>1){
     $(".previous_link").parent().removeClass('disabled')
   }
   else{
     $(".previous_link").parent().addClass('disabled')

   }

   if(page<total_pages){
     $(".next_link").parent().removeClass('disabled')
   }
   else{
     $(".next_link").parent().addClass('disabled')

   }

  counter=1;
  $(".link_page").parent().removeClass('active');

myajax();


  refresh_pagination_previous(page,$(this));


}



/////////////////////////



function refresh_pagination_previous(page,element) {
var start_page = page-before_links;
var bool=0;
$('.link_page').remove();
for(var i=0 ; i<=num_links;i++){
if(!bool){

  if(start_page+i!=page){

    if((start_page+i)>0&&(start_page+i)<=total_pages)
{
  $(  '     <li class="page-item"><a class="page-link link_page" page="'+(start_page+i)+'"href="/ci/students/get_student/'+(start_page+i)+'">'+(start_page+i)+'</a></li>').insertBefore($(".next_link").parent());

}


}
else{

  $(  '     <li class="page-item active"><a class="page-link link_page" page="'+(start_page+i)+'"href="/ci/students/get_student/'+(start_page+i)+'">'+(start_page+i)+'</a></li>').insertBefore($(".next_link").parent());

}

}
}
$(".link_page").click(link_page_click);


}



/////////////////////////////





function next_link_click(e){

  e.preventDefault();
  page = parseInt(page)
   page = parseInt(page)+1
   if(page>1){
     $(".previous_link").parent().removeClass('disabled')
   }
   else{
     $(".previous_link").parent().addClass('disabled')

   }

   if(page<total_pages){
     $(".next_link").parent().removeClass('disabled')
   }
   else{
     $(".next_link").parent().addClass('disabled')

   }

  counter=1;
  $(".link_page").parent().removeClass('active');

myajax();


  refresh_pagination_previous(page,$(this));


}



function refresh_pagination_next(page,element) {
var start_page = page-before_links;
var bool=0;
$('.link_page').remove();
for(var i=0 ; i<=num_links;i++){
if(!bool){

  if(start_page+i!=page){

    if((start_page+i)>0&&(start_page+i)<=total_pages)
{
  $(  '     <li class="page-item"><a class="page-link link_page" page="'+(start_page+i)+'"href="/ci/students/get_student/'+(start_page+i)+'">'+(start_page+i)+'</a></li>').insertBefore($(".next_link").parent());

}


}
else{

  $(  '     <li class="page-item active"><a class="page-link link_page" page="'+(start_page+i)+'"href="/ci/students/get_student/'+(start_page+i)+'">'+(start_page+i)+'</a></li>').insertBefore($(".next_link").parent());

}

}
}


$(".link_page").click(link_page_click);

}





///////////////////////








function myajax(){
  $.ajax(
      {
          type:"post",
          url: "/students/get_student_page",

          data:{ page:page,name:name},
            dataType : 'json',
          success:function(response)
          {
           //   console.log(response);
              counter = 1 ;

              $('#students_table').html('')
           response["students"].forEach(update_grades_table);
            total_rows =response["total_rows"] ;
           total_pages = Math.ceil(total_rows/6)
  $(".edit_student").click(edit_stdnt_btn)





          },
          error: function()
          {
              alert("Invalide!");
          }
      }
  );
}








////////////////////////////

$(function(){
 
  $(".edit_student").click(edit_stdnt_btn)





$(".link_page").click(link_page_click);





$(".previous_link").click(previous_link_click)
$(".next_link").click(next_link_click)










$("#search_field").on('keyup',function(){
counter = 1 ;
 name = $(this).val();

myajax();

refresh_pagination_index();

})


})
