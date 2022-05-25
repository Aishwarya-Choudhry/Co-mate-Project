<style type ="text/css">
  html{
    scroll-behavior: smooth;
  }
    *{margin:0 ; padding: 0; box-sizing: border-box; font-family: 'Mulish', sans-serif;}
    .nav_style{
       background-color: #a29bfe!important;
    }
    .nav_style a{ color: white;}
   
   .main_header{
       height: 450px;
       width: 100%;
   }
   .rightside h1{
       font-size : 3rem;
   }
   
    /* .corona1_rot {
      -webkit-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            transform: rotate(180deg);
           
} */
.corona1_rot{
  animation: rotation 8s infinite linear;
}

@keyframes rotation {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(359deg);
  }
}

   .leftside img{ animation: heartbeat 5s linear infinte; }
@keyframes heartbeat
   {
     0% 
    { transform: scale(.75)};
   20%
   { transform: scale( 1)};
   40%
   { transform: scale(.75)};
   60% 
    {transform: scale(1)};
   80%
   {transform: scale(.75)};
   100%
   {transform: scale(.75)};
}
 /************corona update*********/ 
  .corona_update{
   margin: 0 0 30px 0;
  }
  .corona_update h3{color: #ff7675}
  .corona_update h1{font size: 2rem; text-align:center;}
  
/*//////////// about section //////*/
.sub_section{
   background-color: #fbfafd;
}
/*//////////// footer///////*/


}
 /********top scroll***** */
 #mybtn {
   display: none;
   position: fixed;
   bottom: 30px;
   right: 40px;
   z-index: 99;
   border: none;
   outline: none;
   background-color: #00A8FF;
   color: white;
   cursor: pointer;
   padding: 10px;
   border-radius: 10px;

 }
 #myBtn: hover {
   background: #606060;
 }

</style>