window.addEventListener( 'load' , function () {


   /*Save options of dom*/
   var selection_button = document.getElementsByClassName('selection-button');
   var search_by_name = document.getElementById('search_by_name');
   var search_by_lastname = document.getElementById('search_by_lastname');
   var search_by_email = document.getElementById('search_by_email');
   var search_by_date = document.getElementById('search_by_date');

   /*Save inputs of dom*/
   var input_search = document.getElementsByClassName("input-search");
   var input_name = document.getElementById("input_name");
   var input_lastname = document.getElementById("input_lastname");
   var input_email = document.getElementById("input_email");
   var input_date = document.getElementById("input_date");

   /*====================================================================================*/
   /*Default disable options*/
   /*defaults css propieties buttons*/
   change_css_button(search_by_name , input_name , selection_button , input_search);

   /*====================================================================================*/
   /*Now if a button is activate , any inputs will invisible*/

   /*if button search_name is push*/
   search_by_name.addEventListener('click',function(){
      change_css_button(search_by_name , input_name , selection_button , input_search);
   });

   /*if button search_lastname is push*/
   search_by_lastname.addEventListener('click',function(){
      change_css_button(search_by_lastname , input_lastname , selection_button , input_search);
   });

   /*if button search_email is push*/
   search_by_email.addEventListener('click',function(){
      change_css_button(search_by_email , input_email , selection_button , input_search);
   });

   /*if button search_date is push*/
   search_by_date.addEventListener('click',function(){
      change_css_button(search_by_date , input_date , selection_button , input_search);
   });




   function change_css_button(button , input , classButton , classInput){
      /*Loop for set defaults colors*/
      for(i = 0 ; i< classButton.length ; i++ ){
         classButton[i].style.background = 'black';
         classButton[i].style.color = "#AEBD38";
      }

      for(i = 0 ; i< classInput.length ; i++ ){
         classInput[i].style.display = 'none';
      }

      /*
      classButton.forEach(thisButton => {
         thisButton.style.background = 'black';
         thisButton.style.color = "#AEBD38";
      });
      
      classInput.forEach(thisInput => {
         thisInput.style.display = 'none';
      });
      */
      
      input.style.display = 'block';


      button.style.background = "#AEBD38";
      button.style.color = "black";
   }

});